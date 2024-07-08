<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        // Handles trusted proxies.
        \App\Http\Middleware\TrustProxies::class,
        // Handles Cross-Origin Resource Sharing (CORS).
        \Illuminate\Http\Middleware\HandleCors::class,
        // Prevents requests during maintenance mode.
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
        // Validates the size of POST requests.
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        // Trims whitespace from strings.
        \App\Http\Middleware\TrimStrings::class,
        // Converts empty strings to null.
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * These middleware are applied to groups of routes.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            // Encrypts cookies.
            \App\Http\Middleware\EncryptCookies::class,
            // Adds cookies to the response.
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            // Starts the session.
            \Illuminate\Session\Middleware\StartSession::class,
            // Uncomment if you need to authenticate the session.
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            // Shares error messages from the session.
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            // Verifies the CSRF token.
            \App\Http\Middleware\VerifyCsrfToken::class,
            // Substitutes route model bindings.
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            // Handles Inertia.js requests.
            \App\Http\Middleware\HandleInertiaRequests::class,
        ],

        'api' => [
            // Throttles API requests.
            'throttle:api',
            // Substitutes route model bindings.
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        // Handles authentication.
        'auth' => \App\Http\Middleware\Authenticate::class,
        // Handles HTTP Basic authentication.
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        // Sets cache headers.
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        // Authorizes actions.
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        // Redirects if authenticated.
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        // Requires password confirmation.
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        // Validates signed URLs.
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        // Throttles requests.
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        // Ensures email is verified.
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
    ];
}
