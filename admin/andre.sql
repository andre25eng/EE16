-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 22 jan 2019 kl 12:43
-- Serverversion: 10.1.35-MariaDB
-- PHP-version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `andre`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `personer`
--

CREATE TABLE `personer` (
  `id` int(11) NOT NULL,
  `fnamn` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `enamn` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `epost` varchar(50) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `personer`
--

INSERT INTO `personer` (`id`, `fnamn`, `enamn`, `epost`) VALUES
(2, 'Lukas', 'Gredin', 'Lukas@gmail.com'),
(7, 'Bat', 'Ganbat', 'bat@gmail.com'),
(8, 'AndrÃ©', 'Englund', 'andre@gmail.com');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `personer`
--
ALTER TABLE `personer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `personer`
--
ALTER TABLE `personer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
