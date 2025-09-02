<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?=loadCSS('sass/style.css')?>
    <title> Functions </title>
</head>

<body>


<div>
    <?php
    echo "<h1>Functions in PHP</h1>";
    echo "<h2> require - include - require_once - include_once</h2>";
    echo "<p>These are used to include files in PHP. The difference between them is how they handle file inclusion:</p>";
    echo "<ul>
<li><strong>require</strong>: If the file is not found, it will produce a fatal error and stop the script execution.</li>
<li><strong>include</strong>: If the file is not found, it will produce a warning but the script will continue to execute.</li>         
<li><strong>require_once</strong>: Similar to require, but it will check if the file has already been included and will not include it again.</li>
<li><strong>include_once</strong>: Similar to include, but it will check if the file has already been included and will not include it again.</li>
</ul>";
    echo "<h2>Functions type hint</h2>";



    function h(): int| float| string | array| object| bool| null
    {
        return 42;
    }
    function n(): void
    {
        return; // This function does not return any value
    }
    echo '<pre>function h():int| float| string | array| object| bool| null {
    return 42;
}</pre>';
    echo "type of h: " . gettype(h()) . "<br>";
    // Outputs: int(42)
    echo "<br>";
    echo '<pre>function n():void{
return ; // This function does not return any value
}</pre>';
    echo "type of n: " . gettype(n()) . "<br>";
    // Outputs: NULL
    function m(): mixed
    {
        return "Hello, World!";
    }
    echo "<p>In the above example, <code>h</code> returns an integer while <code>n</code> does not return any value (void).</p>";
    echo "<p>difference between void and null: <br>";
    echo "<>
<li><strong>void</strong>: Indicates that a function does not return a value.</li>
<li><strong>null</strong>: Represents a variable with no value or an empty value.</li>";

    echo "<h2>Function arguments & params </h2>";

    function add(int $a, int $b): int
    {
        return $a + $b;
    }
    echo "<p>In the above example, the function <code>add</code> takes two parameters of type <code>int</code> and returns their sum as an <code>int</code>.</p>";
    echo "<p>Function arguments are the values passed to a function when it is called, while parameters are the variables defined in the function declaration that accept those values.</p>";
    echo "<h2>Function return type</h2>";
    function multiply(int $a, int $b): int
    {
        return $a * $b;
    }

    $x = 5;
    $y = &$x; // $y is a reference to $x
    $y = 7;
    // Changing $y will also change $x
    echo "<p>In the above example, the function <code>multiply</code> takes two parameters of type <code>int</code> and returns their product as an <code>int</code>.</p>";
    echo "<p>Function return type specifies the type of value that a function will return. It is defined after the function parameters using a colon followed by the type.</p>";
    echo "<h2>Function references</h2>";
    echo "<p>In the above example, <code>$y</code> is a reference to <code>$x</code>. Any changes made to <code>$y</code> will also affect <code>$x</code>.</p>";
    function num_sum(...$numbers): int
    {
        $sum = 0;
        foreach ($numbers as $number) {
            $sum += $number;
        }
        return $sum;
    }
    $numbers = [1, 2, 3, 4, 5];
    num_sum(...$numbers);
    echo "<p>In the above example, the function <code>num_sum</code> takes a variable number of arguments using the <code>...</code> syntax and returns their sum as an <code>int</code>.</p>";
    echo "<h2>Function variable number of arguments</h2>";
    echo "<p>In the above example, the function <code>num_sum</code> can accept any number of arguments, and it will sum them up and return the total.</p>";

    $z = 'num_sum';
    echo "<h2>Function variable name</h2>";
    echo "<p>In the above example, the variable <code>\$z</code> holds the name of the function <code>num_sum</code>. You can call the function using the variable like this: <code>\$z(...\$numbers)</code>.</p>";
    echo "<h2>Function variable name with variable number of arguments</h2>";
    echo "<p>In the above example, you can call the function <code>num_sum</code> using the variable <code>\$z</code> and pass the variable number of arguments using the spread operator <code>...</code>.</p>";
    echo "<h2>Function variable name with variable number of arguments</h2>";
    echo "<p>In the above example, you can call the function <code>num_sum</code> using the variable <code>\$z</code> and pass the variable number of arguments using the spread operator <code>...</code>.</p>";
    echo "<h2>Function variable name with variable number of arguments</h2>";
    echo $z(...$numbers);

    echo "<p>In the above example, we define an anonymous function that takes a parameter <code>\$name</code> and returns a greeting message. You can call it like this
    : <code>echo \$anonymousFunction('John');</code>.</p>";
    echo "<h2>Anonymous function</h2>";

    echo "anonymous function";
    $anonymousFunction = function ($name) {
        return "Hello, $name!";
    };
    echo "parameterized function";
    function parameterizedFunction(...$name):array
    {
        return ["Hello", ...$name];
    }
    echo "<h2>Parameterized function</h2>";
    print_r(parameterizedFunction("John", "Doe", "Mido"));
    echo "<p>In the above example, we define a parameterized function that takes a variable number of arguments using the <code>...</code> syntax and returns an array containing a greeting message followed by the names passed as arguments.</p>";
    echo "<h2>Arrow function</h2>";
    $arrowFunction = fn($name) => "Hello, $name!";
    echo "<p>In the above example, we define an arrow function that takes a parameter <code>\$name</code> and returns a greeting message. Arrow functions are a more concise syntax for writing anonymous functions in PHP.</p>";
    echo $arrowFunction("Mido");
?>
</div>
</body>

</html>