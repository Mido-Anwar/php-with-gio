<?php


use App\Router\Router;
use App\Controller\UserController;
use App\Model\Model;
use App\Model\User;
use App\View\View;


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$router = new Router();
try {
    $router->get("/dashboard", [UserController::class, 'index'])
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
        ->get("/user/create", [UserController::class, 'create'])
        ->get("/download", [UserController::class, 'download'])
        ->get("/user/imageupload", [UserController::class, 'filesUpload'])
        ->post("/user/upload", [UserController::class, 'upload'])
        ->post("/user/store", [UserController::class, 'store'])
         ->get("/user/edit/", [UserController::class, 'edit'])
        ->post("/user/update/", [UserController::class, 'update'])
        ->post("/user/delete/{id}", [UserController::class, 'delete']);

    echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
} catch (App\Router\RouteFoundException $e) {
    header('HTTP/1.1 404 Not Found');

    echo View::make('404');
}


 // 127.0.0.1
 // mydb// For debugging purposes, to check the database connection
