<?php

namespace Mars\Facades;

class Route extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'route';
    }
}