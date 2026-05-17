<?php 


// src/EventListener/AuthenticationExceptionListener.php

namespace App\EventListener;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;

class AuthenticationExceptionListener
{
    private $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function onKernelException(ExceptionEvent $event)
    {
        $exception = $event->getThrowable();

        if ($exception instanceof AuthenticationException) {
            // Handle AuthenticationException
            $response = new RedirectResponse($event->getRequest()->getBasePath() . '/account/app-login.html');
            $event->setResponse($response);
        } elseif ($exception instanceof HttpException) {
            // Handle other HttpExceptions
            $statusCode = $exception->getStatusCode();
            $response = new RedirectResponse($event->getRequest()->getBasePath() . '/account/app-login.html');
            $event->setResponse($response);
        }
    }
}
