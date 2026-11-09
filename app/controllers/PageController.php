<?php

class PageController {
    private function view($name, $data = []) {
        extract($data);
        require_once __DIR__ . '/../views/' . $name . '.php';
    }
    
    public function home() {
        $this->view('home');
    }

    public function sobre() {
        $this->view('sobre');
    }

    public function regras() {
        $this->view('regras');
    }


    public function noticias() {
        $this->view('noticias');
    }

    public function noticia($id) {
        require_once __DIR__ . '/NewsController.php';
        $pdo = Database::connect();
        $newsController = new NewsController($pdo);

        $id = (int) $id;
        
        $this->view('noticia', ['news' => $newsController-> getNewsById($id)]);
    }

    public function contacto() {
        $this->view('contacto');
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
            $pdo = Database::connect();

            /* Creates an instance of the AuthController */
            $auth = new AuthController($pdo);

            /* Logins the admin */
            $auth->login();
        }
    }

    public function logout() {
        require_once __DIR__ . '/AdminController.php';
        $pdo = Database::connect();
        $adminController = new AdminController($pdo);
        $adminController->logout();
    }

    public function dashboard() {
        if (isset($_SESSION['admin']) && $_SESSION['admin']['role'] === 'admin') {
            $pdo = Database::connect();
            $adminController = new AdminController($pdo);
            $publishers = $adminController->getAllPublishers();

            $this->view('admin/dashboard', ['publishers' => $publishers]);
        } else {
            http_response_code(403);
            echo "Acesso negado! Apenas administradores podem aceder ao dashboard.";
            exit;
        }
    }

    public function publicar() {
        if (isset($_SESSION['admin']) && $_SESSION['admin']['role'] === 'admin' || $_SESSION['admin']['role'] === 'publisher') {
            $this->view('admin/publicar');
        } else {
            http_response_code(403);
            echo "Acesso negado! Apenas administradores ou publicadores podem publicar notícias.";
            exit;
        }
    }
}
