<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> builde in Functions PHP</title>
</head>

<body>
    <?php
    echo "<h1>Built-in Functions in PHP</h1>";
    echo "<h2>Built-in Functions(   DATE  ) </h2>";
    echo "<p>PHP provides a wide range of built-in functions for various purposes. Here are some commonly used built-in functions:</p>";
    echo "<ul>
<li><strong>date()</strong>: Returns the current date and time in a specified format.</li>";
    echo "</ul>";
    echo "<p>Example of using the <code>date()</code> function:</p>";
    echo "<pre>echo date('Y-m-d H:i:s'); // Outputs the current date and time in the format YYYY-MM-DD HH:MM:SS</pre>";
    echo "<p>You can also format the date using different formats. For example:</p>";
    echo "<pre>echo date('l, F j, Y'); // Outputs the current date in a more readable format, e.g., 'Monday, October 23, 2023'</pre>";
    echo "<p>You can also use the <code>strtotime()</code> function to convert a string representation of a date into a Unix timestamp:</p>";
    echo "<pre>echo strtotime('2023-10-23'); // Outputs the Unix timestamp for the specified date</pre>";
    echo "<p>PHP also provides functions for manipulating dates, such as <code>strtotime()</code>, <code>date_create()</code>, and <code>date_format()</code>. These functions allow you to create, modify
, and format dates easily.</p>";
    echo "<h2>Built-in Functions(   ARRAYS  ) </h2>";
    echo "<p>PHP provides a rich set of built-in functions for working with arrays. Here are some commonly used array functions:</p>";
    echo "<ul>
<li><strong>array_push()</strong>: Adds one or more elements to the end of an array.</li>
<li><strong>array_pop()</strong>: Removes the last element from an array and returns it.</li>
<li><strong>array_shift()</strong>: Removes the first element from an array and returns it.</li>
<li><strong>array_unshift()</strong>: Adds one or more elements to the beginning of an array.</li>
<li><strong>array_merge()</strong>: Merges two or more arrays into one.</li>
<li><strong>array_slice()</strong>: Extracts a portion of an array.</li>
<li><strong>array_splice()</strong>: Removes a portion of an array and replaces it with new elements.</li>
<li><strong>array_map()</strong>: Applies a callback function to each element of an array and returns a new array.</li>
<li><strong>array_filter()</strong>: Filters elements of an array using a callback function.</li>
<li><strong>array_reduce()</strong>: Reduces an array to a single value using a callback function.</li>
<li><strong>in_array()</strong>: Checks if a value exists in an array.</li>
</ul>";
    










    ?>

</body>

</html>