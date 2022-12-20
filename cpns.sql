-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 05:33 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpns`
--

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `B_id` int(11) NOT NULL,
  `U_NIK` char(16) NOT NULL,
  `B_nama` varchar(100) NOT NULL,
  `B_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`B_id`, `U_NIK`, `B_nama`, `B_file`) VALUES
(40001, '10000000000001', 'Foto Diri', 'dummy.file'),
(40002, '10000000000001', 'Ijazah', 'dummy.file'),
(40003, '10000000000001', 'CV', 'dummy.file'),
(40004, '10000000000001', 'Transkrip nilai', 'dummy.file'),
(40005, '10000000000001', 'Sertif akreditasi', 'dummy.file'),
(40006, '10000000000001', 'Surat tanda registrasi', 'dummy.file'),
(40007, '10000000000002', 'Foto Diri', 'dummy.file'),
(40008, '10000000000002', 'Ijazah', 'dummy.file'),
(40009, '10000000000002', 'CV', 'dummy.file'),
(40010, '10000000000002', 'Transkrip nilai', 'dummy.file'),
(40011, '10000000000002', 'Sertif akreditasi', 'dummy.file'),
(40012, '10000000000002', 'Surat tanda registrasi', 'dummy.file'),
(40013, '10000000000003', 'Foto Diri', 'dummy.file'),
(40014, '10000000000003', 'Ijazah', 'dummy.file'),
(40015, '10000000000003', 'CV', 'dummy.file'),
(40016, '10000000000003', 'Transkrip nilai', 'dummy.file'),
(40017, '10000000000003', 'Sertif akreditasi', 'dummy.file'),
(40018, '10000000000003', 'Surat tanda registrasi', 'dummy.file'),
(40019, '10000000000004', 'Foto Diri', 'dummy.file'),
(40020, '10000000000004', 'Ijazah', 'dummy.file'),
(40021, '10000000000004', 'CV', 'dummy.file'),
(40022, '10000000000004', 'Transkrip nilai', 'dummy.file'),
(40023, '10000000000004', 'Sertif akreditasi', 'dummy.file'),
(40024, '10000000000004', 'Surat tanda registrasi', 'dummy.file'),
(40025, '10000000000005', 'Foto Diri', 'dummy.file'),
(40026, '10000000000005', 'Ijazah', 'dummy.file'),
(40027, '10000000000005', 'CV', 'dummy.file'),
(40028, '10000000000005', 'Transkrip nilai', 'dummy.file'),
(40029, '10000000000005', 'Sertif akreditasi', 'dummy.file'),
(40030, '10000000000005', 'Surat tanda registrasi', 'dummy.file'),
(40031, '10000000000006', 'Foto Diri', 'dummy.file'),
(40032, '10000000000006', 'Ijazah', 'dummy.file'),
(40033, '10000000000006', 'CV', 'dummy.file'),
(40034, '10000000000006', 'Transkrip nilai', 'dummy.file'),
(40035, '10000000000006', 'Sertif akreditasi', 'dummy.file'),
(40036, '10000000000006', 'Surat tanda registrasi', 'dummy.file'),
(40037, '10000000000007', 'Foto Diri', 'dummy.file'),
(40038, '10000000000007', 'Ijazah', 'dummy.file'),
(40039, '10000000000007', 'CV', 'dummy.file'),
(40040, '10000000000007', 'Transkrip nilai', 'dummy.file'),
(40041, '10000000000007', 'Sertif akreditasi', 'dummy.file'),
(40042, '10000000000007', 'Surat tanda registrasi', 'dummy.file');

-- --------------------------------------------------------

--
-- Table structure for table `diberi`
--

