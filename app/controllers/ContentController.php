<?php
class ContentController {
    
    public function content1() {
        $viewPath = dirname(__DIR__) . '/views/layouts/content1.php';
        
        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            echo '<div class="bg-white rounded-2xl shadow-around p-10 text-center"><p class="text-red-500">Content tidak ditemukan</p></div>';
        }
    }
    
    public function content2() {
        $viewPath = dirname(__DIR__) . '/views/layouts/content2.php';
        
        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            echo '<div class="bg-white rounded-2xl shadow-around p-10 text-center"><p class="text-red-500">Content tidak ditemukan</p></div>';
        }
    }
    
    public function content3() {
        $viewPath = dirname(__DIR__) . '/views/layouts/content3.php';
        
        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            echo '<div class="bg-white rounded-2xl shadow-around p-10 text-center"><p class="text-red-500">Content tidak ditemukan</p></div>';
        }
    }
}