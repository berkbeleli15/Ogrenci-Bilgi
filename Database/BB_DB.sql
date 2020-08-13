-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 04:31 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trynew`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Adminid` varchar(35) NOT NULL,
  `Adminpass` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Adminid`, `Adminpass`) VALUES
('admin', 'admin'),
('berk', 'berk');

-- --------------------------------------------------------


--
-- Table structure for table `studenttable`
--

CREATE TABLE `studenttable` (
  `StudentNo` bigint(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `SurName` varchar(30) NOT NULL,
  `Age` int(10) NOT NULL,
  `Date` date NOT NULL,
  `Courses` varchar(30)  	
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studenttable`
--

INSERT INTO `studenttable` (`Studentno`, `Name`, `SurName`, `Age`, `Date`,`Courses`) VALUES
(157190150, 'Atahan', 'Adanır', 23, '2020-03-02',' Türkçe- Matematik- Geometri-'),
(157190151, 'Nihal', 'Kumar',  22, '2020-04-02',' Matematik- Geometri- Tarih'),
(157190152, 'Cihan', 'Akarpınar',  21, '2020-05-02',' Geometri- Tarih'),
(157190153, 'Emine', 'Akca',  23, '2020-06-02',' Türkçe- Geometri'),
(157190154, 'Emre', 'Akfırat',  20, '2020-07-02',' Matematik- Geometri'),
(157190155, 'Sarper', 'Akış',  19, '2020-08-02',' Matematik- Tarih'),
(157190156, 'Ecem', 'Akova',  25, '2020-09-02',' Türkçe- Geometri'),
(157190157, 'Ayşen', 'Aksoy',  23, '2020-11-02','');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Adminid`);



--
-- Indexes for table `studenttable`
--
ALTER TABLE `studenttable`
  ADD PRIMARY KEY (`StudentNo`);



-- AUTO_INCREMENT for table `studenttable`
--
ALTER TABLE `studenttable`
  MODIFY `StudentNo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146891659;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
