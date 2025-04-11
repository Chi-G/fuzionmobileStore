<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\SetAdminSession;
use App\Http\Middleware\Authenticate;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: [

        ]);

        $middleware->alias([
            'auth' => Authenticate::class,
        ]);

        $middleware->group('admin', [
            SetAdminSession::class,
            Authenticate::class . ':admin',
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
