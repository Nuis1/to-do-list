<?php

require_once dirname(__DIR__) . '/models/User.php';

class LoginController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->authenticate();
        } else {
            require_once '../app/views/auth/login.php';
        }
    }

    private function authenticate() {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        if (empty($email) || empty($password)) {
            echo "Email dan password harus diisi.";
            return;
        }

        $userModel = new User();
        $user = $userModel->authenticate($email, $password);

        if ($user) {
            $_SESSION['user_id'] = $user['id_pengguna'];
            $_SESSION['user_name'] = $user['nama_pengguna'];
            header('Location: /');
            exit;
        } else {
            echo "Email atau password salah.";
        }
    }
}
