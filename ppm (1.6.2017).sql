-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2017 at 05:41 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ppm`
--

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE IF NOT EXISTS `fakultas` (
`id_fakultas` int(11) NOT NULL,
  `fakultas` varchar(25) NOT NULL,
  `id_universitas` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

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
(18, 'Sekolah Vokasi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
`id_guru` int(3) NOT NULL,
  `guru` varchar(25) NOT NULL,
  `nama_panggilan` varchar(10) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_asal` varchar(250) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `guru`, `nama_panggilan`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `tempat_asal`, `id_kelas`) VALUES
(29, 'Muhammad Khoiruddin', 'Khoir', 'Perempuan', 'Yogyakarta', '1990-02-06', 'Kepuh GK 3, No. 831 Klitren, Gondokusuman', 5),
(30, 'Ahmad Busthomi', 'Ahmad', 'Perempuan', 'Surabaya', '1988-08-10', 'Jl. Ngagel Raya No. 50, Gubeng, Surabaya', 4),
(31, 'Nining Purwaningsih', 'Nining', 'Perempuan', 'Pati', '1989-10-11', 'Jl. Basuki Rahmat 50, Kota Pati, Jawa Tengah', 7),
(32, 'Retno Putri Andayani', 'Putri', 'Perempuan', 'Yogyakarta', '1984-10-16', 'Jl. Muja-Muju No.120, Sidobali Yogyakarta', 6),
(33, 'Ahmad Fachruda Aziz', 'Aziz', 'Perempuan', 'Yogyakarta', '1987-07-17', 'Kepuh GK 3, No. 700, Klitren Gondokusuman', 4);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
`id_jurusan` int(11) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `id_fakultas` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `jurusan`, `id_fakultas`) VALUES
(1, 'teknik informatika', 0),
(2, 'teknik mesin', 0),
(3, 'teknik otomotif', 0),
(4, 'Teknik kimia', 0),
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
(16, 'Fisika', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kalender`
--

CREATE TABLE IF NOT EXISTS `kalender` (
`id_kegiatan` int(11) NOT NULL,
  `judul_kegiatan` varchar(255) NOT NULL,
  `tanggal_kegiatan` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
`id_kelas` int(11) NOT NULL,
  `kelas` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `materi` (
`id_materi` int(5) NOT NULL,
  `materi` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `materi`) VALUES
(1, 'Membaca'),
(2, 'Menulis'),
(3, 'Menerangkan');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `is_active` int(1) NOT NULL,
  `is_parent` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `link`, `icon`, `is_active`, `is_parent`) VALUES
(29, 'Jurusan Kuliah', 'jurusan', 'fa fa-graduation-cap', 1, 30),
(30, 'Edit Kategori Siswa', 'nolink', 'fa fa-edit', 1, 0),
(32, 'Daftar Siswa', 'siswa', 'fa fa-mortar-board', 1, 0),
(35, 'Daftar Guru', 'guru', 'fa fa-user', 1, 0),
(37, 'KELOLA MANAJEMEN', 'menu', 'fa fa-gears', 1, 0),
(39, 'UNIVERSITAS', 'universitas', 'fa fa-gears', 1, 30),
(42, 'Fakultas', 'fakultas', 'fa fa-gears', 1, 30),
(44, 'Kelas', 'kelas', 'fa fa-user', 1, 30);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
`idreport` int(11) NOT NULL,
  `bulan` varchar(50) DEFAULT NULL,
  `nilai` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `siswa` (
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `siswa`, `nama_panggilan`, `tempat_lahir`, `tanggal_lahir`, `umur`, `jenis_kelamnin`, `golongan_darah`, `no_hp`, `alamat`, `provinsi`, `kabupaten`, `kecamatan`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `jumlah_saudara`, `urutan`, `id_universitas`, `id_fakultas`, `id_jurusan`, `tahun_masuk_universitas`, `tahun_masuk_ppm`, `id_kelas`) VALUES
(9, 'Nur Arifin', 'Arifin', 'Jakarta', '1997-02-06', 19, 'Laki - laki', 'B', 2147483647, 'Yukum Jaya, Terbanggi Besar, Lampung Tengah', 'Lampung', 'Lampung Tengah', 'Terbanggi Besar', 'Karsimin', 'Karyawan Swasta', 'Wiwit Winarsih', 'PNS', 4, 3, 9, 9, 1, 2015, 2015, 4),
(10, 'tes', 'tes', 'kediri', '2017-05-10', 20, 'Laki - laki', 'AB', 8786868, 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 3, 3, 5, 9, 14, 2014, 2014, 6);

-- --------------------------------------------------------

--
-- Table structure for table `uas`
--

CREATE TABLE IF NOT EXISTS `uas` (
`id_uas` int(5) NOT NULL,
  `uas` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uas`
--

INSERT INTO `uas` (`id_uas`, `uas`) VALUES
(1, 'UAS 1'),
(2, 'UAS 2'),
(3, 'UAS 3'),
(4, 'UAS 4'),
(5, 'UAS 5'),
(6, 'UAS 6'),
(7, 'UAS 7'),
(8, 'UAS 8');

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE IF NOT EXISTS `ujian` (
`id_ujian` int(5) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_kelas` int(5) NOT NULL,
  `id_materi` int(5) NOT NULL,
  `id_uas` int(5) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ujian`
--

INSERT INTO `ujian` (`id_ujian`, `id_siswa`, `id_guru`, `id_kelas`, `id_materi`, `id_uas`, `nilai`) VALUES
(6, 10, 29, 4, 1, 1, 90);

-- --------------------------------------------------------

--
-- Table structure for table `universitas`
--

CREATE TABLE IF NOT EXISTS `universitas` (
`id_universitas` int(3) NOT NULL,
  `universitas` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

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
(11, 'STTNAS');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` enum('admin','kepala','petugas','') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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
MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
MODIFY `id_guru` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `kalender`
--
ALTER TABLE `kalender`
MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
MODIFY `id_materi` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
MODIFY `idreport` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `uas`
--
ALTER TABLE `uas`
MODIFY `id_uas` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ujian`
--
ALTER TABLE `ujian`
MODIFY `id_ujian` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `universitas`
--
ALTER TABLE `universitas`
MODIFY `id_universitas` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
