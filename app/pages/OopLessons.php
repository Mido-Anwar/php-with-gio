<?php

declare(strict_types=1);
require "../../vendor/autoload.php";
// alias name for classes;
use \App\Employee\ProfileClass;
use \App\Employee\EmployeeClass;
use \App\Employee\MangerClass;
use App\CoffeeMaker\CoffeeMaker;
use App\CoffeeMaker\Cappuccino;
use App\CoffeeMaker\Latte;
use App\CoffeeMaker\AllCoffeesWay;

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
    $employee = new EmployeeClass("", 30, "Software Engineer")
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


    var_dump(ProfileClass::STATUS);
    echo ProfileClass::class . "<br>";

    echo "</pre>";
    echo "count of object " .  ProfileClass::$count;

    echo "<br>";
    echo "<pre>";
    // global name space built in class
    var_dump(new \DateTime());
    var_dump(new MangerClass("mido", 37, "web dev")->setSalary(400)->getSalary());

    echo "</pre>";
    $inps = [
        new \App\Inputs\Text("textmido"),
        new \App\Inputs\Radio("radiomido"),
        new \App\Inputs\Checkbox("checkmido"),


    ];
    foreach ($inps as $inp) {
        echo $inp->render() . "<br/>";
    }

    $coffee = new CoffeeMaker();
    echo $coffee->makeCoffee() . '<br>';
    echo "*____________________* \n";
    $cappuccino = new Cappuccino();
    echo $cappuccino->makeCoffee() . '<br>';
    echo $cappuccino->cappuccinoMaker() . '<br>';
    echo "*____________________* \n";

    $latte = new Latte();
    echo $latte->makeCoffee() . '<br>';
    echo $latte->latteMaker() . '<br>';
    echo "*____________________* \n";

    $allCoffee = new AllCoffeesWay();
    echo $allCoffee->makeCoffee() . '<br>';
    echo $allCoffee->latteMaker() . '<br>';
    echo $allCoffee->cappuccinoMaker() . '<br>';


    echo "*____________________* <br>";

    echo "*____________________* <br>";

    $anony = new class {};
    var_dump(get_class($anony)) . '<br>';
    ?>


</body>

</html>