-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 Kas 2024, 00:34:25
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
-- Veritabanı: `proje`
--
CREATE DATABASE IF NOT EXISTS `proje` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `proje`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `araclar`
--

DROP TABLE IF EXISTS `araclar`;
CREATE TABLE IF NOT EXISTS `araclar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(50) NOT NULL,
  `marka` varchar(50) NOT NULL,
  `yil` year(4) NOT NULL,
  `vites_tipi` enum('Otomatik','Manuel') NOT NULL,
  `kisi_kapasitesi` int(2) NOT NULL,
  `bagaj_hacmi` varchar(20) NOT NULL,
  `aciklama` text NOT NULL,
  `fotograf` varchar(255) NOT NULL,
  `motor_tipi` enum('Dizel','Benzin','Elektrik') NOT NULL,
  `motor_hacmi` varchar(20) NOT NULL,
  `yas_sarti` int(11) DEFAULT NULL,
  `ehliyet_yasi` int(11) DEFAULT NULL,
  `fiyat` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `araclar`
--

INSERT INTO `araclar` (`id`, `model`, `marka`, `yil`, `vites_tipi`, `kisi_kapasitesi`, `bagaj_hacmi`, `aciklama`, `fotograf`, `motor_tipi`, `motor_hacmi`, `yas_sarti`, `ehliyet_yasi`, `fiyat`) VALUES
(33, 'Egea', 'Fiat', '2023', 'Otomatik', 5, '2 Büyük Bavul', 'Ekonomik ve geniş iç hacim.', 'araç fotoğrafları\\egea2023.png', 'Dizel', '1.6', 21, 1, 1215),
(34, 'i20', 'Hyundai', '2022', 'Manuel', 5, '1 Büyük Bavul', 'Kompakt ve çevik bir sürüş deneyimi.', 'araç fotoğrafları\\i20_2022.png', 'Benzin', '1.0', 21, 1, 1350),
(35, 'Bayon', 'Hyundai', '2021', 'Otomatik', 5, '2 Büyük Bavul', 'Modern SUV tasarımı ve konfor.', 'araç fotoğrafları\\bayon_2021.png', 'Benzin', '1.0', 21, 1, 1350),
(36, 'Clio', 'Renault', '2022', 'Manuel', 5, '1 Büyük Bavul', 'Dinamik ve şık tasarıma sahip.', 'araç fotoğrafları\\clio2022.png', 'Benzin', '1.3', 21, 1, 1185),
(37, 'Polo', 'Volkswagen', '2023', 'Otomatik', 5, '1 Büyük Bavul', 'Şehir içi kullanım için ideal.', 'araç fotoğrafları\\polo2023.png', 'Benzin', '1.0', 21, 1, 1350),
(38, 'Focus', 'Ford', '2023', 'Otomatik', 5, '2 Büyük Bavul', 'Sürüş konforu ve gelişmiş teknolojiler.', 'araç fotoğrafları\\focus2023.png', 'Benzin', '1.5', 23, 2, 1720),
(39, 'Megane', 'Renault', '2022', 'Manuel', 5, '3 Büyük Bavul', 'Dinamik tasarım ve verimli motor.', 'araç fotoğrafları\\megane2022.png', 'Dizel', '1.6', 23, 2, 1720),
(40, 'Octavia', 'Skoda', '2021', 'Otomatik', 5, '3 Büyük Bavul', 'Geniş iç hacim ve modern özellikler.', 'araç fotoğrafları\\octavia2021.png', 'Benzin', '1.4', 23, 2, 1720),
(41, 'Corolla', 'Toyota', '2023', 'Otomatik', 5, '2 Büyük Bavul', 'Dayanıklı ve ekonomik bir sedan.', 'araç fotoğrafları\\corolla2023.png', 'Benzin', '1.8', 23, 2, 1720),
(42, 'Mokka', 'Opel', '2022', 'Otomatik', 5, '2 Büyük Bavul', 'Şehir için kompakt SUV.', 'araç fotoğrafları\\mokka2022.png', 'Benzin', '1.2', 23, 2, 1900),
(43, 'A3', 'Audi', '2023', 'Otomatik', 5, '2 Büyük Bavul', 'Şık tasarım ve sportif sürüş.', 'araç fotoğrafları\\a3_2023.png', 'Benzin', '1.5', 27, 3, 2700),
(44, '2 Serisi', 'BMW', '2022', 'Otomatik', 5, '2 Büyük Bavul', 'Premium konfor ve performans.', 'araç fotoğrafları\\bmw2_2022.png', 'Benzin', '2.0', 27, 3, 2700),
(45, 'Kuga', 'Ford', '2023', 'Otomatik', 5, '3 Büyük Bavul', 'Geniş iç mekan ve ileri teknoloji.', 'araç fotoğrafları\\kuga2023.png', 'Dizel', '1.5', 25, 3, 2300),
(46, '3008', 'Peugeot', '2022', 'Otomatik', 5, '3 Büyük Bavul', 'SUV segmentinde modern ve şık.', 'araç fotoğrafları\\3008_2022.png', 'Benzin', '1.6', 25, 2, 2300),
(47, 'Passat', 'Volkswagen', '2021', 'Otomatik', 5, '3 Büyük Bavul', 'Lüks ve konfor bir arada.', 'araç fotoğrafları\\passat2021.png', 'Dizel', '2.0', 25, 3, 2700),
(48, 'Austral', 'Renault', '2023', 'Otomatik', 5, '2 Büyük Bavul', 'Modern SUV, teknolojik özelliklerle donatılmış.', 'araç fotoğrafları\\austral2023.png', 'Benzin', '1.3', 27, 3, 2300),
(49, 'Tonale', 'Alfa Romeo', '2023', 'Otomatik', 5, '2 Büyük Bavul', 'Modern hibrit teknolojisi ve sportif tasarım.', 'araç fotoğrafları\\tonale2023.png', '', '1.5', 27, 3, 3600),
(50, 'A6', 'Audi', '2022', 'Otomatik', 5, '3 Büyük Bavul', 'Yüksek performans ve üst düzey konfor.', 'araç fotoğrafları\\a6_2022.png', 'Benzin', '2.0', 27, 3, 5300),
(51, '5 Serisi', 'BMW', '2023', 'Otomatik', 5, '3 Büyük Bavul', 'Premium sedan sınıfının lideri.', 'araç fotoğrafları\\bmw5_2023.png', 'Dizel', '2.0', 27, 3, 5300),
(52, 'Model Y', 'Tesla', '2023', 'Otomatik', 5, '3 Büyük Bavul', 'Elektrikli SUV, yüksek menzil ve performans.', 'araç fotoğrafları\\modely2023.png', 'Elektrik', 'N/A', 27, 3, 2600),
(53, 'S60', 'Volvo', '2022', 'Otomatik', 5, '2 Büyük Bavul', 'Güvenlik ve lüks bir arada.', 'araç fotoğrafları\\s60_2022.png', 'Benzin', '2.0', 27, 3, 3800),
(54, 'XC90', 'Volvo', '2023', 'Otomatik', 7, '4 Büyük Bavul', 'Aile için geniş ve lüks bir SUV.', 'araç fotoğrafları\\xc90_2023.png', '', '2.0', 27, 3, 8000),
(55, 'Vito', 'Mercedes-Benz', '2023', 'Otomatik', 9, '4 Büyük Bavul', 'Geniş aileler ve ticari kullanım için ideal.', 'araç fotoğrafları\\vito2023.png', 'Dizel', '2.2', 27, 3, 3200),
(56, 'Staria', 'Hyundai', '2022', 'Otomatik', 9, '4 Büyük Bavul', 'Modern tasarıma sahip minibüs.', 'araç fotoğrafları\\staria2022.png', 'Dizel', '2.2', 27, 3, 3200),
(57, 'Ulysee', 'Fiat', '2023', 'Otomatik', 8, '4 Büyük Bavul', 'Konforlu ve geniş iç hacimli minibüs.', 'araç fotoğrafları\\ulysee2023.png', 'Dizel', '2.0', 27, 3, 3200),
(63, 'Wrangler', 'Jeep', '2023', 'Otomatik', 5, '2 Büyük Bavul', 'Efsanevi arazi performansı ve sağlamlık.', 'araç fotoğrafları\\wrangler2023.png', 'Benzin', '2.0', 27, 3, 3500),
(64, 'Defender', 'Land Rover', '2022', 'Otomatik', 5, '3 Büyük Bavul', 'Yüksek off-road kabiliyeti ve lüks.', 'araç fotoğrafları\\defender2022.png', 'Dizel', '2.2', 27, 3, 5200),
(66, 'Bronco', 'Ford', '2022', 'Otomatik', 5, '2 Büyük Bavul', 'Macera dolu sürüşler için tasarlanmış.', 'araç fotoğrafları\\bronco2022.png', 'Benzin', '2.3', 27, 3, 3500),
(67, 'G-Serisi', 'Mercedes-Benz', '2023', 'Otomatik', 5, '3 Büyük Bavul', 'Lüks ve arazi performansını birleştiren SUV.', 'araç fotoğrafları\\gserisi2023.png', 'Benzin', '4.0', 27, 3, 5500);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `araclar_subeler`
--

DROP TABLE IF EXISTS `araclar_subeler`;
CREATE TABLE IF NOT EXISTS `araclar_subeler` (
  `arac_detay_id` int(11) NOT NULL,
  `sube_id` int(11) NOT NULL,
  `araclar_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`arac_detay_id`,`sube_id`),
  KEY `sube_id` (`sube_id`),
  KEY `fk_araclar` (`araclar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `araclar_subeler`
--

INSERT INTO `araclar_subeler` (`arac_detay_id`, `sube_id`, `araclar_id`) VALUES
(530, 1, 43),
(531, 2, 43),
(532, 3, 43),
(533, 5, 43),
(534, 8, 43),
(535, 1, 43),
(536, 2, 43),
(537, 3, 43),
(500, 5, 46),
(501, 5, 46),
(502, 5, 46),
(503, 5, 46),
(505, 5, 46),
(543, 1, 50),
(544, 2, 50),
(545, 3, 50),
(546, 5, 50),
(547, 8, 50);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `arac_detay`
--

DROP TABLE IF EXISTS `arac_detay`;
CREATE TABLE IF NOT EXISTS `arac_detay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `arac_id` int(11) NOT NULL,
  `plaka` varchar(10) NOT NULL,
  `donanim` varchar(255) NOT NULL,
  `ic_foto` varchar(255) DEFAULT NULL,
  `sag_foto` varchar(255) DEFAULT NULL,
  `sol_foto` varchar(255) DEFAULT NULL,
  `on_foto` varchar(255) DEFAULT NULL,
  `arka_foto` varchar(255) DEFAULT NULL,
  `kilometre` int(11) NOT NULL,
  `renk` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `plaka` (`plaka`),
  KEY `arac_id` (`arac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=553 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `arac_detay`
--

INSERT INTO `arac_detay` (`id`, `arac_id`, `plaka`, `donanim`, `ic_foto`, `sag_foto`, `sol_foto`, `on_foto`, `arka_foto`, `kilometre`, `renk`) VALUES
(500, 46, '34ABC01', 'active', 'araç fotoğrafları\\3008\\3008_5iç.png', 'araç fotoğrafları\\3008\\3008_3sağ.png', 'araç fotoğrafları\\3008\\3008_4sol.png', 'araç fotoğrafları\\3008\\3008_1ön.png', 'araç fotoğrafları\\3008\\3008_2arka.png', 0, 'Gri'),
(501, 46, '34ABC02', 'active', 'araç fotoğrafları\\3008\\3008_10iç.png', 'araç fotoğrafları\\3008\\3008_8sağ.png', 'araç fotoğrafları\\3008\\3008_9sol.png', 'araç fotoğrafları\\3008\\3008_6ön.png', 'araç fotoğrafları\\3008\\3008_7arka.png', 0, 'Beyaz'),
(502, 46, '34ABC03', 'active', 'araç fotoğrafları\\3008\\3008_15iç.png', 'araç fotoğrafları\\3008\\3008_13sağ.png', 'araç fotoğrafları\\3008\\3008_14sol.png', 'araç fotoğrafları\\3008\\3008_11ön.png', 'araç fotoğrafları\\3008\\3008_12arka.png', 0, 'Kırmızı'),
(503, 46, '34ABC04', 'active', 'araç fotoğrafları\\3008\\3008_20iç.png', 'araç fotoğrafları\\3008\\3008_18sağ.png', 'araç fotoğrafları\\3008\\3008_19sol.png', 'araç fotoğrafları\\3008\\3008_16ön.png', 'araç fotoğrafları\\3008\\3008_17arka.png', 0, 'Mavi'),
(504, 46, '34ABC05', 'active', 'araç fotoğrafları\\3008\\3008_25iç.png', 'araç fotoğrafları\\3008\\3008_23sol.png', 'araç fotoğrafları\\3008\\3008_24sağ.png', 'araç fotoğrafları\\3008\\3008_21ön.png', 'araç fotoğrafları\\3008\\3008_22arka.png', 0, 'Siyah'),
(505, 46, '34ABC06', 'active', 'araç fotoğrafları\\3008\\3008_30iç.png', 'araç fotoğrafları\\3008\\3008_28sol.png', 'araç fotoğrafları\\3008\\3008_29sağ.png', 'araç fotoğrafları\\3008\\3008_26ön.png', 'araç fotoğrafları\\3008\\3008_27arka.png', 0, 'Yeşil'),
(530, 43, '34ABC001', 'dynamic', 'araç fotoğrafları\\a3\\a3_5iç.png', 'araç fotoğrafları\\a3\\a3_3sağ.png', 'araç fotoğrafları\\a3\\a3_4sol.png', 'araç fotoğrafları\\a3\\a3_1ön.png', 'araç fotoğrafları\\a3\\a3_2arka.png', 26618, 'Kırmızı'),
(531, 43, '34ABC002', 'dynamic', 'araç fotoğrafları\\a3\\a3_10iç.png', 'araç fotoğrafları\\a3\\a3_9sağ.png', 'araç fotoğrafları\\a3\\a3_8sol.png', 'araç fotoğrafları\\a3\\a3_6ön.png', 'araç fotoğrafları\\a3\\a3_7arka.png', 10970, 'Beyaz'),
(532, 43, '34ABC003', 'dynamic', 'araç fotoğrafları\\a3\\a3_15iç.png', 'araç fotoğrafları\\a3\\a3_14sağ.png', 'araç fotoğrafları\\a3\\a3_13sol.png', 'araç fotoğrafları\\a3\\a3_11ön.png', 'araç fotoğrafları\\a3\\a3_12arka.png', 14995, 'Mavi'),
(533, 43, '34ABC004', 'dynamic', 'araç fotoğrafları\\a3\\a3_20iç.png', 'araç fotoğrafları\\a3\\a3_19sağ.png', 'araç fotoğrafları\\a3\\a3_18sol.png', 'araç fotoğrafları\\a3\\a3_16ön.png', 'araç fotoğrafları\\a3\\a3_17arka.png', 2065, 'Siyah'),
(534, 43, '34ABC005', 'dynamic', 'araç fotoğrafları\\a3\\a3_25iç.png', 'araç fotoğrafları\\a3\\a3_24sağ.png', 'araç fotoğrafları\\a3\\a3_23sol.png', 'araç fotoğrafları\\a3\\a3_21ön.png', 'araç fotoğrafları\\a3\\a3_22arka.png', 5339, 'Gri'),
(535, 43, '34ABC006', 'dynamic', 'araç fotoğrafları\\a3\\a3_30iç.png', 'araç fotoğrafları\\a3\\a3_29sağ.png', 'araç fotoğrafları\\a3\\a3_28sol.png', 'araç fotoğrafları\\a3\\a3_26ön.png', 'araç fotoğrafları\\a3\\a3_27arka.png', 20504, 'Yeşil'),
(536, 43, '34ABC007', 'dynamic', 'araç fotoğrafları\\a3\\a3_35iç.png', 'araç fotoğrafları\\a3\\a3_33sağ.png', 'araç fotoğrafları\\a3\\a3_34sol.png', 'araç fotoğrafları\\a3\\a3_31ön.png', 'araç fotoğrafları\\a3\\a3_32arka.png', 6501, 'Sarı'),
(537, 43, '34ABC008', 'dynamic', 'araç fotoğrafları\\a3\\a3_40iç.png', 'araç fotoğrafları\\a3\\a3_39sağ.png', 'araç fotoğrafları\\a3\\a3_38sol.png', 'araç fotoğrafları\\a3\\a3_36ön.png', 'araç fotoğrafları\\a3\\a3_37arka.png', 10993, 'Kahverengi'),
(543, 50, '34 ABC 012', 'advanced', 'araç fotoğrafları\\a6\\a6_5iç.png', 'araç fotoğrafları\\a6\\a6_3sağ.png', 'araç fotoğrafları\\a6\\a6_4sol.png', 'araç fotoğrafları\\a6\\a6.1ön.png', 'araç fotoğrafları\\a6\\a6_2arka.png', 39147, 'renk1'),
(544, 50, '34 ABC 013', 'advanced', 'araç fotoğrafları\\a6\\a6_10iç.png', 'araç fotoğrafları\\a6\\a6_8sağ.png', 'araç fotoğrafları\\a6\\a6_9sol.png', 'araç fotoğrafları\\a6\\a6_6ön.png', 'araç fotoğrafları\\a6\\a6_7arka.png', 21389, 'renk2'),
(545, 50, '34 ABC 014', 'advanced', 'araç fotoğrafları\\a6\\a6_15iç.png', 'araç fotoğrafları\\a6\\a6_13sağ.png', 'araç fotoğrafları\\a6\\a6_14sol.png', 'araç fotoğrafları\\a6\\a6_11ön.png', 'araç fotoğrafları\\a6\\a6_12arka.png', 29503, 'renk3'),
(546, 50, '34 ABC 015', 'advanced', 'araç fotoğrafları\\a6\\a6_20iç.png', 'araç fotoğrafları\\a6\\a6_18sağ.png', 'araç fotoğrafları\\a6\\a6_19sol.png', 'araç fotoğrafları\\a6\\a6_16ön.png', 'araç fotoğrafları\\a6\\a6_17arka.png', 3350, 'renk4'),
(547, 50, '34 ABC 016', 'advanced', 'araç fotoğrafları\\a6\\a6_25iç.png', 'araç fotoğrafları\\a6\\a6_23sol.png', 'araç fotoğrafları\\a6\\a6_24sağ.png', 'araç fotoğrafları\\a6\\a6_21ön.png', 'araç fotoğrafları\\a6\\a6_22arka.png', 8242, 'renk5'),
(548, 48, '34 ABC 017', 'Techno', 'araç fotoğrafları\\austral\\austral_5iç.png', 'araç fotoğrafları\\austral\\austral_4sağ.png', 'araç fotoğrafları\\austral\\austral_3sol.png', 'araç fotoğrafları\\austral\\austral_1ön.png', 'araç fotoğrafları\\austral\\austral_2arka.png', 27599, 'Renk1'),
(549, 48, '34 ABC 018', 'Techno', 'araç fotoğrafları\\austral\\austral_10iç.png', 'araç fotoğrafları\\austral\\austral_8sağ.png', 'araç fotoğrafları\\austral\\austral_9sol.png', 'araç fotoğrafları\\austral\\austral_6ön.png', 'araç fotoğrafları\\austral\\austral_7arka.png', 32746, 'Renk2'),
(550, 48, '34 ABC 019', 'Techno', 'araç fotoğrafları\\austral\\austral_15iç.png', 'araç fotoğrafları\\austral\\austral_14sağ.png', 'araç fotoğrafları\\austral\\austral_13sol.png', 'araç fotoğrafları\\austral\\austral_16ön.png', 'araç fotoğrafları\\austral\\austral_17arka.png', 935, 'Renk3'),
(551, 48, '34 ABC 020', 'Techno', 'araç fotoğrafları\\austral\\austral_20iç.png', 'araç fotoğrafları\\austral\\austral_19sağ.png', 'araç fotoğrafları\\austral\\austral_18sol.png', 'araç fotoğrafları\\austral\\austral_21ön.png', 'araç fotoğrafları\\austral\\austral_22arka.png', 26439, 'Renk4'),
(552, 48, '34 ABC 021', 'Techno', 'araç fotoğrafları\\austral\\austral_25iç.png', 'araç fotoğrafları\\austral\\austral_24sol.png', 'araç fotoğrafları\\austral\\austral_23sağ.png', 'araç fotoğrafları\\austral\\austral_16ön.png', 'araç fotoğrafları\\austral\\austral_17arka.png', 9389, 'Renk5');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `fatura`
--

DROP TABLE IF EXISTS `fatura`;
CREATE TABLE IF NOT EXISTS `fatura` (
  `fatura_id` int(11) NOT NULL AUTO_INCREMENT,
  `musteri_id` int(11) NOT NULL,
  `sirket_adi` varchar(255) NOT NULL,
  `vergi_dairesi` varchar(255) NOT NULL,
  `vergi_no` varchar(50) NOT NULL,
  `adres` varchar(500) NOT NULL,
  `olusturma_tarihi` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`fatura_id`),
  KEY `musteri_id` (`musteri_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `fatura`
--

INSERT INTO `fatura` (`fatura_id`, `musteri_id`, `sirket_adi`, `vergi_dairesi`, `vergi_no`, `adres`, `olusturma_tarihi`) VALUES
(3, 41, 'Rent A Car', 'Ümraniye', '456346436', 'Yamanevler Mah. Dr. Fazıl Küçük Cd. No:9 Ümraniye/İSTANBUL', '2024-11-10 19:47:09');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteriler`
--

DROP TABLE IF EXISTS `musteriler`;
CREATE TABLE IF NOT EXISTS `musteriler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_soyad` varchar(100) DEFAULT NULL,
  `dogum_tarihi` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tc_no` varchar(11) DEFAULT NULL,
  `passport_no` varchar(11) DEFAULT NULL,
  `ehliyet_seri_no` varchar(6) DEFAULT NULL,
  `ehliyet_alis_tarihi` date DEFAULT NULL,
  `telefon` varchar(11) DEFAULT NULL,
  `adres` varchar(255) DEFAULT NULL,
  `il` varchar(200) DEFAULT NULL,
  `ilce` varchar(200) DEFAULT NULL,
  `ulke` varchar(200) DEFAULT NULL,
  `sifre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `musteriler`
--

INSERT INTO `musteriler` (`id`, `ad_soyad`, `dogum_tarihi`, `email`, `tc_no`, `passport_no`, `ehliyet_seri_no`, `ehliyet_alis_tarihi`, `telefon`, `adres`, `il`, `ilce`, `ulke`, `sifre`) VALUES
(41, 'ömer faruk eminoğlu', '1900-06-01', 'mrfrkmnll@gmail.com', '39025613032', NULL, '290557', '2000-07-01', '05534682052', 'cemil meriç mah. fırat sk. no:79/3', 'İstanbul', 'Ümraniye', '', '$2y$10$DUfFclfAEHfjfXVa0ISNGeGBI9F0Vr2KwhpaonWKSLzypcLNpvx9G');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `odeme`
--

DROP TABLE IF EXISTS `odeme`;
CREATE TABLE IF NOT EXISTS `odeme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `toplam_fiyat` int(50) NOT NULL,
  `kart_isim` varchar(100) NOT NULL,
  `kart_no` varchar(16) NOT NULL,
  `ay` int(2) NOT NULL,
  `yil` int(4) NOT NULL,
  `cvc` int(3) NOT NULL,
  `odeme_tarihi` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `odeme`
--

INSERT INTO `odeme` (`id`, `toplam_fiyat`, `kart_isim`, `kart_no`, `ay`, `yil`, `cvc`, `odeme_tarihi`) VALUES
(83, 4600, 'dgkjkjghkjghjh', '7887877878787878', 4, 2026, 788, '2024-11-10 17:36:45'),
(84, 4600, 'wtrewtrew', '7777777774566546', 2, 2026, 777, '2024-11-10 18:07:19'),
(85, 5400, 'fcncgnbvmvb', '8568576875756785', 10, 2029, 575, '2024-11-10 19:48:11'),
(86, 10600, 'bsbfdfgfdfgdgn', '5655564654654654', 3, 2026, 456, '2024-11-10 20:15:39');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `paketler`
--

DROP TABLE IF EXISTS `paketler`;
CREATE TABLE IF NOT EXISTS `paketler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mini` int(11) NOT NULL,
  `standart` int(11) NOT NULL,
  `full` int(11) NOT NULL,
  `ek` int(11) NOT NULL,
  `genc` int(11) NOT NULL,
  `cocuk` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `paketler`
--

INSERT INTO `paketler` (`id`, `mini`, `standart`, `full`, `ek`, `genc`, `cocuk`) VALUES
(1, 350, 400, 450, 50, 100, 150);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rezervasyon`
--

DROP TABLE IF EXISTS `rezervasyon`;
CREATE TABLE IF NOT EXISTS `rezervasyon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `arac_detay_id` int(11) NOT NULL,
  `arac_id` int(11) NOT NULL,
  `musteri_id` int(11) NOT NULL,
  `teslim_alinacak_tarih` date NOT NULL,
  `teslim_alinacak_saat` time NOT NULL,
  `teslim_edilecek_tarih` date NOT NULL,
  `teslim_edilecek_saat` time NOT NULL,
  `teslim_alinacak_sube_id` int(11) NOT NULL,
  `teslim_edilecek_sube_id` int(11) NOT NULL,
  `odeme_id` int(11) NOT NULL,
  `ucus_kodu` varchar(16) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `arac_detay_id` (`arac_detay_id`),
  KEY `musteri_id` (`musteri_id`),
  KEY `teslim_alinacak_sube_id` (`teslim_alinacak_sube_id`),
  KEY `teslim_edilecek_sube_id` (`teslim_edilecek_sube_id`),
  KEY `rezervasyon_ibfk_2` (`arac_id`),
  KEY `rezervasyon_ibfk_6` (`odeme_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `rezervasyon`
--

INSERT INTO `rezervasyon` (`id`, `arac_detay_id`, `arac_id`, `musteri_id`, `teslim_alinacak_tarih`, `teslim_alinacak_saat`, `teslim_edilecek_tarih`, `teslim_edilecek_saat`, `teslim_alinacak_sube_id`, `teslim_edilecek_sube_id`, `odeme_id`, `ucus_kodu`) VALUES
(22, 500, 46, 41, '2024-11-10', '20:33:00', '2024-11-12', '20:33:00', 5, 5, 83, ''),
(23, 501, 46, 41, '2024-11-10', '20:33:00', '2024-11-12', '20:33:00', 5, 5, 84, ''),
(24, 502, 46, 41, '2024-11-10', '22:44:00', '2024-11-12', '22:44:00', 5, 5, 85, ''),
(25, 546, 50, 41, '2024-11-10', '23:08:00', '2024-11-12', '23:08:00', 5, 5, 86, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `subeler`
--

DROP TABLE IF EXISTS `subeler`;
CREATE TABLE IF NOT EXISTS `subeler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `il` varchar(50) NOT NULL,
  `ilce` varchar(50) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `telefon` varchar(11) NOT NULL,
  `hakkinda` text DEFAULT NULL,
  `konum` varchar(2550) DEFAULT NULL,
  `is_basi` time NOT NULL,
  `is_sonu` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `subeler`
--

INSERT INTO `subeler` (`id`, `il`, `ilce`, `adres`, `telefon`, `hakkinda`, `konum`, `is_basi`, `is_sonu`) VALUES
(1, 'İstanbul', 'Sabiha Gökçen Havalimanı', 'Sanayi, 34906 Pendik/İstanbul', '0216 588 88', 'İstanbul Sabiha Gökçen Uluslararası Havalimanı, Pendik ilçesi sınırlarında inşa edilen İstanbul\'un 2. havalimanı. Havalimanı ismini, dünyanın ilk kadın savaş pilotu ve Türkiye\'nin ilk kadın pilotu olan Sabiha Gökçen\'den almıştır.', 'pb=!1m18!1m12!1m3!1d12061.70339901276!2d29.299665220662238!3d40.906407760025495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cada324b2500fd%3A0x966cebbf4ff1340f!2zU2FiaWhhIEfDtmvDp2VuIEhhdmFsaW1hbsSx!5e0!3m2!1str!2str!4v1731009664055!5m2!1str!2str', '00:00:00', '23:59:59'),
(2, 'İstanbul', 'Havalimanı', 'Tayakadın, Terminal Caddesi No:1, 34283 Arnavutköy/İstanbul', '444 1 442', 'İstanbul Havalimanı, Türkiye\'nin İstanbul şehrinde hizmet veren 2022 ve 2023 yıllarında Avrupa\'nın en çok uçuş yapılan uluslararası havalimanıdır.', 'pb=!1m18!1m12!1m3!1d11995.676942116554!2d28.729806070007328!3d41.26709437916915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409ffff60abc95a9%3A0x380ce02cc824e506!2zxLBzdGFuYnVsIEhhdmFsaW1hbsSx!5e0!3m2!1str!2str!4v1731009773087!5m2!1str!2str', '00:00:00', '23:59:59'),
(3, 'İzmir', 'Adnan Menderes Havalimanı', 'Dokuz Eylül, 35410 Gaziemir/İzmir', '0232 455 00', 'İç ve dış hat terminallerinin yanı sıra İzmir\'e doğrudan bağlanan tren hattıyla modern havaalanı.', 'pb=!1m18!1m12!1m3!1d6263.000087349395!2d27.13845804333689!3d38.29108077943353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbe04026eb6ecd%3A0xb4ff64e6cdf6ee55!2sAdnanmenderes%20Havaalan%C4%B1!5e0!3m2!1str!2str!4v1731009875831!5m2!1str!2str', '00:00:00', '23:59:59'),
(5, 'Ankara', 'Esenboğa Havalimanı', 'Balıkhisar Mh., Özal Bulvarı, 06750 Akyurt/Ankara', '0312 590 40', 'Esenboğa Havalimanı, Türkiye\'nin başkenti Ankara\'ya hizmet veren uluslararası havalimanıdır. Şehir merkezinin 28 km kuzeyinde, Çubuk ilçesi sınırları içindedir. ', 'pb=!1m18!1m12!1m3!1d6102.409582231287!2d32.988378618202745!3d40.11543941281692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40820f85c1ef5dad%3A0x545c3fb603185ec5!2zRMSxxZ8gaGF0bGFyIEFua2FyYSBFc2VuYm_En2E!5e0!3m2!1str!2str!4v1730992007092!5m2!1str!2str', '00:00:00', '23:59:59'),
(8, 'Antalya', 'Havalimanı', 'Yeşilköy, Antalya Havaalanı Dış Hatlar Terminali 1, 07230 Muratpaşa/Antalya', '0242 444 74', 'Antalya Havalimanı, Türkiye\'nin Antalya iline hizmet veren uluslararası havalimanıdır. Havalimanı, özellikle yaz aylarında Türkiye\'nin güney sahillerine gelen milyonlarca yerli ve yabancı turisti ağırlamaktadır.', 'pb=!1m18!1m12!1m3!1d15175.444833625634!2d30.790436609601855!3d36.908423146733206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c3855284c9b945%3A0x240a0da0b7ff3a87!2zQVlUIMSww6cgSGF0bGFy!5e0!3m2!1str!2str!4v1731010002692!5m2!1str!2str', '00:00:00', '23:59:59');

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `araclar_subeler`
--
ALTER TABLE `araclar_subeler`
  ADD CONSTRAINT `araclar_subeler_ibfk_1` FOREIGN KEY (`arac_detay_id`) REFERENCES `arac_detay` (`id`),
  ADD CONSTRAINT `araclar_subeler_ibfk_2` FOREIGN KEY (`sube_id`) REFERENCES `subeler` (`id`),
  ADD CONSTRAINT `fk_araclar` FOREIGN KEY (`araclar_id`) REFERENCES `araclar` (`id`);

--
-- Tablo kısıtlamaları `arac_detay`
--
ALTER TABLE `arac_detay`
  ADD CONSTRAINT `arac_detay_ibfk_1` FOREIGN KEY (`arac_id`) REFERENCES `araclar` (`id`);

--
-- Tablo kısıtlamaları `fatura`
--
ALTER TABLE `fatura`
  ADD CONSTRAINT `fatura_ibfk_1` FOREIGN KEY (`musteri_id`) REFERENCES `musteriler` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `rezervasyon`
--
ALTER TABLE `rezervasyon`
  ADD CONSTRAINT `rezervasyon_ibfk_1` FOREIGN KEY (`arac_detay_id`) REFERENCES `arac_detay` (`id`),
  ADD CONSTRAINT `rezervasyon_ibfk_2` FOREIGN KEY (`arac_id`) REFERENCES `arac_detay` (`arac_id`),
  ADD CONSTRAINT `rezervasyon_ibfk_3` FOREIGN KEY (`musteri_id`) REFERENCES `musteriler` (`id`),
  ADD CONSTRAINT `rezervasyon_ibfk_4` FOREIGN KEY (`teslim_alinacak_sube_id`) REFERENCES `subeler` (`id`),
  ADD CONSTRAINT `rezervasyon_ibfk_5` FOREIGN KEY (`teslim_edilecek_sube_id`) REFERENCES `subeler` (`id`),
  ADD CONSTRAINT `rezervasyon_ibfk_6` FOREIGN KEY (`odeme_id`) REFERENCES `odeme` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
