<?php

namespace App\Enums;

class Guard
{
    protected static $guards = ['web', 'admin', 'customer'];

    public static function list()
    {
        return self::$guards;
    }
}