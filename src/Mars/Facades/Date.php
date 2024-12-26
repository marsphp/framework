<?php

namespace Mars\Facades;

class Date extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'date';
    }
}