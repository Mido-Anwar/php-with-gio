<?php

declare(strict_types=1);
require "../../vendor/autoload.php";
// alias name for classes;
use \App\Employee\ProfileClass;
use \App\Employee\EmployeeClass;
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


    // Example of creating an object of the Employee class
    $employee = new EmployeeClass("John Doe", 30, "Software Engineer")
        ->setSalary(5200)
        ->AddTax(15)->ApplyDiscount(10);
    echo "Employee Name: " . $employee->name . "<br>";
    echo "Employee Age: " . $employee->age . "<br>";
    echo "Employee Position: " . $employee->position . "<br>";
    echo "<pre>";
    echo    $employee->getSalary() . "<br>";
    var_dump($employee->AddTax(12));
    echo "</pre>";

    //  $calling = 'App\Employee\Employee';

    // $employee1 = new $calling("mido", 37, "web dev");

    echo "<h2>object casting</h2> ";

    $arr = [1, 2, 3, 4, 5, 6, 7];
    echo "<pre>";

    $obj = (object) $arr;
    var_dump($obj);
    var_dump(new ProfileClass("mido", 37, "web dev"));
    echo "</pre>";

    echo "<br>";
    echo "<pre>";
    // global name space built in class
    var_dump(new \DateTime());
    echo "</pre>";




    ?>


</body>

</html>