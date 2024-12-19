<?php

namespace Mars\Framework\Facades\Abstracts;

/**
 * @property $container
 */
abstract class Facade
{
    public static function setContainer($container)
    {
        static::$container = $container;
    }

    public static function getFacadeInstance()
    {
        $accessor = static::getFacadeAccessor();

        return static::$container[$accessor];
    }

    public static function __callStatic($method, $args)
    {
        $instance = static::getFacadeInstance();

        return $instance->$method(...$args);
    }
}