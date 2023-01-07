<?php

namespace src;

use PDO;
use Exception;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(INCLUDE_PATH);
$dotenv->load();

define('DB_HOST', $_ENV['DB_HOST']);
define('DB_NAME', $_ENV['DB_NAME']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);

class MySql
{
    private static $pdo;

    public static function connect()
    {

        if (self::$pdo == null)
            try {
                self::$pdo = new PDO(
                    'mysql:host=' . DB_HOST . ';debname=' . DB_NAME,
                    DB_USER,
                    DB_PASSWORD,
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
                );
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $error) {
                echo 'error connecting ';
                error_log(($error->getMessage()));
            }
        return self::$pdo;
    }
}
