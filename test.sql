-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 11, 2020 at 01:28 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `ID` int(12) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Price` decimal(12,0) NOT NULL,
  `Quantity` int(12) NOT NULL,
  `Sell_Price` decimal(12,0) NOT NULL,
  `Images` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`ID`, `Description`, `Price`, `Quantity`, `Sell_Price`, `Images`) VALUES
(213, 'Holloween Pattern Mesh Lingerie Set', '30000', 150, '200', 'images/img13.jpg'),
(203, 'Silid Doubl-breasted Notched Neck Blazer', '10400', 13, '800', 'images/img10.jpg'),
(923, 'Corduroy Pocket Cami Romper', '17750', 50, '355', 'images/img9.jpg'),
(823, 'Guys Japanese Letter Colorblock Hoodie', '28000', 70, '400', 'images/img8.jpg'),
(723, 'Guys letter Drapic Drawatring Shorts', '30000', 200, '155', 'images/img7.jpg'),
(623, 'Guys Trpical Tee', '37500', 150, '250', 'images/img6.jpg'),
(523, '2 pcs Guys Bucket Hat', '1500', 100, '150', 'images/img5.jpg'),
(423, 'Guys CkeckerBoard Distressed Jean', '15000', 30, '500', 'images/img4.jpg'),
(323, 'Guys Letter Graphic Pocket Shirt', '13800', 23, '600', 'images/img3.jpg'),
(113, 'Guys Red Pocket Denim Overall', '24375', 25, '975', 'images/img2.jpg'),
(123, 'Guys Lace-up Front Combat boots', '45000', 15, '3000', 'images/img1.jpg'),
(233, 'Cow Print Lapel Neck PJ Set', '6000', 30, '200', 'images/img12.jpg'),
(237, 'Holloween Pattern Sweatsgirt & Shorts Lounge Set', '40000', 200, '200', 'images/img13.jpg'),
(243, 'Guys Plaid Pattern Tape Belt', '10000', 200, '50', 'images/img14.jpg'),
(253, 'Twilly Scarf Decor Pant chain', '2700', 30, '90', 'images/img15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `FNAME` text NOT NULL,
  `LNAME` text NOT NULL,
  `EMAIL` text NOT NULL,
  `PASSWORD` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `FNAME`, `LNAME`, `EMAIL`, `PASSWORD`) VALUES
(30, 'khethokuhle', 'ndlovu', 'khethokuhle@gmail.com', 'koakma'),
(28, 'lethokuhle', 'khumalo', 'lethokuhle@gmail.com', 'ewkrnu'),
(29, 'sibusoso', 'dlomo', 'sibusoso@gmail.com', 'kwnrw'),
(26, 'mduduzi', 'mguni', 'mduduzi@gmail.com', 'ewbrkew'),
(27, 'noluthando', 'mkhize', 'noluthando@gmail.com', 'ewuri'),
(24, 'sifiso', 'khumal', 'sifiso1889@gmail.com', 'werkx'),
(25, 'sphesihle', 'ndlovu', 'sphesihle@gmail.com', 'weuriwner'),
(22, 'tambia', 'mnguni', 'tambia@gmail.com', 'zawewwe'),
(23, 'siza', 'maphisa', 'siza@gmail.com', 'mopwmr'),
(21, 'den', 'thusini', 'den@gmail.com', 'uinaia'),
(20, 'benevolent', 'ndlovu', 'benevolent@gmail.com', 'wqojo'),
(19, 'thando', 'dlomo', 'thando@gmail.com', 'king@qqq'),
(18, 'nokuthula', 'mthembu', 'nokuthula@gmail.com', 'wer_ewru'),
(16, 'ocean', 'mnguni', 'ocean@gmail.com', 'peotu'),
(17, 'thembi', 'khumalo', 'thembi@gmail.com', 'wojwhryw'),
(14, 'king', 'dlovu', 'king@gmail.com', '34eter33'),
(15, 'major', 'mtshali', 'major@gmail.com', 'puerww '),
(13, 'john', 'mlambo', 'johnphumlane@gmail.com', 'rektk'),
(11, 'felicia', 'dlamini', 'felicia@gmail.com', 'aerfx34'),
(12, 'phumlani', 'dlomo', 'phumlani@gmail.com', 'klrek2'),
(10, 'nhlanhla', 'maphisa', 'nhlanhla@gmail.com', 'vchyyyy'),
(9, 'skhalo', 'rambuda', 'skhalo@gmail.com', 'fdgf'),
(8, 'thabang', 'dlomo', 'pthabang@gmail.com', 'fdgdf'),
(7, 'solomon', 'mathipa', 'solomon@gmail.com', 'fdgjnio90'),
(6, 'zinhle', 'ramucha', 'rzinhle2@gmail.com', 'pfk944mkm'),
(5, 'emily', 'ndlovu', 'emily@gmail.com', 'blwooo'),
(4, 'philisiwe', 'maphisa', 'philisiwe@gmail.com', 'rnjker'),
(3, 'zanele', 'khumalp', 'zanele@gmail.com', 'erhjjerht34'),
(2, 'sifiso', 'khumalo', 'sifiso@gmail.com', 'rerere3'),
(1, 'phumlane', 'maphisa', 'phumlane@gmail.com', 'king12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
