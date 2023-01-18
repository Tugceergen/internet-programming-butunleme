-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Oca 2023, 15:46:28
-- Sunucu sürümü: 8.0.28
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `basket`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `kullanici` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sifre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `kullanici`, `sifre`) VALUES
(1, 'tugce', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int NOT NULL,
  `adsoyad` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `eposta` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `konu` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mesaj` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `adsoyad`, `eposta`, `konu`, `mesaj`) VALUES
(1, 'asim', 'asimbeyaztas57@gmail.com', 'yorulmak', 'cok ama cok'),
(2, 'Ertan', 'ertan@gmail.com', 'kararsızım', 'evet efendim'),
(5, 'Tuğçe', 'tugce@gmail.com', 'evet hallederim dedim', 'doğru paşam');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_oyuncu`
--

CREATE TABLE `tbl_oyuncu` (
  `id` int NOT NULL,
  `isim_soyisim` varchar(120) NOT NULL,
  `dogum_tarihi` varchar(50) NOT NULL,
  `aciklama` text NOT NULL,
  `takim_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Tablo döküm verisi `tbl_oyuncu`
--

INSERT INTO `tbl_oyuncu` (`id`, `isim_soyisim`, `dogum_tarihi`, `aciklama`, `takim_id`) VALUES
(1, 'Ertan Burak Felek', '2022-12-10', 'bu ne anasssının gözü oyuncu biliyon mu sen', 1),
(2, 'Tuğçe Ergen', '2022-12-01', 'çok profesyonel bir oyuncu olarak tanınmaktadır', 2),
(3, 'meltem', '2022-11-15', 'hayatı boyunca güzel başarılar elde etmiş olup erayı kandırmayı başarmıştır :)', 2),
(4, 'Asim Beyaztaş', '2000-03-04', 'çok yakışıklı olup cazibesiyle tüm kızları baştan çıkaracak tipten', 1),
(5, 'Eray Yalman', '2023-05-18', 'Hayatı boyunca hiçbir yol katetmemiş sadece meltem , meltem diye ortalıkta gezinmiş bir serseri', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_takim`
--

CREATE TABLE `tbl_takim` (
  `id` int NOT NULL,
  `isim` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Tablo döküm verisi `tbl_takim`
--

INSERT INTO `tbl_takim` (`id`, `isim`) VALUES
(1, 'erkek voleybol takımı'),
(2, 'kadın voleybol takımı');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tbl_oyuncu`
--
ALTER TABLE `tbl_oyuncu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tbl_takim`
--
ALTER TABLE `tbl_takim`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_oyuncu`
--
ALTER TABLE `tbl_oyuncu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_takim`
--
ALTER TABLE `tbl_takim`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
