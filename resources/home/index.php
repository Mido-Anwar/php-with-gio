<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <?= loadCSS('sass/style.css') ?>

    <title>basics of php </title>
</head>

<body>
    <div class="links">
        <a href="home/create">create new user</a>
 <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
        </tr>
        
    </thead>
    <tbody>
        <?php foreach($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['full_name'] ?></td>
            <td><?= $user['email'] ?></td>
            <td>
                <a class="edit" href="user/edit/<?= $user['id'] ?>">user edit</a>
                <a class="danger" href="user/delete/">user delete</a>

            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
 </table>
    </div>
   <?= loadJS('js/script.js') ?>
   
</body>
</html>