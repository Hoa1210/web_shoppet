-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 21, 2023 at 09:16 AM
-- Server version: 8.0.30
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppet_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `anh_sp`
--

CREATE TABLE `anh_sp` (
  `id` int NOT NULL,
  `id_sp` varchar(11) DEFAULT NULL,
  `hinh_anh` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `anh_sp`
--

INSERT INTO `anh_sp` (`id`, `id_sp`, `hinh_anh`) VALUES
(12, '0', '356297414_620688303374671_9082715784514874991_n.jpg'),
(13, '0', '356299098_842928936879505_9084971767962685768_n.jpg'),
(14, 'Test5', '356299098_842928936879505_9084971767962685768_n.jpg'),
(15, 'Test5', '356299098_842928936879505_9084971767962685768_n.jpg'),
(16, 'Test5', '356299098_842928936879505_9084971767962685768_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ct_don_hang`
--

CREATE TABLE `ct_don_hang` (
  `ma_dh` int NOT NULL,
  `ma_sp` varchar(11) NOT NULL,
  `so_luong` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ct_don_hang`
--

INSERT INTO `ct_don_hang` (`ma_dh`, `ma_sp`, `so_luong`) VALUES
(28, 'SP005', 2),
(29, 'SP011', 1),
(30, 'SP009', 1),
(31, 'SP005', 2),
(32, 'SP005', 1),
(32, 'SP009', 1);

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `ma_dh` int NOT NULL,
  `ma_kh` int NOT NULL,
  `tong_tien` int NOT NULL,
  `phuong_thuc_thanh_toan` varchar(255) NOT NULL,
  `ngay_lap_dh` date NOT NULL,
  `trang_thai` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`ma_dh`, `ma_kh`, `tong_tien`, `phuong_thuc_thanh_toan`, `ngay_lap_dh`, `trang_thai`) VALUES
(28, 8, 120000, '1', '2023-08-07', 3),
(29, 8, 125000, '1', '2023-08-07', 3),
(30, 8, 100000, '1', '2023-08-07', 0),
(31, 9, 120000, '1', '2023-10-07', 0),
(32, 11, 220000, '1', '2023-12-21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` int NOT NULL,
  `ten_khach_hang` varchar(50) DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `gioi_tinh` tinyint DEFAULT NULL,
  `dia_chi` varchar(100) DEFAULT NULL,
  `so_dien_thoai` varchar(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `ten_khach_hang`, `ngay_sinh`, `gioi_tinh`, `dia_chi`, `so_dien_thoai`, `email`) VALUES
(10, NULL, NULL, NULL, NULL, NULL, 'a@gmail.com'),
(11, NULL, NULL, NULL, NULL, NULL, '123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `loai_sp`
--

CREATE TABLE `loai_sp` (
  `ma_loai` varchar(11) NOT NULL,
  `ten_loai_sp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `loai_sp`
--

INSERT INTO `loai_sp` (`ma_loai`, `ten_loai_sp`) VALUES
('1', 'Dog toys'),
('2', 'Dog foods'),
('LABC', 'Vip'),
('LABC123', 'Dog toys abc');

-- --------------------------------------------------------

--
-- Table structure for table `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `id` int NOT NULL,
  `ten_dang_nhap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `trang_thai` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`id`, `ten_dang_nhap`, `email`, `mat_khau`, `trang_thai`) VALUES
(5, 'admin', 'hoamon146@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(10, 'a', 'a@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 0),
(11, 'zxc', '123@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 0);

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `ma_sp` varchar(11) NOT NULL,
  `ma_loai_sp` varchar(11) NOT NULL,
  `ten_sp` varchar(50) NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `so_luong` int DEFAULT NULL,
  `gia_ban` int DEFAULT NULL,
  `thong_tin_them` varchar(500) NOT NULL,
  `trang_thai_sp` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`ma_sp`, `ma_loai_sp`, `ten_sp`, `hinh_anh`, `so_luong`, `gia_ban`, `thong_tin_them`, `trang_thai_sp`) VALUES
('SP004', '1', 'Cat toilet bowl', 'products3.jpg', 0, 49000, ' Take your best friend for a walk without having to worry about carrying the water bottle, the bowl and the poop bags and let\'s not forget their favorite snacks! We heard your issues and we came to solve them.', 1),
('SP005', '1', 'Bowl with rubber toy', 'products4.jpg', 1, 60000, 'Comfortably take your furry friend for strolls around that big beautiful park that they love so much with the peace of mind knowing everything they need is in the palm of your hands!', 1),
('SP006', '1', 'Dog toys', 'products6.jpg', 0, 15000, ' Poop Bag is here! Comfortably take your furry friend for strolls around that big beautiful park that they love so much with the peace of mind knowing everything they need is in the palm of your hands!', 1),
('SP007', '1', 'Plastic muzzle', 'products7.jpg', 87, 29000, ' ', 1),
('SP008', '2', 'Premium beef rice', 'products13.jpg', 0, 134000, ' Take your best friend for a walk without having to worry about carrying the water bottle, the bowl and the poop bags and let\'s not forget their favorite snacks! We heard your issues and we came to solve them. The All-In-One Smart Leash with built-in Water Bottle, Food Bowl, and ', 1),
('SP009', '2', 'Premium pork rice', 'products14.jpg', 46, 100000, 'Poop Bag is here! Comfortably take your furry friend for strolls around that big beautiful park that they love so much with the peace of mind knowing everything they need is in the palm of your hands!', 1),
('SP010', '1', 'Pink ceramic cat bowl', 'products10.jpg', 49, 49000, ' Take your best friend for a walk without having to worry about carrying the water bottle, the bowl and the poop bags and let\'s not forget their favorite snacks! We heard your issues and we came to solve them. The All-In-One Smart Leash with built-in Water Bottle', 1),
('SP011', '1', 'Red dog bed', 'products11.jpg', 28, 125000, ' Take your best friend for a walk without having to worry about carrying the water bottle, the bowl and the poop bags and let\'s not forget their favorite snacks! We heard your issues and we came to solve them. ', 1),
('SP012', '1', 'Pet chair', 'products9.jpg', 54, 150000, ' Take your best friend for a walk without having to worry about carrying the water bottle, the bowl and the poop bags and let\'s not forget their favorite snacks! We heard your issues and we came to solve them.', 1),
('SP013', '2', 'Mianlien', 'products15.jpg', 4, 90900, ' abc', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anh_sp`
--
ALTER TABLE `anh_sp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ct_don_hang`
--
ALTER TABLE `ct_don_hang`
  ADD PRIMARY KEY (`ma_dh`,`ma_sp`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`ma_dh`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Indexes for table `loai_sp`
--
ALTER TABLE `loai_sp`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Indexes for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma_sp`),
  ADD KEY `ma_loai_sp` (`ma_loai_sp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anh_sp`
--
ALTER TABLE `anh_sp`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `ma_dh` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_kh` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ct_don_hang`
--
ALTER TABLE `ct_don_hang`
  ADD CONSTRAINT `ct_don_hang_ibfk_1` FOREIGN KEY (`ma_dh`) REFERENCES `don_hang` (`ma_dh`) ON DELETE CASCADE;

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`ma_loai_sp`) REFERENCES `loai_sp` (`ma_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
