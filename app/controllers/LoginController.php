<?php

require_once BASE_PATH . '/app/models/User.php';

class LoginController
{

    public function login()
    {
        require_once BASE_PATH . '/app/views/auth/login.php';
    }

    public function authenticate()
    {
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        $user = new User();
        $result = $user->login($email, $password);

        if (!$result) {
        $_SESSION['error'] = "Email atau password salah";
        header("Location: /login");
        exit;
    }

        if ($result) {
            $_SESSION['user'] = [
                'id'    => $result['id_pengguna'],
                'nama'  => $result['nama_pengguna'],
                'email' => $result['email']
            ];

            $_SESSION['last_activity'] = time();

            header("Location: /");
            exit;
        }

        $_SESSION['error'] = "Email atau password salah";
        header("Location: /login");
        exit;
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        header("Location: /login");
        exit;
    }
}
