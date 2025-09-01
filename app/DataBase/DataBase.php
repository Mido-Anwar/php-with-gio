<?php

namespace App\DataBase;

use App\Config\Config;
use PDO;

class DataBase extends Config
{
    private static ?PDO $connection = null;

    protected static function connect(): PDO
    {
        if (self::$connection === null) {
            self::$connection = new PDO(
                self::envProps("db_connection") . ":host=" . self::envProps("db_host")  . ";dbname=" . self::envProps("db_database"),
                self::envProps("db_username"),
                self::envProps("db_password")
            );
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$connection;
    }


    public static function select(string $table, array $columns = ["*"]): array
    {
        $conn = self::connect(); // يتأكد إن الاتصال موجود

        $cols = implode(", ", $columns);
        // For debugging purposes, to check the columns being selected
        $stmt = $conn->prepare("SELECT $cols FROM $table");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function all(string $table, array $columns = ["*"]): array
    {
        return self::select($table, $columns);
    }


    

    public static function create(string $table, array $data): bool
    {
        $conn = self::connect();

        // أسماء الأعمدة
        $columns = implode(", ", array_keys($data)) . ", is_active, created_at";

        // placeholders زي :name, :email
        $placeholders = implode(", ", array_map(fn($col) => ":" . $col, array_keys($data))) . ", 1, NOW()";

        // SQL
        $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";

        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            throw new \Exception("Failed to prepare statement");
        }

        // ربط القيم
        foreach ($data as $key => $value) {
            $stmt->bindValue(":" . $key, $value);
        }

        return $stmt->execute();
    }
}
