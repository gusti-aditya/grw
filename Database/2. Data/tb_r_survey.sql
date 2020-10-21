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

-- Dumping data for table giriwangi_village_db.tb_r_survey: ~9 rows (approximately)
DELETE FROM `tb_r_survey`;
/*!40000 ALTER TABLE `tb_r_survey` DISABLE KEYS */;
INSERT INTO `tb_r_survey` (`ID`, `NAME`, `PHONE`, `DATE`, `REFERAL`, `CITY`, `REGION`, `COUNTRY`) VALUES
	(1, 'RIKO HASIANDO GOKNIPASU NAINGGOLAN', '000000', '2020-10-13', 'AML', NULL, NULL, NULL),
	(2, 'a', '0000', '2020-10-15', '', NULL, NULL, NULL),
	(3, 'Aditya gusti', '08155555555', '2020-10-22', '', '', '', ''),
	(4, 'Aditya gusti', '000000', '2020-10-29', '', '', '', ''),
	(5, 'Aditya gusti', '000000', '2020-10-29', '', '', '', ''),
	(6, 'Aditya gusti', '000000', '2020-10-29', '', '', '', ''),
	(7, 'RIKO HASIANDO GOKNIPASU NAINGGOLAN', '000000', '2020-10-31', '', '', '', ''),
	(8, 'RIKO HASIANDO GOKNIPASU NAINGGOLAN', '000000', '2020-10-24', '', '', '', ''),
	(9, 'RIKO HASIANDO GOKNIPASU NAINGGOLAN', '000000', '2020-10-30', '', 'Bogor', 'West Java', 'Indonesia');
/*!40000 ALTER TABLE `tb_r_survey` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
