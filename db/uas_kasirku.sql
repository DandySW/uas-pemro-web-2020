-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2020 at 12:24 PM
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

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `userid`, `productid`, `cartjumlah`) VALUES
(36, 3, 3, 5),
(37, 3, 4, 8),
(38, 3, 2, 4);

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
(11, 1, 'Menambahkan Barang', 10, 65, '2020-06-12 06:21:05'),
(12, 2, 'Melakukan Penjualan', 1, 18, '2020-06-12 15:35:29'),
(13, 2, 'Melakukan Penjualan', 1, 10, '2020-06-12 15:37:01'),
(14, 2, 'Melakukan Penjualan', 2, 20, '2020-06-12 15:37:02'),
(15, 2, 'Melakukan Penjualan', 6, 5, '2020-06-12 15:45:29'),
(16, 2, 'Melakukan Penjualan', 6, 81, '2020-06-12 15:45:50'),
(17, 2, 'Melakukan Penjualan', 3, 5, '2020-06-12 15:51:50');

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
(1, 'Faber Castell Pensil Kayu 2B', 2500, 40, 'upload/5bc5aa2754ae5_1591904322.jpg'),
(2, 'Penggaris Plastik Butterfly 30 cm', 5000, 80, 'upload/2_1591914046.jpg'),
(3, 'Penghapus Steadler B40', 1000, 73, 'upload/bc7900edb01131a0d2da42421a619336_1591916986.jpeg'),
(4, 'Gunting Kertas Kecil', 5000, 70, 'upload/bb449870883920b79a617b357d5ea589_1591917057.jpg'),
(5, 'Ballpoint Warna', 2000, 75, 'upload/26423674_5b351e42-8236-41ea-a859-e1f3ff8cc391_1334_1000.png_1591917182.jpg'),
(6, 'Tipe-Ex Re-type Set', 5000, 85, 'upload/kenko_tip-ex-kenko-fine-point-correction-pen_full02_1591917206.jpg'),
(7, 'Spidol Snowman', 8500, 79, 'upload/IMG_20160916_105114_01_scaled_1591917520.jpg'),
(8, 'Lem Glukol', 5000, 83, 'upload/DSC_0386_1591917556.jpg'),
(9, 'Stapler Max', 10000, 77, 'upload/2cb1a8cb256700ebe4bd88a1ac469a91_1591917626.jpg'),
(10, 'Isi Stapler Max', 5000, 65, 'upload/765472_b60c7556-a2e8-46a0-9551-ff96c89ad492_1591917665.jpg'),
(11, 'Zebra Paint Marker', 27500, 150, 'upload/P101525877-1_1591952652.jpg'),
(12, 'Snowman Ink Refill Permanent MIG-20', 11000, 100, 'upload/P101576657-1_1591952681.jpg'),
(13, 'Kenko Correction Tape', 9000, 90, 'upload/P101005455-1.jpg'),
(14, 'Sarjana Kapur Tulis Putih', 7700, 100, 'upload/P101547879-1_1591952710.jpg'),
(16, 'Snowman Pen V-5', 39900, 100, 'upload/P101576893-1.jpg'),
(17, 'Pentel Correction Pen ZL31-W', 33000, 100, 'upload/P102274385-2.jpg'),
(18, 'Standard Pen Retrack', 29900, 60, 'upload/nfP101571843-2.jpg'),
(19, 'Zebra Pen Sarasa Clip 0.5mm', 18000, 100, 'upload/P101525891-1.jpg'),
(20, 'Stabilo Boss Set 4 - Hanging', 31000, 100, 'upload/P102147979-1.jpg'),
(21, 'Faster Pen C600', 31800, 110, 'upload/P101557588-1.jpg'),
(22, 'Staedtler Eraser Rasoplast\r\n', 3300, 120, 'upload/P101577838-1.jpg'),
(23, 'RE-TYPE Correction Pen', 7700, 160, 'upload/P101546353-1_1591952696.jpg'),
(24, 'Pilot Ballpoint Pen for Switch', 13000, 60, 'upload/P102936539-1'),
(25, 'Osaka Spirit Knock Type Four Color Oil Ballpoint Pen (3 Sets)', 33000, 70, 'upload/2kP102233092-4.jpg'),
(26, 'PaperOne Copy Paper A4 70g 1box(5reams)', 220000, 150, 'upload/9bS000004335-6.jpg'),
(27, 'Bola Dunia Copy Paper A4 70g 1box(5reams)', 220000, 100, 'upload/4vS000005175-2.jpg'),
(28, 'e-Paper Copy Paper A4 70g 1box(5reams)', 209000, 100, 'upload/npS000019853-7.jpg'),
(29, 'Bindex Paper Lever Acrh File 717', 19000, 50, 'upload/P101555935-1.jpg'),
(30, 'Bantex Ordner Economic Lever Arch File', 27500, 60, 'upload/P101514611-5.jpg'),
(31, 'Bantex Ordner PVC Lever Arch File 1465', 39000, 30, 'upload/P102134092-21.jpg'),
(32, 'Bantex Post Pipe Binder 2 Ring Folio', 64000, 50, 'upload/P102097908-1.jpg'),
(33, 'KOKUYO Flat File V (Resin Binding Tool) A4-S', 7700, 40, 'upload/P101509006-2.jpg'),
(34, 'Interx Sheet Protector', 8800, 60, 'upload/bxP103456429-1.jpg'),
(35, 'Bindex Paper Voucher File (Map Kwitansi) 777', 29700, 60, 'upload/P101555973-1.jpg'),
(36, 'King Jim Pipe Binder 2 Side Open', 90000, 60, 'upload/P101545479-1.jpg'),
(37, 'monotaro Flat File Set', 50000, 50, 'upload/P101509006-2.jpg'),
(38, 'Bantex Box File', 36000, 60, 'upload/P101514710-8.jpg'),
(39, 'Bambi Ordner PVC Lever Arch File 1010', 36000, 50, 'upload/99P101548333-13.jpg'),
(40, 'Bambi Business File A4', 5500, 100, 'upload/P101548227-1.jpg'),
(41, 'King Jim Sheet Protector A4', 29000, 60, 'upload/P101002915-1.jpg'),
(42, 'Nice Facial Tissue', 18000, 70, 'upload/P101560366-1.jpg'),
(44, 'Nagata Sapu Nylon', 46000, 60, 'upload/P101574219-1.jpg'),
(45, 'Nagoya Sikat Lantai', 40000, 60, 'upload/P101577562-1.jpg'),
(46, 'CLEAN-MATIC Palm Broom', 60000, 50, 'upload/P101555447-2.jpg'),
(47, 'Lion Star Wiper Glass Cleaner', 27500, 60, 'upload/28P101545080-2.jpg'),
(48, 'CLEAN-MATIC Sapu Lidi', 68000, 60, 'upload/P101555461-2.jpg'),
(49, 'Non Brand Kemoceng Bulu Plastik', 16000, 60, 'upload/P101544113-1.jpg'),
(50, 'CLEAN-MATIC Indo Mop', 68000, 60, 'upload/P101555393-2.jpg'),
(51, 'Trasti Sticky Roller', 27500, 30, 'upload/fkP103083560-2.jpg'),
(52, 'Nagata Brush with Handle (Sikat)', 12000, 60, 'upload/eeP103769518-1.jpg');

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
  `nomor_transaksi` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `transaksi_total` double NOT NULL,
  `transaksi_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `nomor_transaksi`, `userid`, `transaksi_total`, `transaksi_date`) VALUES
(1, 0, 2, 500000, '2020-06-12 08:08:32'),
(2, 0, 2, 0, '2020-06-12 08:10:15'),
(3, 0, 2, 500000, '2020-06-12 08:11:28'),
(4, 0, 2, 105000, '2020-06-12 08:17:57'),
(5, 0, 3, 0, '2020-06-12 14:45:27'),
(6, 459580, 2, 47, '2020-06-12 15:21:08'),
(7, 345717, 2, 14000, '2020-06-12 15:21:45'),
(8, 239828, 2, 45000, '2020-06-12 15:35:29'),
(9, 373837, 2, 125000, '2020-06-12 15:37:01'),
(10, 242865, 2, 25000, '2020-06-12 15:44:17'),
(11, 246275, 2, 25000, '2020-06-12 15:45:29'),
(12, 374901, 2, 405000, '2020-06-12 15:45:50'),
(13, 775134, 2, 5000, '2020-06-12 15:51:49');

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
(3, 4, 2, 0),
(4, 8, 1, 18),
(5, 9, 1, 10),
(6, 9, 2, 20),
(7, 11, 6, 5),
(8, 12, 6, 81),
(9, 13, 3, 5);

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
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `historyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `roleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `transaksi_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
