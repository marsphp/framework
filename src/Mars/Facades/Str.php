<?php

namespace Mars\Facades;

use Mars\Facades\Abstracts\Facade;

class Str extends Facade {
    public function getFacadeAccessor(): string
    {
        return 'str';
    }
}