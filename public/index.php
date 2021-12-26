<?php

error_reporting(0);

require_once __DIR__ . "/../vendor/autoload.php";

$env = \Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$env->load();

require_once __DIR__ . "/../app/Route/Routes.php";
