<?php

class AdminController {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function createPublisher() {
        session_start();

        if (!isset($_SESSION['admin']) || $_SESSION['admin']['role'] !== 'admin') {
            http_response_code(403);
            echo "Acesso negado!";
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $token = bin2hex(random_bytes(4));
            $password = bin2hex(random_bytes(4));
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO admins (token, password, role, created_at) VALUES (:token, :password, 'publisher', NOW())";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['token' => $token, 'password' => $hashedPassword]);

            $_SESSION['publisher'] = [
                'token' => $token,
                'password' => $password
            ];

            header('Location: /dashboard');
            exit;
        }
    }
}