<?php

namespace App\Employee;


use APP\Employee\EmployeeIF;

class EmployeeClass implements EmployeeIF
{
    public string $name = "mido_anwar";
    public int $age;
    public string $position;
    private float $salary;
    private int $id;
    protected string $gender;

    public function __construct(string $name, int $age, string $position)
    {
        $this->name = $name;
        $this->age = $age;
        $this->position = $position;
    }
    public function bounceCollect()
    {
        return "hello";
    }

    public function setSalary(float $salary): EmployeeClass
    {
        $this->salary = $salary;
        return $this;
    }
    public function AddTax(float $taxRate): EmployeeClass
    {
        $this->salary += $this->salary * $taxRate / 100;
        return $this;
    }
    public function ApplyDiscount(float $discountRate): EmployeeClass
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
