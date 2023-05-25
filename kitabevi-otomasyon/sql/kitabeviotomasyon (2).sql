-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 May 2023, 01:03:54
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
-- Veritabanı: `kitabeviotomasyon`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_ad` varchar(255) DEFAULT NULL,
  `aciklama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_ad`, `aciklama`) VALUES
(1, 'Roman', 'Kurgusal hikayelerin yer aldığı kitaplar'),
(2, 'Klasik', 'Tarihi dönemlere ait eserler'),
(3, 'Bilim-Kurgu', 'Gelecek zaman ve bilim konulu kitaplar'),
(4, 'Macera', 'Heyecanlı ve riskli olayları içeren kitaplar'),
(5, 'Tarih', 'Geçmiş dönemlerde yaşanmış olayları konu alan kitaplar'),
(6, 'Psikoloji', 'İnsan davranışlarına, psikolojik süreçlere ve problemlere odaklanan kitaplar'),
(8, 'Öykü Kitapları', 'Kısa Romanlar'),
(9, ' Şiir Kitapları', 'Şiir dolu kitaplar');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kitap`
--

CREATE TABLE `kitap` (
  `kitap_id` int(11) NOT NULL,
  `kitap_ad` varchar(255) DEFAULT NULL,
  `sayfa_sayisi` int(11) DEFAULT NULL,
  `stok_sayisi` int(11) DEFAULT NULL,
  `fiyat` float DEFAULT NULL,
  `yayin_tarihi` varchar(255) DEFAULT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `yayinevi_id` int(11) DEFAULT NULL,
  `yazar_id` int(11) DEFAULT NULL,
  `kitap_resim` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kitap`
--

INSERT INTO `kitap` (`kitap_id`, `kitap_ad`, `sayfa_sayisi`, `stok_sayisi`, `fiyat`, `yayin_tarihi`, `kategori_id`, `yayinevi_id`, `yazar_id`, `kitap_resim`) VALUES
(1, '1984', 328, 48, 25.5, '1949', 3, 2, 1, 'https://www.dostkitabevi.com/images/thumbs/0091302_1984_550.jpeg'),
(2, 'Suç ve Ceza', 576, 24, 32, '1866', 2, 1, 2, 'https://www.dostkitabevi.com/images/thumbs/0124240_Su%20ve%20Ceza_550.jpeg'),
(3, 'Küçük Kara Balık', 56, 98, 7, '1967', 1, 3, 3, 'https://www.dostkitabevi.com/images/thumbs/0013975_K%20k%20Kara%20Bal%20k_550.jpeg'),
(4, 'Benim Adım Kırmızı', 423, 9, 28.5, '1998', 2, 4, 4, 'https://www.dostkitabevi.com/images/thumbs/0077140_Benim%20Ad%20m%20K%20rm%20z%20_550.jpeg'),
(5, 'Harry Potter ve Felsefe Taşı', 256, 74, 22, '1997', 3, 1, 5, 'https://www.dostkitabevi.com/images/thumbs/0077934_harry-potter-ve-felsefe-tasi-1_550.jpeg'),
(6, 'Yüzyıllık Yalnızlık', 472, 20, 34, '1967', 1, 6, 6, 'https://www.dostkitabevi.com/images/thumbs/0015403_Y%20zy%20ll%20k%20Yaln%20zl%20k_550.jpeg'),
(7, 'Dünyanın Merkezine Yolculuk', 148, 79, 95, '2001', 3, 3, 7, 'https://i.dr.com.tr/cache/500x400-0/originals/0000000383004-1.jpg'),
(11, 'Kinyas ve Kayra', 205, 68, 48, '1967', 3, 5, 4, 'https://i.dr.com.tr/cache/500x400-0/originals/0000000131986-1.jpg'),
(12, 'Şeker Portakalı ', 408, 150, 60, '1988', 3, 5, 4, 'https://i.dr.com.tr/cache/500x400-0/originals/0000000064031-1.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_ad` varchar(255) DEFAULT NULL,
  `kullanici_soyad` varchar(255) DEFAULT NULL,
  `kullanici_adres` varchar(255) DEFAULT NULL,
  `kullanici_telno` int(11) DEFAULT NULL,
  `kullanici_eposta` varchar(255) DEFAULT NULL,
  `kullanici_sifre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_ad`, `kullanici_soyad`, `kullanici_adres`, `kullanici_telno`, `kullanici_eposta`, `kullanici_sifre`) VALUES
