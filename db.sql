-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.25-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for unibfair
CREATE DATABASE IF NOT EXISTS `unibfair` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `unibfair`;

-- Dumping structure for table unibfair.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table unibfair.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table unibfair.jawabans
CREATE TABLE IF NOT EXISTS `jawabans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pertanyaan_id` bigint(20) unsigned NOT NULL,
  `jawaban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_true` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `jawabans_pertanyaan_id_foreign` (`pertanyaan_id`),
  CONSTRAINT `jawabans_pertanyaan_id_foreign` FOREIGN KEY (`pertanyaan_id`) REFERENCES `pertanyaans` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=205 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table unibfair.jawabans: ~188 rows (approximately)
REPLACE INTO `jawabans` (`id`, `pertanyaan_id`, `jawaban`, `is_true`, `created_at`, `updated_at`) VALUES
	(1, 1, '1982', 0, NULL, NULL),
	(2, 1, '1986', 0, NULL, NULL),
	(3, 1, '1972', 0, NULL, NULL),
	(4, 1, '1968', 1, NULL, NULL),
	(5, 2, 'Malboro', 0, NULL, NULL),
	(6, 2, 'Malborough', 1, NULL, NULL),
	(7, 2, 'Malabro', 0, NULL, NULL),
	(8, 2, 'Malbro', 0, NULL, NULL),
	(9, 3, 'Bunga Kembang Sepatu', 0, NULL, NULL),
	(10, 3, 'Bunga Rafflesia', 1, NULL, NULL),
	(11, 3, 'Bunga Anggrek', 0, NULL, NULL),
	(12, 3, 'Bunga Kol', 0, NULL, NULL),
	(13, 4, 'Agusrin', 0, NULL, NULL),
	(14, 4, 'Helmi Hasan', 0, NULL, NULL),
	(15, 4, 'Rosjonsyah', 0, NULL, NULL),
	(16, 4, 'Rohidin Mersyah', 1, NULL, NULL),
	(17, 5, 'Agusrin', 0, NULL, NULL),
	(18, 5, 'Helmi Hasan', 1, NULL, NULL),
	(19, 5, 'Rosjonsyah', 0, NULL, NULL),
	(20, 5, 'Rohidin Mersyah', 0, NULL, NULL),
	(21, 6, 'Megawati', 0, NULL, NULL),
	(22, 6, 'Sri Mulyani', 0, NULL, NULL),
	(23, 6, 'Kartini', 0, NULL, NULL),
	(24, 6, 'Fatmawati', 1, NULL, NULL),
	(25, 7, 'Soekarno Hatta', 0, NULL, NULL),
	(26, 7, 'Kualanamu', 0, NULL, NULL),
	(27, 7, 'Fatmawati', 1, NULL, NULL),
	(28, 7, 'Hassanuddin', 0, NULL, NULL),
	(29, 8, 'Kandang Mas', 0, NULL, NULL),
	(30, 8, 'Kandang Limun', 1, NULL, NULL),
	(31, 8, 'Kandang', 0, NULL, NULL),
	(32, 8, 'Rawa Makmur', 0, NULL, NULL),
	(33, 9, 'Gamelan', 0, NULL, NULL),
	(34, 9, 'Angklung', 0, NULL, NULL),
	(35, 9, 'Gendang', 0, NULL, NULL),
	(36, 9, 'Dol', 1, NULL, NULL),
	(37, 10, 'Danau Tes', 0, NULL, NULL),
	(38, 10, 'Danau Gedang', 0, NULL, NULL),
	(39, 10, 'Danau Dendam', 1, NULL, NULL),
	(40, 10, 'Danau Nibung', 0, NULL, NULL),
	(41, 11, 'Bika Ambon', 0, NULL, NULL),
	(42, 11, 'Peyeum', 0, NULL, NULL),
	(43, 11, 'Rendang', 0, NULL, NULL),
	(44, 11, 'Pendap', 1, NULL, NULL),
	(45, 12, 'Tari Andun', 1, NULL, NULL),
	(46, 12, 'Tari piring', 0, NULL, NULL),
	(47, 12, 'Tari saman', 0, NULL, NULL),
	(48, 12, 'Tari jaipong', 0, NULL, NULL),
	(49, 13, 'Rumah Joglo', 0, NULL, NULL),
	(50, 13, 'Rumah Bubungan Lima', 1, NULL, NULL),
	(51, 13, 'Rumah Gadang', 0, NULL, NULL),
	(52, 13, 'Rumah Honai', 0, NULL, NULL),
	(53, 14, 'Bandung', 0, NULL, NULL),
	(54, 14, 'Bangka', 0, NULL, NULL),
	(55, 14, 'Bali', 1, NULL, NULL),
	(56, 14, 'Banjarmasin', 0, NULL, NULL),
	(57, 15, 'Qatar', 1, NULL, NULL),
	(58, 15, 'Kuwait', 0, NULL, NULL),
	(59, 15, 'UAE', 0, NULL, NULL),
	(60, 15, 'Saudi Arabia', 0, NULL, NULL),
	(61, 16, 'Bintang', 1, NULL, NULL),
	(62, 16, 'Pohon Beringin', 0, NULL, NULL),
	(63, 16, 'Rantai', 0, NULL, NULL),
	(64, 16, 'Kepala Banteng', 0, NULL, NULL),
	(65, 17, 'Bintang', 0, NULL, NULL),
	(66, 17, 'Pohon Beringin', 0, NULL, NULL),
	(67, 17, 'Rantai', 1, NULL, NULL),
	(68, 17, 'Kepala Banteng', 0, NULL, NULL),
	(69, 18, 'Bintang', 0, NULL, NULL),
	(70, 18, 'Pohon Beringin', 1, NULL, NULL),
	(71, 18, 'Rantai', 0, NULL, NULL),
	(72, 18, 'Kepala Banteng', 0, NULL, NULL),
	(73, 19, 'Bintang', 0, NULL, NULL),
	(74, 19, 'Pohon Beringin', 0, NULL, NULL),
	(75, 19, 'Rantai', 0, NULL, NULL),
	(76, 19, 'Kepala Banteng', 1, NULL, NULL),
	(77, 20, 'Pohon Beringin', 0, NULL, NULL),
	(78, 20, 'Rantai', 0, NULL, NULL),
	(79, 20, 'Kepala Banteng', 0, NULL, NULL),
	(80, 20, 'Padi dan kapas', 1, NULL, NULL),
	(81, 21, 'Retno Marsuadi', 0, NULL, NULL),
	(82, 21, 'Retno Agustina eka putri', 1, NULL, NULL),
	(83, 21, 'Retnowati', 0, NULL, NULL),
	(84, 21, 'Riduan Nurazi', 0, NULL, NULL),
	(85, 22, 'Lembaga Penelitian dan Pengabdian', 0, NULL, NULL),
	(86, 22, 'Lembaga Penjamin Mutu Pendidikan', 0, NULL, NULL),
	(87, 22, 'Lembaga Pengembangan Teknologi Informasi Komunikasi', 1, NULL, NULL),
	(88, 22, 'Unit Pelayanan Terpadu', 0, NULL, NULL),
	(89, 23, 'Kain Batik Besurek', 1, NULL, NULL),
	(90, 23, 'Kain Batik Parang', 0, NULL, NULL),
	(91, 23, 'Kain Batik Singa Barong', 0, NULL, NULL),
	(92, 23, 'Kain Batik Lasem', 0, NULL, NULL),
	(93, 24, 'Tobat', 0, NULL, NULL),
	(94, 24, 'Tabot', 1, NULL, NULL),
	(95, 24, 'Tabiat', 0, NULL, NULL),
	(96, 24, 'Tebat', 0, NULL, NULL),
	(97, 25, '8 Kabupaten + 1 Kota', 0, NULL, NULL),
	(98, 25, '9 Kabupaten + 1 Kota', 1, NULL, NULL),
	(99, 25, '7 Kabupaten + 3 Kota', 0, NULL, NULL),
	(100, 25, '8 Kabupaten + 2 Kota', 0, NULL, NULL),
	(101, 26, 'Bersatu kita teguh bercerai kita runtuh', 0, NULL, NULL),
	(102, 26, 'Bertumpah darah yang satu, tanah Indonesia. Berbangsa yang satu, bangsa Indonesia. Menjunjung bahasa persatuan, bahasa Indonesia', 1, NULL, NULL),
	(103, 26, 'Habis Gelap Terbitlah Terang', 0, NULL, NULL),
	(104, 26, 'Kerakyatan yang Dipimpin oleh Hikmat Kebijaksanaan dalam Permusyawaratan/Perwakilan', 0, NULL, NULL),
	(105, 27, 'Ketuhanan Yang Maha Esa.', 0, NULL, NULL),
	(106, 27, 'Kemanusiaan yang adil dan beradab.', 0, NULL, NULL),
	(107, 27, 'Persatuan Indonesia', 0, NULL, NULL),
	(108, 27, 'Keadilan sosial bagi seluruh rakyat Indonesia.', 1, NULL, NULL),
	(109, 28, 'Ketuhanan Yang Maha Esa.', 0, NULL, NULL),
	(110, 28, 'Kemanusiaan yang adil dan beradab.', 0, NULL, NULL),
	(111, 28, 'Persatuan Indonesia', 1, NULL, NULL),
	(112, 28, 'Keadilan sosial bagi seluruh rakyat Indonesia.', 0, NULL, NULL),
	(113, 29, 'Ketuhanan Yang Maha Esa.', 0, NULL, NULL),
	(114, 29, 'Kemanusiaan yang adil dan beradab.', 1, NULL, NULL),
	(115, 29, 'Persatuan Indonesia', 0, NULL, NULL),
	(116, 29, 'Keadilan sosial bagi seluruh rakyat Indonesia.', 0, NULL, NULL),
	(117, 30, 'Ketuhanan Yang Maha Esa.', 1, NULL, NULL),
	(118, 30, 'Kemanusiaan yang adil dan beradab.', 0, NULL, NULL),
	(119, 30, 'Persatuan Indonesia', 0, NULL, NULL),
	(120, 30, 'Keadilan sosial bagi seluruh rakyat Indonesia.', 0, NULL, NULL),
	(121, 31, 'Ketuhanan Yang Maha Esa.', 0, NULL, NULL),
	(122, 31, 'Keadilan sosial bagi seluruh rakyat Indonesia.', 0, NULL, NULL),
	(123, 31, 'Kerakyatan yang Dipimpin oleh Hikmat Kebijaksanaan dalam Permusyawaratan/Perwakilan.', 1, NULL, NULL),
	(124, 31, 'Kemanusiaan yang adil dan beradab.', 0, NULL, NULL),
	(125, 32, 'Bahwa sesungguhnya Kemerdekaan itu ialah hak segala bangsa dan oleh sebab itu, maka penjajahan di atas dunia harus dihapuskan, karena tidak sesuai dengan perikemanusiaan dan perikeadilan', 0, NULL, NULL),
	(126, 32, 'Dan perjuangan pergerakan kemerdekaan Indonesia telah sampailah kepada saat yang berbahagia dengan selamat sentosa mengantarkan rakyat Indonesia ke depan pintu gerbang kemerdekaan Negara Indonesia, yang merdeka, bersatu, berdaulat, adil dan makmur.', 0, NULL, NULL),
	(127, 32, 'Atas berkat rakhmat Allah Yang Maha Kuasa dan dengan didorongkan oleh keinginan luhur, supaya berkehidupan kebangsaan yang bebas, maka rakyat Indonesia menyatakan dengan ini kemerdekaannya.', 0, NULL, NULL),
	(128, 32, 'Kemudian daripada itu untuk membentuk suatu Pemerintah Negara Indonesia yang melindungi segenap bangsa Indonesia dan seluruh tumpah darah Indonesia dan untuk memajukan kesejahteraan umum, mencerdaskan kehidupan bangsa, dan ikut melaksanakan ketertiban dun', 1, NULL, NULL),
	(129, 33, 'Bahwa sesungguhnya Kemerdekaan itu ialah hak segala bangsa dan oleh sebab itu, maka penjajahan di atas dunia harus dihapuskan, karena tidak sesuai dengan perikemanusiaan dan perikeadilan', 0, NULL, NULL),
	(130, 33, 'Dan perjuangan pergerakan kemerdekaan Indonesia telah sampailah kepada saat yang berbahagia dengan selamat sentosa mengantarkan rakyat Indonesia ke depan pintu gerbang kemerdekaan Negara Indonesia, yang merdeka, bersatu, berdaulat, adil dan makmur.', 1, NULL, NULL),
	(131, 33, 'Atas berkat rakhmat Allah Yang Maha Kuasa dan dengan didorongkan oleh keinginan luhur, supaya berkehidupan kebangsaan yang bebas, maka rakyat Indonesia menyatakan dengan ini kemerdekaannya.', 0, NULL, NULL),
	(132, 33, 'Kemudian daripada itu untuk membentuk suatu Pemerintah Negara Indonesia yang melindungi segenap bangsa Indonesia dan seluruh tumpah darah Indonesia dan untuk memajukan kesejahteraan umum, mencerdaskan kehidupan bangsa, dan ikut melaksanakan ketertiban dun', 0, NULL, NULL),
	(133, 34, 'Bahwa sesungguhnya Kemerdekaan itu ialah hak segala bangsa dan oleh sebab itu, maka penjajahan di atas dunia harus dihapuskan, karena tidak sesuai dengan perikemanusiaan dan perikeadilan', 0, NULL, NULL),
	(134, 34, 'Dan perjuangan pergerakan kemerdekaan Indonesia telah sampailah kepada saat yang berbahagia dengan selamat sentosa mengantarkan rakyat Indonesia ke depan pintu gerbang kemerdekaan Negara Indonesia, yang merdeka, bersatu, berdaulat, adil dan makmur.', 0, NULL, NULL),
	(135, 34, 'Atas berkat rakhmat Allah Yang Maha Kuasa dan dengan didorongkan oleh keinginan luhur, supaya berkehidupan kebangsaan yang bebas, maka rakyat Indonesia menyatakan dengan ini kemerdekaannya.', 1, NULL, NULL),
	(136, 34, 'Kemudian daripada itu untuk membentuk suatu Pemerintah Negara Indonesia yang melindungi segenap bangsa Indonesia dan seluruh tumpah darah Indonesia dan untuk memajukan kesejahteraan umum, mencerdaskan kehidupan bangsa, dan ikut melaksanakan ketertiban dun', 0, NULL, NULL),
	(137, 35, 'Bahwa sesungguhnya Kemerdekaan itu ialah hak segala bangsa dan oleh sebab itu, maka penjajahan di atas dunia harus dihapuskan, karena tidak sesuai dengan perikemanusiaan dan perikeadilan', 1, NULL, NULL),
	(138, 35, 'Dan perjuangan pergerakan kemerdekaan Indonesia telah sampailah kepada saat yang berbahagia dengan selamat sentosa mengantarkan rakyat Indonesia ke depan pintu gerbang kemerdekaan Negara Indonesia, yang merdeka, bersatu, berdaulat, adil dan makmur.', 0, NULL, NULL),
	(139, 35, 'Atas berkat rakhmat Allah Yang Maha Kuasa dan dengan didorongkan oleh keinginan luhur, supaya berkehidupan kebangsaan yang bebas, maka rakyat Indonesia menyatakan dengan ini kemerdekaannya.', 0, NULL, NULL),
	(140, 35, 'Kemudian daripada itu untuk membentuk suatu Pemerintah Negara Indonesia yang melindungi segenap bangsa Indonesia dan seluruh tumpah darah Indonesia dan untuk memajukan kesejahteraan umum, mencerdaskan kehidupan bangsa, dan ikut melaksanakan ketertiban dun', 0, NULL, NULL),
	(141, 36, 'C', 0, NULL, NULL),
	(142, 36, 'B', 0, NULL, NULL),
	(143, 36, 'A', 1, NULL, NULL),
	(144, 36, 'D', 0, NULL, NULL),
	(145, 37, 'Rafflesia', 1, NULL, NULL),
	(146, 37, 'Kembang Sepatu', 0, NULL, NULL),
	(147, 37, 'Anggrek', 0, NULL, NULL),
	(148, 37, 'Dahlia', 0, NULL, NULL),
	(153, 38, 'Malboro', 0, NULL, NULL),
	(154, 38, 'Malborough', 1, NULL, NULL),
	(155, 38, 'Malabro', 0, NULL, NULL),
	(156, 38, 'Malbro', 0, NULL, NULL),
	(157, 39, 'A', 0, NULL, NULL),
	(158, 39, 'B', 0, NULL, NULL),
	(159, 39, 'C', 0, NULL, NULL),
	(160, 39, 'D', 1, NULL, NULL),
	(161, 40, 'Tabot', 1, NULL, NULL),
	(162, 40, 'Pawai', 0, NULL, NULL),
	(163, 40, 'Ngaben', 0, NULL, NULL),
	(164, 40, 'Kenduri', 0, NULL, NULL),
	(165, 41, 'Danau Gedang', 0, NULL, NULL),
	(166, 41, 'Danau Tes', 0, NULL, NULL),
	(167, 41, 'Danau Nibung', 0, NULL, NULL),
	(168, 41, 'Danau Dendam', 1, NULL, NULL),
	(169, 42, 'A', 0, NULL, NULL),
	(170, 42, 'B', 1, NULL, NULL),
	(171, 42, 'C', 0, NULL, NULL),
	(172, 42, 'D', 0, NULL, NULL),
	(173, 43, 'A', 0, NULL, NULL),
	(174, 43, 'B', 0, NULL, NULL),
	(175, 43, 'C', 1, NULL, NULL),
	(176, 43, 'D', 0, NULL, NULL),
	(177, 44, 'A', 1, NULL, NULL),
	(178, 44, 'B', 0, NULL, NULL),
	(179, 44, 'C', 0, NULL, NULL),
	(180, 44, 'D', 0, NULL, NULL),
	(181, 45, 'Bika Ambon', 0, NULL, NULL),
	(182, 45, 'Pepes', 0, NULL, NULL),
	(183, 45, 'Rendang', 0, NULL, NULL),
	(184, 45, 'Pendap', 1, NULL, NULL),
	(185, 46, 'A', 0, NULL, NULL),
	(186, 46, 'B', 1, NULL, NULL),
	(187, 46, 'C', 0, NULL, NULL),
	(188, 46, 'D', 0, NULL, NULL),
	(189, 47, 'Bika Ambon', 0, NULL, NULL),
	(190, 47, 'Bolu Koja', 0, NULL, NULL),
	(191, 47, 'Martabak', 0, NULL, NULL),
	(192, 47, 'Bay Tat', 1, NULL, NULL),
	(193, 48, 'Jamik', 1, NULL, NULL),
	(194, 48, 'Baitul Izza', 0, NULL, NULL),
	(195, 48, 'Attaqwa', 0, NULL, NULL),
	(196, 48, 'Agung', 0, NULL, NULL),
	(197, 49, 'A', 1, NULL, NULL),
	(198, 49, 'B', 0, NULL, NULL),
	(199, 49, 'C', 0, NULL, NULL),
	(200, 49, 'D', 0, NULL, NULL),
	(201, 50, 'A', 0, NULL, NULL),
	(202, 50, 'B', 1, NULL, NULL),
	(203, 50, 'C', 0, NULL, NULL),
	(204, 50, 'D', 0, NULL, NULL);

