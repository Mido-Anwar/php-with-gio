   <p>
       Introducing PHP
       <?php
        // echo is a language construct in PHP that outputs one or more strings
        echo "Hello World";
        echo "<br>";
        print("Hello World with print function");
        echo "<br>";
        // The print function is similar to echo, but it returns 1, so it can be used in expressions

     
        echo "<br>";
        //commenting in PHP for better understanding
        // This is a single line comment
        /* This is a
        multi-line comment
        It can span multiple lines
        and is useful for longer explanations */
      

        // The dot (.) operator is used to concatenate strings in PHP
        // Concatenation is the process of joining two or more strings together
        $greeting = "Hello";
        $name = "World";
        $message = $greeting . " " . $name;
        echo "The message is: " . $message;
        echo "{$message}";
        // The curly braces are used to parse variables inside double quotes
        echo "<br>";

        ?>

   </p>