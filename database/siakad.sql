-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2017 at 05:49 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `profil_sekolah`
--

CREATE TABLE IF NOT EXISTS `profil_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(30) NOT NULL,
  `nama_kepsek` varchar(30) NOT NULL,
  `kurikulum` varchar(10) NOT NULL,
  `status_akreditasi` varchar(30) NOT NULL,
  `nss` varchar(30) NOT NULL,
  `npsn_lama` int(11) NOT NULL,
  `kode_sekolah` int(11) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `no_tlp` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `luas_tanah` varchar(10) NOT NULL,
  `luas_bangunan` varchar(10) NOT NULL,
  `tanggal_pendirian` varchar(25) NOT NULL,
  `latitude` varchar(25) NOT NULL,
  `longitude` int(25) NOT NULL,
  `jumlah_rombel` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_sekolah`
--

INSERT INTO `profil_sekolah` (`id_sekolah`, `nama_sekolah`, `nama_kepsek`, `kurikulum`, `status_akreditasi`, `nss`, `npsn_lama`, `kode_sekolah`, `alamat_sekolah`, `no_tlp`, `email`, `luas_tanah`, `luas_bangunan`, `tanggal_pendirian`, `latitude`, `longitude`, `jumlah_rombel`) VALUES
(1, 'SMK PGRI 1 TAMBUN SELATAN', 'Drs. DAMYO', 'KTSP', 'B', '344022205009', 20218350, 163, 'JL.KEBON KELAPA PERUM PEMDA RT.07/02 TAMBUN SELATAN DESA TAMBUN KECAMATAN TAMBUN SELATAN KABUPATEN BEKASI ', '(021) 88360531', 'smk_pgritamsel@yahoo.com', '2500m2', '2400m2', '11 APRIL 1999', '6.2666000', 107, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_menu`
--

CREATE TABLE IF NOT EXISTS `tabel_menu` (
`id` int(11) NOT NULL,
  `nama_menu` varchar(30) NOT NULL,
  `link` varchar(40) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `is_main_menu` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_menu`
--

INSERT INTO `tabel_menu` (`id`, `nama_menu`, `link`, `icon`, `is_main_menu`) VALUES
(1, 'DATABASE SISWA', '#', 'clip-database', 0),
(2, 'DATABASE GURU', '#', 'clip-study', 0),
(3, 'DATA SISWA', 'siswa', 'fa fa-user', 1),
(5, 'DATA GURU', 'guru', 'fa fa-graduation-cap		', 2),
(7, 'DATA SEKOLAH', 'sekolah', 'fa fa-desktop', 0),
(8, 'DATA MASTER', '#', 'clip-grid-5', 0),
(9, 'MATA PELAJARAN', 'mapel', 'clip-grid-5', 8),
(10, ' RUANGAN KELAS', 'ruang', 'clip-home', 8),
(11, 'TAHUN AKADEMIK', 'tahun_akademik', 'clip-calendar', 8),
(12, 'KURIKULUM', 'kurikulum', 'clip-globe', 8),
(13, 'JADWAL PELAJARAN', 'jadwal', 'fa fa-calendar-o', 0),
(14, 'JURUSAN', 'jurusan', 'clip-star-6', 8),
(15, 'ROMBEL', 'rombel', 'fa fa-group', 8),
(16, 'PERSERTA DIDIK', 'siswa/siswa_aktif', 'fa fa-group', 0),
(17, 'WALI KELAS', 'walikelas', 'fa fa-male', 0),
(18, 'PENGGUNA SISTEM', 'users', 'clip-users', 0),
(20, 'FORM PEMBAYARAN', 'keuangan/form', 'fa fa-money', 0),
(21, 'LAPORAN NILAI', 'nilai', ' clip-file', 0),
(23, ' RAPORT ONLINE', 'raport', 'clip-star-3', 0),
(24, 'JENIS PEMBAYARAN', 'jenis_pembayaran', 'fa fa-money', 0),
(25, 'SETUP BIAYA', 'keuangan/setup', 'fa fa-money', 0),
(26, 'LAPORAN', 'keuangan', 'fa fa-money', 0),
(27, 'BIODATA', 'biodata', 'fa fa-male', 0),
(28, 'LIHAT NILAI', 'lihat_nilai', 'fa fa-eye', 0),
(29, 'pengumuman', 'Post_berita', 'clip-pencil', 0),
(31, 'ganti password', 'ganti_password', 'fa fa-key', 0),
(32, 'cek pembayaran', 'cek_bayar', 'fa fa-money', 0),
(33, 'absensi', 'absensi/add', 'clip-pencil', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_sekolah`
--

CREATE TABLE IF NOT EXISTS `tabel_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(30) NOT NULL,
  `id_jenjang_sekolah` int(11) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `telepon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_sekolah`
--

INSERT INTO `tabel_sekolah` (`id_sekolah`, `nama_sekolah`, `id_jenjang_sekolah`, `alamat_sekolah`, `email`, `telepon`) VALUES
(1, 'SMK PGRI 1 TAMBUN SELATAN', 3, 'jln kebon kelapa perum pemda rt 01/09 tambun selatan', 'smkpgri1@gmail.com', '01209090909');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_absen`
--

CREATE TABLE IF NOT EXISTS `tbl_absen` (
`id_absen` int(11) NOT NULL,
  `nis` int(15) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `absen` enum('H','A','I','S','T') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_absen`
--

INSERT INTO `tbl_absen` (`id_absen`, `nis`, `nama`, `tanggal`, `absen`) VALUES
(6, 1516100112, ' Ramdoni Afandi', '25-11-2017', 'A'),
(7, 151610012, 'Rulita', '25-11-2017', 'H');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agama`
--

CREATE TABLE IF NOT EXISTS `tbl_agama` (
`kd_agama` int(11) NOT NULL,
  `nama_agama` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_agama`
--

INSERT INTO `tbl_agama` (`kd_agama`, `nama_agama`) VALUES
(1, 'Islam'),
(2, ' kristen'),
(3, 'Khatolik'),
(4, 'Hindu'),
(5, 'Khong Hu Chu'),
(6, 'Lain-Lain');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE IF NOT EXISTS `tbl_berita` (
`berita_id` int(11) NOT NULL,
  `berita_judul` varchar(40) NOT NULL,
  `berita_isi` text NOT NULL,
  `berita_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`berita_id`, `berita_judul`, `berita_isi`, `berita_tanggal`) VALUES
(17, 'Kegiatan Bimbingan Belajar', '<p>No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 026/SATDIK-SMK/II.4/0.2017</p>\r\n\r\n<p>Perihal&nbsp; : Kegiatan Bimbingan Belajar</p>\r\n\r\n<p>Lamp&nbsp;&nbsp;&nbsp; :1</p>\r\n\r\n<p>Kepada</p>\r\n\r\n<p>Yth,&nbsp; : Orang Tua/ Wali Siswa</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Di</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tempat</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sehubungan makin dekatnya kegiatan akhir tahun pelajaran 2017/2018 untuk kelas siswa <strong>XII Akuntansi,Administrasi Perkantoran, Teknik Komputer dan Jaringan </strong>serta pelaksanaan Evaluasi Belajar memalui ujian nasional dan Ujian Kompetensi Keahlian, maka kami informasikan kepada Bapak/ Ibu Orang tua/ wali siswa bahwa kegitan bimbingan belajar yang wajib diikuti oleh putra/ putri Bapak/ Ibu</p>\r\n\r\n<p><em>(jadwal teralmpir),</em> akan dilaksanakan mulai bulan November 2017 s/d Maret 2018 dengan maksimal 10 dan 12X pertemuan.<em> </em></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Demikian pemberitahuan ini kami sampaikan dan mohon kiranya Bapak/Ibu Orang tua/wali siswa dapat memaklumi dan dapat bersama-sama dengan pihak sekolah untuk membimbing putra putrinya.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Atas perhatian dan kerjasama Bapak/Ibu/wali siswa kami mengucapkan terima kasih.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tambun, Oktober 2017</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kepala Sekolah</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Drs. Damyo</p>\r\n', '2017-10-27 06:28:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_biaya_sekolah`
--

CREATE TABLE IF NOT EXISTS `tbl_biaya_sekolah` (
`id_biaya` int(11) NOT NULL,
  `id_jenis_pembayaran` int(11) NOT NULL,
  `id_tahun_akademik` int(11) NOT NULL,
  `jumlah_biaya` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_biaya_sekolah`
--

INSERT INTO `tbl_biaya_sekolah` (`id_biaya`, `id_jenis_pembayaran`, `id_tahun_akademik`, `jumlah_biaya`) VALUES
(43, 1, 15, 500000),
(44, 2, 15, 30000),
(45, 3, 15, 10000),
(46, 4, 15, 10000),
(47, 5, 15, 20000),
(48, 6, 15, 50000),
(49, 7, 15, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE IF NOT EXISTS `tbl_guru` (
`id_guru` int(11) NOT NULL,
  `nuptk` varchar(30) NOT NULL,
  `nama_guru` varchar(40) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `gender` enum('p','w','','') NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id_guru`, `nuptk`, `nama_guru`, `tempat_lahir`, `tanggal_lahir`, `gender`, `username`, `password`, `foto`) VALUES
(5, '9049-7376-3720-0003', 'Drs. Damyo', 'Wonogiri', '11 November 1959', 'p', 'Damyo', '90f00b4dc6c59c85994bdcd93c3cd3ba', '109130640269.jpeg'),
(6, '0337-7566-5920-0013', 'Asep Supriyatna M.M.PD', 'Bekasi', '05 Oktober 1987', 'p', 'supriyatna', '076c69a60d45d7c0e985f484c07c0a96', ''),
(7, '0652-7606-6130-0072', 'Gina Rosiana S.Kom', 'JAKARTA', '20 Maret 1982', 'w', 'Rosiana', '669a5ad782492ff573ad84ccdafca1cf', ''),
(8, '4157-7536-5430-0023', 'Heningtyas Ambrarilani S.Pd', 'JAKARTA', '25 Agustus 1975', 'w', 'Heningtyas', '650fcacdcd1e4205ca2687ea1d1eac45', ''),
(9, '0644-7536-5530-0042', 'Ipat Fatimah S.Pd', 'Bekasi', '12 Maret 1975', 'w', 'Fatimah ', '5caa63e4e031446a5bcdb71e5779a12a', ''),
(10, '2436-7626-6430-0042', 'Rosidah Yani S.E', 'Bekasi', '07 Mei 1989', 'w', 'Rosidah', '9ebb50a092f0dc9ea4d3d18aa1c6a545', ''),
(11, '1637-7496-5130-0072', 'Tati Maryana S.Pd', 'Subang', '05 Maret 1971', 'w', 'Maryana', 'addfb22da9ff5b8180c3a1e67219611d', ''),
(12, '5747-7516-5130-0002', 'Yeni S.E', 'Tasikmalaya', '15 April 1970', 'w', 'Yeniyeni', 'a1a4c481fec347ad97373addb987beb7', ''),
(13, '', 'Dewi Rosaliawati S.Kom', '', '', 'w', 'Rosaliawati ', '3f96a8f6d7f7f7a5d1e56f8e924ae956', ''),
(14, '6633-7636-6320-0012', 'Dimas Darmansyah S.H', 'Bekasi', '01 Maret 1985', 'p', 'Darmansyah', '43bd430d4270fe4b442c3384afd457a5', ''),
(15, '', 'Evi Mariatul Qibtiah S.pd', '', '', 'w', 'Mariatul', 'f21dd0f02af9025bcd64fc4e6f6f3cec', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_history_kelas`
--

CREATE TABLE IF NOT EXISTS `tbl_history_kelas` (
`id_history` int(11) NOT NULL,
  `id_rombel` int(11) NOT NULL,
  `nis` varchar(11) NOT NULL,
  `id_tahun_akademik` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_history_kelas`
--

INSERT INTO `tbl_history_kelas` (`id_history`, `id_rombel`, `nis`, `id_tahun_akademik`) VALUES
(11, 1, '02', 10),
(13, 1, '04', 10),
(14, 1, '05', 10),
(16, 1, '07', 10),
(17, 10, '1000', 11),
(18, 11, '090909', 15),
(19, 16, '151610001', 15),
(20, 7, '11678876', 15),
(21, 7, '151610002', 15),
(22, 15, '151610005', 15),
(23, 15, '151610008', 15),
(24, 13, '151610012', 15),
(25, 11, '151610025', 15),
(26, 10, '1516100112', 15),
(27, 10, '151610022', 15),
(28, 10, '151610023', 15),
(29, 17, '151610029', 15);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE IF NOT EXISTS `tbl_jadwal` (
`id_jadwal` int(11) NOT NULL,
  `id_tahun_akademik` int(11) NOT NULL,
  `kd_jurusan` varchar(6) NOT NULL,
  `kd_mapel` varchar(4) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `kd_ruang` varchar(4) NOT NULL,
  `semester` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `id_rombel` int(11) NOT NULL,
  `kelas` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=202 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `id_tahun_akademik`, `kd_jurusan`, `kd_mapel`, `id_guru`, `jam`, `kd_ruang`, `semester`, `hari`, `id_rombel`, `kelas`) VALUES
(192, 15, 'TKJ', 'AIJ', 5, '', 'TKJ1', 1, '', 15, 1),
(193, 15, 'TKJ', 'ASJ', 5, '', 'TKJ1', 1, '', 15, 1),
(194, 15, 'TKJ', 'BI', 5, '', 'TKJ1', 1, '', 15, 1),
(195, 15, 'TKJ', 'Bing', 5, '', 'TKJ1', 1, '', 15, 1),
(196, 15, 'AK', 'KKPI', 5, '', 'TKJ1', 1, '', 11, 1),
(197, 15, 'AK', 'BI', 5, '', 'TKJ1', 1, '', 11, 1),
(198, 15, 'AK', 'KJD', 5, '', 'TKJ1', 1, '', 11, 1),
(199, 15, 'AP', 'BI', 11, '', 'AP1', 1, 'SELASA', 16, 1),
(200, 15, 'AP', 'FSK', 9, '11.30 - 12.15', 'AP1', 1, 'SELASA', 16, 1),
(201, 15, 'AP', 'Bing', 8, '13.00 - 13.30', 'TKJ1', 1, 'KAMIS', 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_pembayaran`
--

CREATE TABLE IF NOT EXISTS `tbl_jenis_pembayaran` (
`id_jenis_pembayaran` int(11) NOT NULL,
  `nama_jenis_pembayaran` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenis_pembayaran`
--

INSERT INTO `tbl_jenis_pembayaran` (`id_jenis_pembayaran`, `nama_jenis_pembayaran`) VALUES
(1, 'ssp'),
(2, 'tabungan'),
(3, 'lab bahasa'),
(4, 'lab komputer'),
(5, 'bengkel TKJ'),
(6, 'ujian'),
(7, 'LKS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenjang_sekolah`
--

CREATE TABLE IF NOT EXISTS `tbl_jenjang_sekolah` (
`id_jenjang` int(11) NOT NULL,
  `nama_jenjang` varchar(10) NOT NULL,
  `jumlah_kelas` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenjang_sekolah`
--

INSERT INTO `tbl_jenjang_sekolah` (`id_jenjang`, `nama_jenjang`, `jumlah_kelas`) VALUES
(1, 'SD/MI', 6),
(2, 'SMP/MTS', 3),
(3, 'SMA/SMK', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE IF NOT EXISTS `tbl_jurusan` (
  `kd_jurusan` varchar(4) NOT NULL,
  `nama_jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`kd_jurusan`, `nama_jurusan`) VALUES
('AK', 'AKUNTANSI'),
('AP', 'ADMIN PERKANTORAN'),
('TKJ', 'TEKNIK KOMPUTER JARINGAN');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kurikulum`
--

CREATE TABLE IF NOT EXISTS `tbl_kurikulum` (
`id_kurikulum` int(11) NOT NULL,
  `nama_kurikulum` varchar(50) NOT NULL,
  `is_aktif` enum('y','n','','') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kurikulum`
--

INSERT INTO `tbl_kurikulum` (`id_kurikulum`, `nama_kurikulum`, `is_aktif`) VALUES
(4, 'kurikulum 2017', 'y'),
(8, ' kurikulum 2015', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kurikulum_detail`
--

CREATE TABLE IF NOT EXISTS `tbl_kurikulum_detail` (
`id_kurikulum_detail` int(11) NOT NULL,
  `id_kurikulum` int(11) NOT NULL,
  `kd_mapel` varchar(11) NOT NULL,
  `kd_jurusan` varchar(4) NOT NULL,
  `kelas` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kurikulum_detail`
--

INSERT INTO `tbl_kurikulum_detail` (`id_kurikulum_detail`, `id_kurikulum`, `kd_mapel`, `kd_jurusan`, `kelas`) VALUES
(11, 4, 'AIJ', 'TKJ', 1),
(12, 4, 'ASJ', 'TKJ', 1),
(13, 4, 'BI', 'TKJ', 1),
(14, 4, 'Bing', 'TKJ', 1),
(15, 4, 'KKPI', 'AK', 1),
(16, 4, 'BI', 'AK', 1),
(17, 4, 'KJD', 'AK', 1),
(18, 4, 'BI', 'AP', 1),
(19, 4, 'FSK', 'AP', 1),
(20, 4, 'Bing', 'AP', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level_user`
--

CREATE TABLE IF NOT EXISTS `tbl_level_user` (
`id_level_user` int(11) NOT NULL,
  `nama_level` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_level_user`
--

INSERT INTO `tbl_level_user` (`id_level_user`, `nama_level`) VALUES
(1, 'Admin'),
(2, 'Walikelas'),
(3, 'Guru'),
(4, 'keuangan'),
(5, 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mapel`
--

CREATE TABLE IF NOT EXISTS `tbl_mapel` (
  `kd_mapel` varchar(12) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`kd_mapel`, `nama_mapel`) VALUES
('AIJ', 'Administrasi Infrastruktur Jaringan'),
('ASJ', 'Administrasi Sistem Jaringan'),
('BI', 'Bahasa Indonesia'),
('Bing', 'Bahasa Inggris'),
('Desgraf', 'Dasar Desain Grafis'),
('FSK', 'Fisika'),
('IPS', 'ILMU PENGETAHUAN SOSIAL'),
('KJD', 'Komputer dan Jaringan Dasar'),
('KKPI', 'Ketrampilan Komputer dan Pengolahan Informasi'),
('KMA', 'Kimia'),
('MTK', 'Matematika'),
('PAIBP', 'Pendidikan Agama dan Budi Pekerti'),
('Penjaskes', 'Pendidikan Jasmani,Olahraga dan Kesehatan'),
('PKK', 'Produk Kreatifitas Kewirausahaan'),
('PPK', 'Pendidikan Pancasila dan Kewarganegaraan'),
('Prodas', 'Pemrograman Dasar'),
('Senbud', 'Seni Budaya'),
('SI', 'Sejarah Indonesia'),
('SIMDIG', 'Simulasi dan Komunikasi Digital'),
('Siskom', 'Sistem Komputer'),
('T WAN', 'Teknologi WAN'),
('TLJ', 'Teknologi Layanan Jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE IF NOT EXISTS `tbl_nilai` (
`id_nilai` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `nis` varchar(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id_nilai`, `id_jadwal`, `nis`, `nilai`) VALUES
(39, 178, '090909', 100),
(40, 181, '151610001', 75),
(41, 180, '151610001', 100),
(42, 177, '090909', 70),
(43, 199, '151610001', 100),
(44, 200, '151610001', 90),
(45, 201, '151610001', 80);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

CREATE TABLE IF NOT EXISTS `tbl_pembayaran` (
`id_pembayaran` int(11) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `nis` varchar(13) NOT NULL,
  `id_jenis_pembayaran` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`id_pembayaran`, `tanggal`, `nis`, `id_jenis_pembayaran`, `jumlah`, `keterangan`) VALUES
(11, '2017-10-10', '090909', 5, 10000, 'lunas'),
(13, '2017-10-09', '090909', 3, 10000, 'lunas'),
(14, '2017-10-09', '090909 ', 6, 20000, 'lunas'),
(15, '0000-00-00', '151610001', 1, 0, ''),
(16, '0000-00-00', '151610008', 1, 0, ''),
(17, '0000-00-00', '151610005', 1, 0, ''),
(18, '0000-00-00', '1516100112', 1, 600000, 'lunas'),
(19, '', ' 1516100112', 1, 0, ''),
(20, '20-11-2017', '1516100112', 6, 10000, 'lunas');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rombel`
--

CREATE TABLE IF NOT EXISTS `tbl_rombel` (
`id_rombel` int(11) NOT NULL,
  `nama_rombel` varchar(20) NOT NULL,
  `kelas` int(11) NOT NULL,
  `kd_jurusan` varchar(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rombel`
--

INSERT INTO `tbl_rombel` (`id_rombel`, `nama_rombel`, `kelas`, `kd_jurusan`) VALUES
(7, 'TKJ 1A', 1, ' TKJ'),
(9, 'AP XI', 2, 'AP'),
(10, 'AK XI', 2, 'AK'),
(11, 'AK X', 1, 'AK'),
(13, 'TKJ XI', 2, 'TKJ'),
(14, 'AP XII', 3, 'AP'),
(15, 'TKJ X', 1, 'TKJ'),
(16, 'AP X', 1, 'AP'),
(17, 'AK XII', 3, 'AK'),
(18, 'TKJ XII', 3, 'TKJ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ruangan`
--

CREATE TABLE IF NOT EXISTS `tbl_ruangan` (
  `kd_ruang` varchar(10) NOT NULL,
  `nama_ruang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ruangan`
--

INSERT INTO `tbl_ruangan` (`kd_ruang`, `nama_ruang`) VALUES
('AK1', 'Akuntasi X'),
('AK2', 'Akuntasi XI'),
('AK3', 'Akuntasi XII'),
('AP1', 'Admin Perkantoran kelas x'),
('AP2', 'Admin Perkantoran kelas XI'),
('AP3', 'Admin Perkantoran kelas XII'),
('TKJ1', 'Teknik Komputer Jaringan X'),
('TKJ2', 'Teknik Komputer Jaringan XI'),
('TKJ3', 'Teknik Komputer Jaringan XII');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester`
--

CREATE TABLE IF NOT EXISTS `tbl_semester` (
`id_semester` int(11) NOT NULL,
  `semester` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_semester`
--

INSERT INTO `tbl_semester` (`id_semester`, `semester`) VALUES
(1, '2017ganjil'),
(2, '2017genap'),
(3, '2018ganjil'),
(4, '2018genap');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE IF NOT EXISTS `tbl_siswa` (
  `nis` varchar(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `gender` enum('P','L','','') NOT NULL,
  `kd_agama` varchar(2) NOT NULL,
  `foto` text NOT NULL,
  `id_rombel` int(11) NOT NULL,
  `nama_ibu` varchar(40) NOT NULL,
  `nama_ayah` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `sekolah_asal` varchar(50) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `absen` enum('Hadir','Alpha','Izin','Sakit','Terlambat') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `nama`, `tanggal_lahir`, `tempat_lahir`, `gender`, `kd_agama`, `foto`, `id_rombel`, `nama_ibu`, `nama_ayah`, `alamat`, `sekolah_asal`, `username`, `password`, `absen`) VALUES
('090909', 'Nurul Fajrin', '1992-08-16', 'Pemalang', 'P', '1', 'SMK_TK_COMAL_(21)2.JPG', 11, '', '', '', '', '', '', ''),
('11678876', 'Siti Nur Azizah', '2006-09-11', 'Bekasi', 'P', '1', '', 15, '', '', '', '', '', '', ''),
('151610001', 'Riki Permana', '2000-09-12', 'Bekasi', 'L', '1', 'images1.png', 16, '', '', '', '', '', '', ''),
('151610002', 'Zainal Abidin ', '2005-02-09', 'Bekasi', 'L', '1', '', 15, '', '', '', '', '', '', ''),
('151610005', 'Nur Sodikin', '2004-03-01', 'Bekasi', 'L', '1', '', 15, '', '', '', '', '', '', ''),
('151610008', 'Yuridul', '2004-04-01', 'Bekasi', 'L', '1', '', 15, '', '', '', '', '', '', ''),
('1516100112', ' Ramdoni Afandi', '2003-09-02', 'Bekasi', 'L', '1', '', 10, '', '', '', '', '', '', ''),
('151610012', 'Rulita', '2000-08-12', 'Bekasi', 'P', '1', '', 13, '', '', '', '', '', '', ''),
('151610022', ' Nur Sadiah', '2004-01-01', 'Bekasi', 'L', '1', '', 10, '', '', '', '', '', '', ''),
('151610023', ' Nur Rohman', '2004-03-04', 'Bekasi', 'L', '1', '', 10, '', '', '', '', '', '', ''),
('151610025', 'Hilda', '2001-09-12', 'bandung', 'P', '1', '', 11, '', '', '', '', '', '', ''),
('151610029', ' Susanti', '2006-09-11', 'Bekasi', 'P', '1', '', 17, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahun_akademik`
--

CREATE TABLE IF NOT EXISTS `tbl_tahun_akademik` (
`id_tahun_akademik` int(4) NOT NULL,
  `tahun_akademik` varchar(10) NOT NULL,
  `is_aktif` enum('y','n','','') NOT NULL,
  `semester_aktif` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tahun_akademik`
--

INSERT INTO `tbl_tahun_akademik` (`id_tahun_akademik`, `tahun_akademik`, `is_aktif`, `semester_aktif`) VALUES
(15, '2017/2018', 'y', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`id_user` int(11) NOT NULL,
  `no_identitas` int(20) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gender` enum('Laki-laki','Wanita','','') NOT NULL,
  `kd_agama` enum('Islam','Kristen','Khatolik','Hindu','Budha','Lain-lain') NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `id_level_user` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `no_identitas`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `gender`, `kd_agama`, `alamat`, `no_hp`, `email`, `username`, `password`, `id_level_user`, `foto`) VALUES
(13, 11, 'mulyono', 'Bekasi', '1998-04-17', 'Laki-laki', 'Islam', 'kd gandu rungkang rt 01 / rw 12 losari brebes', 812909090, 'jmulya.580@gmail.com', 'moel1704', '467aac84121860d86cf73dc0b55ced04', 1, 'moel.jpg'),
(15, 10, 'nurul fajrin s', 'Pemalang', '1992-08-16', 'Wanita', '', 'Setu', 12222, 'nirdys_4ever@yahoo.co.id', ' 1234567', 'fcea920f7412b5da7be0cf42b8c93759', 4, '9.jpg'),
(16, 10, 'nurul fajrin', 'Pemalang', '1992-08-16', 'Wanita', '', 'kp utan', 12222, 'nirdys_4ever@yahoo.co.id', ' nurulf', '2b7369e4e990e54bd6201ae354a3c132', 4, '91.jpg'),
(17, 22, 'ken', 'ada', '1992-08-16', 'Laki-laki', '', 'kd gandu rungkang losari brebes', 1111111111, 'mulya.lampard@yahoo.com', ' ken123', 'af974cf3ae8a5bf92832a864766f5b6c', 5, 'd.jpg'),
(19, 9090, 'nurul fajrin s', 'Pemalang', '1992-08-16', 'Wanita', 'Islam', 'kd gandu rungkang losari brebes', 2147483647, 'jmulya.580@gmail.com', 'nurulfj', '7d9568ca78ec1f1fb7eba16fcb135810', 4, 'g.jpg'),
(20, 90909, 'nurul fajrin', 'Pemalang', '1089-09-12', 'Wanita', '', 'kp utan', 2147483647, 'nirdys_4ever@yahoo.co.id', 'kendra1', 'ca143c185cbca61ef4b6cf24c4acdc4f', 5, '53.jpg'),
(21, 151610001, 'Riki Permana', 'Bekasi', '2000-09-12', 'Laki-laki', 'Islam', 'Tambun selatan', 2147483647, 'nirdys_4ever@yahoo.co.id', 'permana', '69612ba3c8a3c2550b193744ad85841a', 5, 'images1.png'),
(23, 90909, 'Nurul Fajrin', 'Pemalang', '1992-08-16', 'Wanita', 'Islam', 'KP sekyong Pamutih pemalang', 2147483647, 'nirdys_4ever@yahoo.co.id', 'fajrin', '9c159f85b653cc709fc9cfe9894dfefb', 5, 'nuyuy2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_rule`
--

CREATE TABLE IF NOT EXISTS `tbl_user_rule` (
`id_rule` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_level_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_rule`
--

INSERT INTO `tbl_user_rule` (`id_rule`, `id_menu`, `id_level_user`) VALUES
(42, 2, 1),
(46, 8, 1),
(47, 9, 1),
(48, 10, 1),
(49, 11, 1),
(52, 14, 1),
(53, 15, 1),
(54, 16, 1),
(55, 17, 1),
(62, 22, 1),
(63, 13, 1),
(67, 13, 3),
(68, 21, 3),
(70, 20, 4),
(71, 24, 4),
(72, 25, 4),
(73, 26, 4),
(75, 27, 5),
(80, 28, 5),
(81, 21, 2),
(83, 13, 2),
(85, 18, 1),
(86, 3, 1),
(87, 5, 1),
(88, 12, 1),
(89, 29, 3),
(90, 29, 2),
(91, 29, 1),
(93, 23, 2),
(94, 31, 2),
(96, 23, 3),
(97, 32, 5),
(98, 33, 1),
(99, 33, 2),
(100, 33, 3),
(101, 21, 1),
(102, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_walikelas`
--

CREATE TABLE IF NOT EXISTS `tbl_walikelas` (
`id_walikelas` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_tahun_akademik` int(11) NOT NULL,
  `id_rombel` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_walikelas`
--

INSERT INTO `tbl_walikelas` (`id_walikelas`, `id_guru`, `id_tahun_akademik`, `id_rombel`) VALUES
(65, 5, 15, 7),
(66, 8, 15, 9),
(67, 7, 15, 10),
(68, 10, 15, 11),
(69, 13, 15, 13),
(70, 9, 15, 14),
(71, 14, 15, 15),
(72, 11, 15, 16),
(73, 12, 15, 17),
(74, 15, 15, 18);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_jumlah_nilai`
--
CREATE TABLE IF NOT EXISTS `v_jumlah_nilai` (
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_master_rombel`
--
CREATE TABLE IF NOT EXISTS `v_master_rombel` (
`id_rombel` int(11)
,`nama_rombel` varchar(20)
,`kelas` int(11)
,`kd_jurusan` varchar(4)
,`nama_jurusan` varchar(30)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_nilai`
--
CREATE TABLE IF NOT EXISTS `v_nilai` (
`nis` varchar(11)
,`nama_mapel` varchar(50)
,`nilai` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa`
--
CREATE TABLE IF NOT EXISTS `v_siswa` (
`nis` varchar(11)
,`nama` varchar(40)
,`tanggal_lahir` date
,`tempat_lahir` varchar(30)
,`gender` enum('P','L','','')
,`kd_agama` varchar(2)
,`foto` text
,`id_rombel` int(11)
,`nama_ibu` varchar(40)
,`nama_ayah` varchar(40)
,`alamat` text
,`sekolah_asal` varchar(50)
,`username` varchar(40)
,`password` varchar(40)
,`nama_rombel` varchar(20)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_tbl_user`
--
CREATE TABLE IF NOT EXISTS `v_tbl_user` (
`id_user` int(11)
,`nama_lengkap` varchar(40)
,`username` varchar(50)
,`password` varchar(40)
,`id_level_user` int(11)
,`foto` text
,`nama_level` varchar(50)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_tbl_user_new`
--
CREATE TABLE IF NOT EXISTS `v_tbl_user_new` (
`id_user` int(11)
,`no_identitas` int(20)
,`nama_lengkap` varchar(40)
,`tempat_lahir` varchar(30)
,`tanggal_lahir` date
,`gender` enum('Laki-laki','Wanita','','')
,`kd_agama` enum('Islam','Kristen','Khatolik','Hindu','Budha','Lain-lain')
,`alamat` text
,`no_hp` int(15)
,`email` varchar(30)
,`username` varchar(50)
,`password` varchar(40)
,`id_level_user` int(11)
,`foto` text
,`nama_level` varchar(50)
,`nama_agama` varchar(30)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_walikelas`
--
CREATE TABLE IF NOT EXISTS `v_walikelas` (
`nama_guru` varchar(40)
,`nama_rombel` varchar(20)
,`id_walikelas` int(11)
,`id_tahun_akademik` int(11)
,`nama_jurusan` varchar(30)
,`kelas` int(11)
,`tahun_akademik` varchar(10)
);
-- --------------------------------------------------------

--
-- Structure for view `v_jumlah_nilai`
--
DROP TABLE IF EXISTS `v_jumlah_nilai`;
-- in use(#1356 - View 'siakad.v_jumlah_nilai' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

-- --------------------------------------------------------

--
-- Structure for view `v_master_rombel`
--
DROP TABLE IF EXISTS `v_master_rombel`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_master_rombel` AS select `tr`.`id_rombel` AS `id_rombel`,`tr`.`nama_rombel` AS `nama_rombel`,`tr`.`kelas` AS `kelas`,`tr`.`kd_jurusan` AS `kd_jurusan`,`tj`.`nama_jurusan` AS `nama_jurusan` from (`tbl_rombel` `tr` join `tbl_jurusan` `tj`) where (`tj`.`kd_jurusan` = `tr`.`kd_jurusan`);

-- --------------------------------------------------------

--
-- Structure for view `v_nilai`
--
DROP TABLE IF EXISTS `v_nilai`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_nilai` AS select `ts`.`nis` AS `nis`,`tm`.`nama_mapel` AS `nama_mapel`,`tn`.`nilai` AS `nilai` from (((`tbl_nilai` `tn` join `tbl_jadwal` `tj`) join `tbl_siswa` `ts`) join `tbl_mapel` `tm`) where ((`tn`.`id_jadwal` = `tj`.`id_jadwal`) and (`tn`.`nis` = `ts`.`nis`) and (`tj`.`kd_mapel` = `tm`.`kd_mapel`));

-- --------------------------------------------------------

--
-- Structure for view `v_siswa`
--
DROP TABLE IF EXISTS `v_siswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa` AS select `ts`.`nis` AS `nis`,`ts`.`nama` AS `nama`,`ts`.`tanggal_lahir` AS `tanggal_lahir`,`ts`.`tempat_lahir` AS `tempat_lahir`,`ts`.`gender` AS `gender`,`ts`.`kd_agama` AS `kd_agama`,`ts`.`foto` AS `foto`,`ts`.`id_rombel` AS `id_rombel`,`ts`.`nama_ibu` AS `nama_ibu`,`ts`.`nama_ayah` AS `nama_ayah`,`ts`.`alamat` AS `alamat`,`ts`.`sekolah_asal` AS `sekolah_asal`,`ts`.`username` AS `username`,`ts`.`password` AS `password`,`tr`.`nama_rombel` AS `nama_rombel` from (`tbl_siswa` `ts` join `tbl_rombel` `tr`) where (`ts`.`id_rombel` = `tr`.`id_rombel`);

-- --------------------------------------------------------

--
-- Structure for view `v_tbl_user`
--
DROP TABLE IF EXISTS `v_tbl_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tbl_user` AS select `tu`.`id_user` AS `id_user`,`tu`.`nama_lengkap` AS `nama_lengkap`,`tu`.`username` AS `username`,`tu`.`password` AS `password`,`tu`.`id_level_user` AS `id_level_user`,`tu`.`foto` AS `foto`,`tlu`.`nama_level` AS `nama_level` from (`tbl_user` `tu` join `tbl_level_user` `tlu`) where (`tu`.`id_level_user` = `tlu`.`id_level_user`);

-- --------------------------------------------------------

--
-- Structure for view `v_tbl_user_new`
--
DROP TABLE IF EXISTS `v_tbl_user_new`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tbl_user_new` AS select `tu`.`id_user` AS `id_user`,`tu`.`no_identitas` AS `no_identitas`,`tu`.`nama_lengkap` AS `nama_lengkap`,`tu`.`tempat_lahir` AS `tempat_lahir`,`tu`.`tanggal_lahir` AS `tanggal_lahir`,`tu`.`gender` AS `gender`,`tu`.`kd_agama` AS `kd_agama`,`tu`.`alamat` AS `alamat`,`tu`.`no_hp` AS `no_hp`,`tu`.`email` AS `email`,`tu`.`username` AS `username`,`tu`.`password` AS `password`,`tu`.`id_level_user` AS `id_level_user`,`tu`.`foto` AS `foto`,`tlu`.`nama_level` AS `nama_level`,`ta`.`nama_agama` AS `nama_agama` from ((`tbl_user` `tu` join `tbl_level_user` `tlu`) join `tbl_agama` `ta`) where ((`tu`.`id_level_user` = `tlu`.`id_level_user`) and (`tu`.`kd_agama` = `ta`.`kd_agama`));

-- --------------------------------------------------------

--
-- Structure for view `v_walikelas`
--
DROP TABLE IF EXISTS `v_walikelas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_walikelas` AS select `g`.`nama_guru` AS `nama_guru`,`r`.`nama_rombel` AS `nama_rombel`,`w`.`id_walikelas` AS `id_walikelas`,`w`.`id_tahun_akademik` AS `id_tahun_akademik`,`j`.`nama_jurusan` AS `nama_jurusan`,`r`.`kelas` AS `kelas`,`ta`.`tahun_akademik` AS `tahun_akademik` from ((((`tbl_walikelas` `w` join `tbl_rombel` `r`) join `tbl_guru` `g`) join `tbl_jurusan` `j`) join `tbl_tahun_akademik` `ta`) where ((`w`.`id_guru` = `g`.`id_guru`) and (`w`.`id_rombel` = `r`.`id_rombel`) and (`j`.`kd_jurusan` = `r`.`kd_jurusan`) and (`ta`.`id_tahun_akademik` = `w`.`id_tahun_akademik`));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
 ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_sekolah`
--
ALTER TABLE `tabel_sekolah`
 ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `tbl_absen`
--
ALTER TABLE `tbl_absen`
 ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `tbl_agama`
--
ALTER TABLE `tbl_agama`
 ADD PRIMARY KEY (`kd_agama`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
 ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `tbl_biaya_sekolah`
--
ALTER TABLE `tbl_biaya_sekolah`
 ADD PRIMARY KEY (`id_biaya`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
 ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tbl_history_kelas`
--
ALTER TABLE `tbl_history_kelas`
 ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
 ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_jenis_pembayaran`
--
ALTER TABLE `tbl_jenis_pembayaran`
 ADD PRIMARY KEY (`id_jenis_pembayaran`);

--
-- Indexes for table `tbl_jenjang_sekolah`
--
ALTER TABLE `tbl_jenjang_sekolah`
 ADD PRIMARY KEY (`id_jenjang`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
 ADD PRIMARY KEY (`kd_jurusan`);

--
-- Indexes for table `tbl_kurikulum`
--
ALTER TABLE `tbl_kurikulum`
 ADD PRIMARY KEY (`id_kurikulum`);

--
-- Indexes for table `tbl_kurikulum_detail`
--
ALTER TABLE `tbl_kurikulum_detail`
 ADD PRIMARY KEY (`id_kurikulum_detail`);

--
-- Indexes for table `tbl_level_user`
--
ALTER TABLE `tbl_level_user`
 ADD PRIMARY KEY (`id_level_user`);

--
-- Indexes for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
 ADD PRIMARY KEY (`kd_mapel`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
 ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
 ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tbl_rombel`
--
ALTER TABLE `tbl_rombel`
 ADD PRIMARY KEY (`id_rombel`);

--
-- Indexes for table `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
 ADD PRIMARY KEY (`kd_ruang`);

--
-- Indexes for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
 ADD PRIMARY KEY (`id_semester`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
 ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tbl_tahun_akademik`
--
ALTER TABLE `tbl_tahun_akademik`
 ADD PRIMARY KEY (`id_tahun_akademik`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_user_rule`
--
ALTER TABLE `tbl_user_rule`
 ADD PRIMARY KEY (`id_rule`);

--
-- Indexes for table `tbl_walikelas`
--
ALTER TABLE `tbl_walikelas`
 ADD PRIMARY KEY (`id_walikelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tbl_absen`
--
ALTER TABLE `tbl_absen`
MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_agama`
--
ALTER TABLE `tbl_agama`
MODIFY `kd_agama` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_biaya_sekolah`
--
ALTER TABLE `tbl_biaya_sekolah`
MODIFY `id_biaya` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_history_kelas`
--
ALTER TABLE `tbl_history_kelas`
MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=202;
--
-- AUTO_INCREMENT for table `tbl_jenis_pembayaran`
--
ALTER TABLE `tbl_jenis_pembayaran`
MODIFY `id_jenis_pembayaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_jenjang_sekolah`
--
ALTER TABLE `tbl_jenjang_sekolah`
MODIFY `id_jenjang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_kurikulum`
--
ALTER TABLE `tbl_kurikulum`
MODIFY `id_kurikulum` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_kurikulum_detail`
--
ALTER TABLE `tbl_kurikulum_detail`
MODIFY `id_kurikulum_detail` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_level_user`
--
ALTER TABLE `tbl_level_user`
MODIFY `id_level_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_rombel`
--
ALTER TABLE `tbl_rombel`
MODIFY `id_rombel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_tahun_akademik`
--
ALTER TABLE `tbl_tahun_akademik`
MODIFY `id_tahun_akademik` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tbl_user_rule`
--
ALTER TABLE `tbl_user_rule`
MODIFY `id_rule` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `tbl_walikelas`
--
ALTER TABLE `tbl_walikelas`
MODIFY `id_walikelas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=75;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
