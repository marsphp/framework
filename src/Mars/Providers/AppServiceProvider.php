<?php

namespace Mars\Providers;

use FastRoute\RouteCollector;
use League\Route\Router;
use League\Route\Strategy\ApplicationStrategy;

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