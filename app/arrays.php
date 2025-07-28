<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrays</title>
</head>

<body>
    <p>
        <?php
        echo "<h1>Arrays in PHP</h1>";
        echo "<p>Arrays are used to store multiple values in a single variable.</p>";
        echo "<p>PHP supports both indexed and associative arrays.</p>";
        // PHP arrays can be indexed or associative
        // 6. Indexed Array: An array with numeric keys.
        $indexedArray = array("red", "green", "blue");
        echo "Indexed Array: ";
        print_r($indexedArray);
        echo "<br>";

        // 7. Associative Array: An array with named keys.
        $assocArray = array("name" => "John", "age" => 30, "city" => "New York");
        echo "Associative Array: ";
        print_r($assocArray);
        echo "<br>";
        // 8. Multidimensional Array: An array containing one or more arrays.
        echo "<h2>Multidimensional Arrays</h2>";
        echo "<p>Multidimensional arrays are arrays containing one or more arrays.</p>";

        // 9. Multidimensional Array: An array containing one or more arrays.
        // This can be useful for storing complex data structures.

        $multiArray = array(
            "fruits" => array("apple", "banana", "cherry", ["orange", "grape"]),
            "vegetables" => array("carrot", "broccoli", "spinach", ["potato", "onion"])
        );
        $programmingLanguages = array("PHP" =>
        ['releseDate' => '22-7-2025', 'version' => '8.4'], "JavaScript" => ['releseDate' => '22-7-2025', 'version' => '14.6'], "Python" => ['releseDate' => '22-7-2025', 'version' => '17.1'], "Java" => ['releseDate' => '22-7-2025', 'version' => '33.2']);
        echo "Multidimensional Array: ";
        echo "<pre>";
        print_r($multiArray["fruits"][3]);
        print_r($programmingLanguages);
        echo "</pre>";
        echo "<br>";
        // expressions
        echo "<h2>Expressions in PHP</h2>";
        echo "<p>Expressions are combinations of variables, constants, operators, and functions that PHP evaluates to produce a value.</p>";
        echo "<p>For example, the expression <code>5 + 10</code> evaluates to <code>15</code>.</p>";
        echo "<p>Expressions can be simple or complex, and they can include arithmetic operations, logical operations, and function calls.</p>";
        echo "<p>Here are some examples of expressions:</p>";
        echo "<ul>";
        echo "<li><code>5 + 10</code> evaluates to <code>15</code></li>";
        echo "<li><code>10 * 2</code> evaluates to <code>20</code></li>";
        echo "<li><code>3 > 2</code> evaluates to <code>true</code></li>";
        echo "<li><code>strlen('Hello')</code> evaluates to <code>5</code></li>";
        echo "</ul>";
        echo "<p>Expressions can be used in various contexts, such as in conditional statements, loops, and function arguments.</p>";
        echo "<p>For example, you can use an expression in an <code>if</code> statement to control the flow of your program:</p>";
        echo "<pre>";
        $number = 10;
        if ($number > 5) {
            echo "The number is greater than 5.";
        } else {
            echo "The number is not greater than 5.";
        }
        echo "</pre>";              

        ?>
    </p>
</body>

</html>