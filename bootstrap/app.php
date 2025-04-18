<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'App' => Illuminate\Support\Facades\App::class,
            'Arr' => Illuminate\Support\Arr::class,
            'Artisan' => Illuminate\Support\Facades\Artisan::class,
            'Auth' => Illuminate\Support\Facades\Auth::class,
            'Blade' => Illuminate\Support\Facades\Blade::class,
            'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
            'Bus' => Illuminate\Support\Facades\Bus::class,
            'Cache' => Illuminate\Support\Facades\Cache::class,
            'Config' => Illuminate\Support\Facades\Config::class,
            'Cookie' => Illuminate\Support\Facades\Cookie::class,
            'Crypt' => Illuminate\Support\Facades\Crypt::class,
            'DB' => Illuminate\Support\Facades\DB::class,
            'Eloquent' => Illuminate\Database\Eloquent\Model::class,
            'Event' => Illuminate\Support\Facades\Event::class,
            'File' => Illuminate\Support\Facades\File::class,
            'Gate' => Illuminate\Support\Facades\Gate::class,
            'Hash' => Illuminate\Support\Facades\Hash::class,
            'Lang' => Illuminate\Support\Facades\Lang::class,
            'Log' => Illuminate\Support\Facades\Log::class,
            'Mail' => Illuminate\Support\Facades\Mail::class,
            'Notification' => Illuminate\Support\Facades\Notification::class,
            'Password' => Illuminate\Support\Facades\Password::class,
            'Queue' => Illuminate\Support\Facades\Queue::class,
            'Redirect' => Illuminate\Support\Facades\Redirect::class,
            'Redis' => Illuminate\Support\Facades\Redis::class,
            'Request' => Illuminate\Support\Facades\Request::class,
            'Response' => Illuminate\Support\Facades\Response::class,
            'Route' => Illuminate\Support\Facades\Route::class,
            'Schema' => Illuminate\Support\Facades\Schema::class,
            'Session' => Illuminate\Support\Facades\Session::class,
            'Storage' => Illuminate\Support\Facades\Storage::class,
            'Str' => Illuminate\Support\Str::class,
            'URL' => Illuminate\Support\Facades\URL::class,
            'Validator' => Illuminate\Support\Facades\Validator::class,
            'View' => Illuminate\Support\Facades\View::class,
            'GeoIP' => \Torann\GeoIP\Facades\GeoIP::class,
        ]);

        $middleware->validateCsrfTokens(except: [
            '*'
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
