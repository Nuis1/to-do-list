<?php
require_once '../app/core/database.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

session_start();

if (!isset($_SESSION['user']['id'])) {
    echo json_encode(['success' => false, 'message' => 'User tidak terautentikasi']);
    exit;
}

$id_pengguna = $_SESSION['user']['id'];
$id_tugas = $_POST['id_tugas'] ?? '';
$judul = trim($_POST['judul'] ?? '');
$deskripsi = trim($_POST['deskripsi'] ?? '');
$tanggal_tenggat = $_POST['tanggal_tenggat'] ?? '';

// Validasi
if (empty($id_tugas) || empty($judul) || empty($deskripsi) || empty($tanggal_tenggat)) {
    echo json_encode(['success' => false, 'message' => 'Semua field harus diisi']);
    exit;
}

try {
    $stmt = $conn->prepare("UPDATE tugas SET judul = ?, deskripsi = ?, tanggal_tenggat = ? WHERE id_tugas = ? AND id_pengguna = ?");
    $stmt->bind_param("sssii", $judul, $deskripsi, $tanggal_tenggat, $id_tugas, $id_pengguna);
    
    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo json_encode(['success' => true, 'message' => 'Tugas berhasil diupdate']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Tugas tidak ditemukan atau tidak ada perubahan']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Gagal mengupdate tugas']);
    }
    
    $stmt->close();
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}