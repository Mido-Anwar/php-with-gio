<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file system</title>
</head>
<body>
    <?php
    echo "<h1>File System in PHP</h1>";
    $dir = scandir(__DIR__);
    echo "<pre>";

    var_dump($dir);
    echo "</pre>";
    echo "<h2>scandir</h2>";
    echo "<p>The <code>scandir</code> function returns an array of files and directories from the specified directory.</p>";
    echo "<p>In the above example, <code>scandir(__DIR__)</code> returns an array of files and directories in the current directory.</p>";
    echo "<h2>File Operations</h2>";
    echo "<p>PHP provides various functions to handle file operations such as reading, writing, and deleting files.</p>";
    if(!file_exists(mkdir("new_directory"))) {
        mkdir("new_directory");
    }
    echo "<p>Created a new directory named <code>new_directory</code>.</p>";
    file_put_contents("new_directory/example.txt", "Hello, World!");
    filesize("new_directory/example.txt");

   


    echo "<p>Created a file named <code>example.txt</code> in the <code>new_directory</code> with the content 'Hello, World!'.</p>";
    $fileContent = file_get_contents("new_directory/example.txt");
    echo "<p>Content of <code>example.txt</code>: $fileContent</p>";
    $file = fopen("new_directory/example.txt", "r");
    while ($line = fgets($file) == false) {
        echo "<p>Read line: $file</p>";
        echo "<p>Read line: $line</p>";
        
    }
    echo "<p>Read the file line by line.</p>";

  //  unlink("new_directory/example.txt");
    echo "<p>Deleted the file <code>example.txt</code>.</p>";
  //  rmdir("new_directory");
    echo "<p>Removed the directory <code>new_directory</code>.</p>";







    ?>
</body>
</html>