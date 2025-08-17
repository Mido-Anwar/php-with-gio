<?php
require_once "vendor/autoload.php";

session_start();

use App\Home\Home;
use App\Router\Router;
use App\Config\Config;
$router = new Router();
$router->get("/", [Home::class, 'index'])
    ->get("/home/create", [Home::class, 'create'])
    ->get("/home/imageupload", [Home::class, 'filesUpload'])
    ->post("/home/upload", [Home::class, 'upload'])
    ->post("/home/create", [Home::class, 'store'])
    ->get("/about", fn() => "دي صفحة about");

echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
echo Config::$storagePath;


