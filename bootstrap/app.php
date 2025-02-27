<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Add global middleware
        $middleware->web([
            \Illuminate\Http\Middleware\HandleCors::class, // Enable CORS for web routes
            // Other web middleware...
        ]);
    
        $middleware->api([
            \Illuminate\Http\Middleware\HandleCors::class, // Enable CORS for API routes
            // Other API middleware...
        ]);
    
        // Add middleware groups or aliases if needed
        $middleware->alias([
            'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
            'guest' => \Illuminate\Auth\Middleware\RedirectIfAuthenticated::class,
        ]);
    })

    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
