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

-- Dumping structure for table giriwangi_village_db.tb_r_booking_progess
CREATE TABLE IF NOT EXISTS `tb_r_booking_progess` (
  `PROGRESS_ID` int(11) NOT NULL,
  `BOOKING_ID` int(11) DEFAULT NULL,
  `PROGRESS_NAME` varchar(50) DEFAULT NULL,
  `DATE` date DEFAULT NULL,
  `IMAGE_FILE` char(100) DEFAULT NULL,
  PRIMARY KEY (`PROGRESS_ID`),
  KEY `FK__tb_r_booking_tb_r_booking_progress` (`BOOKING_ID`),
  CONSTRAINT `FK__tb_r_booking_tb_r_booking_progress` FOREIGN KEY (`BOOKING_ID`) REFERENCES `tb_r_booking` (`BOOKING_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
