<?php
require_once '../app/core/database.php';
require_once '../app/models/Tugas.php';

class TugasController
{
    private $model;

    public function __construct($conn)
    {
        $this->model = new Tugas($conn);
    }

    public function getModel()
    {
        return $this->model;
    }

    public function index($kondisi, $id_user)
    {
        $result = $this->model->getAll($kondisi, $id_user);
        $today = new DateTime();
        $data = [];

        while ($row = $result->fetch_assoc()) {
            $deadline = new DateTime($row['tanggal_tenggat']);
            $diff = (int)$today->diff($deadline)->format('%r%a');
            
            // Normalisasi status
            $status = strtolower(trim($row['status']));

            if ($status === 'selesai') {
                $row['meta'] = [
                    'border' => 'border-green-600',
                    'badge'  => 'bg-green-100 text-green-800',
                    'label'  => 'Selesai',
                    'info'   => null
                ];
            } elseif ($diff < 0) {
                $row['meta'] = [
                    'border' => 'border-red-600',
                    'badge'  => 'bg-red-100 text-red-800',
                    'label'  => 'Terlambat',
                    'info'   => 'Terlambat ' . abs($diff) . ' hari'
                ];
            } else {
                $row['meta'] = [
                    'border' => 'border-blue-600',
                    'badge'  => 'bg-blue-100 text-blue-800',
                    'label'  => 'Aktif',
                    'info'   => $diff . ' hari lagi'
                ];
            }
            $data[] = $row;
        }
        return $data;
    }

    public function updateStatus()
    {
        if (!isset($_GET['id_tugas'])) {
            header("Location: " . ($_SERVER['HTTP_REFERER'] ?? 'index.php'));
            exit;
        }

        $id = (int)$_GET['id_tugas'];
        $success = $this->model->toggleStatus($id);

        // Redirect kembali
        header("Location: " . ($_SERVER['HTTP_REFERER'] ?? 'index.php'));
        exit;
    }
}