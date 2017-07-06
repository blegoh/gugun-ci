-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2017 at 05:26 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sma1`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(255) NOT NULL,
  `finger` int(255) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `adaptif`
--

CREATE TABLE `adaptif` (
  `id` int(10) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` text NOT NULL,
  `pelajaran` text NOT NULL,
  `jabatan` text NOT NULL,
  `gelar` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `nama_file` text NOT NULL,
  `foto` text NOT NULL,
  `keterangan` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `nama` text NOT NULL,
  `username` text NOT NULL,
  `password` varchar(44) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(23) NOT NULL,
  `nama` varchar(26) NOT NULL,
  `tahun_lulus` int(23) NOT NULL,
  `kelas` varchar(23) NOT NULL,
  `jurusan` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `datasiswa`
--

CREATE TABLE `datasiswa` (
  `id` int(10) NOT NULL,
  `nama` text NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `jurusan` text NOT NULL,
  `nis` int(30) NOT NULL,
  `asalsekolah` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(10) NOT NULL,
  `nama_file` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `nama_file`, `deskripsi`) VALUES
(1, '1.jpg', 'yhsahasjhash cakep'),
(2, 'images.jpg', 'pembelajaran'),
(3, '20141114_214506.jpg', 'ganteng');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(10) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` text NOT NULL,
  `pelajaran` text NOT NULL,
  `jabatan` text NOT NULL,
  `gelar` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `nama_file` text NOT NULL,
  `foto` text NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(10) NOT NULL,
  `isi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `isi`) VALUES
