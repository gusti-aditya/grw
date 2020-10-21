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

-- Dumping structure for table giriwangi_village_db.tb_r_booking_payment
CREATE TABLE IF NOT EXISTS `tb_r_booking_payment` (
  `PAYMENT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `BOOKING_ID` int(11) DEFAULT 0,
  `PAYMENT_METHOD` varchar(50) DEFAULT NULL,
  `AMOUNT` bigint(20) DEFAULT NULL,
  `PAYMENT_DATE` date DEFAULT NULL,
  `DUE_DATE` date DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`PAYMENT_ID`),
  KEY `FK__tb_r_booking` (`BOOKING_ID`),
  CONSTRAINT `FK__tb_r_booking` FOREIGN KEY (`BOOKING_ID`) REFERENCES `tb_r_booking` (`BOOKING_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
