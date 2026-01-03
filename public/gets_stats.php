<?php
require_once '../app/core/database.php';
require_once '../app/controllers/TugasController.php';

header('Content-Type: application/json');

$controller = new TugasController($conn);
$tugasList = $controller->index('all');
$tugasListActive = $controller->index('Active');
$tugasListSelesai = $controller->index('Selesai');

$stats = [
    'total' => count($tugasList),
    'aktif' => count($tugasListActive),
    'selesai' => count($tugasListSelesai)
];

echo json_encode($stats);