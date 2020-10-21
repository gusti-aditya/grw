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

-- Dumping structure for table giriwangi_village_db.tb_r_booking
CREATE TABLE IF NOT EXISTS `tb_r_booking` (
  `BOOKING_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CODE` varchar(10) NOT NULL,
  `BUYER_ID` varchar(10) NOT NULL,
  `PAYMENT_TYPE` varchar(50) NOT NULL,
  `STATUS` varchar(10) NOT NULL,
  `BOOKING_DATE` date NOT NULL,
  PRIMARY KEY (`BOOKING_ID`),
  KEY `FK__tb_m_kavling` (`CODE`),
  KEY `FK__tb_m_buyer` (`BUYER_ID`),
  CONSTRAINT `FK__tb_m_buyer` FOREIGN KEY (`BUYER_ID`) REFERENCES `tb_m_buyer` (`BUYER_ID`),
  CONSTRAINT `FK__tb_m_kavling` FOREIGN KEY (`CODE`) REFERENCES `tb_m_kavling` (`CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
