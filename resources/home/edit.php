
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?= loadCSS('sass/style.css') ?>
    <title>Document</title>
</head>

<body>
<!-- views/home/create.php -->
<h2>Create New User</h2>
<form action="/home/update" method="post">
    <label for="full_name">Full Name:</label>
    <input type="text" name="full_name" id="full_name" required>
    <br><br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <br><br>
    <button type="submit">Create User</button>
</form>

   <?= loadJS('js/script.js') ?>

</body>

</html>