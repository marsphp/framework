<?php

namespace Mars\Framework\Facades;

use Mars\Framework\Facades\Abstracts\Facade;

class Str extends Facade {
    public function getFacadeAccessor(): string
    {
        return 'str';
    }
}