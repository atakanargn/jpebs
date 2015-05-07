-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Nis 2015, 17:20:13
-- Sunucu sürümü: 5.6.24
-- PHP Sürümü: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `jblog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `jb_pages`
--

CREATE TABLE IF NOT EXISTS `jb_pages` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `b_id` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `jb_pages`
--

INSERT INTO `jb_pages` (`id`, `name`, `link`, `content`, `author`, `b_id`) VALUES
(2, 'Downloads', 'downs', 'This page is a page ^^ !', 'J', 'af23g13h'),
(3, 'Test', 'testpage', '', 'J', 'asg32h3h');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `jb_pages`
--
ALTER TABLE `jb_pages`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `jb_pages`
--
ALTER TABLE `jb_pages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
