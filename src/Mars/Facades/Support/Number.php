<?php

namespace Mars\Facades\Support;

class Number
{
    public static function format($number, $decimals = 2): string
    {
        return number_format($number, $decimals, '.', '');
    }
}