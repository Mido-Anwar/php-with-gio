<?php
namespace App\CoffeeMaker;



trait CappuccinoTrait
{
    public function cappuccinoMaker()
    {
        return static::class . ' is making Cappuccino' . PHP_EOL;
    }
}
