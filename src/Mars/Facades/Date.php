<?php

namespace Mars\Facades;

use Mars\Facades\Abstracts\Facade;

class Date extends Facade
{
    public function getFacadeAccessor(): string
    {
        return 'date';
    }
}