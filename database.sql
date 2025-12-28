-- Buat database
CREATE DATABASE IF NOT EXISTS todo_app;
USE todo_app;

-- Tabel Users/Pengguna
CREATE TABLE pengguna (
    id_pengguna INT AUTO_INCREMENT PRIMARY KEY,
    nama_pengguna VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    kata_sandi VARCHAR(255) NOT NULL,
    dibuat_pada TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabel Tugas
CREATE TABLE tugas (
    id_tugas INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(100) NOT NULL,
    deskripsi TEXT,
    status ENUM('aktif', 'selesai') DEFAULT 'aktif',
    tanggal_tenggat DATE NOT NULL,
    tanggal_selesai DATE DEFAULT NULL,
    dibuat_pada TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    diperbarui_pada TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ON UPDATE CURRENT_TIMESTAMP
);


-- Insert into pengguna
INSERT INTO pengguna (nama_pengguna, email, kata_sandi)
VALUES ('Nuis', 'nuis@email.com', 'password_hash');


INSERT INTO tugas 
(judul, deskripsi, status, tanggal_tenggat, tanggal_selesai) VALUES
-- Tugas 1 
('Tugas 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit quisque faucibus.',
 'aktif', '2025-12-11', NULL),

-- Tugas 2 
('Tugas 2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit quisque faucibus.',
 'aktif', '2025-12-09', NULL),

-- Tugas 3 
('Tugas 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit quisque faucibus.',
 'aktif', '2025-12-14', NULL),

-- Tugas 4 
('Tugas 4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit quisque faucibus.',
'aktif', '2025-12-15', NULL),

-- Tugas 5 (Selesai)
('Tugas 5', 'Lorem ipsum dolor sit amet consectetur adipisicing elit quisque faucibus.',
 'selesai', '2025-12-15', '2025-12-15');
