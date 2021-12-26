<?php

use App\System\Route;

/**
 * | Routing system
 * 
 * | example :
 * | $route->add('/URL', function() {}, 'GET');
 * 
 * | Parameters 1 => $uri | Types : string | Examples : '/'
 * | Parameters 2 => $callback | Types : Closure | Examples : 'function() {}'
 * | Parameters 3 => $method | Types : String | Examples : 'GET' or 'POST' or 'PUT' or 'PATCH' or 'DELETE', 'HEAD'
 */

$route = new Route();

$route->add("/", function () {
    return Route::render("index");
}, "get");

$route->run();
