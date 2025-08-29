<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variables</title>
</head>

<body>
    <p>
        <?php
        //constants in PHP
        define("PI", 3.14);
        define("NAME", "Mido");
        const AGE = 25; // Using const to define a constant
        // Constants are defined using the define() function
        // They are case-sensitive by default and cannot be changed once set
        echo "The value of PI is: " . PI;
        echo "<br>";
        // different between define() and const
        // define() can be used anywhere in the script, while const must be defined at the top 
        // of the script or in a class  
        // dynamic const
        $paid = "PAID";
        // You can use a variable to define a constant, but it must be a string
        // The variable must be defined before using it in define()
        // The constant name must be a string, and it cannot contain spaces or special characters
        // The constant name is usually written in uppercase letters
        define('STATUS_' . $paid, $paid);
        echo "The value of STATUS is: " . constant('STATUS_' . $paid);
        echo "<br>";
        //variable variables in PHP
        $varName = "Hello";
        $$varName = "World"; // This creates a variable named $Hello with the value "World"
        echo "The value of variable variable is: " . $Hello; // Outputs "World"
        echo "<br>";
        // data types in PHP
        // PHP supports several data types, including:
        // 1. String: A sequence of characters, enclosed in single or double quotes.
        $stringVar = "This is a string";
        echo "String: " . $stringVar;
        echo "<br>";
        // 2. Integer: A whole number, without a decimal point.
        $intVar = 42;
        echo "Integer: " . $intVar;
        echo "<br>";
        // 3. Float (or double): A number with a decimal point.
        $floatVar = 3.14;
        echo "Float: " . $floatVar;
        echo "<br>";
        // 4. Boolean: A true or false value.
        $boolVar = true;
        echo "Boolean: " . ($boolVar ? 'true' : 'false');
        echo "<br>";
        // 5. Array: A collection of values, which can be of any type.      
        $arrayVar = array("apple", "banana", "cherry");
        echo "Array: ";
        print_r($arrayVar);
        echo "<br>";
        // 6. Object: An instance of a class, which can contain properties and methods
    // class
        // 7. NULL: A special type that represents a variable with no value.
        $nullVar = null;
        echo "NULL: " . ($nullVar === null ? 'null' : 'not null');
        echo "<br>";
        // Type casting in PHP
        // Type casting is the process of converting a variable from one data type to another
        $num = "10"; // String
        $castedInt = (int)$num; // Cast to integer
        $castedFloat = (float)$num; // Cast to float
        echo "Casted Integer: " . $castedInt;
        echo "<br>";
        echo "Casted Float: " . $castedFloat;
        echo "<br>";
        // Type juggling in PHP
        // PHP automatically converts between types when necessary, known as type juggling
        $mixedVar = "5 apples";
        $result = $mixedVar + 5; // PHP converts the string to an integer
        echo "Result of type juggling: " . $result; // Outputs 10, as "5 apples" is converted to 5
        echo "<br>";
        /* declare(strict_types=1); */
        // Enforces strict typing, which means types must match exactly

        function addNumbers(int $a, int $b): int
        {
            return $a + $b;
        }
        echo "Sum of 5 and 10: " . addNumbers(5, 10);
        echo "<br>";
        // heredoc & nowdoc syntax
        $heredoc = <<<EOD
This is a heredoc string.
It can span multiple lines and supports variables like $stringVar.
EOD;
        echo "Heredoc: " . nl2br($heredoc);
        echo "<br>";

        $nowdoc = <<<'EOD'
This is a nowdoc string.
It can also span multiple lines but does not parse variables like $stringVar.
EOD;
        echo "Nowdoc: " . nl2br($nowdoc);
        echo "<br>";

        ?>
    </p>
</body>

</html>