<?php
namespace App\CoffeeMaker;
use App\CoffeeMaker\CappuccinoTrait;
use App\CoffeeMaker\CoffeeMaker;
use App\CoffeeMaker\LatteTrait;

class AllCoffeesWay extends CoffeeMaker
{

    use CappuccinoTrait{
     machineName as public;
    };
    use LatteTrait;
}
