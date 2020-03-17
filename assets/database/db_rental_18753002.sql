-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2020 at 06:39 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rental_18753002`
--

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE `denda` (
  `id_denda` int(11) NOT NULL,
  `nama_denda` varchar(25) DEFAULT NULL,
  `harga_denda` int(11) DEFAULT NULL,
  `ket` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `denda`
--

INSERT INTO `denda` (`id_denda`, `nama_denda`, `harga_denda`, `ket`) VALUES
(1, 'Terlambat', 50000, 'Perhari'),
(2, 'Lecet atau Penyok', 300000, 'Rusak ringan'),
(3, 'Rusak Parah', 3000000, 'Rusak Berat'),
(4, 'Hilang', 5000000, 'Hilang');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `no_pol` varchar(40) NOT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `merek` varchar(20) DEFAULT NULL,
  `harga_sewa` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`no_pol`, `jenis`, `merek`, `harga_sewa`) VALUES
('B 1041 TFO', 'MPV', 'Daihatsu Xenia', 19800000),
('B 1055 AAL', 'CityCar', 'Toyota Yaris 1.5 G M', 47500000),
('B 1059 TVG', 'City Car', 'Suzuki Swift Sport C', 38500000),
('B 1208 ERT', 'City Car', 'Mitsubishi Mirage 20', 45000000),
('B 1322 RFS', 'MPV', 'Suzuki Ertiga GL AT', 35000000),
('B 133 AGI', 'MPV', 'Toyota Avanza Veloz ', 21000000),
('B 1394 PYG', 'Mobil Sedan', 'Toyota Corolla Altis', 78500000),
('B 1424 PFE', 'MPV', 'Nissan Grand Livina ', 35000000),
('B 1437 EKF', 'MPV', 'Toyota Avanza 1.3 E ', 20000000),
('B 1471 BKC', 'City Car', 'Toyota Yaris 1.5 G A', 45000000),
('B 1491 TYI', 'Mobil Sedan', 'Honda Civic Hatchbac', 75000000),
('B 1521 PRR', 'Mobil SUV', 'Toyota Fortuner 2.4 ', 95000000),
('B 1548 KVH', 'City Car', 'Honda Jazz A MT', 50000000),
('B 1599 URZ', 'Mobil SUV', 'Honda CR-V 2.0 i-VTE', 65000000),
('B 1613 TZW', 'City Car', 'Suzuki Swift Sport M', 39500000),
('B 1683 SEY', 'Mobil Double Cabin', 'Mitsubishi Triton Do', 90000000),
('B 1927 KBM', 'MPV', 'Honda Mobilio E CVT ', 25000000),
('B 234 TNP', 'City Car', 'Honda Jazz RS MT', 55000000),
('B 275 SKE', 'MPV', 'Honda Mobilio 2017 S', 25500000),
('B 2984 BO', 'City Car', 'Mitsubishi Mirage 20', 35000000),
('B 585 RFS', 'MPV', 'Toyota Avanza Veloz ', 25200000),
('D 1685 ACK', 'Mobil SUV', 'Toyota Rush G AT', 55000000),
('D 1768 AFI', 'MPV', 'Toyota Avanza 1.3 G ', 25000000),
('D 1880 RZ', 'MPV', 'Nissan Grand Livina ', 35200000),
('F 1318 AT', 'Mobil Double Cabin', 'Isuzu D-Max Double C', 80000000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `no_transaksi` varchar(10) NOT NULL,
  `tgl_peminjaman` date DEFAULT NULL,
  `id_petugas` varchar(16) DEFAULT NULL,
  `id_penyewa` varchar(20) DEFAULT NULL,
  `no_pol` varchar(10) DEFAULT NULL,
  `lama_peminjaman` int(2) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `jk` enum('L','P') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`no_transaksi`, `tgl_peminjaman`, `id_petugas`, `id_penyewa`, `no_pol`, `lama_peminjaman`, `harga`, `jk`) VALUES
('01', '2019-09-02', '1958985600235370', '1978985600234400', 'B 133 AGI', 4, 55000000, 'L'),
('02', '2019-11-05', '1958985600235380', '1978985600234620', 'B 585 RFS', 2, 25200000, 'L'),
('03', '2019-09-02', '1958985600235390', '1978985600234620', 'B 133 AGI', 3, 21000000, 'L'),
('04', '2019-09-08', '1958985600235400', '1978985600234450', 'B 234 TNP', 2, 55000000, 'L'),
('05', '2019-09-13', '1958985600235430', '1978985600234510', 'B 1041 TFO', 3, 65000000, 'P'),
('06', '2019-09-08', '1958985600235400', '1978985600234680', '', 1, 25000000, 'L'),
('07', '2019-09-09', '1958985600235410', '1978985600234400', '', 3, 35000000, 'P'),
('09', '2019-10-11', '1958985600235430', '1978985600234600', '', 3, 45000000, 'L'),
('10', '2019-09-12', '1958985600235430', '1978985600234500', 'B 1055 AAL', 3, 75000000, 'L'),
('11', '2019-09-28', '1958985600235400', '1978985600234680', 'B 1471 BKC', 1, 25000000, 'L');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `no_transaksi` varchar(10) NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `id_petugas` varchar(16) DEFAULT NULL,
  `id_penyewa` varchar(20) DEFAULT NULL,
  `no_pol` varchar(9) DEFAULT NULL,
  `id_denda` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`no_transaksi`, `tgl_kembali`, `id_petugas`, `id_penyewa`, `no_pol`, `id_denda`, `harga`) VALUES
('01', '2019-11-06', '1958985600235370', '1978985600234620', 'D 1880 RZ', 2, 75200000),
('02', '2019-11-07', '1958985600235380', '1978985600234450', 'B 585 RFS', 2, 55200000),
('03', '2019-09-05', '1958985600235390', '1978985600234620', 'B 133 AGI', 3, 71000000),
('04', '2019-09-10', '1958985600235400', '1978985600234450', 'B 234 TNP', 2, 120000000),
('05', '2019-09-16', '1958985600235430', '1978985600234510', 'B 1599 UR', 3, 185000000),
('06', '2019-09-09', '1958985600235400', '1978985600234680', 'B 1927 KB', 1, 102000000),
('07', '2019-09-12', '1958985600235410', '1978985600234400', 'B 1322 RF', 3, 132000000),
('08', '2019-08-12', '1958985600235420', '1978985600234650', 'B 1424 PF', 2, 225000000),
('09', '2019-10-14', '1958985600235430', '1978985600234600', 'B 1471 BK', 4, 115000000),
('10', '2019-12-21', '1958985600235430', '1978985600234410', 'D 1880 RZ', 2, 75200000);

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE `penyewa` (
  `id_penyewa` varchar(20) NOT NULL,
  `nm_penyewa` varchar(35) DEFAULT NULL,
  `jk` enum('L','P') DEFAULT NULL,
  `alamat_penyewa` text DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyewa`
