<?php

class HomeController {
    public function index() {
        global $conn;

        $viewPath = BASE_PATH . '/app/views/layouts/index.php';
        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            echo "View tidak ditemukan";
        }
    }
}