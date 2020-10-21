-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table giriwangi_village_db.tb_m_blog: ~2 rows (approximately)
DELETE FROM `tb_m_blog`;
/*!40000 ALTER TABLE `tb_m_blog` DISABLE KEYS */;
INSERT INTO `tb_m_blog` (`ID`, `URL`, `DATE`, `STATUS`, `CONTENT`, `CREATED_BY`, `CREATED_DT`, `UPDATED_BY`, `UPDATED_DT`, `TITLE`, `IMAGE`) VALUES
	(1, '', '2020-10-09', 'SHOW', '', 'rama', '2020-10-09 00:00:00', '', '0000-00-00 00:00:00', 'Test berita', 'panel2.png'),
	(2, '', '2020-10-09', 'SHOW', '', 'rama', '2020-10-09 00:00:00', '', '0000-00-00 00:00:00', 'Test berita 2', 'panel2.png'),
	(3, '', '2020-10-10', 'SHOW', '', 'rama', '2020-10-10 00:00:00', '', '0000-00-00 00:00:00', 'Test berita 3', 'panel1.png');
/*!40000 ALTER TABLE `tb_m_blog` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
