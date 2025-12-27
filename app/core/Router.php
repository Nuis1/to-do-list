<?php

class Router {
    private $routes = [];
    
    public function get($url, $controller) {
        $this->routes['GET'][$url] = $controller;
    }
    
    public function post($url, $controller) {
        $this->routes['POST'][$url] = $controller;
    }
    
    public function run() {
        $method = $_SERVER['REQUEST_METHOD'];
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        
        // Remove trailing slash kecuali root
        if ($url !== '/' && substr($url, -1) === '/') {
            $url = rtrim($url, '/');
        }
        
        // Cek jika routes ada
        if (isset($this->routes[$method][$url])) {
            $this->callController($this->routes[$method][$url]);
        } else {
            http_response_code(404);
            echo "404 - Page Not Found";
        }
    }
    
    private function callController($controllerAction) {
        list($controller, $method) = explode('@', $controllerAction);
        
        $controllerFile = BASE_PATH . "/app/controllers/{$controller}.php";
        
        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            
            $controllerInstance = new $controller();
            
            if (method_exists($controllerInstance, $method)) {
                $controllerInstance->$method();
            } else {
                echo "Method {$method} not found in {$controller}";
            }
        } else {
            echo "Controller {$controller} not found";
        }
    }
}