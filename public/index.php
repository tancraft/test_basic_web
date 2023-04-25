<?php

require_once __DIR__ . '/../autoload.php';

use App\Router;

$router = new Router();
$router->dispatch();
