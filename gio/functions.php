<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Functions </title>
</head>

<body>
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



































    ?>

















</body>

</html>