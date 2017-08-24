CREATE PROCEDURE `expiredUsers` ()
BEGIN
	SELECT * FROM users
    WHERE users.users_id_user!=1
END
