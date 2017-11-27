-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2017 at 02:51 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online2`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah_barang` int(5) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `harga`, `jumlah_barang`, `deskripsi`, `kategori`, `foto`) VALUES
(2, 'undangan', 30000, 200, 'undangan ini cocok untuk pernikahan maupun khitanan, tersedia warna kuning', 'undangan', 'IMG_20170327_194711.jpg'),
(3, 'tenda 1', 100000, 1, 'tenda dengan kualitas lumayan', 'tenda', 'IMG_20170327_191828.jpg'),
(4, 'tenda 3', 5000000, 3, 'tenda dengan kualitas ekslusif harga terjangkau', 'tenda', 'IMG_20170327_191855.jpg'),
(5, 'tenda 4', 4800000, 3, 'tenda dengan kualitas premium dengan luas total 150m2', 'undangan', '3.jpg'),
(6, 'tenda 5', 3200000, 4, 'tenda ini jauh lebih sederhana dan unik', 'tenda', 'IMG_20170327_191357.jpg'),
(7, 'undangan 2', 2000, 100, 'surat undangan dengan model ekslusif', 'undangan', 'IMG_20170327_194516.jpg'),
(8, 'tenda 6', 4400000, 3, 'tenda dengan nuansa romantik', 'undangan', 'IMG_20170327_191454.jpg'),
(9, 'undangan 3', 1500, 300, 'dengan motif yang sederhana namun tetap berkualitas', 'undangan', 'IMG_20170327_194339.jpg'),
(10, 'undangan 4', 1200, 250, 'undangan untuk pernikahan', 'undangan', 'IMG_20170327_194450.jpg'),
(11, 'undangan 5', 2200, 230, 'undangan dengan motif baik', 'undangan', 'IMG_20170327_194544.jpg'),
(12, 'undangan 6', 1900, 270, 'undangan pantas untuk khitanan', 'undangan', 'IMG_20170327_194609.jpg'),
(13, 'undangan 7', 1800, 320, 'undangan yang sangat simple nan murah', 'undangan', 'IMG_20170327_194727.jpg'),
(14, 'undangan 8 ', 1750, 300, 'undangan yang paling laris', 'undangan', 'IMG_20170327_195152.jpg'),
(15, 'tenda', 2500000, 5, 'tenda dengan kapasitas kursi 500 kursi dan panjang 100m2', 'undangan', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang2`
--

CREATE TABLE `keranjang2` (
  `id_keranjang` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `id_session` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'eman', '123');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_beli` int(11) NOT NULL,
  `pembeli` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` int(20) NOT NULL,
  `banyak` int(11) NOT NULL,
  `warna` varchar(30) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `rek` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `id_session` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_beli`, `pembeli`, `alamat`, `telepon`, `banyak`, `warna`, `ket`, `rek`, `id`, `id_session`, `tanggal`) VALUES
(18, 'eman', 'asesdnk', 121212, 2, 'Pink-Putih', '', '0928-2334-2093-2390 (BCA)', 12, 'a9a8k50cncte2nrllbg24omr83', '2017-05-26'),
(19, 'man', 'kjnkj', 111111, 2, 'Merah-Putih', '', '0928-2334-2093-2390 (BCA)', 14, 'ldrn3a52c6o2lv7rukv1iu2k07', '2017-05-27'),
(20, 'amdari', 'slkdmnflsk', 121111, 2, 'Hitam-Hijau', '', '2334-1234-4343-3452 (BNI)', 12, 'n3u34dv08nicha7qn518f804h1', '2017-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id2` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `isi` varchar(200) NOT NULL,
  `subjek` varchar(20) NOT NULL,
  `id_pesan` varchar(8) NOT NULL,
  `id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id2`, `firstname`, `lastname`, `email`, `password`, `isi`, `subjek`, `id_pesan`, `id`) VALUES
(21, 'eman', 'sualeman', 'emanuser13@gmail.com', 'eman123', 'Terima kasih sudah melakukan pemesanan di Tubi Art silahkan klik link di bawah ini untuk melakukan \r\n                registrasi pemesanan', 'Registrasi pemesanan', 'P5959', ''),
(22, 'man', 'eman', 'man@gmail.com', 'man123', 'Terima kasih sudah melakukan pemesanan di Tubi Art silahkan klik link di bawah ini untuk melakukan \r\n                registrasi pemesanan', 'Registrasi pemesanan', 'P1111', ''),
(23, 'amdari', 'muhammad', 'amdari@gmail.com', 'amdari123', 'Terima kasih sudah melakukan pemesanan di Tubi Art silahkan klik link di bawah ini untuk melakukan \r\n                registrasi pemesanan', 'Registrasi pemesanan', 'P4545', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang2`
--
ALTER TABLE `keranjang2`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_beli`),
  ADD KEY `id` (`id`),
  ADD KEY `id_session` (`id_session`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id2`),
  ADD KEY `id_session` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `keranjang2`
--
ALTER TABLE `keranjang2`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `keranjang2`
--
ALTER TABLE `keranjang2`
  ADD CONSTRAINT `keranjang2_ibfk_1` FOREIGN KEY (`id`) REFERENCES `barang` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id`) REFERENCES `barang` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
