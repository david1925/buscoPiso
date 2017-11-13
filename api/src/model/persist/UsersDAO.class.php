<?php

require_once "../src/model/Users.class.php";
require_once "../src/model/persist/db.php";
require_once "../src/model/ErrorLog.class.php";
require_once "../src/model/persist/ErrorLogDAO.class.php";


class UsersDAO {
    private $dbConnect;

    public function __construct() {
        $this->dbConnect = new db;
    }

    public function getAll() {
        try{
          $response = array();
          $sql = "SELECT * FROM users";
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

    public function Login($user) {
        $response = array(
            $user->getEmail(),
            $user->getPassword()
        );

        $sql = "SELECT users_id_user, users_name, users_firstname, users_lastname, users_email,
                       users_password, users_phone, floor_description, state, last_login, groups_groups_id_group,
                       business_office_idoffice, additional_features_users_idadditional_features_users
                FROM users
                WHERE users_email    = ?
                  AND users_password = md5(?)
                  AND state          = 1";
        $response = $this->dbConnect->selectQuery($sql, $response);
        return $response->fetchAll(PDO::FETCH_ASSOC);
    }

    public function registerUser($user) {
      //echo "Hasta aquí funciona";
        try{
          echo "Por aquí paso";
          $response = array($user->getName(),$user->getFirstname(),$user->getLastname(),$user->getEmail(),$user->getPassword(),$user->getPhone());
          print_r($response);
          $sql = "INSERT INTO users (users_name,users_firstname,users_lastname,users_email,users_password,users_phone,floor_description,state,groups_groups_id_group) VALUES (?,?,?,?,md5(?),?,'',0,2);";
          //$sql = "SELECT * FROM users";
          //$response = array();
          $result = $this->dbConnect->selectQuery($sql, $response);
          return $result->fetchAll(PDO::FETCH_ASSOC);
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