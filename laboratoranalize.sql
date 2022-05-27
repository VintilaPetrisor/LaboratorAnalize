-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 04:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laboratoranalize`
--

-- --------------------------------------------------------

--
-- Table structure for table `autentificare`
--

CREATE TABLE `autentificare` (
  `id` int(11) NOT NULL,
  `utilizator` varchar(255) NOT NULL,
  `parola` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `autentificare`
--

INSERT INTO `autentificare` (`id`, `utilizator`, `parola`) VALUES
(1, 'Alin H', '12345'),
(2, 'AlinB', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `echipamente`
--

CREATE TABLE `echipamente` (
  `id` int(3) NOT NULL,
  `echipament_nume` varchar(255) NOT NULL,
  `numar_sertare` tinyint(3) NOT NULL,
  `echipament_locatie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `echipamente`
--

INSERT INTO `echipamente` (`id`, `echipament_nume`, `numar_sertare`, `echipament_locatie`) VALUES
(2, 'Frigider 2', 5, 'Camera 2'),
(3, 'Echipament 3', 3, 'Camera 2'),
(11, 'Frigider 3', 2, 'Camera 1');

-- --------------------------------------------------------

--
-- Table structure for table `probe`
--

CREATE TABLE `probe` (
  `id` int(11) NOT NULL,
  `proba_sn` int(10) NOT NULL,
  `analiza_nume` varchar(255) NOT NULL,
  `pacient_nume` varchar(255) NOT NULL,
  `doctor_nume` varchar(255) NOT NULL,
  `frigider_nume` varchar(255) NOT NULL,
  `sertar_numar` int(10) NOT NULL,
  `locatie_nume` varchar(255) NOT NULL,
  `analiza_calitate` varchar(255) NOT NULL,
  `rezultat` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `probe`
--

INSERT INTO `probe` (`id`, `proba_sn`, `analiza_nume`, `pacient_nume`, `doctor_nume`, `frigider_nume`, `sertar_numar`, `locatie_nume`, `analiza_calitate`, `rezultat`, `status`) VALUES
(5, 24514, 'Nucleotidaza', 'Darian V', 'Alin Z', '', 0, '', 'OK', 'POZITIV', 'FINALIZAT'),
(6, 40426, 'Hemoleucograma completa', 'Alin H', 'Alin Z', '', 0, '', 'OK', 'NEGATIV', 'FINALIZAT'),
(7, 74883, 'Nucleotidaza', 'Adina B', 'Andrei H', '', 0, '', 'NOK', 'NECONCORDANT', 'RESPINS'),
(8, 66579, 'OH-vitamina D', 'JEY R', 'Andrei H', '', 0, '', 'OK', '', 'ANALIZA PROCESARE'),
(9, 51513, 'Hemoleucograma completa', 'Edy V', 'Andrei H', 'Frigider 3', 2, '', '', '', 'PRIMIT'),
(10, 92342, 'Nucleotidaza', 'Alin E', 'Alin Z', 'Echipament 3', 2, '', '', '', 'PRIMIT'),
(11, 58054, 'Hemoleucograma completa', 'Alex H', 'Andrei H', '', 0, '', '', '', 'PRIMIT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autentificare`
--
ALTER TABLE `autentificare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `echipamente`
--
ALTER TABLE `echipamente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `probe`
--
ALTER TABLE `probe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autentificare`
--
ALTER TABLE `autentificare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `echipamente`
--
ALTER TABLE `echipamente`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `probe`
--
ALTER TABLE `probe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
