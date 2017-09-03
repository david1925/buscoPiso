<?php

require_once "../src/model/User.class.php";
require_once "../src/model/persist/db.php";


class UserDAO {
    private $dbConnect;

    public function __construct() {
        $this->dbConnect = new db;
    }

    public function getAll() {
        $response = array();
        $sql = "SELECT * FROM users";
        $response = $this->dbConnect->selectQuery($sql, $response);
        return $response->fetchAll();
    }
}

?>
