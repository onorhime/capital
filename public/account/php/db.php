<?php
function apex_db_env(string $key, ?string $default = null): ?string
{
    $value = $_ENV[$key] ?? $_SERVER[$key] ?? getenv($key);
    if ($value !== false && $value !== null && $value !== '') {
        return (string) $value;
    }

    static $dotenv = null;
    if ($dotenv === null) {
        $dotenv = [];
        $dir = __DIR__;
        for ($i = 0; $i < 5; $i++) {
            $file = $dir.'/.env';
            if (is_readable($file)) {
                foreach (file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
                    $line = trim($line);
                    if ($line === '' || str_starts_with($line, '#') || !str_contains($line, '=')) {
                        continue;
                    }
                    [$name, $raw] = explode('=', $line, 2);
                    $dotenv[trim($name)] = trim(trim($raw), "\"'");
                }
                break;
            }
            $parent = dirname($dir);
            if ($parent === $dir) {
                break;
            }
            $dir = $parent;
        }
    }

    return $dotenv[$key] ?? $default;
}

function apex_db_config(): array
{
    $parsed = [];
    $databaseUrl = apex_db_env('DATABASE_URL', '');
    if ($databaseUrl !== '') {
        $parsed = parse_url($databaseUrl) ?: [];
    }

    return [
        'host' => apex_db_env('DB_HOST', $parsed['host'] ?? '127.0.0.1'),
        'user' => apex_db_env('DB_USER', isset($parsed['user']) ? rawurldecode($parsed['user']) : 'root'),
        'pass' => apex_db_env('DB_PASS', isset($parsed['pass']) ? rawurldecode($parsed['pass']) : ''),
        'name' => apex_db_env('DB_NAME', isset($parsed['path']) ? ltrim($parsed['path'], '/') : ''),
        'port' => (int) apex_db_env('DB_PORT', isset($parsed['port']) ? (string) $parsed['port'] : '3306'),
    ];
}

$db = apex_db_config();
$conn = new mysqli($db['host'], $db['user'], $db['pass'], $db['name'], $db['port']);
if ($conn->connect_error) {
    error_log('Database connection failed: '.$conn->connect_error);
    http_response_code(500);
    exit('Database connection failed.');
}
$conn->set_charset('utf8mb4');

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
?>
