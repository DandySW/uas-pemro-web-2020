-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2020 at 03:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `cartjumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `historyid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `action` varchar(50) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` double NOT NULL,
  `history_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`historyid`, `userid`, `action`, `productid`, `quantity`, `history_date`) VALUES
(1, 1, 'Menambahkan Barang', 1, 68, '2020-06-12 02:38:43'),
(2, 1, 'Menambahkan Barang', 2, 100, '2020-06-12 05:20:46'),
(3, 1, 'Menambahkan Barang', 3, 78, '2020-06-12 06:09:46'),
(4, 1, 'Menambahkan Barang', 4, 70, '2020-06-12 06:10:57'),
(5, 1, 'Menambahkan Barang', 5, 75, '2020-06-12 06:13:03'),
(6, 1, 'Menambahkan Barang', 6, 85, '2020-06-12 06:13:26'),
(7, 1, 'Menambahkan Barang', 7, 79, '2020-06-12 06:18:40'),
(8, 1, 'Menambahkan Barang', 8, 83, '2020-06-12 06:19:16'),
(9, 1, 'Menambahkan Barang', 9, 83, '2020-06-12 06:19:21'),
(10, 1, 'Mengubah Barang', 9, 77, '2020-06-12 06:20:26'),
(11, 1, 'Menambahkan Barang', 10, 65, '2020-06-12 06:21:05');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `nama`, `harga`, `jumlah`, `foto`) VALUES
(1, 'Pensil', 2500, 68, 'upload/5bc5aa2754ae5_1591904322.jpg'),
(2, 'Penggaris', 5000, 100, 'upload/2_1591914046.jpg'),
(3, 'Penghapus', 1000, 78, 'upload/bc7900edb01131a0d2da42421a619336_1591916986.jpeg'),
(4, 'Gunting', 5000, 70, 'upload/bb449870883920b79a617b357d5ea589_1591917057.jpg'),
(5, 'Bulpoin', 2000, 75, 'upload/26423674_5b351e42-8236-41ea-a859-e1f3ff8cc391_1334_1000.png_1591917182.jpg'),
(6, 'Correction Pen (Tip-Ex)', 5000, 85, 'upload/kenko_tip-ex-kenko-fine-point-correction-pen_full02_1591917206.jpg'),
(7, 'Spidol', 8500, 79, 'upload/IMG_20160916_105114_01_scaled_1591917520.jpg'),
(8, 'Lem Glukol', 5000, 83, 'upload/DSC_0386_1591917556.jpg'),
(9, 'Stapler', 10000, 77, 'upload/2cb1a8cb256700ebe4bd88a1ac469a91_1591917626.jpg'),
(10, 'Isi Stapler', 5000, 65, 'upload/765472_b60c7556-a2e8-46a0-9551-ff96c89ad492_1591917665.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `roleid` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleid`, `nama`) VALUES
(1, 'Admin'),
(2, 'Kasir');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `transaksi_total` double NOT NULL,
  `transaksi_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `userid`, `transaksi_total`, `transaksi_date`) VALUES
(1, 2, 500000, '2020-06-12 08:08:32'),
(2, 2, 0, '2020-06-12 08:10:15'),
(3, 2, 500000, '2020-06-12 08:11:28'),
(4, 2, 105000, '2020-06-12 08:17:57');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `transaksi_detail_id` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `transaksi_jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`transaksi_detail_id`, `transaksi_id`, `productid`, `transaksi_jumlah`) VALUES
(1, 1, 2, 0),
(2, 3, 2, 0),
(3, 4, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `roleid` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `nama`, `username`, `password`, `roleid`) VALUES
(1, 'Dandy Satrio', 'admin', 'admin', 1),
(2, 'Fitria Rahmawati', 'kasir1', 'kasir1', 2),
(3, 'Jovi Nisita', 'kasir2', 'kasir2', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`historyid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleid`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`transaksi_detail_id`),
  ADD KEY `salesid` (`transaksi_id`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `roleid` (`roleid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `historyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `roleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `transaksi_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`);

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`),
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD CONSTRAINT `transaksi_detail_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`),
  ADD CONSTRAINT `transaksi_detail_ibfk_2` FOREIGN KEY (`transaksi_id`) REFERENCES `transaksi` (`transaksi_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`roleid`) REFERENCES `role` (`roleid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
