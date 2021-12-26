<?php

namespace App\System;

class Route
{
    public $route = [];

    /**
     * @return void
     */
    public function add(string $uri, $callback = null, $method = "GET")
    {
        $method = strtoupper($method);
        if ($_SERVER["REQUEST_METHOD"] == $method) {
            $this->route[$uri] = $callback;
        }
    }

    public function run()
    {
        $U = $_SERVER["REQUEST_URI"];
        $callback = null;

        $params = [];

        foreach ($this->route as $route => $handler) {
            if (preg_match("%^{$route}$%", $U, $matches) === 1) {
                $callback = $handler;
                unset($matches[0]);
                $params = $matches;
                break;
            }
        }


        if ($callback === null) {
            self::render("error/404", [
                "code" => 404,
                "uri" => $U,
                "method" => $_SERVER["REQUEST_METHOD"]
            ]);

            exit;
        } else {
            echo call_user_func($callback, ...$params);
        }
    }

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
