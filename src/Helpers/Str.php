<?php

namespace Mars\Framework\Helpers;

class Str
{
    /**
     * @param String $string
     * @return string
     */
    public function toUpper(String $string): string
    {
        return strtoupper($string);
    }
}