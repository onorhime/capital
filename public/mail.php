<?php

require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

if (!function_exists('apex_mail_load_env')) {
    function apex_mail_load_env(): void
    {
        static $loaded = false;

        if ($loaded) {
            return;
        }

        $loaded = true;
        $envFiles = [
            dirname(__DIR__) . '/.env',
            __DIR__ . '/.env',
        ];

        foreach ($envFiles as $envFile) {
            if (!is_readable($envFile)) {
                continue;
            }

            foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
                $line = trim($line);
                if ($line === '' || str_starts_with($line, '#') || !str_contains($line, '=')) {
                    continue;
                }

                [$key, $value] = array_map('trim', explode('=', $line, 2));
                if ($key === '' || getenv($key) !== false) {
                    continue;
                }

                if (
                    (str_starts_with($value, '"') && str_ends_with($value, '"')) ||
                    (str_starts_with($value, "'") && str_ends_with($value, "'"))
                ) {
                    $value = substr($value, 1, -1);
                }

                putenv($key . '=' . $value);
                $_ENV[$key] = $value;
                $_SERVER[$key] = $value;
            }
        }
    }
}

if (!function_exists('apex_mail_env')) {
    function apex_mail_env(string $key, string $default = ''): string
    {
        apex_mail_load_env();

        $value = getenv($key);
        if ($value !== false && $value !== '') {
            return $value;
        }

        if (!empty($_ENV[$key])) {
            return $_ENV[$key];
        }

        if (!empty($_SERVER[$key])) {
            return $_SERVER[$key];
        }

        return $default;
    }
}

if (!function_exists('apex_mail_from_address')) {
    function apex_mail_from_address(): string
    {
        return apex_mail_env('MAIL_FROM_ADDRESS', 'noreply@localhost');
    }
}

if (!function_exists('apex_mail_from_name')) {
    function apex_mail_from_name(): string
    {
        return apex_mail_env('MAIL_FROM_NAME', 'Apex Capital');
    }
}

if (!function_exists('apex_mail_admin_address')) {
    function apex_mail_admin_address(): string
    {
        return apex_mail_env('MAIL_ADMIN_ADDRESS', apex_mail_from_address());
    }
}

if (!function_exists('apex_mail_message')) {
    function apex_mail_message(string $title, string $message): string
    {
        $safeTitle = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
        $safeMessage = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

        return '<div style="font-family:Arial,sans-serif;line-height:1.6;color:#111827">'
            . '<h2 style="margin:0 0 16px;color:#111827">Apex Capital</h2>'
            . '<h3 style="margin:0 0 12px;color:#111827">' . $safeTitle . '</h3>'
            . '<p style="margin:0">' . $safeMessage . '</p>'
            . '</div>';
    }
}

if (!function_exists('sendmail')) {
    function sendmail($message, $receiver, $name, $subject)
    {
        $mail = new PHPMailer(true);
        $dsn = apex_mail_env('MAILER_DSN', 'null://null');
        $parts = parse_url($dsn) ?: [];

        try {
            if (($parts['scheme'] ?? 'null') === 'null') {
                $headers = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
                $headers .= 'From: ' . apex_mail_from_name() . ' <' . apex_mail_from_address() . '>' . "\r\n";

                return mail($receiver, $subject, $message, $headers);
            }

            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Host = $parts['host'] ?? 'localhost';
            $mail->Port = (int) ($parts['port'] ?? 25);
            $mail->SMTPAuth = isset($parts['user']) || isset($parts['pass']);
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';

            if (($parts['scheme'] ?? '') === 'smtps' || $mail->Port === 465) {
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            } elseif ($mail->Port === 587 || (($parts['query'] ?? '') === 'encryption=tls')) {
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            }

            if (isset($parts['user'])) {
                $mail->Username = rawurldecode($parts['user']);
            }

            if (isset($parts['pass'])) {
                $mail->Password = rawurldecode($parts['pass']);
            }

            $mail->setFrom(apex_mail_from_address(), apex_mail_from_name());
            $mail->addReplyTo(apex_mail_from_address(), apex_mail_from_name());
            $mail->addAddress($receiver, $name ?: '');
            $mail->Subject = $subject;
            $mail->Body = $message;
            $mail->AltBody = trim(strip_tags(str_replace(['<br>', '<br/>', '<br />'], "\n", $message)));

            return $mail->send();
        } catch (Throwable $exception) {
            error_log('Apex Capital mail failed: ' . $exception->getMessage());
            return false;
        }
    }
}
