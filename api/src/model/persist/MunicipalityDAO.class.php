<?php

require_once "../src/model/Municipality.class.php";
require_once "../src/model/persist/db.php";


class MunicipalityDAO {
    private $dbConnect;

    public function __construct() {
        $this->dbConnect = new db;
    }

    public function getAll() {
        $response = array();
        $sql = "SELECT * FROM municipalities";
        $response = $this->dbConnect->selectQuery($sql, $response);
        return $response->fetchAll();
    }
}

?>
