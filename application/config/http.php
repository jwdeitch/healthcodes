<?php
/**
 * Http dispatcher configuration. Includes:
 * - base application path
 * - isolation mode, when isolation is enable http component will handle all inner exceptions using
 *   snapshots, in opposite case exceptions will be passed on higher level and can be handled
 *   using default exception handler, when isolation is turned off some middlewares may not
 *   finish their work
 * - exposeErrors flag, if true snapshots will be rendered to client
 * - CookieManager middleware settings, default domain and protection method
 * - headers for initial http response
 * - set of default middlewares to to applied to every request and response
 * - default router class and settings
 * - association between http errors and view name to be used to render them to client
 */
use Spiral\Http;
use Spiral\Http\Middlewares;

return [
    'basePath'     => '/',
    'isolate'      => true,
    'exposeErrors' => true,
    'cookies'      => [
        'domain' => null,
        'method' => 'encrypt'
    ],
    'headers'      => [
        'Content-Type' => 'text/html; charset=UTF-8'
    ],
    'endpoints'    => [],
    'middlewares'  => [
        \Spiral\Profiler\Profiler::class,
        Http\Cookies\CookieManager::class,
//        Middlewares\CsrfFilter::class,
        Middlewares\JsonParser::class,
        \Spiral\Session\Http\SessionStarter::class
    ],
    'router'       => [
        'class'   => Http\Routing\Router::class,
        'default' => [
            'pattern'     => '[<controller>[/<action>[/<id>]]]',
            'namespace'   => 'Controllers',
            'postfix'     => 'Controller',
            'defaults'    => [
                'controller' => 'home'
            ],
            'controllers' => [
                'index' => Controllers\HomeController::class
            ]
        ]
    ],
    'httpErrors'   => [
        400 => 'spiral:http/badRequest',
        403 => 'spiral:http/forbidden',
        404 => 'spiral:http/notFound',
        500 => 'spiral:http/serverError',
    ]
];
