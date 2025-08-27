<?php

namespace App\Model;


use App\DataBase\DataBase;

class Model extends DataBase
{
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
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));
        $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($data);
    }
}
