<?php
class Tugas
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getAll($kondisi)
    {
        $query = 'SELECT * FROM tugas ';
        if ($kondisi === 'Active') {
            $query .= "WHERE status = 'aktif'";
        } elseif ($kondisi === 'Selesai') {
            $query .= "WHERE status = 'selesai'";
        }
        
        return $this->conn->query($query);
    }

    public function toggleStatus($id)
    {
        // Ambil status saat ini
        $statement = $this->conn->prepare("SELECT status FROM tugas WHERE id_tugas = ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();

        if (!$result) return false;

        // Toggle status dengan normalisasi case
        $currentStatus = strtolower(trim($result['status']));
        $statusBaru = ($currentStatus === 'selesai') ? 'aktif' : 'selesai';

        // Update status
        $update = $this->conn->prepare("UPDATE tugas SET status = ? WHERE id_tugas = ?");
        $update->bind_param("si", $statusBaru, $id);
        
        return $update->execute();
    }
}