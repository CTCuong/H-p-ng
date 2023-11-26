-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2023 at 03:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bds`
--

-- --------------------------------------------------------

--
-- Table structure for table `thembds`
--

CREATE TABLE `thembds` (
  `id` bigint(20) NOT NULL,
  `mahd` varchar(20) NOT NULL,
  `hoten` varchar(20) NOT NULL,
  `namsinh` varchar(20) NOT NULL,
  `ssn` varchar(50) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `gia` longtext NOT NULL,
  `cmnd` varchar(20) NOT NULL,
  `mabds` varchar(20) NOT NULL,
  `tinh` varchar(20) NOT NULL,
  `huyen` varchar(20) NOT NULL,
  `xa` varchar(20) NOT NULL,
  `sonha` varchar(20) NOT NULL,
  `ngay` varchar(20) NOT NULL,
  `sotiencoc` varchar(20) NOT NULL,
  `sotienconlai` varchar(20) NOT NULL,
  `trangthai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thembds`
--

INSERT INTO `thembds` (`id`, `mahd`, `hoten`, `namsinh`, `ssn`, `sdt`, `gia`, `cmnd`, `mabds`, `tinh`, `huyen`, `xa`, `sonha`, `ngay`, `sotiencoc`, `sotienconlai`, `trangthai`) VALUES
(486, '', 'Cao Trần Cương', '', '', '', '', '234567', 'DF123', 'Bình Dương', 'Tân Uyên', 'Vĩnh Tân', '4', '2023-12-10', '100.000', '50.000', 'Chưa thanh toán'),
(487, '', 'Nguyễn Xuân Đạt', '', '', '', '', '345678', 'GH123', 'Bình Dương', 'Tân Uyên', 'Hội Nghĩa', '6', '2023-11-15', '300.000', '200.000', 'Đã thanh toán'),
(493, '', 'Trần Tiến Dũng', '', '', '', '', '456789', 'ER123', 'Bình Phước', 'Hớn Quản', 'Tân Lợi', '7', '2023-11-25', '300.000', '100.000', 'Chưa thanh toán');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thembds`
--
ALTER TABLE `thembds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `thembds`
--
ALTER TABLE `thembds`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=494;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
