-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 Eyl 2023, 10:47:59
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `gorev`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tasks`
--

CREATE TABLE `tasks` (
  `gorev_id` int(11) NOT NULL,
  `kullanici_id` varchar(50) NOT NULL,
  `tanim` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `oncelik` varchar(50) NOT NULL,
  `bitis_tarihi` date NOT NULL DEFAULT current_timestamp(),
  `tamamlama` tinyint(1) NOT NULL,
  `olusturulma_zamani` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `tasks`
--

INSERT INTO `tasks` (`gorev_id`, `kullanici_id`, `tanim`, `oncelik`, `bitis_tarihi`, `tamamlama`, `olusturulma_zamani`) VALUES
(1, '1', 'dhedjefhjkdfhsdf', '', '0000-00-00', 0, '0000-00-00'),
(2, '1', 'dhedjefhjkdfhsdf', 'orta', '0000-00-00', 0, '0000-00-00'),
(3, '1', 'lgkflkgslg', 'yuksek', '1970-01-01', 0, '1970-01-01'),
(4, '1', '', '', '1970-01-01', 0, '1970-01-01'),
(5, '1', 'lgkflkgslg', 'yuksek', '1970-01-01', 0, '1970-01-01'),
(6, '1', '', '', '1970-01-01', 0, '1970-01-01'),
(7, '1', 'dcsdsdv', 'dusuk', '2023-09-17', 0, '2023-09-11'),
(8, '1', 'sxczxcxzc', 'dusuk', '2023-09-25', 1, '2023-09-29'),
(9, '1', 'werewr', 'orta', '1970-01-01', 0, '2023-12-09'),
(10, '1', 'werewr', 'orta', '1970-01-01', 0, '2023-12-09');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `kullanici_id` int(11) NOT NULL,
  `kullaniciadi` varchar(50) NOT NULL,
  `parola` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `olusturulma_zamani` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`kullanici_id`, `kullaniciadi`, `parola`, `email`, `olusturulma_zamani`) VALUES
(1, 'sena', '1234', 'fatmasenatorun@hotmail.com', '2023-08-31'),
(42, 'axenix', 'efesena123', 'ne10axe@gmail.com', '2023-09-04'),
(43, 'md06', '145306', 'donermuhammed10@gmail.com', '2023-09-05'),
(44, 'crazyboy32', '123456', 'furkan@baskent.edu.tr', '2023-09-05'),
(45, 'kscerkt', '1234', 'erkutkuscu@hotmail.com', '2023-09-05'),
(46, 'crazyboy06', '1234', 'alp@baskent.edu.tr', '2023-09-07');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`gorev_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tasks`
--
ALTER TABLE `tasks`
  MODIFY `gorev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
