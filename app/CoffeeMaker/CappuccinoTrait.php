<?php
namespace App\CoffeeMaker;



trait CappuccinoTrait
{
    

    public function cappuccinoMaker($name =" ")
    {
        return static::class . ' is making Cappuccino '. " By  {$name}  " .'<br>';
    }

  
}
