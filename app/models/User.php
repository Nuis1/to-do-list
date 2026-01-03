<?php

class User {
    private $db;

    public function __construct() {
        require_once dirname(__DIR__) . '/core/database.php';
        $database = new Database();
        $this->db = $database->connect();
    }

    public function findByEmail($email) {
        $stmt = $this->db->prepare(
            "SELECT id_pengguna, nama_pengguna, email, kata_sandi FROM pengguna WHERE email = :email"
        );
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function authenticate($email, $password) {
        $user = $this->findByEmail($email);
        if ($user && password_verify($password, $user['kata_sandi'])) {
            return $user;
        }
        return false;
    }

    public function register($nama, $email, $password) {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $this->db->prepare(
            "INSERT INTO pengguna (nama_pengguna, email, kata_sandi)
             VALUES (:nama, :email, :password)"
        );

        return $stmt->execute([
            'nama' => $nama,
            'email' => $email,
            'password' => $hash
        ]);
    }
}
