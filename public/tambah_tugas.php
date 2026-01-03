<?php
require_once '../app/core/database.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

$judul = trim($_POST['judul'] ?? '');
$deskripsi = trim($_POST['deskripsi'] ?? '');
$tanggal_tenggat = $_POST['tanggal_tenggat'] ?? '';

// Validasi
if (empty($judul) || empty($deskripsi) || empty($tanggal_tenggat)) {
    echo json_encode(['success' => false, 'message' => 'Semua field harus diisi']);
    exit;
}

try {
    $stmt = $conn->prepare("INSERT INTO tugas (id_pengguna, judul, deskripsi, tanggal_tenggat, status) VALUES (1, ?, ?, ?, 'aktif')");
    $stmt->bind_param("sss", $judul, $deskripsi, $tanggal_tenggat);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Tugas berhasil ditambahkan']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Gagal menambahkan tugas']);
    }
    
    $stmt->close();
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}