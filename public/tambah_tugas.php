<?php
require_once '../app/core/database.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

session_start(); // Pastikan session sudah dimulai

if (!isset($_SESSION['user']['id'])) {
    echo json_encode(['success' => false, 'message' => 'User tidak terautentikasi']);
    exit;
}
$id_pengguna = $_SESSION['user']['id'];
$judul = trim($_POST['judul'] ?? '');
$deskripsi = trim($_POST['deskripsi'] ?? '');
$tanggal_tenggat = $_POST['tanggal_tenggat'] ?? '';

// Validasi
if (empty($judul) || empty($deskripsi) || empty($tanggal_tenggat)) {
    echo json_encode(['success' => false, 'message' => 'Semua field harus diisi']);
    exit;
}

try {
    $stmt = $conn->prepare("INSERT INTO tugas (id_pengguna, judul, deskripsi, tanggal_tenggat, status) VALUES (?, ?, ?, ?, 'aktif')");
    $stmt->bind_param("isss", $id_pengguna, $judul, $deskripsi, $tanggal_tenggat);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Tugas berhasil ditambahkan']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Gagal menambahkan tugas']);
    }
    
    $stmt->close();
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}