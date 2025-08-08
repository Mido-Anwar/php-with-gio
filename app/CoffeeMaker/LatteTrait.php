<?php
namespace App\CoffeeMaker;

trait LatteTrait{
    protected string $machineName = 'Latte-Maker';
       public function latteMaker(){
        return static::class . ' is making Latte' . PHP_EOL;
    }
}