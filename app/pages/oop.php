<?php

declare(strict_types=1);
// oop.php
// This file is intended to demonstrate Object-Oriented Programming (OOP) concepts in PHP.
// It is currently empty and can be filled with OOP examples as needed.
// You can define classes, create objects, and demonstrate inheritance, encapsulation, and polymorphism
// as part of your OOP learning process.
// افضل طريقة لانشاء الكلاس ان يكون كل كلاس في ملف منفصل
class Employee
{
    public string $name;
    public int $age;
    public string $position;
    private float $salary;

    public function __construct(string $name, int $age, string $position)
    {
        $this->name = $name;
        $this->age = $age;
        $this->position = $position;
    }

    public function setSalary(float $salary): Employee
    {
        $this->salary = $salary;
        return $this;
    }
    public function AddTax(float $taxRate): Employee
    {
        $this->salary += $this->salary * $taxRate / 100;
        return $this;
    }
    public function ApplyDiscount(float $discountRate): Employee
    {
        $this->salary -= $this->salary * $discountRate / 100;
        return $this;
    }
    public function __destruct()
    {
        //يستخدم في الاتصال بقاعدة البيانات و انهاء الاتصال و ممكن في الاعاب
        echo "destruct";
    }
    public function getSalary(): float
    {

        return $this->salary;
    }
}


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
    $employee = new Employee("John Doe", 30, "Software Engineer")
        ->setSalary(5200)
        ->AddTax(15)->ApplyDiscount(10);
    echo "Employee Name: " . $employee->name . "<br>";
    echo "Employee Age: " . $employee->age . "<br>";
    echo "Employee Position: " . $employee->position . "<br>";

    echo    $employee->getSalary();

    $calling = 'Employee';

    $employee1 = new $calling("mido", 37, "web dev");

    echo "<h2>object casting</h2> ";

    $arr =[1,2,3,4,5,6,7];

    $obj = (object) $arr; 












    ?>


</body>

</html>