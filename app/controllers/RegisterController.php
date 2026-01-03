<?php

class RegisterController {
    // GET /register
    public function register() {
        require_once dirname(__DIR__) . '/views/auth/register.php';
    }

    // POST /register
    public function store() {
        require_once dirname(__DIR__) . '/models/User.php';

        $nama  = trim($_POST['nama']);
        $email = trim($_POST['email']);
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi_password'];

        // Validasi
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
