-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 09:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dailywine`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdathang`
--

CREATE TABLE `chitietdathang` (
  `STT` int(11) NOT NULL,
  `soHD` int(11) NOT NULL,
  `maSP` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `giaBan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitietdathang`
--

INSERT INTO `chitietdathang` (`STT`, `soHD`, `maSP`, `soLuong`, `giaBan`) VALUES
(10, 15, 12, 10, 23412340),
(11, 16, 11, 13, 42016),
(12, 16, 12, 10, 23412340),
(13, 17, 11, 1, 3232),
(14, 17, 13, 1, 2500),
(15, 18, 11, 1, 3232),
(16, 19, 12, 2, 4682468),
(17, 20, 11, 1, 3232),
(18, 21, 11, 13, 42016),
(19, 21, 10, 6, 15000),
(20, 22, 11, 2, 6464);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `soHD` int(11) NOT NULL,
  `maKH` int(11) NOT NULL,
  `ngayMua` date NOT NULL,
  `thanhTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`soHD`, `maKH`, `ngayMua`, `thanhTien`) VALUES
(15, 2, '2020-08-09', 23454356),
(16, 2, '2020-08-09', 23454356),
(17, 2, '2020-08-09', 5732),
(18, 2, '2020-08-09', 3232),
(19, 2, '2020-08-09', 4682468),
(20, 4, '2020-08-09', 3232),
(21, 2, '2020-08-10', 57016),
(22, 4, '2020-08-10', 6464);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `maKH` int(11) NOT NULL,
  `tenKH` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diaChi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `soDT` int(11) NOT NULL,
  `eMail` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`maKH`, `tenKH`, `diaChi`, `soDT`, `eMail`, `user`, `pass`, `role`) VALUES
(2, 'Đinh', 'Ha noi', 586476977, 'daidaps14196@fpt.edu.vn', 'user1', '1', 0),
(4, 'Đinh', 'Ho Chi Minh City', 586476977, 'daidaps14196@fpt.edu.vn', 'admin1', '1', 1),
(15, 'Đinh', 'Ho Chi Minh City', 586476977, 'daidaps14196@fpt.edu.vn', 'admin2', '12', 1),
(16, 'Đinh Ân Đại', 'Ho Chi Minh City', 586476977, 'daidaps14196@fpt.edu.vn', 'user12', '1', 0),
(17, 'Đinh Ân Đại', 'Ho Chi Minh City', 586476977, 'daidaps14196@fpt.edu.vn', 'admin123', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `maLoai` int(11) NOT NULL,
  `tenLoai` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`maLoai`, `tenLoai`) VALUES
(14, 'havi'),
(30, 'Savigon');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `maSP` int(11) NOT NULL,
  `tenSP` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `giaCu` int(11) NOT NULL,
  `giaMoi` int(11) NOT NULL,
  `hinhSP` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `maLoai` int(11) NOT NULL,
  `moTa` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`maSP`, `tenSP`, `giaCu`, `giaMoi`, `hinhSP`, `maLoai`, `moTa`) VALUES
(10, 'navigator', 3, 2500, 'popular3.png', 30, 'bia'),
(11, 'navigator', 3, 3232, 'popular1.png', 30, 'bia'),
(12, 'navigator', 3, 2341234, 'popular1.png', 14, 'ruou'),
(13, 'Yosu', 3, 2500, 'popular3.png', 30, 'ruou');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD PRIMARY KEY (`STT`),
  ADD KEY `fk_soHD` (`soHD`),
  ADD KEY `fk_maSP` (`maSP`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`soHD`),
  ADD KEY `fk_maKH` (`maKH`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`maKH`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`maLoai`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`maSP`),
  ADD KEY `fk_maLoai` (`maLoai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietdathang`
--
ALTER TABLE `chitietdathang`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `soHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `maKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `maLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `maSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD CONSTRAINT `fk_maSP` FOREIGN KEY (`maSP`) REFERENCES `sanpham` (`maSP`),
  ADD CONSTRAINT `fk_soHD` FOREIGN KEY (`soHD`) REFERENCES `hoadon` (`soHD`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk_maKH` FOREIGN KEY (`maKH`) REFERENCES `khachhang` (`maKH`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_maLoai` FOREIGN KEY (`maLoai`) REFERENCES `loaisp` (`maLoai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
