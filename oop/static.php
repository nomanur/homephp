<?php

class First
{
    protected static $staticprop = "this is static";

    public static function firstfunction()
    {
        echo self::$staticprop;
    }
}

First::firstfunction();
