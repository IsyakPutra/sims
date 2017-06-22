-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `fakultas`;
CREATE TABLE `fakultas` (
  `id_fakultas` int(11) NOT NULL AUTO_INCREMENT,
  `fakultas` varchar(50) NOT NULL,
  `id_universitas` int(11) NOT NULL,
  PRIMARY KEY (`id_fakultas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `fakultas` (`id_fakultas`, `fakultas`, `id_universitas`) VALUES
(9,	'Kedokteran Gigi',	5),
(10,	'MIPA',	10),
(11,	'Teknik',	0),
(12,	'FISIPOL',	0),
(15,	'HUKUM',	0),
(16,	'Ilmu Budaya',	0),
(17,	'Kehutanan',	0),
(18,	'Sekolah Vokasi',	0),
(19,	'Fakultas Ilmu Pendidikan',	0),
(20,	'Fakultas Bahasa dan Seni',	0),
(21,	'Fakultas Ilmu Sosial',	0),
(22,	'Fakultas Ilmu Keolahragaa',	0);

DROP TABLE IF EXISTS `guru`;
CREATE TABLE `guru` (
  `id_guru` int(3) NOT NULL AUTO_INCREMENT,
  `guru` varchar(30) NOT NULL,
  `nama_panggilan` varchar(10) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_asal` varchar(250) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `guru` (`id_guru`, `guru`, `nama_panggilan`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `tempat_asal`, `id_kelas`) VALUES
(29,	'Muhammad Khoiruddin',	'Khoir',	'Perempuan',	'Yogyakarta',	'1990-02-06',	'Kepuh GK 3, No. 831 Klitren, Gondokusuman',	5),
(30,	'Ahmad Busthomi',	'Ahmad',	'Perempuan',	'Surabaya',	'1988-08-10',	'Jl. Ngagel Raya No. 50, Gubeng, Surabaya',	4),
(31,	'Nining Purwaningsih',	'Nining',	'Perempuan',	'Pati',	'1989-10-11',	'Jl. Basuki Rahmat 50, Kota Pati, Jawa Tengah',	7),
(32,	'Retno Putri Andayani',	'Putri',	'Perempuan',	'Yogyakarta',	'1984-10-16',	'Jl. Muja-Muju No.120, Sidobali Yogyakarta',	6),
(33,	'Ahmad Fachruda Aziz',	'Aziz',	'Perempuan',	'Yogyakarta',	'1987-07-17',	'Kepuh GK 3, No. 700, Klitren Gondokusuman',	4),
(34,	'Rahmad Fauzi',	'Rahmad',	'Laki-laki',	'Bandung',	'1991-04-05',	'Jl. Pemuda no. 12, Kota Bandung',	7);

DROP TABLE IF EXISTS `jurusan`;
CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL AUTO_INCREMENT,
  `jurusan` varchar(100) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `jurusan` (`id_jurusan`, `jurusan`, `id_fakultas`) VALUES
(1,	'Teknik Informatika',	0),
(2,	'Teknik Mesin',	0),
(3,	'Teknik Geologi',	0),
(4,	'Teknik Kimia',	0),
(5,	'Ilmu Komputer',	0),
(6,	'Pendidikan Dokter',	0),
(7,	'Kedokteran Gigi',	0),
(8,	'Ilmu Hukum',	0),
(10,	'Kimia',	0),
(11,	'Matematika',	0),
(12,	'Pendidikan Olahraga',	0),
(13,	'Bahasa Inggris',	0),
(14,	'Bahasa Korea',	0),
(15,	'Bahasa Indonesia',	0),
(16,	'Fisika',	0),
(17,	'Manajemen Pendidikan',	0),
(18,	'Pendidikan Guru Sekolah Dasar',	0),
(19,	'Pendidikan Anak Usia Dini',	0),
(20,	'Psikologi',	0),
(21,	'Pendidikan Luar Biasa',	0),
(22,	'Pendidikan Bahasa dan Seni',	0),
(23,	'Sastra Inggris',	0),
(24,	'Pendidikan Bahasa Jawa',	0),
(25,	'Teknik Nuklir',	0);

DROP TABLE IF EXISTS `kalender`;
CREATE TABLE `kalender` (
  `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT,
  `judul_kegiatan` varchar(255) NOT NULL,
  `tanggal_kegiatan` datetime NOT NULL,
  PRIMARY KEY (`id_kegiatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `kelas`;
CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `kelas` varchar(15) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `kelas` (`id_kelas`, `kelas`) VALUES
(4,	'Dasar'),
(5,	'Menengah'),
(6,	'Atas'),
(7,	'Lanjut');

DROP TABLE IF EXISTS `materi`;
CREATE TABLE `materi` (
  `id_materi` int(5) NOT NULL AUTO_INCREMENT,
  `materi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_materi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `materi` (`id_materi`, `materi`) VALUES
(1,	'Syafahi (Ujian Lisan)'),
(2,	'Tahriri (Ujian Tulis)'),
(3,	'Praktik Ibadah (Qauliyah dan Amaliyah)');

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `is_active` int(1) NOT NULL,
  `is_parent` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `menu` (`id`, `name`, `link`, `icon`, `is_active`, `is_parent`) VALUES
(29,	'Jurusan Kuliah',	'jurusan',	'fa fa-graduation-cap',	1,	30),
(30,	'Edit Kategori Siswa',	'nolink',	'fa fa-gears',	1,	0),
(32,	'Daftar Siswa',	'siswa',	'fa fa-users',	1,	0),
(35,	'Daftar Guru',	'guru',	'fa fa-user',	1,	0),
(37,	'KELOLA MANAJEMEN',	'menu',	'fa fa-gears',	1,	0),
(39,	'UNIVERSITAS',	'universitas',	'fa fa-graduation-cap',	1,	30),
(42,	'Fakultas',	'fakultas',	'fa fa-graduation-cap',	1,	30),
(44,	'Kelas',	'kelas',	'fa fa-graduation-cap',	1,	30);

DROP TABLE IF EXISTS `nomor_induk_guru`;
CREATE TABLE `nomor_induk_guru` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  `guru_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `value` (`value`),
  KEY `guru_id` (`guru_id`),
  CONSTRAINT `nomor_induk_guru_ibfk_1` FOREIGN KEY (`guru_id`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `nomor_induk_siswa`;
CREATE TABLE `nomor_induk_siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `value` (`value`),
  KEY `siswa_id` (`siswa_id`),
  CONSTRAINT `nomor_induk_siswa_ibfk_1` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `report`;
CREATE TABLE `report` (
  `idreport` int(11) NOT NULL AUTO_INCREMENT,
  `bulan` varchar(50) DEFAULT NULL,
  `nilai` int(2) DEFAULT NULL,
  PRIMARY KEY (`idreport`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `report` (`idreport`, `bulan`, `nilai`) VALUES
(1,	'mei',	30),
(2,	'juni',	40),
(3,	'agustus',	40),
(4,	'september',	90),
(5,	'desember',	70);

DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `siswa` varchar(30) NOT NULL,
  `nama_panggilan` varchar(10) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(2) NOT NULL,
  `jenis_kelamnin` enum('Laki - laki','Perempuan') NOT NULL,
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
  `id_kelas` int(11) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL DEFAULT 'Aktif',
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `siswa` (`id_siswa`, `siswa`, `nama_panggilan`, `tempat_lahir`, `tanggal_lahir`, `umur`, `jenis_kelamnin`, `golongan_darah`, `no_hp`, `alamat`, `provinsi`, `kabupaten`, `kecamatan`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `jumlah_saudara`, `urutan`, `id_universitas`, `id_fakultas`, `id_jurusan`, `tahun_masuk_universitas`, `tahun_masuk_ppm`, `id_kelas`, `status`) VALUES
(9,	'Nur Arifin',	'Arifin',	'Jakarta',	'1997-02-06',	19,	'Laki - laki',	'A',	2147483647,	'Yukum Jaya, Terbanggi Besar, Lampung Tengah',	'Lampung',	'Lampung Tengah',	'Terbanggi Besar',	'Karsimin',	'Karyawan Swasta',	'Wiwit Winarsih',	'PNS',	4,	3,	9,	9,	1,	'2015',	'2015',	4,	'Aktif'),
(11,	'Dewi Afifah',	'Dewi',	'Jakarta',	'1995-07-12',	21,	'Perempuan',	'O',	2147483647,	'Jalan Akasia No. 56, Kebayoran Lama, Jakarta Selatan',	'Jakarta',	'Jakarta',	'Kebayoran Lama',	'Musthofa',	'PNS',	'Endah Dwi',	'Ibu Rumah Tangga',	3,	2,	5,	15,	8,	'2014',	'2014',	5,	'Aktif'),
(12,	'Aulia Tria Andini',	'Dini',	'Yogyakarta',	'1997-06-17',	20,	'Laki - laki',	'A',	2147483647,	'Jl. Palagan Tentara No. 33,Yogyakarta',	'Yogyakarta',	'Yogyakarta',	'Gondokusuman',	'Suprapto',	'PNS',	'Dyah Andayani',	'PNS',	2,	1,	5,	9,	7,	'2014',	'2014',	4,	'Tidak Aktif');

DROP TABLE IF EXISTS `uas`;
CREATE TABLE `uas` (
  `id_uas` int(5) NOT NULL AUTO_INCREMENT,
  `uas` varchar(50) NOT NULL,
  PRIMARY KEY (`id_uas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `uas` (`id_uas`, `uas`) VALUES
(1,	'MUNAQOSYAH 1'),
(2,	'MUNAQOSYAH 2'),
(3,	'MUNAQOSYAH 3'),
(4,	'MUNAQOSYAH 4'),
(5,	'MUNAQOSYAH 5'),
(6,	'MUNAQOSYAH 6'),
(7,	'MUNAQOSYAH 7'),
(8,	'MUNAQOSYAH 8');

DROP TABLE IF EXISTS `ujian`;
CREATE TABLE `ujian` (
  `id_ujian` int(5) NOT NULL AUTO_INCREMENT,
  `id_siswa` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_kelas` int(5) NOT NULL,
  `id_materi` int(5) NOT NULL,
  `id_uas` int(5) NOT NULL,
  `nilai` int(11) NOT NULL,
  PRIMARY KEY (`id_ujian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `ujian` (`id_ujian`, `id_siswa`, `id_guru`, `id_kelas`, `id_materi`, `id_uas`, `nilai`) VALUES
(8,	9,	33,	5,	3,	1,	90),
(9,	11,	30,	5,	2,	1,	90),
(10,	12,	34,	4,	2,	1,	80),
(11,	9,	29,	4,	1,	2,	88);

DROP TABLE IF EXISTS `universitas`;
CREATE TABLE `universitas` (
  `id_universitas` int(3) NOT NULL AUTO_INCREMENT,
  `universitas` varchar(100) NOT NULL,
  PRIMARY KEY (`id_universitas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `universitas` (`id_universitas`, `universitas`) VALUES
(5,	'Universitas Gadjah Mada'),
(6,	'Universitas Negeri Yogyakarta'),
(7,	'Universitas Islam Indonesia'),
(8,	'Universitas Ahmad Dahlan'),
(9,	'Universitas Pembangunan Negeri'),
(10,	'STMIK AMIKOM'),
(11,	'STTNAS'),
(12,	'UIN Sunan Kalijaga'),
(13,	'Universitas Muhammadiyah Yogyakarta'),
(14,	'Institut Seni Indonesia'),
(15,	'Universitas Teknologi Yogyakarta'),
(16,	'AA YKPN'),
(17,	'AKPRIND');

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` enum('admin','kepala','petugas','') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id_user`, `nama_lengkap`, `email`, `password`, `level`) VALUES
(1,	'admin',	'admin@admin.com',	'admin',	'admin'),
(2,	'kepala',	'kepala@kepala.com',	'kepala',	'kepala'),
(3,	'petugas',	'petugas@petugas.com',	'petugas',	'petugas');

-- 2017-06-22 18:26:11