(1, 'admin', 'admin', '', 0, 'admin@site.com', '1234'),
(2, 'Ayşe', 'Kaya', 'Ankara', 2147483647, 'aysekaya@hotmail.com', '1234'),
(3, 'Mehmet', 'Aktaş', 'İzmir', 2147483647, 'mehmetaktas@gmail.com', '1234'),
(4, 'Fatma', 'Özdemir', 'Bursa', 2147483647, 'fatmaozdemir@hotmail.com', '1234'),
(5, 'Mustafa', 'Aydın', 'Antalya', 2147483647, 'mustafaaydin@gmail.com', '1234'),
(6, 'Ceren', 'Güneş', 'İzmir', 2147483647, 'cerengunes@yahoo.com', '1234'),
(7, 'adfsdf', 'adfsdf', 'adfsdf', 2147483647, 'adfsdf', '1234'),
(9, 'kerem', 'barin', 'maltepe', 654654654, 'kerem@gmail.com', '1234'),
(10, 'mahmut', 'satici', 'gölcük', 2147483647, 'mahmut@gmail.com', '1234'),
(12, 'ömer', 'öztürk', 'akyazı', 0, '', NULL),
(13, 'ömer', 'öztürk', 'akyazı', 4753456, 'omer@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE `siparis` (
  `siparis_id` int(11) NOT NULL,
  `siparis_tarih` varchar(255) DEFAULT NULL,
  `siparis_durum` varchar(255) DEFAULT NULL,
  `toplam_tutar` float DEFAULT NULL,
  `odeme_yontemi` varchar(255) DEFAULT NULL,
  `kullanici_id` int(11) DEFAULT NULL,
  `kitap_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`siparis_id`, `siparis_tarih`, `siparis_durum`, `toplam_tutar`, `odeme_yontemi`, `kullanici_id`, `kitap_id`) VALUES
(1, '2023-05-13', 'Tamamlandı', 57.5, 'Kredi Kartı', 1, 1),
(2, '2023-05-12', 'Tamamlandı', 32, 'Kapıda Ödeme', 2, 2),
(3, '2023-05-11', 'Tamamlandı', 7, 'Havale', 3, 3),
(4, '2023-05-10', 'Tamamlandı', 28.5, 'Kapıda Ödeme', 4, 4),
(5, '2023-05-09', 'Tamamlandı', 22, 'Havale', 5, 5),
(6, '2023-05-08', 'Tamamlandı', 34, 'Kredi Kartı', 6, 6),
(8, 'Haziran 2023', 'kargoda', 25.5, 'kart', 4, 1),
(9, 'Haziran 2023', '', 32, 'kart', 4, 2),
(10, 'Haziran 2023', '', 7, 'kart', 2, 3),
(12, 'Haziran 2023', 'kargodaa', 95, 'kart', 7, 7),
(14, 'ocak', '', 150, 'kapıda', 9, 3);

--
-- Tetikleyiciler `siparis`
--
DELIMITER $$
CREATE TRIGGER `stok_dusur_trigger` AFTER INSERT ON `siparis` FOR EACH ROW BEGIN
    UPDATE kitap
    SET stok_sayisi = stok_sayisi - 1
    WHERE kitap_id = NEW.kitap_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yayinevi`
--

CREATE TABLE `yayinevi` (
  `yayinevi_id` int(11) NOT NULL,
  `yayinevi_ad` varchar(255) DEFAULT NULL,
  `site` varchar(255) DEFAULT NULL,
  `yayinevi_telno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `yayinevi`
--

INSERT INTO `yayinevi` (`yayinevi_id`, `yayinevi_ad`, `site`, `yayinevi_telno`) VALUES
(1, 'Doğan Kitap', 'www.dogankitap.com.tr', 2121234567),
(2, 'Yapı Kredi Yayınları', 'www.yapikrediyayinlari.com.tr', 2129876543),
(3, 'İletişim Yayınları', 'www.iletisim.com.tr', 2125554433),
(4, 'Remzi Kitabevi', 'www.remzi.com.tr', 2125551122),
(5, 'Everest Yayınları', 'www.everestyayinlari.com.tr', 2124445566),
(6, 'Can Yayınları', 'www.canyayinlari.com.tr', 2123339988),
(8, 'batin yayınları', 'www.batin.com', 2147483647),
(9, 'öztürk yayınları', 'www.öztürk.com', 2147483647);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazar`
--

CREATE TABLE `yazar` (
  `yazar_id` int(11) NOT NULL,
  `yazar_ad` varchar(255) DEFAULT NULL,
  `yazar_soyad` varchar(255) DEFAULT NULL,
  `yazar_ulke` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `yazar`
--

INSERT INTO `yazar` (`yazar_id`, `yazar_ad`, `yazar_soyad`, `yazar_ulke`) VALUES
(1, 'George', 'Orwell', 'İngiltere'),
(2, 'Fyodor', 'Dostoyevski', 'Rusya'),
(3, 'Italo', 'Calvino', 'İtalya'),
(4, 'Orhan ', 'Pamuk', 'Türkiye'),
(5, 'J.K.', 'Rowling', 'İngiltere'),
(6, 'Gabriel', 'García Márquez', 'Kolombiya'),
(7, 'Jules ', 'Verne', 'Fransa'),
(9, 'Sabahattin ', 'Ali', 'Türkiye'),
(10, 'John', 'Steinbeck', 'Amerika'),
(11, 'Adolf', 'Hitler', 'Almanya');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `kitap`
--
ALTER TABLE `kitap`
  ADD PRIMARY KEY (`kitap_id`),
  ADD KEY `kategori_id` (`kategori_id`),
  ADD KEY `yayinevi_id` (`yayinevi_id`),
  ADD KEY `yazar_id` (`yazar_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `siparis`
--
ALTER TABLE `siparis`
  ADD PRIMARY KEY (`siparis_id`),
  ADD KEY `kullanici_id` (`kullanici_id`),
  ADD KEY `kitap_id` (`kitap_id`);

--
-- Tablo için indeksler `yayinevi`
--
ALTER TABLE `yayinevi`
  ADD PRIMARY KEY (`yayinevi_id`);

--
-- Tablo için indeksler `yazar`
--
ALTER TABLE `yazar`
  ADD PRIMARY KEY (`yazar_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `kitap`
--
ALTER TABLE `kitap`
  MODIFY `kitap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `siparis`
--
ALTER TABLE `siparis`
  MODIFY `siparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `yayinevi`
--
ALTER TABLE `yayinevi`
  MODIFY `yayinevi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `yazar`
--
ALTER TABLE `yazar`
  MODIFY `yazar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `kitap`
--
ALTER TABLE `kitap`
  ADD CONSTRAINT `kitap_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`),
  ADD CONSTRAINT `kitap_ibfk_2` FOREIGN KEY (`yayinevi_id`) REFERENCES `yayinevi` (`yayinevi_id`),
  ADD CONSTRAINT `kitap_ibfk_3` FOREIGN KEY (`yazar_id`) REFERENCES `yazar` (`yazar_id`);

--
-- Tablo kısıtlamaları `siparis`
--
ALTER TABLE `siparis`
  ADD CONSTRAINT `siparis_ibfk_1` FOREIGN KEY (`kullanici_id`) REFERENCES `kullanici` (`kullanici_id`),
  ADD CONSTRAINT `siparis_ibfk_2` FOREIGN KEY (`kitap_id`) REFERENCES `kitap` (`kitap_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
