DELIMITER //
CREATE PROCEDURE expiredUsers ()
BEGIN
  UPDATE users
  SET users.state = 0
  WHERE users.last_login < date_sub(now(), interval 1 month);
END //
DELIMITER ;
