<?php

namespace Mars\Providers;

use League\Route\Router;

class AppServiceProvider extends MarsProvider
{
    protected array $provides = [
        Router::class,
        'response',
        'request',
    ];

    public function register(): void
    {
      //
    }
}