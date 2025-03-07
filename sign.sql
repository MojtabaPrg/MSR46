-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2025 at 04:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sign`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `nacity` varchar(50) NOT NULL,
  `IDcity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`nacity`, `IDcity`) VALUES
('تهران', 1),
('مشهد', 2),
('اصفهان', 3),
('شیراز', 4),
('تبریز', 5),
('کرج', 6),
('اهواز', 7),
('قم', 8),
('رشت', 9);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `imageurl` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `id` int(50) NOT NULL,
  `files` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`imageurl`, `title`, `text`, `id`, `files`) VALUES
('images/amd.webp', 'پردازنده AMD', 'ای‌ام‌دی: «محصولات افتضاح اینتل» عامل نایابی پردازنده Ryzen 9 9800X3D هستند!', 1, 'News/AMD.php'),
('images/bomb.webp', 'ضایعات هسته‌ای', 'همه چیز درباره ضایعات هسته‌ای: از منشأ تا مدیریت پایدار', 2, 'News/waste.php'),
('images/ugreen.webp', 'یوگرین از داک Thunderbolt 5', 'یوگرین از داک Thunderbolt 5 جدیدش و چند محصول دیگر رونمایی کرد', 3, 'News/Thunderbolt.php'),
('images/cump.webp', 'مانیتور های گیگابایت', 'گیگابایت در مانیتورهایش از پنل QD-OLED جدید سامسونگ استفاده می‌کند', 4, 'News/Monitor.php'),
('images/whatsapp.webp', 'WhatsApp', 'واتساپ امیدوار است کاربرانش با بات‌های هوش مصنوعی گفت‌وگو کنند', 5, 'News/whatsApp.php'),
('images/bmw.webp', 'همکاری ال‌جی و کوالکام', 'ال‌جی و کوالکام با همکاری یکدیگر خودروها را هوشمندتر می‌کنند', 6, 'News/LGandQualcomm.php');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `ID` int(50) NOT NULL,
  `User Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`ID`, `User Name`, `Email`, `Password`, `admin`) VALUES
(1, 'Mojtaba', 'pcmojtaba19@gmail.com', '1234', 1),
(2, 'Ahmad', 'pcmojtaba19@gmail.com', '12345678', 0),
(3, 'بهروز', 'pcmojtaba19@gmail.com', '123', 0),
(4, 'ali', 'pcmojtaba19@gmail.com', '12', 1),
(5, 'sadra', 'pcmojtaba19@gmail.com', 'sad', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`IDcity`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `IDcity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
