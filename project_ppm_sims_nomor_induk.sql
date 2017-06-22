-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 06, 2017 at 01:21 PM
-- Server version: 10.2.3-MariaDB-log
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_ppm_sims`
--

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(11) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `id_universitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `fakultas`, `id_universitas`) VALUES
(9, 'Kedokteran Gigi', 5),
(10, 'MIPA', 10),
(11, 'Teknik', 0),
(12, 'FISIPOL', 0),
(15, 'HUKUM', 0),
(16, 'Ilmu Budaya', 0),
(17, 'Kehutanan', 0),
(18, 'Sekolah Vokasi', 0),
(19, 'Fakultas Ilmu Pendidikan', 0),
(20, 'Fakultas Bahasa dan Seni', 0),
(21, 'Fakultas Ilmu Sosial', 0),
(22, 'Fakultas Ilmu Keolahragaa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(3) NOT NULL,
  `guru` varchar(30) NOT NULL,
  `nama_panggilan` varchar(10) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_asal` varchar(250) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `guru`, `nama_panggilan`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `tempat_asal`, `id_kelas`) VALUES
(29, 'Muhammad Khoiruddin', 'Khoir', 'Perempuan', 'Yogyakarta', '1990-02-06', 'Kepuh GK 3, No. 831 Klitren, Gondokusuman', 5),
(30, 'Ahmad Busthomi', 'Ahmad', 'Perempuan', 'Surabaya', '1988-08-10', 'Jl. Ngagel Raya No. 50, Gubeng, Surabaya', 4),
(31, 'Nining Purwaningsih', 'Nining', 'Perempuan', 'Pati', '1989-10-11', 'Jl. Basuki Rahmat 50, Kota Pati, Jawa Tengah', 7),
(32, 'Retno Putri Andayani', 'Putri', 'Perempuan', 'Yogyakarta', '1984-10-16', 'Jl. Muja-Muju No.120, Sidobali Yogyakarta', 6),
(33, 'Ahmad Fachruda Aziz', 'Aziz', 'Perempuan', 'Yogyakarta', '1987-07-17', 'Kepuh GK 3, No. 700, Klitren Gondokusuman', 4),
(34, 'Rahmad Fauzi', 'Rahmad', 'Laki-laki', 'Bandung', '1991-04-05', 'Jl. Pemuda no. 12, Kota Bandung', 7);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `id_fakultas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `jurusan`, `id_fakultas`) VALUES
(1, 'Teknik Informatika', 0),
(2, 'Teknik Mesin', 0),
(3, 'Teknik Geologi', 0),
(4, 'Teknik Kimia', 0),
(5, 'Ilmu Komputer', 0),
(6, 'Pendidikan Dokter', 0),
(7, 'Kedokteran Gigi', 0),
(8, 'Ilmu Hukum', 0),
(10, 'Kimia', 0),
(11, 'Matematika', 0),
(12, 'Pendidikan Olahraga', 0),
(13, 'Bahasa Inggris', 0),
(14, 'Bahasa Korea', 0),
(15, 'Bahasa Indonesia', 0),
(16, 'Fisika', 0),
(17, 'Manajemen Pendidikan', 0),
(18, 'Pendidikan Guru Sekolah Dasar', 0),
(19, 'Pendidikan Anak Usia Dini', 0),
(20, 'Psikologi', 0),
(21, 'Pendidikan Luar Biasa', 0),
(22, 'Pendidikan Bahasa dan Seni', 0),
(23, 'Sastra Inggris', 0),
(24, 'Pendidikan Bahasa Jawa', 0),
(25, 'Teknik Nuklir', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kalender`
--

CREATE TABLE `kalender` (
  `id_kegiatan` int(11) NOT NULL,
  `judul_kegiatan` varchar(255) NOT NULL,
  `tanggal_kegiatan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`) VALUES
(4, 'Dasar'),
(5, 'Menengah'),
(6, 'Atas'),
(7, 'Lanjut');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(5) NOT NULL,
  `materi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `materi`) VALUES
