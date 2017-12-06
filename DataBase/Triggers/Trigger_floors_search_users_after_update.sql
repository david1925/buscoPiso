CREATE DEFINER = CURRENT_USER TRIGGER `buscoPiso`.`floors_search_users_AFTER_UPDATE` AFTER UPDATE ON `floors_search_users` FOR EACH ROW
BEGIN
DECLARE municipalityId int;

DECLARE provinceId int;

DECLARE floors_search_users int;

SELECT floors_search_users.municipalities_idmunicipalities FROM floors_search_users
ORDER BY floors_search_users.idfloors_search_users DESC LIMIT 1 INTO municipalityId;

SELECT floors_search_users.provinces_idprovinces FROM floors_search_users
ORDER BY floors_search_users.idfloors_search_users DESC LIMIT 1 INTO provinceId;

SELECT floors_search_users.idfloors_search_users FROM floors_search_users
ORDER BY floors_search_users.idfloors_search_users DESC LIMIT 1 INTO floors_search_users;

IF OLD.municipalityId <> NEW.municipalityId THEN
    UPDATE floors_search_users
    SET floors_search_users.provinces_idprovinces=(SELECT municipalities.provinces_idprovinces FROM municipalities WHERE municipalities.idmunicipalities=floors_search_users)
    WHERE floors_search_users.idfloors_search_users=floors_search_users;
END IF;
END