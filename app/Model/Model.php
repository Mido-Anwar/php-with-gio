<?php

namespace App\Model;


use App\DataBase\DataBase;

class Model extends DataBase
{

    public static function all(string $table, array $columns = ["*"]): array
    {
        return DataBase::select($table, $columns);
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
