<?php

namespace Mars\Framework\Interfaces;

interface ProviderInterface
{
    public function register();

    public function boot();
}
