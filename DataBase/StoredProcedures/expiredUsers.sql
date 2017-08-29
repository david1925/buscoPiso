CREATE PROCEDURE `expiredUsers` ()
BEGIN
	UPDATE users 
	SET users.last_login= current_timestamp()
	WHERE users.users_id_user=2;
END
