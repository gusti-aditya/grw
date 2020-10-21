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

-- Dumping structure for procedure giriwangi_village_db.login_checkPass
DELIMITER //
CREATE PROCEDURE `login_checkPass`(
	IN userEmail VARCHAR(100), -- The email address entered on the login page.
	OUT passwordHash VARCHAR(255), -- Stored 1-way encrypted password for comparison in PHP.
	OUT firstName VARCHAR(50), -- First Name
	OUT lastName VARCHAR(50), -- Last Name
	OUT userId INT(11) -- user ID assigned my MySQL on creation (PRIMARY, AUTO_INCREMENT).
)
BEGIN
	# Select each OUT variable individually using the pre-verified email address as the reference.
	SELECT `user_table`.`usr_pass` INTO passwordHash FROM `giriwangi_village_db`.`user_table` WHERE userEmail = `user_table`.`usr_email` LIMIT 1;
	SELECT `user_table`.`usr_fname` INTO firstName FROM `giriwangi_village_db`.`user_table` WHERE userEmail = `user_table`.`usr_email` LIMIT 1;
	SELECT `user_table`.`usr_lname` INTO lastName FROM `giriwangi_village_db`.`user_table` WHERE userEmail = `user_table`.`usr_email` LIMIT 1;
	SELECT `user_table`.`usr_id` INTO userId FROM `giriwangi_village_db`.`user_table` WHERE userEmail = `user_table`.`usr_email` LIMIT 1;
END//
DELIMITER ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
