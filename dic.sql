-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 02, 2023 at 10:25 AM
-- Server version: 8.0.33
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lugat`
--

-- --------------------------------------------------------

--
-- Table structure for table `dic`
--

CREATE TABLE `dic` (
  `id` bigint NOT NULL,
  `uzbek` varchar(250) NOT NULL,
  `xorazm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dic`
--

INSERT INTO `dic` (`id`, `uzbek`, `xorazm`) VALUES
(10, 'jag\'', 'angak'),
(11, 'erka', 'arka'),
(12, 'etik', 'adik'),
(13, 'o\'rik', 'arik'),
(14, 'qo\'l', 'al'),
(15, 'maqtanchoq', 'asirak'),
(17, '1.kelinoyi: 2.behi', 'biyi'),
(18, 'chuchvara', 'barak'),
(19, 'choyxo\'r', 'bangi'),
(20, 'xonim,go\'zal', 'bika'),
(21, 'bu yon', 'bon'),
(22, 'to\'ng\'illamoq', 'bidirdamoq'),
(23, 'aloqa', 'bordi-galdi'),
(24, 'kuchli', 'botli'),
(25, 'tish', 'dish'),
(26, 'tepa', 'dapa'),
(27, 'lab', 'do\'doq'),
(28, 'tomir', 'domar'),
(29, 'tashqari', 'deshon'),
(30, 'tirik', 'diri'),
(31, 'semiz', 'dobbi'),
(32, '1.ahmoq; 2.tingan', 'dingan'),
(33, 'laganbardor', 'dosmol'),
(34, 'teshik', 'do\'shik'),
(35, 'to\'shak', 'do\'shak'),
(36, 'zal', 'dolon'),
(37, 'tik', 'dik'),
(38, '1.go\'sht; 2.teri; 3.bajar', 'et'),
(39, 'mahalla', 'elot'),
(40, 'suv stakan', 'sorhum'),
(41, 'qo\'ziqorin', 'zomoriq'),
(42, 'ahmoq', 'guduk'),
(43, 'kuch', 'guch'),
(44, 'kelishmoq', 'galishmoq'),
(45, 'kerak', 'garak'),
(46, 'kelin', 'galin'),
(47, 'sabzi', 'gashir'),
(48, 'kel', 'gal'),
(49, 'kuyov', 'guyav'),
(50, 'to\'n', 'guppi'),
(51, 'ket', 'get'),
(52, 'ko\'z', 'go\'z'),
(53, 'ko\'rpa', 'go\'rpa'),
(54, 'ko\'r', 'go\'r'),
(55, 'chimildiq', 'go\'shanga'),
(56, 'suhbat', 'gurung'),
(57, 'qo\'shiqchi ayol', 'halpa'),
(58, 'tarvuz', 'horvuz'),
(59, 'xabar', 'hovor'),
(60, 'qo\'rqoq', 'hurkak'),
(61, 'yosh bolalar', 'hakka-jukka'),
(62, 'qiyma', 'ijjon'),
(63, 'ilmak', 'ilgak'),
(64, 'yopiq', 'ilik'),
(65, 'mana', 'ino'),
(66, 'igna', 'ina'),
(67, 'mana shu', 'ishu'),
(68, 'endi', 'indi'),
(69, 'ichkari', 'ichon '),
(70, 'paypoq', 'jo\'rrop'),
(71, 'do\'st', 'jo\'ro'),
(72, 'lo\'li', 'jo\'gi'),
(73, 'maqtanchoq', 'jo\'nqi'),
(74, 'yaxshi', 'jolli'),
(75, 'mayda jiyda', 'jigildak'),
(76, 'ketmon', 'katman'),
(77, 'ko\'prik', 'ko\'pir'),
(78, 'kichkina', 'kichchi'),
(79, 'tipratikan', 'kirpi'),
(80, 'semiz', 'lo\'ppi'),
(81, 'ochko\'z', 'loqqa'),
(82, 'chiroyli', 'mo\'chchi'),
(83, 'o\'rgimchak', 'mo\'jak'),
(84, 'xasis', 'mita'),
(85, 'danak', 'mijana'),
(86, 'nima', 'novvi'),
(87, 'nima qilay', 'nishatin'),
(88, 'qayerga', 'nera'),
(89, 'qanday', 'nichik'),
(90, 'tirgak', 'ocha'),
(91, 'achchiq', 'ojji'),
(92, 'sekin', 'oston'),
(93, 'arava', 'orva'),
(94, 'qasos', 'ochuv'),
(95, 'mushuk', 'pishik'),
(96, 'duo', 'potya'),
(97, 'gilam', 'polos'),
(98, 'kichik ko\'prik', 'poyapil'),
(99, 'xafa', 'po\'m'),
(100, 'chumoli', 'qorinja'),
(101, 'katta qop', 'qonor'),
(102, 'qovoq', 'qopoq'),
(103, 'tuxum', 'yumurta'),
(104, 'aybga buyurma', 'alashtirma'),
(105, 'to\'siq panjara', 'arganak'),
(106, 'gilos', 'chiya'),
(107, 'shim', 'cholvur'),
(108, 'juda', 'dim'),
(109, 'hazillashmoq', 'ejashmoq'),
(110, 'eshik', 'qopi'),
(111, 'gilam', 'g\'o\'li'),
(112, 'zerikmoq,zerikish', 'ich qismoq'),
(113, '1.qovoq ; 2.sevgan qizi', 'kadi'),
(114, 'karavot', 'kat'),
(115, 'baxtiqaro', 'monloyi qoro'),
(116, 'ho\'kizz bolasi', 'o\'jak'),
(117, 'dala', 'otiz'),
(118, 'ozgina', 'pitta'),
(119, 'yostiq', 'taka'),
(120, 'bazm,ziyofat', 'tshkil '),
(121, 'tom', 'uchak'),
(122, 'narsa', 'vaj'),
(123, 'narvon', 'zangi'),
(124, 'ariq', 'zekash');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dic`
--
ALTER TABLE `dic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dic`
--
ALTER TABLE `dic`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