CREATE TABLE `diberi` (
  `U_NIK` char(16) NOT NULL,
  `S_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diberi`
--

INSERT INTO `diberi` (`U_NIK`, `S_id`) VALUES
('10000000000001', 1),
('10000000000001', 2),
('10000000000001', 3),
('10000000000001', 4),
('10000000000001', 5),
('10000000000002', 1),
('10000000000002', 2),
('10000000000002', 3),
('10000000000002', 4),
('10000000000002', 5),
('10000000000003', 1),
('10000000000003', 2),
('10000000000003', 3),
('10000000000003', 4),
('10000000000003', 5),
('10000000000004', 1),
('10000000000004', 2),
('10000000000004', 3),
('10000000000004', 4),
('10000000000004', 5),
('10000000000005', 1),
('10000000000005', 2),
('10000000000005', 3),
('10000000000005', 4),
('10000000000005', 5),
('10000000000006', 1),
('10000000000006', 2),
('10000000000006', 3),
('10000000000006', 4),
('10000000000006', 5),
('10000000000007', 1),
('10000000000007', 2),
('10000000000007', 3),
('10000000000007', 4),
('10000000000007', 5);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `J_id` int(11) NOT NULL,
  `J_jabatan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`J_id`, `J_jabatan`) VALUES
(20001, 'Analis Perikanan Budidaya'),
(20002, 'Pelaksana/Terampil - Asisten Pengelola Produksi Perikanan Tangkap'),
(20003, 'Pengendali Hama dan Penyakit Ikan'),
(20004, 'Pengawas Perikanan Bidang Pembudidayaan Ikan'),
(20005, 'Analis Pasar Hasil Perikanan'),
(20006, 'Juru Mudi'),
(20007, 'Kelasi'),
(20008, 'Pengelola Teknis Perikanan Budidaya'),
(20009, 'Pelaksana/Terampil - Penyuluh Perikanan');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `L_id` int(11) NOT NULL,
  `L_lokasi` varchar(50) NOT NULL,
  `L_ruang` varchar(50) NOT NULL,
  `L_nomorDuduk` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`L_id`, `L_lokasi`, `L_ruang`, `L_nomorDuduk`) VALUES
(30001, 'Surabaya', '1', '1'),
(30002, 'Surabaya', '1', '2'),
(30003, 'Surabaya', '1', '3'),
(30004, 'Surabaya', '1', '4'),
(30005, 'Surabaya', '1', '5'),
(30006, 'Surabaya', '2', '1'),
(30007, 'Surabaya', '2', '2'),
(30008, 'Surabaya', '2', '3'),
(30009, 'Surabaya', '2', '4'),
(30010, 'Surabaya', '2', '5'),
(30011, 'Sidoarjo', '1', '1'),
(30012, 'Sidoarjo', '1', '2'),
(30013, 'Sidoarjo', '1', '3'),
(30014, 'Sidoarjo', '1', '4'),
(30015, 'Sidoarjo', '1', '5');

-- --------------------------------------------------------

--
-- Table structure for table `panitia`
--

CREATE TABLE `panitia` (
  `P_id` int(11) NOT NULL,
  `P_nama` varchar(100) NOT NULL,
  `P_alamat` varchar(100) NOT NULL,
  `P_nomorTelepon` varchar(115) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `panitia`
--

INSERT INTO `panitia` (`P_id`, `P_nama`, `P_alamat`, `P_nomorTelepon`) VALUES
(10001, 'Nadine Hamizah', 'Temanggung, Jawa Tengah', '082330602071'),
(10002, 'Pamungkas', 'Nganjuk, Jawa Timur', '082193947112'),
(10003, 'Dafka Satya', 'Surabaya, Jawa Timur', '082190672986'),
(10004, 'Rizky Febian', 'Pasuruan, Jawa Timur', '085776422447'),
(10005, 'Wiranata Susetyo', 'Surabaya, Jawa Timur', '081219550857');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `S_id` int(11) NOT NULL,
  `S_pertanyaan` mediumtext NOT NULL,
  `S_a` mediumtext NOT NULL,
  `S_b` mediumtext NOT NULL,
  `S_c` mediumtext NOT NULL,
  `S_d` mediumtext NOT NULL,
  `S_jawaban` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`S_id`, `S_pertanyaan`, `S_a`, `S_b`, `S_c`, `S_d`, `S_jawaban`) VALUES
(1, 'Berikut yang merupakan karakteristik zooplankton adalah', 'Jenis dan jumlahnya lebih banyak dibandingkan dengan fitoplankton', 'Jenis dan jumlahnya lebih sedikit dibandingkan dengan fitoplankton', 'Semuanya berukuran renik', 'Bisa mengakibatkan kematian ikan massal bisa terjadi pertumbuhan secara blooming', 'B'),
(2, 'Letak tropfik kelompok nekton dalam laut ', 'Lebih rendah dari plankton', 'Lebih rendah dari bentos', 'Lebih tinggi dari plankton dan bentos', 'Sama dengan plankton dan bentos', 'C'),
(3, 'Zona afotik secara berurutan berdasarkan kedalaman air laut kea rah dalam adalah ', 'Hadalpelagik – abisalpelagik – batil pelagik – mesopelagik', 'Hadalpelagik – mesopelagik – abisalpelagik – batil pelagik', 'Abisalpelagik – hadalpelagik- batil pelagic – mesopelagik', 'Mesopelagik - batil pelagic – abisalpelagik – hadalpelagi', 'D'),
(4, 'Zona Laut yang menjadi habitat alga merah pada umumnya adalah', 'Sub litoral', 'Bawah litoral', 'Epipelagik', 'Hadal pelagic', 'B'),
(5, 'Dampak yang perpotensi timbuk dari penebangan hutan bagi kerusakan ekosistem peraitan yang memberpkan pengaruh pada fisiologi tumbuhan adalah', 'Berkurangnya populasi ikan', 'Berkurangnya populasi plankton', 'Keanekaragaman berkurang', 'Tumbuhan sulit berfotosintesis', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `U_NIK` char(16) NOT NULL,
  `P_id` int(11) NOT NULL,
  `J_id` int(11) NOT NULL,
  `L_id` int(11) NOT NULL,
  `U_nama` varchar(100) NOT NULL,
  `U_alamat` varchar(100) NOT NULL,
  `U_tempatLahir` varchar(50) NOT NULL,
  `U_tanggalLahir` date NOT NULL,
  `U_jenisKelamin` char(1) NOT NULL,
  `U_nomorPeserta` char(14) DEFAULT NULL,
  `U_pendidikan` varchar(50) NOT NULL,
  `U_telepon` varchar(15) NOT NULL,
  `U_email` varchar(100) NOT NULL,
  `U_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`U_NIK`, `P_id`, `J_id`, `L_id`, `U_nama`, `U_alamat`, `U_tempatLahir`, `U_tanggalLahir`, `U_jenisKelamin`, `U_nomorPeserta`, `U_pendidikan`, `U_telepon`, `U_email`, `U_password`) VALUES
