<?php

require_once "../src/model/User.class.php";
require_once "../../config/db.php";


class UserDAO {
    //put your code here
    private $dbConnect;

    public function __construct() {
        $this->dbConnect = new db;
    }

    public function getUsers() {
        $response = array();
        $sql = "SELECT * FROM users";
        $response = $this->dbConnect->selectQuery($sql, $response);
        return $response->fetchAll();
    }
}
