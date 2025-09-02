<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h1>PHP Superglobals</h1>";

    echo '$_SERVER<br>';
    echo "<pre>";
    var_dump(
        $_SERVER
    );
    echo "<pre/>";
    echo "<hr>";
    echo '$_GET<br>';
    echo "<pre>";
    var_dump(
        $_GET
    );
    echo "<pre/>";
    echo "<hr>";
    echo '$_POST<br>';
    echo "<pre>";
    var_dump(
        $_POST
    );
    echo "<pre/>";
    echo "<hr>";
    echo '$_REQUEST<br>';
    echo "<pre>";
    var_dump(
        $_REQUEST
    );
    echo "<pre/>";
    echo "<hr>";
    echo '$_FILES<br>';
    echo "<pre>";
    var_dump(
        $_FILES
    );
    echo "<pre/>";
    echo "<hr>";
    echo '$_ENV<br>';
    echo "<pre>";
    var_dump(
        $_ENV
    );
    echo "<pre/>";
    echo "<hr>";
    echo '$_COOKIE<br>';
    echo "<pre>";
    var_dump(
        $_COOKIE


    );    echo "<pre/>";
    echo "<hr>";
    echo '$_SESSION<br>';
  //  session_start();
    $_SESSION   = ["user" => "John", "role" => "admin"];
    echo "<pre>";
    var_dump(
        $_SESSION
    );
    echo "<pre/>";
    echo "<hr>";
    echo "static variables<br>";
    function counter()
    {
        static $count = 0;
        $count++;
        return $count;
    }
    echo counter() . "<br>"; // Outputs: 1
    echo counter() . "<br>"; // Outputs: 2
    echo counter() . "<br>"; // Outputs: 3
    echo "lgs variables<br>";
    $x = 10;
    function test()
    {
        // echo $x; // This will cause an error because $x is not in the
        // function's scope
        global $x; // Use the global keyword to access the global variable
        echo $x; // Now this will work and output 10
    }
    test();
    echo "<br>";


    ?>
    <div>

    </div>
</body>

</html>