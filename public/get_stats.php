<?php
require_once '../app/core/database.php';
require_once '../app/controllers/TugasController.php';

header('Content-Type: application/json');

session_start(); // Pastikan session sudah dimulai

if (!isset($_SESSION['user']['id'])) {
    echo json_encode(['success' => false, 'message' => 'User tidak terautentikasi']);
    exit;
}
$id_user = $_SESSION['user']['id'];
$controller = new TugasController($conn);
$tugasList = $controller->index('all', $id_user);
$tugasListActive = $controller->index('Active', $id_user);
$tugasListSelesai = $controller->index('Selesai', $id_user);

$stats = [
    'total' => count($tugasList),
    'aktif' => count($tugasListActive),
    'selesai' => count($tugasListSelesai)
];

echo json_encode($stats);