<?php

namespace App\System;

class Env
{
    static function get($env)
    {
        return $_ENV[$env];
    }
}
