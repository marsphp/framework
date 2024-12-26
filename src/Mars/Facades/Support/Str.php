<?php

namespace Mars\Facades\Support;

class Str
{
    /**
     * @param string $string
     *
     * @return string
     */
    public function reverse(string $string): string
    {
        return strrev($string);
    }

    /**
     * @param string $string
     *
     * @return string
     */
    public function capitalize(string $string): string
    {
        return ucfirst($string);
    }

    /**
     * @param string $string
     *
     * @return string
     */

    public function lower(string $string): string
    {
        return strtolower($string);
    }

    /**
     * @param string $string
     *
     * @return string
     */
    public function upper(string $string): string
    {
        return strtoupper($string);
    }

    /**
     * @param string $string
     *
     * @return int
     */
    public function length(string $string): int
    {
        return strlen($string);
    }

    /**
     * @param string $string
     * @param string $search
     * @param string $replace
     *
     * @return string
     */
    public function replace(string $string, string $search, string $replace): string
    {
        return str_replace($search, $replace, $string);
    }

    /**
     * @param string $string
     *
     * @return string
     */
    public function trim(string $string): string
    {
        return trim($string);
    }

    /**
     * @param string $string
     * @param int $start
     * @param int $length
     *
     * @return string
     */
    public function sub(string $string, int $start, int $length): string
    {
        return substr($string, $start, $length);
    }

    /**
     * @param string $string
     * @param string $substring
     *
     * @return bool
     */
    public function contains(string $string, string $substring): bool
    {
        return str_contains($string, $substring);
    }

    /**
     * @param string $string
     *
     * @return bool
     */
    public function empty(string $string): bool
    {
        return empty($string);
    }

    /**
     * @param string $string
     * @param string $delimiter
     *
     * @return array
     */
    public function split(string $string, string $delimiter): array
    {
        return explode($delimiter, $string);
    }

    /**
     * @param string $string1
     * @param string $string2
     *
     * @return string
     */
    public function concat(string $string1, string $string2): string
    {
        return $string1 . $string2;
    }

    /**
     * @param string $string
     *
     * @return bool
     */
    public function isNumeric(string $string): bool
    {
        return is_numeric($string);
    }

    /**
     * @param string $string
     *
     * @return bool
     */
    public function isEmail(string $string): bool
    {
        return filter_var($string, FILTER_VALIDATE_EMAIL) !== false;
    }
}