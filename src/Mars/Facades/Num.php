<?php

namespace Mars\Facades;

use Mars\Facades\Abstracts\Facade;

class Num extends Facade
{
    public function getFacadeAccessor(): string
    {
        return 'num';
    }
}