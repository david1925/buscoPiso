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

        //Get all rows from floorsSearchUser
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

        //Get one row from floorsSearchUser by Id
        public function getFloorsSearchUsersById($floorSearchUsers) {
            try {
                $response = array($floorSearchUsers->getFloorsSearchUsersId());
                $sql = "SELECT * FROM floors_search_users WHERE floors_search_users.idfloors_search_users=?";
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

    //Insert a row in floorsSearchUser
        public function insert($floorsSearchUsers) {
            try {
                $response = array($floorsSearchUsers->getPrice(),$floorsSearchUsers->getSquareMeters(),$floorsSearchUsers->getBedrooms(),$floorsSearchUsers->getMunicipalitiesId(),$floorsSearchUsers->getTypeOfContractId(),$floorsSearchUsers->getProvinceId(),$floorsSearchUsers->getUserId());
                print_r($response);
                $sql = "INSERT INTO floors_search_users (price,square_meters,bedrooms,municipalities_idmunicipalities,type_of_contract_idtype_of_contract,provinces_idprovinces,users_users_id_user) VALUES (?,?,?,?,?,?,?);";
                $response = $this->dbConnect->selectQuery($sql, $response);
                return $response;
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