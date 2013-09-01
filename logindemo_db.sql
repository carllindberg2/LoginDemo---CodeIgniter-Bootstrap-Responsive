-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Skapad: 30 aug 2013 kl 21:34
-- Serverversion: 5.6.11-log
-- PHP-version: 5.4.16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `logindemo_db`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `loginattempts_log`
--

CREATE TABLE IF NOT EXISTS `loginattempts_log` (
  `lal_id` int(11) NOT NULL AUTO_INCREMENT,
  `lal_email` varchar(98) CHARACTER SET utf8 NOT NULL,
  `lal_when` datetime NOT NULL,
  `lal_iphost` varchar(15) NOT NULL,
  `lal_outcome` int(2) NOT NULL,
  PRIMARY KEY (`lal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='A log of login attempts' AUTO_INCREMENT=54 ;

--
-- Dumpning av Data i tabell `loginattempts_log`
--

INSERT INTO `loginattempts_log` (`lal_id`, `lal_email`, `lal_when`, `lal_iphost`, `lal_outcome`) VALUES
(45, 'testa1@testa1.se', '2013-08-30 21:25:03', '127.0.0.1', 1),
(46, 'testa1@testa1.se', '2013-08-30 21:25:09', '127.0.0.1', 1),
(47, 'testa1@testa1.se', '2013-08-30 21:25:13', '127.0.0.1', 1),
(48, 'testa1@testa1.se', '2013-08-30 21:25:21', '127.0.0.1', 0),
(49, 'testa1@testa1.se', '2013-08-30 21:25:24', '127.0.0.1', 1),
(50, 'testa1@testa1.se', '2013-08-30 21:25:37', '127.0.0.1', 1),
(51, 'testar2@testar2.se', '2013-08-30 21:28:02', '127.0.0.1', 1),
(52, 'testar2@testar2.se', '2013-08-30 21:28:08', '127.0.0.1', 1),
(53, 'testar2@testar2.se', '2013-08-30 21:28:40', '127.0.0.1', 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(98) NOT NULL,
  `password` varchar(64) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`uid`, `email`, `password`) VALUES
(45, 'testa1@testa1.se', '743108271d87c6b59845ab277df00368'),
(46, 'testar2@testar2.se', 'b4fc609d4daa0cb8837e13a890a735c7');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
