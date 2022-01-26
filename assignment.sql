-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 07:25 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empno` int(3) NOT NULL,
  `eFname` varchar(40) NOT NULL,
  `eLname` varchar(40) NOT NULL,
  `eEmail` varchar(30) NOT NULL,
  `post` varchar(40) NOT NULL,
  `salary` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empno`, `eFname`, `eLname`, `eEmail`, `post`, `salary`) VALUES
(1, 'Steven', 'Job', 'sjob@gmail.com', 'Manager', 150000),
(2, 'John', 'Stewart', 'jstewart@hotmail.com', 'President', 200000),
(3, 'Kelvin', 'Yondani', 'kyondani@yahoo.com', 'Manager', 210000),
(4, 'Tom', 'Jerry', 'tomjerry@hotmail.com', 'CEO', 200000),
(5, 'Rachel', 'Kyonzo', 'rkyonzo@yahoo.com', 'Accounts', 100000);

--
-- Indexes for dumped tables of simple php system
--

--
-- Indexes for table `employee` of simple php system
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
