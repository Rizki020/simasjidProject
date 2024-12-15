-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 20, 2022 at 04:16 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simasjid`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `waktu` time NOT NULL,
  `tanggal` date NOT NULL,
  `penceramah` varchar(30) NOT NULL,
  `hari` varchar(25) NOT NULL,
  `kajian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `waktu`, `tanggal`, `penceramah`, `hari`, `kajian`) VALUES
(1, '14:53', '2023-11-28', 'Ustad Abdul', 'Kamis', 'shubuh');

-- --------------------------------------------------------

--
-- Table structure for table `kajian`
--

CREATE TABLE `kajian` (
  `id_kajian` int(11) NOT NULL,
  `nm_kajian` varchar(30) DEFAULT NULL,
  `nm_ustad` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kajian`
--

INSERT INTO `kajian` (`id_kajian`, `nm_kajian`, `nm_ustad`) VALUES
(1, 'shubuh', 'Ustad Abdul');


-- --------------------------------------------------------

--
-- Table structure for table `kas_keluar`
--

CREATE TABLE `kas_keluar` (
  `id_kaskeluar` int(11) NOT NULL,
  `keterangan_k` varchar(30) NOT NULL,
  `tanggal_k` date NOT NULL,
  `keluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kas_keluar`
--

INSERT INTO `kas_keluar` (`id_kaskeluar`, `keterangan_k`, `tanggal_k`, `keluar`) VALUES
(1, 'Renovasi Atap', '2023-11-28', 9000000);

-- --------------------------------------------------------

--
-- Table structure for table `kas_masuk`
--

CREATE TABLE `kas_masuk` (
  `id_kasmasuk` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `masuk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kas_masuk`
--

INSERT INTO `kas_masuk` (`id_kasmasuk`, `nama`,`keterangan`, `tanggal`, `masuk`) VALUES
(1, 'rizki','sedekah', '2023-11-28', 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_pengumuman` text,
  `tgl` date NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `isi_pengumuman`, `tgl`, `foto`) VALUES
(1,'mengaji untuk anak anak','','2023-11-28','IMG20231121185317.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sarana`
--

CREATE TABLE `sarana` (
  `id_sapra` int(11) NOT NULL,
  `nama_sapra` varchar(255) NOT NULL,
  `foto` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sarana`
--

INSERT INTO `sarana` (`id_sapra`, `nama_sapra`, `foto`) VALUES
(1,'parkiran masjid','IMG20231124123655.jpg'),
(2,'Tempat Wudhu','IMG20231121185406.jpg'),
(3,'Gudang','IMG20231121185347.jpg'),
(4,'renovasi atap','rnv3.jpg'),
(5,'AC','IMG20231121185248.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT null
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin`(`id_admin`,`foto`,`username`,`password`) VALUES
(1,'admin.png','admin','1zxa54');

--
-- Table structure for table `Users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL, 
  `no_hp` varchar(12) DEFAULT NULL, 
  `role` varchar(20) DEFAULT 'jamaah', 
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `users` (`username`, `password`, `no_hp`, `role`) VALUES
('rizki_jamaah', '123', '081234567890', 'jamaah');

--
-- Table structure for table `Jamaah`
--

CREATE TABLE `jamaah` (
  `id_jamaah` int(2) NOT NULL,
  `nama_jamaah` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `Organisasi` varchar(255) Default NULL,
  `Jabatan` varchar(255) Default Null
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jamaah`
--

INSERT INTO `jamaah` (`id_jamaah`, `nama_jamaah`, `foto`, `organisasi`, `jabatan`) VALUES
(1,'rizki','Anggota.jpg','remaja masjid','sosial');

--
-- Table structure for table `jadwalazan`
--

CREATE TABLE `jadwalazan` (
  `id_azan` int(2) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `pukul` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwalazan`
--

INSERT INTO `jadwalazan` (`id_azan`, `waktu`, `pukul`) VALUES
(1,'Subuh','04:59'),
(2,'Terbit','06:09'),
(3,'Dzuhur','12:09'),
(4,'Asar','15:31'),
(5,'Maghrib','18:09'),
(6,'Isya','19:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `kajian`
--
ALTER TABLE `kajian`
  ADD PRIMARY KEY (`id_kajian`);

--
-- Indexes for table `kas_keluar`
--
ALTER TABLE `kas_keluar`
  ADD PRIMARY KEY (`id_kaskeluar`);

--
-- Indexes for table `kas_masuk`
--
ALTER TABLE `kas_masuk`
  ADD PRIMARY KEY (`id_kasmasuk`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `sarana`
--
ALTER TABLE `sarana`
  ADD PRIMARY KEY (`id_sapra`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY(`id_user`);

--
-- Indexes for table `jamaah`
--
ALTER TABLE `jamaah`
  ADD PRIMARY KEY (`id_jamaah`);

--
-- Indexes for table `jadwalazan`
--
ALTER TABLE `jadwalazan`
  ADD PRIMARY KEY (`id_azan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kajian`
--
ALTER TABLE `kajian`
  MODIFY `id_kajian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `kas_keluar`
--
ALTER TABLE `kas_keluar`
  MODIFY `id_kaskeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kas_masuk`
--
ALTER TABLE `kas_masuk`
  MODIFY `id_kasmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sarana`
--
ALTER TABLE `sarana`
  MODIFY `id_sapra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `jadwalazan`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
  
--
-- AUTO_INCREMENT for table `jadwalazan`
--
ALTER TABLE `jadwalazan`
  MODIFY `id_azan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jamaah`
--
ALTER TABLE `jamaah`
  MODIFY `id_jamaah` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
