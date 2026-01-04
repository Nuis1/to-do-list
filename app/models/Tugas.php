<?php
class Tugas
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getAll($kondisi, $id_user)
    {
        $query = "SELECT * FROM tugas WHERE id_pengguna = ?";
        $types = "i";
        $params = [$id_user];

        if ($kondisi === 'Active') {
            $query .= " AND status = ?";
            $types .= "s";
            $params[] = "aktif";
        } elseif ($kondisi === 'Selesai') {
            $query .= " AND status = ?";
            $types .= "s";
            $params[] = "selesai";
        }

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param($types, ...$params);
        $stmt->execute();

        return $stmt->get_result();
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
