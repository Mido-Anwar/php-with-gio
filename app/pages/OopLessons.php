<?php

declare(strict_types=1);
require "../../vendor/autoload.php";


// oop.php
// This file is intended to demonstrate Object-Oriented Programming (OOP) concepts in PHP.
// It is currently empty and can be filled with OOP examples as needed.
// You can define classes, create objects, and demonstrate inheritance, encapsulation, and polymorphism
// as part of your OOP learning process.
// افضل طريقة لانشاء الكلاس ان يكون كل كلاس في ملف منفصل

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>

<body>
    <?php




    echo "*____________________* <br>";

    echo "*____________________* <br>";

    $anony = new class {};
    var_dump(get_class($anony)) . '<br>';
    ?>


</body>

</html>