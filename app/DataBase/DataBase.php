<?php
namespace App\DataBase;

use PDO;

class DataBase
{
    private static ?PDO $connection = null;

    private static function connect(): PDO
    {
        if (self::$connection === null) {
            self::$connection = new PDO(
                "mysql:host=127.0.0.1;port=3306;dbname=gio",
                "ahmed_nour",
                "Mido_aqaqaq_4688"
            );
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$connection;
    }
    public static function select(string $table, array $columns = ["*"]): array
    {
        $conn = self::connect(); // يتأكد إن الاتصال موجود

        $cols = implode(", ", $columns);
        $stmt = $conn->prepare("SELECT $cols FROM $table");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}
