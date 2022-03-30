-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 30 mrt 2022 om 12:37
-- Serverversie: 5.7.31
-- PHP-versie: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dagelijkspapier`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

DROP TABLE IF EXISTS `gebruikers`;
CREATE TABLE IF NOT EXISTS `gebruikers` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `middlename` varchar(40) DEFAULT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL,
  `role` enum('customer','author','admin') NOT NULL DEFAULT 'customer',
  `active` bit(1) DEFAULT b'0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`id`, `fname`, `middlename`, `lastname`, `email`, `password`, `role`, `active`) VALUES
(18, 'bb', 'bb', 'bb', 'bb@bb.bb', '$2y$10$nksdLHLtAW064xYU7sbJB.gHCl6WktmwJWPHLa2EqQtTlGi9gBy.y', 'admin', b'1'),
(19, 'POES', 'MEOW', '13', 'MEOW@puss.com', '$2y$10$OotcU97FHsT5u6ontcACgOHXTZn7thvLhg62hYdSdgltejKdHd0vq', 'customer', b'1'),
(20, 'apollo', 'the', 'author', 'at@author.nl', '$2y$10$9LjLy9xwrqSBHtGuQcbsGe6LCH0PFJo2s8mK3FgVuUaMLYK9oqIsG', 'author', b'1'),
(22, 'ron', 'de', 'beamt', 'ron@gmail.com', '$2y$10$i//4pD019NXlSfl2pyNf4.nd873OcLjUmp6Qi9FM/h3no1nW39Tz6', 'customer', b'1');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `titel` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `redacteur` varchar(100) NOT NULL,
  `img` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `posts`
--

INSERT INTO `posts` (`id`, `titel`, `content`, `redacteur`, `img`) VALUES
(1, 'a', 'a', '', ''),
(2, 'bb', 'bb', 'bb', ''),
(3, 'EYUP IK BEN ENN POEES', 'MEOEOEOWOW', 'bb', 'http://www.theageofmammals.com/secret/stuff/bug3.jpg'),
(4, 'Dat was even maf.', 'Op de afbeelding was duidelijk geen poes te zien, het lijkt erop dat dit eerder een insect zou kunnen zijn. daarnaast hebben poezen meestal een zachte vacht. Het dier op deze afbeelding heeft daarentegen, vrij weinig zachte vacht.', 'bb', 'https://image.shutterstock.com/image-photo/bangkok-thailand-august-11-2014-260nw-212943109.jpg'),
(5, 'MEOWWW', 'MEOWOWOOWOWOWOWOWOWOWOWOWOWOWOMEOWMWE', 'POES', 'data:image/jpeg;base64,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'),
(6, 'WAMPMAPPMAPAMPM', 'Server Configuration Apache Version: 2.4.46  - Documentation Server Software: Apache/2.4.46 (Win64) PHP/7.3.21 - Port defined for Apache: 80 PHP Version: 7.3.21  - Documentation Loaded Extensions : apache2handlerbcmathbz2calendarcom_dotnetCorectypecurldatedomexiffileinfofiltergdgettextgmphashiconvimapintljsonldaplibxmlmbstringmysqlimysqlndopensslpcrePDOpdo_mysqlpdo_sqlitePharreadlineReflectionsessionSimpleXMLsoapsocketsSPLsqlite3standardtokenizerwddxxdebugxmlxmlreaderxmlrpcxmlwriterxslZend OPcache', 'apollo', 'https://www.tno.nl/media/3638/carenlanting.jpg?center=0.35333333333333333,0.60700389105058361&mode=crop&quality=30&width=1520&heightratio=1&slimmage=true&rnd=130610441200000000'),
(7, 'a', 'b', 'apollo', ''),
(8, 'Ontmoeting Poetin en Zelensky mogelijk', 'De overlegronde in Istanboel effent wat een OekraÃ¯ense onderhandelaar betreft het pad voor een ontmoeting van Poetin met zijn OekraÃ¯ense ambtgenoot Volodymyr Zelensky, die daar al langer om vraagt. De Russische onderhandelaar Vladimir Medinsky zei ook dat een ontmoeting mogelijk is.', 'apollo', 'https://media.nu.nl/m/z7hxqetaircr_wd1280.jpg'),
(9, 'Will Smith biedt Chris Rock excuses aan voor klap tijdens Oscar-uitreiking', 'Will Smith heeft maandag zijn excuses aangeboden aan Chris Rock voor de klap die hij hem gaf tijdens de Oscar-uitreiking in Los Angeles afgelopen weekend. Smith schrijft op sociale media dat zijn eigen gedrag \"onaanvaardbaar en onvergeeflijk\" was.', 'apollo', 'https://media.nu.nl/m/6o7xdtgaih43_xwd1280.jpg/will-smith-biedt-chris-rock-excuses-aan-voor-klap-tijdens-oscar-uitreiking.jpg'),
(10, 'Tunnel of brug voor fietsers nieuwe buurt Wisselspoor? Utrecht is er nog niet uit', ' Zoeken Zoekopdracht Dinsdag 29 maart 2022 | Het laatste nieuws het eerst op NU.nl Weer 12 Â°C Verkeer â‚¬ 2,467benzineprijs Beurs 737,19AEX koers TV gids Voetbal 2 livelive wedstrijden Tunnel of brug voor fietsers nieuwe buurt Wisselspoor? Utrecht is er nog niet uit Tunnel of brug voor fietsers nieuwe buurt Wisselspoor? Utrecht is er nog niet uit 29 maart 2022 11:24 Laatste update: 4 uur geleden 0 NUjij-reacties Delen via Whatsapp Delen via Facebook Delen via Twitter Delen via Linkedin Delen via email Fietsen de bewoners van de nieuwe Utrechtse buurt Wisselspoor straks met een brug over het spoor als ze naar de binnenstad of Utrecht CS moeten, of rijden ze door een tunnel? De gemeente onderzoekt meerdere varianten.', 'apollo', 'https://media.nu.nl/m/fqsx16sayvev_xwd1280.jpg/tunnel-of-brug-voor-fietsers-nieuwe-buurt-wisselspoor-utrecht-is-er-nog-niet-uit.jpg'),
(11, 'Kamer wil zonder De Jonge debatteren over zijn rol bij mondkapjesdeal', 'idk politiek or whatever', 'apollo', 'https://media.nu.nl/m/f5fx2y1aqi2j_xwd1280.jpg/kamer-wil-zonder-de-jonge-debatteren-over-zijn-rol-bij-mondkapjesdeal.jpg'),
(12, 'wowowow gaaf', 'conte', 'bb', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
