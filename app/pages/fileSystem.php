<?php
// 
require_once 'exercise1_0/config.php';
?>
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
    if (is_dir("new_directory")) {
        echo "<p>Directory <code>new_directory</code> already exists.</p>";
    } else {
        mkdir("new_directory");
        echo "<p>Directory <code>new_directory</code> created successfully.</p>";
    }
    echo "<p>Created a new directory named <code>new_directory</code>.</p>";
    file_put_contents("../new_directory/monthmoney.txt", "Hello, World!");
    filesize("../new_directory/monthmoney.txt");




    echo "<p>Created a file named <code>monthmoney.txt</code> in the <code>new_directory</code> with the content 'Hello, World!'.</p>";
    $fileContent = file_get_contents("../new_directory/monthmoney.txt");
    echo "<p>Content of <code>monthmoney.txt</code>: $fileContent</p>";
    $file = fopen("../new_directory/monthmoney.txt", "r");
    while ($line = fgets($file) == false) {
        echo "<p>Read line: $file</p>";
        echo "<p>Read line: $line</p>";
    }
    echo "<p>Read the file line by line.</p>";
    echo "<h2>permissions</h2>";
    echo "<p>File permissions can be checked using the <code>fileperms</code> function.</p>";
    $permissions = fileperms("../new_directory/monthmoney.txt");
    echo "<p>Permissions of <code>monthmoney.txt</code>: " . substr(sprintf('%o', $permissions), -4) . "</p>";
    echo "<p>Permissions are displayed in octal format.</p>";
    echo "file change permissions because it is not writable and deletable by the user.";
    chmod("../new_directory/monthmoney.txt", 0777);
    clearstatcache();

    echo "<p>Permissions of <code>monthmoney.txt</code>: " . substr(sprintf('%o', $permissions), -4) . "</p>";

    echo "<p>Changed permissions of <code>monthmoney.txt</code> to 0777 (read, write, execute for all).</p>";
    echo "<p>Now the file is writable and deletable by the user.</p>";
    echo "<h2>";
    echo "<h2>File Deletion</h2>";

   ( unlink("../new_directory/monthMoney.txt")) or die("Error deleting file");
    echo "<p>Deleted the file <code>monthMoney.txt</code>.</p>";
    rmdir("../new_directory");
    echo "<p>Removed the directory <code>new_directory</code>.</p>";
    echo "<h2>Disk Space</h2>";
    echo "<p>Disk space information: /media/mido/MIDO</p>";
    echo "<p>Free space: " . round(disk_free_space("/media/mido/MIDO") / 1024 / 1024 / 1024) . " GB</p>";
    echo "<p>Total space: " . round(disk_total_space("/media/mido/MIDO") / 1024 / 1024 / 1024) . " GB</p>";
    echo "<p>Used space: " . round((disk_total_space("/media/mido/MIDO") - disk_free_space("/media/mido/MIDO")) / 1024 / 1024 / 1024) . " GB</p>";






    ?>
</body>

</html>