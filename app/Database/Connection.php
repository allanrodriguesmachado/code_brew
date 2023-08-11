<?php

namespace App\Database;

use \PDO;
use \PDOException;

class Connection
{
    private const HOST = 'localhost';
    private const USER = 'postgres';
    private const DBNAME = "full_stack_php";
    private const PASSWD = '830314';
    private const PORT = '5432';

    private const OPTIONS = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_TIMEOUT => 30,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_AUTOCOMMIT => true,
        PDO::ATTR_CASE => PDO::CASE_LOWER,
    ];

    private static PDO $instance;

    public static function instanceConnect(): string|PDO
    {
        if (empty(static::$instance)) {
            try {
                self::$instance = new PDO(
                    "pgsql:host=" . self::HOST . ";dbname=". self::DBNAME.";port=". self::PORT,
                    self::USER,
                    self::PASSWD,
                    self::OPTIONS
                );
            }catch (PDOException|\Exception $exception) {
                return $exception->getMessage();
            }
        }

        return static::$instance;
    }

    final private function __construct()
    {
    }

    private function __clone(): void
    {

    }
}