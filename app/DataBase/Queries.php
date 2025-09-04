<?php

declare(strict_types=1);

namespace App\DataBase;

use PDO;


class Queries
{
    public function __construct(private DataBase $db) {}


    public function select(string $table, array $columns = ["*"]): array
    {
        $conn = $this->db->connect(); // يتأكد إن الاتصال موجود

        $cols = implode(", ", $columns);
        // For debugging purposes, to check the columns being selected
        $stmt = $conn->prepare("SELECT $cols FROM $table");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function all(string $table): array
    {
        $con = $this->db->connect(); // يتأكد إن الاتصال موجود
        $stmt = $con->prepare("SELECT * FROM $table");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }




    public  function create(string $table, array $data): bool
    {
        $conn = $this->db->connect();

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

    public  function update(string $table, array $data, string $where, array $whereParams = []): bool
    {
        $conn = $this->db->connect();

        // إنشاء جزء التحديث
        $setParts = [];
        foreach ($data as $key => $value) {
            $setParts[] = "$key = :$key";
        }
        $setString = implode(", ", $setParts);

        // SQL
        $sql = "UPDATE $table SET $setString WHERE $where";

        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            throw new \Exception("Failed to prepare statement");
        }

        // ربط القيم
        foreach ($data as $key => $value) {
            $stmt->bindValue(":" . $key, $value);
        }

        // ربط قيم where
        foreach ($whereParams as $key => $value) {
            $stmt->bindValue(":" . $key, $value);
        }

        return $stmt->execute();
    }
}
