<?php

class UsersDAO {
    private $dbConnect;
    public function __construct() {
        $this->dbConnect = new db;
    }

    public function getAll() {
        $class = get_class($this);
        $function = __FUNCTION__;
        try {
          $response = array();
          $sql = "SELECT * FROM users";
          $response = $this->dbConnect->selectQuery($sql, $response);          
          $accessLog = new AccessLog("","",$_SERVER['REMOTE_ADDR'],$class,$function);
          $accessLogDao = new AccessLogDAO();
          $accessLogDao->InsertAccessLog($accessLog);
          return $response->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $pe){
          try{
              $error = new ErrorLog("","",$pe->getMessage(),$class,$function);
              $errorDAO = new ErrorLogDAO();
              $errorDAO->InsertErrorLog($error);
            } catch (Exception $e){
              $errorDAO = new ErrorLogDAO();
              $errorDAO->WriteLogFile($error);
            }
        }
    }

    public function getUser($user) {
        $class = get_class($this);
        $function = __FUNCTION__;
        try {
          $response = array($user->getUserId());
          $sql = "SELECT * FROM users WHERE users.users_id_user=?";
          $response = $this->dbConnect->selectQuery($sql, $response);          
          $accessLog = new AccessLog("","",$_SERVER['REMOTE_ADDR'],$class,$function);
          $accessLogDao = new AccessLogDAO();
          $accessLogDao->InsertAccessLog($accessLog);
          return $response->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $pe){
          try{
              $error = new ErrorLog("","",$pe->getMessage(),$class,$function);
              $errorDAO = new ErrorLogDAO();
              $errorDAO->InsertErrorLog($error);
            } catch (Exception $e){
              $errorDAO = new ErrorLogDAO();
              $errorDAO->WriteLogFile($error);
            }
        }
    }

    public function Login($user) {
      $class = get_class($this);
      $function = __FUNCTION__;
      try {
        $response = array(
            $user->getEmail(),
            $user->getPassword()
        );
        $sql = "SELECT users_id_user, users_name, users_firstname, users_lastname, users_email,
                       users_phone, floor_description, state, last_login, groups_groups_id_group,
                       business_office_idoffice, additional_features_users_idadditional_features_users
                FROM users
                WHERE users_email    = ?
                  AND users_password = md5(?)
                  AND state          = 1";
        $response = $this->dbConnect->selectQuery($sql, $response);
        $accessLog = new AccessLog("","",$_SERVER['REMOTE_ADDR'],$class,$function);
        $accessLogDao = new AccessLogDAO();
        $accessLogDao->InsertAccessLog($accessLog);
        return $response->fetchAll(PDO::FETCH_ASSOC);
      } catch (PDOException $pe){
        try {
          $error = new ErrorLog("","",$pe->getMessage());
          $errorDAO = new ErrorLogDAO();
          $errorDAO->InsertErrorLog($error);
        } catch (Exception $e){
          $errorDAO = new ErrorLogDAO();
          $errorDAO->WriteLogFile($error);
        }
      }
    }

    public function registerUser($user) {
        try{
          $response = array($user->getName(),$user->getFirstname(),$user->getLastname(),$user->getEmail(),$user->getPassword(),$user->getPhone());
          print_r($response);
          $sql = "INSERT INTO users (users_name,users_firstname,users_lastname,users_email,users_password,users_phone,floor_description,state,groups_groups_id_group) VALUES (?,?,?,?,md5(?),?,'',0,2);";
          $result = $this->dbConnect->selectQuery($sql, $response);
          return $result;
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

    public function checkEmailRegisterUser($user) {
        try{
          $response = array($user->getEmail());
          $sql = "SELECT users.users_email FROM users WHERE users.users_email=?;";
          $result = $this->dbConnect->selectQuery($sql, $response);
          return $result->fetchAll(PDO::FETCH_ASSOC);
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

    public function checkPhoneRegisterUser($user) {
        try{
          $response = array($user->getPhone());
          $sql = "SELECT users.users_phone FROM users WHERE users.users_phone=?;";
          $result = $this->dbConnect->selectQuery($sql, $response);
          return $result->fetchAll(PDO::FETCH_ASSOC);
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


    public function selectLastInsertedUser() {
        try{
            $response = array();
            $sql = "SELECT * FROM users ORDER BY users.users_id_user DESC LIMIT 1;";
            $result = $this->dbConnect->selectQuery($sql, $response);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $pe){
            try{
                $class = get_class($this);
                $function = __FUNCTION__;
                $error = new ErrorLog("","",$pe->getMessage(),$class,$function);
                $errorDAO = new ErrorLogDAO();
                $errorDAO->InsertErrorLog($error);
            }
            catch(Exception $e){
                $errorDAO = new ErrorLogDAO();
                $errorDAO->WriteLogFile($error);
            }
        }
    }

}
?>
