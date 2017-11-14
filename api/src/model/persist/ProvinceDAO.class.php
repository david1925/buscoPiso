<?php

require_once "../src/model/Province.class.php";
require_once "../src/model/AutonomousCommunity.class.php";
require_once "../src/model/persist/db.php";
require_once "../src/model/ErrorLog.class.php";
require_once "../src/model/persist/ErrorLogDAO.class.php";


class ProvinceDAO {
    private $dbConnect;

    public function __construct() {
        $this->dbConnect = new db;
    }

    public function getAll() {
        try{
            $response = array();
            $sql = "SELECT * FROM provinces";
            $response = $this->dbConnect->selectQuery($sql, $response);
            return $response->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $pe){
          try{
              $class = get_class($this);
              $function = __FUNCTION__;
              $error = new ErrorLog("","",$pe->getMessage(),$class,$function);
              $errorDAO = new ErrorLogDAO();
              $errorDAO->InsertErrorLog($error);
            }catch(Exception $e){
              $errorDAO = new ErrorLogDAO();
              $errorDAO->WriteLogFile($error);
            }
        }
    }

    public function getAllFromAutonomousCommunity($id) {
      try{
          $response = array($id->getAutonomousCommunityId());
          $sql = "SELECT * FROM provinces WHERE provinces.autonomous_communities_idautonomous_communities = ?";
          $response = $this->dbConnect->selectQuery($sql, $response);
          return $response->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $pe){
          try{
              $class = get_class($this);
              $function = __FUNCTION__;
              $error = new ErrorLog("","",$pe->getMessage(),$class,$function);
              $errorDAO = new ErrorLogDAO();
              $errorDAO->InsertErrorLog($error);
            }catch(Exception $e){
              $errorDAO = new ErrorLogDAO();
              $errorDAO->WriteLogFile($error);
            }
        }
    }
}

?>
