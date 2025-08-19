<?php

use App\Config\Config;
use App\Router\Router;
use App\Controller\Home;
use App\View\View;
use App\DataBase\DataBase;
$router = new Router();
try {
    $router->get("/", [Home::class, 'index'])
        ->get("/home/create", [Home::class, 'create'])
        ->get("/download", [Home::class, 'download'])
        ->get("/home/imageupload", [Home::class, 'filesUpload'])
        ->post("/home/upload", [Home::class, 'upload'])
        ->post("/home/create", [Home::class, 'store'])
        ->get("/about", fn() => "دي صفحة about");

    echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
} catch (App\Router\RouteFoundException $e) {
    header('HTTP/1.1 404 Not Found');

    echo View::make('404');
}
$db= new DataBase(Config::$envFile);


