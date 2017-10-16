<?php

require_once "../src/model/Chats.class.php";
require_once "../src/model/persist/db.php";
require_once "../src/model/ErrorLog.class.php";
require_once "../src/model/persist/ErrorLogDAO.class.php";


class ChatsDAO {
    private $dbConnect;

    public function __construct() {
        $this->dbConnect = new db;
    }
}

?>
