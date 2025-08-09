<?php
namespace App\CoffeeMaker;

trait LatteTrait{
       public function latteMaker($name =" "){
        return static::class . ' is making Latte'. "By  {$name}  " .'<br>';
    }
}