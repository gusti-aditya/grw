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

-- Dumping structure for procedure giriwangi_village_db.login_checkEmail
DELIMITER //
CREATE PROCEDURE `login_checkEmail`(
	IN userEmail VARCHAR(100), -- inputed email address, pre-verified as valid.
	OUT isEmailOK INT(11) -- Return 0 (Not found) UserID (Found).
)
BEGIN
DECLARE uID INT(11);
# Get the ID of any active user with the entered email address. Return 1 if you find it, 0 if you do not.
SELECT `user_table`.`usr_id` INTO uID FROM `giriwangi_village_db`.`user_table` WHERE userEmail = `user_table`.`usr_email` LIMIT 1;
	CASE uID WHEN uID > 0 THEN
		SET isEmailOK = uID;
	ELSE
		SET isEmailOK = 0;
	END CASE ;
END//
DELIMITER ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
