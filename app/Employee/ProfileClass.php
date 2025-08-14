<?php

namespace App\Employee;

class ProfileClass 
{
    public string $name;
    public int $age;
    public string $position;
    public float $salary;
    public const  STATUS = "paid";
    public static int $count = 0;
    public function __construct(string $name, int $age, string $position)
    {
        $this->name = $name;
        $this->age = $age;
        $this->position = $position;
        self::$count++;
    }

    public function setSalary(float $salary): Profileclass
    {
        $this->salary = $salary;
        return $this;
    }
    public function AddTax(float $taxRate): Profileclass
    {
        $this->salary += $this->salary * $taxRate / 100;
        return $this;
    }
    public function ApplyDiscount(float $discountRate): Profileclass
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
