<?php
require_once 'exercise1_0/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercise 1</title>
    <link rel="stylesheet" href="../sass/style.css">
</head>

<body>
    <div>
        <form action="exercise1_0/functions.php " method="post">
            <label for="date"></label>
            <input type="date" name="date" placeholder="date" required>
            <label for="discription"></label>
            <input type="text" name="discription" placeholder="discription" required>
            <label for="amount"></label>
            <input type="text" name="amount" placeholder="amount" required>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>
</body>

</html>