-- Dumping structure for table unibfair.jawaban_users
CREATE TABLE IF NOT EXISTS `jawaban_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `pertanyaan_id` bigint(20) unsigned NOT NULL,
  `jawaban_id` bigint(20) unsigned NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_selesai` datetime NOT NULL,
  `total_waktu` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `skor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `jawaban_users_user_id_foreign` (`user_id`),
  KEY `jawaban_users_pertanyaan_id_foreign` (`pertanyaan_id`),
  KEY `jawaban_users_jawaban_id_foreign` (`jawaban_id`),
  CONSTRAINT `jawaban_users_jawaban_id_foreign` FOREIGN KEY (`jawaban_id`) REFERENCES `jawabans` (`id`),
  CONSTRAINT `jawaban_users_pertanyaan_id_foreign` FOREIGN KEY (`pertanyaan_id`) REFERENCES `pertanyaans` (`id`),
  CONSTRAINT `jawaban_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table unibfair.jawaban_users: ~0 rows (approximately)
REPLACE INTO `jawaban_users` (`id`, `user_id`, `pertanyaan_id`, `jawaban_id`, `waktu_mulai`, `waktu_selesai`, `total_waktu`, `created_at`, `updated_at`, `skor`) VALUES
	(1, 16, 1, 1, '2022-11-18 12:25:43', '2022-11-18 12:25:58', 15, NULL, NULL, 0),
	(2, 16, 10, 38, '2022-11-18 12:25:43', '2022-11-18 12:25:58', 15, NULL, NULL, 0),
	(3, 16, 17, 66, '2022-11-18 12:25:43', '2022-11-18 12:25:58', 15, NULL, NULL, 0),
	(4, 16, 19, 74, '2022-11-18 12:25:43', '2022-11-18 12:25:58', 15, NULL, NULL, 0),
	(5, 16, 22, 86, '2022-11-18 12:25:43', '2022-11-18 12:25:58', 15, NULL, NULL, 0),
	(6, 16, 26, 102, '2022-11-18 12:25:43', '2022-11-18 12:25:58', 15, NULL, NULL, 1),
	(7, 16, 27, 106, '2022-11-18 12:25:43', '2022-11-18 12:25:58', 15, NULL, NULL, 0),
	(8, 16, 29, 114, '2022-11-18 12:25:43', '2022-11-18 12:25:58', 15, NULL, NULL, 1),
	(9, 16, 31, 122, '2022-11-18 12:25:43', '2022-11-18 12:25:58', 15, NULL, NULL, 0),
	(10, 16, 33, 130, '2022-11-18 12:25:43', '2022-11-18 12:25:58', 15, NULL, NULL, 1),
	(11, 16, 34, 134, '2022-11-18 12:25:43', '2022-11-18 12:25:58', 15, NULL, NULL, 0),
	(12, 16, 36, 142, '2022-11-18 12:25:43', '2022-11-18 12:25:58', 15, NULL, NULL, 0),
	(13, 16, 37, 146, '2022-11-18 12:25:43', '2022-11-18 12:25:58', 15, NULL, NULL, 0),
	(14, 16, 38, 154, '2022-11-18 12:25:43', '2022-11-18 12:25:58', 15, NULL, NULL, 1),
	(15, 16, 39, 158, '2022-11-18 12:25:43', '2022-11-18 12:25:58', 15, NULL, NULL, 0),
	(16, 17, 1, 4, '2022-11-18 12:30:43', '2022-11-18 12:31:10', 27, NULL, NULL, 1),
	(17, 17, 10, 38, '2022-11-18 12:30:43', '2022-11-18 12:31:10', 27, NULL, NULL, 0),
	(18, 17, 17, 66, '2022-11-18 12:30:43', '2022-11-18 12:31:10', 27, NULL, NULL, 0),
	(19, 17, 19, 74, '2022-11-18 12:30:43', '2022-11-18 12:31:10', 27, NULL, NULL, 0),
	(20, 17, 22, 86, '2022-11-18 12:30:43', '2022-11-18 12:31:10', 27, NULL, NULL, 0),
	(21, 17, 26, 102, '2022-11-18 12:30:43', '2022-11-18 12:31:10', 27, NULL, NULL, 1),
	(22, 17, 27, 106, '2022-11-18 12:30:43', '2022-11-18 12:31:10', 27, NULL, NULL, 0),
	(23, 17, 29, 114, '2022-11-18 12:30:43', '2022-11-18 12:31:10', 27, NULL, NULL, 1),
	(24, 17, 31, 123, '2022-11-18 12:30:43', '2022-11-18 12:31:10', 27, NULL, NULL, 1),
	(25, 17, 33, 129, '2022-11-18 12:30:43', '2022-11-18 12:31:10', 27, NULL, NULL, 0),
	(26, 17, 34, 134, '2022-11-18 12:30:43', '2022-11-18 12:31:10', 27, NULL, NULL, 0),
	(27, 17, 36, 143, '2022-11-18 12:30:43', '2022-11-18 12:31:10', 27, NULL, NULL, 1),
	(28, 17, 37, 146, '2022-11-18 12:30:43', '2022-11-18 12:31:10', 27, NULL, NULL, 0),
	(29, 17, 38, 154, '2022-11-18 12:30:43', '2022-11-18 12:31:10', 27, NULL, NULL, 1),
	(30, 17, 39, 158, '2022-11-18 12:30:43', '2022-11-18 12:31:10', 27, NULL, NULL, 0);

