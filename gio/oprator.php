<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oprators</title>
</head>
<body>
    <?php
    echo "<h1>Operators in PHP</h1>";
    echo "<p>Operators are used to perform operations on variables and values.</p>";
    echo "<p>PHP supports various types of operators, including arithmetic, assignment, comparison,
    logical, and bitwise operators.</p>";
    echo "<h2>Arithmetic Operators</h2>";
    echo "<p>Arithmetic operators are used to perform basic mathematical operations.</p>";
    echo "<p>Here are some examples:</p>";
    echo "<ul>";
    echo "<li><code>+</code> (Addition): Adds two numbers.</li>";
    echo "<li><code>-</code> (Subtraction): Subtracts one number from another.</li>";
    echo "<li><code>*</code> (Multiplication): Multiplies two numbers.</li>";
    echo "<li><code>/</code> (Division): Divides one number by another.</li>";
    echo "<li><code>%</code> (Modulus): Returns the remainder of a division operation.</li>";
    echo "</ul>";
    echo "<p>For example, <code>5 + 10</code> evaluates to <code>15</code>, and <code>10 % 3</code> evaluates to <code>1</code>.</p>";
    echo "<h2>Assignment Operators</h2>";
    echo "<p>Assignment operators are used to assign values to variables.</p>";         
    echo "<p>Here are some examples:</p>";
    echo "<ul>";
    echo "<li><code>=</code> (Simple Assignment): Assigns a value to a variable.</li>";
    echo "<li><code>+=</code> (Addition Assignment): Adds a value to a variable and assigns the result to that variable.</li>";
    echo "<li><code>-=</code> (Subtraction Assignment): Subtracts a value from a variable and assigns the result to that variable.</li>";
    echo "<li><code>*=</code> (Multiplication Assignment): Multiplies a variable by a value and assigns the result to that variable.</li>";
    echo "<li><code>/=</code> (Division Assignment): Divides a variable by a value and assigns the result to that variable.</li>";
    echo "<li><code>%=</code> (Modulus Assignment): Takes the modulus of a variable by a value and assigns the result to that variable.</li>";
    echo "</ul>";
    echo "<p>For example, if you have a variable <code>\$x = 10</code>, then <code>\$x += 5</code> will result in <code>\$x = 15</code>.</p>";
    echo "<h2>Comparison Operators</h2>";
    echo "<p>Comparison operators are used to compare two values.</p>";
    echo "<p>Here are some examples:</p>";
    echo "<ul>";
    echo "<li><code>==</code> (Equal): Checks if two values are equal.</li>";
    echo "<li><code>===</code> (Identical): Checks if two values are equal and of the same type.</li>";
    echo "<li><code>!=</code> (Not Equal): Checks if two values are not equal.</li>";
    echo "<li><code>!==</code> (Not Identical): Checks if two values are not equal or not of the same type.</li>";
    echo "<li><code>&gt;</code> (Greater Than): Checks if the left value is greater than the right value.</li>";
    echo "<li><code>&lt;</code> (Less Than): Checks if the left value is less than the right value.</li>";
    echo "<li><code>&gt;=</code> (Greater Than or Equal To): Checks if the left value is greater than or equal to the right value.</    li>";
    echo "<li><code>&lt;=</code> (Less Than or Equal To         ): Checks if the left value is less than or equal to the right value.</li>";
    echo"<li><code>??</code> (Null Coalescing): Returns the left operand if it exists and is not null; otherwise, it returns the right operand.</li>";
    echo "</ul>";
    echo "<p>For example, <code>5 == 5</code> evaluates to <code>true</code>, while <code>5 === '5'</code> evaluates to <code>false</code> because the types are different.</p>";
    echo "<h2>Logical Operators</h2>";
    echo "<p>Logical operators are used to combine multiple conditions.</p>";
    echo "<p>Here are some examples:</p>";  
    echo "<ul>";
    echo "<li><code>&amp;&amp;</code> (Logical AND): Returns true if both operands are true.</li>";
    echo "<li><code>||</code> (Logical OR): Returns true if at least one operand is true.</li>";
    echo "<li><code>!</code> (Logical NOT): Reverses the logical state of its operand.</li>";
    echo "</ul>";           
    echo "<p>For example, <code>(5 &gt; 3) &amp;&amp; (2 &lt; 4)</code> evaluates to <code>true</code>, while <code>(5 &gt; 3) || (2 &gt; 4)</code> also evaluates to <code>true</code>.</p>";
    echo "<h2>Bitwise Operators</h2>";
    echo "<p>Bitwise operators are used to perform operations on individual bits of integers.</p>";
    echo "<p>Here are some examples:</p>";
    echo "<ul>";
    echo "<li><code>&amp;</code> (Bitwise AND): Performs a bitwise AND operation.</li>";
    echo "<li><code>|</code> (Bitwise OR        ): Performs a bitwise OR operation.</li>";
    echo "<li><code>^</code> (Bitwise XOR       ): Performs a bitwise XOR operation.</li>";
    echo "<li><code>&lt;&lt;</code> (Left Shift): Shifts bits to the left.</li>";
    echo "<li><code>&gt;&gt;</code> (Right Shift): Shifts bits to the right.</li>";
    echo "</ul>";
    echo "<p>For example, <code>5 &amp; 3</code> evaluates to <code>1</code>, and <code>5 | 3</code> evaluates to <code>7</code>.</p>";
    echo "<h2>Example of Operators</h2>";
    echo "<p>Here is a simple example that demonstrates the use of various operators:</p>";
    echo "<pre>";
    $a = 10;
    $b = 5;
    $sum = $a + $b; // Arithmetic operator
    $isEqual = ($a == $b); // Comparison operator
    $isGreater = ($a > $b); // Comparison operator
    $logicalAnd = ($a > 0 && $b > 0); // Logical operator
    $bitwiseAnd = $a & $b; // Bitwise operator
    echo "Sum: $sum\n";             
    echo "Is Equal: " . ($isEqual ? 'true' : 'false') . "\n";
    echo "Is Greater: " . ($isGreater ? 'true' : 'false') . "\n";
    echo "Logical AND: " . ($logicalAnd ? 'true' : 'false') . "\n";
    echo "Bitwise AND: $bitwiseAnd\n";
    echo "</pre>";    
    echo "<h2> array operators </h2>";
    echo "<p>Array operators are used to compare arrays.</p>";
    echo "<p>Here are some examples:</p>";
    echo "<ul>";
    echo "<li><code>+</code> (Union): Combines two arrays.</li>";
    echo "<li><code>==</code> (Equality): Checks if two arrays have the same key/value pairs.</li>";
    echo "<li><code>===</code> (Identity): Checks if two arrays have the same key/value pairs and are of the same type.</li>";
    echo "<li><code>!=</code> (Inequality): Checks if two arrays do not have the same key/value pairs.</li>";
    echo "<li><code>!==</code> (Non-identity): Checks if two arrays do not have the same key/value pairs or are not of the same type.</li>";
    echo "</ul>"; 
    echo "<p>For example, if you have two arrays <code>\$array1 = ['a' => 1, 'b' => 2]</code> and <code>\$array2 = ['b' => 2, 'a' => 1]</code>, then <code>\$array1 == \$array2</code> evaluates to <code>true</code>.</p>";
    echo "<h2>concloion</h2>";
    echo "<p>In conclusion, operators in PHP are essential for performing various operations on variables and values.</p>";
    echo "<p>Understanding how to use different types of operators is crucial for writing effective PHP code.</p>";
    echo "<p>Whether you are performing arithmetic calculations, comparing values, or manipulating arrays, operators play a vital role in PHP programming.</p>";
    echo "<p>By mastering operators, you can enhance your PHP skills and create more complex and efficient applications.</p>";
    echo "<p>For more information on operators in PHP, you can refer to the official documentation at <a href='https://www.php.net/manual/en/language.operators.php'>PHP Operators</a>.</p>";
    echo "<p>Happy coding!</p>";                 
    ?>   
</body>
</html>