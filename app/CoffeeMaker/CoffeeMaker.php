<?php

namespace App\CoffeeMaker;


interface CoffeeMachine{

}

class CoffeeMaker {
   
    public static function makeCoffee(){
        return static::class . ' is making Coffee black'. PHP_EOL;
    }
}