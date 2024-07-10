-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Haz 2024, 21:43:10
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `evcil_hayvan`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hayvanlar`
--

CREATE TABLE `hayvanlar` (
  `id` int(11) NOT NULL,
  `ad` text NOT NULL,
  `tür` text NOT NULL,
  `cins` text NOT NULL,
  `yas` text NOT NULL,
  `açiklama` text NOT NULL,
  `resim` text NOT NULL,
  `barinak` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hayvanlar`
--

INSERT INTO `hayvanlar` (`id`, `ad`, `tür`, `cins`, `yas`, `açiklama`, `resim`, `barinak`) VALUES
(1, 'Hikmet', 'köpek', 'Pitbull', '3', 'Barınağımıza 25/06/2024 tarihinde katılan dogi dostumuz yeni sahibini bekliyor', 'https://media.istockphoto.com/id/1370010790/tr/foto%C4%9Fraf/pit-bull-dog-playing-and-having-fun-in-the-park-green-grass-wooden-stakes-around-selective.jpg?s=612x612&w=0&k=20&c=XyJ7QUVu_Da8RoRzc-7wLhomTPboWPVYcz5H6FR9P-U=', 'Nevşehir / Hacıbektaş'),
(2, 'Memati', 'köpek', 'Buldog', '2', 'Barınağımıza 25/06/2024 tarihinde katılan memati dostumuz yeni sahibini bekliyor', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSovxawKhBqZrLiUZF2egJMnNkkX50n3YhNNOLff41Q-iRNFDQk', 'Ankara'),
(4, 'Nemo', 'balık', 'Japon Balığı', '1', '', 'https://encrypted-tbn2.gstatic.com/licensed-image?q=tbn:ANd9GcQ0xpR__vHtvfz9SUPn7xlud3u_c8LspCAnJPf_t3NZOpiIGIF7GDjtMnZQxjQALm72vehcsjnB0AfJaCU', 'Nevşehir / Hacıbektaş'),
(5, 'Flash\r\n', 'balık', 'Çöpçü Balığı', '1', '', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTB3Baav7u7hssAYGZVte0vf-JsM7m5g3KezZ2oV6txmFZxybCk', 'Nevşehir/Hacıbektaş'),
(6, 'Limon', 'kuş', 'Kanarya ', '0', '', 'https://ideacdn.net/shop/ar/09/myassets/blogs/kanarya.jpg?revision=1558391481', 'Nevşehir/Hacıbektaş'),
(8, 'Çıtır ve Bulut', 'kuş', 'Muhabbet Kuşu', '1', '', 'https://iasbh.tmgrup.com.tr/ec6a68/650/344/0/101/724/482?u=https://isbh.tmgrup.com.tr/sbh/2022/03/21/muhabbet-kusu-turleri-en-iyi-ve-en-cok-konusan-muhabbet-kusu-turu-hangisi-k1-1647871386034.jpg', 'Nevşehir/Hacıbektaş'),
(11, 'Elif', 'kedi', 'Scottish Fold', '2', '', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Adult_Scottish_Fold.jpg/800px-Adult_Scottish_Fold.jpg', 'Nevşehir/Hacıbektaş'),
(10, 'Polat', 'kedi', 'Ankara Kedisi', '2', '', 'https://melodimveteriner.com/wp-content/uploads/2023/03/ankara-kedisi-736x470-1.jpg', 'Nevşehir/Hacıbektaş');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanıcılar`
--

CREATE TABLE `kullanıcılar` (
  `id` int(11) NOT NULL,
  `ad` text NOT NULL,
  `soyad` text NOT NULL,
  `sifre` text NOT NULL,
  `rol` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanıcılar`
--

INSERT INTO `kullanıcılar` (`id`, `ad`, `soyad`, `sifre`, `rol`) VALUES
(1, 'Şahin', 'Koyuncu', '1234', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `rol` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `rol`
--

INSERT INTO `rol` (`id`, `rol`) VALUES
(1, 'admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sahiplenen_kayit`
--

CREATE TABLE `sahiplenen_kayit` (
  `id` int(11) NOT NULL,
  `ad` text NOT NULL,
  `soyad` text NOT NULL,
  `adres` text NOT NULL,
  `telefon` text NOT NULL,
  `dogum_tarihi` date NOT NULL,
  `meslek` text NOT NULL,
  `hayvan` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `hayvanlar`
--
ALTER TABLE `hayvanlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanıcılar`
--
ALTER TABLE `kullanıcılar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sahiplenen_kayit`
--
ALTER TABLE `sahiplenen_kayit`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `hayvanlar`
--
ALTER TABLE `hayvanlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Tablo için AUTO_INCREMENT değeri `kullanıcılar`
--
ALTER TABLE `kullanıcılar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `sahiplenen_kayit`
--
ALTER TABLE `sahiplenen_kayit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
