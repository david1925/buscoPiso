<?php

require_once "../src/model/Province.class.php";
require_once "../src/model/AutonomousCommunity.class.php";
require_once "../src/model/persist/db.php";


class ProvinceDAO {
    private $dbConnect;

    public function __construct() {
        $this->dbConnect = new db;
    }

    public function getAll() {
        $response = array();
        $sql = "SELECT * FROM provinces";
        $response = $this->dbConnect->selectQuery($sql, $response);
        return $response->fetchAll();
    }

    public function getAllFromAutonomousCommunity($id) {
        $response = array($id->getAutonomousCommunityId());
        $sql = "SELECT * FROM provinces WHERE provinces.autonomous_communities_idautonomous_communities = ?";
        $response = $this->dbConnect->selectQuery($sql, $response);
        return $response->fetchAll();
    }
}

?>
