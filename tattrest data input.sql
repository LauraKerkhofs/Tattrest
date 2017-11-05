-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 17 jul 2017 om 18:04
-- Serverversie: 10.1.16-MariaDB
-- PHP-versie: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tattrest`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tattoos`
--

CREATE TABLE `tattoos` (
  `tattoo_id` int(11) NOT NULL,
  `titel` text,
  `feeling_id` int(11) DEFAULT NULL,
  `vorm_id` int(11) DEFAULT NULL,
  `plaats_id` int(11) DEFAULT NULL,
  `afbeelding` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `tattoos`
--

INSERT INTO `tattoos` (`tattoo_id`, `titel`, `feeling_id`, `vorm_id`, `plaats_id`, `afbeelding`) VALUES
(5, 'Crows', 1, 1, 1, 'Crows.jpg'),
(6, 'Flower Spine', 1, 1, 1, 'Flower-Spine.jpg'),
(7, 'Calling Batman', 2, 2, 1, 'Calling-Batman.jpg'),
(8, 'Flower Symbol', 1, 1, 2, 'Flower-Symbol.jpg'),
(9, 'Armband Bird', 1, 3, 2, 'Armband-Bird.jpg'),
(10, 'Paper Plane', 2, 1, 2, 'Paper-Plane.jpg'),
(11, 'Woods Wolf Sleeve', 3, 3, 2, 'Woods-Wolf-Sleeve.jpg'),
(12, 'Tangled Everything', 2, 4, 3, 'Tangled-Everything.jpg'),
(13, 'Black Rose', 3, 3, 3, 'Black-Rose.jpg'),
(14, 'Ode to Hamburg', 2, 4, 3, 'Ode-to-Hamburg.jpg'),
(15, 'Twig', 1, 3, 4, 'Twig.jpg'),
(16, 'Lifestory', 3, 4, 4, 'Lifestory.jpg'),
(17, 'Lion With Knife', 3, 4, 4, 'Lion-With-Knife.jpg'),
(18, 'Heart', 1, 1, 5, 'Heart.jpg'),
(19, 'Whale', 2, 1, 5, 'Whale.jpg'),
(20, 'Sunflower', 2, 3, 5, 'Sunflower.jpg'),
(21, 'Flower Ornament', 3, 3, 1, 'Flower-Ornament.jpg'),
(22, 'Faceless Clock Man', 3, 4, 1, 'Faceless-Clock-Man.jpg'),
(23, 'Skull Wolf Sleeve', 3, 2, 2, 'Skull-Wolf-Sleeve.jpg'),
(24, 'Nature & Geometry Sleeve', 2, 2, 2, 'Nature-&-Geometry-Sleeve.jpg'),
(25, 'Flower Twigs', 1, 3, 3, 'Flower-Twigs.jpg'),
(26, 'Ocean', 2, 3, 3, 'Ocean.jpg'),
(27, 'Queen Bee', 2, 3, 4, 'Queen-Bee.jpg'),
(28, 'Snake Eagle & Girls', 4, 4, 4, 'Snake-Eagle-&-Girls.jpg'),
(29, 'Robot Inside', 3, 4, 5, 'Robot-Inside.jpg'),
(30, 'Indian Ornamentation', 2, 2, 5, 'Indian-Ornamentation.jpg'),
(31, 'Flower Quote Spine ', 2, 3, 1, 'Flower-Quote-Spine-.jpg'),
(32, 'Eye', 4, 1, 3, 'Eye.jpg'),
(33, 'Dead is near', 3, 4, 4, 'Dead-is-near.jpg'),
(34, 'Scape', 2, 3, 5, 'Scape.jpg');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `tattoos`
--
ALTER TABLE `tattoos`
  ADD PRIMARY KEY (`tattoo_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tattoos`
--
ALTER TABLE `tattoos`
  MODIFY `tattoo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