(1, 'Syafahi (Ujian Lisan)'),
(2, 'Tahriri (Ujian Tulis)'),
(3, 'Praktik Ibadah (Qauliyah dan Amaliyah)');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `is_active` int(1) NOT NULL,
  `is_parent` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `link`, `icon`, `is_active`, `is_parent`) VALUES
(29, 'Jurusan Kuliah', 'jurusan', 'fa fa-graduation-cap', 1, 30),
(30, 'Edit Kategori Siswa', 'nolink', 'fa fa-gears', 1, 0),
(32, 'Daftar Siswa', 'siswa', 'fa fa-users', 1, 0),
(35, 'Daftar Guru', 'guru', 'fa fa-user', 1, 0),
(37, 'KELOLA MANAJEMEN', 'menu', 'fa fa-gears', 1, 0),
(39, 'UNIVERSITAS', 'universitas', 'fa fa-graduation-cap', 1, 30),
(42, 'Fakultas', 'fakultas', 'fa fa-graduation-cap', 1, 30),
(44, 'Kelas', 'kelas', 'fa fa-graduation-cap', 1, 30);

-- --------------------------------------------------------

--
-- Table structure for table `nomor_induk_guru`
--

CREATE TABLE `nomor_induk_guru` (
  `id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  `guru_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nomor_induk_siswa`
--

CREATE TABLE `nomor_induk_siswa` (
  `id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  `siswa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `idreport` int(11) NOT NULL,
  `bulan` varchar(50) DEFAULT NULL,
  `nilai` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`idreport`, `bulan`, `nilai`) VALUES
(1, 'mei', 30),
(2, 'juni', 40),
(3, 'agustus', 40),
(4, 'september', 90),
(5, 'desember', 70);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `siswa` varchar(30) NOT NULL,
  `nama_panggilan` varchar(10) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(2) NOT NULL,
  `jenis_kelamnin` enum('Laki - laki','Perempuan','','') NOT NULL,
  `golongan_darah` enum('A','B','AB','O','Belum tahu') NOT NULL,
  `no_hp` int(13) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(25) NOT NULL,
  `kabupaten` varchar(25) NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `nama_ayah` varchar(25) NOT NULL,
  `pekerjaan_ayah` varchar(25) NOT NULL,
  `nama_ibu` varchar(25) NOT NULL,
  `pekerjaan_ibu` varchar(25) NOT NULL,
  `jumlah_saudara` int(2) NOT NULL,
  `urutan` int(2) NOT NULL,
  `id_universitas` int(11) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `tahun_masuk_universitas` year(4) NOT NULL,
  `tahun_masuk_ppm` year(4) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `siswa`, `nama_panggilan`, `tempat_lahir`, `tanggal_lahir`, `umur`, `jenis_kelamnin`, `golongan_darah`, `no_hp`, `alamat`, `provinsi`, `kabupaten`, `kecamatan`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `jumlah_saudara`, `urutan`, `id_universitas`, `id_fakultas`, `id_jurusan`, `tahun_masuk_universitas`, `tahun_masuk_ppm`, `id_kelas`) VALUES
(9, 'Nur Arifin', 'Arifin', 'Jakarta', '1997-02-06', 19, 'Laki - laki', 'B', 2147483647, 'Yukum Jaya, Terbanggi Besar, Lampung Tengah', 'Lampung', 'Lampung Tengah', 'Terbanggi Besar', 'Karsimin', 'Karyawan Swasta', 'Wiwit Winarsih', 'PNS', 4, 3, 9, 9, 1, 2015, 2015, 4),
(11, 'Dewi Afifah', 'Dewi', 'Jakarta', '1995-07-12', 21, 'Perempuan', 'O', 2147483647, 'Jalan Akasia No. 56, Kebayoran Lama, Jakarta Selatan', 'Jakarta', 'Jakarta', 'Kebayoran Lama', 'Musthofa', 'PNS', 'Endah Dwi', 'Ibu Rumah Tangga', 3, 2, 5, 15, 8, 2014, 2014, 5),
(12, 'Aulia Tria Andini', 'Dini', 'Yogyakarta', '1997-06-17', 20, 'Perempuan', 'AB', 2147483647, 'Jl. Palagan Tentara No. 33,Yogyakarta', 'Yogyakarta', 'Yogyakarta', 'Gondokusuman', 'Suprapto', 'PNS', 'Dyah Andayani', 'PNS', 2, 1, 5, 9, 7, 2014, 2014, 4);

-- --------------------------------------------------------

--
-- Table structure for table `uas`
--

CREATE TABLE `uas` (
  `id_uas` int(5) NOT NULL,
  `uas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uas`
--

INSERT INTO `uas` (`id_uas`, `uas`) VALUES
(1, 'MUNAQOSYAH 1'),
(2, 'MUNAQOSYAH 2'),
(3, 'MUNAQOSYAH 3'),
(4, 'MUNAQOSYAH 4'),
(5, 'MUNAQOSYAH 5'),
(6, 'MUNAQOSYAH 6'),
(7, 'MUNAQOSYAH 7'),
(8, 'MUNAQOSYAH 8');

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE `ujian` (
  `id_ujian` int(5) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_kelas` int(5) NOT NULL,
  `id_materi` int(5) NOT NULL,
  `id_uas` int(5) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ujian`
--

INSERT INTO `ujian` (`id_ujian`, `id_siswa`, `id_guru`, `id_kelas`, `id_materi`, `id_uas`, `nilai`) VALUES
(8, 9, 33, 5, 3, 1, 90),
(9, 11, 30, 5, 2, 1, 90),
(10, 12, 34, 4, 2, 1, 80),
(11, 9, 29, 4, 1, 2, 88);

-- --------------------------------------------------------

--
-- Table structure for table `universitas`
--

CREATE TABLE `universitas` (
  `id_universitas` int(3) NOT NULL,
  `universitas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universitas`
--

INSERT INTO `universitas` (`id_universitas`, `universitas`) VALUES
(5, 'Universitas Gadjah Mada'),
(6, 'Universitas Negeri Yogyakarta'),
(7, 'Universitas Islam Indonesia'),
(8, 'Universitas Ahmad Dahlan'),
(9, 'Universitas Pembangunan Negeri'),
(10, 'STMIK AMIKOM'),
(11, 'STTNAS'),
(12, 'UIN Sunan Kalijaga'),
(13, 'Universitas Muhammadiyah Yogyakarta'),
(14, 'Institut Seni Indonesia'),
(15, 'Universitas Teknologi Yogyakarta'),
(16, 'AA YKPN'),
(17, 'AKPRIND');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` enum('admin','kepala','petugas','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `email`, `password`, `level`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', 'admin'),
(2, 'kepala', 'kepala@kepala.com', 'kepala', 'kepala'),
(3, 'petugas', 'petugas@petugas.com', 'petugas', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kalender`
--
ALTER TABLE `kalender`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nomor_induk_guru`
--
ALTER TABLE `nomor_induk_guru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `value` (`value`),
  ADD KEY `guru_id` (`guru_id`);

--
-- Indexes for table `nomor_induk_siswa`
--
ALTER TABLE `nomor_induk_siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `value` (`value`),
  ADD KEY `siswa_id` (`siswa_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`idreport`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `uas`
--
ALTER TABLE `uas`
  ADD PRIMARY KEY (`id_uas`);

--
-- Indexes for table `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`id_ujian`);

--
-- Indexes for table `universitas`
--
ALTER TABLE `universitas`
  ADD PRIMARY KEY (`id_universitas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `kalender`
--
ALTER TABLE `kalender`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `nomor_induk_guru`
--
ALTER TABLE `nomor_induk_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nomor_induk_siswa`
--
ALTER TABLE `nomor_induk_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `idreport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `uas`
--
ALTER TABLE `uas`
  MODIFY `id_uas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ujian`
--
ALTER TABLE `ujian`
  MODIFY `id_ujian` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `universitas`
--
ALTER TABLE `universitas`
  MODIFY `id_universitas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `nomor_induk_guru`
--
ALTER TABLE `nomor_induk_guru`
  ADD CONSTRAINT `nomor_induk_guru_ibfk_1` FOREIGN KEY (`guru_id`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nomor_induk_siswa`
--
ALTER TABLE `nomor_induk_siswa`
  ADD CONSTRAINT `nomor_induk_siswa_ibfk_1` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
