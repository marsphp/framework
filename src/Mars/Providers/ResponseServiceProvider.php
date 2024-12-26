<?php

namespace Mars\Providers;

use Laminas\Diactoros\Response;

class ResponseServiceProvider extends MarsProvider
{

    public function register(): void
    {
        $this->getContainer()->addShared('response', Response::class);
    }
}