<?php
require_once "config.php";
require_once APP . 'exercise1_0/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercise 1</title>
    <link rel="stylesheet" href="../../sass/style.css">
</head>

<body>
    <div>
        <form action="../exercise1_0/functions.php" method="post">
            <label for="date"></label>
            <input type="date" name="date" placeholder="date">
            <label for="discription"></label>
            <input type="text" name="discription" placeholder="discription">
            <label for="amount"></label>
            <input type="text" name="amount" placeholder="amount">
            <input type="submit" name="submit" value="submit">
        </form>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // قراءة البيانات من الملف وعرضها في الجدول
                $file = fopen(APP . DIRECTORY_SEPARATOR . "exercise1_0" . DIRECTORY_SEPARATOR . "dataSheet.txt", "r");
                if ($file) {
                
                    while (($line = fgets($file)) !== false ) {
                       
                        $data = explode(',', $line);
                
                        if (count($data) == 3) {
                            echo "<tr>";
                            echo "<td> \t " . htmlspecialchars(trim($data[0])) . " </td>";
                            echo "<td> \t " . htmlspecialchars(trim($data[1])) . " </td>";
                            echo "<td> \t " . htmlspecialchars(trim($data[2])) . " </td>";
                            echo "</tr>  ";
                        }
                      
                    }
                    fclose($file);
                } else {
                    echo "<tr><td colspan='3'>Unable to open file.</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <?php
        // فتح الملف للقراءة
        $file = fopen(APP . DIRECTORY_SEPARATOR . "exercise1_0" . DIRECTORY_SEPARATOR . "dataSheet.txt", "r");
        // إغلاق الملف بعد القراءة
        ?>
    </div>
</body>

</html>