<?php

declare(strict_types=1);

namespace App\Home;

use App\Config\Config;

class Home
{

    public  function index(): string
    {

        return <<<HTML
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sass/style.css">
    <title>basics of php </title>
</head>

<body>
    <div class="links">
        <a href="app/Pages/basicsofphp.php"> basic of php </a>
        <a href="app/Pages/variables-typeCassting.php"> variables & type casting </a>
        <a href="app/Pages/arrays.php"> arrays </a>
        <a href="app/Pages/oprator.php"> operators </a>
        <a href="app/Pages/controlStructures.php"> control structures </a>
        <a href="app/Pages/functions.php"> functions </a>
        <a href="app/Pages/bulitInFunction.php"> built in functions </a>
        <a href="app/Pages/fileSystem.php"> file system </a>
        <a href="app/Pages/ex1.php"> exercise 1 </a>
        <a href="app/Pages/OopLessons.php"> oop </a>
        <a href="app/Pages/datetime.php">Date Time Object</a>
        <a href="app/Pages/superglobals.php">Php Super Globals</a>
    </div>
</body>
</html>
HTML;
    }
    public  function create(): string
    {
        return '       
            <form action="/home/create" method="post">
            <label for="amount">amount</label>
            <input name="amount" type="text">
            </form> 
               ';
    }
    public  function store()
    {
        $amount = $_POST['amount'];
        var_dump($amount);
    }

    public function filesUpload(): string
    {
        return <<< FORM
    <form action="/home/upload" method="post" enctype="multipart/form-data" >
    <input type="file" name="image" id="">
    <button type="submit">upload</button>
     </form>
    FORM;
    }
    public function upload()
    {   
        var_dump(Config::$storagePath);
        $filePath = Config::$storagePath . DIRECTORY_SEPARATOR . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], $filePath);
    }
}
