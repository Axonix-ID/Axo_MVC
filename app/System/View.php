<?php

namespace App\System;

class View
{
    static function render($file, array $data = null)
    {
        if ($data != null) extract($data);

        ob_start();

        $render = function ($file) {
            require_once __DIR__ . "/../../public/Views/$file";
        };

        require_once __DIR__ . "/../../public/Views/$file.php";
    }
}
