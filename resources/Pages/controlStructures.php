<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?=loadCSS('sass/style.css')?>
    <link rel="stylesheet" href="">
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
    <h2>Loops</h2>
    <p>Loops allow you to execute a block of code multiple times based on certain conditions
    </p>
    <p>PHP supports several types of loops:</p>
    <ul>
        <li><code>while</code>: Executes a block of code as long as a condition is true.</li>
        <li><code>do...while</code>: Executes a block of code at least once and then continues to execute it as long as a condition is true.</li>
        <li><code>for</code>: Executes a block of code a specific number of times.</li>
        <li><code>foreach</code>: Iterates over elements in an array or object.</li>
    </ul>
    <p>Here is an example of a <code>for</code> loop:</p>
    <pre>
    <?php
    echo "<h3>array read by implode  </h3><br>";
    echo "when be multi dimensional array you can use  implode() for ignore error or json_encode for get array <br>";
    $users = ["name" => "mido", "email" => "mido@email.com", "skills" => ["PHP", "JavaScript", "HTML"]];
    print_r($users);
    echo "<br>";
    foreach ($users as $key => $value) {
        if (is_array($value)) {
            $value = implode(", ", $value);
        }

        echo "Key: $key, Value:$value <br>";
    }
    echo "<h3>array read by json_encode</h3><br>";
    foreach ($users as $key => $value) {

        echo  $key . ":" . json_encode($value) . "<br>";
    }
    for ($i = 0; $i < 5; printf("Iteration: %d\n", $i++));
    echo "<?php\n";
    echo "for (\$i = 0; \$i < 5; \$i++) {\n";
    echo "    echo 'Iteration: ' . \$i . \"\\n \";\n";
    echo "}\n";
    echo "?>";
    echo "</pre>";
    echo "<p>In this example, the loop will execute 5 times, outputting the current iteration number each time.</p>";
    echo "<h2>Switch Statement</h2>";
    echo "<p>The <code>switch</code> statement is used to execute different blocks of code based on the value of a variable.</p>";
    echo "<p>Here is an example of a <code>switch</code> statement:</p>";
    echo "<pre>";
    echo "<?php\n";
    echo "\$day = 'Monday';\n";
    echo "switch (\$day) {\n";
    echo "    case 'Monday':\n";
    echo "        echo 'Start of the week.';\n";
    echo "        break;\n";
    echo "    case 'Friday':\n";
    echo "        echo 'End of the week.';\n";
    echo "        break;\n";
    echo "    default:\n";
    echo "        echo 'Midweek day.';\n";
    echo "}\n";
    echo "?>";
    echo "</pre>";
    echo "<p>In this example, the program checks the value of the variable <code
>\$day</code> and executes the corresponding block of code based on its value. If <code>\$day</code> is 'Monday', it outputs 'Start of the week.' If it is 'Friday', it outputs 'End of the week.' For any other value, it outputs 'Midweek day.'</p>";
    echo "<h2>Conclusion</h2>";
    echo "<p>Control structures are essential for controlling the flow of execution in a PHP program. They allow you to make decisions, repeat actions, and execute different blocks of code based on certain conditions.</p>";
    echo "<p>Understanding and using control structures effectively is crucial for writing efficient and maintainable
PHP code.</p>";
    echo "<h2>match</h2>";
    echo "<p>The <code>match</code> expression is a new feature introduced in PHP 8.0 that provides a more concise and expressive way to handle multiple conditions compared to the traditional <code>switch</code> statement.</p>";
    echo "<p>It allows you to match a value against multiple patterns and execute corresponding expressions based on the match.</p>";
    echo "<p>Here is an example of a <code>match</code> expression:</p>";
    echo "<pre>";
    echo "<?php\n";
    echo "\$color = 'red';\n";
    echo "\$result = match (\$color) {\n";
    echo "    'red' => 'You chose red!',\n";
    echo "    'blue' => 'You chose blue!',\n";
    echo "    'green' => 'You chose green!',\n";
    echo "    default => 'Unknown color',\n";
    echo "};\n";
    echo "echo \$result;\n";
    echo "?>";
    echo "</pre>";
    echo "<p>In this example, the <code>match</code> expression checks the value of the variable <code>\$color</code> and matches it against different patterns. If it matches 'red', it outputs 'You chose red!'. If it matches 'blue', it outputs 'You chose blue!'. If it matches 'green', it outputs 'You chose green
     !'. If it doesn't match any of these, it outputs 'Unknown color'.</p>";
    echo "<p>The <code>match</code> expression is more concise and can return
    values directly, making it easier to read and maintain compared to the traditional <code>switch</code> statement.</p>";
    match($score){
        90, 100 => print "You got an A! <br>",
        80, 89 => print "You got a B! <br>",
        70, 79 => print "You got a C! <br>",
        60, 69 => print "You got a D! <br>",
        default => print "You got an F! <br>"   
    }
    
    ?>
    <p>For more information, you can refer to the official PHP documentation on <a  href="https://www.php.net/manual/en/language.control-structures.php">Control Structures</a>.</p>
    <p>Happy coding!</p>



        <?=loadJS('js/script.js')?>

</body>

</html>