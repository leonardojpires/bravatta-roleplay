<?php

class Router {
    public function handleRequest() {
        
        // Checks if there is a specific pasge requested
        // If not, if defaults to 'home'
        $page = $_GET['page'] ?? 'home';

        // Include the PageController, which contains the logic for handling pages
        require_once '../controllers/PageController.php';

        // Creates an instance of the PageController
        $controller = new PageController();

        // Verifies if the method exists in the controller
        // Ex: if there's a home() method, then it will be called
        if (method_exists($controller, $page)) {
            // Calls the method corresponding to the requested page
            $controller->$page();
        } else {
            // If the method does'nt exists, return a 404 error and display a "Page not found" message
            http_response_code(404);
            echo "Page not found.";
        }
    }
}