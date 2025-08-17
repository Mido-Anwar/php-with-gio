<?php
require_once "vendor/autoload.php";

session_start();

use App\Home\Home;
use App\Router\Router;

$router = new Router();
$router->get("/", [Home::class, 'index'])
    ->get("/home/create", [Home::class, 'create'])
    ->post("/home/create", [Home::class, 'store'])
    ->get("/about", fn() => "دي صفحة about");

echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));



