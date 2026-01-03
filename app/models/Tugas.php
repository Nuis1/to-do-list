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
        
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function toggleStatus($id)
    {
        // Ambil status saat ini
        $stmt = $this->conn->prepare("SELECT status FROM tugas WHERE id_tugas = ?");
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$result) return false;

        // Toggle status dengan normalisasi case
        $currentStatus = strtolower(trim($result['status']));
        $statusBaru = ($currentStatus === 'selesai') ? 'aktif' : 'selesai';

        // Update status
        $update = $this->conn->prepare("UPDATE tugas SET status = ? WHERE id_tugas = ?");
        return $update->execute([$statusBaru, $id]);
    }
}