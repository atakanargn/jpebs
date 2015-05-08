-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 08 May 2015, 18:41:39
-- Sunucu sürümü: 5.6.24
-- PHP Sürümü: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Veritabanı: `jblog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `jb_categories`
--

CREATE TABLE IF NOT EXISTS `jb_categories` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `jb_categories`
--

INSERT INTO `jb_categories` (`id`, `name`, `link`, `description`) VALUES
(1, 'General', 'general', 'Tüm yazıların bulunduğu kategori.');

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

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `jb_post`
--

CREATE TABLE IF NOT EXISTS `jb_post` (
  `id` int(255) NOT NULL,
  `b_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `tags` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin5;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `jb_settings`
--

CREATE TABLE IF NOT EXISTS `jb_settings` (
  `id` int(255) NOT NULL,
  `title` varchar(255) CHARACTER SET latin5 NOT NULL,
  `description` text CHARACTER SET latin5 NOT NULL,
  `keywords` text CHARACTER SET latin5 NOT NULL,
  `language` varchar(255) CHARACTER SET latin5 NOT NULL,
  `charset` varchar(255) CHARACTER SET latin5 NOT NULL,
  `webmaster` varchar(255) CHARACTER SET latin5 NOT NULL,
  `theme` varchar(255) CHARACTER SET latin5 NOT NULL,
  `contact-mail` varchar(255) CHARACTER SET latin5 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `jb_settings`
--

INSERT INTO `jb_settings` (`id`, `title`, `description`, `keywords`, `language`, `charset`, `webmaster`, `theme`, `contact-mail`) VALUES
(1, 'JPeBS', '', '', '', 'UTF-8', '', 'default', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `jb_users`
--

CREATE TABLE IF NOT EXISTS `jb_users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `authority` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `jb_users`
--

INSERT INTO `jb_users` (`id`, `username`, `password`, `email`, `authority`) VALUES
(1, 'Jalk', 'jalk123', 'argin.atakan@gmail.com', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `jb_categories`
--
ALTER TABLE `jb_categories`
  ADD KEY `id` (`id`);

--
-- Tablo için indeksler `jb_pages`
--
ALTER TABLE `jb_pages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `jb_post`
--
ALTER TABLE `jb_post`
  ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`), ADD KEY `id_2` (`id`);

--
-- Tablo için indeksler `jb_settings`
--
ALTER TABLE `jb_settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `jb_users`
--
ALTER TABLE `jb_users`
  ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `jb_categories`
--
ALTER TABLE `jb_categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `jb_pages`
--
ALTER TABLE `jb_pages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `jb_post`
--
ALTER TABLE `jb_post`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `jb_settings`
--
ALTER TABLE `jb_settings`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `jb_users`
--
ALTER TABLE `jb_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;