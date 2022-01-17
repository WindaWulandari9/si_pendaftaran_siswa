-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 12:45 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftaran`
--

CREATE TABLE `tbl_pendaftaran` (
  `id` int(5) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `no_pendaftaran` varchar(50) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `alamat_siswa` varchar(100) NOT NULL,
  `nama_ortu` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pendaftaran`
--

INSERT INTO `tbl_pendaftaran` (`id`, `nama_lengkap`, `no_pendaftaran`, `tgl_pendaftaran`, `ttl`, `jenis_kelamin`, `agama`, `alamat_siswa`, `nama_ortu`, `no_hp`, `keterangan`) VALUES
(8, 'Jihan Caesa', '001SIP/2022', '2022-01-16', 'Kisaran, 18 Juni 2018', 'Perempuan', 'Islam', 'Jln. Sanusi Pane Lk. V', 'Siti Sariani/Arifin', '081345678901', '-'),
(9, 'Tri Aliza Novrisa', '002SIP/2022', '2022-01-17', 'Kisaran, 20 Januari 2017', 'Perempuan', 'Islam', 'komp. TDI blok B no-33', 'supreh/dewi', '082367789023', '-'),
(10, 'Afdhal Zio Zikri', '003SIP/2022', '2022-01-17', 'Kisaran, 22 Februari 2016', 'laki-laki', 'Islam', 'komp. TDI blok C no-35', 'Endang/Yatno', '085267890607', '-'),
(11, 'Rifqi Faeyza Arfa', '004SIP/2022', '2022-01-18', 'Kisaran, 24 April 2017', 'laki-laki', 'Islam', 'Gg. Suluk ', 'Nasib/Nur', '081245678786', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penerimaan`
--

CREATE TABLE `tbl_penerimaan` (
  `id` int(5) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `no_pendaftaran` varchar(50) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `alamat_siswa` varchar(100) NOT NULL,
  `nama_ortu` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_penerimaan`
--

INSERT INTO `tbl_penerimaan` (`id`, `nama_lengkap`, `no_pendaftaran`, `tgl_pendaftaran`, `ttl`, `jenis_kelamin`, `agama`, `alamat_siswa`, `nama_ortu`, `no_hp`, `keterangan`) VALUES
(3, 'Jihan Caesa', '001SIP/2022', '2022-01-16', 'Kisaran, 18 Juni 2018', 'Perempuan', 'Islam', 'Jln. Sanusi Pane Lk. V', 'Siti Sariani/Arifin', '081345678901', 'Diterima'),
(4, 'Afdhal Zio Zikri', '003SIP/2022', '2022-01-17', 'Kisaran, 22 Februari 2016', 'laki-laki', 'Islam', 'komp. TDI blok C no-35', 'Endang/Yatno', '085267867823', 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'devk@gmail.com', 'ADMIN', 1, 'Staff TK/PAUD Syasti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_perkara` (`no_pendaftaran`);

--
-- Indexes for table `tbl_penerimaan`
--
ALTER TABLE `tbl_penerimaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_penerimaan`
--
ALTER TABLE `tbl_penerimaan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
