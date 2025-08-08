<?php

session_start();

$controllers = ['AdminController', 'NewsController', 'EmailController'];

foreach($controllers as $controller) {
    require_once __DIR__ . "/../controllers/{$controller}.php";
}

$pdo = new PDO('mysql:host=localhost;dbname=bravatta', 'root', 'root');
$adminController = new AdminController($pdo);
$newsController = new NewsController($pdo);
$emailController = new EmailController();   

class Router {
    private $adminController;
    private $newsController;
    private $emailController;

    public function __construct(AdminController $adminController, NewsController $newsController, EmailController $emailController) {
        $this->adminController = $adminController;
        $this->newsController = $newsController;
        $this->emailController = $emailController;
    }

    public function handleRequest() {
        
        // Receives the URL path (ex: '/about', '/news/123')
        // Removes slashes from the beginning and end of the URL
        // Ex: '/news/123' becomes 'news/123'
        $url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

        // Splits the URL into segments to allow for parameters
        // Ex: if the URl is "news/123", the result will be an array ['new', '123']. If the URL is just "home", the result will be ['home']
        $segments = explode('/', $url);

        // Takes the first part of the URL, which is the page the user wants to access
        // Ex: if the URL is "news/123", the result will be "home"
        $page = $segments[0] ?: 'home';

        // Takes the second part of the URL, which can be a parameter for the page
        // Ex: if the URL is "news/123", the result will be "123". If the URL is just "news", the result will be null
        $param = $segments[1] ?? null;

        // Include the PageController, which contains the logic for handling pages
        require_once __DIR__ . '/../controllers/PageController.php';

        // Creates an instance of the PageController
        $controller = new PageController();

        $allowed_pages = ['home', 'sobre', 'rules', 'noticias', 'contacto', 'auth', 'login', 'logout', 'dashboard', 'admin', 'publicar'];

        switch ("$page/$param") {
            case 'admin/create-publisher':
                $this->adminController->createPublisher();
                break;
            case 'admin/delete-publisher':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $this->adminController->deletePublisher();
                    break;
                }
            case 'admin/publish-news':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $this->newsController->createNew();
                    break;
                }
            case 'admin/delete-news':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $this->newsController->deleteNews();
                    break;
                }
            case 'contacto/enviar':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $this->emailController->send();
                    break;
                }
            case '/logout':
                $this->adminController->logout();
                break;
        }
        
        // Verifies if he requested page is in the allowed pages array, and if the method exists in the controller
        // Ex: if there's a home() method, then it will be called
        if (in_array($page, $allowed_pages) && method_exists($controller, $page)) {
            // Calls the method corresponding to the requested page
            $controller->$page($param);
        } else {
            // If the method does'nt exists, return a 404 error and display a "Page not found" message
            http_response_code(404);
            echo "Page not found.";
        }

    }
}