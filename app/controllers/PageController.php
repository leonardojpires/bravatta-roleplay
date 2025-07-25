<?php

class PageController {
    private function view($name) {
        require_once __DIR__ . '/../views/' . $name . '.php';
    }
    
    public function home() {
        $this->view('home');
    }

    public function about() {
        echo "Welcome to the about page!";
    }

    public function noticias() {
        $this->view('noticias');
    }

    public function auth() {
        $this->view('auth/auth');
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            /* Loads the classes that will be used */
            require_once __DIR__ . '/AuthController.php';
            require_once __DIR__ . '/../models/Admin.php';
            /* Creates a new PDO object with connection to the database */
            $pdo = new PDO('mysql:host=localhost;dbname=bravatta', 'root', 'root');

            /* Creates an instance of the AuthController */
            $auth = new AuthController($pdo);

            /* Logins the admin */
            $auth->login();
        }
    }

    public function dashboard() {
        if (isset($_SESSION['admin']) && $_SESSION['admin']['role'] === 'admin') {
            $this->view('admin/dashboard');
        } else {
            http_response_code(403);
            echo "Acesso negado! Apena administradores podem aceder ao dashboard.";
            exit;
        }
    }
}