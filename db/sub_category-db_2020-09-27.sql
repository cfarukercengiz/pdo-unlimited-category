-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 27, 2020 at 04:32 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sub_category`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `parent_id`) VALUES
(1, 'Teknoloji', 0),
(2, 'Ev Elektroniği', 0),
(3, 'Giyim', 0),
(4, 'Mobilya', 0),
(5, 'Pet', 0),
(6, 'Bilgisayar', 1),
(7, 'Telefon', 1),
(8, 'Erkek', 3),
(9, 'Kadın', 3),
(10, 'Mutfak', 4),
(11, 'Oturma Grubu', 4),
(12, 'Kedi', 5),
(13, 'Köpek', 5),
(14, 'İç Giyim', 8),
(15, 'Aksesuar', 9),
(16, 'Masaüstü', 6),
(17, 'Dizüstü', 6),
(18, 'Apple', 7),
(19, 'Samsung', 7),
(20, 'Iphone', 18),
(21, '6S', 20),
(22, 'Asus', 17),
(23, 'Acer', 17),
(24, '6S+', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
