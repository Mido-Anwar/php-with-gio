<?php
require_once "vendor/autoload.php";
use App\CoffeeMaker\CoffeeMaker;
use App\CoffeeMaker\Cappuccino;
use App\CoffeeMaker\Latte;
use App\CoffeeMaker\AllCoffeesWay;
use App\Employee\EmployeeClass;

class A{
    public static $name ='A';

    public static function get_name():string{
        // late static binding
        return static::$name;
    }
    public static function make(){
        // return same object
        return static::class;
    }
}

class B extends A{
    public static $name ='B';

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sass/style.css">
    <title>basics of php </title>
</head>

<body>
    <div class="links">
        <a href="app/Pages/basicsofphp.php"> basic of php </a>
        <a href="app/Pages/variables-typeCassting.php"> variables & type casting </a>
        <a href="app/Pages/arrays.php"> arrays </a>
        <a href="app/Pages/oprator.php"> operators </a>
        <a href="app/Pages/controlStructures.php"> control structures </a>
        <a href="app/Pages/functions.php"> functions </a>
        <a href="app/Pages/bulitInFunction.php"> built in functions </a>
        <a href="app/Pages/fileSystem.php"> file system </a>
        <a href="app/Pages/ex1.php"> exercise 1 </a>
        <a href="app/Pages/OopLessons.php"> oop </a>

    </div>
<?php
//echo(A::get_name()).PHP_EOL;
//echo(B::get_name()).PHP_EOL;
//var_dump(A::make());
//var_dump(B::make());

$coffee = new CoffeeMaker();
echo $coffee->makeCoffee().'<br>';
echo "*____________________* \n";
$cappuccino = new Cappuccino();
echo $cappuccino->makeCoffee().'<br>';
echo $cappuccino->cappuccinoMaker().'<br>';
echo "*____________________* \n";

$latte = new Latte();
echo $latte ->makeCoffee().'<br>';
echo $latte->latteMaker().'<br>';
echo "*____________________* \n";

$allCoffee = new AllCoffeesWay();
echo $allCoffee->makeCoffee().'<br>';
echo $allCoffee->latteMaker().'<br>';
echo $allCoffee->cappuccinoMaker().'<br>';


echo "*____________________* \n";








?>

</body>

</html>