--

INSERT INTO `penyewa` (`id_penyewa`, `nm_penyewa`, `jk`, `alamat_penyewa`, `no_hp`) VALUES
('1978985600234400', 'Laras Fitrianingsih', 'P', 'Jl.Ahmad Yani No. 90 RT/RW 001/002,Bandar Lampung', '856781245922'),
('1978985600234410', 'Laura Carona', 'P', 'Jl.Basuki Rahmat No. 90 RT/RW 001/002,Pesawaran', '85678124596'),
('1978985600234420', 'Libby Afipa Editanisa', 'P', 'Jl.Ahmad Yani2 No. 90 RT/RW 001/002,Lampung Selatan', '85678124597'),
('1978985600234430', 'Lidia Firda Saputri', 'P', 'Jl.Ahmad Yani No. 90 RT/RW 001/002,Bandar Lampung', '85678124598'),
('1978985600234440', 'M. Fajri Ramadhan', 'L', 'Jl.Basuki Rahmat No. 90 RT/RW 001/002,Pesawaran', '85678124599'),
('1978985600234450', 'M. Ilham Yusuf Gumai', 'L', 'Jl.Basuki Rahmat No. 90 RT/RW 001/002,Pesawaran', '85678124600'),
('1978985600234460', 'Made Slimacek', 'L', 'Jl.Z.A Pagar Alam No. 190,Kedaton', '85678124601'),
('1978985600234470', 'Mudo Kurniawan', 'L', 'Jl.Paguyuban Tirtayasa,Kemiling,Bandar Lampung', '85678124602'),
('1978985600234480', 'Muh. Aulia Prima Insani', 'L', 'Jl.Taman Margasatwa No.12,Warung Buncit,Jakarta Selatan', '85678124603'),
('1978985600234490', 'Muhammad Ichsan Rofiqo', 'L', 'JL. Tebet Raya No. 84, Tebet, Jakarta Selatan', '85678124604'),
('1978985600234500', 'Ongky Alexander', 'L', 'Jl. Metro Pondok Indah Kav. IV, Kebayoran Lama, Jakarta Selatan', '85678124605'),
('1978985600234510', 'Putri Mellyana Eka Safitri', 'P', 'Jl. KH. Agus Salim No. 29A Jakarta Pusat.', '85678124606'),
('1978985600234520', 'Renaldhi Fitra Yudha', 'L', 'Jl. Hos Cokroaminoto, No. 84, Menteng Jakarta Pusat.', '85678124607'),
('1978985600234530', 'Reza Janati Utami', 'P', 'Jl. Ahmad Dahlan/ Jl. Bacang I No.2 Jakarta Selatan', '85678124608'),
('1978985600234540', 'Romi Wijayanti', 'P', 'Jl. Raya Tirtomarto No.67 Ampelgading', '85678124609'),
('1978985600234550', 'Rona Arika Hasna', 'P', 'Jl. Raya Pasar Minggu Jakarta Selatan, Sebelah Makam Pahlawan Kalibata Jakarta Selatan', '85678124610'),
('1978985600234560', 'Safira Novrianti', 'P', 'Jl. Semeru Selatan No.23 Dampit ', '85678124611'),
('1978985600234570', 'Safira Ramadani', 'P', 'Jl. Benda No. 20D, Kemang Jakarta Selatan', '85678124612'),
('1978985600234580', 'Salza Firdiana Izmi', 'P', 'Jl. Arya Putra, Kedaung Ciputat Tangerang', '85678124613'),
('1978985600234590', 'Shinta', 'P', 'Jl. Raya Hasanudin No.180 Gedangan', '85678124614'),
('1978985600234600', 'Shoni Setiawan', 'L', 'Jl. Brigjend Abdul Manan No.8 Pujon', '85678124615'),
('1978985600234610', 'Stephani Yolanda', 'P', 'Jl. Raya Gunung Kawi No.10 Wonosari', '85678124616'),
('1978985600234620', 'Suryani', 'L', 'Jl. Alam Segar 3 No. 8, Pondok Indah Jakarta Selatan', '85678124617'),
('1978985600234640', 'Tika Nur Annisa', 'P', 'Jl. Kawi No.50 Kepanjen', '85678124619'),
('1978985600234650', 'Tri Wahyudi', 'L', 'Jl. Nailun Selatan No.85 Kromengan', '85678124620'),
('1978985600234670', 'Vani Yuliandari', 'P', 'Jl. Raya Tlogosari No.457 Tirtoyudo', '85678124622'),
('1978985600234680', 'Vina Kusuma Tri Wardani', 'P', 'Jl. Raya Tajinan No.18 Tajinan', '85678124623'),
('1978985600234690', 'Yondri Bayu Irawan', 'L', 'Jl. Kebon Jeruk Raya No. 44 (depan SMPN 75) Jakarta Barat', '85678124624'),
('574893574987984758', 'Ade Setiawan', 'L', 'jl. Kalianda, lamsel', '8567812459229');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` varchar(20) NOT NULL,
  `nm_petugas` varchar(35) DEFAULT NULL,
  `jk` enum('L','P') DEFAULT NULL,
  `jabatan` varchar(15) DEFAULT NULL,
  `gaji` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nm_petugas`, `jk`, `jabatan`, `gaji`) VALUES
