<?php

$file = fopen("dataSheet.txt", "a+");


if(isset($_POST['submit'])){
    $date = $_POST['date'];
    $discription = $_POST['discription'];
    $amount = $_POST['amount'];

    if(!empty($date) && !empty($discription) && !empty($amount)){
        $data = "$date, $discription, $amount\n";
        fwrite($file, $data);
        fclose($file);
        header("Location: ../pages/ex1.php");
        exit();
    } else {
        echo "Please fill in all fields.";
    }
} else {
    fclose($file);
    echo "No data submitted.";
}
