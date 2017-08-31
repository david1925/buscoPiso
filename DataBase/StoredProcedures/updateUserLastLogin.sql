DELIMITER //
CREATE PROCEDURE updateUserLastLogin (IN userId INT(10))
BEGIN
  UPDATE users
  SET users.last_login= current_timestamp()
  WHERE users.users_id_user = userId;
END //
DELIMITER ;
