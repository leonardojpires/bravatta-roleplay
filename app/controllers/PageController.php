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
}