('1958985600235370', 'Juztino Maratole', 'L', 'Direktur', 0),
('1958985600235380', 'Ayu Fariska', 'P', 'Sopir', 0),
('1958985600235390', 'Sumitri Alibaba', 'L', 'Sopir', 0),
('1958985600235400', 'Yulia Purba', 'P', 'Kasir', 0),
('1958985600235410', 'Ageng Yulia', 'P', 'Kasir', 0),
('1958985600235420', 'Julio Farastika Siantar', 'L', 'Manager', 0),
('1958985600235430', 'Ahmad Sekoni', 'L', 'Dirtektur', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`id_denda`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`no_pol`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `id_penyewa` (`id_penyewa`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `no_pol` (`no_pol`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `id_penyewa` (`id_penyewa`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `no_pol` (`no_pol`),
  ADD KEY `id_denda` (`id_denda`);

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`id_penyewa`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_penyewa`) REFERENCES `penyewa` (`id_penyewa`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`),
  ADD CONSTRAINT `peminjaman_ibfk_3` FOREIGN KEY (`no_pol`) REFERENCES `kendaraan` (`no_pol`),
  ADD CONSTRAINT `peminjaman_ibfk_4` FOREIGN KEY (`no_pol`) REFERENCES `kendaraan` (`no_pol`);

--
-- Constraints for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`id_penyewa`) REFERENCES `penyewa` (`id_penyewa`),
  ADD CONSTRAINT `pengembalian_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`),
  ADD CONSTRAINT `pengembalian_ibfk_3` FOREIGN KEY (`no_pol`) REFERENCES `kendaraan` (`no_pol`),
  ADD CONSTRAINT `pengembalian_ibfk_4` FOREIGN KEY (`id_denda`) REFERENCES `denda` (`id_denda`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
