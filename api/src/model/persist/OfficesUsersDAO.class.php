<?php

    require_once "../src/model/OfficesUsers.class.php";
    require_once "../src/model/persist/db.php";
    require_once "../src/model/ErrorLog.class.php";
    require_once "../src/model/persist/ErrorLogDAO.class.php";


    class OfficesUsersDAO {
        private $dbConnect;

        public function __construct() {
            $this->dbConnect = new db;
        }
    }

?>