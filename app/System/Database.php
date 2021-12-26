<?php

namespace App\System;

use PDO;
use PDOException;

class Database
{
    private static $dbh;
    private static $stmt;

    public static function Database()
    {
        $dsn = $_ENV["DB_TYPE"] . ":host=" . $_ENV["DB_HOST"] . ";dbname=" . $_ENV["DB_NAME"];
        $opt = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            self::$dbh = new PDO($dsn, $_ENV["DB_USER"], $_ENV["DB_PASS"], $opt);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function query($query)
    {
        self::$stmt = self::$dbh->prepare($query);
    }

    public static function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        self::$stmt->bindValue($param, $value, $type);
    }

    public static function execute()
    {
        self::$stmt->execute();
    }

    public static function resultSet()
    {
        self::execute();
        return self::$stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function single()
    {
        self::execute();
        return self::$stmt->fetch(PDO::FETCH_ASSOC);
    }
}
