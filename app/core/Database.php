<?php

class Database
{
    public static function connect(): PDO
    {
        $dbHost = $_ENV['DB_HOST'] ?? "localhost";
        $dbPort = $_ENV['DB_PORT'] ?? 3306;
        $dbName = $_ENV['DB_NAME'] ?? "bravatta";
        $dbUser = $_ENV['DB_USER'] ?? "root";
        $dbPass = $_ENV['DB_PASS'] ?? "root";

        $pdoOptions = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];

        if (!empty($_ENV['DB_SSL_MODE'])) {
            $pdoOptions[PDO::MYSQL_ATTR_SSL_CA] =
                $_ENV['DB_SSL_CA'] ?? dirname(__DIR__, 2) . '/certs/ca.pem';
            $pdoOptions[PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT] = true;
        }

        return new PDO(
            "mysql:host={$dbHost};port={$dbPort};dbname={$dbName};charset=utf8mb4",
            $dbUser,
            $dbPass,
            $pdoOptions
        );
    }
}