-- Dumping structure for table unibfair.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table unibfair.migrations: ~8 rows (approximately)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_11_16_143100_create_pertanyaans_table', 1),
	(6, '2022_11_16_143309_create_jawabans_table', 1),
	(7, '2022_11_16_143839_create_jawaban_users_table', 1),
	(9, '2022_11_18_120857_create_nilais_table', 2);

-- Dumping structure for table unibfair.nilais
CREATE TABLE IF NOT EXISTS `nilais` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `nilai` int(11) NOT NULL,
  `total_waktu` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table unibfair.nilais: ~1 rows (approximately)
REPLACE INTO `nilais` (`id`, `user_id`, `nilai`, `total_waktu`, `created_at`, `updated_at`) VALUES
	(1, 16, 27, 15, '2022-11-18 05:25:58', '2022-11-18 05:25:58'),
	(2, 17, 40, 27, '2022-11-18 05:31:10', '2022-11-18 05:31:10');

-- Dumping structure for table unibfair.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table unibfair.password_resets: ~0 rows (approximately)

-- Dumping structure for table unibfair.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table unibfair.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table unibfair.pertanyaans
CREATE TABLE IF NOT EXISTS `pertanyaans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pertanyaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table unibfair.pertanyaans: ~15 rows (approximately)
REPLACE INTO `pertanyaans` (`id`, `pertanyaan`, `gambar`, `created_at`, `updated_at`) VALUES
	(1, 'Tahun berapa Provinsi Bengkulu terbentuk?', NULL, NULL, NULL),
	(10, 'Danau yang berada di kota bengkulu', NULL, NULL, NULL),
	(17, 'Lambang sila Kedua Pancasila', NULL, NULL, NULL),
	(19, 'Lambang sila Keempat Pancasila', NULL, NULL, NULL),
	(22, 'Salah satu Lembaga yang ada diunib yaitu LPTIK, LPTIK merupakan singkatan dari', NULL, NULL, NULL),
	(26, 'Isi Kalimat Sumpah Pemuda adalah?', NULL, NULL, NULL),
	(27, 'Sila Kelima Pancasila Berbunyi', NULL, NULL, NULL),
	(29, 'Sila Kedua Pancasila Berbunyi', NULL, NULL, NULL),
	(31, 'Sila Keempat Pancasila Berbunyi', NULL, NULL, NULL),
	(33, 'Pembukaan UUD 1945 alinea 2', NULL, NULL, NULL),
	(34, 'Pembukaan UUD 1945 alinea 3', NULL, NULL, NULL),
	(36, 'Manakah diantara gambar berikut yang merupakan bunga Khas Provinsi Bengkulu?', '36.png', NULL, NULL),
	(37, 'Nama Bunga yang ditunjukkan oleh gambar A adalah?', '36.png', NULL, NULL),
	(38, 'Nama Benteng pada gambar diatas adalah?', '38.png', NULL, NULL),
	(39, 'Benteng Provinsi Bengkulu ditunjukkan oleh gambar?', '39.png', NULL, NULL);

-- Dumping structure for table unibfair.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table unibfair.users: ~16 rows (approximately)
REPLACE INTO `users` (`id`, `nama`, `jenis_kelamin`, `pekerjaan`, `alamat`, `created_at`, `updated_at`) VALUES
	(1, 'say', 'L', 'tani', 'bengkulu', '2022-11-17 20:22:38', '2022-11-17 20:22:38'),
	(2, 'saya', 'L', 'saay', 'saya', '2022-11-17 21:14:19', '2022-11-17 21:14:19'),
	(3, 'saya', 'L', 'saay', 'sss', '2022-11-17 21:23:00', '2022-11-17 21:23:00'),
	(4, 'saya', 'L', 'saay', 'sss', '2022-11-17 21:24:14', '2022-11-17 21:24:14'),
	(5, 'saya', 'L', 'saay', 'sss', '2022-11-17 21:24:43', '2022-11-17 21:24:43'),
	(6, 'saya', 'L', 'saay', 'ssss', '2022-11-17 21:24:51', '2022-11-17 21:24:51'),
	(7, 'saya', 'L', 'saay', 'ssss', '2022-11-17 21:25:05', '2022-11-17 21:25:05'),
	(8, 'aaas', 'P', 'ss', 'ddd', '2022-11-17 21:27:27', '2022-11-17 21:27:27'),
	(9, 'aaas', 'P', 'ss', 'ddd', '2022-11-17 21:27:39', '2022-11-17 21:27:39'),
	(10, 'saya', 'L', 'saay', 'saya', '2022-11-17 21:33:27', '2022-11-17 21:33:27'),
	(11, 'haha', 'L', 'haha', 'haha', '2022-11-17 21:38:10', '2022-11-17 21:38:10'),
	(12, 'tes', 'L', 'tes', 'tes', '2022-11-17 21:41:45', '2022-11-17 21:41:45'),
	(13, 'hah', 'L', 'haha', 'ahdasdas', '2022-11-17 21:42:50', '2022-11-17 21:42:50'),
	(14, 'safroni', 'L', 'ntah', 'bengkulu', '2022-11-18 04:47:36', '2022-11-18 04:47:36'),
	(15, 'h', 'L', 'h', 'h', '2022-11-18 05:00:18', '2022-11-18 05:00:18'),
	(16, 'Safroni Aziz', 'L', '-', 'Bengkulu', '2022-11-18 05:25:38', '2022-11-18 05:25:38'),
	(17, 'Triska Mardiansyah', 'L', '-', 'bengkulu', '2022-11-18 05:30:39', '2022-11-18 05:30:39');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
