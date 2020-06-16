-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 16, 2020 at 03:33 PM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.0.33-14+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tik`
--

-- --------------------------------------------------------

--
-- Table structure for table `cluster`
--

CREATE TABLE `cluster` (
  `id` int(3) NOT NULL,
  `cluster` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cluster`
--

INSERT INTO `cluster` (`id`, `cluster`) VALUES
(2, 'Cluster NOC 2'),
(3, 'Cluster AA');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(10) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_kecamatan` varchar(255) NOT NULL,
  `opd` varchar(255) NOT NULL,
  `gis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `waktu`, `id_kecamatan`, `opd`, `gis`) VALUES
(5, '2020-06-16 02:09:37', '3', '4', 2),
(6, '2020-06-16 02:09:40', '1', '5', 2),
(7, '2020-06-16 00:42:14', '2', '6', 2),
(8, '2020-06-16 00:42:17', '1', '7', 3),
(9, '2020-06-16 00:42:36', '2', '3', 2),
(10, '2020-06-16 02:09:42', '2', '4', 2),
(11, '2020-06-16 00:42:39', '2', '2', 3),
(12, '2020-06-16 00:42:41', '3', '3', 3),
(13, '2020-06-16 00:42:43', '2', '3', 2),
(14, '2020-06-16 02:09:43', '2', '3', 2),
(15, '2020-06-16 00:47:07', '2', '4', 4),
(16, '2020-06-16 03:22:49', '3', '8', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data2`
--

CREATE TABLE `data2` (
  `id` int(50) NOT NULL,
  `foto1` varchar(255) NOT NULL DEFAULT 'no.jpg',
  `foto2` varchar(255) NOT NULL DEFAULT 'no.jpg',
  `foto3` varchar(255) NOT NULL DEFAULT 'no.jpg',
  `foto4` varchar(255) NOT NULL DEFAULT 'no.jpg',
  `latitude` varchar(30) NOT NULL,
  `longitude` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data2`
--

INSERT INTO `data2` (`id`, `foto1`, `foto2`, `foto3`, `foto4`, `latitude`, `longitude`) VALUES
(5, '3.jpg', '3.jpg', '3.jpg', 'no.png', '-6.979967212677002', '109.698661804199220'),
(6, '3.jpg', '3.jpg', '3.jpg', '3.jpg', '-6.981967212677002', '109.798660278320310'),
(7, 'no.jpg', 'no.jpg', 'no.jpg', 'no.jpg', '-6.8971580999999995', '109.61410820000001'),
(8, 'no.jpg', 'no.jpg', 'no.jpg', 'no.jpg', '-6.865150965250472', '109.64637065544086'),
(9, 'no.jpg', 'no.jpg', 'no.jpg', 'no.jpg', '-6.897166599999999', '109.6520391'),
(10, 'no.jpg', 'no.jpg', 'no.jpg', 'no.jpg', '-6.867766599999999', '109.6770391'),
(11, 'no.jpg', 'no.jpg', 'no.jpg', 'no.jpg', '-6.858538442811607', '109.59418559684711'),
(12, 'no.jpg', 'no.jpg', 'no.jpg', 'no.jpg', '-6.85300881575082', '109.64465404167133'),
(13, 'no.jpg', 'no.jpg', 'no.jpg', 'no.jpg', '-6.888685196177511', '109.7531440319057'),
(14, 'no.jpg', 'no.jpg', 'no.jpg', 'no.jpg', '-6.897166599999999', '109.6520391'),
(15, 'no.jpg', 'no.jpg', 'no.jpg', 'no.jpg', '-6.857166599999999', '109.8620391'),
(16, 'no.jpg', 'no.jpg', 'no.jpg', 'no.jpg', '-6.877166599999999', '109.6620391');

-- --------------------------------------------------------

--
-- Table structure for table `datagis`
--

CREATE TABLE `datagis` (
  `id` int(10) NOT NULL,
  `cluster` varchar(3) NOT NULL,
  `kondisi` varchar(4) NOT NULL,
  `time` varchar(20) NOT NULL,
  `jenis_konverter` varchar(6) NOT NULL,
  `jointing` varchar(100) NOT NULL DEFAULT 'No Jointing',
  `ip` varchar(70) NOT NULL,
  `surveyor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datagis`
--

INSERT INTO `datagis` (`id`, `cluster`, `kondisi`, `time`, `jenis_konverter`, `jointing`, `ip`, `surveyor`) VALUES
(5, '2', 'down', '0.016764', 'double', '0', '192.168.254.144', 'muslim'),
(6, '3', 'down', '0.016764', 'double', '0', '192.168.254.144', 'muslim'),
(7, '2', 'up', '', 'single', 'No Jointing', '888', ''),
(8, '2', 'up', '', 'single', 'No Jointing', '999', ''),
(9, '3', 'down', '', 'double', '2', '1', ''),
(10, '4', 'down', '', 'double', '6', '7777', ''),
(11, '3', 'up', '', 'double', '5', '99999', ''),
(12, '4', 'down', '', 'double', '5', '999', ''),
(13, '4', 'down', '', 'double', '6', '555', ''),
(14, '3', 'down', '', 'double', '2', '9999', ''),
(15, '3', 'down', '', 'double', '2', '123123123123123', '');

-- --------------------------------------------------------

--
-- Table structure for table `desc`
--

CREATE TABLE `desc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desc`
--

INSERT INTO `desc` (`id`, `name`, `desc`) VALUES
(1, 'nama aplikasi', 'GIS Information Technology Kota Pekalongan'),
(2, 'logo aplikasi', 'default.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `gis`
--

CREATE TABLE `gis` (
  `id` int(11) NOT NULL,
  `name_gis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gis`
--

INSERT INTO `gis` (`id`, `name_gis`) VALUES
(1, 'Telecenter'),
(2, 'Kabel FO'),
(3, 'Warnet'),
(4, 'Sarana TIK');

-- --------------------------------------------------------

--
-- Table structure for table `jointing`
--

CREATE TABLE `jointing` (
  `id` int(4) NOT NULL,
  `jointing` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jointing`
--

INSERT INTO `jointing` (`id`, `jointing`) VALUES
(1, 'Dinas Kominfo'),
(2, 'Kecamatan Barat'),
(6, 'ddd'),
(8, 'ddd');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(1) NOT NULL,
  `kecamatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `kecamatan`) VALUES
(1, 'Kecamatan Utara'),
(2, 'Kecamatan Timur'),
(3, 'Kecamatan Selatan'),
(4, 'Kecamatan Barat');

-- --------------------------------------------------------

--
-- Table structure for table `opd`
--

CREATE TABLE `opd` (
  `id` int(11) NOT NULL,
  `name_gis` int(11) NOT NULL,
  `opd` varchar(255) NOT NULL,
  `opd_nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opd`
--

INSERT INTO `opd` (`id`, `name_gis`, `opd`, `opd_nama`, `alamat`, `email`, `kontak`) VALUES
(1, 2, 'SEKRETARIAT DPRD', 'Sekretariat DPRD Kota Pekalongan', 'Jl. Mataram No.1 Pekalongan', '', ''),
(2, 2, 'SETDA', 'Sekretariat Daerah Kota Pekalongan', 'Jl. Mataram No.1 Pekalongan', '', ''),
(3, 2, 'BAG. TAPEM', 'Bagian Tata Pemerintahan Kota Pekalongan', 'Jl. Mataram No.1 Pekalongan', 'tapem@pekalongankota.go.id', ''),
(4, 2, 'BAG. HUKUM', 'Bagian Hukum Kota Pekalongan', 'Jl. Mataram No.1 Pekalongan', '', ''),
(5, 2, 'BAG. ORGANISASI', 'Bagian Organisasi Kota Pekalongan', 'Jl. Mataram No.1 Pekalongan', '', ''),
(6, 2, 'BAG. MINBANG', 'Bagian Administrasi Pembangunan Kota Pekalongan', 'Jl. Mataram No. 1 Pekalongan', 'minbangkota@yahoo.co.id', ''),
(7, 2, 'BAG. PEREKONOMIAN', 'Bagian Perekonomian Kota Pekalongan', 'Jl. Mataram No.1 Pekalongan', '', ''),
(8, 1, 'RW 1 Net Degayu', 'RW 1 Net Degayu', 'Jl Labuhan no 149 RT 01 RW 01 Degayu', '', '085876545205');

-- --------------------------------------------------------

--
-- Table structure for table `status_perangkat`
--

CREATE TABLE `status_perangkat` (
  `id_status` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `flag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_perangkat`
--

INSERT INTO `status_perangkat` (`id_status`, `status`, `flag`) VALUES
(1, 'baik', 'success'),
(2, 'kurang baik', 'warning'),
(3, 'tidak baik', 'danger');

-- --------------------------------------------------------

--
-- Table structure for table `tb_telecenter`
--

CREATE TABLE `tb_telecenter` (
  `id_telecenter` int(10) NOT NULL,
  `nama_pengelola` varchar(255) NOT NULL,
  `alamat_pengelola` varchar(255) NOT NULL,
  `pc_status` varchar(100) NOT NULL,
  `pc_jumlah` int(50) NOT NULL,
  `printer_jumlah` int(50) NOT NULL,
  `printer_status` varchar(255) NOT NULL,
  `jaringan_jumlah` int(50) NOT NULL,
  `jaringan_status` varchar(255) NOT NULL,
  `jaringan_jenis` varchar(255) NOT NULL,
  `listrik_jumlah` int(20) NOT NULL DEFAULT '1',
  `listrik_status` varchar(255) NOT NULL,
  `mebeler` varchar(255) NOT NULL,
  `mebeler_status` varchar(255) NOT NULL,
  `ruangan_status` varchar(255) NOT NULL,
  `jumlah_pengguna` int(255) NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `ket_1` varchar(255) NOT NULL DEFAULT 'Belum Ada Status',
  `ket_2` varchar(255) NOT NULL,
  `surveyor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_telecenter`
--

INSERT INTO `tb_telecenter` (`id_telecenter`, `nama_pengelola`, `alamat_pengelola`, `pc_status`, `pc_jumlah`, `printer_jumlah`, `printer_status`, `jaringan_jumlah`, `jaringan_status`, `jaringan_jenis`, `listrik_jumlah`, `listrik_status`, `mebeler`, `mebeler_status`, `ruangan_status`, `jumlah_pengguna`, `posisi`, `lokasi`, `ket_1`, `ket_2`, `surveyor`) VALUES
(2, 'Kayiin', 'Jl Labuhan No 149 RT 01 RW 01 Degayu', 'Tidak Layak', 1, 0, 'Tidak Layak', 1, 'layak', 'Speady', 900, 'layak', 'Meja', 'layak', 'layak', 0, 'Rumah warga bapak Kayin', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Pc keadaan mati, speedy sudah di putus. ', 'muslim'),
(3, 'Umar', 'Jl.kimangunsarkoro gg. Pesantren', 'Tidak Layak', 1, 0, 'Tidak Layak', 1, 'Tidak Layak', 'Modem', 900, 'layak', 'Meja', 'Tidak Layak', 'layak', 0, 'Pondok pesantren Nurul huda', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'PC keadaan mati/rusak,modem internet sudah rusak', 'muslim'),
(4, 'Minarsih', 'Jl Labuhan No 138 RT 04 RW 07 Degayu', 'layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', 'Modem', 900, 'layak', 'Meja', 'Tidak Layak', 'layak', 0, 'Rumah Bu minarsih', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Pc nyala normal, printer mati. ', 'muslim'),
(5, 'Aminin', 'Jl Joko Tingkir No 235 RT 1 RW 2 Degayu', 'Tidak Layak', 1, 0, 'Tidak Layak', 1, 'layak', 'Speedy', 450, 'layak', 'Meja', 'layak', 'layak', 0, 'Rumah Ketua RW ', 'Sesuai dengan Alamat Telecenter', 'Tidak Baik', 'Pc keadaan mati, dan speedy sudah di cabut..', 'muslim'),
(6, 'Bambang Hartoyo', 'Jl Jlamprang No 10 RT 1 RW 1 Krapyak', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 900, 'layak', 'Meja', 'layak', 'layak', 5, 'Rumah Bapak Bambang Hartoyo', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangkat berjalan dengan lancar, printer yang mati', 'muslim'),
(7, 'Abdul Fatah', 'Kradenan Gg. 8 RT 03 RW 06', 'layak', 1, 1, 'layak', 1, 'layak', 'Modem', 450, 'layak', '1', 'layak', 'layak', 8, 'Di Rumah Pak RW', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Printer rusak', 'helmi'),
(8, 'Muhammad Miftah', 'Kradenan Gg. 9 RT 03 RW 05', 'layak', 1, 1, 'layak', 1, 'Tidak Layak', 'Speedy', 450, 'layak', '1', 'layak', 'layak', 3, 'Di Ruang tamu, Sesuai alamat Pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Jaringan Internet mati', 'helmi'),
(9, 'Dany', 'Jl. Pelita II Gg. 3 RT RW 3 No. 43', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 450, 'layak', '1', 'layak', 'layak', 15, 'Di Ruang tamu rumah pengelola', 'Sesuai dengan Alamat Telecenter', '', 'Semua perangkat telecenter berjalan dengan baik', 'helmi'),
(10, 'Ahmad Basrun', 'Buaran RT 01 RW 04', 'layak', 1, 1, 'layak', 1, 'layak', 'Modem', 450, 'layak', '1', 'layak', 'layak', 3, 'Di ruang tengah, sesuai alamat pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Modem rusak', 'helmi'),
(11, 'Sutri', 'Buaran Gg. 1 No. 90', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Modem', 900, 'layak', '1', 'layak', 'layak', 0, 'Di ruang tamu rumah pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Modem dan Printer rusak', 'helmi'),
(12, 'Husaen', 'Jl. Jlamprang gg. 4 Krapyak kidul kelurahan krapyak', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 900, 'layak', 'Meja', 'Tidak Layak', 'layak', 5, 'Rumah bapak husaen', 'Sesuai dengan Alamat Telecenter', 'Baik', 'Semua perangkat berfungsi normal', 'muslim'),
(13, 'Ulfa', 'Buaran Gg. 2 RT 03 RW 02', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 900, 'layak', '1', 'layak', 'layak', 1, 'Di Ruang tamu rumah pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Jaringan internet mati', 'helmi'),
(14, 'Makmun', 'Kradenan Gg. 1 RT 3 RW 11', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 900, 'layak', '1', 'layak', 'layak', 10, 'Di ruang tengah rumah pengelola berdampingan dengan taman baca', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Jaringan Internet swadaya sendiri', 'helmi'),
(15, 'Saiful Mahrom', 'Jl. Jlamprang gg. 5 RT. 03 RW. 07 No. 28 Krapyak lor kelurahan krapyak', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 450, 'layak', 'Meja', 'layak', 'layak', 5, 'Sudut ruang tamu rumah bapak Saiful mahrom', 'Sesuai dengan Alamat Telecenter', 'Baik', 'Semua perangkat berfungsi dengan baik.', 'muslim'),
(18, 'DIPOYONO', 'Jalan Boyongsari Gang 1 RT.05/RW.05 Panjang Baru', 'layak', 1, 1, 'layak', 1, 'layak', 'Speddy', 900, 'layak', 'Meja 1', 'layak', 'layak', 5, 'Ruang tamu', 'Sesuai dengan Alamat Telecenter', 'Baik', 'CPU masih diperbaiki, Speddy sudah lama tidak dibayar, Printer catridge rusak, kursi tidak ada karena rusak, sering kena banjir rob.', 'made'),
(19, 'A. Mustofa Zamzam', 'Jl. Teratai Poncol Gg.14 Rt.03 Rw.04', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 900, 'layak', 'Meja 1, Kursi, 1', 'layak', 'layak', 8, 'rumah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Komputer dan Internet Berjalan, tetapi printer sudah rusak', 'dwi'),
(20, 'Rusdii', 'Jl. Intan no. 39 Perum Podosugih', 'layak', 1, 1, 'layak', 1, 'layak', 'modem', 450, 'layak', '1 meja, 1 kursi', 'layak', 'layak', 0, 'TPQ Al Muttaqin', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'pc rusak tidak dapat menyala, printer rusak, pengelola lupa letak modem karena rumah pengelola masih direnovasi, telecenter sudah lama tidak dapat dimanfaatkan', 'daniek'),
(21, 'Aris', 'Jl. Berlian No. 21', 'layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', 'speedy', 900, 'layak', '1 meja komputer', 'layak', 'Tidak Layak', 0, 'Gedung RW, Taman Baca', 'Tidak sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'kuota internet tidak ada, printer sudah lama tidak digunakan, komputer disimpan di rumah pengelola untuk alasan keamanan (tidak digunakan)', 'daniek'),
(22, 'Annief', 'Jl. KHM. Mansyur Bendan Gg. 17 no. 4', 'layak', 1, 1, 'layak', 1, 'layak', 'speedy', 450, 'layak', '1 meja komputer', 'layak', 'layak', 7, 'TPQ At Taqwa', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'dimanfaatkan banyak kalangan masyarakat, komputer dan koneksi internet dapat digunakan dengan baik, printer sudah lama rusak dan sudah pernah coba diservis tapi tidak bisa', 'daniek'),
(23, 'Trisnawati, SH', 'Jl. WR. Supratman No. 10', 'layak', 3, 3, 'layak', 1, 'layak', 'Batik net', 1300, 'layak', 'Meja 3 ,kursi 3', 'layak', 'layak', 0, 'Ruang pelayanan umum', 'Sesuai dengan Alamat Telecenter', 'Baik', 'Semua perangkat berjalan dengan baik', 'adi'),
(24, 'Dharwanto', 'Jl. Selat Karimata III RT. 02 RW. 06 Bandengan', 'Tidak Layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 900, 'layak', 'Meja 1', 'Tidak Layak', 'layak', 5, 'Sudut ruang tamu rumah bapak dharwanto', 'Sesuai dengan Alamat Telecenter', '', 'Komputer dalam keadaan rusak terkena banjir air rob, untuk jaringan Speedy berjalan dengan baik.', 'adi'),
(25, 'Avantin', 'Jl WR Supratman No 10 Gg 8 Panjang Wetan', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 900, 'layak', 'Meja', 'layak', 'layak', 10, 'Di rumah Bu Avantin, di ruang tengah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangakat berjalan dengan lancar, hanya printer yang rusak', 'muslim'),
(27, 'Yusupeno', 'Jl.Jlamprang gg. 5 RT. 03 RW. 04 N. 75 krapyak lor kelurahan krapyak', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 450, 'Tidak Layak', 'Meja 1', 'Tidak Layak', 'layak', 15, 'Sudut ruang tamu rumah bapak yusupeno', 'Sesuai dengan Alamat Telecenter', 'Baik', 'Semua perangkat berjalan dengan baik', 'adi'),
(28, 'Maruf Arifin', 'Jl. Matana No.22 Rt.02/Rw.08 Kel. Poncol', 'layak', 1, 1, 'Tidak Layak', 0, 'Tidak Layak', 'Speedy', 1300, 'layak', 'Meja 1, Kursi, 1', 'layak', 'layak', 0, 'di ruang paviliun tengah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Jaringan Tidak ada', 'dwi'),
(29, 'Adi sujadi', 'Jl. Jlamprang gg. 5 central rt. 01 rw. 16 Krapyak kidul kelurahan krapyak', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', 'Modem', 450, 'Tidak Layak', 'Meja 1', 'Tidak Layak', 'layak', 0, 'Sudut ruang tamu rumah bapak Adi sujadi', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Komputer dalam keadaan rusak', 'adi'),
(30, 'Mulyorejo', 'Jl. Dr Wahidin Gg.2 Rw.2/Rt.1 Kelurahan Noyontaan', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 900, 'layak', 'Meja 1, Kursi, 1', 'Tidak Layak', 'layak', 0, 'ruang tamu', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangkat komputer rusak tidak dapat d pergunakan', 'dwi'),
(31, 'Salman B. Setiawan', 'Jl. Teratai Poncol No.108 Rt.1/Rw.5 Kelurahan Poncol', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 900, 'layak', 'Meja 1, Kursi, 1', 'layak', 'layak', 3, 'ruang tamu', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Komputer minta di install ulang, untuk printer tinta warna rusak', 'dwi'),
(32, 'Feri', 'Jl. Cempaka Gg.5 Rt.1/Rw.5 Kelurahan Klego', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 900, 'layak', 'Meja 1, Kursi, 1', 'Tidak Layak', 'layak', 20, 'ruang tamu', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangkat komputer tidak dapat di gunakan, untuk jaringan internet lancar digunakan untuk wifi warga sekitar', 'dwi'),
(34, 'Casyanto', 'Kuripan Lor Gg. 11 RT 02 RW 04', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 900, 'layak', '1', 'layak', 'layak', 5, 'Di ruang tamu Pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Printer katrid rusak', 'helmi'),
(35, 'Abdul Aziz', 'Kuripan Lor Gg. 14 RT 01 RW 05', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 450, 'layak', '1', 'layak', 'layak', 8, 'berdampingan dengan taman baca dan TPQ', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua perangkat berjalan dengan baik', 'helmi'),
(36, 'Saerozi', 'Jenggot RT 02 RW 11', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Modem', 900, 'layak', '1', 'layak', 'layak', 7, 'Di ruang tengah rumah pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Printer rusak', 'helmi'),
(37, 'Nuridin', 'Jenggot RT 03 RW 08', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 450, 'layak', '1', 'layak', 'layak', 15, 'Berdampingan dengan taman baca dan TPQ', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua perangkat telecenter berjalan dengan baik, jaringan internet swadaya sendiri', 'helmi'),
(38, 'Dwi Ratno', 'Jenggot RT 03 RW 03', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 1, 'layak', '1', 'layak', 'layak', 5, 'Berdampingan dengan taman baca', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Jaringan internet sudah dua hari trouble', 'helmi'),
(39, 'Casini', 'Jl. WR. Supratman gg. Gabus No. 13 RT. 04 RW. 13 Panjang Wetan', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 900, 'layak', 'Meja 1, kursi 1', 'layak', 'layak', 5, 'Sudut ruang tamu rumah bapak casini', 'Sesuai dengan Alamat Telecenter', 'Baik', 'Semua perangkat berjalan dengan baik', 'adi'),
(40, 'Aditya', 'Jl.kusuma bangsa gg. 5 no. 12 panjang wetan', 'layak', 1, 1, 'layak', 1, 'layak', 'Modem', 900, 'layak', 'Meja 1', 'Tidak Layak', 'layak', 5, 'Sudut ruang tamu rumah sdr. Aditya', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua perangkat berjalan dengan baik,lcd rusak ada garis tengah.', 'adi'),
(41, 'Saifilah', 'Jl. WR. Supratman gg. 10 No. 35 RT. 03 RW. 03 Panjang Wetan', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', 'Speedy', 900, 'layak', 'Meja 1', 'Tidak Layak', 'layak', 0, 'Sudut ruang tamu rumah ibu saifilah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangkat rusak terkena banjir rob', 'adi'),
(42, 'Indra budi', 'Jl. WR. Supratman gg. 13 no. 27 Panjang Wetan', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', 'Speedy', 900, 'layak', 'Meja 1', 'Tidak Layak', 'layak', 0, 'Sudut ruang tamu rumah bapak Indra budi', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'PC rusak, lcd masih berjalan baik', 'adi'),
(43, 'Riyatno', 'Bugisan, rt. 04 RW. 01 Panjang Wetan', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Modem', 450, 'Tidak Layak', 'Meja 1', 'Tidak Layak', 'layak', 5, 'Sudut ruang tamu rumah bapak riyatno', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'PC keadaan baik, monitor lcd dan printer rusak', 'adi'),
(44, 'Kristiawan', 'Gang Banyar No.7', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', '-', 900, 'layak', '-', 'Tidak Layak', 'Tidak Layak', 0, 'Rumah Pak RT', 'Tidak sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Sudah tidak dapat dioperasikan lagi karena perangkat rusak kena banjir rob', 'made'),
(45, 'Tegar', 'Gang Banyar RT.04/RW.11', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', '-', 2300, 'layak', '-', 'Tidak Layak', 'Tidak Layak', 0, 'Ruang tamu', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangkat rusak tidak dapat digunakan', 'made'),
(46, 'M. Saefullah', 'Banyurip Ageng RT 04 RW 01', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 900, 'layak', '1', 'layak', 'layak', 8, 'di ruang tengah rumah pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua perangkat telecenter berjalan dengan baik', 'agil'),
(47, 'Nur Faris', 'Banyurip Ageng RT 02 RW 06', 'layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', 'Modem', 450, 'Tidak Layak', '1', 'Tidak Layak', 'Tidak Layak', 0, 'Di ruang tamu rumah pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Jaringan internet mati, listrik tidak memadai, telecenter minta dipindah', 'agil'),
(48, 'Khotimah', 'Bayurip Ageng RT 02 RW 05', 'layak', 1, 1, 'layak', 0, 'Tidak Layak', 'Tidak ada jaringan', 1300, 'layak', '1', 'layak', 'layak', 3, 'Berdampingan dengan taman baca', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Tidak ada jaringan internet', 'agil'),
(49, 'Bp. Teguh Catur Wibowo', 'Jl. Gajahmada Barat Gg.1 No.29 Tirto', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', 'modem', 900, 'layak', 'Meja', 'layak', 'layak', 0, 'di dalam rumah pengelola telecenter', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Rumah pengelola sering terkena rob, jadi komputer di matikan dan disimpan diatas lemari didalam kamar.', 'sifa'),
(50, 'Bp. Ngisom', 'Jl. Kartosuro no.105 Perumahan Gamai Permai', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 450, 'layak', 'Meja 1 Kursi 1', 'layak', 'layak', 10, 'di rumah Ketua RT 01 RW 08 Kelurahan Tirto', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Pemanfaatan dari masyarakat untuk mengerjakan tugas sekolah dan keperluan pekerjaan,\r\nMendaftarkan jaringan baru sebesar 30 MB dengan biaya swadaya masyarakat,\r\nPrinter menggunakan printer beli baru sendiri dari swadaya masyarakat.', 'sifa'),
(51, 'Bp. Chusnul Machrom', 'Jl. KH.Ahmad Dahlan IX No. 287A', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 1000, 'layak', 'Meja', 'layak', 'layak', 0, 'di dalam gedung PAM sebelah rumah pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'sudah tidak berjalan karena pemanfaatan dari masyarakat berkurang', 'sifa'),
(52, 'Muhidin', 'Jl. KHM Mansyur Gg. Mangga', 'layak', 1, 1, 'layak', 1, 'layak', 'modem', 900, 'layak', '', 'layak', 'layak', 10, 'TPQ dan Taman Baca', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'semua perangkat normal, perlu disupport internet lebih karena lokasi yang strategis', 'rafi'),
(53, 'Edy', 'Jl. Kalimantan Gg.2A', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'layak', 'biznet', 900, 'layak', 'Meja', 'layak', 'layak', 0, 'Rumah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'perangkat telecenter rusak', 'rafi'),
(54, 'Kasdianto', 'Gg. Pembangunan no.24', 'layak', 1, 1, 'layak', 1, 'layak', 'speedy', 900, 'layak', 'meja, kursi', 'layak', 'layak', 3, 'di rumah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'perangkat telecenter normal', 'rafi'),
(55, 'Arif Wicaksono', 'Jl. Sumatera Gg.1 No.9', 'layak', 1, 1, 'layak', 1, 'layak', 'speedy', 900, 'layak', 'meja, kursi', 'layak', 'layak', 20, 'rumah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'semua perangkat berjalan normal', 'rafi'),
(56, 'Istiadi Busro', 'Jl. Irian Gg.3 No.3', 'layak', 1, 1, 'layak', 1, 'layak', 'speedy', 900, 'layak', 'meja, kursi', 'layak', 'layak', 20, 'rumah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'semua perangkat berjalan normal', 'rafi'),
(57, 'Daviq', 'Jl. Irian Gg.1 no.17', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'layak', 'speedy', 450, 'layak', 'meja', 'layak', 'layak', 20, 'rumah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'jaringan aman, akan tetapi sarpras seperti PC dll rusak', 'rafi'),
(58, 'Rajab', 'Jl. Dharma Bakti Gg.12', 'layak', 1, 1, 'layak', 1, 'layak', 'speedy', 900, 'layak', 'meja, kursi', 'layak', 'layak', 15, 'rumah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'semua perangkat berjalan dengan baik', 'rafi'),
(59, 'Mustakim', 'Jl. Dharma Bakti Gg.12', 'layak', 1, 1, 'layak', 1, 'layak', 'speedy', 900, 'layak', 'meja, kursi', 'layak', 'layak', 10, 'rumah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'semua perangkat normal', 'rafi'),
(60, 'Safarun', 'Jl. Irian Gg.2 No,11', 'layak', 1, 1, 'layak', 1, 'layak', 'speedy', 900, 'layak', 'meja, kursi', 'layak', 'layak', 15, 'rumah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'semua perangkat telecenter normal', 'rafi'),
(61, 'Sunarti', 'Jl Sulawesi Gg 1B ', 'layak', 1, 1, 'layak', 1, 'layak', 'speedy', 900, 'layak', 'meja, kursi', 'layak', 'layak', 17, 'PAUD', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua Perangkat Berjalan Normal', 'rafi'),
(62, 'Nur Aisyah', 'Jl Sumatra Gg 9 ', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'speedy', 900, 'layak', 'meja, kursi', 'layak', 'layak', 15, 'PAUD AL - MACHSUM', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua Perangkat Normal Kecuali Printer', 'rafi'),
(63, 'Chusri Nina ', 'Jl Sunan Ampel', 'layak', 1, 1, 'layak', 1, 'layak', 'speedy', 900, 'layak', 'meja, kursi', 'layak', 'layak', 15, 'PAUD TERATAI', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua Perangkat Normal', 'rafi'),
(64, 'Tafsir', 'Kebulen Gg 5', 'layak', 1, 1, 'layak', 1, 'layak', 'speedy', 900, 'layak', 'meja, kursi', 'layak', 'layak', 17, 'rumah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua Berjalan Normal', 'rafi'),
(65, 'Soetojo', 'Jl. Jenggala no. 71D RT3 RW 10 Pringrejo', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'speedy', 900, 'layak', '1 meja, 1 kursi', 'layak', 'layak', 50, 'di dalam rumah pengelola telecenter, dirumah pak RT', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'pemanfaatan baik dari berbagai kalangan, tinta printer kering karena jarang digunakan', 'daniek'),
(66, 'Lukman Hakim', 'Kebulen Gg 3 ', 'layak', 1, 1, 'layak', 1, 'layak', 'speedy', 900, 'layak', 'meja, kursi', 'layak', 'layak', 10, 'Rumah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua Berjalan Normal', 'rafi'),
(67, 'Lam Alif', 'Jl. Irian Gg.2', 'layak', 1, 1, 'layak', 1, 'layak', 'speedy', 900, 'layak', 'meja, kursi', 'layak', 'layak', 10, 'rumah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'semua sarpras telecenter normal', 'rafi'),
(68, 'Nur Fatchah', 'Jl. Irian Gg.1', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'modem', 900, 'layak', 'Meja', 'layak', 'layak', 3, 'PAUD Kenanga', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'printer rusak', 'rafi'),
(69, 'Nurul Huda', 'Jl. Asri Selatan RT 4 RW 14 Pringrejo', 'layak', 1, 1, 'layak', 1, 'layak', 'modem', 900, 'layak', '1 meja', 'layak', 'layak', 4, 'di dalam rumah pengelola telecenter, rumah ketua RW 4', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'tidak ada kuota modem, kuota diisi oleh pengelola dengan uang pribadi', 'daniek'),
(70, 'Narto', 'Sapuro Indah', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'layak', 'modem', 900, 'layak', 'meja, kursi', 'layak', 'Tidak Layak', 0, 'Rumah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'komputer tidak digunakan', 'rafi'),
(71, 'Ilyas', 'Noyontaan Gg.17 ', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Langganan ', 900, 'layak', 'Meja Kursi ', 'layak', 'layak', 10, 'Di Rumah Pak RT ', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Printer Rusak ', 'fatoni'),
(72, 'Zaenal Walad', 'Zaenal Walad', 'layak', 1, 1, 'layak', 1, 'layak', 'Langganan ', 900, 'layak', 'Meja/Kursi ', 'layak', 'layak', 10, 'Di Samping Rumah ketua RT', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Normal Semua Kecuali Monitor Ada Bintik Bintik Hitam', 'fatoni'),
(73, 'Nur Agus Ridho', 'Nur Agus Ridho', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Langganan ', 900, 'layak', 'Meja/Kursi ', 'layak', 'layak', 7, 'Di Rumah Pak RT ', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Layak Kucuali Printer Dan Mose', 'fatoni'),
(74, 'Zamroni', 'Jl. H. Kurdi no. 77 Pringrejo', 'layak', 1, 1, 'layak', 1, 'Tidak Layak', 'speedy', 1300, 'layak', '1 meja, 1 kursi', 'layak', 'layak', 0, 'di dalam rumah pengelola telecenter, rumah ketua RW 5', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'sudah lama sekali tidak digunakan karena koneksi speedy tidak bisa koneksi ke internet, printer hanya dapat mencetak warna hitam', 'daniek'),
(75, 'Mailis S.', 'Jl. KH. Massyuri No. 18 RT 2 RW 6 Pringrejo', 'layak', 1, 1, 'layak', 1, 'layak', 'modem', 900, 'layak', '1 meja, 1 kursi', 'layak', 'layak', 4, 'di dalam rumah pengelola telecenter (Taman Baca)', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangkat komputer berfungsi dengan baik, pemanfaatan oleh masyarakat baik, modem hilang masih dicari untuk sementara menggunakan tethering hp / mifi', 'daniek'),
(76, 'Muh. Feriyanto', 'Jl. Rindang No. 450 RT 4 RW 9 Pringrejo', 'layak', 1, 1, 'layak', 1, 'layak', 'wifi pribadi', 900, 'layak', '1 meja komputer (rusak), 1 kursi', 'Tidak Layak', 'layak', 4, 'di dalam rumah pengelola telecenter', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangkat komputer berfungsi dengan baik, koneksi menggunakan wifi pribadi pengelola, meja komputer sudah tidak layak digunakan', 'daniek'),
(77, 'Supriyanti', 'Jl. Anggrek Raya no. 398 Pringrejo', 'layak', 1, 1, 'layak', 1, 'layak', 'modem', 900, 'layak', '1 meja, 1 kursi (rusak)', 'layak', 'layak', 4, 'di dalam rumah pengelola telecenter', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'printer rusak, pemanfaatan telecenter baik', 'daniek'),
(78, 'Faturrohman', 'Pringlangu Gg. 7 No. 85 RT 1 RW 11', 'layak', 1, 1, 'layak', 1, 'layak', 'modem', 450, 'layak', '1 meja', 'layak', 'layak', 10, 'di dalam rumah pengelola telecenter (Taman Baca)', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'sejak tahun 2019 sudah tidak digunakan lagi karena tidak ada kuota modem, tahun-tahun sebelumnya banyak dimanfaatkan warga sekitar', 'daniek'),
(79, 'Joko Susilo', 'Jl. Kintamani 4 Rt 03/Rw 01Keputran', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 900, 'layak', 'Meja 1, Kursi, 1', 'layak', 'layak', 10, 'Ruang Tamu ', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Komputer Terkena banjir dan printer catrid nya rusak', 'dwi'),
(80, 'Ahmad Zaki', 'Jl. Kintamani Gg. 3A ', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 900, 'layak', 'Meja 1, Kursi, 1', 'layak', 'Tidak Layak', 10, 'Ruang Tengah', 'Sesuai dengan Alamat Telecenter', '', 'CPU tidak bisa d gunakan karena HArdisk Rusak, dan printer catrid nya rusak', 'dwi'),
(81, 'Istiqomah', 'Jl. Dr. Sutomo Gg. 1B Rt.01 / Rw. 08 Noyontaan', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', '-', 1300, 'layak', 'Meja 1, Kursi, 1', 'layak', 'layak', 0, 'Di ruang tamu', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua Perangkat Komputer tidak Bisa di gunakan karena sudah rusak', 'dwi'),
(82, 'M. Arifin', 'Landungsari Depan Gg.20 Ruko/Mini Market Nur', 'layak', 1, 1, 'layak', 0, 'Tidak Layak', '-', 900, 'layak', 'Meja 1, Kursi, 1', 'Tidak Layak', 'Tidak Layak', 10, 'diruang tamu sebelah toko', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangkat berjalan dengan lancar tetapi jaringan internet tidak ada, rencana akan di pindahkan ke masjid biar bisa jalan kembali...', 'dwi'),
(83, 'Bp. Mabrur', 'Pringlangu Gg. 6B No. 69B RT.01 RW.12', 'layak', 1, 1, 'layak', 1, 'layak', 'Modem', 900, 'layak', 'Meja 1 Kursi 1', 'layak', 'layak', 12, 'Di dalam rumah pengelola telecenter (di dekat ruang tamu)', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Pemanfaatan ke masyarakat sekitar sangat baik untuk kegiatan mengerjakan tugas sekolah, pembuatan skripsi mahasiswa, dan kegiatan rt setempat.\r\nBerhentinya anggaran dari kelurahan untuk membeli kuota dan kertas.\r\nPerangkat komputer dan printer masih layak', 'sifa'),
(84, 'Faturrohman', 'Jl. Kartini Gg 7 Rt.01 /Rw.05 ', 'layak', 1, 0, 'Tidak Layak', 1, 'layak', 'Speedy', 900, 'layak', 'Meja 1, Kursi, 1', 'Tidak Layak', 'layak', 10, 'Di ruang tamu', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Printer rusak, untuk meja dan kursi juga rusak', 'dwi'),
(85, 'Yuyun', 'Jl. Sulawesi', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'speedy', 900, 'layak', 'meja', 'layak', 'layak', 6, 'Taman Baca', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'printer rusak', 'rafi'),
(86, 'Tri Murtono', 'Jl. Jawa Gg.16', 'layak', 1, 1, 'layak', 1, 'layak', 'speedy', 900, 'layak', 'meja', 'layak', 'layak', 8, 'rumah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'semua perangkat telecenter berjalan normal', 'rafi'),
(87, 'Bambang', 'Jl. Jendral Sudirman belakang FIF', 'layak', 1, 1, 'layak', 1, 'layak', 'speedy', 900, 'layak', 'meja', 'layak', 'layak', 8, 'rumah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'semua sarpras telecenter normal', 'rafi'),
(88, 'Yahya', 'Jl. H. Usman RT. 04 RW. 12 pabean Kel. Padukuhankraton', 'Tidak Layak', 1, 1, 'layak', 1, 'Tidak Layak', 'Speedy', 900, 'layak', 'Meja 1', 'Tidak Layak', 'layak', 5, 'TPQ Miftakhul Jannah Pabean', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'PC komputer perlu di service', 'adi'),
(89, 'M. Khudlori', 'Jl. H. Usman RT. 07 RW. 12 Pabean', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', 'Modem', 900, 'layak', 'Meja 1', 'Tidak Layak', 'layak', 0, 'Taman Baca Nusantara', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'PC perlu perbaikan.', 'adi'),
(90, 'Bp. Eko Hartoyo', 'Jalan Danliris No.1A/1 RT.01 RW.09 ', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 900, 'layak', 'Meja 1 Kursi 1', 'layak', 'layak', 10, 'di Ruang Tamu didalam rumah pengelola telecenter', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Catridge printer kering karena jarang digunakan,\r\nPerangkat komputer sering digunakan masyarakat sekitar untuk mengerjakan tugas,\r\nKoneksi jaringan internet banyak dimanfaatkan warga sekitar.', 'sifa'),
(91, 'Rusmiatun', 'Dukuh Cokrah Gg.1 No.44 RT.01/RW.01 ', 'layak', 1, 1, 'Tidak Layak', 0, 'Tidak Layak', 'modem pribadi', 900, 'layak', 'Meja 1', 'layak', 'layak', 5, 'Posyandu Melati', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Komputer dapat beroperasi dengan normal,printer tidak dapat digunakan dan jaringan sudah tidak diperpanjang jadi untuk jaringan memakai modem pribadi', 'made'),
(92, 'Maryana', 'Jl. Patriot No.32 RT.01 RW.01', 'Tidak Layak', 1, 1, 'Tidak Layak', 0, 'Tidak Layak', '-', 900, 'layak', 'Meja 1', 'layak', 'layak', 5, 'Ruangan Kepala Sekolah SD Negeri Dukuh', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangkat komputer,jaringan dan printer sudah tidak dapat digunakan lagi dikarenakan rusak', 'made'),
(93, 'Musori', 'Jl. Indragiri Gg.1 Padukuhan Kraton RT.02/RW.02 ', 'Tidak Layak', 1, 1, 'Tidak Layak', 0, 'Tidak Layak', '-', 900, 'layak', 'Meja 1', 'layak', 'layak', 5, 'Ruang Tamu', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Komputer dan printer tidak dapat digunakan karena rusak', 'made'),
(94, 'Casmuri', 'Jl. Progo Gg.1 No.27 RT.03/RW.04', 'layak', 1, 1, 'layak', 0, 'Tidak Layak', '-', 450, 'layak', 'Meja 1 & Kursi 1', 'layak', 'layak', 3, 'Ruang Tamu', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Komputer dan Printer berjalan normal hanya jaringan yang tidak jalan.', 'made'),
(95, 'Baitur Rohim', 'Jl. Progo Gg.4 No.12', 'layak', 1, 1, 'Tidak Layak', 0, 'Tidak Layak', '-', 900, 'layak', 'Meja 1 & Kursi 1', 'layak', 'layak', 5, 'Ruang Tamu', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Komputer dapat digunakan,printer rusak,mouse & speaker rusak dan jaringan tidak ada', 'made'),
(96, 'Heru Subiarto', 'Gg. Damai No.7 Rt.01 / Rw.10 Poncol', 'Tidak Layak', 1, 1, 'Tidak Layak', 0, 'Tidak Layak', '-', 900, 'layak', '0', 'Tidak Layak', 'Tidak Layak', 0, 'ruang tamu', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua perangkat sudah tidak bisa digunkan lagi, karena rusak terkena banjir', 'dwi'),
(97, 'Abdul Arifin', 'Jl. Seroja Rt.03 / Rw.08 Klego', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 900, 'layak', '0', 'Tidak Layak', 'layak', 10, 'di ruang tengah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'untuk printer tidak bisa d gunakan karena catrid rusak', 'dwi'),
(98, 'Arif Syukur R', 'Jl. Teratai Gg. V Rt.02 / Rw.06 Klego', 'layak', 1, 1, 'layak', 1, 'Tidak Layak', 'Speedy', 900, 'layak', 'Meja 1, Kursi, 1', 'layak', 'layak', 3, 'Di ruang tamu', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Untuk jaringan internet tidak bisa d gunakan karena tidak di bayar kan', 'dwi'),
(99, 'Ahmad', 'Barokah Net RW 3', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 900, 'layak', 'Meja 1, Kursi, 1', 'layak', 'layak', 10, 'ruang tengah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'monitor sudah tidak ada, untuk printer catrid nya rusak', 'dwi'),
(100, 'Nazarudin', 'Klego Gg.2 No.4', 'layak', 1, 1, 'Tidak Layak', 0, 'Tidak Layak', '-', 1300, 'layak', 'Meja 1, Kursi, 1', 'layak', 'layak', 0, 'Ruang Tamu ', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'printer tidak bisa digunakan karena catrid rusak, untuk jaringan internet tidak bisa d gunakan karena tidak di bayar ', 'dwi'),
(101, 'Bp. Robikin', 'Jalan Jaya Bhakti no 171b RT.06 RW.02', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 450, 'layak', 'Meja 1 Kursi 1', 'layak', 'layak', 10, 'di dalam rumah pengelola telecenter', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Printer sudah diganti baru karena sering dimanfaatkan warga sekitart,perangkat komputer masih sering digunakan untuk mengerjakan tugas anak-anak sekitar', 'sifa'),
(102, 'Muh. Yusuf', 'Jl. Sultan Agung Sugihwaras Gg.10 Rt.03 / Rw.18', 'layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', 'Speedy', 450, 'Tidak Layak', 'Meja 1, Kursi, 1', 'layak', 'layak', 0, 'Ruang Tamu ', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Printer tidak bisa d gunakan catrid rusak, untuk jaringan rusak', 'dwi'),
(103, 'Bp. M. Nizar', 'Jalan Yudha Bakti Gg.1 RT.03 RW.01 No. 62', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Modem', 900, 'layak', 'Meja 1 Kursi 1', 'layak', 'layak', 7, 'di dalam rumah pengelola telecenter', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Karena jarang digunakan, printer kering dan sudah beberapa kali service. perangkat komputer masih sering digunakan masyarakat, namun modem tidak disi kuota.', 'sifa'),
(104, 'Sri Mulyani', 'Jl. HOS Cokroaminoto RT 02/RW 03 Kelurahan Kuripan Kertoharjo', 'layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', 'Speedy', 450, 'layak', '1', 'Tidak Layak', 'layak', 3, 'Di ruma pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Jaringan internet mati (sudah lapor telkom), Printer rusak', 'agil'),
(105, 'Nurul Komariah', 'Jl. Surabaya Sugihwaras Gg.9 No.18 Rt.02 / Rw.14', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', '-', 1300, 'layak', 'Meja 1, Kursi, 1', 'Tidak Layak', 'layak', 0, 'ruang tamu', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua perangkat komputer rusak dan jaringan tidak dapat di pergunakan', 'dwi'),
(106, 'Abdul Ghofur', 'Jl. H. Agus Salim Sugihwaras Gg.2 Rt.06 / Rw.17', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 900, 'layak', 'Meja 1, Kursi, 1', 'layak', 'layak', 10, 'Ruang Tamu ', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Printer tidak bisa d gunakan karena catrid rusak', 'dwi'),
(107, 'Miftakhul Jannah', 'Jl. Teruntum Gg.3 Rt.2 / Rw.2 Klego', 'Tidak Layak', 1, 1, 'Tidak Layak', 0, 'Tidak Layak', '', 1300, 'layak', 'Meja 1, Kursi, 1', 'Tidak Layak', 'layak', 0, 'ruang tamu', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua perangkat rusak karena banjir', 'dwi'),
(108, 'Fahimudin', 'Jl. Sugihwaras Belakang Pasar Senggol Rt.3 / Rw.18', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', 'Speedy', 900, 'layak', '0', 'Tidak Layak', 'layak', 0, 'ruang tamu', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua Perangkat tidak bisa d gunakan karena sudah rusak ', 'dwi'),
(109, 'M. Miftah', 'Jl. HOS Cokroaminoto RT03/RW Gg. 26 Kelurahan Kuripan Kertoharjo', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 450, 'layak', '1', 'layak', 'layak', 7, 'Berdampingan dengan taman baca', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua perangkat Telecenter berjalan dengan baik', 'agil'),
(110, 'Rina', 'Jl. Otto Iskandar Dinata RT 01/RW 08', 'layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', 'Speedy', 450, 'layak', '1', 'layak', 'layak', 2, 'Di rumah Ketua Karang Taruna', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Jaringan internet mengalami pemutusan', 'agil'),
(111, 'Saefudin', 'Jl. Otto Iskandar Dinata RT 01/RW 07', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 900, 'layak', '1', 'layak', 'layak', 5, 'Di Ruang Tamu Rumah Pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua perangkat telecenter berjalan dengan baik', 'agil'),
(112, 'Mahmud', 'Jl. Otto Iskandar Dinata RT 01/RW 06 Gg. 1 Kelurahan Sokoduwet', 'layak', 1, 1, 'layak', 1, 'Tidak Layak', 'Modem', 900, 'layak', '1', 'layak', 'layak', 2, 'Di Rumah Pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Jaringan internet mati karena modem rusak', 'agil'),
(113, 'Rozikin', 'Soko No. 243 Kelurahan Sokoduwet', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 450, 'layak', '1', 'layak', 'layak', 7, 'Di rumah pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua perangkat telecenter berjalan dengan baik', 'agil'),
(114, 'Mukjizat', 'Jl. Otto Iskandar Dinata RT 02 RW 07', 'layak', 1, 1, 'Tidak Layak', 0, 'Tidak Layak', 'Tidak ada jaringan internet', 450, 'layak', '1', 'layak', 'layak', 0, 'Di rumah pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Tidak di fasilitasi jaringan internet, mouse dan keyboard rusak', 'agil'),
(115, 'Indi', 'Jl. Otto Iskandar Dinata Gg. 1 RT 01 RW 01', 'layak', 1, 1, 'layak', 1, 'layak', 'Modem', 450, 'layak', '1', 'layak', 'layak', 2, 'Di Rumah Pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua Pearngkat Telecenter berjalan dengan baik', 'agil'),
(116, 'Hari MArdianto', 'Jl. Tondano GG, Nusa Indah No.14A Rt.4 / Rw.6 Poncol', 'layak', 1, 1, 'layak', 0, 'layak', '-', 900, 'layak', 'Meja 1, Kursi, 1', 'layak', 'layak', 0, 'ruang tamu', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua perangkat Komputer tidak bisa digunakan karena rusak', 'dwi'),
(117, 'Agus riyanto', 'Jl. H. Usman pabean', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', 'Speedy', 900, 'layak', 'Meja 1', 'Tidak Layak', 'layak', 0, 'TPQ Assaadah Pabean', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua perangkat keadaan mati / tidak berfungsi', 'adi'),
(118, 'Bp. Dai Wardoyo', 'Perum Binagriya Jl.Cengkeh No.10 RT.06 RW.12', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 2200, 'layak', 'Meja 1 Kursi 1', 'layak', 'layak', 1, 'di dalam rumah pengelola telecenter', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Telecenter jarang digunakan oleh masyarakat sekitar, pemanfaatnya kurang baik, jadi digunakan oleh RT dan pengelola saja', 'sifa'),
(119, 'Bp. Ulul Khuluq ', 'Jl. Sunan Ampel No.41 RT.05 RW.03 Medono', 'Tidak Layak', 1, 1, 'Tidak Layak', 0, 'Tidak Layak', '-', 900, 'layak', '-', 'Tidak Layak', 'layak', 0, 'di Warung depan rumah pengelola telecenter', 'Tidak sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Telecenter pindahan dari rumah Ibu Solidah yang beralamat di Jl. Sunan Ampel no 62 (PAUD) karena tempat untuk peletakan telecenter tidak cukup, perangkat komputer jarang digunakan masyarakat setempat.', 'sifa'),
(120, 'Ibu Khabibah', 'Jalan Karya Bhakti Gg.5 No.42 RT.07 RW.04 Medono', 'layak', 1, 0, 'Tidak Layak', 1, 'Tidak Layak', 'Speedy', 900, 'layak', 'Meja 1 ', 'layak', 'layak', 0, 'PAUD Yayasan Asri Mandiri di sebelah rumah pengelola telecenter', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangkat komputer tidak digunakan dan sudah di kemas didalam kardus, pemanfaatan dari masyarakat tidak ada sehingga pengelola telecenter memberikan masukan dan permohonan untuk dipindahkan di RW setempat agar bisa digunakan kembali,\r\nSebelumnya yang meng', 'sifa'),
(121, 'Ibu Dra. Endang Widaratih, M.Pd', 'Perum Medono Indah Jl. Parang Garuda 6 RT.01 RW.10 No.16 Medono', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 450, 'layak', 'Meja 1 Kursi 1', 'layak', 'layak', 10, 'BKR TUNAS samping rumah pengelola telecenter', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Dulu dana untuk listrik dan speedy dari kecamatan sekarang meggunakan dana pribadi yang sudah berhenti setahun, telecenter banyak dimanfaatkan oleh warga sekitar.', 'sifa'),
(122, 'Eko Putro', 'Jl. Trapesium Raya RT. 05 RW. 13 Perum. Limas krapyak', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 900, 'layak', 'Meja 1', 'Tidak Layak', 'layak', 0, 'Sudut ruang tamu rumah bapak Eko putro', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'PC dan printer mati pasca banjir ', 'adi'),
(123, 'Ahmad Zulfikar Rifqi', 'Jl. KH. Hasyim Asyhari Gg.2 Rt.3 / Rw.3 Setono', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 900, 'layak', 'Meja 1, Kursi, 1', 'Tidak Layak', 'layak', 5, 'ruang tamu', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangkat komputer tidak bisa d gunakan karena rusak terkena banjir, internet masih berjalan', 'dwi'),
(124, 'wahyu astuti', 'Jl. Angkatan 66 Gg.9A no.41', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'layak', 'speedy', 900, 'layak', 'meja, kursi', 'layak', 'Tidak Layak', 2, 'rumah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'sarpras TIK rusak', 'rafi'),
(125, 'Fanis', 'Jl. Veteran Gg.1 No.5', 'layak', 1, 1, 'layak', 1, 'layak', 'speedy', 900, 'layak', 'meja, kursi', 'layak', 'layak', 5, 'rumah sekaligus taman baca', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'semua perangkat berjalan normal', 'rafi'),
(126, 'Winarsih', 'Jl. Kusuma bangsa gg. 1c No. 28 Kandang Panjang', 'layak', 1, 1, 'layak', 1, 'Tidak Layak', 'Speedy', 900, 'layak', 'Meja 1', 'Tidak Layak', 'layak', 0, 'Sudut ruang tamu rumah ibu winarsih', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua perangkat berjalan normal,Speedy internet sudah di putus.', 'adi'),
(127, 'Mustaqim', 'Jl. Kramatsari I no.9 RT.3 RW.14', 'layak', 1, 1, 'layak', 1, 'layak', 'speedy', 900, 'layak', 'meja, kursi', 'layak', 'layak', 5, 'rumah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'semua perangkat berjalan normal', 'rafi'),
(128, 'Slamet Mustakim', 'Jl. Teuku Umar Gg.3 RT.3 RW.2', 'layak', 1, 1, 'layak', 1, 'layak', 'speedy', 900, 'layak', 'meja, kursi', 'layak', 'layak', 6, 'rumah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'semua perangkat normal', 'rafi'),
(129, 'Mardiono', 'Jl. Progo gg. 4 no. 10', 'Tidak Layak', 1, 1, 'Tidak Layak', 0, 'Tidak Layak', '-', 900, 'layak', 'Meja 1', 'layak', 'layak', 5, 'Ruang tamu', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangkat komputer rusak', 'made'),
(130, 'Bp.Ahmad Mudhofar', 'Jl. Dharma Bakti Gg.7 No.98 RT.03 RW.11 Medono', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 900, 'layak', 'Meja 1 Kursi 1', 'layak', 'layak', 7, 'di Ruang Tamu didalam rumah pengelola telecenter', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Printer sudah jarang digunakan karena tinta habis.', 'sifa'),
(131, 'Bp. M. Absor', 'Jl. Urip sumoharjo Medono Sengon Gg.5 No. 115 RT.08 RW.06', 'layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', 'Modem', 900, 'layak', 'Meja 1 Kursi 1', 'layak', 'layak', 1, 'di Ruang Tamu didalam rumah pengelola telecenter', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Telecenter sudah jarang digunakan masyarakat sekitar karena keyboard mati, VGA monitor juga mengalami kerusakan, ups mati dan printer yang susah digunakan untuk print.', 'sifa'),
(132, 'Esti Wigati, S.Pd.,Kons', 'Jl. Kencono Wungu e/16 RT.02/RW.09', 'Tidak Layak', 1, 1, 'Tidak Layak', 0, 'Tidak Layak', '-', 900, 'layak', 'Meja 1 & Kursi 1', 'layak', 'layak', 5, 'Ruang tamu', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua perangkat rusak karena kena banjir', 'made'),
(133, 'Ibu Edi S.', 'Jl. Meranti, Perum Slamaran No.4 RT.1/RW.11 Krapyak Lor', 'Tidak Layak', 2, 2, 'Tidak Layak', 0, 'Tidak Layak', '-', 900, 'layak', 'Meja 1', 'layak', 'layak', 5, 'Ruang tengah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangkat komputer rusak dan tidak dapat digunakan sehingga hanya dimasukkan kekardus', 'made'),
(134, 'Heni S.', 'Jl. Damar RT.1/RW.10 Perum Slamaran,Krapyak Lor', 'layak', 1, 1, 'layak', 0, 'Tidak Layak', '-', 900, 'layak', 'Meja 1 & Kursi 1', 'layak', 'layak', 5, 'Lantai atas rumah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangkat Berjalan dengan normal hanya jaringan sudah tidak ada', 'made'),
(135, 'M. Taufiq', 'Jl. Jlamprang RT.1/RW.7 Gg.VI Krapyak Lor', 'layak', 1, 1, 'layak', 0, 'Tidak Layak', '-', 900, 'layak', 'Meja 1', 'layak', 'layak', 5, 'Masjid Al-Huda', 'Tidak sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangkat berjalan dengan normal hanya untuk jaringan belum ada', 'made'),
(136, 'Khotim', 'Jl. KH. Hasyim Asyari Gg.7 RW.7 Setono', 'Tidak Layak', 1, 1, 'Tidak Layak', 0, 'Tidak Layak', '-', 900, 'layak', 'Meja 1, Kursi, 1', 'Tidak Layak', 'layak', 0, 'Ruang tengah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangkat KOmputer sudah rusak tidak bisa d gunakan', 'dwi'),
(137, 'H. Irfani', 'Jl. KH. Hasyim Asyari Gg.6 Setono', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 450, 'Tidak Layak', 'Meja 1, Kursi, 1', 'layak', 'layak', 10, 'ruang tamu', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'printer rusak tidak dapat d gunakan,listrik rendah', 'dwi'),
(138, 'Sholichin', 'Jl. KH. Hasyim Asyari Gg. TPQ Sabilul Hidayah Rt.2 / Rw.8 Setono', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 900, 'layak', 'Meja 1, Kursi, 1', 'layak', 'layak', 15, 'ruang tamu', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua perangkat lancar dan dpt d gunakan oleh warga', 'dwi'),
(139, 'Imam Christanto', 'Jl. Ahmad Yani Gg. Pintu Air Rt.6 / Rw.7 Poncol', 'layak', 1, 1, 'layak', 0, 'Tidak Layak', '-', 900, 'layak', 'Meja 1, Kursi, 1', 'Tidak Layak', 'layak', 0, 'Ruang Tengah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'kursi sudah rusak dan jaringan internet tidak ada', 'dwi'),
(140, 'M. Amrudin', 'Jl. KH. Hasyim Asyari Gg.4 RW.3/ Rw.5 Setono', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 900, 'layak', 'Meja 1, Kursi, 1', 'layak', 'layak', 5, 'Ruang Tamu ', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'printer rusak tidak dapat di gunakan', 'dwi'),
(141, 'Arif S', 'Bantaran Gg. 3 Rt.3 / Rw.8 Klego', 'Tidak Layak', 1, 1, 'Tidak Layak', 0, 'Tidak Layak', '-', 450, 'Tidak Layak', 'Meja 1, Kursi, 1', 'Tidak Layak', 'layak', 0, 'Ruang Tamu ', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'kursi rusak dan perangkat komputer sudah tidak bisa di gunakan', 'dwi'),
(142, 'Bp. Slamet Mardiyanto', 'Jl. KH.Ahmad Dahlan Gg.7 No. 17 RT.05 RW.02 Tirto', 'layak', 1, 1, 'layak', 0, 'layak', '-', 900, 'layak', 'Meja 1', 'layak', 'layak', 0, 'Belum pernah digunakan', 'Sesuai dengan Alamat Telecenter', 'Baik', 'Telecenter pindahan dari RW lama (Bp.Mursid) perangkat komputer dan printer belum pernah digunakan sama sekali,Modem atau jaringan lain juga tidak ada.', 'sifa'),
(143, 'Muhammaad Taufik', 'Jl. Dr Cipto Belakang Pasar Senggol RT.4 / RW. 5 Sugihwaras', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', '-', 900, 'layak', '0', 'Tidak Layak', 'layak', 0, 'Ruang Tamu ', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua Perangkat tidak bisa d gunakan karena rusak', 'dwi'),
(144, 'Bp. Adi Putra', 'Jl. KH.Ahmad Dahlan Gg.14 No. 107 RT.03 RW.07 Tirto', 'layak', 1, 1, 'layak', 1, 'layak', 'Modem', 1300, 'layak', 'Meja 1 Kursi 1', 'layak', 'layak', 1, 'di dalam rumah pengelola telecenter', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua perangkat berfungsi normal, telecenter di hentikan karena tidak adanya alokasi dana dari kelurahan untuk biaya kuota modem, dan pemanfaatn dari masyarakat sekitar kurang baik.', 'sifa'),
(145, 'Fahimudin', 'Jl. Sugihwaras Belakang Pasar Senggol RT.3 / RW. 18', 'Tidak Layak', 1, 1, 'Tidak Layak', 0, 'Tidak Layak', '', 900, 'layak', 'Meja 1, Kursi, 1', 'layak', 'layak', 0, 'Di ruang tamu', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua perangkat tidak dapat di gunakan karena rusak', 'dwi'),
(146, 'Bp. Hendra Setiawan', 'Jl. Urip Sumoharjo Gg.1 RT.05 RW.05 Medono ', 'layak', 1, 0, 'Tidak Layak', 1, 'layak', 'Speedy', 900, 'layak', 'Meja 1', 'layak', 'layak', 20, 'Basecamp yang dibuatkan khusus untuk telecenter diatas tanah warga', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Printer sudah rusak, digantikan dengan printer dari swadaya masyarakat sekitar,\r\nJaringan internet masih dimanfaatkan warga sekitar dengan baik.', 'sifa'),
(147, 'Bp. Nur Kholik', 'Perum Binagriya Blok B No. 87 RT.06 RW.08 Medono', 'layak', 1, 1, 'layak', 1, 'Tidak Layak', 'Speedy', 2000, 'layak', '-', 'Tidak Layak', 'layak', 0, 'Di Kasir Warung milik pengelola telecenter', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangkat komputer masih berjalan normal,\r\njaringan internet tidak ada karena kuota internet tidak dibayarkan sudah lama,', 'sifa'),
(148, 'Bp. Samian', 'Jl. KH. Ahmad Dahlan Gg.10 Bumirejo RT.02 RW.19 Pringrejo', 'layak', 1, 0, 'Tidak Layak', 0, 'Tidak Layak', '-', 900, 'layak', 'Meja 1 Kursi 1', 'layak', 'layak', 1, 'di Ruang Tamu didalam rumah pengelola telecenter', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangkat komputer masih berfungsi normal,\r\ntidak adanya modem atau jaringan internet lainnya,\r\ntelecenter pindahan dari Bp. Faturrohman', 'sifa'),
(149, 'Bp. Khaerudin', 'Jl. KH. Ahmad Dahlan Gg.7 No.7 Bumirejo RT.04 RW.18 Pringrejo', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', 'Modem', 900, 'layak', 'Meja 1 Kursi 1', 'layak', 'layak', 1, 'di dalam rumah pengelola telecenter', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Pemanfaatan dari masyarakat hanya awal telecenter di operasi, sampai sekarang sudah tidak ada masyarakat yang menggunakan.CPU terbakar sehingga perangkat komputer rusak.', 'sifa'),
(150, 'Abdul Kholik', 'Jl. HOS Cokroaminoto RT 02 RW 02 Gg. 12 Kuripan Kidul', 'layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', 'Modem', 900, 'layak', '1', 'layak', 'layak', 2, 'Di rumah pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Modem dan printer rusak', 'agil'),
(151, 'Afifi Adjam', 'Jl. HOS Cokroaminoto RT 01 RW 01 Gg. 2 Kuripan Kidul', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 450, 'layak', '1', 'layak', 'layak', 5, 'Berdampingan dengan taman baca', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua perangkat Telecenter berjalan dengan baik', 'agil'),
(152, 'Izza', 'Banyurip Alit Gg. 3C RT 06 RW 10', 'layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', 'Speedy', 900, 'layak', '1', 'layak', 'layak', 8, 'Berdampingan dengan TPQ dan sebelah Musholla', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Jaringan internet mati dan printer rusak', 'agil'),
(153, 'Moh Ali Rosyidi', 'Jl. Bahagia RT 01 RW 02 Banyurip Ageng', 'layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', 'Modem', 900, 'layak', '1', 'layak', 'layak', 3, 'Di rumah pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Modem rusak', 'agil'),
(154, 'Jawat', 'Banyurip Alit Gg. 2A RT 01 RW 09', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 900, 'layak', '0', 'Tidak Layak', 'layak', 2, 'Di rumah pengelola Sebelah Madrasah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Printer rusak ', 'agil'),
(155, 'Khozin', 'Banyurip Alit Gg. 2B RT 04 RW 06', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 900, 'layak', '1', 'layak', 'layak', 10, 'Di rumah pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'CPU rusak dan katrid printer rusak', 'agil'),
(156, 'Perangkat Kelurahan Jenggot', 'Kelurahan Jenggot', 'layak', 1, 1, 'layak', 1, 'Tidak Layak', 'Modem', 900, 'layak', '1', 'layak', 'layak', 5, 'Di Kelurahan Jenggot', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'CPU masih dalam perbaikan dan sementara ditempatkan di Kelurahan', 'agil'),
(157, 'Labib', 'Banyurip Alit Gg. 2 RT 01 RW 07 ', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 900, 'layak', '1', 'layak', 'layak', 6, 'Di Rumah Pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua perangkat Telecenter berjalan dengan baik', 'helmi'),
(158, 'Nur Aniqoh', 'Kertoharjo Gg. 15 ', 'layak', 1, 1, 'layak', 1, 'layak', 'Modem', 450, 'layak', '1', 'layak', 'layak', 10, 'Di Samping TPQ', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Modem Rusak', 'helmi'),
(159, 'Maemunah/Hamam', 'Jl. Pelita V Gg. 4 RT 01 RW 05 Kertoharjo', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 900, 'layak', '1', 'layak', 'layak', 8, 'Di Majlis Talim dan TPQ Ar-Rohmah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua perangkat Telecenter berjalan dengan baik', 'helmi'),
(160, 'Nikmatul Ulfa', 'Jl. Dwikora Yosorejo RT 01 RW 09 Yosorejo', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 900, 'layak', '1', 'layak', 'layak', 3, 'Di Rumah Pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Jaringan Internet swadaya sendiiri, Telecenter mandiri', 'helmi'),
(161, 'Yasani', 'Jl. Dwikora No. 86 RT 02 RW 07 Yosorejo', 'layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', 'Speedy', 900, 'layak', '0', 'Tidak Layak', 'Tidak Layak', 0, 'Di Rumah Pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Jaringan internet mati', 'helmi');
INSERT INTO `tb_telecenter` (`id_telecenter`, `nama_pengelola`, `alamat_pengelola`, `pc_status`, `pc_jumlah`, `printer_jumlah`, `printer_status`, `jaringan_jumlah`, `jaringan_status`, `jaringan_jenis`, `listrik_jumlah`, `listrik_status`, `mebeler`, `mebeler_status`, `ruangan_status`, `jumlah_pengguna`, `posisi`, `lokasi`, `ket_1`, `ket_2`, `surveyor`) VALUES
(162, 'Makmur', 'Kradenan Gg. 1', 'layak', 1, 1, 'layak', 1, 'Tidak Layak', 'Speedy', 900, 'layak', '1', 'layak', 'layak', 2, 'Di Rumah Pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Jaringan internet mati', 'agil'),
(163, 'Nur Chasanah', 'Kuripan Lor Gg. 3 RT 03 RW 01', 'layak', 1, 1, 'layak', 1, 'Tidak Layak', 'Speedy', 450, 'layak', '1', 'layak', 'layak', 2, 'Di Rumah Pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Jaringan internet mati', 'agil'),
(164, 'Taryono', 'Jl. Dwikora No. 45 RT 02 RW 08', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 900, 'layak', '1', 'layak', 'layak', 10, 'Di Rumah Pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua perangkat Telecenter berjalan dengan baik', 'agil'),
(165, 'Syukron', 'Jl. Dwikora RT 05 RW 06 Yosorejo', 'layak', 1, 1, 'layak', 1, 'Tidak Layak', 'Speedy', 900, 'layak', '1', 'layak', 'layak', 2, 'Di Rumah Pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Jaringan internet mati', 'agil'),
(167, 'Asad', 'Jl. Hos Cokroaminoto Gg. 8 RT 02 RW 03 Kuripan Lor', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 900, 'layak', '1', 'layak', 'layak', 7, 'Di Rumah Pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua perangkat Telecenter berjalan dengan baik', 'agil'),
(168, 'Galih', 'Jenggot RT 03 RW 10 ', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 900, 'layak', '1', 'layak', 'layak', 7, 'Di Rumah Pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Telecenter mandiri', 'agil'),
(170, 'Firdaus', 'Kertoharjo Gg. 7', 'Tidak Layak', 0, 0, 'Tidak Layak', 0, 'Tidak Layak', '-', 900, 'layak', '0', 'Tidak Layak', 'layak', 0, 'Keberadaan Perangkat Telecenter tidak diketahui', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangkat Telecenter tidak diketahui keberdaanya', 'helmi'),
(171, 'Pengurus TPQ Baitul Mukmin', 'Jl. HOS Cokroaminoto RT 04 RW 02', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 900, 'layak', '1', 'layak', 'layak', 15, 'Di Lingkungan Masjid dan TPQ Baitul Mukmin', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Semua perangkat Telecenter berjalan dengan baik', 'helmi'),
(172, 'Bp. Teguh Purnomo', 'Jl. Sulawesi Gg.9 No. 8 RT.06 RW.16 Bendan Kergon', 'Tidak Layak', 1, 1, 'layak', 1, 'Tidak Layak', 'Modem', 450, 'layak', 'Meja 1 Kursi 1', 'layak', 'layak', 0, 'PAUD di depan rumah pengelola telecenter', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'pemanfaatan dari masyarakat sekitar kurang karena tidak adanya kuota internet,\r\nprinter masih dapat digunakan,\r\nCPU mati.', 'sifa'),
(173, 'Bp. Yusuf A.', 'Jl. KH. Mas Mansyur Bendan Gg.2 No. 20 RT.05 RW.03 Bendan', 'Tidak Layak', 1, 1, 'layak', 1, 'layak', 'Modem', 900, 'layak', 'Meja 1 Kursi 1', 'layak', 'layak', 1, 'Taman Baca didekat rumah pengelola telecenter', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Monitor mati, printer offline, pemanfaatan masyarakat sekitar kurang baik.', 'sifa'),
(175, 'Bp. Budi Setyawan(Athina-Anak)', 'Jl. Merdeka Gg. 8 No. 5 RT 05 RW 18 Kraton Kidul', 'layak', 1, 1, 'layak', 1, 'Tidak Layak', 'Modem', 1200, 'layak', '1 Meja 1 Kursi', 'layak', 'layak', 2, 'Taman baca / Perpustakaan Masyarakat', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Printer warna rusak, hanya bisa hitam. Sudah 3 bulan  belum mendapatkan kuota internet lagi dari kelurahan.', 'sifa'),
(176, 'Bp. Mulyadi', 'Jl. Angkatan 66 Gg.14 RT 04 RW 10 Kramatsari', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Modem', 900, 'layak', '1 Meja 1 Kursi', 'layak', 'layak', 2, 'Didalam rumah pengelola telecenter', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Printer sudah rusak dari awal. Dapat kuota hanya 10 GB dan habis dengan cepat', 'sifa'),
(177, 'Bp. Fatkhurrohman', 'Jl.Kramatsari III Gg.12 No.8 RT 03 RW 12 Kramatsari', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy Telkom', 900, 'layak', '1 Meja 1 Kursi', 'layak', 'layak', 30, 'Didalam rumah pengelola telecenter', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangkat Komputer berfungsi dengan normal, keyboard kadang eror dan sudah di service pangelola, Speaker rusak, biaya internet dan perawatan menggunakan dana pengelola pribadi.', 'sifa'),
(178, 'Bp. Abdul Chakim', 'Jl. Sulawesi Gg.11 No. 12 RT 04 RT 06 Bendan Kergon', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 950, 'layak', '1 Meja 1 Kursi', 'layak', 'layak', 40, 'Didalam rumah pengelola telecenter', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangkat PC yng digunakan merupakan PC milik pengelola sendiri, karena PC dari Kecamatan sudah rusak,\r\nPrinter dari Kecamatan sudah rusak, sehingga pengelola menggunakan printer milik sendiri.\r\nkuota dari kelurahan, pemanfaatan masyarakat tinggi.', 'sifa'),
(179, 'Bp. Heru Santoso', 'Jl.Jendral Soedirman No.45 RT 04 RW 03 Podosugih', 'Tidak Layak', 1, 0, 'Tidak Layak', 0, 'Tidak Layak', '-', 2200, 'layak', '1 Meja', 'layak', 'Tidak Layak', 0, 'Toko Bondan Pustaka milik pengelola telecenter', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Telecenter pindahan dari rumah warga, perangkat komputer lemot dan cpu sudah diganti milik pengelola sendiri, dari awal pengelola tidak mendapatkan printer dan modem, pemanfaatan masyarakat tidak ada sama sekali.', 'sifa'),
(180, 'Ibu Kristiyanti', 'Jl. Urip Sumoharjo No.12, Podosugih (Toko Laundry Arti)', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', 'Speedy', 450, 'layak', '1 Meja 1 Kursi', 'layak', 'layak', 0, 'Didalam rumah pengelola telecenter', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Telecenter sudah lama tidak di kelola karena pengelola sudah pindah rumah, sudah tidak ada dana dari kelurahan atau kecamatan dari tahun 2017.', 'sifa'),
(181, 'Bp. Nasikin', 'Jl. Sultan Sahrir Gg. 10 No.10 Pasirkratonkramat', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 900, 'layak', '1 Meja 1 Kursi', 'layak', 'layak', 1, 'Didalam rumah pengelola telecenter', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Printer rusak, perangkat speaker rusak, jaringan internet dari pengelola sendiri yang dibayarkan dengan uang pengelola pribadi. pemanfaatan masyarakat sekitar rendah.', 'sifa'),
(182, 'IMAM', 'JL. KAUMAN BARU NO.35', 'layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', 'MODEM', 900, 'layak', 'MEJA', 'layak', 'layak', 2, 'RUMAH', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'PC DIBAWA PINDAH KE KARANGDADAP', 'hendro'),
(183, 'MUGIANTO', 'PERUM BRD BLOG A7 NO.5', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'layak', 'SPEEDY', 900, 'layak', 'MEJA', 'layak', 'layak', 3, 'RUMAH', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'PC DAN PRINTER RUSAK, JARINGAN INTERNET LANCAR', 'hendro'),
(184, 'Ibu Dwi Merdeka Susi', 'Jl. KH Mas Mansyur Gg. 7 No. 61 Rt 02 RW 05 Bendan', 'layak', 1, 1, 'Tidak Layak', 0, 'Tidak Layak', '-', 900, 'layak', '-', 'Tidak Layak', 'Tidak Layak', 0, 'Perangkat belum pernah digunakan dari awal, hanya disimpan oleh pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangkat belum pernah digunakan dari awal, hanya disimpan oleh pengelola, printer rusak dan masih di service karena catridge kering, pemanfaatan masyarakat belum ada karena telecenter tidak berjalan dari awal dipindahkan dari RW 4.', 'sifa'),
(185, 'M. Luthfi Hakim', 'Jl. Hasanudin Gang 6 Rt.05 / Rw.09 Sampangan', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 1300, 'layak', 'meja 1, kursi 1', 'layak', 'layak', 20, 'aula ponpes', 'Sesuai dengan Alamat Telecenter', '', 'perangkat komputer rusak dan printer juga rusak sudah tidak dapat di gunakan', 'dwi'),
(186, 'Bp. Dwi Daryanto Ch.', 'Jl. Tunas Raya No. 22 RT 01 RW 10 Bendan', 'Tidak Layak', 1, 1, 'Tidak Layak', 0, 'Tidak Layak', '-', 1300, 'layak', '-', 'Tidak Layak', 'Tidak Layak', 0, 'Perangkat belum pernah digunakan dari awal, hanya disimpan oleh pengelola', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangkat belum pernah digunakan dari awal, hanya disimpan oleh pengelola, printer rusak karena tidak pernah digunakan.', 'sifa'),
(187, 'Bp. Amat Rochman', 'Kraton Kidul Gg. 1 RT 02 RW 16 Kraton Kidul', 'layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', 'Speedy', 1300, 'layak', '1 Meja 1 Kursi', 'layak', 'Tidak Layak', 0, 'Didalam Kantor Sekretariat KIM / ex Kantor Kelurahan Kraton Kidul', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangkat Komputer dan Printer sudah lama tidak di gunakan, dan telecenter dibiarkan didalam ruangan.\r\ntelecenter pindahan dari rw 17 yang tadinya dari kelurahan.', 'sifa'),
(188, 'Mohamad Saefudin', 'Jl. Hasanudin Gang 6 Rt.04 / Rw.09 No.17A Sampangan ', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 900, 'layak', '1  meja', 'layak', 'layak', 5, 'ruang  tengah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'printer rusak tidak dapat di gunakan', 'dwi'),
(189, 'Maftuchah', 'Jl. Hayam Wuruk Gg.11 Rt.01 / Rw.10 Kel. Kauman', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 900, 'layak', '1  meja', 'layak', 'layak', 0, 'ruang tamu', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'perangkat komputer rusak sudah tidak dapat di gunakan', 'dwi'),
(190, 'Mulyadi', 'Jl. Blimbing No.119 Rt.05 / Rw.12 Kel. Kauman', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', 'Speedy', 900, 'layak', 'meja 1, kursi 1', 'layak', 'layak', 0, 'ruang tamu', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'perangkat komputer rusak tidak dapat di gunakan', 'dwi'),
(191, 'Biantono Handono', 'Sampangan Gg.3a No.10 Rt.06 / Rw.13 Kel. Kauman', 'layak', 1, 1, 'layak', 1, 'layak', 'Speedy', 2200, 'layak', 'meja 1, kursi 1', 'layak', 'layak', 5, 'ruang  tengah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'semua perangkat komputer masih bisa di gunakan dengan baik ', 'dwi'),
(192, 'M. Zimam Arofic', 'Jl. Bukti Bakti II Rt.04 / Rw.06 Kel. Noyontaansari (TPQ AL-Falah)', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'Tidak Layak', 'Speedy', 900, 'layak', 'meja 1, kursi 1', 'Tidak Layak', 'layak', 0, 'ruang TPQ', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'Perangkat komputer rusak tidak dapat di gunakan', 'dwi'),
(193, 'Irfan Maulana', 'Jl. Ki Surontoko Rt.01 / Rw.12 Dekoro', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 900, 'layak', 'meja 1, kursi 1', 'layak', 'layak', 10, 'ruang  tengah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'printer rusak sudah tidak dapat digunanakan lagi', 'dwi'),
(194, 'Sutrisno', 'Jl. Bondan Sari Rt.01 / Rw.14 Karangmalang', 'layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 900, 'layak', 'meja 1, kursi 1', 'layak', 'layak', 20, 'ruang  tengah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'printer dan kursi rusak tidak dapat digunakan lagi', 'dwi'),
(195, 'Ghoni', 'Jl. Kebon Sari Rt01 / Rw.15 Kel. Setono', 'Tidak Layak', 1, 1, 'Tidak Layak', 1, 'layak', 'Speedy', 450, 'layak', 'meja 1, kursi 1', 'Tidak Layak', 'layak', 10, 'Ruang Madrasah Diniyah', 'Sesuai dengan Alamat Telecenter', 'Belum Ada Status', 'perangkat komputer rusak tidak dapat di gunakan lagi', 'dwi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL DEFAULT 'default.jpeg',
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'Dinas Kominfo', 'admin', 'default.jpeg', '$2y$10$3XNPvG/eGH8SX3vuUTFM1.zkGgUfEAbqEtLHcy923wT2Qjnq6K21K', 1, 1, 1571114764),
(4, 'Harliyan Tri M', 'user', 'default.jpeg', '$2y$10$vdlFTyY.9M9MK16tuVwIXe4hVXG8FgLrA.4PN2OBBB1OjVywYBOnO', 2, 1, 1571124645),
(6, 'miqdad', 'miqdad', 'default.jpeg', '$2y$10$83aZeGlgwWSIaSF4YJD8RePwu0S06k7dP1Z5qG2N.hyV4ZP3xYTgG', 2, 1, 1591759055);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(11, 1, 3),
(12, 1, 4),
(13, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `icons` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `icons`) VALUES
(1, 'Admin', 'fas fa-fw fa-user'),
(2, 'User', 'fas fa-fw fa-users'),
(3, 'Menu', 'fas fa-fw fa-bars'),
(4, 'Data', 'fas fa-fw fa-home'),
(6, 'Report', 'fas fa-fw fa-flag');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-home', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(9, 1, 'User List', 'admin/userlist', 'fas fa-user-cog', 1),
(10, 4, 'Tambah Data', 'data/tambah', 'fas fa-fw fa-plus', 1),
(11, 4, 'Data Inventaris', 'data', 'fas fa-database', 1),
(12, 4, 'Status Perangkat', 'data/inputstatus', 'fas fa-pencil-alt', 1),
(13, 6, 'Report All', 'report', 'fas fa-flag-checkered', 1),
(14, 4, 'Jointing', 'data/jointing', 'fas fa-pen-square', 1),
(15, 4, 'Cluster', 'data/cluster', 'fas fa-pencil-alt', 1),
(16, 6, 'Report Kec. Utara', 'report/utara', 'fas fa-flag', 1),
(17, 6, 'Report Kec. Timur', 'report/timur', 'fas fa-flag', 1),
(18, 6, 'Report Kec. Selatan', 'report/selatan', 'fas fa-flag', 1),
(19, 6, 'Report Kec. Barat', 'report/barat', 'fas fa-flag', 1),
(20, 4, 'Master OPD', 'data/opd', 'fas fa-database', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cluster`
--
ALTER TABLE `cluster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data2`
--
ALTER TABLE `data2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datagis`
--
ALTER TABLE `datagis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desc`
--
ALTER TABLE `desc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gis`
--
ALTER TABLE `gis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jointing`
--
ALTER TABLE `jointing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `opd`
--
ALTER TABLE `opd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_perangkat`
--
ALTER TABLE `status_perangkat`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_telecenter`
--
ALTER TABLE `tb_telecenter`
  ADD PRIMARY KEY (`id_telecenter`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cluster`
--
ALTER TABLE `cluster`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `data2`
--
ALTER TABLE `data2`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `datagis`
--
ALTER TABLE `datagis`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `desc`
--
ALTER TABLE `desc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gis`
--
ALTER TABLE `gis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jointing`
--
ALTER TABLE `jointing`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `opd`
--
ALTER TABLE `opd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `status_perangkat`
--
ALTER TABLE `status_perangkat`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_telecenter`
--
ALTER TABLE `tb_telecenter`
  MODIFY `id_telecenter` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
