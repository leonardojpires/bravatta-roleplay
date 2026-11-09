<?php

class Database
{
    public static function connect(): PDO
    {
        $dbHost = $_ENV['DB_HOST'];
        $dbPort = $_ENV['DB_PORT'];
        $dbName = $_ENV['DB_NAME'];
        $dbUser = $_ENV['DB_USER'];
        $dbPass = $_ENV['DB_PASS'];

        $pdoOptions = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];

        if (!empty($_ENV['DB_SSL_MODE'])) {
            $pdoOptions[PDO::MYSQL_ATTR_SSL_CA] = '/etc/ssl/certs/ca-certificates.crt';
            $pdoOptions[PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT] = false;
        }

        return new PDO(
            "mysql:host={$dbHost};port={$dbPort};dbname={$dbName};charset=utf8mb4",
            $dbUser,
            $dbPass,
            $pdoOptions
        );
    }
}
