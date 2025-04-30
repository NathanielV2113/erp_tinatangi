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
        $middleware->alias([
            'authenticate' => \App\Http\Middleware\Authenticate::class,
            'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
            'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
            'role_or_permission' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class,
            'isAdmin' => \App\Http\Middleware\AdminMiddleware::class,
            'isHrm' => \App\Http\Middleware\HrmMiddleware::class,
            'isFrm' => \App\Http\Middleware\FrmMiddleware::class,
            'isScm' => \App\Http\Middleware\ScmMiddleware::class,
            'isMfr' => \App\Http\Middleware\MfrMiddleware::class,
            'isCrm' => \App\Http\Middleware\CrmMiddleware::class,
            'isEmployee' => \App\Http\Middleware\EmployeeMiddleware::class,
            'isUser' => \App\Http\Middleware\UserMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
