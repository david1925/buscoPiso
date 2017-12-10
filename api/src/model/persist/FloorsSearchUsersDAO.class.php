<?php

    require_once "../src/model/FloorsSearchUsers.class.php";
    require_once "../src/model/persist/db.php";
    require_once "../src/model/ErrorLog.class.php";
    require_once "../src/model/persist/ErrorLogDAO.class.php";


    class FloorsSearchUsersDAO {
        private $dbConnect;

        public function __construct() {
            $this->dbConnect = new db;
        }

        //Get all rows from floorsRegisterUser
        public function getAll() {
            try {
                $response = array();
                $sql = "SELECT * FROM floors_search_users";
                $response = $this->dbConnect->selectQuery($sql, $response);
                return $response->fetchAll(PDO::FETCH_ASSOC);
            }
            catch(PDOException $pe){
                try{
                    $class = get_class($this);
                    $function = __FUNCTION__;
                    $error = new ErrorLog("","",$pe->getMessage(),$class,$function);
                    $errorDAO = new ErrorLogDAO();
                    $errorDAO->InsertErrorLog($error);
                }
                catch (Exception $e){
                    $errorDAO = new ErrorLogDAO();
                    $errorDAO->WriteLogFile($error);
                }
            }
        }

        public function insert($floorsSearchUsers) {
            try {
                $response = array();
                $sql = "INSERT INTO floors_search_users (price,square_meters,bedrooms,municipalities_idmunicipalities,type_of_contract_idtype_of_contract,provinces_idprovinces,users_users_id_user) VALUES (?,?,?,?,?,?,?);";
                $response = $this->dbConnect->selectQuery($sql, $response);
                return $response->fetchAll(PDO::FETCH_ASSOC);
            }
            catch(PDOException $pe){
                try{
                    $class = get_class($this);
                    $function = __FUNCTION__;
                    $error = new ErrorLog("","",$pe->getMessage(),$class,$function);
                    $errorDAO = new ErrorLogDAO();
                    $errorDAO->InsertErrorLog($error);
                }
                catch (Exception $e){
                    $errorDAO = new ErrorLogDAO();
                    $errorDAO->WriteLogFile($error);
                }
            }
        }
    }

?>