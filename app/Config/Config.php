<?php

namespace App\Config;

use App\View\View;

define("APP", dirname(__DIR__));
define('STORAGE_PATH', 'app/storage');
define("VIEWS_PATH", dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "resources" . DIRECTORY_SEPARATOR);
define("ENV_FILE", file(dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . ".env"));
class Config
{
    public static function envProps($prop): string

    {
        $prop = strtoupper($prop);
        return $_ENV[$prop];
    }
    public static $storagePath = STORAGE_PATH;
    public static $viewsPath = VIEWS_PATH;
    public static $envFile = ENV_FILE;
    // دالة لإدراج ملفات CSS

}
