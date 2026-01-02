<?php
class Tugas {
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getAll($kondisi) {
        $query = 'SELECT * FROM tugas ';
        if($kondisi === 'all') {

        } elseif($kondisi === 'Active') {
            $query .= "WHERE status = 'aktif'";
        } elseif($kondisi === 'Selesai') {
            $query .= 'WHERE status = "selesai"';
        }
        return $this->conn->query($query);
    }
}
?>