<?php

namespace Mars\Providers;

use League\Route\Router;
use League\Route\Strategy\ApplicationStrategy;

class RouteServiceProvider extends MarsProvider
{

    public function register(): void
    {
        $this->getContainer()->addShared(Router::class, function () {
            $strategy = new ApplicationStrategy();

            $router = new Router();

            $strategy->setContainer($this->container);

            $router->setStrategy($strategy);

            return $router;
        });
    }
}