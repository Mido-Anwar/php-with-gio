<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ControlStructure</title>
</head>

<body>
    <?php
    $score = 85;
    echo "<h1>Control Structures in PHP</h1>";
    echo "<p>Control structures are used to control the flow of execution in a PHP program.</p>";
    echo "<p>They allow you to make decisions, repeat actions, and control the execution of code based on certain conditions.</p>";
    echo "<h2>Conditional Statements</h2>";
    echo "<p>Conditional statements allow you to execute different blocks of code based on certain conditions.</p>";
    echo "<p>PHP supports several types of conditional statements:</p>";
    echo "<ul>";
    echo "<li><code>if</code>: Executes a block of code if a condition is true.</li>";
    echo "<li><code>else</code>: Executes a block of                code if the condition in the <code>if</code> statement is false.</li>";
    echo "<li><code>elseif</code>: Allows you to check multiple conditions in a single <code>if</code> statement.</li>";
    echo "<li><code>switch</code>: Allows you to execute different blocks of code based on the value of a variable.</li>";
    echo "</ul>";
    echo "<p>Here is an example of an <code>if</code> statement:</p>";
    echo "<pre>";
    echo "<?php\n";
    echo "\$age = 18;\n";
    echo "if (\$age >= 18) {\n";
    echo "    echo 'You are an adult.';\n";
    echo "} else {\n";
    echo "    echo 'You are a minor.';\n";
    echo "}\n";
    echo "?>";
    echo "</pre>";
    $score = 85;
    
    echo "<p>In this example, if the variable <code>\$age</code> is greater than or equal to 18, the program will output 'You are an adult.'
    Otherwise, it will output 'You are a minor.'</p>";
    ?>
    <?php if ($score >= 90) : ?>
        <p>You got an A!</p>
    <?php elseif ($score >= 80) : ?>
        <p>You got a B!</p>
    <?php elseif ($score >= 70) : ?>
        <p>You got a C!</p>
    <?php elseif ($score >= 60) : ?>
        <p>You got a D!</p>
    <?php else : ?>
        <p>You got an F!</p>
    <?php endif; ?> 
</body>

</html>