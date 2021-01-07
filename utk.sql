-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 03:58 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utk`
--

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id_footer` int(11) NOT NULL,
  `pershkrimi` varchar(200) NOT NULL,
  `ikonat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id_footer`, `pershkrimi`, `ikonat`) VALUES
(5, ' Â© 2015 Goaway. All rights reserved | Design by <a href=\"http://w3layouts.com/\">W3layouts', ''),
(6, 'Turizmi nÃ« KosovÃ« ', '<a href\"instagram.com\"><i class=\"fab fa-instagram\"></i></a>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`) VALUES
(1, 'gjoni', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id_footer`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id_footer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectKontakt`(IN `p_ID` INT(11), OUT `Emri` VARCHAR(50), OUT `Email` VARCHAR(50), OUT `Tel` VARCHAR(25), OUT `Mesazhi` VARCHAR(500))
SELECT *
FROM kontaktet
WHERE ID_Kontakti=p_ID$$
DELIMITER ;


DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `shtoKontakt`(IN `p_emri` VARCHAR(50), IN `p_email` VARCHAR(50), IN `p_tel` VARCHAR(25), IN `p_mesazhi` VARCHAR(500))
    MODIFIES SQL DATA
INSERT INTO kontaktet(
  Emri,
    Email,
    Tel,
    Mesazhi
)
VALUES(
  p_emri,
    p_email,
    p_tel,
    p_mesazhi
)$$
DELIMITER ;


DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sterm`(IN p_term VARCHAR(200))
SELECT *
FROM
    kontaktet
WHERE
    Emri LIKE CONCAT('%', p_term , '%') OR Email LIKE CONCAT('%', p_term , '%')$$
DELIMITER ;


DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `uKontakt`(p_ID int(11), p_emri varchar(50), p_email varchar(50), p_tel varchar(25), p_mesazhi varchar(500))
UPDATE kontaktet
SET 
  Emri=p_emri,
    Email=p_email,
    Tel=p_tel,
    Mesazhi=p_mesazhi
WHERE
  p_ID=ID_Kontakti$$
DELIMITER ;


CREATE TABLE kontaktet(
  ID_Kontakti int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Emri VARCHAR(50) NOT NULL,
  Email VARCHAR(50) NOT NULL,
  Tel VARCHAR(25) NOT NULL,
  Mesazhi VARCHAR(500) NOT NULL

);

INSERT INTO kontaktet(Emri, Email, Tel, Mesazhi)
VALUES('Uraniki Sejdiu','uranik4@gmail.com','044-333-555','dasdad'),
    ('t','t@t.com','125-369-963','t');