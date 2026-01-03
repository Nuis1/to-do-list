<?php
require_once '../app/core/database.php';
require_once '../app/controllers/TugasController.php';

header('Content-Type: application/json');

if (!isset($_POST['id_tugas'])) {
    echo json_encode(['success' => false, 'message' => 'ID tidak ditemukan']);
    exit;
}

$controller = new TugasController($conn);
$id = (int)$_POST['id_tugas'];

try {
    $success = $controller->getModel()->toggleStatus($id);
    echo json_encode(['success' => $success]);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}