('3326160107400474', 10001, 20001, 30001, 'Rusmini', 'Jl Jend Gatot Subroto BI II/7 Kawasan Industri Candi, Semarang, Jawa Tengah', 'Semarang', '2001-02-01', 'P', '10000000000001', 'S1 - Teknologi Hasil Perikanan', '089630309951', 'rusmini@gmail.com', '12345'),
('3326160107540309', 10001, 20003, 30013, 'Zahra Safitri', 'Jl Merdeka 866, Palembang, Sumatera Selatan', 'Palembang', '2001-08-16', 'P', 'null', 'D3 - Teknologi Hasil Perikanan', '085813221927', 'zahrasafitri@gmail.com', '12345'),
('3326160407670004', 10004, 20001, 30010, 'Widya Permata Sari', 'Jl Jend Gatot Subroto 517, Bandung, Jawa Barat', 'Bandung', '2001-11-02', 'P', 'null', 'S1 - Teknologi Hasil Perikanan', '085648525052', 'widyapermata@gmail.com', '12345'),
('3326160706800001', 10003, 20001, 30009, 'Dewi Cantika Putri', 'Jl Dharmawangsa 78-80, Rambipuji, Jember, Jawa Timur', 'Jember', '2001-02-09', 'P', 'null', 'S1 - Teknologi Hasil Perikanan', '085329804377', 'cantikadewip@gmail.com', '12345'),
('3326161106680002', 10004, 20001, 30009, 'Dewi Sarah', 'Jl Batu Nunggal Indah 201, Bandung, Jawa Barat', 'Bandung', '2001-02-24', 'P', 'null', 'S1 - Teknologi Hasil Perikanan', '085696232418', 'sarahdewi@gmail.com', '12345'),
('3326161402090003', 10001, 20005, 30001, 'Rizki Nur Putra', 'Jl Nyi Mas Wanawati No 15, Tegalwangi, Cirebon, Jawa Barat', 'Cirebon', '2001-02-16', 'L', 'null', 'S1 - Teknologi Hasil Perikanan', '085257344607', 'rizkiputra@gmail.com', '12345'),
('3326161506050001', 10001, 20008, 30004, 'Sri Rahayu', 'Jl MH Thamrin Kav 28-30 Plaza, Jakarta Utara, DKI Jakarta', 'Jakarta', '2001-02-19', 'P', 'null', 'S2 - Teknologi Hasil Perikanan', '0853-97243555', 'srirahayu@gmail.com', '12345'),
('3326161606790002', 10003, 20001, 30003, 'Laila Purnama', 'Jl Raya Jemursari D-2, Surabaya, Jawa Timur', 'Surabaya', '2001-09-20', 'P', '10000000000003', 'S1 - Teknologi Hasil Perikanan', '08971506779', 'lailapurnama@gmail.com', '12345'),
('3326161905910023', 10001, 20001, 30002, 'Ari Purnomo', 'Jl Nyi Mas Wanawati No 09, Tegalwangi, Cirebon, Jawa Barat', 'Cirebon', '2001-05-01', 'L', 'null', 'S1 - Teknologi Hasil Perikanan', '082113720777', 'purnomoari@gmail.com', '12345'),
('3326162209000003', 10002, 20008, 30012, 'Chainia Gunawan', 'Jl Raya Kaligawe Km 5, Semarang, Jawa Tengah', 'Semarang', '2001-02-12', 'P', 'null', 'S1 - Teknologi Hasil Perikanan', '085696228417', 'chaigunawan@gmail.com', '12345'),
('3326162610790021', 10001, 20001, 30008, 'Fredy Wijaya', 'Jl Raya Juanda Ruko Permata Juanda Superblok A/8, Surabaya, Jawa Timur', 'Surabaya', '2001-02-08', 'L', 'null', 'S1 - Teknologi Hasil Perikanan', '085399074249', 'fredywijaya@gmail.com', '12345'),
('3326164101680022', 10001, 20001, 30011, 'Putu Bagaskara', 'Jl Sarono Jiwo III 19, Surabaya, Jawa Timur', 'Surabaya', '2001-02-11', 'L', 'null', 'S1 - Teknologi Hasil Perikanan', '085213200303', 'putubagaskr@gmail.com', '12345'),
('3326164107440286', 10003, 20005, 30007, 'Ahmad Sairozi', 'Jl Kaliurang Km 5/82, Magelang, Jawa Tengah', 'Magelang', '2001-03-02', 'L', 'null', 'S1 - Teknologi Hasil Perikanan', '085213931566', 'sairoziahmad@gmail.com', '12345'),
('3326164107600589', 10002, 20001, 30015, 'Gandhi Fernandez', 'Jl Puspogiwang Brt Kompl PKL, Semarang, Jawa Tengah', 'Semarang', '2001-02-15', 'L', 'null', 'S1 - Teknologi Hasil Perikanan', '085813221927', 'gandhifernand@gmail.com', '12345'),
('3326164410800003', 10004, 20002, 30004, 'Esa Riskita Dewi', 'Jl Nyi Mas Wanawati No 32, Tegalwangi, Cirebon, Jawa Barat', 'Cirebon', '2001-05-07', 'P', '10000000000004', 'S1 - Teknologi Hasil Perikanan', '089694938291', 'rizkitadewi@gmail.com', '12345'),
('3326164710810002', 10002, 20004, 30006, 'Effendi Putra Muhammad', 'Jl Supiturang Km 9/122, Magelang, Jawa Tengah', 'Magelang', '2001-02-21', 'L', 'null', 'S1 - Teknologi Hasil Perikanan', '081219550857', 'effendiputramuhammad@gmail.com', '12345'),
('3326165206560003', 10001, 20006, 30005, 'Nur Fadhillah', 'Jl Taman Bundaran Indah BI U/242, Jakarta Selatan, DKI Jakarta', 'Jakarta', '2001-02-20', 'P', 'null', 'S1 - Teknologi Hasil Perikanan', '085776422447', 'nurfadhillah@gmail.com', '12345'),
('3326165403850003', 10002, 20001, 30014, 'Thomas Sanjaya', 'Jl Hilir Sapta Marga II, Semarang, Jawa Tengah', 'Semarang', '2001-02-14', 'L', 'null', 'S1 - Teknologi Hasil Perikanan', '081315989578', 'tomsanjaya@gmail.com', '12345'),
('3326165407590001', 10003, 20001, 30003, 'Figo Wibowo', 'Jl Terminal Baru 26, Jakarta Utara, DKI Jakarta', 'Jakarta', '2001-02-18', 'L', 'null', 'S1 - Teknologi Hasil Perikanan', '08975532756', 'figowibowo@gmail.com', '12345'),
('3326165706070003', 10001, 20009, 30007, 'Serena Puteri', 'Jl Cinere Raya BI A/66, Jakarta Pusat, DKI Jakarta', 'DKI Jakarta', '2001-02-07', 'P', '10000000000007', 'S1 - Teknologi Hasil Perikanan', '085240233277', 'serenaputeri@gmail.com', '12345'),
('3326165907820002', 10002, 20003, 30006, 'Stevy Horison', 'Jl KH Wahid Hasyim 18, Jakarta Pusat, DKI Jakarta', 'DKI Jakarta', '2001-08-06', 'P', '10000000000006', 'S1 - Teknologi Hasil Perikanan', '085399275281', 'horizonstevy@gmail.com', '12345'),
('3326166004030022', 10002, 20002, 30002, 'Firdaus Muhajirin', 'Jl Kebonsari Elveka I/7 Meruya Selatan, Surabaya, Jawa Timur', 'Surabaya', '2001-03-02', 'L', '10000000000002', 'S1 - Teknologi Hasil Perikanan', '085286237915', 'firdausm@gmail.com', '12345'),
('3326166806680002', 10001, 20007, 30008, 'Sania Nur Khanza', 'Jl Taman Polonia III/48, Medan, Sumatera Utara', 'Medan', '2001-02-23', 'P', 'null', 'S1 - Teknologi Hasil Perikanan', '082190730146', 'saniakhanza@gmail.com', '12345'),
('3326167001090001', 10001, 20001, 30005, 'Saipul Anam', 'Jl Nyi Mas Wanawati No 47, Tegalwangi, Cirebon, Jawa Barat', 'Cirebon', '2001-02-05', 'L', '10000000000005', 'S1 - Teknologi Hasil Perikanan', '085327333861', 'saipulanam@gmail.com', '12345'),
('3326167101940001', 10002, 20004, 30010, 'Fitri Cahaya', 'Jl Jemursari XIII 34, Suarabaya, Jawa Timur', 'Surabaya', '2001-12-01', 'P', 'null', 'S1 - Teknologi Hasil Perikanan', '081286616893', 'fitricahaya@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`B_id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`J_id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`L_id`);

--
-- Indexes for table `panitia`
--
ALTER TABLE `panitia`
  ADD PRIMARY KEY (`P_id`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`S_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`U_NIK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `B_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40043;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `J_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20010;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `L_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30016;

--
-- AUTO_INCREMENT for table `panitia`
--
ALTER TABLE `panitia`
  MODIFY `P_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10006;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
