<?php

class AuthController {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }
    
    public function login() {
        /* Receives the form data */
        $token = $_POST['token'] ?? null;
        $password = $_POST['password'] ?? null;

        /* Verifies if the token is valid */
        $sql = "SELECT * FROM admins WHERE token = :token LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['token' => $token]);
        $admin = $stmt->fetch(PDO::FETCH_ASSOC); // Returns the first row of the result set

        /* If there's no admin with the given token, return an error */
        if (!$admin) {
            $error = "Token inválida!";
            require_once __DIR__ . '/../views/auth/auth.php';
            return;
        }

        /* Creates the admin object */
        $admin = new Admin(
            (int)$admin['id'],
            $admin['token'],
            $admin['password'],
            $admin['role'] ?? 'publisher',
            $admin['created_at']
        );

        /* Verifies if the password is correct using the verifyPassword method created in the Admin model */
        if (!$admin->verifyPassword($password)) {
            $error = "Password inválida!";
            require_once __DIR__ . '/../views/auth/auth.php';
            return;
        }       

        session_start();
        $_SESSION['admin'] = [
            'id' => $admin->getId(),
            'token' => $admin->getToken(),
            'role' => $admin->getRole()
        ];

        if ($admin->getRole() === 'admin') {
            header('Location: /home');
        } else if ($admin->getRole() === 'publisher') {
            header('Location: /noticias');
        }
        exit;
    }
}