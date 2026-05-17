<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/withdrawallist' => [[['_route' => 'withdrawallist', '_controller' => 'App\\Controller\\AdminController::withdrawals'], null, null, null, false, false, null]],
        '/admin/depositlist' => [[['_route' => 'depositlist', '_controller' => 'App\\Controller\\AdminController::deposits'], null, null, null, false, false, null]],
        '/admin/investments' => [[['_route' => 'investments', '_controller' => 'App\\Controller\\AdminController::investments'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, true, false, null]],
        '/dashboard/deposit' => [[['_route' => 'deposit', '_controller' => 'App\\Controller\\DashboardController::deposit'], null, null, null, false, false, null]],
        '/dashboard/payment' => [[['_route' => 'payment', '_controller' => 'App\\Controller\\DashboardController::payment'], null, null, null, false, false, null]],
        '/dashboard/transaction' => [[['_route' => 'transaction', '_controller' => 'App\\Controller\\DashboardController::transaction'], null, null, null, false, false, null]],
        '/dashboard/withdrawal' => [[['_route' => 'withdrawal', '_controller' => 'App\\Controller\\DashboardController::withdrawal'], null, null, null, false, false, null]],
        '/dashboard/invest' => [[['_route' => 'invest', '_controller' => 'App\\Controller\\DashboardController::invest'], null, null, null, false, false, null]],
        '/dashboard/plans' => [[['_route' => 'plans', '_controller' => 'App\\Controller\\DashboardController::plans'], null, null, null, false, false, null]],
        '/dashboard/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\DashboardController::profile'], null, null, null, false, false, null]],
        '/dashboard/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\DashboardController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\HomeController::regster'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\HomeController::login'], null, null, null, false, false, null]],
        '/email' => [[['_route' => 'email', '_controller' => 'App\\Controller\\HomeController::email'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/profile/([^/]++)(*:30)'
                .'|/dashboard/(?'
                    .'|transfer/([^/]++)(*:68)'
                    .'|plan/([^/]++)(*:88)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'profileview', '_controller' => 'App\\Controller\\AdminController::profile'], ['id'], null, null, false, true, null]],
        68 => [[['_route' => 'transfer', '_controller' => 'App\\Controller\\DashboardController::transfer'], ['mode'], null, null, false, true, null]],
        88 => [
            [['_route' => 'plan', '_controller' => 'App\\Controller\\DashboardController::plan'], ['plan'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
