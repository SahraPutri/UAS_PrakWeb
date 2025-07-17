
-- Create database
CREATE DATABASE nilai_mk;

USE nilai_mk;

-- Create table for Mahasiswa
CREATE TABLE `mahasiswas` (
  `id` BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `nama` VARCHAR(255) NOT NULL,
  `nim` VARCHAR(20) NOT NULL,
  `nomor_telepon` VARCHAR(20) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create table for Mata Kuliah
CREATE TABLE `mata_kuliahs` (
  `id` BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `kode_mk` VARCHAR(20) NOT NULL,
  `nama_mk` VARCHAR(255) NOT NULL,
  `sks` INT(10) UNSIGNED NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create table for Nilai Mahasiswa
CREATE TABLE `nilai_mahasiswas` (
  `id` BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `mahasiswa_id` BIGINT(20) UNSIGNED,
  `mata_kuliah_id` BIGINT(20) UNSIGNED,
  `nilai_angka` FLOAT NOT NULL,
  `nilai_huruf` VARCHAR(5) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswas` (`id`) ON DELETE CASCADE,
  FOREIGN KEY (`mata_kuliah_id`) REFERENCES `mata_kuliahs` (`id`) ON DELETE CASCADE
);

-- Insert some sample data into Mahasiswa
INSERT INTO `mahasiswas` (`nama`, `nim`, `nomor_telepon`, `email`) VALUES
('Sahra Putri Ernanda', '231110068', '085659730884', '231110068@student.mercubuana-yogya.ac.id'),
('Mochamad Lutfi Bintoro', '231110001', '0897654321452', '231110001@student.mercubuana-yogya.ac.id'),
('Dewi Rahma', '231110049', '0897654321452', '231110049@student.mercubuana-yogya.ac.id');

-- Insert some sample data into Mata Kuliah
INSERT INTO `mata_kuliahs` (`kode_mk`, `nama_mk`, `sks`) VALUES
('INF2144', 'Jaringan Komputer', 3),
('INF2145', 'Komputer dan Masyarakat', 3),
('INF2146', 'Pemrograman Web', 3);

-- Insert some sample data into Nilai Mahasiswa
INSERT INTO `nilai_mahasiswas` (`mahasiswa_id`, `mata_kuliah_id`, `nilai_angka`, `nilai_huruf`) VALUES
(1, 1, 90, 'A'),
(1, 2, 89, 'A'),
(2, 1, 85, 'B'),
(2, 3, 88, 'A'),
(3, 2, 78, 'B'),
(3, 3, 90, 'A');
