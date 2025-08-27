<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sass/style.css">
    <title>basics of php </title>
</head>

<body>
    <div class="links">
 <table>
    <thead>
        <tr>id</tr>
        <tr>name</tr>
        <tr>email</tr>
    </thead>
    <tbody>
        <?php foreach($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['full_name'] ?></td>
            <td><?= $user['email'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
 </table>
    </div>
   
</body>
</html>