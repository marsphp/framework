<?php

namespace Mars;

class Container
{
    private static $instance;

    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new \League\Container\Container();
        }

        return static::$instance;
    }

}