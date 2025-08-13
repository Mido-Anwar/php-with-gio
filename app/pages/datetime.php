<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date time object</title>
</head>
<body>
 <?php
$time = new DateTime('Africa/Cairo');

$time1 = new DateTime('13-08-2024 1:45 PM');
$time2 = new DateTime('12-08-2025 1:15 PM');

var_dump($time1->diff($time2)->format('%a'));
?>
</body>
</html>