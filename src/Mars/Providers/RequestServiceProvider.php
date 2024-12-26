<?php

namespace Mars\Providers;

use Laminas\Diactoros\Request;
use Laminas\Diactoros\ServerRequestFactory;

class RequestServiceProvider extends MarsProvider
{

    public function register(): void
    {
        $this->getContainer()->addShared('request', function () {
            return ServerRequestFactory::fromGlobals(
                $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
            );
        });
    }
}