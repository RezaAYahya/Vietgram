-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2020 at 05:41 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `instagram`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `password`, `email`) VALUES
('rezaayahya', '123456', 'rezaayahya@student.telkomuniversity.ac.id'),
('yuhuuu_', '54321', 'hehe@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `username` varchar(50) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `jml_like` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`username`, `url`, `caption`, `jml_like`) VALUES
('rezaayahya', 'https://cdna.artstation.com/p/assets/images/images/015/497/302/large/armando-savoia-3-10-b1.jpg?1548750766', 'art', 200),
('rezaayahya', 'https://cdna.artstation.com/p/assets/images/images/012/731/020/large/paul-chadeisson-testspeed-0228.jpg?1536226845', 'avenger', 300),
('yuhuuu_', 'https://cdnb.artstation.com/p/assets/images/images/002/877/473/large/richard-wright-haven.jpg?1466747087', 'city', 100),
('rezaayahya', 'https://cdnb.artstation.com/p/assets/images/images/015/886/741/large/lorenzo-lanfranconi-ex-10.jpg?1550051090', 'itali', 125);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `name` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `website` varchar(100) NOT NULL,
  `bio` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`name`, `username`, `website`, `bio`, `email`, `phone_number`, `gender`) VALUES
('Reza Ahmad Yahya', 'rezaayahya', 'https://github.com/RezaAYahya', 'halo dunia', 'rezaayahya@student.telkomuniversity.ac.id', '087848545156', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD KEY `FK_un` (`username`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD KEY `FK_username` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `FK_un` FOREIGN KEY (`username`) REFERENCES `akun` (`username`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `FK_username` FOREIGN KEY (`username`) REFERENCES `akun` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
