<?php


use App\Router\Router;
use App\Controller\Home;
use App\Model\Model;
use App\Model\User;
use App\View\View;


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$router = new Router();
try {
    $router->get("/dashboard", [Home::class, 'index'])
        ->get("/", fn() => View::make('welcome'))
        ->get("/Pages/basicsofphp.php", fn() => View::make('Pages/basicsofphp'))
        ->get("/Pages/variables-typeCassting.php", fn() => View::make('Pages/variables-typeCassting'))
        ->get("/Pages/arrays.php", fn() => View::make('Pages/arrays'))
        ->get("/Pages/oprator.php", fn() => View::make('Pages/oprator'))
        ->get("/Pages/controlStructures.php", fn() => View::make('Pages/controlStructures'))
        ->get("/Pages/functions.php", fn() => View::make('Pages/functions'))
        ->get("/Pages/bulitInFunction.php", fn() => View::make('Pages/bulitInFunction'))
        ->get("/Pages/fileSystem.php", fn() => View::make('Pages/fileSystem'))
        ->get("/Pages/ex1.php", fn() => View::make('Pages/ex1'))
        ->get("/Pages/OopLessons.php", fn() => View::make('Pages/OopLessons'))
        ->get("/Pages/datetime.php", fn() => View::make('Pages/datetime'))
        ->get("/Pages/superglobals.php", fn() => View::make('Pages/superglobals'))
        ->get("/home/create", [Home::class, 'create'])
        ->get("/download", [Home::class, 'download'])
        ->get("/home/imageupload", [Home::class, 'filesUpload'])
        ->post("/home/upload", [Home::class, 'upload'])
        ->post("/home/create", [Home::class, 'store']);


    echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
} catch (App\Router\RouteFoundException $e) {
    header('HTTP/1.1 404 Not Found');

    echo View::make('404');
}


 // 127.0.0.1
 // mydb// For debugging purposes, to check the database connection
