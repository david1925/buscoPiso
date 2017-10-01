<?php

require_once "../src/model/AutonomousCommunity.class.php";
require_once "../src/model/persist/db.php";
require_once "../src/model/ErrorLog.class.php";
require_once "../src/model/persist/ErrorLogDAO.class.php";


class AutonomousCommunityDAO {
    private $dbConnect;

    public function __construct() {
        $this->dbConnect = new db;
    }

    public function getAll() {
      try{
          $response = array();
          $sql = "SELECT * FROM autonomous_communities";
          $response = $this->dbConnect->selectQuery($sql, $response);
          return $response->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $pe){
          try{
              $error = new ErrorLog("","",$pe->getMessage());
              $errorDAO = new ErrorLogDAO();
              $errorDAO->InsertErrorLog($error);
            }catch(Exception $e){
              $errorDAO = new ErrorLogDAO();
              $errorDAO->WriteLogFile($e->getMessage());
            }
        }
    }
}

?>
