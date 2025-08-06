<?php
namespace App\CoffeeMaker;

trait LatteTrait{
       public function latteMaker(){
        return static::class . ' is making Latte' . PHP_EOL;
    }
}