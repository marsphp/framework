<?php

namespace Mars\Facades;

class Pipeline extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'pipeline';
    }
}