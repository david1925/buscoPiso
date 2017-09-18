<?php

require_once "../src/model/Floor.class.php";
require_once "../src/model/persist/db.php";


class FloorDAO {
    private $dbConnect;

    public function __construct() {
        $this->dbConnect = new db;
    }

    public function getFeatures($estate) {
        $response = array();
        $sql = "SELECT * FROM $estate";
        $response = $this->dbConnect->selectQuery($sql, $response);
        return $response->fetchAll();
    }
}

?>
