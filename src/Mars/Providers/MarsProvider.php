<?php

namespace Mars\Providers;

use League\Container\ServiceProvider\AbstractServiceProvider;

abstract class MarsProvider extends AbstractServiceProvider
{
    public function provides(string $id): bool
    {
        $services = [];

        return in_array($id, $services);
    }
}
