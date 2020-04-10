-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 10, 2020 at 08:22 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_simpeg`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_kenaikanpangkat`
--

CREATE TABLE `daftar_kenaikanpangkat` (
  `id_data` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nip` varchar(75) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `spangkat` varchar(100) NOT NULL,
  `stmt` varchar(100) NOT NULL,
  `kpangkat` varchar(100) NOT NULL,
  `ktmt` varchar(100) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `daftar_kenaikanpangkat`
--

INSERT INTO `daftar_kenaikanpangkat` (`id_data`, `nama_lengkap`, `nip`, `jenis_kelamin`, `spangkat`, `stmt`, `kpangkat`, `ktmt`, `iat`, `uat`) VALUES
('11037568', 'La Ode Musnali', '197704232006041006', 'pria', 'III.a', '01/04/2018', 'III.a', '01/04/2018', '2020-01-10 00:00:00', '2020-01-10 12:51:17'),
('17439501', 'pegawai pegawai pegawai', '198206012010012013', 'pria', 'Pembina - IV a', '10/03/2020', 'Penata rias - III c', '02/04/2020', '2020-03-31 16:54:31', '2020-03-31 10:04:57'),
('23182460', 'pegawai pegawai pegawai', '198206012010012013', 'pria', 'Pembina Utama Madya - IV d', '10/03/2020', 'Juru Muda - I a', '07/03/2020', '2020-03-29 19:43:02', '2020-03-31 09:59:22'),
('64607195', 'MUHAMMAD YUNUS YUSUF', '196810291998031006', 'pria', 'Juru Muda Tingkat I - I b', '03/04/2020', 'as - sa sa', '04/04/2020', '2020-03-29 19:48:23', '2020-03-29 11:48:42'),
('66120598', 'budi', '198601122011012005', 'pria', 'Juru Muda - I a', '02/24/2020', 'Pembina Utama - IV e', '27/02/2020', '2020-03-26 00:00:00', '2020-03-31 09:55:21'),
('67821693', 'HARIYONO', '197904232007011007', 'pria', 'II.a', '01/04/2008', 'II.b', '01/04/2011', '2018-12-27 00:00:00', '2018-08-01 14:07:01'),
('71248630', 'La Ode Musnali', '197704232006041006', 'pria', 'III.a', '01/04/2018', 'III.a', '01/04/2018', '2020-01-11 00:00:00', '2020-01-10 22:08:00'),
('77810642', 'pegawai pegawai pegawai', '198206012010012013', 'pria', 'Penata Tingkat I - III d', '10/03/2020', 'Pembina Utama Muda - IV c', '06/11/2020', '2020-03-31 18:03:51', '2020-03-31 10:40:20'),
('94760821', 'FITRIANI BIKU', '198406192014062001', 'wanita', 'III.a', '01/06/2014', 'Juru Muda', '01/10/2017', '2018-11-26 00:00:00', '2020-03-26 13:42:51'),
('97983620', 'NURSIDDIQ', '196407301997121002', 'pria', 'Juru Tingkat - I d', '23/12/2019', 'Juru - I c', '02/04/2020', '2020-03-29 19:45:43', '2020-03-29 11:45:43');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_meninggal`
--

CREATE TABLE `daftar_meninggal` (
  `id_data` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nip` varchar(75) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `jabatan` varchar(256) NOT NULL,
  `tgl_wafat` varchar(100) NOT NULL,
  `tgl_akta` varchar(100) NOT NULL,
  `no_akta` varchar(100) NOT NULL,
  `penandatangan` varchar(100) NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `files` varchar(255) DEFAULT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_meninggal`
--

INSERT INTO `daftar_meninggal` (`id_data`, `nama_lengkap`, `nip`, `jenis_kelamin`, `pangkat`, `jabatan`, `tgl_wafat`, `tgl_akta`, `no_akta`, `penandatangan`, `keterangan`, `files`, `iat`, `uat`) VALUES
('84132579', 'pegawai', '198206012010012013', 'pria', 'Juru Muda Tingkat I - I b', 'PENGADMINISTRASI KESEHATAN', '01/03/2020', '01/04/2020', 'akta', 'ttd', 'sehat', 'uud19452.pdf', '2020-03-28 14:40:56', '0000-00-00 00:00:00'),
('95201789', 'pegawai pegawai pegawai', '198206012010012013', 'pria', 'Pembina Utama Madya - IV d', 'PENGADMINISTRASI KESEHATAN', '29/02/2020', '06/03/2020', 'aktaku', 'ttd', 'sehat', 'uud19455.pdf', '2020-03-29 19:52:00', '2020-03-31 08:57:41');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_mutasi`
--

CREATE TABLE `daftar_mutasi` (
  `id_data` varchar(128) NOT NULL,
  `nip` varchar(64) NOT NULL,
  `nama_lengkap` varchar(64) NOT NULL,
  `jenis_kelamin` varchar(32) NOT NULL,
  `nama_eselon` varchar(64) NOT NULL,
  `nama_jabatan` varchar(64) NOT NULL,
  `tmt_sk` varchar(32) NOT NULL,
  `no_sk` varchar(128) NOT NULL,
  `tanggal_sk` varchar(32) NOT NULL,
  `penandatangan` varchar(128) NOT NULL,
  `tujuan_mutasi` varchar(128) NOT NULL,
  `lampiran` varchar(128) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pensiun`
--

CREATE TABLE `daftar_pensiun` (
  `id_data` varchar(128) NOT NULL,
  `nip` varchar(64) NOT NULL,
  `nama_lengkap` varchar(64) NOT NULL,
  `jenis_kelamin` varchar(32) NOT NULL,
  `nama_eselon` varchar(64) NOT NULL,
  `nama_jabatan` varchar(64) NOT NULL,
  `tmt_sk` varchar(32) NOT NULL,
  `no_sk` varchar(128) NOT NULL,
  `tanggal_sk` varchar(32) NOT NULL,
  `penandatangan` varchar(128) NOT NULL,
  `m_p` varchar(128) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `data_agama`
--

CREATE TABLE `data_agama` (
  `id_agama` varchar(100) NOT NULL,
  `nama_agama` varchar(30) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_agama`
--

INSERT INTO `data_agama` (`id_agama`, `nama_agama`, `iat`, `uat`) VALUES
('13608519', 'Buddha', '2017-08-26 00:00:00', '2020-03-27 05:17:39'),
('15240816', 'Islam', '2017-08-31 00:00:00', '2020-03-04 09:44:07'),
('38342576', 'Kristen Protestan', '2017-08-26 00:00:00', '2017-08-29 04:30:27'),
('67280436', 'Hindu / Vedantisme', '2017-12-10 00:00:00', '2020-03-27 09:33:22'),
('83590421', 'Catholic', '2017-08-26 00:00:00', '2020-03-18 08:33:55');

-- --------------------------------------------------------

--
-- Table structure for table `data_alamat`
--

CREATE TABLE `data_alamat` (
  `nip` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `rt` varchar(10) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kab` varchar(50) NOT NULL,
  `kec` varchar(50) NOT NULL,
  `kel` varchar(50) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `telepon` varchar(10) NOT NULL,
  `hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_alamat`
--

INSERT INTO `data_alamat` (`nip`, `alamat`, `rt`, `rw`, `provinsi`, `kab`, `kec`, `kel`, `kode_pos`, `telepon`, `hp`) VALUES
('196703241993032000', 'd', '1', '1', 'Sulawesi Tenggara', 'Wakatobi', 'Kaledupa', 'Ambeua', '', '', ''),
('198206012010012013', 'makassar', '2', '2', 'Sulawesi Tenggara', 'Wakatobi', 'Kaledupa', 'Balasuna', '123', '0852987616', '085298761676');

-- --------------------------------------------------------

--
-- Table structure for table `data_anak`
--

CREATE TABLE `data_anak` (
  `id_anak` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `ttl` varchar(75) NOT NULL,
  `no_akta` varchar(128) NOT NULL,
  `tanggal_akta` varchar(128) NOT NULL,
  `pekerjaan` varchar(10) NOT NULL,
  `meninggal` enum('0','1') NOT NULL,
  `sub_instansi` varchar(255) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_anak`
--

INSERT INTO `data_anak` (`id_anak`, `nip`, `nama_lengkap`, `status`, `nama`, `ttl`, `no_akta`, `tanggal_akta`, `pekerjaan`, `meninggal`, `sub_instansi`, `admin`, `iat`, `uat`) VALUES
(2242, '198008022010012021', 'MISRAWATI', '1', 'SITI KHOIRIYAH MIYOTO', 'KENDARI, 08/03/2009', '', '', '-', '0', 'DINAS KESEHATAN', 'DINAS KESEHATAN', '2018-09-19 00:00:00', '2018-09-19 04:59:47'),
(3093, '198008022010012021', 'MISRAWATI', '1', 'kamal miyoto', 'kendari 28/09/2012', '', '', '-', '0', 'DINAS KESEHATAN', 'DINAS KESEHATAN', '2019-12-16 00:00:00', '2019-12-16 09:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `data_dokumen`
--

CREATE TABLE `data_dokumen` (
  `id` int(29) NOT NULL,
  `jenis_dokumen` varchar(100) NOT NULL,
  `last_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_dokumen`
--

INSERT INTO `data_dokumen` (`id`, `jenis_dokumen`, `last_update`) VALUES
(51, 'sertifikat', '0000-00-00 00:00:00'),
(53, 'laporan', '0000-00-00 00:00:00'),
(54, 'surat izin', '0000-00-00 00:00:00'),
(55, 'riwayat hidup', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `data_dokumen_`
--

CREATE TABLE `data_dokumen_` (
  `id` int(29) NOT NULL,
  `jenis_dokumen` varchar(100) NOT NULL,
  `last_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_dokumen_`
--

INSERT INTO `data_dokumen_` (`id`, `jenis_dokumen`, `last_update`) VALUES
(1, 'sertifikat', '2019-05-06 11:42:32'),
(2, 'ijazah', '2019-05-06 11:42:32');

-- --------------------------------------------------------

--
-- Table structure for table `data_eselon`
--

CREATE TABLE `data_eselon` (
  `id_eselon` int(50) NOT NULL,
  `nama_eselon` varchar(30) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_eselon`
--

INSERT INTO `data_eselon` (`id_eselon`, `nama_eselon`, `iat`, `uat`) VALUES
(1, 'II.a', '2017-09-17 00:00:00', '2020-03-30 00:33:38'),
(2, 'II.b', '2017-09-17 00:00:00', '2018-01-04 07:18:20'),
(3, 'III.a', '2017-09-29 00:00:00', '2018-01-04 07:18:22'),
(4, 'III.b', '2017-09-29 00:00:00', '2018-01-04 07:18:27'),
(5, 'IV.a', '2017-09-29 00:00:00', '2018-01-04 07:18:32'),
(6, 'IV.b', '2017-09-29 00:00:00', '2020-03-30 00:33:32'),
(7, 'Non-Eselon', '2017-10-05 00:00:00', '2017-12-10 13:56:31');

-- --------------------------------------------------------

--
-- Table structure for table `data_golongan`
--

CREATE TABLE `data_golongan` (
  `id_golongan` int(11) NOT NULL,
  `nama_pangkat` varchar(128) NOT NULL,
  `nama_golongan` varchar(50) NOT NULL,
  `nama_ruang` varchar(30) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_golongan`
--

INSERT INTO `data_golongan` (`id_golongan`, `nama_pangkat`, `nama_golongan`, `nama_ruang`, `iat`, `uat`) VALUES
(1, 'Juru Muda', 'I', 'a', '2017-09-29 00:00:00', '2020-03-11 10:14:46'),
(2, 'Juru Muda Tingkat I', 'I', 'b', '2017-09-28 00:00:00', '2018-01-04 05:49:12'),
(3, 'Juru', 'I', 'c', '2017-12-09 00:00:00', '2018-01-04 05:49:22'),
(4, 'Juru Tingkat', 'I', 'd', '2017-12-09 00:00:00', '2018-08-16 01:24:11'),
(5, 'Pengatur Muda', 'II', 'a', '2017-12-09 00:00:00', '2018-01-04 05:49:45'),
(6, 'Pengatur Muda Tingkat I', 'II', 'b', '2017-12-09 00:00:00', '2018-01-04 05:49:57'),
(95896708, 'Pengatur', 'II', 'c', '2017-12-09 00:00:00', '2018-01-04 05:50:09'),
(95896709, 'Pengatur Tingkat I', 'II', 'd', '2017-12-09 00:00:00', '2018-01-04 05:50:18'),
(95896710, 'Penata Muda', 'III', 'a', '2017-12-09 00:00:00', '2018-01-04 05:50:28'),
(95896711, 'Penata Muda Tingkat I', 'III', 'b', '2017-12-09 00:00:00', '2018-01-04 05:50:37'),
(95896712, 'Penata', 'III', 'c', '2017-12-09 00:00:00', '2020-04-10 07:19:45'),
(95896713, 'Penata Tingkat I', 'III', 'd', '2017-12-09 00:00:00', '2018-01-04 05:50:56'),
(95896714, 'Pembina', 'IV', 'a', '2017-12-09 00:00:00', '2018-01-04 05:51:07'),
(95896715, 'Pembina Tingkat I', 'IV', 'b', '2017-12-09 00:00:00', '2018-01-04 05:51:21'),
(95896716, 'Pembina Utama Muda', 'IV', 'c', '2017-12-09 00:00:00', '2018-01-04 05:51:30'),
(95896717, 'Pembina Utama Madya', 'IV', 'd', '2017-12-09 00:00:00', '2018-01-04 05:52:05'),
(95896718, 'Pembina Utama', 'IV', 'e', '2017-12-09 00:00:00', '2018-01-04 05:51:55');

-- --------------------------------------------------------

--
-- Table structure for table `data_honorer`
--

CREATE TABLE `data_honorer` (
  `id` int(25) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` varchar(50) DEFAULT NULL,
  `alamat` text,
  `jenis_kelamin` enum('laki-laki','perempuan') DEFAULT NULL,
  `pendidikan_trakhir` varchar(50) DEFAULT NULL,
  `nomor_ijazah` varchar(50) DEFAULT NULL,
  `tanggal_ijazah` varchar(50) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `no_sk_honorer` text,
  `tmt_honorer` varchar(255) DEFAULT NULL,
  `tanggal_sk_honorer` varchar(50) DEFAULT NULL,
  `jabatan_honorer` varchar(100) DEFAULT NULL,
  `kursus_pelatihan` text,
  `status` enum('aktif','nonaktif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_honorer`
--

INSERT INTO `data_honorer` (`id`, `nama`, `nip`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `jenis_kelamin`, `pendidikan_trakhir`, `nomor_ijazah`, `tanggal_ijazah`, `jurusan`, `no_sk_honorer`, `tmt_honorer`, `tanggal_sk_honorer`, `jabatan_honorer`, `kursus_pelatihan`, `status`) VALUES
(51, 'MUS\'IDA', '7407014505910003', 'PONGO', '05/05/1991', 'LESA\'A II', 'perempuan', 's1', 'CE134680/12017101743', '20/01/2017', 'PENDIDIKAN', '0', '2011', '05/01/2011', 'Tenaga Administrasi', '0', 'aktif'),
(54, 'usmia', '7407035111830001', 'lamanggau', '11/11/1983', 'dusun dunia baru desa lamanggau,kec.tomia,kab.wakatobi', 'perempuan', 'S1/D-IV', '25601/J 29/1/S1/2007', '30/08/2007', 'pendidikan ilmu pengetahuan sosial', '355', '2009', '15/9/2009', 'guru', '-', 'aktif'),
(55, 'Iman Sakti Sunarya', '7407081808800001', 'Sowa', '18/10/1988', 'OLLO-OLLO', 'laki-laki', 'SMA', '20 PC 0600024', '24/07/2007', 'IPA', '0', '2018', '16/07/2018', 'Tenaga Administrasi', '0', 'aktif'),
(56, 'SUPARMANiiiiaaaakkk', '7407042601850001', 'JAYA MAKMUR', '26/01/1985', 'DUSUN WAKARUMENDE II, DESA KAMPO-KAMPO', 'laki-laki', 'SMA', '034/STRATA SATU/S1/2010', '29/09/2010', 'SISTEM INFORMASI', '0003333', '2011', '01/02/2011', 'GURU/OPERATOR SEKOLAH', 'LPM (UJI KOMPETENSI GURU)', 'aktif'),
(58, 'RUSTINA, S.Pd', '7407024602940002', 'AMBEUA', '06/02/1994', 'DUSUN LAKANTORE DESA LIFUTO KECAMATAN KALEDUPA', 'perempuan', 's1', '104/02.03.1/UMB/S/PGSD/2017', '19/04/2017', 'PENDIDIKAN GURU SEKOLAH DASAR', '421.2/VII/10/2017', '2017', '10/07/2017', 'GURU KELAS', '-', 'aktif'),
(59, 'IKO ARDIANTO, S. Pd', '7407020704920001', 'Ambeua', '07/04/1992', 'DUSUN KOLLO OLLO DESA KALIMAS KECAMATAN KALEDUPA', 'laki-laki', 's1', '188/02.03.1/UMB/S/PGSD/2018', '26/03/2016', 'PENDIDIKAN GURU SEKOLAH DASAR', '421.2/29/IX/2016', '2019', '29/09/2016', 'GURU KELAS', '-', 'aktif'),
(70, 'Himawan Sandhi', '0000000000000000', 'Makassar', '23/03/2020', 'makassar', 'laki-laki', 'S1/D-IV', '0972/1122', '23/03/2020', 'teknik informatika', '123', '2011', '23/03/2020', 'Tenaga Administrasi', '1', 'aktif'),
(72, 'jokowi', '9999999999999999', 'Parepare', '23/03/2020', 'ii', 'perempuan', 'SMP', 'rrr', '23/03/2020', 'rrr', '0003333', '2016', '23/03/2020', 'GURU/OPERATOR SEKOLAH', 'as', 'aktif'),
(73, 'ADI SAPUTRA', '1928748391010394', 'Palu', '29/03/2020', 'sad', 'perempuan', 'D-I', 'adsad', '29/03/2020', 'asd', 'asd', 'ads', '29/03/2020', 'GURU/OPERATOR SEKOLAH', 'asd', 'nonaktif');

-- --------------------------------------------------------

--
-- Table structure for table `data_honorer_`
--

CREATE TABLE `data_honorer_` (
  `nip` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gelar_depan` varchar(20) NOT NULL,
  `gelar_belakang` varchar(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `golongan_darah` varchar(3) NOT NULL,
  `rhesus` varchar(10) NOT NULL,
  `status_pernikahan` varchar(15) NOT NULL,
  `jenjang_pendidikan` varchar(10) NOT NULL,
  `status_kepegawaian` varchar(20) NOT NULL,
  `tmt_honorer` varchar(100) NOT NULL,
  `tanggal_sk_honorer` varchar(100) NOT NULL,
  `no_sk_honorer` varchar(100) NOT NULL,
  `satuan_kerja` varchar(30) NOT NULL,
  `unit_kerja` varchar(100) NOT NULL,
  `subid_subag` varchar(128) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_honorer_`
--

INSERT INTO `data_honorer_` (`nip`, `nama_lengkap`, `email`, `password`, `gelar_depan`, `gelar_belakang`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `golongan_darah`, `rhesus`, `status_pernikahan`, `jenjang_pendidikan`, `status_kepegawaian`, `tmt_honorer`, `tanggal_sk_honorer`, `no_sk_honorer`, `satuan_kerja`, `unit_kerja`, `subid_subag`, `gambar`, `iat`, `uat`) VALUES
('1234567891232143', 'arhen', 'itsme.arhen@gmail.com', '$2y$10$A361s4uIzV4dAl1/Ub8Mn.GP3of2tVEdCXbA065o.nXk6uU6rfWN2', '', 'ST', 'Ambon', '10/12/2017', 'pria', 'Islam', 'O', 'Tidak Tahu', 'belum_menikah', 'S1', 'honorer', '10/09/2017', '10/19/2017', '324354786543245', 'Dinas Pendidikan', 'SMA 17 Makassar', 'Keseiswaan', '', '2017-10-24 00:00:00', '2019-05-06 03:45:02');

-- --------------------------------------------------------

--
-- Table structure for table `data_informasi`
--

CREATE TABLE `data_informasi` (
  `id_informasi` varchar(100) NOT NULL,
  `ditujukan` varchar(64) NOT NULL,
  `isi` text NOT NULL,
  `files` varchar(255) DEFAULT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama_lengkap` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_informasi`
--

INSERT INTO `data_informasi` (`id_informasi`, `ditujukan`, `isi`, `files`, `iat`, `uat`, `nama_lengkap`) VALUES
('13254986', 'UMUM', 'PENGUMUMAN', 'PENGUMUMAN_PENETAPAN_HASIL_SELEKSI_ADMINISTRASI.pdf', '2019-09-07 00:50:13', '2019-09-06 16:50:13', 'ELYWATIN'),
('99136804', 'SEMUA', 'PENGUMUMAN PERPANJANGAN WAKTU PENDAFTARAN SELEKSI JPT SEKDA KAB.WAKATOBI', 'Pengumuman_Perpanjangan_Masa_Pendaftaran.pdf', '2019-07-26 00:46:55', '2020-03-21 12:06:33', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `data_jabatan`
--

CREATE TABLE `data_jabatan` (
  `id_jabatan` varchar(50) NOT NULL,
  `jenis_jabatan` varchar(256) NOT NULL,
  `nama_jabatan` varchar(256) NOT NULL,
  `eselon` varchar(120) NOT NULL,
  `iat` date NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_jabatan`
--

INSERT INTO `data_jabatan` (`id_jabatan`, `jenis_jabatan`, `nama_jabatan`, `eselon`, `iat`, `uat`) VALUES
('10124358', 'Fungsional Umum', 'Pengolah Data Anggaran Rutin', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('10152937', 'Fungsional Umum', 'PENGADMINISTRASI KESEHATAN', 'Non-Eselon', '2019-12-30', '2019-12-30 01:56:10'),
('10158936', 'Fungsional Umum', 'PENGADMINISTRASI DATA KEPEGAWAIAN', 'Non-Eselon', '2019-09-04', '2019-09-04 07:05:32'),
('10265379', 'Fungsional Tertentu', 'Perawat Gigi Pelaksana', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('10381756', 'Fungsional Tertentu', 'PRANATA LABORATORIUM KESEHATAN PELAKSANA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('10853742', 'Fungsional Umum', 'CALON GURU', 'Non-Eselon', '2019-09-13', '2019-09-13 02:24:16'),
('10854691', 'Fungsional Umum', 'ANALIS PENATAAN KAWASAN', 'Non-Eselon', '2019-08-22', '2019-08-22 07:23:26'),
('11062547', 'Struktural', 'Kepala Satuan', 'II.b', '2018-01-02', '2019-02-01 03:52:19'),
('11239704', 'Fungsional Tertentu', 'DOKTER MADYA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('11796452', 'Fungsional Umum', 'Penyelenggara Kerumah Tanggaan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('12106358', 'Fungsional Umum', 'Analis Pemerintah Daerah', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('12410385', 'Fungsional Tertentu', 'GURU MUDA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('12546319', 'Fungsional Umum', 'Penyusun Bahan Pembahasan dan Rancangan Produk Huk', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('12637158', 'Fungsional Tertentu', 'EPIDEMIOLOG KESEHATAN  PELAKSANA LANJUTAN', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('12640751', 'Fungsional Tertentu', 'PENGAWAS SEKOLAH MUDA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('12730869', 'Fungsional Tertentu', 'POLISI PAMONG PRAJA', 'Non-Eselon', '2019-10-21', '2019-10-21 00:54:16'),
('12985374', 'Fungsional Umum', 'Parmutamu', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('13084219', 'Fungsional Umum', 'ANALIS DATA DAN INFORMASI', 'Non-Eselon', '2019-08-22', '2019-08-22 01:39:18'),
('13246507', 'Struktural', 'Inspektur Pembantu', 'III.a', '2018-01-02', '2019-02-01 03:52:06'),
('13427596', 'Fungsional Tertentu', 'ASISTEN APOTEKER PELAKSANA PEMULA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('13659078', 'Fungsional Tertentu', 'Polisi Kehutanan Pelaksana Lanjutan', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('13729154', 'Struktural', 'Kepala UPTD', 'IV.a', '2018-01-02', '2019-02-01 03:51:51'),
('14382965', 'Fungsional Umum', 'Pengelola keamanan dan ketertiban', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('14617590', 'Fungsional Umum', 'Penyusun Bahan Jaminan Pelayanan Keluarga Berencan', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('14682109', 'Fungsional Tertentu', 'ASISTEN APOTEKER PENYELIA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('14783526', 'Fungsional Umum', 'Pengadministrasi Anggaran Belanja Modal', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('14807365', 'Fungsional Umum', 'Analis Produk Hukum', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('15039146', 'Fungsional Tertentu', 'PENYULUH KESEHATAN MASYARAKAT PERTAMA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('15063479', 'Fungsional Tertentu', 'ANALIS KEPEGAWAIAN MUDA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('15270683', 'Fungsional Tertentu', 'GURU PRATAMA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('15279136', 'Fungsional Tertentu', 'EPIDEMIOLOG KESEHATAN PELAKSANA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('15370286', 'Fungsional Umum', 'Pengelola Pengembangan Otonomi Darah', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('15378142', 'Fungsional Tertentu', 'Pranata komputer', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('15928106', 'Fungsional Tertentu', 'BIDAN PERTAMA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('16023519', 'Struktural', 'Lurah', 'IV.a', '2018-01-02', '2019-02-01 03:51:51'),
('16105349', 'Struktural', 'SEKSI PENGENDALIAN DAN EVALUASI PRASARANA, SARANA DAN UTILITAS UMUM KAWASAN PERMUKIMAN', 'IV.a', '2019-09-11', '2019-09-11 03:23:59'),
('16203987', 'Fungsional Umum', 'Pengadministrasi Pegawai', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('16297810', 'Struktural', 'Sekretaris Dewan', 'II.b', '2018-01-02', '2019-02-01 03:52:19'),
('16458307', 'Struktural', 'Asisten Sekretaris Daerah', 'II.b', '2018-01-02', '2019-02-01 03:52:19'),
('16518042', 'Fungsional Tertentu', 'PENYULUH KESEHATAN MASYARAKAT MUDA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('16589104', 'Fungsional Umum', 'Pemeriksa Penanaman Modal', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('16597138', 'Fungsional Umum', 'Bendahara Gaji', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('17041293', 'Fungsional Tertentu', 'Penyuluh Keluarga Berencana Penyelia', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('17261890', 'Fungsional Tertentu', 'RADIOGRAFER PELAKSANA LNJUTAN', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('17650819', 'Struktural', 'Sekretaris Dinas', 'III.a', '2018-01-02', '2019-02-01 03:52:06'),
('17814596', 'Fungsional Umum', 'Penyusunan Bahan Pengawasan Penyelenggaraan Ibadah', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('17893145', 'Fungsional Umum', 'Pengadministrasi LTSE', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('18134679', 'Fungsional Umum', 'Penyusun Bahan Kualitas Pelayanan Keluarga Berenca', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('18213567', 'Fungsional Umum', 'analis pengelola data komoditas perkebunan', 'Non-Eselon', '2018-03-16', '2019-02-01 03:51:46'),
('18315760', 'Struktural', 'SEKRETARIS DAERAH', 'II.a', '2018-01-03', '2019-02-01 03:52:00'),
('18371960', 'Fungsional Umum', 'Pengumpul Data Kebudayaan Bernilai Kepariwisataan', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('18567193', 'Fungsional Tertentu', 'BIDAN MADYA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('18607459', 'Struktural', 'Sekretaris Badan', 'III.a', '2018-01-02', '2019-02-01 03:52:06'),
('18651940', 'Fungsional Tertentu', 'Penyuluh Keluarga Berencana Pelaksana', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('18726531', 'Fungsional Tertentu', 'NUTRISIONIS MUDA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('18925430', 'Fungsional Umum', 'Pengumpul Bahan Evaluasi Diklat Teknis', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('19051672', 'Fungsional Tertentu', 'ARSIPARIS PENYELIA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('19250473', 'Fungsional Tertentu', 'AUDITOR  PELAKSANA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('19254608', 'Fungsional Tertentu', 'Penyuluh Perikanan Pertama', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('19485201', 'Fungsional Umum', 'Teknisi AC', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('19654720', 'Fungsional Tertentu', 'SANITARIAN PERTAMA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('20235718', 'Fungsional Tertentu', 'ASISTEN APOTEKER PELAKSANA LANJUTAN', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('20652874', 'Fungsional Umum', 'Pengadministrasi Kenaikan Pangkat', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('20854631', 'Fungsional Umum', 'Penyuluh Lingkungan Hidup', 'Non-Eselon', '2019-09-04', '2019-09-04 00:57:52'),
('21074258', 'Struktural', 'KEPALA SUB BAGIAN TATA USAHA PIMPINAN DAN STAF AHLI', 'IV.a', '2019-08-27', '2019-08-27 06:32:04'),
('21328064', 'Fungsional Umum', 'CALON GURU', 'Non-Eselon', '2019-05-08', '2019-05-07 22:12:33'),
('21384960', 'Fungsional Umum', 'Analis Potensi Mesjid', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('21750394', 'Fungsional Tertentu', 'Penyuluh Kesehatan Masyarakat Ahli Pertama', 'Non-Eselon', '2019-09-18', '2019-09-18 02:41:52'),
('22416783', 'Struktural', 'SUB BAGIAN PENINGKATAN INVESTASI DAN PENANAMAN MODAL DAERAH', 'IV.a', '2019-08-26', '2019-08-26 00:38:36'),
('22453179', 'Fungsional Umum', 'pengadministrasi keuangan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('22490156', 'Fungsional Tertentu', 'ANALIS KEPEGAWAIAN', 'Non-Eselon', '2018-01-06', '2019-02-01 03:51:46'),
('22597603', 'Fungsional Tertentu', 'SANITARIAN PELAKSANA LANJUTAN', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('23014259', 'Fungsional Umum', 'Pengelola Pola pangan harapan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('23096752', 'Fungsional Tertentu', 'SANITARIAN PELAKSANA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('23168052', 'Fungsional Tertentu', 'Teknisi Elektromedis Pelaksana', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('23197065', 'Fungsional Umum', 'Analis Pariwisata', 'Non-Eselon', '2019-09-09', '2019-09-08 23:32:00'),
('23452096', 'Fungsional Umum', 'Pengadministrasi Perpustakaan', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('23612589', 'Fungsional Umum', 'Analis Kenelayanan', 'Non-Eselon', '2019-09-05', '2019-09-05 06:47:14'),
('23650214', 'Fungsional Umum', 'Analis Pemerintahan Umum dan Otonomi Daerah', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('23721495', 'Fungsional Umum', 'Pengadministrasi Surat', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('23740892', 'Fungsional Umum', 'Pengelola Data Pemerintahan desa/Kelurahan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('23891407', 'Fungsional Umum', 'ANALIS SUMBER DAYA MANUSIA APARATUR', 'Non-Eselon', '2019-01-08', '2019-02-01 03:51:46'),
('23910782', 'Fungsional Tertentu', 'PENGAWAS SEKOLAH MADYA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('23948715', 'Fungsional Tertentu', 'Penyuluh Pertanian Pertama', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('23985176', 'Fungsional Umum', 'Pengemudi', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('24065219', 'Fungsional Umum', 'PRANATA ALAT PERSANDIAN', 'Non-Eselon', '2019-09-02', '2019-09-02 05:56:58'),
('24193256', 'Fungsional Umum', 'Pengelola Kegiatan Rumah Tangga', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('24216359', 'Fungsional Tertentu', 'PENYULUH KEHUTANAN PERTAMA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('24263897', 'Fungsional Umum', 'Pengawas Kearspan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('24396175', 'Fungsional Tertentu', 'NUTRISIONIS MADYA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('24561789', 'Struktural', 'KEPALA SUB BAGIAN PRODUKSI', 'IV.a', '2019-08-26', '2019-08-26 02:25:39'),
('24720193', 'Fungsional Umum', 'Pengentri Data', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('24918765', 'Fungsional Tertentu', 'BIDAN PELAKSANA PEMULA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('25017246', 'Fungsional Umum', 'Pengadministrasi Perencanaan dan Program', 'Non-Eselon', '2018-02-09', '2019-02-01 03:51:46'),
('25028439', 'Fungsional Umum', 'Pengawas Harga Pangan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('25037189', 'Fungsional Tertentu', 'AUDITOR PELAKSANA LANJUTAN', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('25104732', 'Fungsional Tertentu', 'Pranata Komputer Pertama', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('25160483', 'Fungsional Umum', 'Penelaah Dampak Lingkungan', 'Non-Eselon', '2019-09-04', '2019-09-04 00:53:53'),
('25214098', 'Fungsional Tertentu', 'ARSIPARIS MADYA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('25284193', 'Fungsional Umum', 'Pengelola Data Lingkungan', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('25378491', 'Fungsional Umum', 'Pengumpul Data Kependudukan', 'Non-Eselon', '2018-02-09', '2019-02-01 03:51:46'),
('25401793', 'Fungsional Umum', 'Pengadministrasi Diklatpim', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('25432961', 'Struktural', 'Sekretaris Kecamatan', 'III.b', '2018-01-02', '2019-02-01 03:52:12'),
('25693427', 'Fungsional Tertentu', 'Polisi Kehutanan Penyelia', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('25763910', 'Fungsional Tertentu', 'AUDITOR MUDA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('25813740', 'Fungsional Umum', 'Pengumpul Data Bidang Pariwisata', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('26083592', 'Fungsional Tertentu', 'PRANATA KOMPUTER PERTAMA', 'Non-Eselon', '2019-09-11', '2019-09-11 02:21:01'),
('26253409', 'Fungsional Tertentu', 'GURU MADYA TINGKAT I', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('26312094', 'Fungsional Umum', 'Pengadministrasi Diklat Penjenjangan', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('26341290', 'Struktural', 'Kepala Sub Bidang', 'IV.a', '2019-01-04', '2019-02-01 03:51:51'),
('27349218', 'Fungsional Tertentu', 'FISIOTERAPIS', 'Non-Eselon', '2019-09-06', '2019-09-06 00:52:58'),
('27428513', 'Fungsional Tertentu', 'DOKTER GIGI PERTAMA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('27589106', 'Struktural', 'KEPALA SUB BAGIAN PRODUK HUKUM', 'IV.a', '2019-08-26', '2019-08-26 06:02:31'),
('27968523', 'Fungsional Umum', 'Pengolah Data dan Informasi', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('28239104', 'Fungsional Umum', 'Pengadministrasi Pensiun Pegawai', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('28245169', 'Fungsional Tertentu', 'Penyuluh Pertanian Madya', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('28361479', 'Fungsional Tertentu', 'DOKTER GIGI MADYA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('28945327', 'Fungsional Tertentu', 'ANALIS KEPEGAWAIAN PERTAMA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('28967041', 'Fungsional Tertentu', 'PRANATA KOMPUTER MADYA', 'Non-Eselon', '2019-09-11', '2019-09-11 02:21:59'),
('29021846', 'Fungsional Umum', 'analis program penyuluhan', 'Non-Eselon', '2018-03-16', '2019-02-01 03:51:46'),
('29187235', 'Fungsional Tertentu', 'PENYULUH KEHUTANAN PELAKSANA LANJUTAN', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('29378560', 'Fungsional Tertentu', 'RADIOGRAFER PENYELIA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('29584317', 'Fungsional Tertentu', 'PERAWAT AHLI MUDA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('29740325', 'Fungsional Umum', 'Pengendali Surat', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('30134295', 'Fungsional Umum', 'Pengolah Data Pengendalian dan Pembangunan Perumah', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('30312485', 'Fungsional Umum', 'Analis Kerja Sama', 'Non-Eselon', '2019-09-09', '2019-09-09 00:30:41'),
('30498365', 'Fungsional Umum', 'Analis Desa dan Kelurahan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('30845263', 'Fungsional Umum', 'Analis Organisasi dan Tata Laksana', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('30952136', 'Fungsional Tertentu', 'DOKTER AHLI MADYA', 'Non-Eselon', '2020-01-07', '2020-01-07 03:33:58'),
('31495370', 'Fungsional Umum', 'Pengadministrasi Kependudukan', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('31796480', 'Fungsional Tertentu', 'Pranata Komputer Pelaksana Pemula', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('31902347', 'Fungsional Umum', 'Petugas Bahan Informasi dan Publikasi', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('31952374', 'Fungsional Tertentu', 'ARSIPARIS PELAKSANA LANJUTAN', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('32093867', 'Fungsional Umum', 'non eselon', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('32175460', 'Fungsional Tertentu', 'Penyuluh Pertanian Pelaksana Lanjutan', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('32381607', 'Fungsional Umum', 'Pengolah Data Bahan Sosialisasi Peraturan Perundan', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('32560479', 'Fungsional Umum', 'penyelenggara pembelian barang pengawas kearsipan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('32734108', 'Struktural', 'Camat', 'III.a', '2018-01-02', '2019-02-01 03:52:06'),
('32740831', 'Fungsional Tertentu', 'Polisi Kehutanan Pelaksana', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('32863157', 'Fungsional Umum', 'Pramu Administrasi', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('33051794', 'Fungsional Tertentu', 'BIDAN MUDA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('33695701', 'Fungsional Umum', 'Pengadministrasi Pelayanan KerumahTanggaan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('33790258', 'Fungsional Tertentu', 'EPIDEMIOLOG KESEHATAN MUDA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('33872904', 'Fungsional Umum', 'Analis Program dan kegiatan', 'Non-Eselon', '2018-03-16', '2019-02-01 03:51:46'),
('33914578', 'Fungsional Umum', 'Analis Hubungan  Antara Lembaga Kepercayaan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('34127586', 'Fungsional Tertentu', 'EPIDEMIOLOG KESEHATAN PELAKSANA PEMULA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('34371802', 'Fungsional Tertentu', 'Perawat Gigi Pelaksana Lanjutan', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('34521903', 'Fungsional Umum', 'CPNS', 'Non-Eselon', '2019-09-13', '2019-09-13 02:24:49'),
('34582176', 'Fungsional', 'PENATA ARSIP', 'Non-Eselon', '2018-01-06', '2019-02-01 03:51:46'),
('34725938', 'Fungsional Umum', 'Bendahara Barang dan Aset', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('34781693', 'Struktural', 'KEPALA TATA USAHA', 'III.b', '2019-05-24', '2019-05-24 02:38:42'),
('35097183', 'Fungsional Umum', 'Pengadministrasi Akuntansi Barang (BMN) dan Uang', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('35190287', 'Fungsional Umum', 'Pembantu Bendahara Pengeluaran', 'Non-Eselon', '2018-02-09', '2019-02-01 03:51:46'),
('35381740', 'Struktural', 'SEKSI IDENTIFIKASI DAN PENGUATAN KAPASITAS,KELEMBAGAAN,KEPAHLAWANAN DAN RESTORASI SOSIAL', 'IV.a', '2019-09-12', '2019-09-12 01:11:22'),
('35417280', 'Fungsional Tertentu', 'ANALIS KEPEGAWAIAN MUDA', 'Non-Eselon', '2019-09-11', '2019-09-11 02:24:21'),
('35432109', 'Fungsional Umum', 'Pembantu Bendahara Pengeluaran', 'Non-Eselon', '2018-02-09', '2019-02-01 03:51:46'),
('35437210', 'Struktural', 'SEKSI PENGUJIAN SARANA', 'IV.a', '2019-09-11', '2019-09-11 02:32:50'),
('35463817', 'Fungsional Tertentu', 'Pranata Komputer Pelaksana Lanjutan', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('35816270', 'Fungsional Umum', 'Analis Pembangunan', 'Non-Eselon', '2018-08-06', '2019-02-01 03:51:46'),
('35907321', 'Fungsional Tertentu', 'Penyuluh Keluarga Berencana Madya', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('36249315', 'Fungsional Umum', 'BAGIAN UMUM DAN RUMAH TANGGA', 'Non-Eselon', '2019-09-02', '2019-09-02 02:29:34'),
('36370451', 'Fungsional Umum', 'Pengadministrasi Kesejahteraan Sosial', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('36389475', 'Fungsional Umum', 'Pengadministrasi Kebutuhan Diklat Pegawai', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('36708215', 'Fungsional Umum', 'Analis Keuangan', 'Non-Eselon', '2019-08-22', '2019-08-22 02:06:58'),
('36710493', 'Fungsional Tertentu', 'NUTRISIONIS PENYELIA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('36843572', 'Fungsional Tertentu', 'Pranata Komputer Muda', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('36934078', 'Fungsional Umum', 'Pengadministrasi', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('37018496', 'Fungsional Umum', 'Analis Budidaya Perikanan', 'Non-Eselon', '2019-09-05', '2019-09-05 08:27:26'),
('37036942', 'Fungsional Tertentu', 'PRANATA LABORATORIUM KESEHATAN PELAKSANA LANJUTAN', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('37094651', 'Fungsional Umum', 'Pengumpul Data Permodalan dan Investasi', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('37195438', 'Fungsional Tertentu', 'ANALIS KEPEGAWAIAN PERTAMA', 'Non-Eselon', '2019-09-11', '2019-09-11 02:22:50'),
('37306285', 'Fungsional Umum', 'Pengadmnistrasi Surat', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('37501942', 'Fungsional Tertentu', 'GURU UTAMA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('37649053', 'Fungsional Tertentu', 'pengawas sekolah', 'Non-Eselon', '2018-09-27', '2019-02-01 03:51:46'),
('37685203', 'Fungsional Tertentu', 'ARSIPARIS PERTAMA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('37813590', 'Fungsional Umum', 'Analis Kehidupan Agama', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('37892546', 'Struktural', 'Kepala Sub Bagian', 'IV.a', '2018-01-02', '2019-02-01 03:51:51'),
('37952804', 'Struktural', 'SEKSI REHABILITASI SOSIAL PENYANDANG DISABILITAS, TUNA SOSIAL DAN KORBAN PERDAGANGAN ORANG', 'IV.a', '2019-09-12', '2019-09-12 00:56:45'),
('38513620', 'Fungsional Umum', 'Tehnisi Gedung', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('39184203', 'Fungsional Umum', 'TEKNIK TATA BANGUNAN DAN PERUMAHAN AHLI PERTAMA', 'Non-Eselon', '2019-08-22', '2019-08-22 07:19:38'),
('39318506', 'Fungsional Umum', 'Pemroses Pengawasan dan Pelayaran Kapal', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('39618537', 'Fungsional Umum', 'Penyusun Rencana Kelembagaan Pasar Hasil Perikanan', 'Non-Eselon', '2019-09-05', '2019-09-05 06:53:04'),
('39640731', 'Struktural', 'BIDANG UPAYA KESEHATAN MASYARAKAT', 'III.b', '2019-09-16', '2019-09-16 03:15:24'),
('40275349', 'Fungsional Tertentu', 'Perawat Pelaksana Lanjutan', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('40418637', 'Struktural', 'SEKSI KESEHATAN MASYARAKAT VETERINER,PENGOLAHAN DAN PEMASARAN HASIL, PETERNAKAN', 'IV.a', '2019-09-11', '2019-09-11 03:12:29'),
('40835264', 'Fungsional Umum', 'Pengadministrasi Disiplin Pegawai', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('40982471', 'Fungsional Umum', 'PENGELOLA PENGADUAN PUBLIK', 'Non-Eselon', '2020-01-09', '2020-01-09 06:20:33'),
('41265873', 'Fungsional Tertentu', 'GURU DEWASA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('41450329', 'Fungsional Umum', 'Pengadministrasi Kepegawaian', 'Non-Eselon', '2018-02-09', '2019-02-01 03:51:46'),
('41478306', 'Fungsional Umum', 'Analis Aparatur SDM', 'Non-Eselon', '2019-09-11', '2019-09-11 03:50:05'),
('41526740', 'Fungsional Umum', 'Pengawas Mutu Pakan dan Produksi Bibit ternak keci', 'Non-Eselon', '2018-03-16', '2019-02-01 03:51:46'),
('41673254', 'Fungsional Umum', 'Pengadministrasi Bahan Pustaka', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('42041573', 'Fungsional Umum', 'Pemroses Mutasi Kepegawaian', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('42193084', 'Fungsional Tertentu', 'Penyuluh Perikanan Pelaksana Lanjutan', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('42407189', 'Fungsional Umum', 'Pengadministrasi Olahraga', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('42470319', 'Fungsional Umum', 'Bendahara BOK', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('42581730', 'Fungsional Tertentu', 'Penyuluh Perikanan Penyelia', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('42637409', 'Fungsional Tertentu', 'SANITARIAN MADYA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('42836074', 'Struktural', 'Kepala Dinas', 'III.a', '2017-12-11', '2019-02-01 03:52:06'),
('42869517', 'Fungsional Tertentu', 'PERAWAT TERAMPIL', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('42917384', 'Fungsional Tertentu', 'BIDAN PENYELIA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('43267589', 'Fungsional Umum', 'Pengadministrasi LLAJ', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('43760421', 'Fungsional Umum', 'PENGADMINISTRASI KESEHATAN', 'Non-Eselon', '2019-12-30', '2019-12-30 01:54:41'),
('44208163', 'Struktural', 'Kepala Badan', 'II.b', '2018-01-02', '2019-02-01 03:52:19'),
('44210735', 'Struktural', 'Staf Ahli', 'II.b', '2018-01-02', '2019-02-01 03:52:19'),
('44283769', 'Fungsional Umum', 'Pengelola Bahan Pustaka', 'Non-Eselon', '2018-02-09', '2019-02-01 03:51:46'),
('44620315', 'Fungsional Umum', 'Pengadministrasi Kartu Tanda Penduduk', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('44679023', 'Fungsional Umum', 'Pengadministrasi Keuangan', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('44806752', 'Struktural', 'Kepala Sub Bagian', 'IV.b', '2018-01-02', '2019-02-01 03:51:46'),
('44817906', 'Struktural', 'SEKSI PRASARANA DARAT', 'IV.a', '2019-09-11', '2019-09-11 02:28:51'),
('44938215', 'Fungsional Tertentu', 'NUTRISIONIS PERTAMA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('45261034', 'Fungsional Umum', 'Pengadministrasi Nota Perhitungan Pajak/Retribusi ', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('45389164', 'Struktural', 'KEPALA SUB BAGIAN KEUANGAN DAN ASET', 'IV.a', '2019-09-02', '2019-09-02 00:45:59'),
('45962078', 'Fungsional Tertentu', 'Pranata Komputer Pelaksana', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('45968074', 'Fungsional Tertentu', 'APOTEKER MADYA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('46109824', 'Fungsional Umum', 'Pengadministrasi Sertifikasi', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('46219085', 'Fungsional Umum', 'Pengadministrasi Kesejahteraan Pegawai', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('46320745', 'Fungsional Umum', 'Pengolah Data Kepegawaian', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('46483152', 'Fungsional Umum', 'Pengadmnistrasi kependudukan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('46528417', 'Fungsional Umum', 'Pengumpul Data Akta Kelahiran', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('46539870', 'Struktural', 'SEKSI PERLINDUNGAN SOSIAL, KORBAN BENCANA ALAM DAN BENCANA SOSIAL', 'IV.a', '2019-09-12', '2019-09-12 01:07:30'),
('46571382', 'Fungsional Umum', 'Pengelola Data Statistik', 'Non-Eselon', '2019-09-09', '2019-09-09 00:31:45'),
('47610845', 'Fungsional Umum', 'Pengolah Data Disiplin Pegawai', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('47638954', 'Fungsional Tertentu', 'Penyuluh Kesehatan Masyarakat Pelaksana Lanjutan', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('47910465', 'Fungsional Tertentu', 'PERAWAT PENYELIA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('48523964', 'Fungsional Tertentu', 'Penyuluh Perikanan Pelaksana Pemula', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('48761049', 'Fungsional Umum', 'ANALIS KENELAYANAN', 'Non-Eselon', '2019-10-08', '2019-10-08 02:49:25'),
('49170852', 'Struktural', 'SEKSI ANGKUTAN DAN PELAYARAN', 'IV.a', '2019-09-11', '2019-09-11 02:25:47'),
('49180764', 'Fungsional Tertentu', 'Teknisi Elektromedis Pelaksana Lanjutan', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('49287613', 'Fungsional Umum', 'fungsional umum', 'Non-Eselon', '2018-08-29', '2019-02-01 03:51:46'),
('49685102', 'Fungsional Tertentu', 'Perekam Medis Pelaksana Lanjutan', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('50286541', 'Fungsional Umum', 'Penata Usaha Umum', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('50315489', 'Fungsional Tertentu', 'Polisi Kehutanan Muda', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('50498762', 'Fungsional Tertentu', 'PRANATA LABORATORIUM KESEHATAN PENYELIA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('50513642', 'Fungsional Umum', 'Pengolah Data Pemakai Perumahan dan Tanah', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('50576834', 'Fungsional Tertentu', 'Teknisi Elektromedis Penyelia', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('50658724', 'Fungsional Tertentu', 'Pranata Laboratorium Kesehatan Muda', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('50751982', 'Fungsional Tertentu', 'DOKTER GIGI MUDA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('51245309', 'Fungsional Tertentu', 'GURU PRATAMA TINGKAT I', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('51430796', 'Fungsional Umum', 'Pengelola Data Pengembangn Investasi', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('51467805', 'Fungsional Umum', 'PENGADMINISTRASI PENDIDIKAN', 'Non-Eselon', '2018-09-20', '2019-02-01 03:51:46'),
('51673489', 'Fungsional Umum', 'Analis Lembaga Dakwa /Keagamaan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('51872593', 'Fungsional Umum', 'Pengadministrasi Pemerintahan, Ketentraman dan Ket', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('52038146', 'Fungsional Tertentu', 'Perawat Gigi Penyelia', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('52341609', 'Fungsional Umum', 'Pengadministrasi Kegiatan Pemuda dan Olahraga', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('52407539', 'Fungsional Umum', 'Pengolah Data dan Pengagenda Surat Sarana Prasaran', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('52731659', 'Fungsional Tertentu', 'PENYULUH KEHUTANAN PENYELIA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('52750481', 'Fungsional Umum', 'Pengadministrasi Teknis Pemeriksaan dan Perawatan ', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('52879061', 'Fungsional Umum', 'PENGELOLA KEAMANAN PANGAN SEGAR DAN PANGAN JAJANAN', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('53149270', 'Fungsional Tertentu', 'ASISTEN APOTEKER TERAMPIL', 'Non-Eselon', '2019-09-18', '2019-09-18 00:38:44'),
('53286914', 'Struktural', 'SEKSI PENGELOLAAN DAN PENGOPERASIAN KEPELABUHAN', 'IV.a', '2019-09-11', '2019-09-11 02:32:13'),
('53412570', 'Fungsional Umum', 'pengelola alat  dn mesin pertanian', 'Non-Eselon', '2018-03-16', '2019-02-01 03:51:46'),
('53570418', 'Fungsional Tertentu', 'OKUPASI TERAPIS PELAKSANA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('53785402', 'Fungsional Umum', 'Bendahara Penerimaan', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('53796045', 'Fungsional Tertentu', 'DOKTER PERTAMA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('53946820', 'Fungsional Umum', 'PEMBUAT DAFTAR GAJI', 'Non-Eselon', '2019-05-15', '2019-05-15 03:15:02'),
('54068921', 'Fungsional Umum', 'Analis Kelembagaan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('54579680', 'Fungsional Tertentu', 'Penyuluh Keluarga Berencana Pelaksana Lanjutan', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('54831579', 'Fungsional Umum', 'Penata Usaha Rumah Tangga', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('54856731', 'Fungsional Umum', 'PENGELOLA SARANA PRASARANA RUMAH TANGGA', 'Non-Eselon', '2019-09-03', '2019-09-03 03:25:16'),
('55160794', 'Struktural', 'SEKSI LALU LINTAS JALA', 'IV.a', '2019-09-11', '2019-09-11 02:28:06'),
('55483021', 'Fungsional Umum', 'PETUGAS PERLENGKAPAN SARANA PROTOKOLER', 'Non-Eselon', '2019-09-18', '2019-09-18 08:06:16'),
('55680491', 'Fungsional Tertentu', 'GURU PEMBINA', 'Non-Eselon', '2018-09-05', '2019-02-01 03:51:46'),
('55734128', 'Fungsional Umum', 'Pengadministrasi Teknik Lingkungan Hidup', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('56097184', 'Fungsional Umum', 'Analis Konservasi Air dan Lingkungan Hidup', 'Non-Eselon', '2019-09-04', '2019-09-04 00:39:36'),
('56194753', 'Fungsional Tertentu', 'PERAWAT MAHIR', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('56290874', 'Fungsional Umum', 'penata usaha pergudangan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('56387294', 'Fungsional Umum', 'Pengadministrasi Perpustakaan', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('56498053', 'Fungsional Umum', 'Pengumpul Data Bahan Perencanaan', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('57248509', 'Fungsional Tertentu', 'ARSIPARIS MUDA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('57250369', 'Fungsional Umum', 'Analis Perencanaan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('57459036', 'Fungsional Tertentu', 'SANITARIAN MAHIR', 'Non-Eselon', '2019-12-20', '2019-12-20 03:20:16'),
('57560214', 'Struktural', 'SEKSI PEMERINTAHAN DAN PELAYANAN UMUM', 'IV.b', '2020-01-09', '2020-01-09 06:49:43'),
('57561983', 'Fungsional Umum', 'Sekretaris Desa', 'Non-Eselon', '2018-02-09', '2019-02-01 03:51:46'),
('57598162', 'Fungsional Umum', 'PENGAWAS TATA BANGUNAN DAN PERUMAHAN', 'Non-Eselon', '2019-08-22', '2019-08-22 07:07:02'),
('58321906', 'Fungsional Umum', 'Pengumpul Data bahan Penyusunan Anggaran', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('58539027', 'Fungsional Tertentu', 'Perawat Pelaksana Pemula', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('58953417', 'Fungsional Tertentu', 'GURU DEWASA TINGKAT I', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('59832107', 'Fungsional Tertentu', 'DOKTER MUDA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('60218759', 'fungsional umum', 'Fungsional Umum', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('60276153', 'Fungsional Umum', 'Pengolah Data dan Informasi', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('60394827', 'Fungsional Umum', 'Pengadministrasi SMK', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('60591627', 'Struktural', 'SEKSI ANGKUTAN DAN TERMINAL', 'IV.a', '2019-09-11', '2019-09-11 02:30:38'),
('60627154', 'Fungsional Umum', 'Pengawas Penanaman Modal', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('60834971', 'Fungsional Tertentu', 'Fisioterapis Terampil', 'Non-Eselon', '2019-09-18', '2019-09-18 03:38:46'),
('60839246', 'Struktural', 'Inspektur', 'II.b', '2018-01-02', '2019-02-01 03:52:19'),
('60958276', 'Fungsional Umum', 'Pengelola Data Kependudukan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('60985237', 'Fungsional Umum', 'OPERATOR SOUND SYSTEM', 'IV.a', '2019-09-02', '2019-09-02 01:36:29'),
('61053974', 'Fungsional Umum', 'Pengadministrasi Obat dan Alat Kesehatan', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('61327058', 'Struktural', 'Kepala sub Bagian Keuangan Dan Perlengkapan Pada D', 'IV.a', '2019-01-02', '2019-02-01 03:51:51'),
('61365908', 'Fungsional Umum', 'Penyusun Rencana Kerja dan Diklat', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('61528946', 'Fungsional Tertentu', 'Perekam Medis Penyelia', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('61583462', 'Fungsional Umum', 'Pengumpul Data Hubungan Antara Lembaga', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('61675429', 'Fungsional Tertentu', 'ANALIS KEPEGAWAIAN MADYA', 'Non-Eselon', '2019-09-11', '2019-09-11 02:25:04'),
('61790542', 'Fungsional Tertentu', 'PERAWAT MADYA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('61837456', 'Fungsional Umum', 'Analis Permasalahan Hukum', 'Non-Eselon', '2019-09-04', '2019-09-04 00:48:32'),
('61894723', 'Fungsional Tertentu', 'AUDITOR PENYELIA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('62168930', 'Fungsional Umum', 'Pengadministrasi Diklat Teknis', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('62597614', 'Struktural', 'KEPALA SUB BAGIAN PENINGKATAN INVESTASI DAN PENANAMAN MODAL DAERAH', 'IV.a', '2019-08-26', '2019-08-26 00:39:36'),
('63026189', 'Struktural', 'SUB BAGIAN HUMAS DAN PROTOKOLER', 'IV.a', '2019-09-06', '2019-09-06 01:41:16'),
('63417260', 'Fungsional Umum', 'Pengadministrasi Kesehatan', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('63802567', 'Fungsional Umum', 'Pengevaluasi Pengurusan Arsip', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('63985761', 'Fungsional Umum', 'Analis Sarana Prasarana Ibadah', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('64165982', 'Fungsional Tertentu', 'ADMINISTRATOR KESEHATAN MUDA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('64379612', 'Struktural', 'Seksi Pembangunan', 'IV.a', '2019-05-15', '2019-05-15 05:07:15'),
('64527093', 'Struktural', 'SEKSI BADAN USAHA DAN JASA ANGKUTAN PELAYARAN', 'IV.a', '2019-09-11', '2019-09-11 02:34:57'),
('64598260', 'Fungsional Tertentu', 'Penyuluh Perikanan Madya', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('64710635', 'Fungsional Umum', 'PRAMU BAKTI', 'Non-Eselon', '2019-09-05', '2019-09-05 03:46:01'),
('64786035', 'Fungsional Umum', 'Analis Pemerintahan Umum dan Otonomi Daerah', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('64925867', 'Fungsional Tertentu', 'Penyuluh Kesehatan Masyarakat Madya', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('64963125', 'Fungsional Tertentu', 'BIDAN MAHIR', 'Non-Eselon', '2019-01-07', '2019-02-01 03:51:46'),
('65140692', 'Fungsional Umum', 'Penyusun Bhan Pembinaan Musabaqah', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('65408261', 'Fungsional Umum', 'Pengadministrasi Pemerintahan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('65906873', 'Fungsional Umum', 'Analis Hukum', 'Non-Eselon', '2019-09-05', '2019-09-05 02:30:41'),
('66247091', 'Fungsional Umum', 'Protokoler', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('66543170', 'Fungsional Tertentu', 'Penyuluh Pertanian Penyelia', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('67062483', 'Fungsional Tertentu', 'Perawat Pelaksana', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('67105983', 'Fungsional Umum', 'Pengolah Data Tata Usaha', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('67124930', 'Fungsional Tertentu', 'NUTRISIONIS PELAKSANA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('67126580', 'Fungsional Umum', 'Pengadministrasi Poli Induk', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('67138965', 'Fungsional Tertentu', 'Perawat Pertama', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('67509164', 'Fungsional Umum', 'Pengelola Kemesjidan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('67639041', 'Struktural', 'Kepala Seksi', 'IV.a', '2018-01-02', '2019-02-01 03:51:51'),
('67648539', 'Fungsional Tertentu', 'GURU', 'Non-Eselon', '2018-09-20', '2019-02-01 03:51:46'),
('67683402', 'Fungsional Tertentu', 'APOTEKER MUDA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('68063745', 'Fungsional Tertentu', 'PENYULUH KEHUTANAN MADYA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('68129576', 'Fungsional Tertentu', 'Pranata Komputer Penyelia', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('68264017', 'Fungsional Tertentu', 'PERAWAT AHLI UTAMA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('68271956', 'Fungsional Umum', 'PENGURUS BARANG', 'Non-Eselon', '2019-09-09', '2019-09-09 00:34:09'),
('68275461', 'Fungsional Umum', 'Pengadministrasi Tata Usaha', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('68342109', 'Fungsional Umum', 'Pengadministrasi Program Kerja', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('68456792', 'Fungsional Umum', 'PENGUMPUL BAHAN PUSTAKA DAN ARSIP', 'Non-Eselon', '2019-09-16', '2019-09-16 03:32:39'),
('70261894', 'Fungsional Umum', 'Pengadministrasi Pemerintah Desa', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('70263159', 'Fungsional Umum', 'Pengolah Data Pendataan, Pemetaan dan Penilaian', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('70391268', 'Fungsional Tertentu', 'Penyuluh Perikanan Pelaksana', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('70431756', 'Fungsional Tertentu', 'PENGAWAS SEKOLAH UTAMA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('70792358', 'Fungsional Tertentu', 'Penyuluh Keluarga Berencana Pertama', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('70976814', 'Fungsional Tertentu', 'ADMINISTRATOR KESEHATAN MADYA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('71753498', 'Fungsional Tertentu', 'Penyuluh Perikanan Muda', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('71852763', 'Fungsional Tertentu', 'Polisi Kehutanan Pertama', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('71943602', 'Fungsional Umum', 'OPERATOR SPEED BOAT', 'Non-Eselon', '2019-09-02', '2019-09-02 02:49:39'),
('71946583', 'Fungsional Tertentu', 'GURU PERTAMA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('72539678', 'Fungsional Tertentu', 'Penyuluh Kesehatan Masyarakat Pelaksana', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('72567081', 'Fungsional Umum', 'Pengumpul Data Jenis Sarana dan Akomodasi Kepariwi', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('72815497', 'Fungsional Tertentu', 'ASISTEN APOTEKER PELAKSANA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('73074189', 'Fungsional Tertentu', 'SANITARIAN MUDA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('73082597', 'Fungsional Tertentu', 'SANITARIAN PENYELIA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('73128049', 'Struktural', 'Kepala Bagian', 'III.a', '2018-01-02', '2019-02-01 03:52:06'),
('73280641', 'Fungsional Tertentu', 'PENYULUH KEHUTANAN PELAKSANA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('73475628', 'Fungsional', 'FUNGSIONAL UMUM', 'Non-Eselon', '2018-01-06', '2019-02-01 04:17:27'),
('73675209', 'Fungsional Umum', 'Pengelola Sistem Informasi', 'Non-Eselon', '2019-09-09', '2019-09-09 00:31:05'),
('73950176', 'Fungsional Umum', 'Petugas Tata Usaha Pimpinan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('74501798', 'Fungsional Umum', 'pengelola budidaya dan pengembangan tanaman pangan', 'Non-Eselon', '2018-03-16', '2019-02-01 03:51:46'),
('74539102', 'Fungsional Tertentu', 'Penyuluh Pertanian Muda', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('75028613', 'Fungsional Umum', 'Pengadministrasi dan Pengolah Data Kepegawaian', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('75490837', 'Fungsional Umum', 'Pengolah Data Perumahan dan Teknologi Informasi pr', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('75641937', 'Fungsional Umum', 'Pengumpul dan Pengolah Data Kepegawaian', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('75687901', 'Fungsional Umum', 'Analis Materi Penyuluhan', 'Non-Eselon', '2018-03-16', '2019-02-01 03:51:46'),
('75801473', 'Fungsional Umum', 'Pengadministrasi Akuntansi Uang', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('76049381', 'Fungsional Tertentu', 'Perekam Medis Pelaksana', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('76051934', 'Fungsional Umum', 'ANALIS JABATAN', 'Non-Eselon', '2019-08-22', '2019-08-22 00:56:36'),
('76149830', 'Struktural', 'Direktur', 'III.a', '2018-01-02', '2019-02-01 03:52:06'),
('76298041', 'Fungsional Umum', 'Pengolah Data Bidang Pariwisata', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('76318502', 'Fungsional Umum', 'Bendahara Bupati', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('76527981', 'Struktural', 'Kepala Bidang', 'III.b', '2018-01-02', '2019-02-01 03:52:12'),
('76549783', 'Fungsional Umum', 'Pengelola Urusan agama', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('76894132', 'Fungsional Tertentu', 'OKUPASI TERAPIS PENYELIA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('76954381', 'Struktural', 'Kepala Seksi', 'IV.b', '2018-01-02', '2019-02-01 03:51:46'),
('77130496', 'Fungsional Umum', 'Pengelola Mess', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('77138052', 'Fungsional Umum', 'Pengadministrasi Program Pemberantasan Penyakit Me', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('77314062', 'Fungsional Umum', 'TATA USAHA', 'Non-Eselon', '2019-02-04', '2019-02-04 02:36:31'),
('77846052', 'Fungsional Umum', 'Pengadministrasi Tugas Belajar/Ijin Belajar', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('78064173', 'Fungsional Umum', 'Pengadministrasi Disiplin dan Pengembangan Pegawai', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('78259630', 'Fungsional Umum', 'Caraka', 'Non-Eselon', '2018-02-09', '2019-02-01 03:51:46'),
('78312597', 'Fungsional Umum', 'FUNGSIONAL UMUM', 'Non-Eselon', '2018-10-03', '2019-02-01 03:51:46'),
('78340712', 'Fungsional Tertentu', 'Penyuluh Keluarga Berencana Pelaksana Pemula', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('78361024', 'Fungsional Tertentu', 'BIDAN PELAKSANA LANJUTAN', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('78460152', 'Fungsional Umum', 'Analis Pertauran Investasi', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('78594612', 'Fungsional Umum', 'PENYUSUN RENCANA KELEMBAGAAN PASAR HASIL PERIKANAN', 'Non-Eselon', '2019-10-08', '2019-10-08 02:51:17'),
('78920136', 'Fungsional Umum', 'Pengadministrasi Program Pemerintahan', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('79285316', 'Struktural', 'SEKSI PENINGKATAN KUALITAS DAN PENYEDIAAN PRASARANA, SARANA DAN UTILITAS UMUM KAWASAN PERMUKIMAN', 'IV.a', '2019-09-11', '2019-09-11 03:22:31'),
('79758043', 'Fungsional Umum', 'Pengadministrasi Umum', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('80468719', 'Fungsional Tertentu', 'Polisi Kehutanan Madya', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('80473862', 'Fungsional Umum', 'Penyiap Hukuman Disiplin', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('80915486', 'Fungsional Umum', 'Pengadministrasi Akta Perkawinan, Perceraian, Peng', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('81237950', 'Struktural', 'BIDANG PERMUKIMAN', 'III.b', '2019-09-11', '2019-09-11 03:25:14'),
('81247563', 'Fungsional Umum', 'ANALIS KINERJA', 'Non-Eselon', '2019-08-22', '2019-08-22 01:08:27'),
('81593842', 'Struktural', 'SEKSI PENGOLAHAN DAN PEMASARAN HASIL TANAMAN  PANGAN DAN HORTIKULTURA', 'IV.a', '2019-09-11', '2019-09-11 03:09:38'),
('81893204', 'Fungsional Umum', 'administrasi surat', 'Non-Eselon', '2018-08-29', '2019-02-01 03:51:46'),
('81945628', 'Fungsional Umum', 'PELAKSANA FARMASI', 'Non-Eselon', '2019-12-12', '2019-12-12 07:17:36'),
('81945863', 'Fungsional Umum', 'Pengadministrasi Peraturan Perundang-undangan', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('82017865', 'Fungsional Umum', 'Pengadministrasi SLTP', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('82391478', 'Fungsional Tertentu', 'EPIDEMIOLOG KESEHATAN MADYA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('82456098', 'Fungsional Umum', 'pengelola ketersediaan dan kerawanan pangan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('82495360', 'Fungsional Umum', 'Analis Statistik', 'Non-Eselon', '2019-09-09', '2019-09-09 00:30:09'),
('82804539', 'Fungsional Umum', 'Pengadministrasi Teknik Bina Marga', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('82856901', 'Fungsional Tertentu', 'PENYULUH KEHUTANAN MUDA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('82936745', 'Fungsional Umum', 'pengelola bahan perencanaan  dan pelaporan usaha t', 'Non-Eselon', '2018-03-16', '2019-02-01 03:51:46'),
('83084629', 'Fungsional Umum', 'Penyelenggara Kearsipan dan Pengolah Dokumentasi', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('83140652', 'Fungsional Tertentu', 'ARSIPARIS PELAKSANA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('83261785', 'Fungsional Tertentu', 'BIDAN MAHIR', 'Non-Eselon', '2019-12-30', '2019-12-30 03:33:45'),
('83405218', 'Fungsional Umum', 'Pengendali Teknologi Informasi', 'Non-Eselon', '2019-09-05', '2019-09-05 05:40:16'),
('83570614', 'Fungsional Umum', 'Pengadministrasi Perjalanan Dinas', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('83647182', 'Fungsional Umum', 'Pembantu Bendahara Gaji', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('84013652', 'Fungsional Tertentu', 'Sanitarian Pelaksana Pemula', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('84203956', 'Fungsional Tertentu', 'Polisi Kehutanan Pelaksana Pemula', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('84290817', 'Fungsional Tertentu', 'AUDITOR PERTAMA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('84318206', 'Struktural', 'SEKSI PEMBERDAYAAN SOSIAL, DAN PENANGANAN FAKIR MISKIN', 'IV.a', '2019-09-12', '2019-09-12 01:14:46'),
('84368725', 'Fungsional Tertentu', 'ADMINISTRATOR KESEHATAN PERTAMA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('84518269', 'Fungsional Tertentu', 'ANALIS KEPEGAWAIAN MADYA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('84690587', 'Fungsional Umum', 'Pengadministrasi Konservasi Jenis Ikan', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('84830165', 'Struktural', 'ANGKUTAN PELAYARAN RAKYAT', 'IV.a', '2019-09-11', '2019-09-11 02:29:50'),
('85032679', 'Fungsional Umum', 'Pengadministrasi Bahan Perencana Sistem Informasi ', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('85289407', 'Fungsional Tertentu', 'BIDAN PELAKSANA', 'Non-Eselon', '2019-12-20', '2019-12-20 02:57:21'),
('85782069', 'Fungsional Umum', 'Pengadministrasi Mutasi Kepegawaian', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('86150432', 'Fungsional Umum', 'Pengelola Pembinaan Aparatur dan Administrasi Kelu', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('86215397', 'Struktural', 'CAMAT', 'III.a', '2019-05-06', '2019-05-06 03:24:38'),
('86475820', 'Fungsional Umum', 'pengadministrasi kemanan dan ketertiban', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('86480321', 'Fungsional Tertentu', 'AUDITOR MADYA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('86519083', 'Struktural', 'SEKSI PROMOSI PENANAMAN MODAL', 'IV.a', '2019-09-03', '2019-09-03 07:02:27'),
('86743082', 'Fungsional Umum', 'Analis Program Diklat', 'Non-Eselon', '2019-09-05', '2019-09-05 02:27:01'),
('86809341', 'Fungsional Umum', 'pengelola disiplin pegawai', 'Non-Eselon', '2018-03-16', '2019-02-01 03:51:46'),
('86921374', 'Fungsional Umum', 'Pengadministrasi Perencanaan dan Program', 'Non-Eselon', '2018-03-16', '2019-02-01 03:51:46'),
('86982104', 'Fungsional Umum', 'pengelola kepegawaian', 'Non-Eselon', '2018-03-16', '2019-02-01 03:51:46'),
('87038145', 'Struktural', 'SEKSI PRASARANA LAUT', 'IV.a', '2019-09-11', '2019-09-11 02:31:21'),
('87058194', 'Fungsional Umum', 'BIDAN PELAKSANA LANJUTAN', 'Non-Eselon', '2019-10-29', '2019-10-29 00:30:46'),
('87235498', 'Fungsional Umum', 'Pengolah Data Lingkungan Hidup', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('87239851', 'Fungsional Umum', 'Pengadministrasi Teknik Perikanan', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('87254036', 'Fungsional Umum', 'Pengadministrasi barang Inventaris', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('88302645', 'Fungsional Umum', 'Pengadministrasi Pemerintahan', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('88573402', 'Fungsional Umum', 'Pengadministrasi Pengembangan dan Kesra', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('88650219', 'Fungsional Umum', 'Pengelola Kendaraan Dinas', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('88936075', 'Fungsional Umum', 'Kameramen', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('89206475', 'Fungsional Umum', 'Pengelola Data Pajak Bumi dan Bangunan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('89465321', 'Fungsional Umum', 'Pengadministrasi Kependudukan', 'Non-Eselon', '2019-09-09', '2019-09-09 00:31:26'),
('89761084', 'Fungsional Umum', 'Pengadministrasi Disiplin dan Pensiun', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('90298714', 'Struktural', 'SEKSI PELAYANAN UMUM', 'IV.a', '2019-05-13', '2019-05-13 03:17:46'),
('90413295', 'Fungsional Tertentu', 'EPIDEMIOLOG KESEHATAN PERTAMA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('90429157', 'Fungsional Umum', 'Pengolah Data Kepegawaian Simpeg dan DUK', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46');
INSERT INTO `data_jabatan` (`id_jabatan`, `jenis_jabatan`, `nama_jabatan`, `eselon`, `iat`, `uat`) VALUES
('90625439', 'Fungsional Tertentu', 'Nutrisionis Ahli Pertama', 'Non-Eselon', '2019-09-18', '2019-09-18 04:11:52'),
('90975836', 'Fungsional Umum', 'caraka', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('91460795', 'Fungsional Umum', 'PENGENTRI DATA', 'Non-Eselon', '2019-08-26', '2019-08-26 06:32:50'),
('91462850', 'Fungsional Umum', 'Pengadministrasi Akuntansi Barang (BMN)', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('91709235', 'Struktural', 'SEKSI PEMBERDAYAAN MASYARAKAT, PENYALURAN  BANTUAN STIMULAN DAN PENSTAAN LINGKUNGAN', 'IV.a', '2019-09-12', '2019-09-12 00:48:00'),
('91924635', 'Fungsional Tertentu', 'Nutrisionis Terampil', 'Non-Eselon', '2019-09-18', '2019-09-18 12:49:48'),
('92059781', 'Fungsional Umum', 'Pengolah Data Persediaan Barang', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('92193685', 'Fungsional Umum', 'Bendahara BOS', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('92410975', 'Fungsional Tertentu', 'Perawat Gigi Pelaksana Pemula', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('92659780', 'Fungsional Umum', 'Pengadministrasi Keamanan dan Ketertiban', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('93062198', 'Fungsional Tertentu', 'APOTEKER MADYA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('93410295', 'Fungsional Tertentu', 'APOTEKER PERTAMA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('93908246', 'Fungsional Umum', 'Analis Sumber Daya Alam', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('94015936', 'Fungsional Umum', 'Pengolah Data Persediaan Barang', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('94019328', 'Fungsional Umum', 'Analis Tata Laksana', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('94270153', 'Fungsional Umum', 'Pengadministrasi Diklat Prajabatan Teknis dan Fung', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('94321976', 'Fungsional Umum', 'Pengadministrasi Diklat Kepemimpinan', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('94512760', 'Fungsional Tertentu', 'GURU MADYA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('94537621', 'Fungsional Umum', 'Pramu Kebersihan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('94793156', 'Struktural', 'Sekretaris Kelurahan', 'IV.b', '2018-01-02', '2019-02-01 03:51:46'),
('94839701', 'Fungsional Umum', 'Pengadministrasi Pengembangan dan Kesra', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('94863297', 'Fungsional Tertentu', 'OKUPASI TERAPIS PELAKSANA LANJUTAN', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('95138946', 'Fungsional Umum', 'Penyusun dan Pengolah Data Kepegawaian', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('95697304', 'Fungsional Tertentu', 'GURU MUDA TINGKAT I', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('95719826', 'Fungsional Tertentu', 'Penyuluh Kesehatan Masyarakat Penyelia', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('95810762', 'Fungsional Umum', 'Pengadministrasi LPSE', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('95834602', 'Fungsional Umum', 'Penyusun Bahan Bina Keluarga Berencana', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('95842613', 'Fungsional Umum', 'Pendokumentasi Data Mutasi Kepegawaian', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('96037841', 'Fungsional Umum', 'Pengolah Disiplin dan Pengembangan Pegawai', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('96089721', 'Fungsional Tertentu', 'PRANATA KOMPUTER MUDA', 'Non-Eselon', '2019-09-11', '2019-09-11 02:20:13'),
('96298710', 'Fungsional Umum', 'pengumpul pajak', 'Non-Eselon', '2018-12-28', '2019-02-01 03:51:46'),
('96405139', 'Fungsional Umum', 'penyelenggara pemeliharaan gedung dan Bangunan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('96548271', 'Fungsional Tertentu', 'Penyuluh Pertanian Pelaksana', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('97142360', 'Fungsional Umum', 'Analis Institusi Masyarakat Pedesaan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('97206915', 'Struktural', 'SEKSI PERAWATAN PRASARANA', 'IV.a', '2019-09-11', '2019-09-11 02:33:58'),
('97231905', 'Fungsional Tertentu', 'Penyuluh Pertanian Pelaksana Pemula', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('97395416', 'Fungsional Umum', 'Pengentri  data', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('97483065', 'Fungsional Umum', 'Analis Layanan Umum', 'Non-Eselon', '2019-08-22', '2019-08-22 00:34:16'),
('97819230', 'Fungsional Tertentu', 'Perawat Gigi Terampil', 'Non-Eselon', '2019-09-18', '2019-09-18 02:05:28'),
('98047516', 'Fungsional Umum', 'Pengadministrasi Operasional Layanan Informasi dan', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('98341025', 'Fungsional Tertentu', 'EPIDEMIOLOG KESEHATAN PENYELIA', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('98427569', 'Fungsional Tertentu', 'Pranata Laboratorium Kesehatan Pertama', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('98739412', 'Fungsional Umum', 'ANALIS BUDIDAYA PERIKANAN', 'Non-Eselon', '2019-10-08', '2019-10-08 02:50:25'),
('98743592', 'Fungsional Umum', 'Bendahara Pengeluaran', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('98759236', 'Struktural', 'Sekretaris Korpri', 'III.b', '2018-01-02', '2019-02-01 03:52:12'),
('98794035', 'Fungsional Tertentu', 'PERAWAT AHLI MADYA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('98947362', 'Fungsional Tertentu', 'NUTRISIONIS PELAKSANA LANJUTAN', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('98960517', 'Fungsional Tertentu', 'RADIOGRAFER PELAKSANA', 'Non-Eselon', '2018-01-05', '2019-02-01 03:51:46'),
('99074362', 'Fungsional Tertentu', 'PENGAWAS PERIKANAN AHLI PERTAMA', 'Non-Eselon', '2019-10-08', '2019-10-08 02:48:35'),
('99078156', 'Fungsional Umum', 'Pengadministrasi Diklat', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('99170536', 'Fungsional Tertentu', 'Penyuluh Keluarga Berencana Muda', 'Non-Eselon', '2018-02-26', '2019-02-01 03:51:46'),
('99207563', 'Fungsional Umum', 'Pengadministrasi SMU', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('99257430', 'Fungsional Umum', 'Penyiap bahan status perlengkapan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('99465201', 'Fungsional Umum', 'Bendahara Barang', 'Non-Eselon', '2018-02-08', '2019-02-01 03:51:46'),
('99468172', 'Fungsional Umum', 'Pengadministrasi Laporan Apotik', 'Non-Eselon', '2018-02-12', '2019-02-01 03:51:46'),
('99674083', 'Struktural', 'SEKSI PENGOLAHAN DAN PEMASARAN HASIL PERKEBUNAN', 'IV.a', '2019-09-11', '2019-09-11 03:11:07'),
('99714263', 'Fungsional Umum', 'Penata Usaha Persuratan', 'Non-Eselon', '2018-04-03', '2019-02-01 03:51:46'),
('99812753', 'Fungsional Tertentu', 'PENGAWASAN PENYELENGGARAAN PEMERINTAH DI DAERAH', 'Non-Eselon', '2019-05-06', '2019-05-06 03:33:31');

-- --------------------------------------------------------

--
-- Table structure for table `data_jenisjabatan`
--

CREATE TABLE `data_jenisjabatan` (
  `id_jenisjabatan` varchar(50) NOT NULL,
  `nama_jenisjabatan` varchar(30) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_jenisjabatan`
--

INSERT INTO `data_jenisjabatan` (`id_jenisjabatan`, `nama_jenisjabatan`, `iat`, `uat`) VALUES
('11730862', 'Fungsional Umum', '2017-09-29 00:00:00', '2020-03-31 03:24:15'),
('14136925', 'Fungsional Tertentu', '2017-12-09 00:00:00', '2017-12-09 07:10:57'),
('95293640', 'Struktural', '2017-12-09 00:00:00', '2019-05-06 03:46:09');

-- --------------------------------------------------------

--
-- Table structure for table `data_jenispegawai`
--

CREATE TABLE `data_jenispegawai` (
  `id_jenispegawai` varchar(50) NOT NULL,
  `nama_jenispegawai` varchar(50) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_jenispegawai`
--

INSERT INTO `data_jenispegawai` (`id_jenispegawai`, `nama_jenispegawai`, `iat`, `uat`) VALUES
('46380579', 'Pegawai Negeri Sipil Daerah', '2017-10-11 00:00:00', '2019-05-06 03:42:32'),
('72097361', 'Calon Pegawai Negeri Sipil', '2018-02-26 00:00:00', '2020-03-30 00:38:56');

-- --------------------------------------------------------

--
-- Table structure for table `data_kabupaten`
--

CREATE TABLE `data_kabupaten` (
  `id_kabupaten` varchar(50) NOT NULL,
  `nama_kabupaten` varchar(128) NOT NULL,
  `nama_provinsi` varchar(128) NOT NULL,
  `iat` date NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_kabupaten`
--

INSERT INTO `data_kabupaten` (`id_kabupaten`, `nama_kabupaten`, `nama_provinsi`, `iat`, `uat`) VALUES
('64972053', 'Wakatobi', 'Sulawesi Tenggara', '2017-12-11', '2019-05-06 03:47:24');

-- --------------------------------------------------------

--
-- Table structure for table `data_kecamatan`
--

CREATE TABLE `data_kecamatan` (
  `id_kecamatan` varchar(50) NOT NULL,
  `nama_kabupaten` varchar(128) NOT NULL,
  `nama_kecamatan` varchar(128) NOT NULL,
  `iat` date NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_kecamatan`
--

INSERT INTO `data_kecamatan` (`id_kecamatan`, `nama_kabupaten`, `nama_kecamatan`, `iat`, `uat`) VALUES
('2', 'Wakatobi', 'Kaledupa', '2019-05-06', '2019-05-06 03:47:35'),
('3', 'Wakatobi', 'Kaledupa Selatan', '2019-05-06', '2019-05-06 03:47:35'),
('4', 'Wakatobi', 'Togo Binongko', '2019-05-06', '2019-05-06 03:47:35'),
('5', 'Wakatobi', 'Tomia', '2019-05-06', '2019-05-06 03:47:35'),
('6', 'Wakatobi', 'Tomia Timur', '2019-05-06', '2019-05-06 03:47:35'),
('7', 'Wakatobi', 'Wangi-Wangi', '2019-05-06', '2019-05-06 03:47:35'),
('8', 'Wakatobi', 'Wangi-Wangi Selatan', '2019-05-06', '2019-05-06 03:47:35'),
('90435612', 'WAKATOBI', 'WANGI-WANGI', '2019-09-12', '2019-05-06 03:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `data_kedudukanpegawai`
--

CREATE TABLE `data_kedudukanpegawai` (
  `id_kedudukanpegawai` int(11) NOT NULL,
  `nama_kedudukanpegawai` varchar(250) NOT NULL,
  `iat` date NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_kedudukanpegawai`
--

INSERT INTO `data_kedudukanpegawai` (`id_kedudukanpegawai`, `nama_kedudukanpegawai`, `iat`, `uat`) VALUES
(3, 'CLTN', '2017-10-11', '2017-10-11 05:18:58'),
(4, 'Perpanjangan CLTN', '2017-10-11', '2017-10-11 05:18:58'),
(5, 'Tugas Belajar', '2017-10-11', '2017-10-11 05:18:58'),
(6, 'Pemberhentian Sementara', '2017-10-11', '2017-10-11 05:18:58'),
(7, 'Penerimaan Uang Tunggu', '2017-10-11', '2017-10-11 05:18:58'),
(8, 'Wajib  Militer', '2017-10-11', '2017-10-11 05:18:58'),
(9, 'PNS Yang Dinyatakan Hilang', '2017-10-11', '2017-10-11 05:18:58'),
(10, 'Pejabat Negara', '2017-10-11', '2017-10-11 05:18:58'),
(11, 'Kepala Desa', '2017-10-11', '2017-10-11 05:18:58'),
(14, 'Keberatan Atas Penjatuhan Hukuman Disiplin Sesuai PP 30/190', '2017-10-11', '2017-10-11 05:18:58');

-- --------------------------------------------------------

--
-- Table structure for table `data_kelurahan`
--

CREATE TABLE `data_kelurahan` (
  `id_kelurahan` varchar(50) NOT NULL,
  `nama_kecamatan` varchar(128) NOT NULL,
  `nama_kelurahan` varchar(128) NOT NULL,
  `iat` date NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_kelurahan`
--

INSERT INTO `data_kelurahan` (`id_kelurahan`, `nama_kecamatan`, `nama_kelurahan`, `iat`, `uat`) VALUES
('10', 'Kaledupa', 'Ambeua', '2019-05-06', '2019-05-06 03:48:27'),
('100', 'Wangi-Wangi Selatan', 'Numana', '2019-05-06', '2019-05-06 03:48:27'),
('101', 'Wangi-Wangi Selatan', 'Wisata Koto', '2019-05-06', '2019-05-06 03:48:27'),
('102', 'Wangi-Wangi Selatan', 'Wungka', '2019-05-06', '2019-05-06 03:48:27'),
('11', 'Kaledupa', 'Ambeua Raya', '2019-05-06', '2019-05-06 03:48:28'),
('12', 'Kaledupa', 'Balasuna', '2019-05-06', '2019-05-06 03:48:28'),
('13', 'Kaledupa', 'Balasuna Selatan', '2019-05-06', '2019-05-06 03:48:28'),
('14', 'Kaledupa', 'Buranga', '2019-05-06', '2019-05-06 03:48:29'),
('15', 'Kaledupa', 'Horuo (Haruo)', '2019-05-06', '2019-05-06 03:48:29'),
('16', 'Kaledupa', 'Kalimas', '2019-05-06', '2019-05-06 03:48:29'),
('17', 'Kaledupa', 'Lagiwae', '2019-05-06', '2019-05-06 03:48:29'),
('18', 'Kaledupa', 'Laulua (Laolua)', '2019-05-06', '2019-05-06 03:48:30'),
('19', 'Kaledupa', 'Lefuto (Lewuto)', '2019-05-06', '2019-05-06 03:48:30'),
('2', 'Binongko', 'Kampo-Kampo (Kompo-Kompo)', '2019-05-06', '2019-05-06 03:48:30'),
('20', 'Kaledupa', 'Mantigola (Mantingola)', '2019-05-06', '2019-05-06 03:48:31'),
('21', 'Kaledupa', 'Ollo', '2019-05-06', '2019-05-06 03:48:31'),
('22', 'Kaledupa', 'Ollo Selatan', '2019-05-06', '2019-05-06 03:48:31'),
('23', 'Kaledupa', 'Samabahari', '2019-05-06', '2019-05-06 03:48:32'),
('24', 'Kaledupa', 'Sombano', '2019-05-06', '2019-05-06 03:48:32'),
('25', 'Kaledupa', 'Waduri', '2019-05-06', '2019-05-06 03:48:32'),
('26', 'Kaledupa Selatan', 'Darawa', '2019-05-06', '2019-05-06 03:48:32'),
('27', 'Kaledupa Selatan', 'Kasuwari (Kasuari/Kaswari)', '2019-05-06', '2019-05-06 03:48:33'),
('28', 'Kaledupa Selatan', 'Langge', '2019-05-06', '2019-05-06 03:48:33'),
('29', 'Kaledupa Selatan', 'Lentea', '2019-05-06', '2019-05-06 03:48:33'),
('3', 'Binongko', 'Lagongga (Longongga)', '2019-05-06', '2019-05-06 03:48:33'),
('30', 'Kaledupa Selatan', 'Pajam', '2019-05-06', '2019-05-06 03:48:34'),
('31', 'Kaledupa Selatan', 'Peropa', '2019-05-06', '2019-05-06 03:48:34'),
('32', 'Kaledupa Selatan', 'Sandi', '2019-05-06', '2019-05-06 03:48:34'),
('33', 'Kaledupa Selatan', 'Tampara', '2019-05-06', '2019-05-06 03:48:34'),
('34', 'Kaledupa Selatan', 'Tanjung', '2019-05-06', '2019-05-06 03:48:35'),
('35', 'Kaledupa Selatan', 'Tanomeha', '2019-05-06', '2019-05-06 03:48:35'),
('36', 'Togo Binongko', 'Haka', '2019-05-06', '2019-05-06 03:48:35'),
('37', 'Togo Binongko', 'Oihu', '2019-05-06', '2019-05-06 03:48:36'),
('37629531', 'Tomia Timur', 'USUKU', '2019-05-06', '2019-05-06 03:48:36'),
('38', 'Togo Binongko', 'Popalia', '2019-05-06', '2019-05-06 03:48:36'),
('39', 'Togo Binongko', 'Sowa', '2019-05-06', '2019-05-06 03:48:36'),
('4', 'Binongko', 'Makoro', '2019-05-06', '2019-05-06 03:48:37'),
('40', 'Togo Binongko', 'Togo Binongko', '2019-05-06', '2019-05-06 03:48:37'),
('41', 'Togo Binongko', 'Waloindi', '2019-05-06', '2019-05-06 03:48:37'),
('42', 'Tomia', 'Kollo Soha', '2019-05-06', '2019-05-06 03:48:38'),
('43', 'Tomia', 'Lamanggau', '2019-05-06', '2019-05-06 03:48:39'),
('44', 'Tomia', 'Onemay', '2019-05-06', '2019-05-06 03:48:39'),
('45', 'Tomia', 'Patua', '2019-05-06', '2019-05-06 03:48:40'),
('46', 'Tomia', 'Patua Dua (II)', '2019-05-06', '2019-05-06 03:48:40'),
('47', 'Tomia', 'Runduma', '2019-05-06', '2019-05-06 03:48:40'),
('48', 'Tomia', 'Teemoane', '2019-05-06', '2019-05-06 03:48:40'),
('49', 'Tomia', 'Waha', '2019-05-06', '2019-05-06 03:48:40'),
('5', 'Binongko', 'Palahidu', '2019-05-06', '2019-05-06 03:48:41'),
('50', 'Tomia', 'Waitii', '2019-05-06', '2019-05-06 03:48:41'),
('51', 'Tomia', 'Waitii Barat', '2019-05-06', '2019-05-06 03:48:41'),
('52', 'Tomia Timur', 'Bahari', '2019-05-06', '2019-05-06 03:48:41'),
('53', 'Tomia Timur', 'Dete', '2019-05-06', '2019-05-06 03:48:42'),
('54', 'Tomia Timur', 'Kahiyanga (Kahianga)', '2019-05-06', '2019-05-06 03:48:42'),
('55', 'Tomia Timur', 'Kulati (Kulate)', '2019-05-06', '2019-05-06 03:48:42'),
('56', 'Tomia Timur', 'Palahidu Barat', '2019-05-06', '2019-05-06 03:48:43'),
('57', 'Tomia Timur', 'Patipelong', '2019-05-06', '2019-05-06 03:48:44'),
('58', 'Tomia Timur', 'Rukuwa', '2019-05-06', '2019-05-06 03:48:45'),
('58479025', 'Wangi-Wangi Selatan', 'Mandati III', '2019-05-06', '2019-05-06 03:48:46'),
('59', 'Tomia Timur', 'Timu', '2019-05-06', '2019-05-06 03:48:46'),
('6', 'Binongko', 'Palahidu Barat', '2019-05-06', '2019-05-06 03:48:46'),
('60', 'Tomia Timur', 'Tongano Barat', '2019-05-06', '2019-05-06 03:48:47'),
('61', 'Tomia Timur', 'Tongano Timur', '2019-05-06', '2019-05-06 03:48:47'),
('62', 'Tomia Timur', 'Wawotimu', '2019-05-06', '2019-05-06 03:48:47'),
('63', 'Wangi-Wangi', 'Koroe Onawe', '2019-05-06', '2019-05-06 03:48:48'),
('64', 'Wangi-Wangi', 'Longa', '2019-05-06', '2019-05-06 03:48:48'),
('65', 'Wangi-Wangi', 'Maleko', '2019-05-06', '2019-05-06 03:48:48'),
('66', 'Wangi-Wangi', 'Pada Raya Makmur', '2019-05-06', '2019-05-06 03:48:48'),
('67', 'Wangi-Wangi', 'Patuno', '2019-05-06', '2019-05-06 03:48:49'),
('68', 'Wangi-Wangi', 'Pongo', '2019-05-06', '2019-05-06 03:48:49'),
('69', 'Wangi-Wangi', 'Pookambua', '2019-05-06', '2019-05-06 03:48:49'),
('7', 'Binongko', 'Rukuwa', '2019-05-06', '2019-05-06 03:48:49'),
('70', 'Wangi-Wangi', 'Posalu', '2019-05-06', '2019-05-06 03:48:50'),
('71', 'Wangi-Wangi', 'Sombu', '2019-05-06', '2019-05-06 03:48:50'),
('71470926', 'Wangi-Wangi Selatan', 'MANDATI I', '2019-09-12', '2020-01-14 04:07:55'),
('72', 'Wangi-Wangi', 'Tindoi', '2019-05-06', '2019-05-06 03:48:50'),
('73', 'Wangi-Wangi', 'Tindoi Timur', '2019-05-06', '2019-05-06 03:48:51'),
('74', 'Wangi-Wangi', 'Waelumu', '2019-05-06', '2019-05-06 03:48:51'),
('75', 'Wangi-Wangi', 'Waetuno', '2019-05-06', '2019-05-06 03:48:52'),
('76', 'Wangi-Wangi', 'Waginopo', '2019-05-06', '2019-05-06 03:48:52'),
('77', 'Wangi-Wangi', 'Waha', '2019-05-06', '2019-05-06 03:48:52'),
('78', 'Wangi-Wangi', 'Wanci', '2019-05-06', '2019-05-06 03:48:53'),
('79', 'Wangi-Wangi', 'Wandoka', '2019-05-06', '2019-05-06 03:48:53'),
('8', 'Binongko', 'Taipabu', '2019-05-06', '2019-05-06 03:48:53'),
('80', 'Wangi-Wangi', 'Wandoka Selatan', '2019-05-06', '2019-05-06 03:48:53'),
('81', 'Wangi-Wangi', 'Wandoka Utara', '2019-05-06', '2019-05-06 03:48:54'),
('82', 'Wangi-Wangi', 'Wapia-pia', '2019-05-06', '2019-05-06 03:48:54'),
('83', 'Wangi-Wangi Selatan', 'Kabita', '2019-05-06', '2019-05-06 03:48:56'),
('84', 'Wangi-Wangi Selatan', 'Kabita Togo', '2019-05-06', '2019-05-06 03:48:56'),
('85', 'Wangi-Wangi Selatan', 'Kapota', '2019-05-06', '2019-05-06 03:48:56'),
('86', 'Wangi-Wangi Selatan', 'Kapota Utara', '2019-05-06', '2019-05-06 03:48:57'),
('87', 'Wangi-Wangi Selatan', 'Komala', '2019-05-06', '2019-05-06 03:48:58'),
('88', 'Wangi-Wangi Selatan', 'Liya One Melangka (Liya Onemaelangka)', '2019-05-06', '2019-05-06 03:48:58'),
('89', 'Wangi-Wangi Selatan', 'Liya Togo', '2019-05-06', '2019-05-06 03:48:58'),
('9', 'Binongko', 'Wali', '2019-05-06', '2019-05-06 03:48:59'),
('90', 'Wangi-Wangi Selatan', 'Liyamawi', '2019-05-06', '2019-05-06 03:48:59'),
('91', 'Wangi-Wangi Selatan', 'Mandati I', '2019-05-06', '2019-05-06 03:48:59'),
('92', 'Wangi-Wangi Selatan', 'Mandati II', '2019-05-06', '2019-05-06 03:49:00'),
('93', 'Wangi-Wangi Selatan', 'Mandati III', '2019-05-06', '2019-05-06 03:49:00'),
('94', 'Wangi-Wangi Selatan', 'Matahora (Metohora)', '2019-05-06', '2019-05-06 03:49:01'),
('95', 'Wangi-Wangi Selatan', 'Mola Bahari', '2019-05-06', '2019-05-06 03:49:01'),
('96', 'Wangi-Wangi Selatan', 'Mola Nelayan Bakti/Bhakti', '2019-05-06', '2019-05-06 03:49:01'),
('97', 'Wangi-Wangi Selatan', 'Mola Samaturu', '2019-05-06', '2019-05-06 03:49:02'),
('98', 'Wangi-Wangi Selatan', 'Mola Selatan', '2019-05-06', '2019-05-06 03:49:02'),
('99', 'Wangi-Wangi Selatan', 'Mola Utara', '2019-05-06', '2019-05-06 03:49:02');

-- --------------------------------------------------------

--
-- Table structure for table `data_mutasi`
--

CREATE TABLE `data_mutasi` (
  `id_mutasi` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama_lengkap` varchar(140) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `pangkat` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `tmt_sk_mutasi` varchar(100) NOT NULL,
  `no_sk_mutasi` varchar(100) NOT NULL,
  `tanggal_sk_mutasi` varchar(100) NOT NULL,
  `penandatanganan` varchar(100) NOT NULL,
  `tujuan_mutasi` varchar(100) NOT NULL,
  `lampiran` varchar(100) NOT NULL,
  `iat` date NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `data_orangtua`
--

CREATE TABLE `data_orangtua` (
  `id_orangtua` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `status_ortu` varchar(30) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `ttl` varchar(75) NOT NULL,
  `pekerjaan` varchar(10) NOT NULL,
  `no_akta` varchar(128) NOT NULL,
  `tanggal_akta` varchar(128) NOT NULL,
  `meninggal` enum('0','1') NOT NULL,
  `status` varchar(50) NOT NULL,
  `sub_instansi` varchar(255) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `iat` date NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_orangtua`
--

INSERT INTO `data_orangtua` (`id_orangtua`, `nip`, `nama_lengkap`, `status_ortu`, `nama`, `ttl`, `pekerjaan`, `no_akta`, `tanggal_akta`, `meninggal`, `status`, `sub_instansi`, `admin`, `iat`, `uat`) VALUES
(1637, '198008022010012021', 'MISRAWATI', 'AYAH KANDUNG', 'LA SAA', '-', '-', '', '', '0', '1', 'DINAS KESEHATAN', 'DINAS KESEHATAN', '2018-09-19', '2018-09-19 05:01:28'),
(2394, '198008022010012021', 'MISRAWATI', 'IBU KANDUNG', 'wa isi', '-', '-', '', '', '0', '1', 'DINAS KESEHATAN', 'DINAS KESEHATAN', '2019-12-16', '2019-12-16 09:17:28');

-- --------------------------------------------------------

--
-- Table structure for table `data_organisasi`
--

CREATE TABLE `data_organisasi` (
  `id` int(20) NOT NULL,
  `satker` varchar(100) DEFAULT NULL,
  `nip` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `parent` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_organisasi`
--

INSERT INTO `data_organisasi` (`id`, `satker`, `nip`, `jabatan`, `parent`) VALUES
(8, '1', '196012311980101022', 'ketua sekretariat daerah', NULL),
(9, '1', '196012311989011014', 'wakil ketua sekretariat daerah', 8);

-- --------------------------------------------------------

--
-- Table structure for table `data_pasangan`
--

CREATE TABLE `data_pasangan` (
  `id_pasangan` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `ttl` varchar(75) NOT NULL,
  `akta_nikah` varchar(128) NOT NULL,
  `tanggal_nikah` varchar(128) NOT NULL,
  `pekerjaan` varchar(10) NOT NULL,
  `meninggal` enum('0','1') NOT NULL,
  `sub_instansi` varchar(255) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `iat` date NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_pasangan`
--

INSERT INTO `data_pasangan` (`id_pasangan`, `nip`, `nama_lengkap`, `jenis`, `nama`, `ttl`, `akta_nikah`, `tanggal_nikah`, `pekerjaan`, `meninggal`, `sub_instansi`, `admin`, `status`, `iat`, `uat`) VALUES
(1823, '198008022010012021', 'MISRAWATI', 'Suami', 'la miyoto', 'tampara 15/11/1975', 'III / 19/ V/ 2007', '15/04/2007', 'PNS', '0', 'DINAS KESEHATAN', 'DINAS KESEHATAN', '1', '2019-12-16', '2019-12-16 09:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `nip` varchar(50) NOT NULL,
  `niplama` varchar(128) NOT NULL,
  `nama_lengkap` varchar(256) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gelar_depan` varchar(20) NOT NULL,
  `gelar_belakang` varchar(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `golongan_darah` varchar(3) NOT NULL,
  `rhesus` varchar(10) NOT NULL,
  `status_pernikahan` varchar(15) NOT NULL,
  `status_kepegawaian` varchar(20) NOT NULL,
  `jenis_kepegawaian` varchar(128) NOT NULL,
  `kedudukan_kepegawaian` varchar(128) NOT NULL,
  `tmt_cpns` varchar(100) NOT NULL,
  `tanggal_sk_cpns` varchar(100) NOT NULL,
  `no_sk_cpns` varchar(100) NOT NULL,
  `tmt_pns` varchar(100) NOT NULL,
  `tanggal_sk_pns` varchar(100) NOT NULL,
  `no_sk_pns` varchar(100) NOT NULL,
  `jenis_jabatan` varchar(30) NOT NULL,
  `id_pangkat` varchar(128) NOT NULL,
  `jenis_pangkat` varchar(256) NOT NULL,
  `tmt_jenis_pangkat` varchar(20) NOT NULL,
  `eselon` varchar(256) NOT NULL,
  `satuan_kerja` varchar(256) NOT NULL,
  `unit_kerja` varchar(256) NOT NULL,
  `subid_subag` varchar(256) NOT NULL,
  `nama_jabatan` varchar(256) NOT NULL,
  `masa_kerja_total` varchar(20) NOT NULL,
  `masa_kerja_total_awal` varchar(100) NOT NULL,
  `masa_kerja_total_akhir` varchar(100) NOT NULL,
  `masa_kerja_golongan` varchar(20) NOT NULL,
  `masa_kerja_golongan_awal` varchar(100) NOT NULL,
  `masa_kerja_golongan_akhir` varchar(100) NOT NULL,
  `masa_kerja_jabatan` varchar(20) NOT NULL,
  `masa_kerja_jabatan_awal` varchar(100) NOT NULL,
  `masa_kerja_jabatan_akhir` varchar(100) NOT NULL,
  `tmt_jabatan` varchar(20) NOT NULL,
  `bahasa` varchar(128) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `gambar` varchar(255) NOT NULL,
  `iat` date NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`nip`, `niplama`, `nama_lengkap`, `email`, `password`, `gelar_depan`, `gelar_belakang`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `golongan_darah`, `rhesus`, `status_pernikahan`, `status_kepegawaian`, `jenis_kepegawaian`, `kedudukan_kepegawaian`, `tmt_cpns`, `tanggal_sk_cpns`, `no_sk_cpns`, `tmt_pns`, `tanggal_sk_pns`, `no_sk_pns`, `jenis_jabatan`, `id_pangkat`, `jenis_pangkat`, `tmt_jenis_pangkat`, `eselon`, `satuan_kerja`, `unit_kerja`, `subid_subag`, `nama_jabatan`, `masa_kerja_total`, `masa_kerja_total_awal`, `masa_kerja_total_akhir`, `masa_kerja_golongan`, `masa_kerja_golongan_awal`, `masa_kerja_golongan_akhir`, `masa_kerja_jabatan`, `masa_kerja_jabatan_awal`, `masa_kerja_jabatan_akhir`, `tmt_jabatan`, `bahasa`, `status`, `gambar`, `iat`, `uat`) VALUES
('196703241993032000', '', 'Himawan Sandhi, s.t.', 'ja@fmsail.com', '$2y$10$6sm8RpqzYp.MkicgIanUIekGAbu3e243ZY.hJK08UHohwdDnCgpV.', '', '', 'Palu', '24/11/1955', 'wanita', 'Buddha', 'O', 'Positif', 'menikah', 'jomblooo1', 'Pegawai Negeri Sipil Daerah', 'Tugas Belajar', '', '', '', '', '', '', 'Struktural', '3', 'Juru - I c', '01/01/2019', 'III.a', 'DINAS KESEHATAN', 'UPTD PUSKESMAS WANGI-WANGI SELATAN', '', 'Inspektur Pembantu', '', '', '', '', '', '', '', '', '', '01/04/2020', '', '1', '61a03ae952efadee2f91fb551ced2764.jpg', '2020-04-08', '2020-04-07 16:24:59'),
('198008022010012021', '', 'MISRAWATI', '', '$2y$10$ctyVLYdBsIgu0w67eaymzOISRCtcHIWfnLsGoon85Hm3l89nXhfr6', '', 'AMG', 'LANDE', '02/08/1980', 'wanita', 'Islam', 'A', 'Tidak Tahu', 'menikah', 'PNS', 'Pegawai Negeri Sipil Daerah', 'Perpanjangan CLTN', '', '', '', '', '', '', 'Fungsional Tertentu', '95896712', 'Penata rias - III c', '31/03/2020', 'IV.b', 'DINAS KESEHATAN', 'UPTD PUSKESMAS WANGI-WANGI SELATAN', '', 'NUTRISIONIS PELAKSANA LANJUTAN', '', '', '', '', '', '', '', '', '', '01/10/2017', '', '1', '0f105b9660e2d800d295a0d46396cffd.jpg', '2020-03-31', '2020-03-31 05:06:26'),
('198206012010012013', '', 'pegawai pegawai pegawai', 'pegawai@pegawai.com', '$2y$10$4IiLvvmnPvhJUkRDrzBGsuiC8sV.cUmbwC6YaUK36wFhHv1P0hbV6', 'drg.', 's.t.', 'mamamujusa', '09/09/2019', 'pria', 'Buddha', 'A', 'Positif', 'menikah', 'Pensiun', 'Pegawai Negeri Sipil Daerah', 'Penerimaan Uang Tunggu', '', '', '', '', '', '', 'Fungsional Umum', '95896714', 'Pembina Utama Muda - IV c', '06/11/2020', 'Non-Eselon', 'DINAS KESEHATAN', 'SEKSI KESEHATAN KELUARGA DAN GIZI MASYARAKAT', '', 'PENGADMINISTRASI KESEHATAN', '', '', '', '', '', '', '', '', '', '10/03/2020', '', '1', 'ea337ff6296ea25ac590043643beaf24.jpg', '2020-03-31', '2020-03-31 10:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `data_pendidikan`
--

CREATE TABLE `data_pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `nama_pendidikan` varchar(30) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_pendidikan`
--

INSERT INTO `data_pendidikan` (`id_pendidikan`, `nama_pendidikan`, `iat`, `uat`) VALUES
(2, 'SMP', '2017-08-26 00:00:00', '2020-03-11 10:02:39'),
(3, 'SMA', '2017-08-31 00:00:00', '2020-03-21 14:02:47'),
(4, 'D-I', '2017-09-29 00:00:00', '2018-01-06 15:45:16'),
(5, 'D-II', '2017-09-29 00:00:00', '2018-01-06 15:45:25'),
(6, 'D-III', '2017-09-29 00:00:00', '2018-01-06 15:45:39'),
(7, 'D-IV', '2017-09-29 00:00:00', '2019-05-18 00:40:38'),
(8, 'S1/D-IV', '2017-09-29 00:00:00', '2018-01-10 04:14:46'),
(9, 'S2', '2017-09-29 00:00:00', '2017-09-29 01:14:57'),
(10, 'S3', '2017-09-29 00:00:00', '2019-05-06 04:02:39');

-- --------------------------------------------------------

--
-- Table structure for table `data_provinsi`
--

CREATE TABLE `data_provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(50) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_provinsi`
--

INSERT INTO `data_provinsi` (`id_provinsi`, `nama_provinsi`, `iat`, `uat`) VALUES
(2, 'Bangka Belitung', '2019-05-06 00:00:00', '2019-05-06 03:50:06'),
(3, 'Banten', '2019-05-06 00:00:00', '2019-05-06 03:50:06'),
(4, 'Bengkulu', '2019-05-06 00:00:00', '2019-05-06 03:50:07'),
(5, 'DI Yogyakarta', '2019-05-06 00:00:00', '2019-05-06 03:50:07'),
(6, 'DKI Jakarta', '2019-05-06 00:00:00', '2019-05-06 03:50:07'),
(7, 'Gorontalo', '2019-05-06 00:00:00', '2019-05-06 03:50:08'),
(8, 'Jambi', '2019-05-06 00:00:00', '2019-05-06 03:50:09'),
(9, 'Jawa Barat', '2019-05-06 00:00:00', '2019-05-06 03:50:09'),
(10, 'Jawa Tengah', '2019-05-06 00:00:00', '2019-05-06 03:50:09'),
(11, 'Jawa Timur', '2019-05-06 00:00:00', '2019-05-06 03:50:10'),
(12, 'Kalimantan Barat', '2019-05-06 00:00:00', '2019-05-06 03:50:10'),
(13, 'Kalimantan Selatan', '2019-05-06 00:00:00', '2019-05-06 03:50:10'),
(14, 'Kalimantan Tengah', '2019-05-06 00:00:00', '2019-05-06 03:50:10'),
(15, 'Kalimantan Timur', '2019-05-06 00:00:00', '2019-05-06 03:50:11'),
(16, 'Kalimantan Utara', '2019-05-06 00:00:00', '2019-05-06 03:50:11'),
(17, 'Kepulauan Riau', '2019-05-06 00:00:00', '2019-05-06 03:50:11'),
(18, 'Lampung', '2019-05-06 00:00:00', '2019-05-06 03:50:11'),
(19, 'Maluku', '2019-05-06 00:00:00', '2019-05-06 03:50:12'),
(20, 'Maluku Utara', '2019-05-06 00:00:00', '2019-05-06 03:50:12'),
(21, 'Nanggroe Aceh Darussalam (NAD)', '2019-05-06 00:00:00', '2019-05-06 03:50:12'),
(22, 'Nusa Tenggara Barat (NTB)', '2019-05-06 00:00:00', '2019-05-06 03:50:12'),
(23, 'Nusa Tenggara Timur (NTT)', '2019-05-06 00:00:00', '2019-05-06 03:50:13'),
(24, 'Papua', '2019-05-06 00:00:00', '2019-05-06 03:50:13'),
(25, 'Papua Barat', '2019-05-06 00:00:00', '2019-05-06 03:50:13'),
(26, 'Riau', '2019-05-06 00:00:00', '2019-05-06 03:50:13'),
(27, 'Sulawesi Barat', '2019-05-06 00:00:00', '2019-05-06 03:50:14'),
(28, 'Sulawesi Selatan', '2019-05-06 00:00:00', '2019-05-06 03:50:14'),
(29, 'Sulawesi Tengah', '2019-05-06 00:00:00', '2019-05-06 03:50:15'),
(30, 'Sulawesi Tenggara', '2019-05-06 00:00:00', '2019-05-06 03:50:15'),
(31, 'Sulawesi Utara', '2019-05-06 00:00:00', '2019-05-06 03:50:15'),
(32, 'Sumatera Barat', '2019-05-06 00:00:00', '2019-05-06 03:50:15'),
(33, 'Sumatera Selatan', '2019-05-06 00:00:00', '2019-05-06 03:50:16'),
(34, 'Sumatera Utara', '2019-05-06 00:00:00', '2019-05-06 03:50:16');

-- --------------------------------------------------------

--
-- Table structure for table `data_satker`
--

CREATE TABLE `data_satker` (
  `id_satker` int(11) NOT NULL,
  `nama_satker` varchar(255) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_satker`
--

INSERT INTO `data_satker` (`id_satker`, `nama_satker`, `iat`, `uat`) VALUES
(1, 'SEKRETARIAT DAERAH', '2017-11-09 00:00:00', '2017-11-09 06:36:23'),
(2, 'SEKRETARIAT DPRD', '2017-11-09 00:00:00', '2017-11-09 06:36:52'),
(3, 'INSPEKTORAT DAERAH', '2017-11-09 00:00:00', '2017-11-09 06:36:52'),
(4, 'DINAS PENDIDIKAN DAN KEBUDAYAAN', '2017-11-09 00:00:00', '2017-11-09 06:36:52'),
(5, 'DINAS KESEHATAN', '2017-11-09 00:00:00', '2018-01-03 06:01:22'),
(6, 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG', '2017-11-09 00:00:00', '2017-11-09 06:36:52'),
(7, 'DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN', '2017-11-09 00:00:00', '2018-01-02 13:27:47'),
(8, 'SATUAN POLISI PAMONG PPRAJA DAN PEMADAM KEBAKARAN', '2017-11-09 00:00:00', '2017-11-09 06:36:53'),
(9, 'DINAS SOSIAL', '2017-11-09 00:00:00', '2017-11-09 06:36:53'),
(10, 'DINAS KOPERASI, USAHA KECIL MENENGAH DAN TENAGA KERJA', '2017-11-09 00:00:00', '2017-11-09 06:36:53'),
(11, 'DINAS PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN ANAK, PEMBERDAYAAN MASYARAKAT DAN DESA', '2017-11-09 00:00:00', '2017-11-09 06:36:53'),
(12, 'DINAS KETAHANAN PANGAN', '2017-11-09 00:00:00', '2017-11-09 06:36:53'),
(13, 'DINAS LINGKUNGAN HIDUP', '2017-11-09 00:00:00', '2017-11-09 06:36:53'),
(14, 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', '2017-11-09 00:00:00', '2017-11-09 06:36:53'),
(15, 'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA', '2017-11-09 00:00:00', '2017-11-09 06:36:53'),
(16, 'DINAS PERHUBUNGAN', '2017-11-09 00:00:00', '2017-11-09 06:36:53'),
(17, 'DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN', '2017-11-09 00:00:00', '2017-11-09 06:36:53'),
(18, 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', '2017-11-09 00:00:00', '2017-11-09 06:36:53'),
(19, 'DINAS KEPEMUDAAN DAN OLAHRAGA', '2017-11-09 00:00:00', '2018-01-03 05:22:11'),
(20, 'DINAS PERPUSTAKAAN DAN KEARSIPAN', '2017-11-09 00:00:00', '2017-11-09 06:36:53'),
(21, 'DINAS KELAUTAN DAN PERIKANAN', '2017-11-09 00:00:00', '2017-11-09 06:36:53'),
(22, 'DINAS PARIWISATA', '2017-11-09 00:00:00', '2017-11-09 06:36:53'),
(23, 'DINAS PERTANIAN', '2017-11-09 00:00:00', '2018-01-07 08:39:45'),
(24, 'DINAS PERINDSUTRIAN DAN PERDAGANGAN', '2017-11-09 00:00:00', '2017-11-09 06:36:53'),
(25, 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', '2017-11-09 00:00:00', '2017-11-09 06:36:53'),
(26, 'BADAN PENGELOLA PAJAK DAN RETRIBUSI DAERAH', '2017-11-09 00:00:00', '2017-11-09 06:36:53'),
(27, 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH', '2017-11-09 00:00:00', '2017-11-09 06:36:53'),
(28, 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', '2017-11-09 00:00:00', '2020-03-11 10:04:30'),
(30, 'BADAN PENANGGULANGAN BENCANA DAERAH', '2017-11-09 00:00:00', '2018-01-02 06:48:43'),
(31, 'RUMAH SAKIT UMUM DAERAH', '2017-11-09 00:00:00', '2017-11-09 06:36:53'),
(32, 'KECAMATAN WANGI-WANGI', '2017-11-09 00:00:00', '2017-12-10 15:31:01'),
(33, 'SEKRETARIAT DEWAN PENGURUS KORPRI', '2017-11-09 00:00:00', '2017-11-09 06:37:05'),
(34, 'KECAMATAN WANGI-WANGI SELATAN', '2017-12-10 00:00:00', '2017-12-10 15:56:51'),
(36, 'KECAMATAN KALEDUPA', '2017-12-10 00:00:00', '2017-12-10 15:56:51'),
(37, 'KECAMATAN KALEDUPA SELATAN', '2017-12-10 00:00:00', '2017-12-10 15:56:51'),
(38, 'KECAMATAN TOMIA', '2017-12-10 00:00:00', '2017-12-10 15:56:51'),
(39, 'KECAMATAN TOMIA TIMUR', '2017-12-10 00:00:00', '2017-12-10 15:56:51'),
(40, 'KECAMATAN BINONGKO', '2017-12-10 00:00:00', '2017-12-10 15:56:51'),
(41, 'KECAMATAN TOGO BINONGKO', '2017-12-10 00:00:00', '2017-12-10 15:56:51');

-- --------------------------------------------------------

--
-- Table structure for table `data_statuspegawai`
--

CREATE TABLE `data_statuspegawai` (
  `id_statuspegawai` varchar(50) NOT NULL,
  `nama_statuspegawai` varchar(50) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_statuspegawai`
--

INSERT INTO `data_statuspegawai` (`id_statuspegawai`, `nama_statuspegawai`, `iat`, `uat`) VALUES
('12576891', 'Pensiun', '2017-10-11 00:00:00', '2019-05-06 03:50:36'),
('39376450', 'PNS', '2017-10-11 00:00:00', '2019-05-06 03:50:36'),
('63618549', 'ABRI', '2017-10-11 00:00:00', '2019-05-06 03:50:36'),
('93056491', 'Calon PNS', '2017-10-11 00:00:00', '2019-05-06 03:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `data_unit`
--

CREATE TABLE `data_unit` (
  `id_unit` varchar(50) NOT NULL,
  `nama_satker` varchar(256) NOT NULL,
  `nama_unit` varchar(256) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_unit`
--

INSERT INTO `data_unit` (`id_unit`, `nama_satker`, `nama_unit`, `iat`, `uat`) VALUES
('10154679', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('10263514', 'SEKRETARIAT DAERAH', 'SUB BAGIAN KESEJAHTERAAN DAN PEMBERDAYAAN MASYARAKAT', '2018-01-01 00:00:00', '2018-01-05 07:59:47'),
('10358691', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'KEPALA BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('10429315', 'DINAS PERHUBUNGAN', 'SEKSI PRASARANA DARAT', '2019-01-04 00:00:00', '2019-01-04 00:34:40'),
('10517862', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN SATAP PALEA', '2018-02-08 00:00:00', '2018-02-08 06:46:55'),
('10574698', 'KECAMATAN WANGI-WANGI', 'SEKSI PEMERINTAHAN DAN PELAYANAN UMUM KELURAHAN PO', '2018-01-03 00:00:00', '2017-11-09 06:36:53'),
('10621937', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN TEEMOANE', '2018-02-08 00:00:00', '2018-02-08 07:02:30'),
('10648739', 'DINAS PERINDSUTRIAN DAN PERDAGANGAN', 'BIDANG PERINDUSTRIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('10719258', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMP NEGERI 3 BINONGKO', '2019-05-15 00:00:00', '2019-05-15 02:06:22'),
('10751286', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN 2 TOMIA', '2018-02-08 00:00:00', '2018-02-08 06:45:53'),
('10857931', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 1 TAIPABU', '2018-02-08 00:00:00', '2018-02-08 07:09:54'),
('10946712', 'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA', 'SEKSI  DATA DAN INFORMASI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('11024356', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK MUTIARA SOWA', '2018-08-16 00:00:00', '2018-08-16 02:38:11'),
('11372805', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK DHARMAWANITA POPALIA TOGOBINONGKO', '2018-08-16 00:00:00', '2018-08-16 02:37:55'),
('11389764', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK MAWAR KALEDUPA SELATAN', '2018-08-16 00:00:00', '2018-08-16 01:57:33'),
('11467238', 'BADAN PENANGGULANGAN BENCANA DAERAH', 'SUB BAGIAN UMUM DAN TATA USAHA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('11574960', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'SUB BIDANG PELAPORAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('11675928', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN LAMANGGAU', '2018-02-08 00:00:00', '2018-02-08 07:02:59'),
('11806754', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN SATAP WASUMANDAALA', '2018-02-08 00:00:00', '2018-02-08 06:42:27'),
('11876450', 'DINAS KESEHATAN', 'UPTD PUSKESMAS BINONGKO', '2018-02-08 00:00:00', '2018-02-08 06:28:46'),
('11946205', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'PENGAWAS SEKOLAH', '2018-10-03 00:00:00', '2018-10-03 07:36:14'),
('11953267', 'DINAS KOPERASI, USAHA KECIL MENENGAH DAN TENAGA KERJA', 'SEKSI PEMBERDAYAAN DAN PENGEMBANGAN KOPERASI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('11984530', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'SEKSI INFRATRUKTUR DAN KEMITRAAN OLAHRAGA', '2018-01-03 00:00:00', '2017-11-09 06:36:53'),
('12074189', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN  WAGINOPO', '2018-02-08 00:00:00', '2018-02-08 06:49:38'),
('12134057', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK. DHARMAWANITA PALAHIDU BINONGKO', '2018-08-16 00:00:00', '2018-08-16 02:07:23'),
('12570918', 'KECAMATAN WANGI-WANGI SELATAN', 'SEKRETARIAT KECAMATAN WANGI-WANGI SELATAN', '2018-12-26 00:00:00', '2018-12-26 02:13:22'),
('12571643', 'SEKRETARIAT DAERAH', 'BAGIAN UMUM', '2018-01-01 00:00:00', '2017-11-09 06:36:53'),
('12703195', 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH', 'SUB BAGIAN PROGRAM', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('12703956', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'UPTD DIKBUD KECAMATAN KALEDUPA', '2018-02-08 00:00:00', '2018-02-08 06:32:18'),
('12916738', 'DINAS PERTANIAN', 'SEKSI PENGOLAHAN DAN PEMASARAN HASIL TANAMAN PANGA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('12960185', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'UPTD DIKBUD KECAMATAN KALEDUPA SELATAN', '2018-02-08 00:00:00', '2018-02-08 06:32:34'),
('13056497', 'DINAS KELAUTAN DAN PERIKANAN', 'SUB BAGIAN  UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('13519046', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN PEROPA', '2018-02-08 00:00:00', '2018-02-08 07:00:17'),
('13598017', 'KECAMATAN TOMIA TIMUR', 'Kelurahan Patipelong', '2019-02-22 00:00:00', '2019-02-21 23:52:19'),
('13745918', 'SEKRETARIAT DAERAH', 'SUB BAGIAN ADMINISTRASI  LAYANAN PENGADAAN SECARA ', '2018-01-01 00:00:00', '2017-11-09 06:36:53'),
('13974052', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK TUNAS BAHARI TOMIA', '2018-08-16 00:00:00', '2018-08-16 02:00:55'),
('14095862', 'BADAN PENGELOLA PAJAK DAN RETRIBUSI DAERAH', 'SUB BIDANG  PENAGIHAN PAJAK BUMI DAN BANGUNAN, PER', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('14102976', 'DINAS PERHUBUNGAN', 'KEPALA DINAS PERHUBUNGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('14128730', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 2 MANDATI I', '2018-02-08 00:00:00', '2018-02-08 06:55:49'),
('14160782', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'BIDANG PEMBINAAN PAUD DAN PENDIDIKAN NON-FORMAL', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('14219586', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK DHARMAWANITA LANGGE', '2018-08-16 00:00:00', '2018-08-16 01:50:30'),
('14230689', 'DINAS KELAUTAN DAN PERIKANAN', 'KEPALA DINAS KELAUTAN DAN PERIKANAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('14319672', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'SUB BIDANG PENGEMBANGAN SUMBER DAYA APARATUR', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('14615973', 'DINAS KELAUTAN DAN PERIKANAN', 'SEKSI  PERIZINAN PERIKANAN TANGKAP DAN BUDIDAYA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('14708153', 'RUMAH SAKIT UMUM DAERAH', 'SUB BAGIAN PROGRAM', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('14763950', 'DINAS SOSIAL', 'BIDANG PERLINDUNGAN DAN JAMINAN SOSIAL', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('14781205', 'SEKRETARIAT DAERAH', 'SUB BAGIAN ASISTEN PEREKONOMIAN DAN PEMBANGUNAN', '2017-12-11 00:00:00', '2017-11-09 06:36:53'),
('15024671', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'KEPALA DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('15198704', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN SATAP TANOWALI', '2018-02-08 00:00:00', '2018-02-08 06:48:01'),
('15280491', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK MULIA KALEDUPA', '2018-08-16 00:00:00', '2018-08-16 01:44:50'),
('15380719', 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH', 'BIDANG EKONOMI DAN PEMBANGUNAN MANUSIA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('15396142', 'DINAS PERINDSUTRIAN DAN PERDAGANGAN', 'BIDANG PERDAGANGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('15672398', 'BADAN PENANGGULANGAN BENCANA DAERAH', 'SUB BIDANG PENCEGAHAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('15761089', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN 1 WANGI-WANGI SELATAN', '2018-02-08 00:00:00', '2018-02-08 06:43:19'),
('15789304', 'DINAS PERTANIAN', 'SEKSI PRODUKSI PERKEBUNAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('15810627', 'DINAS PERINDSUTRIAN DAN PERDAGANGAN', 'SEKSI PEMBINAAN PELAKU USAHA PERDAGANGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('15826917', 'DINAS PARIWISATA', 'SEKSI PENELITIAN DAN PENGEMBANGAN ', '2018-01-02 00:00:00', '2018-01-05 07:58:18'),
('16023759', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'SEKSI PELAYANAN DAN PENDAFTARAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('16148720', 'SEKRETARIAT DAERAH', 'ASISTEN PEREKONOMIAN DAN PEMBANGUNAN', '2017-12-11 00:00:00', '2017-11-09 06:36:53'),
('16325908', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'SUB BIDANG PERENCANAAN PEGAWAI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('16372591', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK KARTIKA PALAHIDU', '2018-08-16 00:00:00', '2018-08-16 02:08:17'),
('16379285', 'DINAS KESEHATAN', 'SEKSI KESEHATAN KELUARGA DAN GIZI MASYARAKAT', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('16420973', 'DINAS PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN ANAK, PEMBERDAYAAN MASYARAKAT DAN DESA', 'SEKSI PENGEMBANGAN PARTISIPATIF MASYARAKAT, USAHA ', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('16542301', 'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA', 'SEKSI  PEMBINAAN DAN PENINGKATAN KESERTAAN BERKELUARGA', '2018-01-02 00:00:00', '2018-01-05 08:00:35'),
('16580417', 'DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN', 'BIDANG KOMUNIKASI DAN INFORMATIKA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('16742598', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 1 POPALIA', '2018-02-08 00:00:00', '2018-02-08 07:11:02'),
('16754102', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SEKSI KURIKULUM DAN PESERTA DIDIK BIDANG PEMBINAAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('16974205', 'DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN', 'SEKSI PENDATAAN DAN PERENCANAAN KAWASAN PERMUKIMAN', '2019-08-22 00:00:00', '2019-08-22 06:46:40'),
('17208365', 'KECAMATAN TOMIA', 'SEKRETARIAT KECAMATAN', '2019-08-21 00:00:00', '2019-08-20 23:41:07'),
('17250943', 'DINAS PERTANIAN', 'SEKSI BENIH/BIBIT DAN PRODUKSI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('17258960', 'DINAS KETAHANAN PANGAN', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('17298463', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN ONE SALIBU', '2018-02-08 00:00:00', '2018-02-08 06:51:16'),
('17321896', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 1 WASUMANDALA', '2018-02-08 00:00:00', '2018-02-08 06:49:18'),
('17369052', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', 'SEKSI  TATA KELOLA DAN SUMBER DAYA MANUSIA TEKNOLO', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('17513489', 'DINAS KESEHATAN', 'UPTD PUSKESMAS WANGI-WANGI', '2018-02-08 00:00:00', '2018-02-08 06:27:13'),
('17514239', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN 3 KALEDUPA', '2018-02-08 00:00:00', '2018-02-08 06:45:11'),
('17532168', 'KECAMATAN BINONGKO', 'SEKSI PELAYANAN UMUM', '2019-08-19 00:00:00', '2019-08-19 00:36:01'),
('17689140', 'KECAMATAN KALEDUPA SELATAN', 'KECAMATAN KALEDUPA SELATAN', '2018-11-21 00:00:00', '2018-11-21 06:13:05'),
('17905648', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN WATUKOILA', '2018-02-08 00:00:00', '2018-02-08 06:59:54'),
('17913564', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'SUB BIDANG ADMINISTRASI ANGGARAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('18016593', 'RUMAH SAKIT UMUM DAERAH', 'BAGIAN TATA USAHA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('18052347', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG', 'SEKSI PENGENDALIAN PEMANFAATAN RUANG', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('18576423', 'SEKRETARIAT DAERAH', 'SUB BAGIAN PENINGKATAN  KINERJA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('18673429', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN SATAP KOLO', '2018-02-08 00:00:00', '2018-02-08 06:44:31'),
('18701264', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 1 WANCI', '2018-02-08 00:00:00', '2018-02-08 06:52:23'),
('18790416', 'DINAS SOSIAL', 'BIDANG PEMBERDAYAAN SOSIAL DAN PENANGANAN FAKIR MI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('18904236', 'SEKRETARIAT DEWAN PENGURUS KORPRI', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('18964375', 'DINAS PERTANIAN', 'SEKSI KELEMBAGAAN DAN KETENAGAAN PENYULUHAN PERTANIAN', '2018-01-02 00:00:00', '2018-01-05 08:06:50'),
('19015237', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'SUB BIDANG PERENCANAAN ANGGARAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('19028143', 'DINAS PARIWISATA', 'SEKSI PENGEMBANGAN SDM KEPARIWISATAAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('19078264', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 3 PONGO', '2018-02-08 00:00:00', '2018-02-08 06:51:38'),
('19154782', 'DINAS PERPUSTAKAAN DAN KEARSIPAN', 'SEKSI PEMBINAAN PERANGKAT DAERAH', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('19203546', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'PEMROSES PENSIUN', '2018-03-14 00:00:00', '2018-03-14 03:00:44'),
('19367810', 'DINAS KETAHANAN PANGAN', 'SUB BAGIAN PROGRAM, KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('19402768', 'SEKRETARIAT DAERAH', 'SUB BAGIAN RUMAH TANGGA DAN PENGHUBUNG', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('19432875', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK MEKAR SOMBANO KALEDUPA', '2018-08-16 00:00:00', '2018-08-16 01:44:33'),
('19608521', 'PERUMAHAN DAN KAWASAN PERMUKIMAN', 'SEKSI PENDATAAN DAN PERENCANAAN PERUMAHAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('19741683', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-03 00:00:00', '2017-11-09 06:36:53'),
('19752841', 'BADAN PENGELOLA PAJAK DAN RETRIBUSI DAERAH', 'BIDANG  PENAGIHAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('19824071', 'DINAS PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN ANAK, PEMBERDAYAAN MASYARAKAT DAN DESA', 'SEKSI BINA ADMINISTRASI KELEMBAGAAN, PENGEMBANGAN,', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('19834562', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 3 USUKU', '2018-02-08 00:00:00', '2018-02-08 07:06:41'),
('20137842', 'DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN', 'BIDANG STATISTIK DAN PELAPORAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('20156723', 'SEKRETARIAT DAERAH', 'SUB BAGIAN PEMERINTAHAN', '2018-01-01 00:00:00', '2017-11-09 06:36:53'),
('20192473', 'BADAN KESATUAN BANGSA DAN POLITIK', 'SUB BIDANG IMPLEMENTASI KEBIJAKAN PUBLIK DAN PENDIDIKAN', '2018-01-02 00:00:00', '2018-01-05 08:03:51'),
('20194826', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK AL-ANFAL WAITII BARAT', '2018-08-16 00:00:00', '2018-08-16 02:01:17'),
('20315842', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'SEKSI PENGEMBANGAN PEMUDA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('20419328', 'DINAS SOSIAL', 'BIDANG PEMBERDAYAAN SOSIAL DAN PENANGANAN FAKIR MI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('20492658', 'DINAS PERINDSUTRIAN DAN PERDAGANGAN', 'SUB BAGIAN PROGRAM, KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('20495627', 'INSPEKTORAT DAERAH', 'SUB BAGIAN EVALUASI DAN PELAPORAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('20532971', 'SEKRETARIAT DPRD', 'BAGIAN LEGALISASI DAN PERSIDANGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('20647295', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'PEMROSES MUTASI KEPEGAWAIAN', '2018-03-14 00:00:00', '2018-03-14 03:03:05'),
('20671984', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN SATAP MELAI ONE', '2018-02-08 00:00:00', '2018-02-08 06:44:11'),
('20678394', 'DINAS PERPUSTAKAAN DAN KEARSIPAN', 'SUB BAGIAN KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('20695741', 'RUMAH SAKIT UMUM DAERAH', 'BIDANG PENUNJANG MEDIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('20752148', 'DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN', 'SEKSI PENGELOLAAN INFORMASI DAN SUMBER DAYA KOMUNI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('20869543', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG', 'SUB BAGIAN PROGRAM, KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('21027483', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN SATAP BAJOSAMPELA', '2018-02-08 00:00:00', '2018-02-08 06:46:31'),
('21084976', 'DINAS PERHUBUNGAN', 'SEKSI  PEMADUAN MODA DAN TEKNOLOGI PERHUBUNGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('21390458', 'RUMAH SAKIT UMUM DAERAH', 'SEKSI PEAYANAN RADIOLOGI, FARMASI, GIZI DAN REHABI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('21450962', 'DINAS PERTANIAN', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('21476892', 'KECAMATAN WANGI-WANGI SELATAN', 'SEKSI PEMERINTAHAN', '2019-08-21 00:00:00', '2019-08-21 02:34:03'),
('21684029', 'DINAS LINGKUNGAN HIDUP', 'SEKSI  PENGADUAN DAN PENYELESAIAN SENGKETA LINGKUN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('21723046', 'DINAS PARIWISATA', 'SEKSI INVESTASI DAN INDUSTRI PARIWISATA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('21847256', 'SATUAN POLISI PAMONG PPRAJA DAN PEMADAM KEBAKARAN', 'SEKSI PEMBINAAN, PENGAWASAN DAN PENYULUHAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('21983457', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN WAKALARA', '2018-02-08 00:00:00', '2018-02-08 06:50:28'),
('22071534', 'SEKRETARIAT DAERAH', 'SUB BAGIAN ADMINISTRASI PENGADAAN BARANG/ JASA PEM', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('22108457', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK MEKAR WANGI-WANGI SELATAN', '2018-08-16 00:00:00', '2018-08-16 01:41:51'),
('22401539', 'SEKRETARIAT DAERAH', 'ASISTEN PEMERINTAHAN DAN KESEJAHTERAAN RAKYAT', '2017-12-11 00:00:00', '2017-11-09 06:36:53'),
('22469581', 'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA', 'SEKSI  BINA KETAHANAN REMAJA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('22601978', 'DINAS KOPERASI, USAHA KECIL MENENGAH DAN TENAGA KERJA', 'SEKSI PEMBINAAN HUBUNGAN INDUSTRIAL DAN JAMINAN SO', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('22859607', 'KECAMATAN BINONGKO', 'KELURAHAN RUKUWA', '2019-01-14 00:00:00', '2019-01-14 01:01:27'),
('22943081', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'KASUBAG PROGRAM', '2019-05-13 00:00:00', '2019-05-13 03:27:28'),
('23029817', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', 'SEKSI  INOVASI PELAYANAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('23274198', 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH', 'SUB BIDANG SUMBER DAYA ALAM', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('23417568', 'SEKRETARIAT DAERAH', 'SUB BAGIAN KERJA SAMA ANTAR LEMBAGA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('23459102', 'DINAS PARIWISATA', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('23540781', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'PRANATA KOMPUTER', '2018-08-29 00:00:00', '2018-08-29 06:59:12'),
('23571946', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN KOLLO', '2018-02-08 00:00:00', '2018-02-08 06:54:18'),
('23617259', 'DINAS PARIWISATA', 'SEKSI PENGEMBANGAN CITRA DAN PROMOSI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('23685047', 'KECAMATAN KALEDUPA', 'KELURAHAN AMBEUA', '2019-08-21 00:00:00', '2019-08-21 02:21:49'),
('23791684', 'DINAS PERPUSTAKAAN DAN KEARSIPAN', 'BIDANG PENGEMBANGAN PERPUSTAKAAN DAN PEMBUDAYAAN K', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('23810279', 'DINAS PERHUBUNGAN', 'SEKSI  PENGUJIAN SARANA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('23827405', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', 'SEKSI  PINDAH DATANG PENDUDUK', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('23840719', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'SUB BIDANG PEMBINAAN DISIPLIN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('23849610', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 2 WAHA', '2018-02-08 00:00:00', '2018-02-08 06:51:59'),
('23862419', 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH', 'SUB BIDANG EVALUASI DAN PELAPORAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('23894507', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'SEKSI KEBIJAKAN DAN PENYULUHAN LAYANAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('23896047', 'DINAS KOPERASI, USAHA KECIL MENENGAH DAN TENAGA KERJA', 'BIDANG KELEMBAGAAN DAN PENGAWASAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('23914760', 'RUMAH SAKIT UMUM DAERAH', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('24023957', 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('24218603', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 1 TIMU', '2018-02-08 00:00:00', '2018-02-08 07:07:31'),
('24250768', 'DINAS PERPUSTAKAAN DAN KEARSIPAN', 'SEKSI PEMBINAAN PERUSAHAAN, ORMAS/ORPOL, MASYARAKA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('24281503', 'DINAS KELAUTAN DAN PERIKANAN', 'BIDANG  PERIZINAN DAN PENGELOLAAN TEMPAT PELELANGA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('24608517', 'DINAS PARIWISATA', 'SEKSI PEMBERDAYAAN MASYARAKAT DAN EKOWISATA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('24891672', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK. DHARMAWANITA BALASUNA KALEDUPA', '2018-08-16 00:00:00', '2018-08-16 01:46:11'),
('24962705', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN ANTAPIA', '2018-02-08 00:00:00', '2018-02-08 06:51:30'),
('25276389', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('25384627', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'SUB BIDANG PROMOSI JABATAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('25437619', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'SUB BAGIAN KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('25610278', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK POLA SYARIAH WANGI-WANGI SELATA', '2018-08-16 00:00:00', '2018-08-16 01:42:13'),
('25810692', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SEKSI PENDIDIK DAN TENAGA KEPENDIDIKAN BIDANG PEMB', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('25831706', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN WAKARUMENDE', '2018-02-08 00:00:00', '2018-02-08 07:08:35'),
('26143857', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', 'SEKSI  KERJA SAMA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('26172954', 'BADAN PENANGGULANGAN BENCANA DAERAH', 'SUB BIDANG SARANA DAN PRASARANA DARURAT DAN LOGIST', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('26213475', 'KECAMATAN WANGI-WANGI', 'SEKSI PELAYANAN UMUM', '2019-01-04 00:00:00', '2019-01-04 00:52:17'),
('26284913', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 1 OLLO', '2018-02-08 00:00:00', '2018-02-08 06:59:30'),
('26372591', 'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('26395847', 'DINAS KOPERASI, USAHA KECIL MENENGAH DAN TENAGA KERJA', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('26473158', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('26489017', 'SATUAN POLISI PAMONG PPRAJA DAN PEMADAM KEBAKARAN', 'BIDANG PENEGAKAN PERUNDANG-UNDANGAN DAERAH', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('26521830', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG', 'SEKSI BINA JASA KONSTRUKSI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('26531748', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 1 USUKU', '2018-02-08 00:00:00', '2018-02-08 07:06:54'),
('26705183', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN HAKA', '2018-02-08 00:00:00', '2018-02-08 07:11:39'),
('26745193', 'SEKRETARIAT DAERAH', 'SUB BAGIAN PRODUK HUKUM DAERAH', '2018-01-01 00:00:00', '2017-11-09 06:36:53'),
('26820941', 'DINAS KESEHATAN', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('26891702', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN 4 BINONGKO', '2019-09-17 00:00:00', '2019-09-17 07:03:14'),
('26921340', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'SUB BAGIAN PROGRAM', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('26982417', 'BADAN KESATUAN BANGSA DAN POLITIK', 'SUB BIDANG KELEMBAGAAN PARTAI POLITIK DAN FASILITA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('27081624', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN LENTEA', '2018-02-08 00:00:00', '2018-02-08 07:00:30'),
('27094325', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN 5 WANGI-WANGI', '2018-02-08 00:00:00', '2018-02-08 06:42:04'),
('27106329', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN SATAP RUNDUMA', '2018-02-08 00:00:00', '2018-02-08 06:47:49'),
('27120463', 'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('27245189', 'DINAS PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN ANAK, PEMBERDAYAAN MASYARAKAT DAN DESA', 'BIDANG PERLINDUNGAN HAK PEREMPUAN DAN&amp;PERLINDU', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('27259180', 'BADAN PENGELOLA PAJAK DAN RETRIBUSI DAERAH', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('27356921', 'RUMAH SAKIT UMUM DAERAH', 'SEKSI PELAYANAN PATOLOGI KLINIS, ANATOMI, PELMUSAR', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('27531648', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK KUNCUP BAHARI TOMIA TIMUR', '2018-08-16 00:00:00', '2018-08-16 02:03:48'),
('27568910', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', 'BIDANG  PEMANFAATAN DATA DAN INOVASI PELAYANAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('27614289', 'DINAS KESEHATAN', 'UPTD PUSKESMAS WANGI-WANGI SELATAN', '2018-02-08 00:00:00', '2018-02-08 06:27:29'),
('28267340', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 1 PONGO KECAMATAN WANGI-WANGI', '2018-01-03 00:00:00', '2017-11-09 06:36:53'),
('28345967', 'RUMAH SAKIT UMUM DAERAH', 'BIDANG UPAYA KESEHATAN MASYARAKAT', '2019-09-16 00:00:00', '2019-09-16 03:24:24'),
('28359461', 'DINAS KELAUTAN DAN PERIKANAN', 'SEKSI  DATA, INFORMASI, PENELITIAN DAN TEKNOLOGI P', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('28369012', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'BENDAHARA PENGELURAN', '2018-03-14 00:00:00', '2018-03-14 03:08:00'),
('28439251', 'DINAS SOSIAL', 'SEKSI REHABILITASI SOSIAL ANAK DAN LANJUT USIA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('28647209', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK SYUHADA WANGI-WANGI SELATAN', '2018-08-16 00:00:00', '2018-08-16 01:40:19'),
('28974130', 'BADAN KESATUAN BANGSA DAN POLITIK', 'SUB BAGIAN TATA USAHA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('29036485', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK AL HUSNA TOMIA', '2018-08-16 00:00:00', '2018-08-16 02:01:44'),
('29037528', 'DINAS SOSIAL', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('29061342', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', 'SEKSI  PERUBAHAN STATUS ANAK, PEWARGANEGARAAN DAN ', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('29085674', 'DINAS PERHUBUNGAN', 'SUB BAGIAN  PROGRAM, KEUANGAN DAN PERLENGKANPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('29283501', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'BIDANG KEOLAHRAGAAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('29370486', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK.RA.NURUL FALAH', '2018-08-16 00:00:00', '2018-08-16 01:33:46'),
('29423587', 'DINAS LINGKUNGAN HIDUP', 'SEKSI  PENGELOLAAN LIMBAH BERBAHAYA DAN BERACUN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('29506217', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('29648507', 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH', 'SUB BIDANG PEKERJAAN UMUM', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('29826301', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 1 RUKUWA', '2018-02-08 00:00:00', '2018-02-08 07:10:11'),
('29864375', 'DINAS KELAUTAN DAN PERIKANAN', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('30173629', 'SEKRETARIAT DPRD', 'SUB BAGIAN VERIFIKASI DAN PERJALANAN DINAS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('30175239', 'DINAS PARIWISATA', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('30245178', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 2 MOLA UTARA', '2018-02-08 00:00:00', '2018-02-08 06:54:52'),
('30513486', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 1 MANDATI I', '2018-02-08 00:00:00', '2018-02-08 06:56:25'),
('30589172', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'SEKRETARIS DINAS', '2018-01-03 00:00:00', '2017-11-09 06:36:53'),
('30698532', 'BADAN KESATUAN BANGSA DAN POLITIK', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('30743685', 'BADAN KESATUAN BANGSA DAN POLITIK', 'SUB BIDANG PENANGANAN KONFLIK', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('30865271', 'DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN', 'SEKSI INFRASTRUKTUR TEKNOLOGI INFORMASI KOMUNIKASI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('30873194', 'DINAS PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN ANAK, PEMBERDAYAAN MASYARAKAT DAN DESA', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('30948635', 'DINAS KOPERASI, USAHA KECIL MENENGAH DAN TENAGA KERJA', 'SEKSI KELEMBAGAAN DAN PERIZINAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('31045937', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'UPTD DIKBUD KECAMATAN TOMIA TIMUR', '2018-02-08 00:00:00', '2018-02-08 06:32:52'),
('31238609', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN BAJO LOHOA', '2018-02-08 00:00:00', '2018-02-08 07:01:59'),
('31295860', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN SATAP BAJO LOHOA', '2018-02-08 00:00:00', '2018-02-08 06:47:16'),
('31329508', 'DINAS PERHUBUNGAN', 'Bidang Kepelabuhan dan Angkutan Pelayaran', '2019-01-04 00:00:00', '2019-01-03 23:45:56'),
('31495273', 'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA', 'SEKSI  BINA KETAHANAN KELUARGA BALITA, ANAK DAN US', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('31647829', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN BIRA', '2018-02-08 00:00:00', '2018-02-08 06:54:40'),
('31890374', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'BIDANG KEBUDAYAAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('32097154', 'DINAS KESEHATAN', 'UPTD PUSKESMAS POPALIA', '2018-02-08 00:00:00', '2018-02-08 06:28:57'),
('32148376', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG', 'SEKSI PERTANAHAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('32497561', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 2 MANDATI II', '2018-02-08 00:00:00', '2018-02-08 06:55:36'),
('32518347', 'DINAS PERINDSUTRIAN DAN PERDAGANGAN', 'SEKSI PELAYANAN  TERA/TERA ULANG', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('32540917', 'DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('32734981', 'DINAS SOSIAL', 'SEKSI IDENTIFIKASI DAN PENGUATAN KAPASITAS, KELEMB', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('32738065', 'BADAN PENGELOLA PAJAK DAN RETRIBUSI DAERAH', 'SUB BIDANG PENETAPAN DAN KEBERATAN RETRIBUSI DAERA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('32795601', 'DINAS PARIWISATA', 'SEKSI PENGEMBANGAN KEMITRAAN DAN DIGITAL MARKETING', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('32837546', 'BADAN KESATUAN BANGSA DAN POLITIK', 'SUB BIDANG WAWASAN KEBANGSAAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('32860934', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SEKSI SEJARAH, TRADISI DAN KESENIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('32894573', 'DINAS KELAUTAN DAN PERIKANAN', 'BIDANG  USAHA PERIKANAN BUDIDAYA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('32904587', 'SEKRETARIAT DAERAH', 'STAF AHLI BIDANG EKONOMI, KEUANGAN DAN PEMBANGUNAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('32931740', 'KECAMATAN WANGI-WANGI SELATAN', 'KELURAHAN MANDATI III', '2019-08-22 00:00:00', '2019-08-22 00:44:48'),
('33219640', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'SUB BIDANG ANALISA KEBUTUHAN DAN PEMANFAATAN ASET', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('33478625', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN 4 KALEDUPA', '2018-02-08 00:00:00', '2018-02-08 06:45:27'),
('33604218', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 2 AMBEUA', '2018-02-08 00:00:00', '2018-02-08 06:59:22'),
('33614059', 'DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN', 'KEPALA DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('33740812', 'DINAS PERTANIAN', 'SUB BAGIAN PROGRAM KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('33801542', 'BADAN KESATUAN BANGSA DAN POLITIK', 'SUB BIDANG KELEMBAGAAN PARTAI POLITIK DAN FASILITA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('33864129', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK AMAL JARIAH BINONGKO', '2018-08-16 00:00:00', '2018-08-16 02:37:06'),
('33871402', 'DINAS KESEHATAN', 'SEKSI PENCEGAHAN DAN PENGENDALIAN PENYAKIT TIDAK M', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('33942705', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK.SEJAHTER KALEDUPA', '2018-08-16 00:00:00', '2018-08-16 01:48:57'),
('34021786', 'RUMAH SAKIT UMUM DAERAH', 'BIDANG KEPERAWATAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('34205683', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN MATAHORA', '2018-02-08 00:00:00', '2018-02-08 06:53:50'),
('34368970', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 3 POPALIA', '2018-02-08 00:00:00', '2018-02-08 07:11:17'),
('34536798', 'DINAS PERINDSUTRIAN DAN PERDAGANGAN', 'SEKSI PEMBANGUNAN DAN PEMBINAAN SARANA DISTRIBUSI ', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('34561073', 'KECAMATAN WANGI-WANGI', 'KELURAHAN WANDOKA UTARA', '2019-08-22 00:00:00', '2019-08-22 01:25:39'),
('34638059', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK AL HUSADA DESA WAHA WANGI-WANGI', '2018-08-16 00:00:00', '2018-08-16 01:32:49'),
('34830169', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK MAWAR KALEDUPA SELATAN', '2018-08-16 00:00:00', '2018-08-16 01:52:55'),
('34918520', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 1 WAHA TOMIA', '2018-02-08 00:00:00', '2018-02-08 07:03:29'),
('35234780', 'SATUAN POLISI PAMONG PPRAJA DAN PEMADAM KEBAKARAN', 'SEKSI PERLINDUNGAN MASYARAKAT', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('35317806', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN PALEA', '2018-02-08 00:00:00', '2018-02-08 07:00:24'),
('35416098', 'DINAS KELAUTAN DAN PERIKANAN', 'SEKSI  PERMODALAN DAN PEMBINAAN KELEMBAGAAN PERIKA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('35478296', 'DINAS PERPUSTAKAAN DAN KEARSIPAN', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('35609287', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK MELATI MUDA (PALAHIDU BARAT)', '2019-05-28 00:00:00', '2019-05-28 03:19:08'),
('35610974', 'DINAS PERINDSUTRIAN DAN PERDAGANGAN', 'KEPALA DINAS PERINDUSTRIAN DAN PERDAGANGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('35634192', 'SEKRETARIAT DPRD', 'BAGIAN KEUANGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('35694032', 'KECAMATAN WANGI-WANGI', 'KELURAHAN WANCI', '2019-08-22 00:00:00', '2019-08-22 01:24:41'),
('35789613', 'BADAN PENGELOLA PAJAK DAN RETRIBUSI DAERAH', 'SUB BAGIAN PROGRAM, KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('35810246', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 1 PATUNO', '2018-02-08 00:00:00', '2018-02-08 06:52:39'),
('35829431', 'SATUAN POLISI PAMONG PPRAJA DAN PEMADAM KEBAKARAN', 'SUB BAGIAN PROGRAM', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('35976340', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG', 'SEKSI PENGEMBANGAN JARINGAN JALAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('36034158', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 1 LANGGE', '2018-02-08 00:00:00', '2018-02-08 07:01:03'),
('36139842', 'SEKRETARIAT DAERAH', 'SUB BAGIAN TATA USAHA PIMPINAN DAN STAF AHLI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('36204317', 'DINAS PERHUBUNGAN', 'SEKSI  KESELAMATAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('36297053', 'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA', 'BIDANG  PENYULUHAN DAN PENGGERAKAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('36324510', 'BADAN PENGELOLA PAJAK DAN RETRIBUSI DAERAH', 'SUB BIDANG PENAGIHAN RETRIBUSI DAERAH', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('36324759', 'DINAS KOPERASI, USAHA KECIL MENENGAH DAN TENAGA KERJA', 'SEKSI PENINGKATAN KUALITAS SUMBER DAYA MANUSIA KOP', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('36347218', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'SEKSI INFRASTRUKTUR DAN KEMITRAAN OLAHRAGA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('36403178', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 1 LIYA', '2018-02-08 00:00:00', '2018-02-08 06:56:42'),
('36473210', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN POSALU', '2018-02-08 00:00:00', '2018-02-08 06:53:04'),
('36590231', 'SEKRETARIAT DAERAH', 'SUB BAGIAN AGAMA', '2018-01-01 00:00:00', '2017-11-09 06:36:53'),
('36592718', 'DINAS PARIWISATA', 'SEKSI PENGEMBANGAN SDM EKONOMI KREATIF', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('36809421', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN 1 WANGI-WANGI', '2018-02-08 00:00:00', '2018-02-08 06:41:20'),
('36817320', 'RUMAH SAKIT UMUM DAERAH', 'SEKSI BIMBINGAN ETIKA DAN MUTU KEPERAWATAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('36820157', 'BADAN PENGELOLA PAJAK DAN RETRIBUSI DAERAH', 'SUB BIDANG PENDAFTARAN DAN PENDATAAN RETRIBUSI DAE', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('37026839', 'SEKRETARIAT DAERAH', 'SUB BAGIAN KEUANGAN DAN ASET', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('37036825', 'DINAS LINGKUNGAN HIDUP', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('37102465', 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('37159632', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('37240859', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', 'SEKSI  PERKAWINAN DAN PERCERAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('37291803', 'BADAN PENGELOLA PAJAK DAN RETRIBUSI DAERAH', 'SUB BIDANG PENDAFTARAN DAN PENDATAAN PAJAK DAERAH', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('37468219', 'RUMAH SAKIT UMUM DAERAH', 'SEKSI PELAYANAN RAWAT JALAN, RAWAT INAP DAN RAWAT ', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('37694123', 'DINAS PARIWISATA', 'SEKSI PENATAAN KAWASAN DAN DAYA TARIK WISATA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('38021946', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 3 AMBEUA', '2018-02-08 00:00:00', '2018-02-08 06:59:03'),
('38179205', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'BIDANG PENGEMBANGAN SUMBER DAYA MANUSIA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('38179604', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 2 WAHA TOMIA', '2018-02-08 00:00:00', '2018-02-08 07:03:36'),
('38319574', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN TANOMEHA', '2018-02-08 00:00:00', '2018-02-08 07:00:10'),
('38341926', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN SATAP WAWOTIMU', '2018-02-08 00:00:00', '2018-02-08 06:48:13'),
('38470592', 'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA', 'SEKSI  ADVOKASI DAN PENGGERAKAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('38541237', 'DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN', 'SEKRETARIAT', '2019-08-22 00:00:00', '2019-08-22 02:13:42'),
('38657034', 'DINAS PERTANIAN', 'SEKSI PEMBENIHAN DAN PERLINDUNGAN TANAMAN PANGAN D', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('39016784', 'DINAS PERTANIAN', 'SEKSI PRASARANA DAN SARANA PERTANIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('39042875', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'SEKSI PENGEMBANGAN IKLIM PENANAMAN MODAL', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('39061534', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', 'SEKSI  PEMANFAATAN DATA DAN DOKUMEN KEPENDUDUKAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('39063728', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK ALHIDAYAH KALEDUPA SELATAN', '2018-08-16 00:00:00', '2018-08-16 01:52:26'),
('39105847', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK WANIANSE', '2018-08-16 00:00:00', '2018-08-16 01:30:55'),
('39167425', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('39201586', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK KEMALA BHAYANGKARA', '2018-08-16 00:00:00', '2018-08-16 01:31:46'),
('39206173', 'DINAS PERHUBUNGAN', 'SEKSI PENGELOLAAN DAN PENGOPERASIAN PELABUHAN', '2019-01-04 00:00:00', '2019-01-04 00:39:10'),
('39314720', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'SEKSI PERIZINAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('39315862', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN ONE-ONE', '2018-02-08 00:00:00', '2018-02-08 07:08:55'),
('39460321', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'SUB BAGIAN PROGRAM,KEUANGAN DAN PERLENGKAPAN SEKRE', '2018-01-03 00:00:00', '2017-11-09 06:36:53'),
('39524081', 'DINAS KESEHATAN', 'SUB BAGIAN KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('39530674', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK AL HIDAYAH LENTEA', '2018-09-05 00:00:00', '2018-09-05 06:02:55'),
('39645203', 'DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN', 'SEKSI TATA KELOLA PERSANDIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('39750128', 'DINAS PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN ANAK, PEMBERDAYAAN MASYARAKAT DAN DESA', 'SEKSI PERLINDUNGAN DAN DATA KEKERASAN PEREMPUAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('39760148', 'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA', 'SEKSI  PEMBERDAYAAN KELUARGA SEJAHTERA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('39815430', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK ALFATAH', '2018-09-04 00:00:00', '2018-09-04 06:23:40'),
('39832417', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'KEPALA BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER D', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('39836107', 'BADAN KESATUAN BANGSA DAN POLITIK', 'SUB BIDANG KEWASPADAAN DINI DAN PENGAWASAN ORANG D', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('40184926', 'SATUAN POLISI PAMONG PPRAJA DAN PEMADAM KEBAKARAN', 'SEKSI PENCEGAHAN DAN PARTISIPASI MASYARAKAT', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('40285691', 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH', 'SUB BIDANG TATA RUANG, PERUMAHAN DAN PERMUKIMAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('40287164', 'DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN', 'SEKSI PENGEMBANGAN TEKNOLOGI INFORMASI KOMUNIKASI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('40387416', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK MAWAR KALEDUPA SELATAN', '2018-08-16 00:00:00', '2018-08-16 01:58:55'),
('40498123', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'SEKSI PEMBERDAYAAN PEMUDA', '2018-01-03 00:00:00', '2017-11-09 06:36:53'),
('40712483', 'KECAMATAN KALEDUPA', 'KELURAHAN BURANGA', '2019-08-21 00:00:00', '2019-08-21 00:56:19'),
('40924687', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'BIDANG ANGGARAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('40934687', 'BADAN KESATUAN BANGSA DAN POLITIK', 'BIDANG BINA IDEOLOGI DAN WAWASAN KEBANGSAAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('41028574', 'DINAS KELAUTAN DAN PERIKANAN', 'SEKSI  PENDIDIKAN, PELATIHAN DAN PENDAMPINGAN PERI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('41054932', 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH', 'KEPALA BADAN PERENCANAAN, PENELITIAN DAN PENGEMBAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('41059864', 'SEKRETARIAT DAERAH', 'BAGIAN PENGADAAN BARANG/JASA PEMERINTAH', '2018-01-01 00:00:00', '2017-11-09 06:36:53'),
('41284950', 'SATUAN POLISI PAMONG PPRAJA DAN PEMADAM KEBAKARAN', 'BIDANG KETERTIBAN UMUM', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('41342760', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', 'KEPALA DINAS KETPENDUDUKAN DAN PENCATATAN SIPIL', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('41370925', 'DINAS PERHUBUNGAN', 'SEKSI  ANGKUTAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('41386240', 'DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN', 'SUB. PROGRAM,KEUANGAN DAN PERLENGKAPAN', '2019-05-23 00:00:00', '2019-05-23 03:44:01'),
('41436502', 'DINAS KELAUTAN DAN PERIKANAN', 'SEKSI PENDIDIKAN, PELATIHAN DAN PENDAMPINGAN PERIK', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('41502634', 'DINAS KOPERASI, USAHA KECIL MENENGAH DAN TENAGA KERJA', 'SEKSI KEANGGOTAAN DAN PENERAPAN PERATURAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('41684953', 'DINAS KETAHANAN PANGAN', 'SEKSI KEAMANAN PANGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('41794823', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SEKSI KURIKULUM DAN PESERTA DIDIK BIDANG PEMBINAAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('41807239', 'DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('41823609', 'SEKRETARIAT DEWAN PENGURUS KORPRI', 'SUB BAGIAN OLAH RAGA, SENI BUDAYA, MENTAL DAN ROHA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('41964053', 'BADAN PENANGGULANGAN BENCANA DAERAH', 'SUB BIDANG REHABILITASI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('41974083', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'BIDANG PERBENDAHARAAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('42056837', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('42560184', 'DINAS PERHUBUNGAN', 'SEKSI  LINGKUNGAN PERHUBUNGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('42581679', 'DINAS PERPUSTAKAAN DAN KEARSIPAN', 'SEKSI PELESTARIAN BAHAN PERPUSTAKAAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('42658139', 'SEKRETARIAT DAERAH', 'SUB BAGIAN PENGENDLIAN PEMBANGUNAN', '2018-01-01 00:00:00', '2017-11-09 06:36:53'),
('42794561', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN KERATON LIYA', '2018-02-08 00:00:00', '2018-02-08 06:57:05'),
('42843017', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN SATAP HAKA', '2018-02-08 00:00:00', '2018-02-08 06:48:39'),
('42948607', 'DINAS KOPERASI, USAHA KECIL MENENGAH DAN TENAGA KERJA', 'SEKSI  PENGAWASAN, PEMERIKSAAN DAN PENILAIAN KESEH', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('42951640', 'DINAS PERPUSTAKAAN DAN KEARSIPAN', 'SEKSI PEMBINAAN DAN PENGEMBANGAN PERPUSTAKAAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('43187409', 'DINAS PERPUSTAKAAN DAN KEARSIPAN', 'SEKSI PENGEMBANGAN PEMBUDAYAAN KEGEMARAN MEMBACA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('43275068', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN 2 WANGI-WANGI', '2018-02-08 00:00:00', '2018-02-08 06:41:40'),
('43897062', 'BADAN KESATUAN BANGSA DAN POLITIK', 'BIDANG KETAHANAN SENI, BUDAYA, AGAMA, KEMASYARAKAT', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('43984175', 'DINAS PERHUBUNGAN', 'SEKSI PEMBANGUNAN PRASARANA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('44103592', 'DINAS KESEHATAN', 'UPTD PUSKESMAS SANDI', '2018-02-08 00:00:00', '2018-02-08 06:27:59'),
('44261509', 'DINAS KELAUTAN DAN PERIKANAN', 'SEKSI  PENGELOLAAN TEMPAT PELELANGAN IKAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('44298376', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN KULATI', '2018-02-08 00:00:00', '2018-02-08 07:05:11'),
('44637195', 'DINAS KETAHANAN PANGAN', 'SEKSI KONSUMSI PANGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('44652703', 'BADAN KESATUAN BANGSA DAN POLITIK', 'SUB BIDANG KETAHANAN AGAMA,KEMASYARAKATAN DAN EKON', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('44726381', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SD 2 MANDATI I', '2018-09-20 00:00:00', '2018-09-20 00:25:15'),
('44762180', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN SATAP OIHU', '2018-02-08 00:00:00', '2018-02-08 06:48:29'),
('44823061', 'DINAS LINGKUNGAN HIDUP', 'SEKSI  KERUSAKAN LINGKUNAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('44831976', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG', 'SEKSI PENATAAN BANGUNAN DAN SUMBER DAYA AIR', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('44931065', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK. SAMA BAHARI KALEDUPA', '2018-08-16 00:00:00', '2018-08-16 01:48:09'),
('45214863', 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH', 'SUB BIDANG EKONOMI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('45267413', 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH', 'SUB BIDANG PEMBANGUNAN MANUSIA DAN MASYARAKAT', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('45283740', 'DINAS SOSIAL', 'SEKSI JAMINAN SOSIAL KELUARGA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('45376108', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK AL-MUTHAHHARAH PATIPELONG', '2018-08-16 00:00:00', '2018-08-16 02:03:19'),
('45496320', 'DINAS KESEHATAN', 'SEKSI PENCEGAHAN DAN PENGENDALIAN PENYAKIT MENULAR', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('45601872', 'DINAS KELAUTAN DAN PERIKANAN', 'SEKSI  DATA, INFORMASI, PENELITIAN DAN TEKNOLOGI P', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('45643907', 'DINAS SOSIAL', 'SEKSI PEMBERDAYAAN MASYARAKAT, PENYALURAN BANTUAN ', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('45683417', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK KARTINI', '2018-08-16 00:00:00', '2018-08-16 01:29:07'),
('45836019', 'SEKRETARIAT DPRD', 'BAGIAN UMUM', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('45897631', 'SEKRETARIAT DAERAH', 'BAGIAN KESEJAHTERAAN RAKYAT', '2018-01-01 00:00:00', '2017-11-09 06:36:53'),
('45924708', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 2 USUKU', '2018-02-08 00:00:00', '2018-02-08 07:06:47'),
('46045371', 'DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN', 'BIDANG PERSANDIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('46179248', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'SUB BIDANG PENGADAAN, KEPANGKATAN DAN MUTASI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('46287309', 'SATUAN POLISI PAMONG PPRAJA DAN PEMADAM KEBAKARAN', 'KEPALA SATUAN POLISI PAMONG PRAJA DAN PEMADAM KEBA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('46594720', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 2 TAIPABU', '2018-02-08 00:00:00', '2018-02-08 07:10:00'),
('46734509', 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH', 'BIDANG PERENCANAAN MAKRO', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('46751084', 'INSPEKTORAT DAERAH', 'PENGADMINISTRASI UMUM', '2019-05-13 00:00:00', '2019-05-13 03:45:39'),
('46758149', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'SUB BIDANG PENDIDIKAN DAN PELATIHAN STRUKTURAL', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('46831425', 'DINAS KOPERASI, USAHA KECIL MENENGAH DAN TENAGA KERJA', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('47024695', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'SUB BIDANG  PENILAIAN DAN PENGHAPUSAN ASET', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('47056432', 'SEKRETARIAT DAERAH', 'SUB BAGIAN TATALAKSANA DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('47195260', 'BADAN PENANGGULANGAN BENCANA DAERAH', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('47293415', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN SATAP MANTIGOLA', '2018-02-08 00:00:00', '2018-02-08 06:46:39'),
('47315840', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'KEPALA DINAS PENDIDIKAN DAN KEBUDAYAAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('47381409', 'KECAMATAN WANGI-WANGI', 'CAMAT WANGI-WANGI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('47438916', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN TANOWALI', '2018-02-08 00:00:00', '2018-02-08 07:02:44'),
('48021574', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK DARUL ILMU TOMIA TIMUR', '2018-08-16 00:00:00', '2018-08-16 02:04:50'),
('48276409', 'RUMAH SAKIT UMUM DAERAH', 'SEKSI BIMBINGAN PELAKSANAAN ASUHAN DAN PELAYANAN K', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('48405263', 'BADAN PENANGGULANGAN BENCANA DAERAH', 'BIDANG PENCEGAHAN DAN KESIAP-SIAGAAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53');
INSERT INTO `data_unit` (`id_unit`, `nama_satker`, `nama_unit`, `iat`, `uat`) VALUES
('48426537', 'DINAS KESEHATAN', 'BIDANG PENCEGAHAN  DAN PENGENDALIAN PENYAKIT', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('48576012', 'DINAS PERHUBUNGAN', 'SEKSI KEPELABUHAN DAN ANGKUTAN PELAYARAN', '2019-01-04 00:00:00', '2019-01-04 00:30:57'),
('48604913', 'DINAS KETAHANAN PANGAN', 'SEKSI PENGANEKARAGAMAN KONSUMSI PANGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('48765390', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG', 'SEKSI PEMBANGUNAN JALAN DAN JEMBATAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('48950473', 'DINAS PARIWISATA', 'SEKSI PENGEMBANGAN KELEMBAGAAN DAN TATA KELOLA PAR', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('49017856', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK. DHRMAWANITA WAHA TOMIA', '2018-08-16 00:00:00', '2018-08-16 02:00:14'),
('49172568', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN UMALA', '2018-02-08 00:00:00', '2018-02-08 06:57:30'),
('49320845', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN BAJO SAMPELA', '2018-02-08 00:00:00', '2018-02-08 06:58:38'),
('49326178', 'DINAS PERHUBUNGAN', 'BIDANG  PENGEMBANGAN DAN KESELAMATAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('49372548', 'DINAS PERPUSTAKAAN DAN KEARSIPAN', 'SEKSI LAYANAN DAN PEMANFAATAN ARSIP', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('49410857', 'DINAS PERPUSTAKAAN DAN KEARSIPAN', 'SEKSI PENGELOLAAN ARSIP DINAMIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('49580324', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'SUB BIDANG ANALISA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('49705361', 'DINAS PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN ANAK, PEMBERDAYAAN MASYARAKAT DAN DESA', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('49705634', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'SUB BIDANG PENYUSUNAN ANGGARAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('49726435', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('49824630', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK BURANGA KECAMATAN KALEDUPA', '2018-09-07 00:00:00', '2018-09-07 07:40:49'),
('50134672', 'DINAS PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN ANAK, PEMBERDAYAAN MASYARAKAT DAN DESA', 'SEKSI PEMENUHAN HAK DAN DATA INFORMASI ANAK', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('50152476', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', 'SEKSI  PENDATAAN PENDUDUK', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('50257489', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN LAGOLE', '2018-02-08 00:00:00', '2018-02-08 07:05:03'),
('50341692', 'SEKRETARIAT DAERAH', 'BAGIAN PEMERINTAHAN', '2018-01-01 00:00:00', '2017-11-09 06:36:53'),
('50419756', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN KOLOSOHA', '2018-02-08 00:00:00', '2018-02-08 07:03:55'),
('50481653', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'SEKSI PEMBERDAYAAN PEMUDA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('50579362', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN POOKAMBUA', '2018-02-08 00:00:00', '2018-02-08 06:51:01'),
('50683942', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 4 USUKU', '2018-02-08 00:00:00', '2018-02-08 07:06:34'),
('50698542', 'SEKRETARIAT DAERAH', 'SUB BAGIAN OTONOMI DAERAH', '2018-01-01 00:00:00', '2017-11-09 06:36:53'),
('50914723', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN BANTE', '2018-02-08 00:00:00', '2018-02-08 07:10:29'),
('50931827', 'DINAS PERPUSTAKAAN DAN KEARSIPAN', 'KEPALA DINAS PERPUSTAKAAN DAN KEARSIPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('50947231', 'DINAS PARIWISATA', 'BIDANG PENGEMBANGAN KELEMBAGAAN DAN SDM PARIWISATA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('51026359', 'INSPEKTORAT DAERAH', 'INSPEKTUR PEMBANTU WILAYAH III', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('51036852', 'DINAS PARIWISATA', 'SUB BAGIAN KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('51506742', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK MELATI MUDA TAIPABU', '2018-08-16 00:00:00', '2018-08-16 02:08:03'),
('51783542', 'DINAS KESEHATAN', 'SEKSI KEFARMASIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('51803476', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN 2 KALEDUPA', '2018-02-08 00:00:00', '2018-02-08 06:45:05'),
('51820496', 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH', 'SUB BIDANG PERENCANAAN PEMBANGUNAN DAERAH', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('52031754', 'DINAS LINGKUNGAN HIDUP', 'SEKSI  PENINGKATAN KAPASITAS LINGKUNGAN HIDUP', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('52081354', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'BIDANG PENGADAAN, MUTASI DAN PEMBINAAN DISIPLIN PENGEMBANGAN', '2018-01-02 00:00:00', '2018-01-05 19:54:44'),
('52517094', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'SUB BIDANG DATA  DAN INFORMASI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('52586093', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'SEKSI PENINGKATAN PRESTASI OLAHRAGA', '2018-01-03 00:00:00', '2017-11-09 06:36:53'),
('52597813', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 2 PATUNO', '2018-02-08 00:00:00', '2018-02-08 06:52:10'),
('52631048', 'KECAMATAN BINONGKO', 'KELURAHAN WALI', '2019-08-19 00:00:00', '2019-08-19 01:43:10'),
('52635891', 'INSPEKTORAT DAERAH', 'INSPEKTUR DAERAH', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('52680975', 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH', 'BIDANG INFRASTRUKTUR DAN PENGEMBANGAN WILAYAH', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('52743510', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN WANDOKA', '2018-10-18 00:00:00', '2018-10-18 02:26:57'),
('52753091', 'DINAS KESEHATAN', 'UPTD PUSKESMAS TOMIA', '2018-02-08 00:00:00', '2018-02-08 06:28:12'),
('52756408', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN SATAP KOMALA PAGI', '2018-02-08 00:00:00', '2018-02-08 06:44:43'),
('53041289', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 2 LIYA', '2018-02-08 00:00:00', '2018-02-08 06:55:57'),
('53047185', 'DINAS KESEHATAN', 'SEKSI PELAYANAN KESEHATAN TRADISIONAL', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('53065927', 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH', 'BIDANG PENELITIAN DAN PENGEMBANGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('53467850', 'DINAS PERTANIAN', 'KEPALA DINAS PERTANIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('53490576', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 1 WALI', '2018-02-08 00:00:00', '2018-02-08 07:09:36'),
('53517462', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN TEEWALI', '2018-02-08 00:00:00', '2018-02-08 07:00:03'),
('53521860', 'DINAS PERHUBUNGAN', 'BIDANG  PRASARANA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('53590642', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK LAKAMALI TOMIA TIMUR', '2018-08-16 00:00:00', '2018-08-16 02:04:33'),
('53590674', 'DINAS PERTANIAN', 'BIDANG PERKEBUNAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('53659241', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', 'SEKSI  IDENTITAS PENDUDUK', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('53817546', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN TINDOI', '2018-02-08 00:00:00', '2018-02-08 06:50:53'),
('53869512', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK AL MAWADDAH', '2018-09-04 00:00:00', '2018-09-04 02:47:21'),
('53950674', 'DINAS PERHUBUNGAN', 'SEKSI BADAN USAHA DAN JASA ANGKUTAN PELAYARAN', '2019-01-04 00:00:00', '2019-01-04 00:40:41'),
('53974820', 'KECAMATAN BINONGKO', 'KELURAHAN PALAHIDU', '2019-08-19 00:00:00', '2019-08-19 01:24:25'),
('54027861', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 2 KAPOTA', '2018-02-08 00:00:00', '2018-02-08 06:56:07'),
('54132957', 'SEKRETARIAT DEWAN PENGURUS KORPRI', 'SUB BAGIAN USAHA, BANTUAN HUKUM DAN SOSIAL', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('54239567', 'DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN', 'SUB BAGIAN PROGRAM, KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('54279801', 'DINAS PERPUSTAKAAN DAN KEARSIPAN', 'SEKSI PENGEMBANGAN KOLEKSI DAN PENGOLAHAN BAHAN PE', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('54321765', 'DINAS PARIWISATA', 'BIDANG PENGEMBANGAN EKONOMI KREATIF', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('54531086', 'KECAMATAN TOMIA TIMUR', 'KELURAHAN TONGANO TIMUR', '2019-08-19 00:00:00', '2019-08-19 03:21:56'),
('54536912', 'BADAN PENGELOLA PAJAK DAN RETRIBUSI DAERAH', 'SUB BIDANG PENETAPAN DAN KEBERATAN PAJAK BUMI DAN ', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('54683107', 'DINAS PERPUSTAKAAN DAN KEARSIPAN', 'SEKSI PEMBINAAN DAN PENGEMBANGAN TENAGA PERPUSTAKA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('54698503', 'SEKRETARIAT DAERAH', 'SUB BAGIAN PROTOKOLER', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('54810765', 'DINAS PERINDSUTRIAN DAN PERDAGANGAN', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('54837051', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN ONELARO', '2018-02-08 00:00:00', '2018-02-08 07:09:03'),
('54870632', 'DINAS PERPUSTAKAAN DAN KEARSIPAN', 'BIDANG PENGELOLAAN ARSIP', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('54872093', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'BIDANG PENGELOLAAN ASET', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('54930861', 'SEKRETARIAT DAERAH', 'SUB BAGIAN TATA USAHA PIMPINAN DAN STAF AHLI', '2019-05-20 00:00:00', '2019-05-20 06:11:02'),
('55068941', 'BADAN KESATUAN BANGSA DAN POLITIK', 'SUB BIDANG KELEMBAGAAN PARTAI POLITIK DAN FASILITA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('55147086', 'DINAS PERINDSUTRIAN DAN PERDAGANGAN', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('55236071', 'BADAN PENGELOLA PAJAK DAN RETRIBUSI DAERAH', 'SUB BIDANG  PENDAFTARAN DAN PENDATAAN PAJAK BUMI D', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('55247916', 'DINAS KESEHATAN', 'SEKSI SUMBER DAYA MANUSIA KESEHATAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('55318790', 'SEKRETARIAT DAERAH', 'SUB BAGIAN BARANG DAN JASA LAINNYA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('55427316', 'SEKRETARIAT DAERAH', 'STAF AHLI BIDANG PEMERINTAHAN, HUKUM DAN POLITIK', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('55431896', 'DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN', 'BIDANG PERUMAHAN', '2019-08-22 00:00:00', '2019-08-22 02:20:02'),
('55436087', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK KEMALA BHAYANGKARA WANGI-WANGI', '2018-08-16 00:00:00', '2018-08-16 01:32:23'),
('55492168', 'DINAS KELAUTAN DAN PERIKANAN', 'SUB BAGIAN  PROGRAM', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('55639247', 'SEKRETARIAT DAERAH', 'SUB BAGIAN PENINGKATAN INVESTASI DAN PENANAMAN MOD', '2018-01-01 00:00:00', '2017-11-09 06:36:53'),
('55681720', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'SEKSI PEMANTAUAN DAN PENGAWASAN PELAKSANAAN PENANA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('55718426', 'DINAS KOPERASI, USAHA KECIL MENENGAH DAN TENAGA KERJA', 'SEKSI PELATIHAN, PENEMPATAN, PERLUASAN KESEMPATAN ', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('55782641', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK PERTIWI WANGI-WANGI SELATAN', '2018-08-16 00:00:00', '2018-08-16 01:42:28'),
('55796120', 'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA', 'SEKSI  PENYULUHAN DAN KOMUNIKASI, INFORMASI DAN ED', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('55876923', 'DINAS SOSIAL', 'SUB BAGIAN PROGRAM, KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('55892074', 'KECAMATAN WANGI-WANGI', 'SUB BAGIAN PROGRAM ,KEUANGAN DAN PERLENGKAPAN KECA', '2018-01-03 00:00:00', '2017-11-09 06:36:53'),
('55903716', 'DINAS KELAUTAN DAN PERIKANAN', 'SUB BAGIAN KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('55974860', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'PRANATA KOMPUTER AHLI PERTAMA', '2018-03-14 00:00:00', '2018-03-14 03:06:33'),
('56092853', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'BIDANG PENGEMBANGAN IKLIM DAN PROMOSI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('56173458', 'SEKRETARIAT DAERAH', 'SUB BAGIAN PRODUKSI', '2018-01-01 00:00:00', '2017-11-09 06:36:53'),
('56284073', 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH', 'SUB BIDANG SUMBER DAYA ALAM', '2019-01-14 00:00:00', '2019-01-14 04:17:03'),
('56329174', 'DINAS PERTANIAN', 'SEKSI PRODUKSI TANAMAN PANGAN DAN HORTIKULTURA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('56580294', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 4 AMBEUA', '2018-02-08 00:00:00', '2018-02-08 06:58:47'),
('56749301', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN MOLE', '2018-02-08 00:00:00', '2018-02-08 07:10:50'),
('56934720', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 2 KAHIANGA', '2018-02-08 00:00:00', '2018-02-08 07:07:59'),
('57038124', 'DINAS PARIWISATA', 'SEKSI FASILITASI SARANA PRASARANA DAN PERMODALAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('57123098', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK KUNCUP WALI BINONGKO', '2018-08-16 00:00:00', '2018-08-16 02:37:19'),
('57168903', 'SEKRETARIAT DPRD', 'SUB BAGIAN PROGRAM DAN EVALUASI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('57259486', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'SEKSI INFRASTRUKTUR KEMITRAAN PEMUDA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('57398145', 'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA', 'BIDANG  KETAHANAN DAN KESEJAHTERAAN KELUARGA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('57512804', 'SEKRETARIAT DEWAN PENGURUS KORPRI', 'SUB BAGIAN UMUM DAN KERJA SAMA', '2018-01-02 00:00:00', '2020-04-10 07:33:45'),
('57543962', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG', 'BIDANG PENATAAN RUANG', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('57934160', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK KAMALI KECAMATAN KALEDUPA', '2018-09-05 00:00:00', '2018-09-05 02:39:41'),
('57951043', 'BADAN KESATUAN BANGSA DAN POLITIK', 'SUB BAGIAN PENYUSUNAN PROGRAM', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('57985106', 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH', 'SUB BIDANG PENDANAAN DAN PEMBIAYAAN PEMBANGUNAN DA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('58035267', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'SUB BAGIAN PROGRAM, KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('58036149', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'SUB BAGIAN PROGRAM, KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('58319705', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 2 MANDATI I', '2018-09-20 00:00:00', '2018-09-20 00:26:02'),
('58459120', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN BURANGA', '2018-02-08 00:00:00', '2018-02-08 06:58:26'),
('58543729', 'DINAS KETAHANAN PANGAN', 'SEKSI KERAWANAN PANGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('58907564', 'SEKRETARIAT DAERAH', 'SUB BAGIAN KOMUNIKASI PUBLIK', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('58930524', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK ALHIDAYAH WANGI-WANGI', '2018-09-04 00:00:00', '2018-09-04 03:44:26'),
('58950631', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', 'BIDANG  PELAYANAN PENCATATAN SIPIL', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('59082514', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK ISLAM TIROAU TOMIA TIMUR', '2018-08-16 00:00:00', '2018-08-16 02:02:56'),
('59316825', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'UPTD DIKBUD KECAMATAN BINONGKO', '2018-02-08 00:00:00', '2018-02-08 06:33:04'),
('59430761', 'INSPEKTORAT DAERAH', 'INSPEKTUR PEMBANTU WILAYAH I', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('59517640', 'PERUMAHAN DAN KAWASAN PERMUKIMAN', 'KEPALA DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('59603514', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('59672180', 'SEKRETARIAT DAERAH', 'STAF AHLI BIDANG KEMASYARAKATAN DAN SUMBER DAYA MA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('59758432', 'SEKRETARIAT DAERAH', 'ASISTEN ADMINISTRASI UMUM', '2019-08-19 00:00:00', '2019-08-19 02:35:50'),
('59768250', 'SATUAN POLISI PAMONG PPRAJA DAN PEMADAM KEBAKARAN', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('59826047', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 3 OLLO', '2018-02-08 00:00:00', '2018-02-08 06:58:55'),
('59876154', 'BADAN PENGELOLA PAJAK DAN RETRIBUSI DAERAH', 'BIDANG  PENDAFTARAN DAN PENDATAAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('60129685', 'DINAS KELAUTAN DAN PERIKANAN', 'SEKSI  PENGEMBANGAN KAWASAN PERIKANAN BIDIDAYA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('60158962', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK TUNAS KAMBOJA KALEDUPA SELATAN', '2018-08-16 00:00:00', '2018-08-16 01:58:32'),
('60389145', 'DINAS PERHUBUNGAN', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('60478623', 'DINAS LINGKUNGAN HIDUP', 'SEKSI  PERENCANAAN DAN KAJIAN DAMPAK LINGKUNGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('60619573', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'SEKSI PENGADUAN DAN INFORMASI LAYANAN PERIZINAN DA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('60765843', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN LAWANATA', '2018-02-08 00:00:00', '2018-02-08 07:04:31'),
('61075692', 'DINAS KETAHANAN PANGAN', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('61204958', 'DINAS KESEHATAN', 'SEKSI PROMOSI DAN PEMBERDAYAAN MASYARAKAT', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('61257649', 'DINAS KELAUTAN DAN PERIKANAN', 'SEKSI  ANALISA KUALITAS PERAIRAN BUDIDAYA DAN PEMB', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('61274589', 'KECAMATAN WANGI-WANGI', 'KELURAHAN WANDOKA SELATAN', '2019-08-22 00:00:00', '2019-08-22 01:44:23'),
('61345720', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'BIDANG DOKUMENTASI, PERENCANAAN PEGAWAI DAN PENGEL', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('61546238', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SUB BAGIAN PROGRAM, KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('61674590', 'DINAS KESEHATAN', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('61879032', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'SUB BIDANG INVENTARISASI DAN PEMELIHARAAN ASET', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('62018974', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', 'SUB BAGIAN KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('62067314', 'DINAS KETAHANAN PANGAN', 'BIDANG DISTRIBUSI DAN  CADANGAN PANGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('62076894', 'DINAS PERTANIAN', 'SEKSI PEMBENIHAN DAN PERLINDUNGAN PERKEBUNAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('62361940', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG', 'BIDANG CIPTA KARYA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('62417658', 'DINAS KESEHATAN', 'SEKSI KESEHATAN LINGKUNGAN, KESEHATAN KERJA DAN OL', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('62478351', 'DINAS KOPERASI, USAHA KECIL MENENGAH DAN TENAGA KERJA', 'BIDANG TENAGA KERJA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('62507986', 'INSPEKTORAT DAERAH', 'INSPEKTUR PEMBANTU WILAYAH II', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('62561379', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'ARSIPARIS', '2018-03-14 00:00:00', '2018-03-14 03:06:55'),
('62695084', 'DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN', 'SEKSI PENGENDALIAN EVALUASI PRASARANA, SARANA, DAN UTILITAS UMUM KAWASAN PERMUKIMAN', '2019-08-22 00:00:00', '2019-08-22 06:40:54'),
('62710568', 'DINAS PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN ANAK, PEMBERDAYAAN MASYARAKAT DAN DESA', 'SUB BAGIAN PROGRAM, KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('62714906', 'DINAS PERINDSUTRIAN DAN PERDAGANGAN', 'SEKSI PEMBINAAN JABATAN FUNGSIONAL BIDANG KEMETROL', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('63021986', 'INSPEKTORAT DAERAH', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('63068452', 'SEKRETARIAT DAERAH', 'SUB BAGIAN KELEMBAGAAN DAN ANALISIS JABATAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('63106724', 'SEKRETARIAT DAERAH', 'BAGIAN ORGANISASI', '2018-01-01 00:00:00', '2017-11-09 06:36:53'),
('63192708', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK DHARMAWANITA TONGANO TOMIA TIMUR', '2018-08-16 00:00:00', '2018-08-16 02:02:35'),
('63268501', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'BIDANG PENGENDALIAN DAN INFORMASI PENANAMAN MODAL', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('63509621', 'KECAMATAN WANGI-WANGI', 'SEKRERATIS KECAMATAN', '2018-01-03 00:00:00', '2017-11-09 06:36:53'),
('63619750', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 2 WALI', '2018-02-08 00:00:00', '2018-02-08 07:09:43'),
('63684051', 'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA', 'KEPALA DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BE', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('63718542', 'PERUMAHAN DAN KAWASAN PERMUKIMAN', 'SEKSI PEMBIAYAAN PERUMAHAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('63958710', 'DINAS PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN ANAK, PEMBERDAYAAN MASYARAKAT DAN DESA', 'SEKSI PEMBERDAYAAN PEREMPUAN BIDANG KUALITAS KELUA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('64063915', 'DINAS PERINDSUTRIAN DAN PERDAGANGAN', 'SEKSI PENGEMBANGAN PERDAGANGAN DAN STABILISASI BAR', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('64168709', 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH', 'SUB BIDANG PERHUBUNGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('64257361', 'BADAN KESATUAN BANGSA DAN POLITIK', 'SUB BAGIAN KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('64509276', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN LONGA', '2018-02-08 00:00:00', '2018-02-08 06:51:22'),
('64621037', 'DINAS KETAHANAN PANGAN', 'BIDANG KETERSEDIAAN DAN KERAWANAN PANGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('64629085', 'DINAS KELAUTAN DAN PERIKANAN', 'BIDANG  USAHA PERIKANAN TANGKAP', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('64673891', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'BIDANG AKUNTANSI DAN  PELAPORAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('64692718', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK CERIA WANGI-WANGI SELATAN', '2018-08-16 00:00:00', '2018-08-16 01:41:12'),
('64709126', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 1 WAHA', '2018-02-08 00:00:00', '2018-02-08 07:03:10'),
('64792805', 'INSPEKTORAT DAERAH', 'SUB BAGIAN PERENCANAAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('64816923', 'DINAS KETAHANAN PANGAN', 'SEKSI CADANGAN PANGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('65021736', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK DHARMAWANITA BALASUNA', '2018-09-07 00:00:00', '2018-09-07 06:55:28'),
('65072368', 'DINAS LINGKUNGAN HIDUP', 'BIDANG  PENGENDALIAN PENCEMARAN DAN KERUSAKAN LING', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('65234061', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'SEKSI PEMBUDAYAAN OLAHRAGA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('65273061', 'RUMAH SAKIT UMUM DAERAH', 'BIDANG PELAYANAN MEDIS DAN RUJUKAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('65478063', 'DINAS PERPUSTAKAAN DAN KEARSIPAN', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('65712396', 'BADAN PENGELOLA PAJAK DAN RETRIBUSI DAERAH', 'KEPALA BADAN PENGELOLA PAJAK DAN RETRIBUSI DAERAH', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('65896130', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'PAUD TERPADU NURUL JANNAH WANGI-WANGI', '2018-08-16 00:00:00', '2018-08-16 01:39:32'),
('66035721', 'SATUAN POLISI PAMONG PPRAJA DAN PEMADAM KEBAKARAN', 'BIDANG PENINGKATAN KAPASITAS DAN PERLINDUNGAN MASY', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('66195780', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN MANTIGOLA', '2018-02-08 00:00:00', '2018-02-08 06:58:19'),
('66278041', 'DINAS KETAHANAN PANGAN', 'SEKSI KETERSEDIAAN PANGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('66350871', 'SATUAN POLISI PAMONG PPRAJA DAN PEMADAM KEBAKARAN', 'BIDANG PEMADAM KEBAKARAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('66452917', 'DINAS PERHUBUNGAN', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('66503971', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'BIDANG  KEPEMUDAAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('66537490', 'DINAS PARIWISATA', 'BIDANG PENGEMBANGAN PEMASARAN PARIWISATA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('66731952', 'KECAMATAN TOMIA TIMUR', 'KELURAHAN TONGANO BARAT', '2019-08-19 00:00:00', '2019-08-19 03:21:13'),
('66749315', 'INSPEKTORAT DAERAH', 'SEKRETARIS INSPEKTORAT DAERAH', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('66798014', 'DINAS PERPUSTAKAAN DAN KEARSIPAN', 'SUB BAGIAN PROGRAM', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('66841750', 'DINAS PERTANIAN', 'SEKSI  KESEHATAN MASYARAKAT VETERINER, PENGOLAHAN ', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('67056891', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 2 TIMU', '2018-02-08 00:00:00', '2018-02-08 07:07:23'),
('67058924', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 1 KAHIANGA', '2018-02-08 00:00:00', '2018-02-08 07:07:51'),
('67094523', 'DINAS LINGKUNGAN HIDUP', 'KEPALA DINAS LINGKUNGAN HIDUP', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('67215469', 'INSPEKTORAT DAERAH', 'INSPEKTUR PEMBANTU WILAYAH IV', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('67218063', 'DINAS KESEHATAN', 'SUB BAGIAN PROGRAM', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('67219684', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'BIDANG KEPEMUDAAN', '2018-01-03 00:00:00', '2017-11-09 06:36:53'),
('67236041', 'DINAS LINGKUNGAN HIDUP', 'SEKSI  PENEGAKAN HUKUM LINGKUNGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('67398402', 'DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN', 'SEKSI PENGAWASAN DAN EVALUASI PENYELENGGARAAN PERS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('67438692', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'UPTD PENDIDIKAN DAN KEBUDAYAAN KECAMATAN WANGI-WAN', '2018-01-03 00:00:00', '2017-11-09 06:36:53'),
('67490128', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', 'BIDANG  PENGELOLAAN INFORMASI ADMINISTRASI KEPENDU', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('67502869', 'DINAS PARIWISATA', 'SEKSI FASILITASI PEMASARAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('67503249', 'DINAS KESEHATAN', 'SEKSI PELAYANAN KESEHATAN PRIMER', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('67506284', 'DINAS KELAUTAN DAN PERIKANAN', 'SEKSI  PERMODALAN DAN PEMBINAAN KELEMBAGAAN PERIKA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('67568192', 'KECAMATAN WANGI-WANGI', 'SEKRETARIS KELURAHAN PONGO', '2018-01-03 00:00:00', '2017-11-09 06:36:53'),
('67694502', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN KAHIANGA', '2018-02-08 00:00:00', '2018-02-08 07:07:39'),
('67915208', 'DINAS PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN ANAK, PEMBERDAYAAN MASYARAKAT DAN DESA', 'SEKSI BINA ADMINISTRASI KELEMBAGAAN, PENGEMBANGAN, PERANGKAT DAN KEUANGAN DESA', '2019-08-26 00:00:00', '2019-08-26 03:31:15'),
('67932810', 'BADAN PENGELOLA PAJAK DAN RETRIBUSI DAERAH', 'SUB BIDANG PENAGIHAN PAJAK DAERAH', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('67951246', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN SOMBANO', '2018-02-08 00:00:00', '2018-02-08 06:57:39'),
('67958641', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN KABITA', '2018-02-08 00:00:00', '2018-02-08 06:54:26'),
('67985320', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK BUNGA KARANG KALEDUPA SELATAN', '2018-08-16 00:00:00', '2018-08-16 01:51:22'),
('68014972', 'DINAS PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN ANAK, PEMBERDAYAAN MASYARAKAT DAN DESA', 'BIDANG ADMINISTRASI PEMBERDAYAAN MASYARAKAT DAN DE', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('68052637', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'SUB BIDANG AKUNTANSI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('68053617', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', 'SEKSI  PENGOLAHAN DAN PENYAJIAN DATA KEPENDUDUKAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('68157406', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 1 MANDATI I', '2018-02-08 00:00:00', '2018-02-08 06:56:33'),
('68291704', 'SEKRETARIAT DPRD', 'SEKRETARIS DPRD', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('68310759', 'DINAS PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN ANAK, PEMBERDAYAAN MASYARAKAT DAN DESA', 'SEKSI PEMBERDAYAAN PEREMPUAN BIDANG SOSIAL, POLITI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('68329750', 'DINAS KESEHATAN', 'SEKSI SURVEILANS DAN IMUNISASI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('68352967', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN PALAHIDU', '2018-02-08 00:00:00', '2018-02-08 07:08:46'),
('68520419', 'DINAS PERINDSUTRIAN DAN PERDAGANGAN', 'SEKSI PENGAWASAN MUTU INDUSTRI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('68602914', 'PERUMAHAN DAN KAWASAN PERMUKIMAN', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('68725914', 'RUMAH SAKIT UMUM DAERAH', 'SEKSI PELAYANAN BEDAH SENTRAL, PERAWATAN INTENSIF ', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('68763105', 'BADAN PENANGGULANGAN BENCANA DAERAH', 'BIDANG PENANGANAN DARURAT DAN LOGISTIK', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('68912674', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK TUNAS HARAPAN TOMIA TIMUR', '2018-08-16 00:00:00', '2018-08-16 02:04:10'),
('68962703', 'SEKRETARIAT DAERAH', 'SUB BAGIAN KONSTRUKSI DAN KONSULTANSI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('69048521', 'RUMAH SAKIT UMUM DAERAH', 'SUB BAGIAN KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('69127068', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'SEKSI PENINGKATAN PRESTASI OLAHRAGA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('69136820', 'SEKRETARIAT DAERAH', 'SUB BAGIAN DOKUMENTASI DAN PERPUSTAKAAN HUKUM', '2018-01-01 00:00:00', '2017-11-09 06:36:53'),
('69386245', 'DINAS SOSIAL', 'KEPALA DINAS SOSIAL', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('69508374', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK TUNAS HARAPAN KALEDUPA SELATAN', '2018-08-16 00:00:00', '2018-08-16 01:50:45'),
('69731064', 'BADAN KESATUAN BANGSA DAN POLITIK', 'SUB BIDANG PENANGANAN KONFLIK', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('70176453', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN PADA', '2018-02-08 00:00:00', '2018-02-08 06:51:07'),
('70238976', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'SEKSI PEMBINAAN PELAKSANAAN PENANAMAN MODAL', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('70389645', 'DINAS LINGKUNGAN HIDUP', 'SEKSI  PENCEMARAN LINGKUNGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('70493251', 'SEKRETARIAT DAERAH', 'BAGIAN PEREKONOMIAN', '2018-01-01 00:00:00', '2017-11-09 06:36:53'),
('70841276', 'DINAS PERINDSUTRIAN DAN PERDAGANGAN', 'BIDANG KEMETROLOGIAN  DAN PENGAWASAN PERDAGANGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('70936145', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'SEKSI PENGOLAHAN DATA DAN SISTEM INFORMASI PENANAM', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('71039425', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN MOLA SELATAN', '2018-02-08 00:00:00', '2018-02-08 06:53:32'),
('71259780', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN SATAP WATUKOILA', '2018-02-08 00:00:00', '2018-02-08 06:47:05'),
('71296085', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK BERBAKTI  DESA HORUO KALEDUPA', '2018-08-16 00:00:00', '2018-08-16 01:45:34'),
('71750896', 'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA', 'SUB BAGIAN KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('71759682', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK WANIANSE', '2018-08-16 00:00:00', '2018-08-16 01:29:28'),
('71820693', 'SEKRETARIAT DPRD', 'SUB BAGIAN TATA USAHA DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('71869473', 'PERUMAHAN DAN KAWASAN PERMUKIMAN', 'BIDANG PERMUKIMAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('71956728', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN WAITII BARAT', '2018-02-08 00:00:00', '2018-02-08 07:04:03'),
('71978645', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'SEKSI PEMBUDAYAAN OLAHRAGA', '2018-01-03 00:00:00', '2017-11-09 06:36:53'),
('72079835', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK. JAYA MAKMUR MANTIGOLA KALEDUPA', '2018-08-16 00:00:00', '2018-08-16 01:48:34'),
('72170349', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK AL IKLAS TOMIA', '2018-08-16 00:00:00', '2018-08-16 02:01:30'),
('72401397', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK AL FATAH DESA PADA RAYA', '2018-08-16 00:00:00', '2018-08-16 01:33:07'),
('72406518', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SANGGAR KEGIATAN BELAJAR WAKATOBI', '2018-10-03 00:00:00', '2018-10-03 06:04:07'),
('72438190', 'DINAS PARIWISATA', 'SEKSI ANALISA DAN PENGEMBANGAN PASAR', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('72643107', 'SEKRETARIAT DAERAH', 'SEKRETARIS DAERAH', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('72710459', 'KECAMATAN WANGI-WANGI SELATAN', 'KELURAHAN MANDATI II', '2018-12-26 00:00:00', '2018-12-26 01:53:41'),
('72849701', 'PERUMAHAN DAN KAWASAN PERMUKIMAN', 'SEKSI PEMANTAUAN DAN EVALUASI PERUMAHAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('72867904', 'DINAS KOPERASI, USAHA KECIL MENENGAH DAN TENAGA KERJA', 'KEPALA DINAS KOPERASI, USAHA KECIL MENENGAH DAN TE', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('72875943', 'BADAN KESATUAN BANGSA DAN POLITIK', 'SUB BIDANG PENGEMBANGAN BUDAYA DAN ETIKA POLITIK', '2019-01-15 00:00:00', '2019-01-14 23:37:38'),
('72934085', 'BADAN KESATUAN BANGSA DAN POLITIK', 'BIDANG POLITIK', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('73249018', 'DINAS PERPUSTAKAAN DAN KEARSIPAN', 'BIDANG PENGOLAHAN, LAYANAN DAN PELESTARIAN BAHAN P', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('73261548', 'DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN', 'SEKSI PENGOLAHAN DATA DAN INFORMASI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('73457869', 'DINAS PERINDSUTRIAN DAN PERDAGANGAN', 'SEKSI ANEKA INDUSTRI DAN BIMBINGAN PRODUKSI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('73520749', 'DINAS PERHUBUNGAN', 'SEKSI  LALU LINTAS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('73568410', 'DINAS PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN ANAK, PEMBERDAYAAN MASYARAKAT DAN DESA', 'SEKSI PEMBERDAYAAN PEREMPUAN BIDANG EKONOMI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('73582067', 'DINAS KOPERASI, USAHA KECIL MENENGAH DAN TENAGA KERJA', 'SEKSI PENGAWASAN NORMA KETENAGAKERJAAN, KESELAMATA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('73812746', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('73819625', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN TOPANUANDA', '2018-02-08 00:00:00', '2018-02-08 06:52:55'),
('73820517', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SEKSI KELEMBAGAAN, SARANA DAN PRASARANA BIDANG PEM', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('73952108', 'DINAS KESEHATAN', 'BIDANG SUMBER DAYA KESEHATAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('73987624', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN JAYA MAKMUR', '2018-02-08 00:00:00', '2018-02-08 07:09:12'),
('74079358', 'BADAN PENANGGULANGAN BENCANA DAERAH', 'SUB BIDANG PENYELAMATAN, EVALUASI DAN PENANGANAN P', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('74083957', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'SUB BAGIAN  UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('74091852', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK- AL HIKMAH USUKU', '2018-09-04 00:00:00', '2018-09-04 02:31:24'),
('74179682', 'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA', 'SEKSI PENGENDALIAN DAN PENDISTRIBUSIAN ALAT DAN OB', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('74306197', 'BADAN KESATUAN BANGSA DAN POLITIK', 'SUB BIDANG KETAHANAN EKONOMI, SOSIAL DAN BUDAYA', '2019-01-04 00:00:00', '2019-01-04 00:22:40'),
('74316598', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK AL-HIDAYAH WAETUNO', '2018-09-04 00:00:00', '2018-09-04 02:29:28'),
('74329180', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'UPTD DIKBUD KECAMATAN TOGO BINONGKO', '2018-02-08 00:00:00', '2018-02-08 06:33:15'),
('74357821', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 3 LANGGE', '2018-02-08 00:00:00', '2018-02-08 07:00:48'),
('74382769', 'DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN', 'DINAS PERUMAHAN DAN KAWASAN PERMUKINAN', '2019-05-23 00:00:00', '2019-05-23 03:47:04'),
('74395270', 'DINAS PERPUSTAKAAN DAN KEARSIPAN', 'BIDANG PEMBINAAN DAN PENGAWASAN KEARSIAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('74612039', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK DHARMAWANITA MAKORO BINONGKO', '2018-08-16 00:00:00', '2018-08-16 02:36:52'),
('74618205', 'DINAS KELAUTAN DAN PERIKANAN', 'SEKSI  PEMBENIHAN DAN PEMBESARAN IKAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('74653908', 'DINAS KETAHANAN PANGAN', 'KEPALA DINAS KETAHANAN PANGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('74658390', 'DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN', 'SEKSI OPERASIONAL PENGAMANAN PERSANDIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('74827531', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('74856709', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN OIHU', '2018-02-08 00:00:00', '2018-02-08 07:10:43'),
('75029317', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN 1 BINONGKO', '2019-11-13 00:00:00', '2019-11-13 03:22:44'),
('75134928', 'DINAS KESEHATAN', 'BIDANG KESEHATAN MASYARAKAT', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('75684932', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN WAELUMU', '2018-02-08 00:00:00', '2018-02-08 06:50:38'),
('75697108', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK WADURI PERMAI KEC. KALEDUPA', '2018-09-20 00:00:00', '2018-09-20 07:02:40'),
('75748063', 'KECAMATAN TOMIA', 'KELURAHAN WAHA', '2019-02-22 00:00:00', '2019-02-22 01:26:58'),
('75801279', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('75920438', 'KECAMATAN WANGI-WANGI', 'LURAH PONGO', '2018-01-03 00:00:00', '2017-11-09 06:36:53'),
('75962783', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN 4 WANGI-WANGI', '2018-02-08 00:00:00', '2018-02-08 06:41:56'),
('76083451', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN BUKU', '2018-02-08 00:00:00', '2018-02-08 06:54:33'),
('76347289', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 1 AMBEUA', '2018-02-08 00:00:00', '2018-02-08 06:59:37'),
('76521079', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'KEPALA DINAS KEPEMUDAAN DAN OLAHRAGA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('76539204', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK AL MAWADDAH WANGI-WANGI SELATAN', '2018-08-16 00:00:00', '2018-08-16 01:40:55'),
('76743529', 'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA', 'SEKSI PENDAYAGUNAAN DAN PENYULUHAN KELUARGA BERENC', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('77026841', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SEKSI CAGAR BUDAYA DAN PERMUSEUMAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('77194625', 'BADAN KESATUAN BANGSA DAN POLITIK', 'BIDANG KEWASPADAAN NASIONAL', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('77213450', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'UPTD DIKBUD KECAMATAN WANGI-WANGI SELATAN', '2018-02-08 00:00:00', '2018-02-08 06:31:56'),
('77231906', 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH', 'SUB BIDANG INOVASI DAN TEKNOLOGI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('77394521', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'SEKSI NONPERIZINAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('77920531', 'KECAMATAN TOMIA', 'KELURAHAN ONEMAY', '2019-02-22 00:00:00', '2019-02-22 01:28:28'),
('78160932', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK NURUL JIHAD KALEDUPA SELATAN', '2018-08-16 00:00:00', '2018-08-16 01:51:55'),
('78275093', 'BADAN PENANGGULANGAN BENCANA DAERAH', 'SUB BAGIAN KEUANGAN DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('78401396', 'SATUAN POLISI PAMONG PPRAJA DAN PEMADAM KEBAKARAN', 'SEKSI PEMADAM DAN EVAKUASI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('78912736', 'DINAS KESEHATAN', 'UPTD PUSKESMAS KALEDUPA', '2018-02-08 00:00:00', '2018-02-08 06:27:46'),
('79038246', 'DINAS PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN ANAK, PEMBERDAYAAN MASYARAKAT DAN DESA', 'SEKSI PERLINDUNGAN KHUSUS DAN DATA KEKERASAN ANAK', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('79067483', 'DINAS KETAHANAN PANGAN', 'BIDANG KONSUMSI DAN  KEAMANAN PANGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('79135467', 'BADAN PENGELOLA PAJAK DAN RETRIBUSI DAERAH', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('79284513', 'RUMAH SAKIT UMUM DAERAH', 'DIREKTUR RUMAH SAKIT UMUM DAERAH', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('79402685', 'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA', 'SEKSI  PEMADUAN DAN SINKRONISASI KEBIJAKAN PENGEND', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('79507421', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK WANDE-WANDE KALEDUPA SELATAN', '2018-08-16 00:00:00', '2018-08-16 01:51:06'),
('79541673', 'KECAMATAN TOMIA TIMUR', 'KELURAHAN BAHARI', '2019-08-19 00:00:00', '2019-08-19 03:22:17'),
('80473592', 'PERUMAHAN DAN KAWASAN PERMUKIMAN', 'SEKSI PENGENDALIAN DAN EVALUASI PRASARANA, SARANA ', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('80672158', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK KAMBOJA', '2018-08-16 00:00:00', '2018-08-16 01:29:17'),
('80716584', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN BANTE', '2018-02-08 00:00:00', '2018-02-08 07:09:26'),
('80867413', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN RUNDUMA', '2018-02-08 00:00:00', '2018-02-08 07:02:51'),
('80894716', 'DINAS KESEHATAN', 'BIDANG BINA PELAYANAN KESEHATAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('81094768', 'BADAN PENANGGULANGAN BENCANA DAERAH', 'SUB BIDANG KESIAP-SIAGAAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('81250736', 'DINAS SOSIAL', 'SEKSI REHABILITASI SOSIAL PENYANDANG DISABILITAS, ', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('81357869', 'DINAS PARIWISATA', 'KEPALA DINAS PARIWISATA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('81397025', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK KUNCUP PERTIWI DHARMAWANITA KALEDUPA', '2018-08-16 00:00:00', '2018-08-16 01:42:58'),
('81428753', 'DINAS PERPUSTAKAAN DAN KEARSIPAN', 'SEKSI LAYANAN, OTOMASI DAN KERJA SAMA PERPUSTAKAAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('81462980', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK DHARMAWANITA WAITII', '2018-08-16 00:00:00', '2018-08-16 02:00:40'),
('81490853', 'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA', 'BIDANG  KELUARGA BERENCANA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('81746829', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN SATAP LAMANGGAU', '2018-02-08 00:00:00', '2018-02-08 06:47:41'),
('81753946', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG', 'SEKSI PERENCANAAN TATA RUANG', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('81853724', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 2 BANTE', '2018-02-08 00:00:00', '2018-02-08 07:11:47'),
('82014967', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN NUMANA', '2018-02-08 00:00:00', '2018-02-08 06:53:22'),
('82048751', 'SATUAN POLISI PAMONG PPRAJA DAN PEMADAM KEBAKARAN', 'SEKSI  OPERASI DAN PENGENDALIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('82078691', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG', 'BIDANG BINA MARGA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('82098174', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 1 KAPOTA', '2018-02-08 00:00:00', '2018-02-08 06:56:52'),
('82168370', 'KECAMATAN WANGI-WANGI', 'Seksi Pembangunan', '2019-05-15 00:00:00', '2019-05-15 05:08:46'),
('82308945', 'KECAMATAN TOMIA', 'SEKSI PEMBANGUNAN', '2019-01-09 00:00:00', '2019-01-09 02:44:44'),
('82385409', 'DINAS PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN ANAK, PEMBERDAYAAN MASYARAKAT DAN DESA', 'SEKSI PEMBINAAN KELEMBAGAAN DAN PELATIHAN MASYARAK', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('82416985', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK TUNAS KAMBOJA KALEDUPA SELATAN', '2018-08-16 00:00:00', '2018-08-16 01:53:12'),
('82637905', 'DINAS PERTANIAN', 'BIDANG TANAMAN PANGAN DAN HORTIKULTURA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('82678045', 'DINAS PERTANIAN', 'SEKSI KESEHATAN HEWAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('82716085', 'KECAMATAN WANGI-WANGI', 'SEKRATARIS KECAMATAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('82743598', 'DINAS LINGKUNGAN HIDUP', 'SEKSI  PEMELIHARAAN LINGKUNGAN HIDUP', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('82964815', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'SUB BAGIAN PROGRAM, KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('83065274', 'SATUAN POLISI PAMONG PPRAJA DAN PEMADAM KEBAKARAN', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('83149852', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'SUB BIDANG UMUM DAN DOKUMENTASI PEGAWAI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('83164820', 'DINAS SOSIAL', 'SEKSI PERLINDUNGAN SOSIAL KORBAN BENCANA ALAM DAN ', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('83206741', 'PERUMAHAN DAN KAWASAN PERMUKIMAN', 'BIDANG PERUMAHAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('83425910', 'DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN', 'SEKSI PENGENDALIAN DAN EVALUASI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('83507864', 'SATUAN POLISI PAMONG PPRAJA DAN PEMADAM KEBAKARAN', 'SUB BAGIAN KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('83541608', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN 4 TOMIA', '2018-02-08 00:00:00', '2018-02-08 06:46:08'),
('83564892', 'SATUAN POLISI PAMONG PPRAJA DAN PEMADAM KEBAKARAN', 'SEKSI KETERTIBAN UMUM', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('83675028', 'DINAS PERTANIAN', 'SEKSI METODE DAN INFORMASI PENYULUHAN PERTANIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('83692508', 'SATUAN POLISI PAMONG PPRAJA DAN PEMADAM KEBAKARAN', 'SEKSI PENEGAKAN DAN KERJA SAMA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('83694027', 'INSPEKTORAT DAERAH', 'PENGADMINISTRASI UMUM', '2019-05-13 00:00:00', '2019-05-13 03:47:20'),
('83742851', 'KECAMATAN KALEDUPA', 'SEKRETARIAT KECAMATAN KALEDUPA', '2019-01-03 00:00:00', '2019-01-03 07:50:30'),
('84017295', 'SEKRETARIAT DAERAH', 'SUB BAGIAN KESEHATAN, SOSIAL, TENAGA KERJA DAN TRA', '2018-01-01 00:00:00', '2017-11-09 06:36:53'),
('84168390', 'SEKRETARIAT DAERAH', 'SUB BAGIAN BANTUAN HUKUM DAN HAM', '2018-01-01 00:00:00', '2017-11-09 06:36:53'),
('84195680', 'DINAS KETAHANAN PANGAN', 'SEKSI SUMBER DAYA PANGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('84196203', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'BIDANG KEOLAHRAGAAN', '2018-01-03 00:00:00', '2017-11-09 06:36:53'),
('84617059', 'SEKRETARIAT DAERAH', 'BAGIAN HUKUM', '2018-01-01 00:00:00', '2017-11-09 06:36:53'),
('84659378', 'SEKRETARIAT DPRD', 'SUB BAGIAN HUKUM DAN DOKUMENTASI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('84687025', 'DINAS KOPERASI, USAHA KECIL MENENGAH DAN TENAGA KERJA', 'SEKSI PEMBERDAYAAN DAN FASILITASI USAHA KECIL', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('84721398', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN WAITII', '2018-02-08 00:00:00', '2018-02-08 07:02:19'),
('84953201', 'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA', 'SEKSI  JAMINAN PELAYANAN KELUARGA BERENCANA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('85043817', 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH', 'SUB BIDANG EKONOMI, SUMBER DAYA ALAM, LINGKUNGAN H', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('85123497', 'BADAN PENANGGULANGAN BENCANA DAERAH', 'SUB BAGIAN PROGRAM DAN PERUNDANG-UNDANGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('85402183', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK DHARMAWANITA LAULUA KALEDUPA', '2018-08-16 00:00:00', '2018-08-16 01:44:04'),
('85692108', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'BIDANG PEMBINAAN PENDIDIKAN DASAR', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('85698204', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK AL HIKMAH USUKU TOMIA TIMUR', '2018-08-16 00:00:00', '2018-08-16 02:02:09'),
('85739108', 'DINAS KOPERASI, USAHA KECIL MENENGAH DAN TENAGA KERJA', 'SUB BAGIAN PROGRAM, KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('85812439', 'DINAS KETAHANAN PANGAN', 'SEKSI DISTRIBUSI PANGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('85863421', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('86074295', 'DINAS PERHUBUNGAN', 'SEKSI  PERENCANAAN PRASARANA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('86139725', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK AWALUDDIN TOMIA TIMUR', '2018-08-16 00:00:00', '2018-08-16 02:05:28'),
('86179425', 'SEKRETARIAT DAERAH', 'SUB BAGIAN SUMBER DAYA ALAM', '2018-01-01 00:00:00', '2017-11-09 06:36:53'),
('86185024', 'BADAN PENANGGULANGAN BENCANA DAERAH', 'BIDANG REHABILITASI DAN KONSTRUKSI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('86278314', 'BADAN KESATUAN BANGSA DAN POLITIK', 'SUB BAGIAN TATA USAHA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('86287159', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK AL HIDAYAH ONEMAY', '2018-08-16 00:00:00', '2018-08-16 02:00:28'),
('86327948', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK. KAMALI KALEDUPA', '2018-08-16 00:00:00', '2018-08-16 01:47:48'),
('86405712', 'BADAN KESATUAN BANGSA DAN POLITIK', 'KEPALA BADAN KESATUAN BANGSA DAN POLITIK', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('86540983', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN 1 KALEDUPA', '2018-02-08 00:00:00', '2018-02-08 06:44:57'),
('86749028', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK AL-HIDAYAH KWC. WANGI-WANGI', '2018-09-04 00:00:00', '2018-09-04 02:46:30'),
('86835109', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'SUB BIDANG PENERIMAAN  DAN PEMBIAYAAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('86912540', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SEKSI KELEMBAGAAN, SARANA DAN PRASARANA BIDANG PEM', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('86943012', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 2 OLLO', '2018-02-08 00:00:00', '2018-02-08 06:59:11'),
('87062549', 'BADAN PENANGGULANGAN BENCANA DAERAH', 'KEPALA BADAN PENANGGULANGAN BENCANA DAERAH', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('87140926', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 2 WANCI', '2018-02-08 00:00:00', '2018-02-08 06:51:48'),
('87213568', 'SEKRETARIAT DAERAH', 'SUB BAGIAN PEMERINTAHAN DESA/ KELURAHAN', '2018-01-01 00:00:00', '2017-11-09 06:36:53'),
('87486523', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 2 RUKUWA', '2018-02-08 00:00:00', '2018-02-08 07:10:17'),
('87563804', 'DINAS SOSIAL', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('87680152', 'BADAN KESATUAN BANGSA DAN POLITIK', 'SUB BIDANG FASILITASI PARTAI POLITIK DAN PEMILU', '2019-01-04 00:00:00', '2019-01-04 00:28:11'),
('87894135', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SEKSI TENAGA KEBUDAYAAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53');
INSERT INTO `data_unit` (`id_unit`, `nama_satker`, `nama_unit`, `iat`, `uat`) VALUES
('87943126', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 3 WAHA TOMIA', '2018-02-08 00:00:00', '2018-02-08 07:03:43'),
('88056439', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'BIDANG PELAYANAN PERIZINAN DAN NONPERIZINAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('88072931', 'PERUMAHAN DAN KAWASAN PERMUKIMAN', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('88157906', 'DINAS PERTANIAN', 'BIDANG PRASARANA, SARANA DAN PENYULUHAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('88294360', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG', 'KEPALA DINAS PEKERJAAN UMUM DAN PENATAAN RUANG', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('88301465', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'SEKSI PELAPORAN DAN PENINGKATAN LAYANAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('88432970', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK DHARMAWANITA. BURANGA KALEDUPA', '2018-08-16 00:00:00', '2018-08-16 01:45:11'),
('88459603', 'SEKRETARIAT DAERAH', 'SEKRETARIAT DAERAH', '2018-02-13 00:00:00', '2018-02-13 06:42:30'),
('88546193', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', 'SEKSI  SISTEM INFORMASI ADMINISTRASI KEPENDUDUKAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('88630427', 'DINAS SOSIAL', 'BIDANG REHABILITASI SOSIAL', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('88695370', 'SEKRETARIAT DAERAH', 'BAGIAN PROTOKOL, KOMUNIKASI PUBLIK DAN KERJA SAMA', '2018-01-01 00:00:00', '2017-11-09 06:36:53'),
('88704923', 'DINAS LINGKUNGAN HIDUP', 'BIDANG  PENGELOLAAN SAMPAH, LIMBAH BAHAN BERBAHAYA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('88732049', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK TOGO MOLENGO WANGI-WANGI SELATAN', '2018-08-16 00:00:00', '2018-08-16 01:40:36'),
('88750324', 'DINAS KOPERASI, USAHA KECIL MENENGAH DAN TENAGA KERJA', 'SEKRETARIAT', '2019-08-23 00:00:00', '2019-08-23 00:41:27'),
('88935726', 'SEKRETARIAT DPRD', 'SUB BAGIAN RAPAT DAN RISALAH', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('89103267', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 1 MOLA UTARA', '2018-02-08 00:00:00', '2018-02-08 06:55:21'),
('89203714', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK.WADURI PERMAI KALEDUPA', '2018-08-16 00:00:00', '2018-08-16 01:47:32'),
('89340567', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN 1 TOMIA', '2018-02-08 00:00:00', '2018-02-08 06:45:45'),
('89387614', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 2 PONGO', '2018-09-25 00:00:00', '2018-09-25 00:07:15'),
('89460751', 'SEKRETARIAT DAERAH', 'ANALIS KELEMBAGAAN', '2018-04-03 00:00:00', '2018-04-03 00:58:58'),
('89463017', 'KECAMATAN TOGO BINONGKO', 'BAGIAN UMUM DAN KEPEGAWAIAN', '2019-08-19 00:00:00', '2019-08-19 00:13:17'),
('89463710', 'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA', 'BIDANG  PENGENDALIAN PENDUDUK', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('89518427', 'DINAS PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN ANAK, PEMBERDAYAAN MASYARAKAT DAN DESA', 'BIDANG KUALITAS HIDUP PEREMPUAN DAN KELUARGA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('89537126', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN 3 TOMIA', '2018-02-08 00:00:00', '2018-02-08 06:46:01'),
('89564132', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', 'BIDANG  PELAYANAN DAN PENDAFTARAN PENDUDUK', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('89572861', 'DINAS PARIWISATA', 'BIDANG PENGEMBANGAN DESTINASI DAN  INDUSTRI PARIWI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('89604371', 'BADAN KESATUAN BANGSA DAN POLITIK', 'SUB BIDANG IMPLEMENTASI KEBIJAKAN PUBLIK DAN PENDI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('89612837', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN SATAP KULATI', '2018-02-08 00:00:00', '2018-02-08 06:48:21'),
('89728041', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'BENDAHRA PENGURUS BARANG', '2018-03-14 00:00:00', '2018-03-14 03:07:39'),
('89740615', 'BADAN PENGELOLA PAJAK DAN RETRIBUSI DAERAH', 'SUB BIDANG PENETAPAN DAN KEBERATAN PAJAK DAERAH', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('90276351', 'DINAS PERHUBUNGAN', 'BIDANG  LALU LINTAS DAN ANGKUTAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('90413286', 'DINAS KOPERASI, USAHA KECIL MENENGAH DAN TENAGA KERJA', 'BIDANG PEMBERDAYAAN DAN PENGEMBANGAN KOPERASI DAN ', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('90526379', 'DINAS KESEHATAN', 'UPTD PUSKESMAS USUKU', '2018-02-08 00:00:00', '2018-02-08 06:28:32'),
('90739158', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN MELAI ONE', '2018-02-08 00:00:00', '2018-02-08 06:53:42'),
('90826153', 'KECAMATAN BINONGKO', 'KELURAHAN TAIPABU', '2019-08-19 00:00:00', '2019-08-19 01:32:58'),
('90869517', 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH', 'SUB BIDANG SOSIAL BUDAYA, PEMBERDAYAAN MASYARAKAT ', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('90914652', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 2 POPALIA', '2018-02-08 00:00:00', '2018-02-08 07:11:08'),
('90916342', 'DINAS LINGKUNGAN HIDUP', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('90935427', 'DINAS KELAUTAN DAN PERIKANAN', 'SEKSI  PENGOLAHAN DAN PEMASARAN HASIL PERIKAAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('91073284', 'DINAS PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN ANAK, PEMBERDAYAAN MASYARAKAT DAN DESA', 'KEPALA DINAS PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN ', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('91374825', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN KOMALA PAGI', '2018-02-08 00:00:00', '2018-02-08 06:54:06'),
('91482735', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 2 LANGGE', '2018-02-08 00:00:00', '2018-02-08 07:00:56'),
('91739428', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN 3 WANGI-WANGI', '2018-02-08 00:00:00', '2018-02-08 06:41:48'),
('92015786', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'SEKSI PERENCANAAN PENANAMAN MODAL', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('92085137', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK SETIA KAWAN KALEDUPA', '2018-08-16 00:00:00', '2018-08-16 01:44:19'),
('92316407', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 1 MANDATI II', '2018-09-20 00:00:00', '2018-09-20 00:25:49'),
('92715830', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', 'SUB BAGIAN PROGRAM', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('92719354', 'KECAMATAN TOMIA TIMUR', 'SEKRETARIAT KECAMATAN TOMIA TIMUR', '2019-08-19 00:00:00', '2019-08-19 03:07:37'),
('92793051', 'SEKRETARIAT DAERAH', 'SUB BAGIAN PERENCENAAN PROGRAM PEMBANGUNAN', '2018-01-01 00:00:00', '2017-11-09 06:36:53'),
('92841930', 'SEKRETARIAT DAERAH', 'STAF AHLI BIDANG PEMBANGUNAN', '2019-08-20 00:00:00', '2019-08-20 06:48:33'),
('93012864', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK PERSAMAAN SABAANGKITA  KALEDUPA', '2018-08-16 00:00:00', '2018-08-16 01:46:58'),
('93051268', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK ONOWA DESA KOROE', '2018-08-16 00:00:00', '2018-08-16 01:33:24'),
('93154907', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK KUNCUP PERTIWI LAGIWAE KALEDUPA', '2018-08-16 00:00:00', '2018-08-16 01:50:15'),
('93219765', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN SATAP BUKU', '2018-02-08 00:00:00', '2018-02-08 06:44:21'),
('93261785', 'DINAS LINGKUNGAN HIDUP', 'BIDANG  PENATAAN DAN PENAATAN PERLINDUNGAN DAN PEN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('93417892', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'SEKSI INFRASTRUKTUR KEMITRAAN PEMUDA', '2018-01-03 00:00:00', '2017-11-09 06:36:53'),
('93462150', 'DINAS PERTANIAN', 'SEKRETARIS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('93609548', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 4 POPALIA', '2018-02-08 00:00:00', '2018-02-08 07:11:25'),
('93715064', 'DINAS LINGKUNGAN HIDUP', 'SUB BAGIAN  PROGRAM, KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('93826194', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'BIDANG PENGADUAN, KEBIJAKAN DAN PELAPORAN LAYANAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('93962187', 'DINAS PARIWISATA', 'SUB BAGIAN PROGRAM', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('93980756', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK NURUL ISLAM BINONGKO', '2018-08-16 00:00:00', '2018-08-16 02:37:34'),
('94170693', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK SEROJA KALEDUPA SELATAN', '2018-08-16 00:00:00', '2018-08-16 01:52:12'),
('94513098', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK MUSLIMAH WANGI-WANGI', '2018-08-16 00:00:00', '2018-08-16 01:39:14'),
('94561283', 'BADAN KESATUAN BANGSA DAN POLITIK', 'SUB BIDANG BINA IDEOLOGI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('94601957', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'SEKSI PENGEMBANGAN PEMUDA', '2018-01-03 00:00:00', '2017-11-09 06:36:53'),
('94635107', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG', 'SEKSI PENGEMBANGAN SISTEM PENYEDIAAN AIR BERSIH DA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('94725903', 'BADAN PENANGGULANGAN BENCANA DAERAH', 'SUB BIDANG REKONSTRUKSI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('94968705', 'DINAS PERPUSTAKAAN DAN KEARSIPAN', 'SEKSI AKUSISI, PENGOLAHAN DATA PRESERVASI ARSIP ST', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('95106238', 'SEKRETARIAT DAERAH', 'BAGIAN ADMINISTRASI PEMBANGUNAN', '2018-01-01 00:00:00', '2017-11-09 06:36:53'),
('95163472', 'SATUAN POLISI PAMONG PPRAJA DAN PEMADAM KEBAKARAN', 'SEKSI PENINGKATAN KAPASITAS', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('95298306', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'UPTD DIKBUD KECAMATAN TOMIA', '2018-02-08 00:00:00', '2018-02-08 06:32:43'),
('95416087', 'DINAS KESEHATAN', 'SEKSI ALAT KESEHATAN DAN PERBEKALAN KESEHATAN RUMA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('95603918', 'KECAMATAN BINONGKO', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '2019-08-19 00:00:00', '2019-08-19 00:43:47'),
('95639201', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'SUB BIDANG PENGELUARAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('95921648', 'DINAS PERPUSTAKAAN DAN KEARSIPAN', 'SEKSI PENGAWASAN KEARSIPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('96027835', 'SEKRETARIAT DPRD', 'SUB BAGIAN HUBUNGAN MASYARAKAT DAN PROTOKOLER', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('96241938', 'DINAS PERINDSUTRIAN DAN PERDAGANGAN', 'SEKSI SARANA DAN PROMOSI INDUSTRI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('96314207', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'SEKSI INFRASTRUKTUR KEMITRAAN PEMUDA', '2018-01-03 00:00:00', '2017-11-09 06:36:53'),
('96513824', 'DINAS PERHUBUNGAN', 'SEKSI PENGOPERASIAN PRASARANA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('96578132', 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH', 'SUB BAGIAN KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('96753102', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN TONGANO BARAT', '2018-02-08 00:00:00', '2018-02-08 07:04:21'),
('96847952', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'SUB BIDANG VERIFIKASI DAN EVALUASI', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('96930128', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN ONE MELANGKA', '2018-02-08 00:00:00', '2018-02-08 06:53:13'),
('96950813', 'PERUMAHAN DAN KAWASAN PERMUKIMAN', 'SEKSI PENINGKATAN KUALITAS DAN PENYEDIAAN PRASARAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('96981503', 'DINAS KESEHATAN', 'KEPALA DINAS KESEHATAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('97296581', 'BADAN PENGELOLA PAJAK DAN RETRIBUSI DAERAH', 'BIDANG  PENETAPAN DAN KEBERATAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('97409586', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN 1 WAHA', '2018-02-08 00:00:00', '2018-02-08 06:52:31'),
('97416528', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN SAMPUAWATU', '2018-02-08 00:00:00', '2018-02-08 06:58:11'),
('97541692', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK AL-IKHLAS', '2018-08-16 00:00:00', '2018-08-16 01:31:26'),
('97659840', 'DINAS KELAUTAN DAN PERIKANAN', 'BIDANG  PENGEMBANGAN KAWASAN PERIKANAN BUDIDAYA DA', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('97685310', 'DINAS PERTANIAN', 'BIDANG PETERNAKAN DAN KESEHATAN HEWAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('97841506', 'DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN', 'SEKSI PELAPORAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('97852460', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN SATAP POOKAMBUA', '2018-02-08 00:00:00', '2018-02-08 06:42:40'),
('98123095', 'DINAS KESEHATAN', 'SEKSI PELAYANAN KESEHATAN RUJUKAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('98130564', 'DINAS KETAHANAN PANGAN', 'SEKSI HARGA PANGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('98142679', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SEKSI PENDIDIK DAN TENAGA KEPENDIDIKAN BIDANG PEMB', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('98406531', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN SATAP SOMBANO', '2018-02-08 00:00:00', '2018-02-08 06:46:21'),
('98430672', 'DINAS LINGKUNGAN HIDUP', 'SEKSI  PENGELOLAAN SAMPAH', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('98519236', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', 'SEKSI  KELAHIRAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('98605719', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'PENATA ARSIP BIDANG MUTASI', '2018-03-14 00:00:00', '2018-03-14 03:05:42'),
('98641029', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'BIDANG KEOLAHRAGAAN', '2018-01-03 00:00:00', '2017-11-09 06:36:53'),
('98673245', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK FAJAR LESTARI TOMIA TIMUR', '2018-08-16 00:00:00', '2018-08-16 02:03:33'),
('98723469', 'DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN', 'SEKSI PEMANTAUAN DAN EVALUASI PERUMAHAN', '2019-01-04 00:00:00', '2019-01-04 00:32:55'),
('98750361', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK NURUL ILAYHI WANGI-WANGI SELATAN', '2018-08-16 00:00:00', '2018-08-16 01:41:34'),
('98759031', 'PERUMAHAN DAN KAWASAN PERMUKIMAN', 'SUB BAGIAN PROGRAM, KEUANGAN DAN PERLENGKAPAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('98760193', 'PERUMAHAN DAN KAWASAN PERMUKIMAN', 'SEKSI PENDATAAN DAN PERENCANAAN KAWASAN PERMUKIMAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('99042837', 'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA', 'SUB BAGIAN PROGRAM', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('99062453', 'KECAMATAN WANGI-WANGI SELATAN', 'KELURAHAN MANDATI I', '2019-01-10 00:00:00', '2019-01-10 02:21:28'),
('99068541', 'DINAS PERINDSUTRIAN DAN PERDAGANGAN', 'SEKSI PENGAWASAN PERDAGANGAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('99206485', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN LENTEA', '2018-02-08 00:00:00', '2018-02-08 06:46:48'),
('99213078', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN 3 WANGI-WANGI SELATAN', '2018-02-08 00:00:00', '2018-02-08 06:43:55'),
('99270856', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'SUB BIDANG PENDIDIKAN DAN PELATIHAN PRAJABATAN DAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('99436815', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN 2 WANGI-WANGI SELATAN', '2018-02-08 00:00:00', '2018-02-08 06:43:30'),
('99518460', 'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA', 'SEKSI  PEMETAAN PERKIRAAN PENGENDALIAN PENDUDUK', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('99543712', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG', 'SEKSI PRESERVASI JALAN DAN JEMBATAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('99682457', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK TUNAS BAHARI OIHU', '2018-08-16 00:00:00', '2018-08-16 02:38:27'),
('99703812', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN WAWOTIMU', '2018-02-08 00:00:00', '2018-02-08 07:04:10'),
('99751430', 'DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN', 'BIDANG PERMUKIMAN', '2019-08-22 00:00:00', '2019-08-22 02:25:28'),
('99810637', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'SEKSI PROMOSI PENANAMAN MODAL', '2018-01-02 00:00:00', '2017-11-09 06:36:53'),
('99873604', 'DINAS PERTANIAN', 'SEKSI  PENGOLAHAN DAN PEMASARAN HASIL PERKEBUNAN', '2018-01-02 00:00:00', '2017-11-09 06:36:53');

-- --------------------------------------------------------

--
-- Table structure for table `data_unor`
--

CREATE TABLE `data_unor` (
  `id` int(10) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `text` varchar(256) NOT NULL,
  `link` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_unor`
--

INSERT INTO `data_unor` (`id`, `parent_id`, `name`, `text`, `link`) VALUES
(34, 1, 'PEMERINTAHAN KABUPATEN WAKATOBI', 'PEMERINTAHAN KABUPATEN WAKATOBI', ''),
(52, 51, 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', ''),
(53, 52, 'SEKRETARIS', 'SEKRETARIS', ''),
(54, 53, 'SUB BAGIAN PROGRAM, KEUANGAN DAN PERLENGKAPAN', 'SUB BAGIAN PROGRAM, KEUANGAN DAN PERLENGKAPAN', ''),
(56, 54, 'tEST', 'tEST', ''),
(57, 56, 'tEST', 'tEST', ''),
(58, 53, 'tEST', 'tEST', ''),
(59, 53, 'YASDYUD', 'YASDYUD', ''),
(60, 59, 'JZHF', 'JZHF', ''),
(61, 34, 'SEKRETARIAT DAERAH', 'SEKRETARIAT DAERAH', ''),
(62, 53, 'SUB', 'SUB', ''),
(63, 34, 'KECAMATAN WANGI - WANGI', 'KECAMATAN WANGI - WANGI', ''),
(65, 64, 'KECAMATAN WANGI-WANGI', 'KECAMATAN WANGI-WANGI', ''),
(69, 52, 'BIDANG PENDIDIKAN DASAR', 'BIDANG PENDIDIKAN DASAR', ''),
(70, 69, 'SEKSI INFRASTRUKTUR', 'SEKSI INFRASTRUKTUR', ''),
(71, 68, 'SEKRETARIAT CAMAT', 'SEKRETARIAT CAMAT', ''),
(72, 68, 'SEKSI PEMERINTAHAN', 'SEKSI PEMERINTAHAN', ''),
(73, 71, 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', ''),
(74, 65, 'SEKRETARIS', 'SEKRETARIS', ''),
(75, 65, 'SEKSI', 'SEKSI', ''),
(76, 74, 'SUB BAGIAN', 'SUB BAGIAN', ''),
(78, 34, 'DINAS PENDIDIKAN', 'DINAS PENDIDIKAN', ''),
(79, 78, 'SEKRETARIS', 'SEKRETARIS', ''),
(80, 78, 'BIDANG PENDIDIKAN DASAR', 'BIDANG PENDIDIKAN DASAR', ''),
(81, 34, 'DINAS KESEHATAN', 'DINAS KESEHATAN', ''),
(82, 78, 'BIDANG PENDIDIKAN ANAK USIA DINI', 'BIDANG PENDIDIKAN ANAK USIA DINI', '');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_pegawai`
--

CREATE TABLE `dokumen_pegawai` (
  `id` int(50) NOT NULL,
  `dokumen_id` int(50) DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `nama_dokumen` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `last_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `dokumen_pegawai`
--

INSERT INTO `dokumen_pegawai` (`id`, `dokumen_id`, `nip`, `nama_dokumen`, `file`, `last_update`) VALUES
(99, 55, '196508301994031007', '12345', '123.pdf', NULL),
(100, 53, '196508301994031007', '0000', '11111.pdf', NULL),
(101, 51, '196508301994031007', 'pppp', 'pppp.pdf', NULL),
(102, 53, '196508301994031007', 'oooooo', 'oooooo.pdf', NULL),
(103, 53, '196508301994031007', '09op', '09op.pdf', NULL),
(104, 55, '196508301994031007', 'aaabbccdzzzz', 'aaaa.pdf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `keterangan_badan`
--

CREATE TABLE `keterangan_badan` (
  `nip` varchar(255) NOT NULL,
  `tinggi_badan` varchar(50) NOT NULL,
  `berat_badan` varchar(50) NOT NULL,
  `iat` date NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `keterangan_badan`
--

INSERT INTO `keterangan_badan` (`nip`, `tinggi_badan`, `berat_badan`, `iat`, `uat`) VALUES
('196703241993032000', '', '', '0000-00-00', '2020-03-31 03:25:42'),
('198008022010012021', '156 cm', '60 kg', '2019-05-06', '2019-12-18 06:34:44'),
('198206012010012013', '200', '13', '0000-00-00', '2020-03-28 18:22:19');

-- --------------------------------------------------------

--
-- Table structure for table `keterangan_lainnya`
--

CREATE TABLE `keterangan_lainnya` (
  `nip` varchar(255) NOT NULL,
  `bahasa` varchar(128) NOT NULL,
  `no_ktp` varchar(100) NOT NULL,
  `no_karpeg` varchar(100) NOT NULL,
  `no_askes` varchar(100) NOT NULL,
  `no_taspen` varchar(100) NOT NULL,
  `no_karis` varchar(100) NOT NULL,
  `no_npwp` varchar(100) NOT NULL,
  `no_korpri` varchar(100) NOT NULL,
  `iat` date NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `keterangan_lainnya`
--

INSERT INTO `keterangan_lainnya` (`nip`, `bahasa`, `no_ktp`, `no_karpeg`, `no_askes`, `no_taspen`, `no_karis`, `no_npwp`, `no_korpri`, `iat`, `uat`) VALUES
('196703241993032000', 'bindo,english,mandarin', '12345678901234567', '123456789009876543', '', '', '', '', '', '0000-00-00', '2020-03-31 03:25:42'),
('198008022010012021', 'bindo', '7471014208800001', 'P 629408', '0000193898812', '800802100120210', '180172 MM', '66.121.413.0-816.000', '', '2019-05-06', '2019-05-06 05:31:01'),
('198206012010012013', 'bindo', '12345678901234567', '123456789009876543', '123456789009876543', '123456789009876543', '123456789009876543', '123456789009876543', '123456789009876543', '0000-00-00', '2020-03-28 18:22:19');

-- --------------------------------------------------------

--
-- Table structure for table `mutasi_data`
--

CREATE TABLE `mutasi_data` (
  `id` int(20) NOT NULL,
  `id_mutasi_sk` int(20) DEFAULT NULL,
  `nip` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `pangkat_gol` varchar(100) DEFAULT NULL,
  `jabatan_lama` varchar(100) DEFAULT NULL,
  `satker_lama` varchar(100) DEFAULT NULL,
  `unker_lama` varchar(100) DEFAULT NULL,
  `jabatan_baru` varchar(100) DEFAULT NULL,
  `satker_baru` varchar(100) DEFAULT NULL,
  `unker_baru` varchar(100) DEFAULT NULL,
  `no_sk` varchar(100) DEFAULT NULL,
  `tgl_sk` varchar(100) DEFAULT NULL,
  `status` enum('onProcess','Belum Valid','Valid') DEFAULT 'Valid'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mutasi_data`
--

INSERT INTO `mutasi_data` (`id`, `id_mutasi_sk`, `nip`, `nama`, `pangkat_gol`, `jabatan_lama`, `satker_lama`, `unker_lama`, `jabatan_baru`, `satker_baru`, `unker_baru`, `no_sk`, `tgl_sk`, `status`) VALUES
(24, 20, '198206012010012013', 'pegawai pegawai pegawai', 'Pembina Utama Muda - IV c', 'PENGADMINISTRASI KESEHATAN', 'DINAS KESEHATAN', 'SEKSI KESEHATAN KELUARGA DAN GIZI MASYARAKAT', 'PENGADMINISTRASI DATA KEPEGAWAIAN', 'DINAS PERHUBUNGAN', 'TK MAWAR KALEDUPA SELATAN', '800/335/KOPDAR', '01/08/2020', 'Belum Valid'),
(25, 20, '198206012010012013', 'pegawai pegawai pegawai', 'Pembina Utama Muda - IV c', 'PENGADMINISTRASI KESEHATAN', 'DINAS KESEHATAN', 'SEKSI KESEHATAN KELUARGA DAN GIZI MASYARAKAT', 'Caraka', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SDN  WAGINOPO', '800/335/KOPDAR', '01/08/2020', 'Belum Valid'),
(27, 20, '198206012010012013', 'pegawai pegawai pegawai', 'Pembina Utama Muda - IV c', 'PENGADMINISTRASI KESEHATAN', 'DINAS KESEHATAN', 'SEKSI KESEHATAN KELUARGA DAN GIZI MASYARAKAT', 'Pengadministrasi SLTP', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'KEPALA BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', '800/335/KOPDAR', '01/08/2020', 'Belum Valid'),
(28, 20, '198206012010012013', 'pegawai pegawai pegawai', 'Pembina Utama Muda - IV c', 'PENGADMINISTRASI KESEHATAN', 'DINAS KESEHATAN', 'SEKSI KESEHATAN KELUARGA DAN GIZI MASYARAKAT', 'Sekretaris Dinas', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN SATAP TANOWALI', '800/335/KOPDAR', '01/08/2020', 'Belum Valid'),
(29, 20, '198206012010012013', 'pegawai pegawai pegawai', 'Pembina Utama Muda - IV c', 'PENGADMINISTRASI KESEHATAN', 'DINAS KESEHATAN', 'SEKSI KESEHATAN KELUARGA DAN GIZI MASYARAKAT', 'PENGAWASAN PENYELENGGARAAN PEMERINTAH DI DAERAH', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SUB BIDANG SOSIAL BUDAYA, PEMBERDAYAAN MASYARAKAT ', '800/335/KOPDAR', '01/08/2020', 'Belum Valid'),
(30, 20, '198206012010012013', 'pegawai pegawai pegawai', 'Pembina Utama Muda - IV c', 'PENGADMINISTRASI KESEHATAN', 'DINAS KESEHATAN', 'SEKSI KESEHATAN KELUARGA DAN GIZI MASYARAKAT', 'Perawat Gigi Pelaksana', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SUB BIDANG PENGEMBANGAN SUMBER DAYA APARATUR', '800/335/KOPDAR', '01/08/2020', 'Belum Valid'),
(32, 20, '198206012010012013', 'pegawai pegawai pegawai', 'Pembina Utama Muda - IV c', 'PENGADMINISTRASI KESEHATAN', 'DINAS KESEHATAN', 'SEKSI KESEHATAN KELUARGA DAN GIZI MASYARAKAT', 'Perawat Gigi Pelaksana', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMPN SATAP PALEA', '800/335/KOPDAR', '01/08/2020', 'Belum Valid'),
(33, 20, '198206012010012013', 'pegawai pegawai pegawai', 'Pembina Utama Muda - IV c', 'PENGADMINISTRASI KESEHATAN', 'DINAS KESEHATAN', 'SEKSI KESEHATAN KELUARGA DAN GIZI MASYARAKAT', 'Perawat Gigi Pelaksana', 'DINAS PERHUBUNGAN', 'SUB BAGIAN UMUM DAN TATA USAHA', '800/335/KOPDAR', '01/08/2020', 'Belum Valid'),
(34, 20, '198206012010012013', 'pegawai pegawai pegawai', 'Pembina Utama Muda - IV c', 'PENGADMINISTRASI KESEHATAN', 'DINAS KESEHATAN', 'SEKSI KESEHATAN KELUARGA DAN GIZI MASYARAKAT', 'Pengadministrasi Laporan Apotik', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK MUSLIMAH WANGI-WANGI', '800/335/KOPDAR', '01/08/2020', 'Belum Valid'),
(35, 20, '198206012010012013', 'pegawai pegawai pegawai', 'Pembina Utama Muda - IV c', 'PENGADMINISTRASI KESEHATAN', 'DINAS KESEHATAN', 'SEKSI KESEHATAN KELUARGA DAN GIZI MASYARAKAT', 'PENGADMINISTRASI KESEHATAN', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SEKSI PEMERINTAHAN DAN PELAYANAN UMUM KELURAHAN PO', '800/335/KOPDAR', '01/08/2020', 'Belum Valid'),
(36, 20, '198206012010012013', 'pegawai pegawai pegawai', 'Pembina Utama Muda - IV c', 'PENGADMINISTRASI KESEHATAN', 'DINAS KESEHATAN', 'SEKSI KESEHATAN KELUARGA DAN GIZI MASYARAKAT', 'PENGAWASAN PENYELENGGARAAN PEMERINTAH DI DAERAH', 'DINAS PERTANIAN', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '800/335/KOPDAR', '01/08/2020', 'Belum Valid'),
(37, 20, '198206012010012013', 'pegawai pegawai pegawai', 'Pembina Utama Muda - IV c', 'PENGADMINISTRASI KESEHATAN', 'DINAS KESEHATAN', 'SEKSI KESEHATAN KELUARGA DAN GIZI MASYARAKAT', 'ANALIS KEPEGAWAIAN MUDA', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'TK TUNAS BAHARI TOMIA', '800/335/KOPDAR', '01/08/2020', 'Belum Valid'),
(38, 20, '198206012010012013', 'pegawai pegawai pegawai', 'Pembina Utama Muda - IV c', 'PENGADMINISTRASI KESEHATAN', 'DINAS KESEHATAN', 'SEKSI KESEHATAN KELUARGA DAN GIZI MASYARAKAT', 'Pengolah Data Anggaran Rutin', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', '800/335/KOPDAR', '01/08/2020', 'Belum Valid'),
(39, 20, '198206012010012013', 'pegawai pegawai pegawai', 'Pembina Utama Muda - IV c', 'PENGADMINISTRASI KESEHATAN', 'DINAS KESEHATAN', 'SEKSI KESEHATAN KELUARGA DAN GIZI MASYARAKAT', 'Penata Usaha Persuratan', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'KEPALA BADAN PENANGGULANGAN BENCANA DAERAH', '800/335/KOPDAR', '01/08/2020', 'Belum Valid'),
(40, 20, '198206012010012013', 'pegawai pegawai pegawai', 'Pembina Utama Muda - IV c', 'PENGADMINISTRASI KESEHATAN', 'DINAS KESEHATAN', 'SEKSI KESEHATAN KELUARGA DAN GIZI MASYARAKAT', 'PENGADMINISTRASI DATA KEPEGAWAIAN', 'DINAS PERHUBUNGAN', 'SEKSI PRASARANA DARAT', '800/335/KOPDAR', '01/08/2020', 'Belum Valid'),
(41, 20, '198206012010012013', 'pegawai pegawai pegawai', 'Pembina Utama Muda - IV c', 'PENGADMINISTRASI KESEHATAN', 'DINAS KESEHATAN', 'SEKSI KESEHATAN KELUARGA DAN GIZI MASYARAKAT', 'PENGADMINISTRASI KESEHATAN', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'SEKSI PRASARANA DARAT', '800/335/KOPDAR', '01/08/2020', 'Belum Valid'),
(42, 20, '198206012010012013', 'pegawai pegawai pegawai', 'Pembina Utama Muda - IV c', 'PENGADMINISTRASI KESEHATAN', 'DINAS KESEHATAN', 'SEKSI KESEHATAN KELUARGA DAN GIZI MASYARAKAT', 'Perawat Gigi Pelaksana', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SEKSI PEMERINTAHAN DAN PELAYANAN UMUM KELURAHAN PO', '800/335/KOPDAR', '01/08/2020', 'Belum Valid'),
(43, 20, '198206012010012013', 'pegawai pegawai pegawai', 'Pembina Utama Muda - IV c', 'PENGADMINISTRASI KESEHATAN', 'DINAS KESEHATAN', 'SEKSI KESEHATAN KELUARGA DAN GIZI MASYARAKAT', 'SEKSI REHABILITASI SOSIAL PENYANDANG DISABILITAS, TUNA SOSIAL DAN KORBAN PERDAGANGAN ORANG', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'SUB BIDANG EKONOMI, SUMBER DAYA ALAM, LINGKUNGAN H', '800/335/KOPDAR', '01/08/2020', 'Belum Valid'),
(45, 20, '198206012010012013', 'pegawai pegawai pegawai', 'Pembina Utama Muda - IV c', 'PENGADMINISTRASI KESEHATAN', 'DINAS KESEHATAN', 'SEKSI KESEHATAN KELUARGA DAN GIZI MASYARAKAT', 'Perawat Gigi Pelaksana', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'KEPALA DINAS PERHUBUNGAN', '800/335/KOPDAR', '01/08/2020', 'Belum Valid'),
(46, 20, '198206012010012013', 'pegawai pegawai pegawai', 'Pembina Utama Muda - IV c', 'PENGADMINISTRASI KESEHATAN', 'DINAS KESEHATAN', 'SEKSI KESEHATAN KELUARGA DAN GIZI MASYARAKAT', 'Inspektur Pembantu', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'SEKRETARIAT KECAMATAN WANGI-WANGI SELATAN', '800/335/KOPDAR', '01/08/2020', 'Belum Valid'),
(47, 20, '198206012010012013', 'pegawai pegawai pegawai', 'Pembina Utama Muda - IV c', 'PENGADMINISTRASI KESEHATAN', 'DINAS KESEHATAN', 'SEKSI KESEHATAN KELUARGA DAN GIZI MASYARAKAT', 'PRANATA LABORATORIUM KESEHATAN PELAKSANA', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SUB BAGIAN ADMINISTRASI  LAYANAN PENGADAAN SECARA ', '800/335/KOPDAR', '01/08/2020', 'Belum Valid');

-- --------------------------------------------------------

--
-- Table structure for table `mutasi_individu`
--

CREATE TABLE `mutasi_individu` (
  `id` int(20) NOT NULL,
  `nip` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `pangkat_gol` varchar(100) DEFAULT NULL,
  `jabatan_lama` varchar(100) DEFAULT NULL,
  `satker_lama` varchar(100) DEFAULT NULL,
  `unker_lama` varchar(100) DEFAULT NULL,
  `jabatan_baru` varchar(100) DEFAULT NULL,
  `satker_baru` varchar(100) DEFAULT NULL,
  `unker_baru` varchar(100) NOT NULL,
  `tentang` text,
  `no_sk` varchar(100) DEFAULT NULL,
  `tgl_sk` varchar(100) DEFAULT NULL,
  `pejabat` varchar(100) DEFAULT NULL,
  `status` enum('onProcess','Belum Valid','Valid') DEFAULT 'Valid'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mutasi_individu`
--

INSERT INTO `mutasi_individu` (`id`, `nip`, `nama`, `pangkat_gol`, `jabatan_lama`, `satker_lama`, `unker_lama`, `jabatan_baru`, `satker_baru`, `unker_baru`, `tentang`, `no_sk`, `tgl_sk`, `pejabat`, `status`) VALUES
(5, '198206012010012013', 'pegawai', 'Juru Muda Tingkat I - I b', 'Pengolah Data Anggaran Rutin', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', 'EPIDEMIOLOG KESEHATAN PELAKSANA', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', NULL, '12345', '04/04/2020', NULL, 'Belum Valid'),
(6, '198206012010012013', 'pegawai', 'Juru Muda Tingkat I - I b', 'Pengelola Pengembangan Otonomi Darah', 'DINAS PERHUBUNGAN', 'SEKSI PRASARANA DARAT', 'PENGADMINISTRASI KESEHATAN', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'TK DHARMAWANITA POPALIA TOGOBINONGKO', NULL, '1', '04/04/2020', NULL, 'Belum Valid'),
(8, '198601122011012005', 'budi', 'Juru Muda - I a', 'PRANATA LABORATORIUM KESEHATAN PELAKSANA', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'SEKSI PENGEMBANGAN PEMUDA', 'PENGADMINISTRASI KESEHATAN', 'SEKRETARIAT DAERAH', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN', NULL, '2134', '01/03/2020', NULL, 'Belum Valid'),
(9, '198601122011012005', 'budi', 'Juru Muda - I a', 'PRANATA LABORATORIUM KESEHATAN PELAKSANA', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'SEKSI PENGEMBANGAN PEMUDA', 'Pengolah Data Anggaran Rutin', 'KECAMATAN WANGI-WANGI', 'SEKSI PRASARANA DARAT', NULL, '10956', '04/04/2020', NULL, 'Belum Valid'),
(11, '198601122011012005', 'budi', 'Juru Muda - I a', 'PRANATA LABORATORIUM KESEHATAN PELAKSANA', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'SEKSI PENGEMBANGAN PEMUDA', 'Bendahara Barang', 'DINAS PERTANIAN', 'SEKSI PROMOSI PENANAMAN MODAL', NULL, '123', '05/02/2020', NULL, 'Valid'),
(12, '198206012010012013', 'pegawai pegawai pegawai', 'Pembina Utama Madya - IV d', 'PENGADMINISTRASI KESEHATAN', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'SUB BAGIAN KESEJAHTERAAN DAN PEMBERDAYAAN MASYARAKAT', 'PENYULUH KESEHATAN MASYARAKAT MUDA', 'DINAS PERHUBUNGAN', 'SUB BAGIAN  UMUM DAN KEPEGAWAIAN', NULL, '5534', '04/04/2020', NULL, 'Belum Valid');

-- --------------------------------------------------------

--
-- Table structure for table `mutasi_sk`
--

CREATE TABLE `mutasi_sk` (
  `id` int(15) NOT NULL,
  `no_sk` varchar(100) DEFAULT NULL,
  `tgl_sk` varchar(100) DEFAULT NULL,
  `tmt_sk` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mutasi_sk`
--

INSERT INTO `mutasi_sk` (`id`, `no_sk`, `tgl_sk`, `tmt_sk`) VALUES
(20, '800/335/KOPDAR', '01/08/2020', '29/05/2020'),
(22, '800/335/Budpar', '24/02/2020', '01/05/2020');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan_cuti`
--

CREATE TABLE `permohonan_cuti` (
  `id` int(11) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `jenis_cuti` varchar(128) NOT NULL,
  `tanggal_awal` varchar(128) NOT NULL,
  `tanggal_akhir` varchar(128) NOT NULL,
  `tanggal_aktif` varchar(128) NOT NULL,
  `admin` varchar(128) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permohonan_cuti`
--

INSERT INTO `permohonan_cuti` (`id`, `nip`, `nama_lengkap`, `jenis_cuti`, `tanggal_awal`, `tanggal_akhir`, `tanggal_aktif`, `admin`, `iat`, `uat`, `keterangan`) VALUES
(1, '198206012010012013', 'pegawai pegawai pegawai', 'Cuti Melahirkan', '07/03/2020', '07/03/2020', '07/03/2020', 'pegawai', '2020-03-31 18:51:17', '2020-03-31 10:53:05', 'Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_angkakredit`
--

CREATE TABLE `riwayat_angkakredit` (
  `id_riwayat` int(11) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `bulan_mulai` varchar(128) NOT NULL,
  `bulan_selesai` varchar(128) NOT NULL,
  `tahun_mulai` varchar(128) NOT NULL,
  `tahun_selesai` varchar(128) NOT NULL,
  `kredit_utama` varchar(128) NOT NULL,
  `kredit_penunjang` varchar(128) NOT NULL,
  `kredit_total` varchar(128) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `pertama_angkakredit` enum('0','1') NOT NULL DEFAULT '0',
  `no_sk` varchar(128) NOT NULL,
  `tanggal_sk` varchar(128) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `sub_instansi` varchar(255) NOT NULL,
  `admin` varchar(128) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `riwayat_angkakredit`
--

INSERT INTO `riwayat_angkakredit` (`id_riwayat`, `nip`, `bulan_mulai`, `bulan_selesai`, `tahun_mulai`, `tahun_selesai`, `kredit_utama`, `kredit_penunjang`, `kredit_total`, `id_jabatan`, `jabatan`, `pertama_angkakredit`, `no_sk`, `tanggal_sk`, `nama_lengkap`, `sub_instansi`, `admin`, `status`, `iat`, `uat`) VALUES
(2, '198601122011012005', 'februari', 'februari', '1994', '2028', '1100', '1100', '2200.00', 1054, 'salis', '0', '11', '25/02/2020', 'budi', '', 'Administrator', '1', '2020-03-26 20:41:59', '2020-03-27 02:46:00'),
(3, '198601122011012005', 'februari', 'februari', '2028', '2028', '100', '2100111', '2100211.00', 1054, 'salis', '0', '2135', '25/02/2020', 'budi', '', 'Administrator', '1', '2020-03-27 09:58:17', '2020-03-29 08:53:00'),
(4, '198206012010012013', 'januari', 'februari', '1999', '2030', '20', '220', '240.00', 1056, 'CALON GURU', '0', '213', '25/02/2020', 'pegawai pegawai pegawai', '', 'Administrator', '1', '2020-03-29 16:56:30', '2020-03-29 08:59:44'),
(5, '198206012010012013', 'maret', 'maret', '2027', '2019', '10', '10', '20.00', 1056, 'CALON GURU', '0', '213', '29/01/2020', 'pegawai pegawai pegawai', '', 'Administrator', '1', '2020-03-29 17:00:49', '2020-03-29 09:00:49');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_cuti`
--

CREATE TABLE `riwayat_cuti` (
  `id_riwayat` int(11) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `jenis_cuti` varchar(128) NOT NULL,
  `no_bkn` varchar(128) NOT NULL,
  `tanggal_skep` varchar(128) NOT NULL,
  `tanggal_bkn` varchar(128) NOT NULL,
  `tanggal_awal` varchar(128) NOT NULL,
  `tanggal_akhir` varchar(128) NOT NULL,
  `no_sk` varchar(128) NOT NULL,
  `tanggal_aktif` varchar(128) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `sub_instansi` varchar(255) DEFAULT NULL,
  `admin` varchar(128) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `riwayat_cuti`
--

INSERT INTO `riwayat_cuti` (`id_riwayat`, `nip`, `jenis_cuti`, `no_bkn`, `tanggal_skep`, `tanggal_bkn`, `tanggal_awal`, `tanggal_akhir`, `no_sk`, `tanggal_aktif`, `nama_lengkap`, `sub_instansi`, `admin`, `status`, `iat`, `uat`) VALUES
(2, '198311142002121001', 'Cuti Besar', '4654456433', '16/02/2018', '14/02/2018', '21/02/2018', '02/03/2018', '54678', '16/02/2018', 'HERMANTO M.', NULL, 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', '0', '2018-02-06 19:35:09', '2018-02-06 11:35:09'),
(3, '198311142002121001', 'Cuti Besar', '655434543', '23/02/2018', '16/02/2018', '15/02/2018', '01/03/2018', '456789098765', '20/02/2018', 'HERMANTO M.', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', '0', '2018-02-06 19:37:01', '2018-02-06 11:37:01'),
(7, '198103272009042002', 'Cuti Melahirkan', '01', '02/10/2010', '25/02/1977', '04/10/2010', '04/01/2011', '191/X/2010', '05/01/2011', 'MASTINA, S.Pd', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', '1', '2018-08-22 10:53:52', '2018-08-22 02:53:52'),
(8, '198103272009042002', 'Cuti Melahirkan', '01', '14/01/2012', '25/02/1977', '16/01/2012', '02/05/2012', 'KP.00.05/028/I/2012', '03/05/2012', 'MASTINA, S.Pd', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', '1', '2018-08-22 10:56:56', '2018-08-22 02:56:56'),
(10, '198411142011012019', 'Cuti Melahirkan', '01', '21/02/2014', '25/02/1977', '22/02/2014', '22/05/2014', '420/003/2014', '23/05/2014', 'RIA MARLINA', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', '1', '2018-08-26 14:15:00', '2018-08-26 06:15:00'),
(11, '197609032014102001', 'Cuti Melahirkan', '01', '23/03/2015', '25/02/1977', '23/03/2015', '23/06/2015', '445', '20/03/2015', 'MAWARTIN', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', '1', '2018-09-01 23:12:31', '2018-09-01 15:12:31'),
(12, '198308282010012042', 'Cuti Bersama', '01', '08/01/2018', '25/02/1977', '10/12/2017', '10/03/2018', '854/043/2018', '12/03/2018', 'LISMINI', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', '1', '2018-09-05 10:26:47', '2020-03-30 06:56:00'),
(13, '198008022010012021', 'Cuti Melahirkan', '123', '01/01/2020', '15/01/2020', '05/01/2020', '01/04/2020', 'qwert123', '02/04/2020', 'MISRAWATI', NULL, 'Administrator', '1', '2020-03-11 15:02:43', '2020-03-11 07:02:43'),
(15, '196012312006041311', 'Cuti Melahirkan', '123', '23/02/2020', '25/03/2020', '18/03/2020', '20/03/2020', '123', '17/03/2020', 'ARUHMI', NULL, 'Administrator', '1', '2020-03-20 18:45:36', '2020-03-20 10:45:36'),
(18, '198206012010012013', 'Cuti Sakit', '2211', '23/02/2020', '08/03/2020', '15/03/2020', '22/03/2020', '123', '15/03/2020', 'pegawai pegawai pegawai', NULL, 'Administrator', '1', '2020-03-29 18:31:11', '2020-03-29 10:32:33'),
(23, '198206012010012013', 'Cuti Karena Alasan Penting', '11111', '24/02/2020', '31/03/2020', '15/03/2020', '22/03/2020', '11111', '02/04/2020', 'pegawai pegawai pegawai', NULL, 'pegawai', '1', '2020-03-30 15:00:35', '2020-03-30 07:00:35'),
(26, '198206012010012013', 'Cuti CLTN', '77/owpr/093', '29/01/2020', '25/03/2020', '04/03/2020', '01/03/2020', '77/owpr/093', '29/03/2020', 'pegawai pegawai pegawai', NULL, 'pegawai', '1', '2020-03-30 17:23:03', '2020-03-30 09:23:03'),
(27, '198206012010012013', 'Cuti Tahunan', '123/123/123', '27/02/2020', '27/02/2020', '01/03/2020', '23/02/2020', '123/123/123', '29/03/2020', 'pegawai pegawai pegawai', NULL, 'pegawai', '1', '2020-03-30 17:29:31', '2020-03-30 09:29:31'),
(28, '196407301997121002', 'Cuti Tahunan', '77/owpr/093', '23/02/2020', '29/03/2020', '10/03/2020', '03/03/2020', '77/owpr/093', '01/04/2020', 'NURSIDDIQ', NULL, 'pegawai', '1', '2020-03-30 17:36:19', '2020-03-30 09:36:19'),
(29, '198206012010012013', 'Cuti Tahunan', '11', '23/02/2020', '04/03/2020', '05/05/2020', '06/05/2020', '123', '30/03/2020', 'pegawai pegawai pegawai', NULL, 'Administrator', '1', '2020-04-10 16:18:09', '2020-04-10 08:18:09'),
(30, '198206012010012013', 'Cuti Besar', '77/owpr/093', '29/02/2020', '06/05/2020', '03/03/2020', '03/03/2020', '77/owpr/093', '01/05/2020', 'pegawai pegawai pegawai', NULL, 'pegawai pegawai pegawai', '1', '2020-04-10 16:20:21', '2020-04-10 08:20:21');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_diklat`
--

CREATE TABLE `riwayat_diklat` (
  `id_riwayat` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama_diklat` varchar(100) NOT NULL,
  `jumlah_jam` varchar(100) NOT NULL,
  `penyelenggara` varchar(100) NOT NULL,
  `tempat` text NOT NULL,
  `angkatan` varchar(100) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `no_sttp` varchar(100) NOT NULL,
  `tanggal_sttp` varchar(100) NOT NULL,
  `jenis_diklat` enum('struktural','fungsional','teknis','') NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `sub_instansi` varchar(255) NOT NULL,
  `admin` varchar(128) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `riwayat_diklat`
--

INSERT INTO `riwayat_diklat` (`id_riwayat`, `nip`, `nama_diklat`, `jumlah_jam`, `penyelenggara`, `tempat`, `angkatan`, `tahun`, `no_sttp`, `tanggal_sttp`, `jenis_diklat`, `nama_lengkap`, `sub_instansi`, `admin`, `status`, `iat`, `uat`) VALUES
(1492, '198206012010012013', 'diklat', '2', 'diklat', 'diklat', '120000', '2027', '123', '23/03/2020', 'struktural', 'pegawai pegawai pegawai', '', 'Administrator', '1', '2020-03-29 13:55:51', '2020-03-29 05:56:59'),
(1493, '198206012010012013', 'pegawai', '3444', 'pegawo', 'pwaefaaf', '3', '2028', '12334444444', '31/03/2020', 'fungsional', 'pegawai pegawai pegawai', '', 'Administrator', '1', '2020-03-29 14:02:08', '2020-03-29 06:04:50'),
(1494, '198206012010012013', 'adadehhh', '22', 'asdas', 'asdasd', '31', '2028', '213dad', '31/03/2020', 'teknis', 'pegawai pegawai pegawai', '', 'Administrator', '1', '2020-03-29 14:09:18', '2020-03-29 06:10:05'),
(1495, '198206012010012013', 'ada', '12', 'asdas', 'asdasd', '31', '2028', '34r', '31/03/2020', 'teknis', 'pegawai pegawai pegawai', '', 'Administrator', '1', '2020-03-29 16:16:41', '2020-03-29 08:16:41'),
(1496, '198206012010012013', 'psy', '12', 'adsdf', 'sdsd', '12', '2028', 'sad1', '31/03/2020', 'struktural', 'pegawai pegawai pegawai', '', 'Administrator', '1', '2020-03-29 16:23:49', '2020-03-29 08:23:49');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_dp3`
--

CREATE TABLE `riwayat_dp3` (
  `id_riwayat` int(11) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `tahun` varchar(128) NOT NULL,
  `jenis_jabatan` varchar(128) NOT NULL,
  `nilai_ratarata` varchar(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `jumlah` varchar(128) NOT NULL,
  `nama_pejabat` varchar(128) NOT NULL,
  `nip_pejabat` varchar(128) NOT NULL,
  `jabatan_pejabat` varchar(128) NOT NULL,
  `unor_pejabat` varchar(128) NOT NULL,
  `golongan_pejabat` varchar(128) NOT NULL,
  `tmt_pejabat` varchar(128) NOT NULL,
  `nama_atasan_pejabat` varchar(128) NOT NULL,
  `nip_atasan_pejabat` varchar(128) NOT NULL,
  `jabatan_atasan_pejabat` varchar(128) NOT NULL,
  `unor_atasan_pejabat` varchar(128) NOT NULL,
  `golongan_atasan_pejabat` varchar(128) NOT NULL,
  `tmt_atasan_pejabat` varchar(128) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `sub_instansi` varchar(255) DEFAULT NULL,
  `admin` varchar(128) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kesetiaan` varchar(128) NOT NULL,
  `tanggung` varchar(128) NOT NULL,
  `kejujuran` varchar(128) NOT NULL,
  `prakarsa` varchar(128) NOT NULL,
  `prestasi` varchar(128) NOT NULL,
  `ketaatan` varchar(128) NOT NULL,
  `kerjasama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `riwayat_dp3`
--

INSERT INTO `riwayat_dp3` (`id_riwayat`, `nip`, `tahun`, `jenis_jabatan`, `nilai_ratarata`, `keterangan`, `jumlah`, `nama_pejabat`, `nip_pejabat`, `jabatan_pejabat`, `unor_pejabat`, `golongan_pejabat`, `tmt_pejabat`, `nama_atasan_pejabat`, `nip_atasan_pejabat`, `jabatan_atasan_pejabat`, `unor_atasan_pejabat`, `golongan_atasan_pejabat`, `tmt_atasan_pejabat`, `nama_lengkap`, `sub_instansi`, `admin`, `status`, `iat`, `uat`, `kesetiaan`, `tanggung`, `kejujuran`, `prakarsa`, `prestasi`, `ketaatan`, `kerjasama`) VALUES
(1, '198703162011012029', '2018', 'struktural', '82.86', 'Baik', '580', 'RAHMAYANTO', '198404152010011033', 'Kepala Bidang', 'DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN', 'Penata - III c', '10/07/2017', 'SURUDDIN', '196912311992031171', 'Kepala Satuan', 'DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN', 'Pembina Tingkat I - IV b', '22/12/2017', 'TUTI WAHYUNINGSI', NULL, 'DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN', '0', '2018-03-09 08:22:49', '2018-03-09 00:22:49', '85', '83', '83', '80', '82', '82', '85'),
(2, '196207010000000000', '2011', 'tertentu', '87.14', 'Baik', '610', 'MURNIATI SARIRA', '197911092009042001', 'GURU MUDA', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'Penata Tingkat I - III d', '01/10/2017', 'LA ODE BOA', '196612311993031106', 'Kepala Satuan', 'DINAS KOPERASI, USAHA KECIL MENENGAH DAN TENAGA KERJA', 'Pembina Utama Muda - IV c', '06/08/2017', 'LA ODE MURIDIN ACHMAD', NULL, 'DINAS PENDIDIKAN DAN KEBUDAYAAN', '0', '2018-08-11 10:30:26', '2018-08-11 02:30:26', '93', '87', '85', '85', '87', '87', '86'),
(3, '196207010000000000', '2012', 'tertentu', '87.29', 'Baik', '611', 'MURNIATI SARIRA', '197911092009042001', 'GURU MUDA', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'Penata Tingkat I - III d', '01/10/2017', 'LA ODE BOA', '196612311993031106', 'Kepala Satuan', 'DINAS KOPERASI, USAHA KECIL MENENGAH DAN TENAGA KERJA', 'Pembina Utama Muda - IV c', '06/08/2017', 'LA ODE MURIDIN ACHMAD', NULL, 'DINAS PENDIDIKAN DAN KEBUDAYAAN', '0', '2018-08-11 10:33:14', '2018-08-11 02:33:14', '93', '87', '85', '86', '87', '87', '86'),
(4, '195903161984012001', '2017', 'tertentu', '90.86', 'Baik', '636', 'LA ODE MARWAN', '197404191997071001', 'GURU MADYA', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'Pembina - IV a', '01/04/2017', 'LA UNU', '195912311979091034', 'PENGAWAS SEKOLAH MADYA', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'Pembina Tingkat I - IV b', '01/10/2015', 'SAHIBA', NULL, 'DINAS PENDIDIKAN DAN KEBUDAYAAN', '0', '2018-08-19 20:09:10', '2018-08-19 12:09:10', '94', '91', '90', '90', '91', '90', '90'),
(5, '195812311979091034', '2017', 'tertentu', '86.29', 'Baik', '604', 'Bahruddin', '196008251980101002', 'GURU MADYA', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'Pembina Tingkat I - IV b', '01/10/2016', 'LA UNU', '195912311979091034', 'PENGAWAS SEKOLAH MADYA', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'Pembina Tingkat I - IV b', '01/10/2015', 'La Ode Bunganae', NULL, 'DINAS PENDIDIKAN DAN KEBUDAYAAN', '0', '2018-08-26 07:33:50', '2018-08-25 23:33:50', '93', '85', '85', '85', '85', '85', '86'),
(6, '198511302010011015', '2013', 'tertentu', '78.43', 'Baik', '549', 'SYARIFUDIN', '198511302010011015', 'GURU MUDA', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'Pengatur Tingkat I - II d', '01/04/2016', 'SYARIFUDIN', '198511302010011015', 'GURU MUDA', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'Pengatur Tingkat I - II d', '01/04/2016', 'SYARIFUDIN', NULL, 'DINAS PENDIDIKAN DAN KEBUDAYAAN', '0', '2018-08-30 15:06:34', '2018-08-30 07:06:34', '091', '076', '076', '076', '077', '076', '077'),
(7, '198111232011012010', '2014', 'tertentu', '78.71', 'Baik', '551', 'Bahruddin', '196008251980101002', 'GURU MADYA', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'Pembina Tingkat I - IV b', '01/10/2016', 'MUHAMAD ASRUL ALI', '196908071996031002', 'GURU MADYA', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'Pembina - IV a', '01/10/2014', 'Diana', NULL, 'DINAS PENDIDIKAN DAN KEBUDAYAAN', '0', '2018-08-31 06:47:06', '2018-08-30 22:47:06', '92', '76', '77', '76', '77', '77', '76'),
(8, '196804082005021003', '2015', 'tertentu', '84.14', 'Baik', '589', 'Bahruddin', '196008251980101002', 'GURU MADYA', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'Pembina Tingkat I - IV b', '01/10/2016', 'MUHAMAD ASRUL ALI', '196908071996031002', 'GURU MADYA', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'Pembina - IV a', '01/10/2014', 'Dalton', NULL, 'DINAS PENDIDIKAN DAN KEBUDAYAAN', '0', '2018-09-03 16:13:05', '2018-09-03 08:13:05', '93', '083', '83', '82', '82', '83', '83'),
(9, '188607022014062001', '2017', 'umum', '79.14', 'Baik', '554', 'NURABU', '196012311983021053', 'GURU MADYA', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'Pembina - IV a', '25/10/2016', 'MUHAMAD ASRUL ALI', '196908071996031002', 'GURU MADYA', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'Pembina - IV a', '01/10/2014', 'EVI YUNITA', NULL, 'DINAS PENDIDIKAN DAN KEBUDAYAAN', '0', '2018-09-04 14:31:58', '2018-09-04 06:31:58', '78', '82', '79', '79', '79', '77', '80'),
(10, '198406052011011014', '2013', 'umum', '81.00', 'Baik', '567', 'NURABU', '196012311983021053', 'GURU MADYA', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'Pembina - IV a', '25/10/2016', 'MUHAMMAD ASRUL ALI', '196908071996031001', 'PENGAWAS SEKOLAH MUDA', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'Penata Tingkat I - III d', '01/10/2014', 'ISWAHYUDDIN', NULL, 'DINAS PENDIDIKAN DAN KEBUDAYAAN', '0', '2018-09-04 14:54:49', '2018-09-04 06:54:49', '091', '79', '79', '79', '80', '79', '80'),
(11, '198208262014102001', '2017', 'umum', '80.71', 'Baik', '565', 'NURABU', '196012311983021053', 'GURU MADYA', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'Pembina - IV a', '25/10/2016', 'MUHAMMAD ASRUL ALI', '196908071996031001', 'PENGAWAS SEKOLAH MUDA', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'Penata Tingkat I - III d', '01/10/2014', 'MURTATI', NULL, 'DINAS PENDIDIKAN DAN KEBUDAYAAN', '0', '2018-09-05 08:05:01', '2018-09-05 00:05:01', '79', '89', '79', '80', '79', '79', '80'),
(12, '197206211997062001', '2017', 'tertentu', '78.71', 'Baik', '551', 'Bahruddin', '196008251980101002', 'GURU MADYA', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'Pembina Tingkat I - IV b', '01/10/2016', 'MUHAMMAD ASRUL ALI', '196908071996031001', 'PENGAWAS SEKOLAH MUDA', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'Penata Tingkat I - III d', '01/10/2014', 'Rahmatia', NULL, 'DINAS PENDIDIKAN DAN KEBUDAYAAN', '0', '2018-09-12 19:12:05', '2018-09-12 11:12:05', '92', '76', '77', '76', '77', '77', '76'),
(13, '197908302005021005', '2017', 'tertentu', '81.14', 'Baik', '568', 'ALAMI RAILU', '196912311992031072', 'GURU MADYA', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'Pembina Tingkat I - IV b', '03/01/1992', 'LA ODE ABRIA', '198108242006041013', 'Kepala UPTD', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'Penata - III c', '14/01/2017', 'LA AMIN', NULL, 'DINAS PENDIDIKAN DAN KEBUDAYAAN', '0', '2018-11-30 15:09:20', '2018-11-30 07:09:20', '78', '80', '90', '77', '78', '85', '80'),
(15, '198601122011012005', '2020', 'struktural', '10.00', 'Buruk', '70', 'budi', '198601122011012005', 'PRANATA LABORATORIUM KESEHATAN PELAKSANA', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'Juru Muda - I a', '02/24/2020', 'budi', '198601122011012005', 'PRANATA LABORATORIUM KESEHATAN PELAKSANA', 'DINAS KEPEMUDAAN DAN OLAHRAGA', 'Juru Muda - I a', '02/24/2020', 'budi', NULL, 'Administrator', '0', '2020-03-12 15:24:01', '2020-03-12 07:24:01', '10', '10', '10', '10', '10', '10', '10'),
(18, '198601122011012005', '2020', 'struktural', '38.57', 'Buruk', '270', 'MISRAWATI', '198008022010012021', 'NUTRISIONIS PELAKSANA LANJUTAN', 'DINAS KESEHATAN', '95896711', '01/10/2017', 'NURSIDDIQ', '196407301997121002', 'Asisten Sekretaris Daerah', 'SEKRETARIAT DAERAH', '95896715', '23/12/2019', 'budi', NULL, 'Administrator', '1', '2020-03-27 10:11:56', '2020-03-29 09:17:36', '10', '10', '10', '10', '10', '10', '210'),
(19, '198206012010012013', '2025', 'umum', '85.71', 'Baik', '600', 'pegawai pegawai pegawai', '198206012010012013', 'PENGADMINISTRASI KESEHATAN', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'Pembina Utama Madya - IV d', '10/03/2020', 'pegawai pegawai pegawai', '198206012010012013', 'PENGADMINISTRASI KESEHATAN', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'Pembina Utama Madya - IV d', '10/03/2020', 'pegawai pegawai pegawai', NULL, 'Administrator', '1', '2020-03-29 17:18:52', '2020-03-29 10:20:18', '80', '80', '80', '80', '80', '100', '100');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_golongan`
--

CREATE TABLE `riwayat_golongan` (
  `id_riwayat` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `golongan` varchar(100) NOT NULL,
  `nomor_sk` varchar(100) NOT NULL,
  `tanggal_sk` varchar(100) NOT NULL,
  `tmt_golongan` varchar(100) NOT NULL,
  `nomor_bkn` varchar(50) NOT NULL,
  `tanggal_bkn` varchar(100) NOT NULL,
  `jenis_kp` varchar(100) NOT NULL,
  `masa_kerja_bln` varchar(255) NOT NULL,
  `masa_kerja_thn` varchar(255) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_jabatan`
--

CREATE TABLE `riwayat_jabatan` (
  `id_riwayat` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `jenis` varchar(75) NOT NULL,
  `nama_jabatan` varchar(128) NOT NULL,
  `tmt_jabatan` varchar(100) NOT NULL,
  `eselon` varchar(128) NOT NULL,
  `pejabat` varchar(50) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kedudukan` varchar(75) NOT NULL,
  `tmt_pelantikan` varchar(100) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `admin` varchar(128) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `instansi_induk` varchar(256) NOT NULL,
  `unor_induk` varchar(256) NOT NULL,
  `unor` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `riwayat_jabatan`
--

INSERT INTO `riwayat_jabatan` (`id_riwayat`, `nip`, `jenis`, `nama_jabatan`, `tmt_jabatan`, `eselon`, `pejabat`, `nomor`, `tanggal`, `iat`, `uat`, `kedudukan`, `tmt_pelantikan`, `nama_lengkap`, `admin`, `status`, `instansi_induk`, `unor_induk`, `unor`) VALUES
(1056, '198206012010012013', 'Fungsional Umumn', 'CALON GURU', '05/05/2020', 'Non-Eselon', 'weq111111', '123', '24/03/2020', '2020-03-29 11:16:33', '2020-03-29 05:00:25', '', '30/03/2020', 'pegawai pegawai pegawai', 'Administrator', '1', 'Dinas Kebudayaan dan Kepariwisataan Provinsi Sulawesi Selatan', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'SUB BAGIAN KESEJAHTERAAN DAN PEMBERDAYAAN MASYARAKAT');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_kursus`
--

CREATE TABLE `riwayat_kursus` (
  `id_riwayat` int(11) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `tipe_kursus` varchar(128) NOT NULL,
  `instansi_kursus` varchar(128) NOT NULL,
  `jenis_kursus` varchar(128) NOT NULL,
  `nama_kursus` varchar(128) NOT NULL,
  `tahun_kursus` varchar(128) NOT NULL,
  `lama_kursus` varchar(128) NOT NULL,
  `no_sertifikat_kursus` varchar(128) NOT NULL,
  `institusi_kursus` varchar(128) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `sub_instansi` varchar(255) NOT NULL,
  `admin` varchar(128) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `riwayat_kursus`
--

INSERT INTO `riwayat_kursus` (`id_riwayat`, `nip`, `tipe_kursus`, `instansi_kursus`, `jenis_kursus`, `nama_kursus`, `tahun_kursus`, `lama_kursus`, `no_sertifikat_kursus`, `institusi_kursus`, `nama_lengkap`, `sub_instansi`, `admin`, `status`, `iat`, `uat`) VALUES
(59, '198812112019032002', 'sertifikat', 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH', 'SEMINAR NASIONAL PENDIDIKAN', 'SELAMATKAN BANGSA DENGAN PENDIDIKAN', '2009', '2', 'ww111', 'YAYASAN BABUSSALAM', 'WAODE TALU', '', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', '1', '2019-09-16 14:21:36', '2020-03-29 08:32:24'),
(60, '198812112019032002', 'sertifikat', 'POS KEADILAN PEDULI UMMAT SULAWESI TENGGARA', 'SEMINAR NASIONAL EKONOMI ISLAM', 'ZAKAT DAN PERANANNYA DALAM MEMBANGUN EKONOMI UMMAT', '2009', '1', '-', 'POS KEADILAN PEDULI UMMAT SULAWESI TENGGARA', 'WAODE TALU', '', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', '1', '2019-09-16 14:26:06', '2019-09-16 06:26:06'),
(61, '198812112019032002', 'sertifikat', 'POS KEADILAN UMMAT KABUPATEN WAKATOBI', 'PENDAMPING PESERTA', 'LOMBA AZAN,TARTIL QUR\'AN, dan HAFALAN SURAH-SURAH PENDEK TINGKAT SD/SMP', '2009', '1', '-', 'POS KEADILAN PEDULI UMMAT KABUPATEN WAKATOBI', 'WAODE TALU', '', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', '1', '2019-09-16 14:30:52', '2019-09-16 06:30:52'),
(62, '196501201986102004', 'sertifikat', 'DEPARTEMAN AGAMA', 'PENDIDIKAN GURU', 'PENDIDIKAN GURU AGAMA', '1986', '180', '348', 'KEMENTERIAN AGAMA KENDARI', 'JANURMAN S.Pd.I', '', 'AKBAR', '1', '2019-09-23 10:51:47', '2019-09-23 02:51:47'),
(63, '196503082007012012', 'sertifikat', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'KURSUS PENDIDIKAN GURU', 'KURSUS PENDIDIKAN GURU', '1986', '720', '23 OE cc 11 ct 0000670', 'DEPARTEMEN PENDIDIKAN DAN KEBUDAYAAN PROVINSI SULAWESI TENGGARA', 'SALWIN', '', 'AKBAR', '1', '2019-09-23 14:35:07', '2019-09-23 06:35:07'),
(64, '198008022010012021', 'Upgrading', 'BADAN KESATUAN BANGSA DAN POLITIK', 'Softskill', 'Interpersonal', '2019', '2', '1234567890AAA', 'BKN', 'MISRAWATI', '', 'Administrator', '1', '2020-03-11 14:44:26', '2020-03-11 06:44:26'),
(65, '198008022010012021', 'sertifikat', 'SEKRETARIAT DAERAH', 'testes', 'nama tes apa yhaaa', '2020', '10', '2020177', 'Doi', 'MISRAWATI', '', 'Administrator', '1', '2020-03-11 14:45:20', '2020-03-11 06:45:20'),
(67, '198601122011012005', 'sertifikat', 'BADAN PENGELOLA PAJAK DAN RETRIBUSI DAERAH', 'qwdasd', '2019', '12', '213', '123123', 'asdas', 'budi', '', 'Administrator', '1', '2020-03-13 20:37:19', '2020-03-13 12:43:30'),
(68, '198601122011012005', 'sertifikat', 'RUMAH SAKIT UMUM DAERAH', 'qw', 'qwdasd', '2019', '120000', '213', 'asdas', 'budi', '', 'Administrator', '1', '2020-03-13 21:16:07', '2020-03-29 08:30:15'),
(69, '198206012010012013', 'sertifikat', 'BADAN PERENCANAAN, PENELITIAN DAN PENGEMBANGAN DAERAH', 'qw', 'qwdasd', '2029', '23', '213', 'asdas', 'pegawai pegawai pegawai', '', 'Administrator', '1', '2020-03-29 16:29:23', '2020-03-29 08:29:23');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_mutasi`
--

CREATE TABLE `riwayat_mutasi` (
  `id_riwayat` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `jabatan` varchar(75) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `tmt` varchar(100) NOT NULL,
  `pejabat` varchar(50) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `sub_instansi` varchar(255) NOT NULL,
  `admin` varchar(128) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `riwayat_mutasi`
--

INSERT INTO `riwayat_mutasi` (`id_riwayat`, `nip`, `jabatan`, `pangkat`, `tmt`, `pejabat`, `nomor`, `tanggal`, `nama_lengkap`, `sub_instansi`, `admin`, `status`, `iat`, `uat`) VALUES
(294, '198407022009041002', 'GURU PERTAMA SDN 2 MANDATI 1', 'as - sa sa', '27/07/2018', 'BUPATI WAKATOBI', '387.A TAHUN 2018', '27/07/2018', 'USLI HARISMAN', '', 'ALFI', '1', '2020-01-08 00:00:00', '2020-03-29 05:16:35'),
(298, '197403152010011005', 'KEPALA BIDANG PERUMAHAN', 'PENATA', '21/10/2019', 'BUPATI WAKATOBI', '561 TAHUN 2019', '21/10/2019', 'MUSNI', '', 'DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN', '1', '2020-01-10 00:00:00', '2020-01-10 05:23:23'),
(299, '198209082006042012', 'KEPALA BIDANG PERLINDUNGAN HAK PEREMPUAN DAN PERLINDUNGAN KHUSUS ANAK DAN P', 'PENATA TK. I, III/d', '31/12/2016', 'BUPATI WAKATOBI', '662 TAHUN 2016', '31/12/2016', 'WA ODE ASRIANI', '', 'jun', '1', '2020-01-10 00:00:00', '2020-01-10 06:23:44'),
(300, '198812222011011005', 'KEPALA SEKSI PEMENUHAN HAK DAN DATA INFORMASI ANAK', 'Penata, III/c', '14/01/2017', 'BUPATI WAKATOBI', '226 TAHUN 2017', '14/01/2017', 'MUHAMMAD IHSAN AWALUDDIN', '', 'jun', '1', '2020-01-10 00:00:00', '2020-01-10 07:54:15'),
(301, '196812312007012198', 'STAF', 'PENGATUR, II/c', '03/08/2018', 'BUPATI WAKATOBI', '405 TAHUN 2018', '03/08/2018', 'WA HADI', '', 'ALFI', '1', '2020-01-13 00:00:00', '2020-01-13 06:32:12'),
(302, '198008022010012021', 'Kepala Seksi Pembangunan', 'Penata Muda III/A', '01/03/2020', 'Gubernur Sulawesi Selatan', '622 TAHUN 2016', '01/02/2016', 'MISRAWATI', '', 'Administrator', '1', '2020-03-11 00:00:00', '2020-03-12 06:21:14'),
(303, '198601122011012005', 're', 'Pembina Tingkat I - IV b', '10/03/2020', 'fsd', '123', '02/03/2020', 'budi', '', 'Administrator', '1', '2020-03-12 00:00:00', '2020-03-27 02:04:11'),
(304, '197906012009041001', 'Pranata komputer', 'Juru Muda Tingkat I - I b', '10/03/2020', 'fsd', '123', '15/03/2020', 'AJIHUDDIN', '', 'Administrator', '1', '2020-03-21 00:00:00', '2020-03-29 05:18:08'),
(305, '198601122011012005', 're', 'Juru Muda - I a', '10/03/2020', 'fsd', '123', '02/03/2020', 'budi', '', 'Administrator', '1', '2020-03-27 00:00:00', '2020-03-27 02:03:48'),
(306, '198206012010012013', 'PENGADMINISTRASI KESEHATAN', 'Pembina Utama Madya - IV d', '23/02/2020', 'himawan sandi', '123', '01/04/2020', 'pegawai pegawai pegawai', '', 'Administrator', '1', '2020-03-29 13:11:59', '2020-03-29 05:15:06');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pegawai_cpns`
--

CREATE TABLE `riwayat_pegawai_cpns` (
  `id_riwayat` varchar(128) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `no_sk` varchar(128) NOT NULL,
  `pejabat` varchar(128) NOT NULL,
  `tanggal_sk` varchar(128) NOT NULL,
  `pangkat` varchar(128) NOT NULL,
  `tanggal_tmt` varchar(128) NOT NULL,
  `instansi` varchar(128) NOT NULL,
  `sub_instansi` varchar(128) NOT NULL,
  `unit_kerja` varchar(128) NOT NULL,
  `no_bkn` varchar(128) NOT NULL,
  `tanggal_bkn` varchar(128) NOT NULL,
  `admin` varchar(128) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `riwayat_pegawai_cpns`
--

INSERT INTO `riwayat_pegawai_cpns` (`id_riwayat`, `nip`, `nama_lengkap`, `no_sk`, `pejabat`, `tanggal_sk`, `pangkat`, `tanggal_tmt`, `instansi`, `sub_instansi`, `unit_kerja`, `no_bkn`, `tanggal_bkn`, `admin`, `status`, `iat`, `uat`) VALUES
('74608157', '198206012010012013', 'pegawai pegawai pegawai', '123', 'ahmad', '09/03/2020', 'Pembina Utama Madya - IV d', '10/11/2010', 'Dinas Kebudayaan dan Kepariwisataan Provinsi Sulawesi Selatan', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'SUB BAGIAN KESEJAHTERAAN DAN PEMBERDAYAAN MASYARAKAT', '1234', '04/04/2020', 'Administrator', '1', '2020-03-29 02:47:41', '2020-04-10 07:00:58'),
('95718930', '198008022010012021', 'MISRAWATI', '96.A TAHUN 2010', 'BUPATI WAKATOBI', '26/01/2010', 'Penata Muda Tingkat I - III b', '01/01/2010', 'PEMERINTAH KABUPATEN WAKATOBI', 'DINAS KESEHATAN', 'UPTD PUSKESMAS WANGI-WANGI SELATAN', '-', '25/01/2010', 'DINAS KESEHATAN', '1', '2018-09-19 13:03:26', '2020-03-18 09:21:09');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pegawai_pns`
--

CREATE TABLE `riwayat_pegawai_pns` (
  `id_riwayat` varchar(128) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `no_sk` varchar(128) NOT NULL,
  `tanggal_sk` varchar(128) NOT NULL,
  `pangkat` varchar(128) NOT NULL,
  `pejabat` varchar(128) NOT NULL,
  `tanggal_tmt` varchar(128) NOT NULL,
  `instansi` varchar(128) NOT NULL,
  `sub_instansi` varchar(128) NOT NULL,
  `unit_kerja` varchar(128) NOT NULL,
  `sumpah` varchar(128) NOT NULL,
  `pengambil_sumpah` varchar(128) NOT NULL,
  `no_berita` varchar(128) NOT NULL,
  `tanggal_berita` varchar(128) NOT NULL,
  `admin` varchar(128) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `riwayat_pegawai_pns`
--

INSERT INTO `riwayat_pegawai_pns` (`id_riwayat`, `nip`, `nama_lengkap`, `no_sk`, `tanggal_sk`, `pangkat`, `pejabat`, `tanggal_tmt`, `instansi`, `sub_instansi`, `unit_kerja`, `sumpah`, `pengambil_sumpah`, `no_berita`, `tanggal_berita`, `admin`, `status`, `iat`, `uat`) VALUES
('67521349', '198206012010012013', 'pegawai pegawai pegawai', '123', '01/04/2020', 'Pembina Utama Madya - IV d', 'ahmad', '02/04/2020', 'Dinas Kebudayaan dan Kepariwisataan Provinsi Sulawesi Selatan', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'SUB BAGIAN KESEJAHTERAAN DAN PEMBERDAYAAN MASYARAKAT', 'Sudah', 'iuyuy', '1231111', '31/03/2020', 'Administrator', '1', '2020-03-29 03:11:52', '2020-03-29 02:13:37'),
('72986734', '198008022010012021', 'MISRAWATI', '111 TAHUN 2011', '01/02/2011', 'Penata Muda Tingkat I - III b', 'BUPATI WAKATOBI', '01/02/2011', 'PEMERINTAH KABUPATEN WAKATOBI', 'DINAS KESEHATAN', 'UPTD PUSKESMAS WANGI-WANGI SELATAN', 'Sudah', 'RUSDIN, SH.,M.Si', '877/434', '11/05/2016', 'DINAS KESEHATAN', '1', '2018-09-19 13:06:04', '2020-01-14 05:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pemberhentian`
--

CREATE TABLE `riwayat_pemberhentian` (
  `id_riwayat` int(11) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `jenis_pemberhentian` varchar(128) NOT NULL,
  `kedudukan_hukum` varchar(128) NOT NULL,
  `no_sk` varchar(128) NOT NULL,
  `tanggal_sk` varchar(128) NOT NULL,
  `prosedur_asal` varchar(128) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `admin` varchar(128) NOT NULL,
  `sub_instansi` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `riwayat_pemberhentian`
--

INSERT INTO `riwayat_pemberhentian` (`id_riwayat`, `nip`, `jenis_pemberhentian`, `kedudukan_hukum`, `no_sk`, `tanggal_sk`, `prosedur_asal`, `nama_lengkap`, `admin`, `sub_instansi`, `status`, `iat`, `uat`) VALUES
(1, '198105252012122001', 'Pemberhentian Karena BUP', 'Penerimaan Uang Tunggu', '001', '08/02/2018', '', 'ELYWATIN', 'SIMPEG BKPSDM', '', '0', '2018-01-17 02:50:59', '2018-01-16 18:50:59'),
(2, '196012311983031244', 'Pemberhentian Karena BUP', 'Aktif', '12', '24/03/2020', '', 'LA ODE PELE', 'Administrator', '', '0', '2020-03-05 13:01:12', '2020-03-05 05:01:12'),
(3, '198008022010012021', 'Pemberhentian Karena Permohonan', 'Aktif', '123456', '02/03/2020', '', 'MISRAWATI', 'Administrator', '', '0', '2020-03-11 14:52:41', '2020-03-11 06:52:41'),
(5, '198601122011012005', 'Pemberhentian Karena Keuzuran Jasmani', 'Aktif', '12', '24/03/2020', '', 'budi', 'Administrator', '', '1', '2020-03-27 10:11:06', '2020-03-27 02:11:06'),
(6, '198206012010012013', 'Pemberhentian Karena &gt;6 setelah CLTN Tidak Melapor', 'EKS PNS Timor Timor', '12', '31/03/2020', '', 'pegawai pegawai pegawai', 'Administrator', '', '1', '2020-03-29 16:48:28', '2020-03-29 08:48:41');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pemberitahuan_mpp`
--

CREATE TABLE `riwayat_pemberitahuan_mpp` (
  `id` int(11) NOT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `is_read` enum('0','1') DEFAULT '0',
  `iat` datetime DEFAULT NULL,
  `uat` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `riwayat_pemberitahuan_mpp`
--

INSERT INTO `riwayat_pemberitahuan_mpp` (`id`, `nip`, `month`, `is_read`, `iat`, `uat`) VALUES
(1, '196812311998021021', '1', '1', '2019-04-18 17:33:13', '2019-04-18 09:35:32'),
(2, '197808082006041012', '1', '1', '2019-04-18 17:33:13', '2019-04-18 09:35:32'),
(3, '198510052014102003', '1', '1', '2019-04-18 17:33:13', '2019-04-18 09:35:32'),
(4, '198803132007011003', '1', '1', '2019-04-18 17:33:13', '2019-04-18 09:35:32'),
(5, '199202012019032005', '1', '1', '2019-05-11 15:30:05', '2019-05-14 05:17:47'),
(6, '198601122011012005', '9', '1', '2020-03-18 17:02:09', '2020-03-18 09:03:00'),
(7, '196703241993032000', '9', '1', '2020-03-31 11:25:42', '2020-03-31 03:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pendidikan`
--

CREATE TABLE `riwayat_pendidikan` (
  `id_riwayat` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `tingkat` varchar(10) NOT NULL,
  `nama_prodi` varchar(128) NOT NULL,
  `nama_jurusan` varchar(128) NOT NULL,
  `nama_sekolah` varchar(256) NOT NULL,
  `no_ijazah` varchar(100) NOT NULL,
  `tahun_lulus` varchar(100) NOT NULL,
  `admin` varchar(128) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `sub_instansi` varchar(255) NOT NULL,
  `saat_ini` enum('0','1') DEFAULT '1',
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `riwayat_pendidikan`
--

INSERT INTO `riwayat_pendidikan` (`id_riwayat`, `nip`, `nama_lengkap`, `tingkat`, `nama_prodi`, `nama_jurusan`, `nama_sekolah`, `no_ijazah`, `tahun_lulus`, `admin`, `status`, `sub_instansi`, `saat_ini`, `iat`, `uat`) VALUES
(7506, '198601122011012005', 'budi', 'SMA', 'fsd', 'cas', 'cas', '12312', '2028', 'Administrator', '1', '', '1', '2020-03-12 00:00:00', '2020-03-23 10:46:04'),
(7507, '198008022010012021', 'MISRAWATI', 'S1/D-IV', 'prodi', 'jurusan', 'SCHOOL', '123', '2020', 'Administrator', '1', '', '1', '2020-03-18 00:00:00', '2020-03-23 10:46:07'),
(7508, '196812311994121078', 'MUHAMMAD YUNUS YUSUFLA ODE KASLAN', 'SMA', 'sda', 'Indonesia', 'dad', '1231', '2027', 'Administrator', '1', '', '1', '2020-03-20 00:00:00', '2020-03-23 10:46:09'),
(7509, '198206012010012013', 'pegawai pegawai pegawai', 'S3', 'prodi', 'matematika', 'universitas', '1231', '2028', 'Administrator', '1', '', '1', '2020-03-29 00:00:00', '2020-03-29 02:17:30'),
(7510, '196703241993032000', 'Himawan Sandhi', 'SMA', '', '', 'SCHOOL', '1231', '2019', 'Administrator', '1', '', '1', '2020-03-31 11:25:42', '2020-03-31 03:25:42'),
(7511, '196703241993032005', 'as', 'S1/D-IV', '', '', 'dad', '1231', '2028', 'Administrator', '1', '', '1', '2020-03-31 11:47:28', '2020-03-31 03:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_penghargaan`
--

CREATE TABLE `riwayat_penghargaan` (
  `id_riwayat` int(11) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `jenis_penghargaan` varchar(128) NOT NULL,
  `no_sk` varchar(128) NOT NULL,
  `tanggal_sk` varchar(128) NOT NULL,
  `tahun_penghargaan` varchar(128) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `sub_instansi` varchar(255) NOT NULL,
  `admin` varchar(128) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `riwayat_penghargaan`
--

INSERT INTO `riwayat_penghargaan` (`id_riwayat`, `nip`, `jenis_penghargaan`, `no_sk`, `tanggal_sk`, `tahun_penghargaan`, `nama_lengkap`, `sub_instansi`, `admin`, `status`, `iat`, `uat`) VALUES
(121, '198008022010012021', 'Satya Lancana', '11', '13/02/2020', '2020', 'MISRAWATI', '', 'Administrator', '0', '2020-03-11 14:47:50', '2020-03-11 06:47:50'),
(129, '198206012010012013', 'opasdi', '213', '25/02/2020', '2029', 'pegawai pegawai pegawai', '', 'Administrator', '1', '2020-03-29 16:35:45', '2020-03-29 08:35:45');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_profesi`
--

CREATE TABLE `riwayat_profesi` (
  `id_riwayat` int(11) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `profesi` varchar(128) NOT NULL,
  `penyelenggara` varchar(128) NOT NULL,
  `tahun_lulus` varchar(128) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `sub_instansi` varchar(255) NOT NULL,
  `admin` varchar(128) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `riwayat_profesi`
--

INSERT INTO `riwayat_profesi` (`id_riwayat`, `nip`, `profesi`, `penyelenggara`, `tahun_lulus`, `nama_lengkap`, `sub_instansi`, `admin`, `status`, `iat`, `uat`) VALUES
(153, '198008022010012021', 'Nutrision Profesyenel', 'UI', '2020', 'MISRAWATI', '', 'Administrator', '0', '2020-03-11 14:48:50', '2020-03-11 06:48:50'),
(156, '198206012010012013', 'saqqqqqqqqqqqqqqqqq', 'dsadas', '2030', 'pegawai pegawai pegawai', '', 'Administrator', '1', '2020-03-29 16:38:16', '2020-03-29 08:38:25');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_skp`
--

CREATE TABLE `riwayat_skp` (
  `id_riwayat` int(11) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `tahun` varchar(128) NOT NULL,
  `jenis_jabatan` varchar(128) NOT NULL,
  `nama_pejabat` varchar(128) NOT NULL,
  `nip_pejabat` varchar(128) NOT NULL,
  `jabatan_pejabat` varchar(128) NOT NULL,
  `unor_pejabat` varchar(128) NOT NULL,
  `golongan_pejabat` varchar(128) NOT NULL,
  `tmt_pejabat` varchar(128) NOT NULL,
  `nama_atasan_pejabat` varchar(128) NOT NULL,
  `nip_atasan_pejabat` varchar(128) NOT NULL,
  `jabatan_atasan_pejabat` varchar(128) NOT NULL,
  `unor_atasan_pejabat` varchar(128) NOT NULL,
  `golongan_atasan_pejabat` varchar(128) NOT NULL,
  `tmt_atasan_pejabat` varchar(128) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `sub_instansi` varchar(255) DEFAULT NULL,
  `admin` varchar(128) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nilai_skp` varchar(128) NOT NULL,
  `hasil_nilai_skp` varchar(128) NOT NULL,
  `orientasi` varchar(128) NOT NULL,
  `komitmen` varchar(128) NOT NULL,
  `kerjasama` varchar(128) NOT NULL,
  `integritas` varchar(128) NOT NULL,
  `disiplin` varchar(128) NOT NULL,
  `kepemimpinan` varchar(128) NOT NULL,
  `nilai_perilaku_kerja` varchar(128) NOT NULL,
  `nilai_prestasi_kerja` varchar(128) NOT NULL,
  `hasil_nilai_perilaku_kerja` varchar(128) NOT NULL,
  `ket_nilai_prestasi_kerja` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `riwayat_skp`
--

INSERT INTO `riwayat_skp` (`id_riwayat`, `nip`, `tahun`, `jenis_jabatan`, `nama_pejabat`, `nip_pejabat`, `jabatan_pejabat`, `unor_pejabat`, `golongan_pejabat`, `tmt_pejabat`, `nama_atasan_pejabat`, `nip_atasan_pejabat`, `jabatan_atasan_pejabat`, `unor_atasan_pejabat`, `golongan_atasan_pejabat`, `tmt_atasan_pejabat`, `nama_lengkap`, `sub_instansi`, `admin`, `status`, `iat`, `uat`, `nilai_skp`, `hasil_nilai_skp`, `orientasi`, `komitmen`, `kerjasama`, `integritas`, `disiplin`, `kepemimpinan`, `nilai_perilaku_kerja`, `nilai_prestasi_kerja`, `hasil_nilai_perilaku_kerja`, `ket_nilai_prestasi_kerja`) VALUES
(92, '198008022010012021', '2020', 'struktural', 'MISRAWATI', '198008022010012021', 'NUTRISIONIS PELAKSANA LANJUTAN', 'DINAS KESEHATAN', '95896711', '01/10/2017', 'MISRAWATI', '198008022010012021', 'NUTRISIONIS PELAKSANA LANJUTAN', 'DINAS KESEHATAN', '95896711', '01/10/2017', 'MISRAWATI', NULL, 'Administrator', '1', '2020-03-11 14:56:34', '2020-03-11 06:56:34', '500', '300.00', '60', '100', '86', '100', '30', '90', '77.67', '331.07', '31.07', 'Skor Tidak Diketahui'),
(98, '198008022010012021', '2009', 'struktural', 'pegawai', '198206012010012013', 'Pengelola Pengembangan Otonomi Darah', 'DINAS PERHUBUNGAN', 'Juru Muda Tingkat I - I b', '10/03/2020', 'SARDIANINGSIH', '198705122010012020', 'SANITARIAN MAHIR', 'RUMAH SAKIT UMUM DAERAH', '95896711', '01/01/2018', 'MISRAWATI', NULL, 'Administrator', '1', '2020-03-18 19:11:44', '2020-03-18 11:11:44', '80.00', '48.00', '40.00', '40.00', '50.00', '60.00', '60.00', '40.00', '48.33', '67.33', '19.33', 'Cukup'),
(99, '198206012010012013', '2019', 'umum', 'ROSMANIAR, SKM.M.Kes(epid)', '198704112009042002', 'EPIDEMIOLOG KESEHATAN  PELAKSANA LANJUTAN', 'DINAS KESEHATAN', '95896711', '04/01/2016', 'pegawai pegawai pegawai', '198206012010012013', 'PENGADMINISTRASI KESEHATAN', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', 'Pembina Utama Madya - IV d', '10/03/2020', 'pegawai pegawai pegawai', NULL, 'Administrator', '1', '2020-03-29 18:22:51', '2020-03-29 10:23:17', '10.00', '6.00', '10.00', '20.00', '10.00', '20.00', '30.00', '80.00', '28.33', '17.33', '11.33', 'Buruk');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_unor`
--

CREATE TABLE `riwayat_unor` (
  `id_riwayat` int(11) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `instansi` varchar(128) NOT NULL,
  `nama_unor` varchar(128) NOT NULL,
  `no_sk` varchar(128) NOT NULL,
  `tanggal_sk` varchar(128) NOT NULL,
  `prosedur_awal` varchar(128) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `sub_instansi` varchar(255) NOT NULL,
  `admin` varchar(128) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `riwayat_unor`
--

INSERT INTO `riwayat_unor` (`id_riwayat`, `nip`, `instansi`, `nama_unor`, `no_sk`, `tanggal_sk`, `prosedur_awal`, `nama_lengkap`, `sub_instansi`, `admin`, `status`, `iat`, `uat`) VALUES
(63, '198008022010012021', 'Dinas Kebudayaan dan Kepariwisataan Provinsi Sulawesi Selatan', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', '123qwe', '23/02/2020', '', 'MISRAWATI', '', 'Administrator', '0', '2020-03-11 15:03:56', '2020-03-11 07:03:56'),
(67, '198206012010012013', 'Dinas Kebudayaan dan Kepariwisataan Provinsi Sulawesi Selatan', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH', '1', '02/04/2020', '', 'pegawai pegawai pegawai', '', 'Administrator', '1', '2020-03-29 16:46:01', '2020-03-29 08:47:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` varchar(100) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  `notelp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_me` int(11) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `fullname`, `notelp`, `email`, `username`, `password`, `remember_me`, `akses_level`, `foto`, `session_id`, `iat`, `uat`) VALUES
('1', 'pegawai pegawai pegawai', '', 'pegawai@pegawai.com', '198206012010012013', '$2y$10$4IiLvvmnPvhJUkRDrzBGsuiC8sV.cUmbwC6YaUK36wFhHv1P0hbV6', 0, 'pegawai', '', 'rk6na4gj30dq7hp0juu47jq1n5ie7f16', '2020-04-10 16:10:37', '2020-04-10 08:18:38'),
('14870953', 'Himawan Sandhi', '', 'ja@fmsail.com', '196703241993032000', '$2y$10$lzEOOSIngj2/XcPNCrHzSOeuNLb1t7xwiGaU8.GNFKspSR8Jw4Y6e', 0, 'pegawai', '', '', '2020-03-31 11:25:42', '2020-03-31 08:45:59'),
('2', 'Administrator', '', '', 'admin', '$2y$12$5p3lTmB1BnNck65nwAs.z.4OMHFetFBvJ1RM/7rIQiUT1M1YGr9mK', 0, 'admin', '', 'a4fu635s8274339b1rsa2flr4betvpbj', '2020-04-10 16:13:29', '2020-04-10 08:19:39'),
('49103452', 'MISRAWATI', '', '', '198008022010012021', '$2y$10$txSXaX42FBSxJSyWYAKHAuLvMe05Qph0./vt9lL2eVgysbjnfLs7e', 0, 'pegawai', '', '', '2018-09-19 12:14:40', '2018-09-19 04:14:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_kenaikanpangkat`
--
ALTER TABLE `daftar_kenaikanpangkat`
  ADD PRIMARY KEY (`id_data`) USING BTREE;

--
-- Indexes for table `daftar_meninggal`
--
ALTER TABLE `daftar_meninggal`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `daftar_mutasi`
--
ALTER TABLE `daftar_mutasi`
  ADD PRIMARY KEY (`id_data`) USING BTREE;

--
-- Indexes for table `daftar_pensiun`
--
ALTER TABLE `daftar_pensiun`
  ADD PRIMARY KEY (`id_data`) USING BTREE;

--
-- Indexes for table `data_agama`
--
ALTER TABLE `data_agama`
  ADD PRIMARY KEY (`id_agama`) USING BTREE;

--
-- Indexes for table `data_alamat`
--
ALTER TABLE `data_alamat`
  ADD PRIMARY KEY (`nip`) USING BTREE;

--
-- Indexes for table `data_anak`
--
ALTER TABLE `data_anak`
  ADD PRIMARY KEY (`id_anak`) USING BTREE;

--
-- Indexes for table `data_dokumen`
--
ALTER TABLE `data_dokumen`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `data_eselon`
--
ALTER TABLE `data_eselon`
  ADD PRIMARY KEY (`id_eselon`) USING BTREE;

--
-- Indexes for table `data_golongan`
--
ALTER TABLE `data_golongan`
  ADD PRIMARY KEY (`id_golongan`) USING BTREE;

--
-- Indexes for table `data_honorer`
--
ALTER TABLE `data_honorer`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `data_honorer_`
--
ALTER TABLE `data_honorer_`
  ADD PRIMARY KEY (`nip`) USING BTREE;

--
-- Indexes for table `data_informasi`
--
ALTER TABLE `data_informasi`
  ADD PRIMARY KEY (`id_informasi`) USING BTREE;

--
-- Indexes for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  ADD PRIMARY KEY (`id_jabatan`) USING BTREE;

--
-- Indexes for table `data_jenisjabatan`
--
ALTER TABLE `data_jenisjabatan`
  ADD PRIMARY KEY (`id_jenisjabatan`) USING BTREE;

--
-- Indexes for table `data_jenispegawai`
--
ALTER TABLE `data_jenispegawai`
  ADD PRIMARY KEY (`id_jenispegawai`) USING BTREE;

--
-- Indexes for table `data_kabupaten`
--
ALTER TABLE `data_kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`) USING BTREE;

--
-- Indexes for table `data_kecamatan`
--
ALTER TABLE `data_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`) USING BTREE;

--
-- Indexes for table `data_kedudukanpegawai`
--
ALTER TABLE `data_kedudukanpegawai`
  ADD PRIMARY KEY (`id_kedudukanpegawai`) USING BTREE;

--
-- Indexes for table `data_kelurahan`
--
ALTER TABLE `data_kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`) USING BTREE;

--
-- Indexes for table `data_mutasi`
--
ALTER TABLE `data_mutasi`
  ADD PRIMARY KEY (`id_mutasi`) USING BTREE,
  ADD UNIQUE KEY `nip` (`nip`) USING BTREE;

--
-- Indexes for table `data_orangtua`
--
ALTER TABLE `data_orangtua`
  ADD PRIMARY KEY (`id_orangtua`) USING BTREE;

--
-- Indexes for table `data_organisasi`
--
ALTER TABLE `data_organisasi`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `data_pasangan`
--
ALTER TABLE `data_pasangan`
  ADD PRIMARY KEY (`id_pasangan`) USING BTREE;

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`nip`) USING BTREE;

--
-- Indexes for table `data_pendidikan`
--
ALTER TABLE `data_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`) USING BTREE;

--
-- Indexes for table `data_provinsi`
--
ALTER TABLE `data_provinsi`
  ADD PRIMARY KEY (`id_provinsi`) USING BTREE;

--
-- Indexes for table `data_satker`
--
ALTER TABLE `data_satker`
  ADD PRIMARY KEY (`id_satker`) USING BTREE;

--
-- Indexes for table `data_statuspegawai`
--
ALTER TABLE `data_statuspegawai`
  ADD PRIMARY KEY (`id_statuspegawai`) USING BTREE;

--
-- Indexes for table `data_unit`
--
ALTER TABLE `data_unit`
  ADD PRIMARY KEY (`id_unit`) USING BTREE;

--
-- Indexes for table `data_unor`
--
ALTER TABLE `data_unor`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `dokumen_pegawai`
--
ALTER TABLE `dokumen_pegawai`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `keterangan_badan`
--
ALTER TABLE `keterangan_badan`
  ADD PRIMARY KEY (`nip`) USING BTREE;

--
-- Indexes for table `keterangan_lainnya`
--
ALTER TABLE `keterangan_lainnya`
  ADD PRIMARY KEY (`nip`) USING BTREE;

--
-- Indexes for table `mutasi_data`
--
ALTER TABLE `mutasi_data`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `mutasi_individu`
--
ALTER TABLE `mutasi_individu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `mutasi_sk`
--
ALTER TABLE `mutasi_sk`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `permohonan_cuti`
--
ALTER TABLE `permohonan_cuti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat_angkakredit`
--
ALTER TABLE `riwayat_angkakredit`
  ADD PRIMARY KEY (`id_riwayat`) USING BTREE;

--
-- Indexes for table `riwayat_cuti`
--
ALTER TABLE `riwayat_cuti`
  ADD PRIMARY KEY (`id_riwayat`) USING BTREE;

--
-- Indexes for table `riwayat_diklat`
--
ALTER TABLE `riwayat_diklat`
  ADD PRIMARY KEY (`id_riwayat`) USING BTREE;

--
-- Indexes for table `riwayat_dp3`
--
ALTER TABLE `riwayat_dp3`
  ADD PRIMARY KEY (`id_riwayat`) USING BTREE;

--
-- Indexes for table `riwayat_golongan`
--
ALTER TABLE `riwayat_golongan`
  ADD PRIMARY KEY (`id_riwayat`) USING BTREE;

--
-- Indexes for table `riwayat_jabatan`
--
ALTER TABLE `riwayat_jabatan`
  ADD PRIMARY KEY (`id_riwayat`) USING BTREE;

--
-- Indexes for table `riwayat_kursus`
--
ALTER TABLE `riwayat_kursus`
  ADD PRIMARY KEY (`id_riwayat`) USING BTREE;

--
-- Indexes for table `riwayat_mutasi`
--
ALTER TABLE `riwayat_mutasi`
  ADD PRIMARY KEY (`id_riwayat`) USING BTREE;

--
-- Indexes for table `riwayat_pegawai_cpns`
--
ALTER TABLE `riwayat_pegawai_cpns`
  ADD PRIMARY KEY (`id_riwayat`) USING BTREE;

--
-- Indexes for table `riwayat_pegawai_pns`
--
ALTER TABLE `riwayat_pegawai_pns`
  ADD PRIMARY KEY (`id_riwayat`) USING BTREE;

--
-- Indexes for table `riwayat_pemberhentian`
--
ALTER TABLE `riwayat_pemberhentian`
  ADD PRIMARY KEY (`id_riwayat`) USING BTREE;

--
-- Indexes for table `riwayat_pemberitahuan_mpp`
--
ALTER TABLE `riwayat_pemberitahuan_mpp`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `nip` (`nip`) USING BTREE;

--
-- Indexes for table `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  ADD PRIMARY KEY (`id_riwayat`) USING BTREE;

--
-- Indexes for table `riwayat_penghargaan`
--
ALTER TABLE `riwayat_penghargaan`
  ADD PRIMARY KEY (`id_riwayat`) USING BTREE;

--
-- Indexes for table `riwayat_profesi`
--
ALTER TABLE `riwayat_profesi`
  ADD PRIMARY KEY (`id_riwayat`) USING BTREE;

--
-- Indexes for table `riwayat_skp`
--
ALTER TABLE `riwayat_skp`
  ADD PRIMARY KEY (`id_riwayat`) USING BTREE;

--
-- Indexes for table `riwayat_unor`
--
ALTER TABLE `riwayat_unor`
  ADD PRIMARY KEY (`id_riwayat`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_anak`
--
ALTER TABLE `data_anak`
  MODIFY `id_anak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3208;

--
-- AUTO_INCREMENT for table `data_dokumen`
--
ALTER TABLE `data_dokumen`
  MODIFY `id` int(29) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `data_eselon`
--
ALTER TABLE `data_eselon`
  MODIFY `id_eselon` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_golongan`
--
ALTER TABLE `data_golongan`
  MODIFY `id_golongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95896719;

--
-- AUTO_INCREMENT for table `data_honorer`
--
ALTER TABLE `data_honorer`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `data_kedudukanpegawai`
--
ALTER TABLE `data_kedudukanpegawai`
  MODIFY `id_kedudukanpegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `data_orangtua`
--
ALTER TABLE `data_orangtua`
  MODIFY `id_orangtua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2461;

--
-- AUTO_INCREMENT for table `data_organisasi`
--
ALTER TABLE `data_organisasi`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data_pasangan`
--
ALTER TABLE `data_pasangan`
  MODIFY `id_pasangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1871;

--
-- AUTO_INCREMENT for table `data_pendidikan`
--
ALTER TABLE `data_pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `data_provinsi`
--
ALTER TABLE `data_provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42584640;

--
-- AUTO_INCREMENT for table `data_satker`
--
ALTER TABLE `data_satker`
  MODIFY `id_satker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `data_unor`
--
ALTER TABLE `data_unor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `dokumen_pegawai`
--
ALTER TABLE `dokumen_pegawai`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `mutasi_data`
--
ALTER TABLE `mutasi_data`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `mutasi_individu`
--
ALTER TABLE `mutasi_individu`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mutasi_sk`
--
ALTER TABLE `mutasi_sk`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `permohonan_cuti`
--
ALTER TABLE `permohonan_cuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `riwayat_angkakredit`
--
ALTER TABLE `riwayat_angkakredit`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `riwayat_cuti`
--
ALTER TABLE `riwayat_cuti`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `riwayat_diklat`
--
ALTER TABLE `riwayat_diklat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1497;

--
-- AUTO_INCREMENT for table `riwayat_dp3`
--
ALTER TABLE `riwayat_dp3`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `riwayat_golongan`
--
ALTER TABLE `riwayat_golongan`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayat_jabatan`
--
ALTER TABLE `riwayat_jabatan`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1057;

--
-- AUTO_INCREMENT for table `riwayat_kursus`
--
ALTER TABLE `riwayat_kursus`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `riwayat_mutasi`
--
ALTER TABLE `riwayat_mutasi`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=307;

--
-- AUTO_INCREMENT for table `riwayat_pemberhentian`
--
ALTER TABLE `riwayat_pemberhentian`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `riwayat_pemberitahuan_mpp`
--
ALTER TABLE `riwayat_pemberitahuan_mpp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7512;

--
-- AUTO_INCREMENT for table `riwayat_penghargaan`
--
ALTER TABLE `riwayat_penghargaan`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `riwayat_profesi`
--
ALTER TABLE `riwayat_profesi`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `riwayat_skp`
--
ALTER TABLE `riwayat_skp`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `riwayat_unor`
--
ALTER TABLE `riwayat_unor`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
