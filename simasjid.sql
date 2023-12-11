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
(7, '02:32:00', '2022-08-16', 'Fadli Lc.Ma', 'Senin', 'Iman pada hari akhirr'),
(8, '20:22:00', '2022-08-17', 'Hanna attacik Lc.', 'Selasa', 'Manfaatkan masa muda'),
(9, '00:30:00', '2022-08-17', 'Ustad Nuar Lc. ', 'Rabu', 'Adab-adab bertaubat'),
(10, '10:30:00', '2022-08-18', 'Hanna attacik Lc.', 'Kamis', 'Iman pada hari akhirr');

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
(23, 'Fikih1', 'Ustad Taufik Lc.MA1'),
(24, 'Iman pada hari akhirr', 'Fadli Lc.Ma'),
(25, 'Manfaatkan masa muda', 'Hanna attacik Lc.'),
(26, 'Adab-adab bertaubat', 'Ustad Nuar Lc. ');

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
(3, 'wesss', '2022-08-16', 40000),
(4, 'as2222', '2022-09-19', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `kas_masuk`
--

CREATE TABLE `kas_masuk` (
  `id_kasmasuk` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `masuk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kas_masuk`
--

INSERT INTO `kas_masuk` (`id_kasmasuk`, `keterangan`, `tanggal`, `masuk`) VALUES
(6, 'ess1', '2022-08-09', 110000),
(7, 'sedekah jariyah', '2022-08-17', 500000),
(8, 'infak', '2022-08-11', 320000);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `isi_pengumuman` text,
  `tgl` date NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `isi_pengumuman`, `tgl`, `foto`) VALUES
(7, 'Sholat Hari Raya Idul adha', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, libero enim harum, ex ullam voluptates officiis nostrum dolore cupiditate soluta non optio doloremque beatae! Repellat accusantium laborum laudantium tempore. Omnis beatae provident minima eos temporibus, distinctio commodi? Nesciunt eaque odit veniam corporis minus odio explicabo saepe neque. Hic, similique dolorum.', '2022-08-19', 'k4.jpeg'),
(9, 'Organisasi Remaja masjid', '\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat distinctio laborum aperiam facere nisi placeat voluptate cupiditate maiores dolore, saepe, odio consectetur sapiente nemo quibusdam praesentium expedita fugit reiciendis nam adipisci totam dicta accusamus veritatis vel fuga! Ipsam pariatur iusto voluptas! Sit rerum odit dolore ipsa alias, earum nisi consequuntur.', '2022-08-20', 'k3.jpeg'),
(10, 'kegiatan remaja masjid', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, iste. Nostrum exercitationem, cum aspernatur nulla maiores ipsam laboriosam, voluptate vero dolore similique, libero quod harum porro cupiditate eligendi ea rem expedita. Sit ex doloremque, pariatur distinctio minus ipsum? Ratione eligendi perferendis sunt repudiandae officia sapiente voluptatum, pariatur nemo qui numquam quo maxime quam omnis modi in expedita unde, quisquam eaque.', '2022-08-19', 'k1.jpg'),
(11, 'persatuan remaja masjid', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, iste. Nostrum exercitationem, cum aspernatur nulla maiores ipsam laboriosam, voluptate vero dolore similique, libero quod harum porro cupiditate eligendi ea rem expedita. Sit ex doloremque, pariatur distinctio minus ipsum? Ratione eligendi perferendis sunt repudiandae officia sapiente voluptatum, pariatur nemo qui numquam quo maxime quam omnis modi in expedita unde, quisquam eaque.', '2022-08-20', 'k2.jpeg'),
(12, 'Lomba azan', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, iste. Nostrum exercitationem, cum aspernatur nulla maiores ipsam laboriosam, voluptate vero dolore similique, libero quod harum porro cupiditate eligendi ea rem expedita. Sit ex doloremque, pariatur distinctio minus ipsum? Ratione eligendi perferendis sunt repudiandae officia sapiente voluptatum, pariatur nemo qui numquam quo maxime quam omnis modi in expedita unde, quisquam eaque.', '2022-08-21', 'k5.png'),
(13, 'Penyaluran zakat', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, iste. Nostrum exercitationem, cum aspernatur nulla maiores ipsam laboriosam, voluptate vero dolore similique, libero quod harum porro cupiditate eligendi ea rem expedita. Sit ex doloremque, pariatur distinctio minus ipsum? Ratione eligendi perferendis sunt repudiandae officia sapiente voluptatum, pariatur nemo qui numquam quo maxime quam omnis modi in expedita unde, quisquam eaque.', '2022-08-22', 'k6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sarana`
--

CREATE TABLE `sarana` (
  `id_sapra` int(11) NOT NULL,
  `nama_sapra` varchar(25) NOT NULL,
  `foto` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sarana`
--

INSERT INTO `sarana` (`id_sapra`, `nama_sapra`, `foto`) VALUES
(14, 'Parkiran Masjid al-furqon', 'p1.jpg'),
(16, 'Tempat Wudhu', 'p2.jpg'),
(17, 'Tempat Toilet', 'p3.jpg'),
(18, 'AC mini', 'p4.jpg');

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
(7,'admin.png','admin','admin');

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(2) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `foto`, `username`, `password`) VALUES
(8, 'user.png', 'user', 'user');

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

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
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
