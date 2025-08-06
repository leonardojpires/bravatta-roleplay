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
            $password = $_POST['publisher_password'] ?? '';

            if (strlen($password) < 8) {
                $_SESSION['error'] = 'A password deve ter pelo menos 8 caracteres!';
                header('Location: /dashboard');
                exit;
            }

            $token = bin2hex(random_bytes(16));            
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO admins (token, password, role, created_at) VALUES (:token, :password, 'publisher', NOW())";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['token' => $token, 'password' => $hashedPassword]);

            $_SESSION['publisher'] = [
                'token' => $token,
                'password' => $password
            ];

            $_SESSION['success'] = 'Publisher criado com sucesso!';

            header('Location: /dashboard');
            exit;
        }
    }

    public function getAllPublishers() {
        $sql = "SELECT * FROM admins WHERE role = 'publisher' ORDER BY created_at DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deletePublisher() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $sql = "DELETE FROM admins WHERE id = :id AND role = 'publisher'";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['id' => $id]);

            $_SESSION['success'] = 'Publisher apagado com sucesso!';

            header('Location: /dashboard');
            exit;
        }
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();

        header('Location: /auth');
        exit;
    }

}