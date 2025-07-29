<?php

$file = fopen(APP . DIRECTORY_SEPARATOR . "exercise1_0" .DIRECTORY_SEPARATOR ."dataSheet.txt", "a+");

    echo fgets($file, 1024);
    fclose($file); // إغلاق الملف بعد الانتهاء
