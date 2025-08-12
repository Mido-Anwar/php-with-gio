<?php

namespace App\CoffeeMaker;

use App\CoffeeMaker\CappuccinoTrait;
use App\CoffeeMaker\CoffeeMaker;
use App\CoffeeMaker\LatteTrait;
/**
 * 
 * 
 * @param
 * @return
 * 
 */
class AllCoffeesWay extends CoffeeMaker
{

    use CappuccinoTrait;

    use LatteTrait;
}
