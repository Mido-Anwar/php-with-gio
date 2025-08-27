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
 
}
