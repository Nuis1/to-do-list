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
    id_pengguna INT NOT NULL,
    judul VARCHAR(100) NOT NULL,
    deskripsi TEXT,
    status ENUM('aktif', 'selesai') DEFAULT 'aktif',
    tanggal_tenggat DATE NOT NULL,
    tanggal_selesai DATE DEFAULT NULL,
    dibuat_pada TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    diperbarui_pada TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (id_pengguna) REFERENCES pengguna(id_pengguna)
    ON DELETE CASCADE
);


-- Insert into pengguna
INSERT INTO pengguna (nama_pengguna, email, kata_sandi)
VALUES ('Nuis', 'nuis@email.com', '$2y$10$GRlj3eRrKYb5uO.EW2GvOeclvU2Q6l7wNLIF.blC1yfz0Hz9Ftn.2'); -- password: nuis12345


INSERT INTO tugas 
(id_pengguna, judul, deskripsi, status, tanggal_tenggat, tanggal_selesai)
VALUES

(1, 'Mempelajari konsep basis data', 'Mempelajari pengertian database, DBMS, serta contoh penerapannya dalam sistem informasi.', 
 'aktif', '2025-12-11', NULL),


(1, 'Meringkas materi UML', 'Membuat ringkasan tentang use case diagram, activity diagram, dan class diagram.', 
'aktif', '2025-12-09', NULL),


(1, 'Latihan soal SQL dasar', 'Mengerjakan latihan SELECT, INSERT, UPDATE, dan DELETE pada database MySQL.', 
'aktif', '2025-12-14', NULL),


(1, 'Membaca materi jaringan komputer', 'Mempelajari model OSI dan TCP/IP beserta fungsi tiap layer.', 
 'aktif', '2025-12-15', NULL),

(1, 'Membuat rangkuman materi PKN', 'Menyusun rangkuman tentang hak dan kewajiban warga negara Indonesia.', 
 'selesai', '2025-12-15', '2025-12-15');

