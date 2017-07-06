-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2016 at 01:35 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sinosmk9`
--

-- --------------------------------------------------------

--
-- Table structure for table `adaptif`
--

CREATE TABLE IF NOT EXISTS `adaptif` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nip` varchar(20) NOT NULL,
  `nama` text NOT NULL,
  `pelajaran` text NOT NULL,
  `jabatan` text NOT NULL,
  `gelar` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `nama_file` text NOT NULL,
  `foto` text NOT NULL,
  `keterangan` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `adaptif`
--

INSERT INTO `adaptif` (`id`, `nip`, `nama`, `pelajaran`, `jabatan`, `gelar`, `alamat`, `nama_file`, `foto`, `keterangan`) VALUES
(10, 'administrator.jpg', '', 'Adiati', 'b.inggris', 'pengajar B.inggris', 'S2', 'kota jambi', 'administrator.jpg', ''),
(11, 'Kepsek 2.jpg', '196312311986012011', 'Suparyani', 'matematika', 'kepala sekolah', 'S1', 'kota jambi', 'Kepsek 2.jpg', ''),
(12, 'NCD.jpg', '', 'Nopel Citra Dewi', 'ips', 'pengajar IPS', 'S1', 'kota jambi', 'NCD.jpg', ''),
(13, 'suparman.jpg', '', 'Suparman', 'kimia', 'pengajar kimia', 'S1', 'kota jambi', 'suparman.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL,
  `nama` text NOT NULL,
  `username` text NOT NULL,
  `password` varchar(44) NOT NULL,
  PRIMARY KEY (`id`)
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

CREATE TABLE IF NOT EXISTS `alumni` (
  `id` int(23) NOT NULL AUTO_INCREMENT,
  `nama` varchar(26) NOT NULL,
  `tahun_lulus` int(23) NOT NULL,
  `kelas` varchar(23) NOT NULL,
  `jurusan` varchar(23) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `nama`, `tahun_lulus`, `kelas`, `jurusan`) VALUES
(12, 'yani', 2013, '', 'otomotif'),
(13, 'Bahrudin', 2013, '', 'Listrik'),
(14, 'M.Iskandar', 2013, '', 'otomotif'),
(15, 'M.santo', 2013, '', 'Listrik');

-- --------------------------------------------------------

--
-- Table structure for table `datasiswa`
--

CREATE TABLE IF NOT EXISTS `datasiswa` (
  `id` int(10) NOT NULL,
  `nama` text NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `jurusan` text NOT NULL,
  `nis` int(30) NOT NULL,
  `asalsekolah` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datasiswa`
--

INSERT INTO `datasiswa` (`id`, `nama`, `kelas`, `jurusan`, `nis`, `asalsekolah`, `keterangan`) VALUES
(1, 'ahmad hendri', '1', 'listrik', 152487, 'smp n 2 muaro jambi', 'lengkap'),
(2, 'fitry handayani', '1', 'listrik', 152072, 'smp n 24 jambi', 'lengkap'),
(3, 'jimmy rianto', '1', 'Listrik', 152488, 'smp n 24 jambi', 'lengkap'),
(4, 'ade wijaya', '1', 'otomotif', 152054, 'smp n 8 muaro jambi', 'lengkap'),
(5, 'agus riansyah', '1', 'otomotif', 152452, 'smp n 6 kuala tungkal', 'lengkap'),
(6, 'andi saputra', '1', 'otomotif', 152453, 'smp n 8 muaro jambi', 'lengkap'),
(7, 'abdul rokim', '2', 'LISTRIK', 142405, 'SMP N11 SAROLANGUN', 'lengkap'),
(8, 'andika dwi cahyo', '2 ', 'listrik', 142404, 'smp n 6 kuala tungkal', 'lengkap'),
(9, 'abul hasan asari', '2', 'otomotif', 132324, 'SMP N19 SAROLANGUN', 'lengkap'),
(10, 'agung setiawan', '3', 'listrik', 132229, 'smp n 2 muaro jambi', 'lengkap');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_file` text NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

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

CREATE TABLE IF NOT EXISTS `guru` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nip` varchar(20) NOT NULL,
  `nama` text NOT NULL,
  `pelajaran` text NOT NULL,
  `jabatan` text NOT NULL,
  `gelar` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `nama_file` text NOT NULL,
  `foto` text NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `guru`
--


-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `isi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `isi`) VALUES
(7, '<p>\r\n	<em><strong>selamat datang di website resmi smk ix lurah 2 kota jambi</strong></em>.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `pesan`) VALUES
(5, 'yadi', 'vadi@gmail.com', 'maaf pak numpang tankya saya orang tua dari aldoriadi kelas 2 tkr ,apakah sudah membayar spp pada bulan ini, trimakasih');

-- --------------------------------------------------------

--
-- Table structure for table `normatif`
--

CREATE TABLE IF NOT EXISTS `normatif` (
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
('Ratnawati.jpg', '', 'Ratnawati', 'ppkn', 'pengajar PPKN', 'S1', 'telanai pura', 'Ratnawati.jpg', ''),
('Desrianti.jpg', '155612311986032019', 'desrianti', 'agama ', 'pengajar Agama', 'S1', 'kota jambi', 'Desrianti.jpg', ''),
('Siti Roliyah.jpg', '195907011987032005', 'Siti roliyah', 'bahasa indonesia', 'pengajar B.indonesia', 'S1', 'buluran,kota jambi', 'Siti Roliyah.jpg', ''),
('Ramli.jpg', '', 'Ramli M.nur', 'penjas', 'pengajar Penjas', 'S1', 'jl.bagan pete .kota jambhi', 'Ramli.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
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
('2015-06-14 20:16:43', '20141031_133326.jpg', 'asepb yudi', '22091992', 'laki-laki', '10000325', '2783', 'islam', 'o', 'jalan kol abunjani', 36365, 89892637, 'smp 12 mj', '098', '45', 'heri', '22091992', 'islam', 'tani', 'o', 'jlkol abunjani', 8926737, 0, 'nama_ibu', '738347499', 'islam', 'prt', 'o', 'djhsajhasjhsawang', 936746, 2147483647, 'suryono', 'warung', 'sipin', '1', 'a', '001', 'otomotif'),
('2015-06-14 20:35:20', 'a.png', '1', '1', 'laki-laki', '1', '1', 'kristen', '1', '11', 1, 1, '1', '1', '1', '1', '1', 'protestan', '1', '1', '1', 1, 0, 'nama_ibu', '1', 'kristen', '1', '1', '1', 1, 1, '1', '1', '1', '1', '1', '1', '1'),
('2015-06-30 21:21:44', 'juju.png', 'asss', 'ss88', 'laki-laki', '77', '77', 'islam', 'u', 'jhhjb', 677, 2147483647, 'gb', 'bvhb', '878789', 'vgv', 'hgvg76', 'kristen', '1', '1', '1', 1, 0, 'nama_ibu', '1', 'islam', '1', '1', '1', 1, 1, '1', '1', '1', '1', '1', '11', 'jhj'),
('2016-05-05 23:39:00', 'IMG_4322-200x300.jpg', 'Roko', 'jambi', 'laki-laki', '97879878', '878787878', 'kristen', 'O', 'oiuoui', 876877, 8768, '678687', '67', '6', '68', '8687', 'islam', '86', '868', '68', 7676, 0, 'nama_ibu', '67', 'islam', '67', '67', '686', 76, 86, '767', '6767', '676', '7', '7', '', 'TKR01'),
('2016-05-24 09:11:23', 'Dewi Sartika.jpg', 'hardi', 'ambi8802/20', 'perempuan', '244', '87789', 'islam', '', 'aashs', 9789798, 2147483647, 'smp 3 mj', '8789', '8878', 'bhbi', 'kbk8979798', 'islam', 'bhb', 'bhb', 'hbb', 78678, 0, 'nama_ibu', 'hbh787997', 'islam', 'kbbk', 'hb', 'hhb', 89, 87, 'bhb', 'kb', 'bbk', '8', 'a', '', 'otomotif'),
('2016-08-27 15:20:54', '290920142569.jpg', 'ABDUL ROKIM', '22091998', 'laki-laki', '028865', '082567', 'islam', '', 'jl.flamboyan kota jambi', 36363, 2147483647, 'smp 3 mj', '25', '25', 'sunarno', '22081976', 'islam', 'tani', 'o', 'jl.flamboyan kota jambi', 36363, 0, 'nama_ibu', '22081975', 'islam', 'urt', 'o', 'jl.flamboyan kota jambi', 36363, 2147483647, 'yanto', 'tani', '', 'a', 'a', '', 'otomotif');

-- --------------------------------------------------------

--
-- Table structure for table `penghargaan`
--

CREATE TABLE IF NOT EXISTS `penghargaan` (
  `id` int(23) NOT NULL AUTO_INCREMENT,
  `nama` varchar(23) NOT NULL,
  `tahun` varchar(23) NOT NULL,
  `penghargaan` varchar(23) NOT NULL,
  `cabang` varchar(23) NOT NULL,
  `no` int(23) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `penghargaan`
--

INSERT INTO `penghargaan` (`id`, `nama`, `tahun`, `penghargaan`, `cabang`, `no`) VALUES
(7, 'ariandi', '2010', 'juara 3', 'perakitan listrik', 1),
(8, 'reza akbar', '2011', 'juara 2', 'kontes yamaha', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `isi` text NOT NULL,
  `judul` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `isi`, `judul`) VALUES
(7, '<p>\r\n	KEPADA SELURUH SISWA SMK IX LURAH 2 KOTA JAMBI PADA TANGGAL 22 JUNI 2015 SAMPAI 15 JULI 2015 LIBUR SEKOLAH</p>\r\n', 'LIBUR SEMESTER');

-- --------------------------------------------------------

--
-- Table structure for table `produktif`
--

CREATE TABLE IF NOT EXISTS `produktif` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nip` varchar(40) NOT NULL,
  `nama` text NOT NULL,
  `pelajaran` text NOT NULL,
  `jabatan` text NOT NULL,
  `gelar` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `nama_file` text NOT NULL,
  `foto` text NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `produktif`
--

INSERT INTO `produktif` (`id`, `nip`, `nama`, `pelajaran`, `jabatan`, `gelar`, `alamat`, `nama_file`, `foto`, `keterangan`) VALUES
(3, 'Abd Hamin.jpg', '196409211989011003', 'Abdul hamin', 'otomotif', 'pengajar otomotif', 'S1', 'bandara', 'Abd Hamin.jpg', ''),
(4, 'Tedi.jpg', '', 'Tedi erlana', 'otomotif', 'pengajar otomotif', 'S1', 'mendalo darat', 'Tedi.jpg', ''),
(5, 'Hery2.jpg', '', 'Hery afandi', 'otomotif', 'pengajar otomotif', 'S1', 'kota jambi', 'Hery2.jpg', ''),
(6, 'Dewi Sartika.jpg', '', 'Dewi sartika', 'listrik', 'pengajar listrik', 'S1', 'kota jambi', 'Dewi Sartika.jpg', ''),
(7, 'administrator.jpg', '', 'Sarno', 'listrik', 'pengajar listrik', 'S1', 'kota jambi', 'administrator.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE IF NOT EXISTS `sejarah` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `isi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id`, `isi`) VALUES
(3, '<p>\r\n	masih dalam pengerjaan</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `staftu`
--

CREATE TABLE IF NOT EXISTS `staftu` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nip` varchar(40) NOT NULL,
  `nama` text NOT NULL,
  `pelajaran` text NOT NULL,
  `jabatan` text NOT NULL,
  `gelar` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `nama_file` text NOT NULL,
  `foto` text NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `staftu`
--

INSERT INTO `staftu` (`id`, `nip`, `nama`, `pelajaran`, `jabatan`, `gelar`, `alamat`, `nama_file`, `foto`, `keterangan`) VALUES
(5, '230920142552.jpg', '1', 'prihatin melanita', 'tu', 'kepala TU', 'D3', 'jl.telanai pura jambi', '230920142552.jpg', ''),
(6, '230920142552.jpg', '2', 'delwitis', 'bendahara', 'bendahara', 'D3', 'jl.telanai pura', '230920142552.jpg', ''),
(7, '240920142554.jpg', '3', 'M.ichsan', 'perlengkapan', 'staf TU', 'D3', 'telanai pura', '240920142554.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id_admin` int(23) NOT NULL AUTO_INCREMENT,
  `nm_admin` varchar(23) NOT NULL,
  `ps_admin` varchar(23) NOT NULL,
  `nama_admin` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nm_admin`, `ps_admin`, `nama_admin`) VALUES
(1, 'admin', 'admin', 'asep');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_confirmasi`
--

CREATE TABLE IF NOT EXISTS `tbl_confirmasi` (
  `id_confirm` int(23) NOT NULL AUTO_INCREMENT,
  `nik` varchar(20) NOT NULL,
  `konfirmasi` int(3) NOT NULL,
  PRIMARY KEY (`id_confirm`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_confirmasi`
--

INSERT INTO `tbl_confirmasi` (`id_confirm`, `nik`, `konfirmasi`) VALUES
(1, '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE IF NOT EXISTS `tbl_guru` (
  `nama_guru` varchar(26) NOT NULL,
  `nip` int(30) NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `status_pegawai` varchar(23) NOT NULL,
  `bidang_study` varchar(26) NOT NULL,
  `id_guru` int(23) NOT NULL AUTO_INCREMENT,
  `ttl` varchar(23) NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`nama_guru`, `nip`, `jenis_kelamin`, `status_pegawai`, `bidang_study`, `id_guru`, `ttl`) VALUES
('suparyani', 1, 'Perempuan', 'pns', 'matematika', 7, 'jambi 31/12/1963'),
('Abdul hamin, S.pd', 2, 'Laki - Lak', 'pns', 'teknik kendaraan ringan', 8, 'pelawan 21-09-1964'),
('siti roliyah S.PD', 3, 'Perempuan', 'pns', 'bahasa indonesia', 9, 'batang hari 01/07/1959'),
('desrianti S.pdi', 4, 'Perempuan', 'pns', 'agama islam', 10, 'padang 31/12/1956'),
('tedi erlana S.pd', 5, 'Laki - Laki', 'pns', 'teknik kendaraan ringan', 11, 'sari mulya 25/05/1985'),
('suparman S.pd', 6, 'Laki - Laki', 'pns', 'kimia', 12, 'purworejo 27/12/1963'),
('Ramli M.nur', 7, 'Laki - Laki', 'non.Pns', 'penjas', 13, 'mangun jayo 15/08/1963');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE IF NOT EXISTS `tbl_jurusan` (
  `id_jurusan` int(2) NOT NULL,
  `kode_jurusan` varchar(5) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`id_jurusan`, `kode_jurusan`, `nama_jurusan`) VALUES
(1, 'TKR01', 'Teknik Kendaraan Ringan'),
(2, 'TL01', 'Teknik listrik'),
(3, 'TI01', 'TEKNIK INFORMATIKA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kepsek`
--

CREATE TABLE IF NOT EXISTS `tbl_kepsek` (
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

CREATE TABLE IF NOT EXISTS `tbl_matapel` (
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

CREATE TABLE IF NOT EXISTS `tbl_matapelajaran` (
  `id_pel` int(23) NOT NULL AUTO_INCREMENT,
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
  `dkk_01` varchar(23) NOT NULL,
  `dkk_04` varchar(23) NOT NULL,
  `dkk_05` varchar(23) NOT NULL,
  `dkk_06` varchar(23) NOT NULL,
  `dkk_07` varchar(23) NOT NULL,
  `rangkaian_listrik` varchar(23) NOT NULL,
  `pengukuran_listrik` varchar(23) NOT NULL,
  `gambar_teknik_listrik` varchar(23) NOT NULL,
  `k3` varchar(23) NOT NULL,
  `dasar_elektronika` varchar(23) NOT NULL,
  `rt_listrik` varchar(23) NOT NULL,
  `ilbs` varchar(23) NOT NULL,
  `ilbb` varchar(23) NOT NULL,
  `pml` varchar(23) NOT NULL,
  `spe` varchar(23) NOT NULL,
  `ppdt` varchar(23) NOT NULL,
  `spem` varchar(23) NOT NULL,
  `spil` varchar(23) NOT NULL,
  `ppls` varchar(23) NOT NULL,
  `KKM` varchar(23) NOT NULL,
  `angka` varchar(23) NOT NULL,
  `huruf` varchar(23) NOT NULL,
  `jumlah_nilai` varchar(23) NOT NULL,
  `rata_rata` varchar(23) NOT NULL,
  `kelas` int(23) NOT NULL,
  PRIMARY KEY (`id_pel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `tbl_matapelajaran`
--

INSERT INTO `tbl_matapelajaran` (`id_pel`, `kode_jurusan`, `no_induk`, `smester`, `agama`, `kewarganegaraan`, `b_indonesia`, `penjas`, `seni_budaya`, `b_inggris`, `mtk`, `ipa`, `ips`, `fisika`, `kimia`, `KKPI`, `kewirausahaan`, `dkk_01`, `dkk_04`, `dkk_05`, `dkk_06`, `dkk_07`, `rangkaian_listrik`, `pengukuran_listrik`, `gambar_teknik_listrik`, `k3`, `dasar_elektronika`, `rt_listrik`, `ilbs`, `ilbb`, `pml`, `spe`, `ppdt`, `spem`, `spil`, `ppls`, `KKM`, `angka`, `huruf`, `jumlah_nilai`, `rata_rata`, `kelas`) VALUES
(24, 'TL01', 131411, 1, '70.00', '80.00', '80.00', '65.00', '80.00', '90.00', '80.00', '80.00', '95.00', '80.00', '80.00', '70.00', '80.00', '', '', '', '', '', '80.00', '65.00', '80.00', '80.00', '80.00', '90.00', '85.00', '75.00', '80.00', '65.00', '80.00', '65.00', '80.00', '65.00', '', '', '', '', '', 1),
(25, 'TKR01', 121212, 1, '90.00', '70.20', '80.00', '60.25', '80.00', '95.00', '80.00', '40.00', '80.00', '80.00', '20.00', '75.00', '80.00', '75.00', '50.00', '75.00', '80.00', '75.00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(26, 'TL01', 132229, 1, '80', '80', '75', '85', '', '70', '68', '', '70', '68', '70', '80', '', '', '', '', '', '', '80', '90', '70', '', '', '80', '80', '80', '', '', '', '', '', '', '', '', '', '', '', 3),
(27, 'TL01', 132230, 1, '87', '80', '78', '85', '', '75', '73', '', '78', '73', '78', '85', '', '', '', '', '', '', '89', '90', '85', '', '', '89', '85', '90', '', '', '', '', '', '', '', '', '', '', '', 3),
(28, 'TKR01', 152024, 1, '80', '85', '80', '87', '', '75', '75', '', '76', '78', '78', '80', '', '80', '80', '86', '90', '79', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(29, 'TKR01', 142348, 1, '80', '80', '75', '85', '', '75', '78', '', '75', '75', '76', '80', '80', '85', '80', '80', '85', '85', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2),
(30, 'TL01', 152070, 1, '80', '80', '80', '85', '', '75', '75', '', '78', '76', '78', '85', '80', '', '', '', '', '', '80', '85', '85', '', '', '87', '80', '85', '', '', '85', '', '', '', '', '', '', '', '', 1),
(31, 'TKR01', 152420, 1, '80', '80', '85', '85', '', '78', '80', '', '78', '75', '76', '85', '80', '85', '87', '89', '89', '86', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(32, 'TKR01', 152428, 1, '85', '85', '70', '85', '-', '75', '78', '-', '76', '78', '79', '85', '-', '85', '89', '80', '90', '90', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(33, 'TKR01', 142368, 1, '80', '87', '87', '88', '-', '78', '78', '80', '78', '75', '74', '85', '76', '80', '87', '87', '87', '89', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE IF NOT EXISTS `tbl_nilai` (
  `id_nilai` int(3) NOT NULL,
  `id_matapel` int(2) NOT NULL,
  `nik` int(23) NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilai`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE IF NOT EXISTS `tbl_siswa` (
  `nik` int(23) NOT NULL,
  `ttl` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(23) NOT NULL,
  `agama` varchar(23) NOT NULL,
  `nama_siswa` varchar(26) NOT NULL,
  `kode_walikelas` varchar(23) NOT NULL,
  `smester` varchar(10) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `kode_jurusan` varchar(10) DEFAULT NULL,
  `tahun_angkatan` varchar(12) NOT NULL,
  `konfirmasi` int(3) NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nik`, `ttl`, `jenis_kelamin`, `agama`, `nama_siswa`, `kode_walikelas`, `smester`, `kelas`, `kode_jurusan`, `tahun_angkatan`, `konfirmasi`) VALUES
(87789, 'ambi8802/20', 'Laki - Laki', 'islam', 'hardi', 'tkr1', '1', '1', 'TKR01', '2014-2015', 0),
(122439, 'jambi 09/05/1997', 'Laki - Laki', 'islam', 'aprizal', 'TKR8', '1', '3', 'TKR01', '2012-2013', 0),
(132135, 'jambi 07/12/1997', 'Laki - Laki', 'islam', 'agustiawan', 'TKR7', '1', '3', 'TKR01', '2012-2013', 0),
(132146, 'jambi 14/09/1997', 'Laki - Laki', 'islam', 'adiyanto', 'TKR6', '1', '3', 'TKR01', '2012-2013', 0),
(132147, 'pekanbaru 31/04/1997', 'Laki - Laki', 'islam', 'afriandi', 'TKR6', '1', '3', 'TKR01', '2012-2013', 0),
(132173, 'pekanbaru 21/08/1997', 'Laki - Laki', 'islam', 'aang sanjaya', 'TKR7', '1', '3', 'TKR01', '2012-2013', 0),
(132203, 'jambi 19/11/1997', 'Laki - Laki', 'islam', 'apriyono', 'TKR8', '1', '3', 'TKR01', '2012-2013', 0),
(132220, 'palembang 27/10/1997', 'Laki - Laki', 'islam', 'apriandi harahap', 'TKR8', '1', '3', 'TKR01', '2012-2013', 0),
(132229, 'jambi 27/02/1997', 'Laki - Laki', 'islam', 'agung setiawan', 'TL03', '1', '3', 'TL01', '2012-2013', 1),
(132230, 'jambi 11/08/1997', 'Laki - Laki', 'islam', 'agustiyan', 'TL03', '1', '3', 'TL01', '2012-2013', 1),
(132231, 'palembang 29/01/1997', 'Laki - Laki', 'islam', 'aldi saputra', 'TL03', '1', '3', 'TL01', '2012-2013', 0),
(142307, 'jambi 18/09/1997', 'Laki - Laki', 'islam', 'albani akbar', 'TKR6', '1', '3', 'TKR01', '2012-2013', 0),
(142324, 'jambi 31/01/1998', 'Laki - Laki', 'islam', 'abdul asan asari', 'TKR3', '1', '2', 'TKR01', '2013-2014', 0),
(142325, 'jambi 01/12/1998', 'Laki - Laki', 'islam', 'adi saputra', 'TKR3', '1', '2', 'TKR01', '2013-2014', 0),
(142348, 'jambi 28/11/1998', 'Laki - Laki', 'islam', 'alpin romadoni', 'TKR4', '1', '2', 'TKR01', '2013-2014', 1),
(142355, 'jambi 23/12/1998', 'Laki - Laki', 'islam', 'fadli', 'TKR4', '1', '2', 'TKR01', '2013-2014', 0),
(142368, 'lampung 07/09/1998', 'Laki - Laki', 'islam', 'achmad hidayat', 'TKR5', '1', '2', 'TKR01', '2013-2014', 1),
(142369, 'jambi 09/12/1998', 'Laki - Laki', 'islam', 'achmad zulfikar', 'TKR5', '1', '2', 'TKR01', '2013-2014', 0),
(142392, 'palangkaraya 22/02/1', 'Laki - Laki', 'islam', 'bima ramadhan', 'TL02', '1', '2', 'TL01', '2013-2014', 0),
(142404, 'solo 26/03/1998', 'Laki - Laki', 'islam', 'andi cahyo', 'TL02', '1', '2', 'TL01', '2013-2014', 0),
(142405, 'sragen 17/04/1998', 'Laki - Laki', 'islam', 'abdul rokim', 'TL02', '1', '2', 'TL01', '2013-2014', 0),
(142410, 'jambi 27/09/1998', 'Laki - Laki', 'islam', 'ahmad sadi prasetia', 'TKR4', '1', '2', 'TKR01', '2013-2014', 0),
(142426, 'jambi 11/07/1998', 'Laki - Laki', 'islam', 'agus tiawan', 'TKR3', '1', '2', 'TKR01', '2013-2014', 0),
(152024, 'jember 30/12/1998', 'Laki - Laki', 'islam', 'ade wijaya', 'tkr1', '1', '1', 'TKR01', '2014-2015', 1),
(152063, 'palembang 22/09/1999', 'Laki - Laki', 'islam', 'apri ananda', 'tkr1', '1', '1', 'TKR01', '2014-2015', 0),
(152070, 'jambi 31/02/1999', 'Laki - Laki', 'islam', 'm.ansori', 'TL01', '1', '1', 'TL01', '2014-2015', 1),
(152072, 'jambi 01/09/1999', 'Perempuan', 'islam', 'fitri handayani', 'TL01', '1', '1', 'TL01', '2014-2015', 0),
(152420, 'kuala tungkal 24/04/', 'Laki - Laki', 'islam', 'arif setia nugraha', 'TKR2', '2', '1', 'TKR01', '2013-2014', 1),
(152421, 'solo 14/08/1997', 'Laki - Laki', 'islam', 'ahmad riyon pratama', 'TKR7', '1', '3', 'TKR01', '2012-2013', 0),
(152428, 'jambi 21/02/1999', 'Laki - Laki', 'islam', 'abdul qadir', 'TKR2', '1', '1', 'TKR01', '2014-2015', 1),
(152440, '', 'Laki - Laki', 'islam', 'ahmad riyon pratama', 'TKR7', '1', '1', 'TKR01', '2012-2013', 0),
(152452, 'jambi 15/07/1999', 'Laki - Laki', 'islam', 'agus riansyah', 'tkr1', '1', '1', 'TKR01', '2014-2015', 0),
(152453, 'jambi 31/02/1999', 'Laki - Laki', 'islam', 'andi saputra', 'tkr1', '1', '1', 'TKR01', '2014-2015', 0),
(152454, 'jambi 14/06/1999', 'Laki - Laki', 'islam', 'doni', 'tkr1', '1', '1', 'TKR01', '2014-2015', 0),
(152469, 'palembang 22/01/1999', 'Laki - Laki', 'islam', 'ardiansyah', 'TKR2', '1', '1', 'TKR01', '2014-2015', 0),
(152471, 'jambi 16/06/1999', 'Laki - Laki', 'islam', 'aris candra', 'TKR2', '1', '1', 'TKR01', '2014-2015', 0),
(152487, 'jambi 31/12/1999', 'Laki - Laki', 'islam', 'ahmad hendri', 'TL01', '1', '1', 'TL01', '2014-2015', 0),
(152488, 'jambi 20/10/1999', 'Laki - Laki', 'islam', 'jimmy rianto', 'TL01', '1', '1', 'TL01', '2014-2015', 0),
(152494, 'jambi 10/11/1999', 'Laki - Laki', 'islam', 'm.fathir syauqil akbar', 'TL01', '1', '1', 'TL01', '2014-2015', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_walikelas`
--

CREATE TABLE IF NOT EXISTS `tbl_walikelas` (
  `kode_walikelas` varchar(23) NOT NULL,
  `nip` int(30) NOT NULL,
  `nama_walikelas` varchar(26) NOT NULL,
  `nama_login` varchar(23) NOT NULL,
  `password_login` varchar(23) NOT NULL,
  `kode_jurusan` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_walikelas`
--

INSERT INTO `tbl_walikelas` (`kode_walikelas`, `nip`, `nama_walikelas`, `nama_login`, `password_login`, `kode_jurusan`) VALUES
('tkr1', 2, 'isniawati', 'isniawati', 'isn', 'TKR01'),
('TL01', 1, 'desrianti', 'desrianti', 'des', 'TL01'),
('TKR2', 3, 'anis yuana fitria sari', 'anisyuanafitriasari', 'ans', 'TKR01'),
('TL02', 4, 'sarno', 'sarno', 'sar', 'TL01'),
('TKR3', 5, 'yulianita', 'yulianita', 'yul', 'TKR01'),
('TKR4', 6, 'marlansyah', 'marlansyah', 'mrl', 'TKR01'),
('TKR5', 7, 'nopel citra dewi', 'nopelcitradewi', 'npl', 'TKR01'),
('TL03', 8, 'dewi sartika', 'dewisartika', 'dew', 'TL01'),
('TKR6', 9, 'tedi erlana', 'tedierlana', 'ted', 'TKR01'),
('TKR7', 10, 'indah priyani', 'indahpriyani', 'and', 'TKR01'),
('TKR8', 11, 'siti roliyah', 'sitiroliyah', 'sit', 'TKR01');

-- --------------------------------------------------------

--
-- Table structure for table `te`
--

CREATE TABLE IF NOT EXISTS `te` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nama_file` text NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `te`
--

INSERT INTO `te` (`id`, `nama_file`, `deskripsi`) VALUES
(2, '290920142560.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tkj`
--

CREATE TABLE IF NOT EXISTS `tkj` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nama_file` text NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tkj`
--

INSERT INTO `tkj` (`id`, `nama_file`, `deskripsi`) VALUES
(8, '230920142552.jpg', 'belajar di ruangan');

-- --------------------------------------------------------

--
-- Table structure for table `tkr`
--

CREATE TABLE IF NOT EXISTS `tkr` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nama_file` text NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tkr`
--

INSERT INTO `tkr` (`id`, `nama_file`, `deskripsi`) VALUES
(5, '240920142554.jpg', 'lengkap');

-- --------------------------------------------------------

--
-- Table structure for table `tsm`
--

CREATE TABLE IF NOT EXISTS `tsm` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nama_file` text NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tsm`
--

INSERT INTO `tsm` (`id`, `nama_file`, `deskripsi`) VALUES
(2, '290920142562.jpg', 'lengkap');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE IF NOT EXISTS `visimisi` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `isi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id`, `isi`) VALUES
(7, '<p>\r\n	<span style="font-size:14px;"><strong><u>VISI DAN MISI SMK IX LURAH 2 KOTA JAMBI</u></strong></span></p>\r\n<p>\r\n	<em><u><strong><span style="font-size:12px;">VISI</span></strong></u></em></p>\r\n<p>\r\n	Unggul dalam penyiapan SDM sebagai asset pembangunan</p>\r\n<p>\r\n	yang produktif, profesional, berbudi pekerti luhur yang berakar</p>\r\n<p>\r\n	pada norma dan nilai budaya bangsa indonesia yang mampu</p>\r\n<p>\r\n	bersaing secara sehat di Era Global.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<span style="font-size:12px;"><em><u><strong>MISI</strong></u></em></span></p>\r\n<p>\r\n	Mengembangkan proses pembelajaran bidang keahlian teknik</p>\r\n<p>\r\n	otomotif, teknik listrik, teknik sepeda motor dan teknik komputer</p>\r\n<p>\r\n	jaringan yang inovatif, kreatif, fleksibel dan berwawasan global</p>\r\n<p>\r\n	mengintegrasikan proses pembelajaran bidang keahlian teknik</p>\r\n<p>\r\n	otomotif, teknik listrik, teknik sepeda motor dan teknik komputer</p>\r\n<p>\r\n	jaringan yang berwawasan mutu dan keunggulan, profesional</p>\r\n<p>\r\n	dan berorientasi masa depan mewujudkan layanan prima</p>\r\n<p>\r\n	dalam upaya pemberdayaan sekolah dengan masyarakat dan</p>\r\n<p>\r\n	instansi terkait mengembangkan iklim belajar yang berakar</p>\r\n<p>\r\n	pada norma dan nilai budaya bangsa memiliki jiwa kewirausahaan</p>\r\n<p>\r\n	yang tangguh.</p>\r\n');
