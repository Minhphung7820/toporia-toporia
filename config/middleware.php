<?php

declare(strict_types=1);

/**
 * Middleware Configuration
 *
 * Configure global middleware and middleware aliases here.
 */

use App\Presentation\Http\Middleware\AddSecurityHeaders;
use App\Presentation\Http\Middleware\Authenticate;
use App\Presentation\Http\Middleware\LogRequest;
use App\Presentation\Http\Middleware\ValidateJsonRequest;
use Toporia\Framework\Http\Middleware\HandleCors;

return [
    /*
    |--------------------------------------------------------------------------
    | Middleware Groups
    |--------------------------------------------------------------------------
    */
    'groups' => [
        'web' => [
            AddSecurityHeaders::class,
            // Uncomment below when you have database configured:
            // StartSession::class,
            // CsrfProtection::class,
        ],

        'api' => [
            HandleCors::class,
            ValidateJsonRequest::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Middleware Aliases
    |--------------------------------------------------------------------------
    */
    'aliases' => [
        'auth' => Authenticate::class,
        'log' => LogRequest::class,
        'security' => AddSecurityHeaders::class,
        'json' => ValidateJsonRequest::class,
        'cors' => HandleCors::class,
    ],
];
