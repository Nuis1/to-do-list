<?php
require_once '../app/core/database.php';
require_once '../app/models/Tugas.php';

class TugasController {
    private $model;

    public function __construct($conn)
    {
        $this->model = new Tugas($conn);
    }

    public function index() {
        $result = $this->model->getAll();
        $today = new DateTime();
        $data = [];

        while ($row = $result->fetch_assoc()) {
            $deadline = new DateTime($row['tanggal_tenggat']);
            $diff = (int)$today->diff($deadline)->format('%r%a');

            if ($row['status'] === 'selesai') {
                $row['meta'] = [
                    'border' => 'border-green-600',
                    'badge'  => 'bg-green-100 text-green-800',
                    'label'  => 'Selesai',
                    'info'   => null
                ];
            } elseif($diff < 0) {
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
}

?>