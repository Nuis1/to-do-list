<?php

require_once BASE_PATH . '/app/core/database.php';

class User {
    private $conn;

    public function __construct() {
        global $conn;

        if (!$conn) {
            die("Koneksi database tidak tersedia");
        }

        $this->conn = $conn;
    }

    public function findByEmail($email) {
        $stmt = $this->conn->prepare(
            "SELECT * FROM pengguna WHERE email = ? LIMIT 1"
        );
        $stmt->bind_param("s", $email);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function register($nama, $email, $password) {
        $hash = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $this->conn->prepare(
            "INSERT INTO pengguna (nama_pengguna, email, kata_sandi)
             VALUES (?, ?, ?)"
        );
        $stmt->bind_param("sss", $nama, $email, $hash);
        return $stmt->execute();
    }
}
