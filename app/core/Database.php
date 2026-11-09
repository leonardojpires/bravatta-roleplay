<?php
//
function env(string $key, mixed $default = null): mixed
{
    $value = getenv($key);

    if ($value !== false) {
        return $value;
    }

    return $_ENV[$key] ?? $_SERVER[$key] ?? $default;
}

class Database
{
    public static function connect(): PDO
    {
        $dbHost = env('DB_HOST', 'localhost');
        $dbPort = env('DB_PORT', '3306');
        $dbName = env('DB_NAME', 'bravatta');
        $dbUser = env('DB_USER', 'root');
        $dbPass = env('DB_PASS', 'root');

        $pdoOptions = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];

        if (!empty(env('DB_SSL_MODE'))) {
            $pdoOptions[PDO::MYSQL_ATTR_SSL_CA] =
                env('DB_SSL_CA', dirname(__DIR__, 2) . '/certs/ca.pem');
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