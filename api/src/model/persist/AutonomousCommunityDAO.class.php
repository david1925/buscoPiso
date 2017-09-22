<?php

require_once "../src/model/AutonomousCommunity.class.php";
require_once "../src/model/persist/db.php";


class AutonomousCommunityDAO {
    private $dbConnect;

    public function __construct() {
        $this->dbConnect = new db;
    }

    public function getAll() {
        $response = array();
        $sql = "SELECT * FROM autonomous_communities";
        $response = $this->dbConnect->selectQuery($sql, $response);
        return $response->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
