<?php

class HomeController {
    public function index() {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }
        require_once dirname(__DIR__) . '/views/layouts/index.php';
    }
}
