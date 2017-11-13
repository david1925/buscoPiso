<?php

require_once "../src/model/Floors.class.php";
require_once "../src/model/persist/db.php";
require_once "../src/model/ErrorLog.class.php";
require_once "../src/model/persist/ErrorLogDAO.class.php";


class FloorsDAO {
    private $dbConnect;

    public function __construct() {
        $this->dbConnect = new db;
    }

    public function getAll() {
      try{
          $response = array();
          $sql = "SELECT * FROM floors";
          $response = $this->dbConnect->selectQuery($sql, $response);
          return $response->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $pe){
          try{
              $error = new ErrorLog("","",$pe->getMessage());
              $class = get_class($this);
              $function = __FUNCTION__;
              $errorDAO = new ErrorLogDAO();
              $errorDAO->InsertErrorLog($error,$class,$function);
            }catch(Exception $e){
              $errorDAO = new ErrorLogDAO();
              $errorDAO->WriteLogFile($e->getMessage(),$class,$function);
            }
        }
    }

    public function getFloor($floor) {
      try{
          $response = array($floor->getFloorId());
          $sql = "SELECT * FROM floors WHERE floors.idfloors=?";
          $response = $this->dbConnect->selectQuery($sql, $response);
          return $response->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $pe){
          try{
              $error = new ErrorLog("","",$pe->getMessage());
              $class = get_class($this);
              $function = __FUNCTION__;
              $errorDAO = new ErrorLogDAO();
              $errorDAO->InsertErrorLog($error,$class,$function);
            }catch(Exception $e){
              $errorDAO = new ErrorLogDAO();
              $errorDAO->WriteLogFile($e->getMessage(),$class,$function);
            }
        }
    }

    public function getFeatures($estate) {
      try{
          $response = array();
          $sql = "SELECT * FROM $estate";
          $response = $this->dbConnect->selectQuery($sql, $response);
          return $response->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $pe){
          try{
              $error = new ErrorLog("","",$pe->getMessage());
              $class = get_class($this);
              $function = __FUNCTION__;
              $errorDAO = new ErrorLogDAO();
              $errorDAO->InsertErrorLog($error,$class,$function);
            }catch(Exception $e){
              $errorDAO = new ErrorLogDAO();
              $errorDAO->WriteLogFile($e->getMessage(),$class,$function);
            }
        }
    }
}

?>
