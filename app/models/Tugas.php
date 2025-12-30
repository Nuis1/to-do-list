<?php
class Tugas {
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getAll() {
        $query = 'SELECT * FROM tugas ORDER BY tanggal_tenggat ASC';
        return $this->conn->query($query);
    }
}
?>