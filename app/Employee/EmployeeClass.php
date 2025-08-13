<?php

namespace App\Employee;


use App\Employee\EmployeeIF;
use Exception;

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
        if(empty($this->name)){
            throw new \Exception('name empty');
        }
    }
    public function bounceCollect()
    {
        return "10+";
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
