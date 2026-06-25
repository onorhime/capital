<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/backend' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null]],
        '/backend/withdrawallist' => [[['_route' => 'withdrawallist', '_controller' => 'App\\Controller\\AdminController::withdrawals'], null, null, null, false, false, null]],
        '/backend/depositlist' => [[['_route' => 'depositlist', '_controller' => 'App\\Controller\\AdminController::deposits'], null, null, null, false, false, null]],
        '/backend/investments' => [[['_route' => 'investments', '_controller' => 'App\\Controller\\AdminController::investments'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/backend/profile/([^/]++)(*:227)'
                .'|/dashboard/(?'
                    .'|transfer/([^/]++)(*:266)'
                    .'|plan/([^/]++)(*:287)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        227 => [[['_route' => 'profileview', '_controller' => 'App\\Controller\\AdminController::profile'], ['id'], null, null, false, true, null]],
        266 => [[['_route' => 'transfer', '_controller' => 'App\\Controller\\DashboardController::transfer'], ['mode'], null, null, false, true, null]],
        287 => [
            [['_route' => 'plan', '_controller' => 'App\\Controller\\DashboardController::plan'], ['plan'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