(7, '<p>\r\n	<em><strong>selamat datang di website resmi smk ix lurah 2 kota jambi</strong></em>.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(10) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `pesan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `normatif`
--

CREATE TABLE `normatif` (
  `nip` varchar(20) NOT NULL,
  `nama` text NOT NULL,
  `pelajaran` text NOT NULL,
  `jabatan` text NOT NULL,
  `gelar` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `nama_file` text NOT NULL,
  `foto` text NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `normatif`
--

INSERT INTO `normatif` (`nip`, `nama`, `pelajaran`, `jabatan`, `gelar`, `alamat`, `nama_file`, `foto`, `keterangan`) VALUES
('293244_2729951594752', '787878', 'gjhgjgjg', 'hgjgj', 'gjg', 'jgj', 'jg', '293244_272995159475233_593746882_n.jpg', ''),
('315079_2906551477092', '787878', 'uihh', 'hjhjh', 'jkhkhkh', 'khkhkhk', 'hkhk', '315079_290655147709234_368939177_n.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `foto` text NOT NULL,
  `nama_siswa` varchar(23) DEFAULT NULL,
  `ttl_siswa` varchar(23) DEFAULT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `no_induk` varchar(23) DEFAULT NULL,
  `nisn` varchar(23) DEFAULT NULL,
  `agama_siswa` varchar(20) DEFAULT NULL,
  `gol_darah_siswa` varchar(23) DEFAULT NULL,
  `alamat_siswa` text,
  `kode_pos_siswa` int(10) DEFAULT NULL,
  `no_hp_siswa` int(15) DEFAULT NULL,
  `asal_sekolah` varchar(23) DEFAULT NULL,
  `no_sttb` varchar(23) DEFAULT NULL,
  `jml_nilai_skhu` varchar(23) DEFAULT NULL,
  `nama_ayah` varchar(23) DEFAULT NULL,
  `ttl_ayah` varchar(23) DEFAULT NULL,
  `agama_ayah` varchar(23) DEFAULT NULL,
  `pekerjaan_ayah` varchar(23) DEFAULT NULL,
  `gol_darah_ayah` varchar(23) DEFAULT NULL,
  `alamat_ayah` text,
  `kode_pos_ayah` int(10) DEFAULT NULL,
  `no_hp_ayah` int(15) DEFAULT NULL,
  `nama_ibu` varchar(23) DEFAULT NULL,
  `ttl_ibu` varchar(23) DEFAULT NULL,
  `agama_ibu` varchar(23) DEFAULT NULL,
  `pekerjaan_ibu` varchar(23) DEFAULT NULL,
  `gol_darah_ibu` varchar(23) DEFAULT NULL,
  `alamat_ibu` text,
  `kode_pos_ibu` int(10) DEFAULT NULL,
  `no_hp_ibu` int(15) DEFAULT NULL,
  `nama_wali` varchar(23) DEFAULT NULL,
  `pekerjaan_wali` varchar(23) DEFAULT NULL,
  `alamat_wali` text,
  `username` varchar(23) NOT NULL,
  `password` varchar(23) NOT NULL,
  `nomor` varchar(23) NOT NULL,
  `jurusan` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`tgl_daftar`, `foto`, `nama_siswa`, `ttl_siswa`, `jenis_kelamin`, `no_induk`, `nisn`, `agama_siswa`, `gol_darah_siswa`, `alamat_siswa`, `kode_pos_siswa`, `no_hp_siswa`, `asal_sekolah`, `no_sttb`, `jml_nilai_skhu`, `nama_ayah`, `ttl_ayah`, `agama_ayah`, `pekerjaan_ayah`, `gol_darah_ayah`, `alamat_ayah`, `kode_pos_ayah`, `no_hp_ayah`, `nama_ibu`, `ttl_ibu`, `agama_ibu`, `pekerjaan_ibu`, `gol_darah_ibu`, `alamat_ibu`, `kode_pos_ibu`, `no_hp_ibu`, `nama_wali`, `pekerjaan_wali`, `alamat_wali`, `username`, `password`, `nomor`, `jurusan`) VALUES
('2015-06-14 13:16:43', '20141031_133326.jpg', 'asepb yudi', '22091992', 'laki-laki', '10000325', '2783', 'islam', 'o', 'jalan kol abunjani', 36365, 89892637, 'smp 12 mj', '098', '45', 'heri', '22091992', 'islam', 'tani', 'o', 'jlkol abunjani', 8926737, 0, 'nama_ibu', '738347499', 'islam', 'prt', 'o', 'djhsajhasjhsawang', 936746, 2147483647, 'suryono', 'warung', 'sipin', '1', 'a', '001', 'otomotif'),
('2015-06-14 13:35:20', 'a.png', '1', '1', 'laki-laki', '1', '1', 'kristen', '1', '11', 1, 1, '1', '1', '1', '1', '1', 'protestan', '1', '1', '1', 1, 0, 'nama_ibu', '1', 'kristen', '1', '1', '1', 1, 1, '1', '1', '1', '1', '1', '1', '1'),
('2015-06-30 14:21:44', 'juju.png', 'asss', 'ss88', 'laki-laki', '77', '77', 'islam', 'u', 'jhhjb', 677, 2147483647, 'gb', 'bvhb', '878789', 'vgv', 'hgvg76', 'kristen', '1', '1', '1', 1, 0, 'nama_ibu', '1', 'islam', '1', '1', '1', 1, 1, '1', '1', '1', '1', '1', '11', 'jhj'),
('2016-05-05 16:39:00', 'IMG_4322-200x300.jpg', 'Roko', 'jambi', 'laki-laki', '97879878', '878787878', 'kristen', 'O', 'oiuoui', 876877, 8768, '678687', '67', '6', '68', '8687', 'islam', '86', '868', '68', 7676, 0, 'nama_ibu', '67', 'islam', '67', '67', '686', 76, 86, '767', '6767', '676', '7', '7', '', 'TKR01');

-- --------------------------------------------------------

--
-- Table structure for table `penghargaan`
--

CREATE TABLE `penghargaan` (
  `id` int(23) NOT NULL,
  `nama` varchar(23) NOT NULL,
  `tahun` varchar(23) NOT NULL,
  `penghargaan` varchar(23) NOT NULL,
  `cabang` varchar(23) NOT NULL,
  `no` int(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penghargaan`
--

INSERT INTO `penghargaan` (`id`, `nama`, `tahun`, `penghargaan`, `cabang`, `no`) VALUES
(6, 'jgj', 'ggjgjg jg', 'gjg', 'jgg', 56656);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(20) NOT NULL,
  `isi` varchar(20) NOT NULL,
  `judul` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `isi`, `judul`) VALUES
(3, '<p>\r\n	geeeee</p>\r\n', ''),
(4, '<p>\r\n	knkn,,n,</p>\r\n', 'njnjnjn');

-- --------------------------------------------------------

--
-- Table structure for table `produktif`
--

CREATE TABLE `produktif` (
  `id` int(20) NOT NULL,
  `nip` varchar(40) NOT NULL,
  `nama` text NOT NULL,
  `pelajaran` text NOT NULL,
  `jabatan` text NOT NULL,
  `gelar` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `nama_file` text NOT NULL,
  `foto` text NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id` int(10) NOT NULL,
  `isi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id`, `isi`) VALUES
(3, '<p>\r\n	masih dalam pengerjaan</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `staftu`
--

CREATE TABLE `staftu` (
  `id` int(20) NOT NULL,
  `nip` varchar(40) NOT NULL,
  `nama` text NOT NULL,
  `pelajaran` text NOT NULL,
  `jabatan` text NOT NULL,
  `gelar` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `nama_file` text NOT NULL,
  `foto` text NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(23) NOT NULL,
  `nm_admin` varchar(23) NOT NULL,
  `ps_admin` varchar(23) NOT NULL,
  `nama_admin` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nm_admin`, `ps_admin`, `nama_admin`) VALUES
(1, 'admin', 'admin', 'cahya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_confirmasi`
--

CREATE TABLE `tbl_confirmasi` (
  `id_confirm` int(23) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `konfirmasi` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_confirmasi`
--

INSERT INTO `tbl_confirmasi` (`id_confirm`, `nik`, `konfirmasi`) VALUES
(1, '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `nama_guru` varchar(26) NOT NULL,
  `nip` int(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `status_pegawai` varchar(23) NOT NULL,
  `bidang_study` varchar(26) NOT NULL,
  `id_guru` int(23) NOT NULL,
  `ttl` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `id_jurusan` int(2) NOT NULL,
  `kode_jurusan` varchar(5) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`id_jurusan`, `kode_jurusan`, `nama_jurusan`) VALUES
(1, 'TKR01', 'IPA'),
(2, 'TL01', 'IPS'),
(3, 'X', 'X');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kepsek`
--

CREATE TABLE `tbl_kepsek` (
  `nm_admin` text,
  `ps_admin` text,
  `username` text,
  `id` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kepsek`
--

INSERT INTO `tbl_kepsek` (`nm_admin`, `ps_admin`, `username`, `id`) VALUES
('kepsekk', 'kepsekk', 'Mr', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_matapel`
--

CREATE TABLE `tbl_matapel` (
  `id_matapel` int(2) NOT NULL,
  `nama_pel` varchar(30) NOT NULL,
  `kode_jurusan` varchar(5) NOT NULL,
  `kkm` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_matapel`
--

INSERT INTO `tbl_matapel` (`id_matapel`, `nama_pel`, `kode_jurusan`, `kkm`) VALUES
(1, 'pendidikan agama', '', '6.70'),
(2, 'pendidikan kewarganegaraan', '', '6.60'),
(3, 'bahasa indonesia', '', '6.60'),
(4, 'pendidikan jasmani dan olahrag', '', '6.50'),
(5, 'seni budaya', '', '6.60'),
(6, 'bahasa inggris', '', '6.70'),
(7, 'matematika', '', '6.30'),
(8, 'ilmu pengetahuan alam', '', '6.60'),
(9, 'ilmu pengetahuan sosial', '', '6.50'),
(10, 'fisika', '', '6.55'),
(11, 'kimia', '', '6.30'),
(12, 'KKPI', '', '6.70'),
(13, 'kewirausahaan', '', ''),
(14, 'DKK 01 (memahami dasar-dasar m', 'OT1', '7.05'),
(15, 'DKK 04 (mengintresprestasikan ', 'OT1', '7.05'),
(16, 'DKK 05 (menggunakan peralatan ', 'OT1', '7.05'),
(17, 'DKK 06 (menggunakan alat-alat ', 'OT1', '7.05'),
(18, 'DKK 07 (menerapkan prosedur k3', 'OT1', '7.05'),
(19, 'dasar-dasar elektronika', 'EL1', ''),
(20, 'perawatan dan perbaikan perala', 'EL1', '71.00'),
(21, 'instalasi listrik bangunan sed', 'EL1', '71.00'),
(22, 'instalasi listrik bangunan ber', 'EL1', '71.00'),
(23, 'perbaikan motor listrik', 'EL1', '71.00'),
(24, 'sistem pengendali elektronik', 'EL1', '71.00'),
(25, 'peralatan pengendali daya tega', 'EL1', '71.00'),
(26, 'sistem pengendali elektromakne', 'EL1', '71.00'),
(27, 'sistem pertahanan instalasi li', 'EL1', '71.00'),
(28, 'peralatan panel listrik dan sw', 'EL1', '71.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_matapelajaran`
--

CREATE TABLE `tbl_matapelajaran` (
  `id_pel` int(23) NOT NULL,
  `kode_jurusan` varchar(5) NOT NULL,
  `no_induk` int(23) NOT NULL,
  `smester` int(5) NOT NULL,
  `agama` varchar(23) NOT NULL,
  `kewarganegaraan` varchar(23) NOT NULL,
  `b_indonesia` varchar(23) NOT NULL,
  `penjas` varchar(23) NOT NULL,
  `seni_budaya` varchar(23) NOT NULL,
  `b_inggris` varchar(23) NOT NULL,
  `mtk` varchar(23) NOT NULL,
  `ipa` varchar(23) NOT NULL,
  `ips` varchar(23) NOT NULL,
  `fisika` varchar(23) NOT NULL,
  `kimia` varchar(23) NOT NULL,
  `KKPI` varchar(23) NOT NULL,
  `kewirausahaan` varchar(23) NOT NULL,
  `KKM` varchar(23) NOT NULL,
  `angka` varchar(23) NOT NULL,
  `huruf` varchar(23) NOT NULL,
  `jumlah_nilai` varchar(23) NOT NULL,
  `rata_rata` varchar(23) NOT NULL,
  `kelas` int(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_matapelajaran`
--

INSERT INTO `tbl_matapelajaran` (`id_pel`, `kode_jurusan`, `no_induk`, `smester`, `agama`, `kewarganegaraan`, `b_indonesia`, `penjas`, `seni_budaya`, `b_inggris`, `mtk`, `ipa`, `ips`, `fisika`, `kimia`, `KKPI`, `kewirausahaan`, `KKM`, `angka`, `huruf`, `jumlah_nilai`, `rata_rata`, `kelas`) VALUES
(1, 'TM1', 1, 1, '1,2', '', '', '3,3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(2, 'TM1', 1, 2, '1,2', '', '', '3,3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(4, '', 5, 1, '8', '76', '76', '6', '75', '6556', '56', '5', '4', '54', '54', '5', '45', '', '', '', '', '', 1),
(5, '', 5, 2, '6', '767', '67', '6', '767', '87', '6', '67', '6', '6', '6', '76', '6', '', '', '', '', '', 1),
(6, '', 5, 1, '6', '75', '65', '6', '6', '545', '45', '4', '4', '54', '4', '4', '4', '', '', '', '', '', 2),
(7, '', 5, 2, '7', '87', '8', '87', '8', '6', '77', '3', '3', '45654', '75', '75', '75', '', '', '', '', '', 2),
(8, '', 2, 2, '576', '565', '675', '765', '765', '65', '65', '65', '65', '6546', '5435', '3464', '535', '', '', '', '', '', 2),
(9, '', 2, 1, '5', '67', '56', '435', '33', '54', '35', '343', '43', '3', '4', '5', '787', '', '', '', '', '', 3),
(11, '', 32131, 3, '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '', '', '', '', '', 1),
(12, 'TL01', 1202145, 0, '69.00', '71.20', '90.00', '60.25', '80.00', '95.00', '90.00', '76.00', '70.00', '76.90', '80.00', '70.00', '60.00', '', '', '', '', '', 0),
(13, 'TL01', 1202145, 2, '70.00', '20.00', '60.00', '90.00', '80.00', '9', '8', '9', '8', '7', '8', '8', '7', '', '', '', '', '', 1),
(14, 'TL01', 1202145, 1, '9', '9', '9', '8', '8', '7', '7', '8', '8', '9', '8', '8', '9', '', '', '', '', '', 2),
(15, 'TL01', 1202145, 2, '8', '8', '8', '8', '7', '7', '7', '8', '8', '8', '9', '9', '9', '', '', '', '', '', 2),
(17, 'TKR01', 123, 1, '8', '88', '', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '', '', '', '', '', 1),
(18, 'TKR01', 123, 1, '8', '88', '', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '', '', '', '', '', 1),
(19, 'TKR01', 123, 1, '9', '99', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '', '', '', '', '', 1),
(20, 'TL01', 5452322, 2, '8', '8', '88', '8', '8', '8', '8', '8', '8', '8', '8', '8', '88', '', '', '', '', '', 1),
(22, 'TKR01', 3, 1, '7', '7', '7', '77', '7', '7', '7', '7', '77', '7', '7', '7', '7', '', '', '', '', '', 1),
(23, 'TKR01', 131211, 1, '78.00', '68.00', '80.00', '60.00', '50.00', '80.00', '85.00', '90.00', '85.00', '80.00', '95.00', '45.00', '90.00', '', '', '', '', '', 1),
(24, 'TL01', 131411, 1, '70.00', '80.00', '80.00', '65.00', '80.00', '90.00', '80.00', '80.00', '95.00', '80.00', '80.00', '70.00', '80.00', '', '', '', '', '', 1),
(25, 'TKR01', 121212, 1, '90.00', '70.20', '80.00', '60.25', '80.00', '95.00', '80.00', '40.00', '80.00', '80.00', '20.00', '75.00', '80.00', '', '', '', '', '', 1),
(26, 'TL01', 21, 1, '20', '90', '90', '90', '90', '90', '90', '80', '08', '80', '808', '80', '80', '', '', '', '', '', 1),
(27, 'TL01', 1234, 2, '70', '70', '70', '70', '70', '70', '70', '70', '70', '70', '70', '70', '70', '', '', '', '', '', 0),
(29, 'TL01', 12, 2, '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '0', '0', '', '', '', '', '', 3),
(30, 'TKR01', 9, 2, '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '0', '0', '', '', '', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `id_nilai` int(3) NOT NULL,
  `id_matapel` int(2) NOT NULL,
  `nik` int(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nik` int(23) NOT NULL,
  `ttl` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(23) NOT NULL,
  `agama` varchar(23) NOT NULL,
  `nama_siswa` varchar(26) NOT NULL,
  `kode_walikelas` int(23) NOT NULL,
  `smester` varchar(10) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `kode_jurusan` varchar(10) DEFAULT NULL,
  `tahun_angkatan` varchar(12) NOT NULL,
  `konfirmasi` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nik`, `ttl`, `jenis_kelamin`, `agama`, `nama_siswa`, `kode_walikelas`, `smester`, `kelas`, `kode_jurusan`, `tahun_angkatan`, `konfirmasi`) VALUES
(12, 'Bandung', 'Laki - Laki', 'islam', 'asus', 2, '2', '3', 'TL01', '2012-2013', 1),
(15, 'bandung', 'Laki - Laki', 'islam', 'asep', 1, '1', '1', 'TL01', '2012-2013', 0),
(1234, 'Makassar', 'Perempuan', 'islam', 'Qorry Oktaviani', 2, '2', 'XI', 'TL01', '2013-2014', 1),
(3214, 'Bandung', 'Perempuan', 'islam', 'Nurqalbi Khairul', 3, '2', 'X', 'TL01', '2013-2014', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_walikelas`
--

CREATE TABLE `tbl_walikelas` (
  `kode_walikelas` int(23) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama_walikelas` varchar(26) NOT NULL,
  `nama_login` varchar(23) NOT NULL,
  `password_login` varchar(23) NOT NULL,
  `kode_jurusan` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_walikelas`
--

INSERT INTO `tbl_walikelas` (`kode_walikelas`, `nip`, `nama_walikelas`, `nama_login`, `password_login`, `kode_jurusan`) VALUES
(1, '123', 'anfal', 'anfal', 'anfal', 'TL01'),
(2, '1234', 'cahya', 'cahya', 'cahya', 'TKR01'),
(3, '12345', 'Alif', 'Alif', 'alif', 'TKR01'),
(56478, '6701142077', 'Galih', 'Galih', 'galih', 'X');

-- --------------------------------------------------------

--
-- Table structure for table `te`
--

CREATE TABLE `te` (
  `id` int(20) NOT NULL,
  `nama_file` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tkj`
--

CREATE TABLE `tkj` (
  `id` int(20) NOT NULL,
  `nama_file` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tkr`
--

CREATE TABLE `tkr` (
  `id` int(20) NOT NULL,
  `nama_file` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tsm`
--

CREATE TABLE `tsm` (
  `id` int(20) NOT NULL,
  `nama_file` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id` int(20) NOT NULL,
  `isi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id`, `isi`) VALUES
(7, '<p>\r\n	<span style="font-size:14px;"><strong><u>VISI DAN MISI SMK IX LURAH 2 KOTA JAMBI</u></strong></span></p>\r\n<p>\r\n	<em><u><strong><span style="font-size:12px;">VISI</span></strong></u></em></p>\r\n<p>\r\n	Unggul dalam penyiapan SDM sebagai asset pembangunan</p>\r\n<p>\r\n	yang produktif, profesional, berbudi pekerti luhur yang berakar</p>\r\n<p>\r\n	pada norma dan nilai budaya bangsa indonesia yang mampu</p>\r\n<p>\r\n	bersaing secara sehat di Era Global.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<span style="font-size:12px;"><em><u><strong>MISI</strong></u></em></span></p>\r\n<p>\r\n	Mengembangkan proses pembelajaran bidang keahlian teknik</p>\r\n<p>\r\n	otomotif, teknik listrik, teknik sepeda motor dan teknik komputer</p>\r\n<p>\r\n	jaringan yang inovatif, kreatif, fleksibel dan berwawasan global</p>\r\n<p>\r\n	mengintegrasikan proses pembelajaran bidang keahlian teknik</p>\r\n<p>\r\n	otomotif, teknik listrik, teknik sepeda motor dan teknik komputer</p>\r\n<p>\r\n	jaringan yang berwawasan mutu dan keunggulan, profesional</p>\r\n<p>\r\n	dan berorientasi masa depan mewujudkan layanan prima</p>\r\n<p>\r\n	dalam upaya pemberdayaan sekolah dengan masyarakat dan</p>\r\n<p>\r\n	instansi terkait mengembangkan iklim belajar yang berakar</p>\r\n<p>\r\n	pada norma dan nilai budaya bangsa memiliki jiwa kewirausahaan</p>\r\n<p>\r\n	yang tangguh.</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adaptif`
--
ALTER TABLE `adaptif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `password_2` (`password`),
  ADD UNIQUE KEY `password_3` (`password`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datasiswa`
--
ALTER TABLE `datasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penghargaan`
--
ALTER TABLE `penghargaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produktif`
--
ALTER TABLE `produktif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staftu`
--
ALTER TABLE `staftu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_confirmasi`
--
ALTER TABLE `tbl_confirmasi`
  ADD PRIMARY KEY (`id_confirm`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tbl_matapelajaran`
--
ALTER TABLE `tbl_matapelajaran`
  ADD PRIMARY KEY (`id_pel`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `te`
--
ALTER TABLE `te`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tkj`
--
ALTER TABLE `tkj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tkr`
--
ALTER TABLE `tkr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tsm`
--
ALTER TABLE `tsm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `adaptif`
--
ALTER TABLE `adaptif`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(23) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `penghargaan`
--
ALTER TABLE `penghargaan`
  MODIFY `id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `produktif`
--
ALTER TABLE `produktif`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `staftu`
--
ALTER TABLE `staftu`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_confirmasi`
--
ALTER TABLE `tbl_confirmasi`
  MODIFY `id_confirm` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id_guru` int(23) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_matapelajaran`
--
ALTER TABLE `tbl_matapelajaran`
  MODIFY `id_pel` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `te`
--
ALTER TABLE `te`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tkj`
--
ALTER TABLE `tkj`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tkr`
--
ALTER TABLE `tkr`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tsm`
--
ALTER TABLE `tsm`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
