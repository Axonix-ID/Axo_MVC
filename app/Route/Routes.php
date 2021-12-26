<?php

use App\System\View;
use App\System\Route;
use App\System\Env;

/**
 * | Routing system
 * 
 * | example :
 * | $route->add('/URL', function() {}, 'GET');
 */

$route = new Route();

$route->add("/", function () {
    View::render("index", [
        "axo" => Env::get("AXO_ENV")
    ]);
}, "get");

$route->run();
