<?php

require_once BASE_PATH . '/app/models/User.php';

class RegisterController {

    public function register() {
        require_once BASE_PATH . '/app/views/auth/register.php';
    }

    public function store() {
        $nama  = trim($_POST['nama']);
        $email = trim($_POST['email']);
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi_password'];

        if ($password !== $konfirmasi) {
            $_SESSION['error'] = "Password dan konfirmasi tidak sama!";
            header("Location: /register");
            exit;
        }

        $user = new User();

        if ($user->findByEmail($email)) {
            $_SESSION['error'] = "Email sudah terdaftar!";
            header("Location: /register");
            exit;
        }

        if ($user->register($nama, $email, $password)) {
            $_SESSION['success'] = "Registrasi berhasil. Silakan login.";
            header("Location: /login");
            exit;
        }

        $_SESSION['error'] = "Registrasi gagal!";
        header("Location: /register");
        exit;
    }
}
