-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2018 at 02:02 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ab`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `un` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` longtext NOT NULL,
  `rent_price` decimal(10,0) NOT NULL,
  `date_a` date NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`un`, `name`, `email`, `address`, `rent_price`, `date_a`, `phone_no`, `image`) VALUES
('gfg', 'rider', 'ghgh@gmail.com', 'dh', '15666', '2018-12-20', '2045050', ''),
('gg', 'dragons ', 'mn@gmail.com', 'dk', '25000', '2018-12-22', '0124257444', ''),
('hgjg', 'ghfh', 'ghgh@gmail.com', 'csdds', '15000', '2018-12-14', '04124010', 0x696d672f3434342e6a7067),
('mf555', 'maruf', 'md.marufmf555@yahoo.com', 'dhaka', '15000', '2018-12-28', '01778589889', '');

-- --------------------------------------------------------

--
-- Table structure for table `regi`
--

CREATE TABLE `regi` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `un` varchar(10) CHARACTER SET latin1 NOT NULL,
  `address` longtext NOT NULL,
  `phone_no` varchar(14) NOT NULL,
  `pw` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `regi`
--

INSERT INTO `regi` (`id`, `name`, `email`, `un`, `address`, `phone_no`, `pw`) VALUES
(9, 'maruf', 'md.marufmf555@yahoo.com', 'mnd', 'Dhaha', '123456', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'maruf', 'md.marufmf555@yahoo.com', 'mnd', 'Dhaha', '123456', 'e10adc3949ba59abbe56e057f20f883e'),
(11, 'maruf', 'md.marufmf555@yahoo.com', 'mnd', 'Dhaha', '123456', 'e10adc3949ba59abbe56e057f20f883e'),
(12, 'Raihun', 'aaa@ggg.com', 'ra', 'adasdasd', '123456', 'e10adc3949ba59abbe56e057f20f883e'),
(13, 'Maruf', 'md.marufmf555@yahoo.com', 'mf555', 'dhaka', '01775898669', '81dc9bdb52d04dc20036dbd8313ed055'),
(14, 'maruf', 'md.marufmf555@yahoo.com', 'mf555', 'dk', '12345678963', '81dc9bdb52d04dc20036dbd8313ed055'),
(15, 'Maruful', 'md.maruf555@gmail.com', 'nj555', 'Dhaka', '12345678963', '202cb962ac59075b964b07152d234b70'),
(16, 'gf', 'ghgh', 'ghfgh', 'ghgh', 'ghh', '19b19ffc30caef1c9376cd2982992a59'),
(17, 'jkjk', 'mn@gmail.com', 'kjk', 'bvb', 'bv', '05dee3b8f96e1d70c8732a5de326d666'),
(18, 'pp[p[', 'mf@gmail.com', '[p[p', 'sd', 'sd', 'bd523196c81ea7b7ad1ed1ea100d597a'),
(19, 'maruf', 'md.marufmf555@yahoo.com', 'nj555', 'fd', '12345678963', 'c20ad4d76fe97759aa27a0c99bff6710'),
(20, 'p[[', 'md.marufmf555@yahoo.com', 'p[]p', 'p[p[p[', '123456', 'e7854459ae713082cb6eb1a99507ec23'),
(21, 'hjg', 'md.marufmf555@yahoo.com', 'mn', 'jh', 'jk', 'dc468c70fb574ebd07287b38d0d0676d'),
(22, 'maruf', 'md.marufmf555@yahoo.com', 'ghg', 'ghg', 'ghgh', '2510c39011c5be704182423e3a695e91'),
(26, 'maruf', 'ghgh@gmail.com', 'mf55', 'dk', '01775896996', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`un`);

--
-- Indexes for table `regi`
--
ALTER TABLE `regi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regi`
--
ALTER TABLE `regi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
