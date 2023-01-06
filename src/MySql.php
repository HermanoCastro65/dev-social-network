<?php

namespace src;

use Dotenv\Dotenv;
use Exception;
use PDO;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

define('DB_HOST', getenv('DB_HOST'));
define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('$DB_PASSWORD'));

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
    }
}
