<?php

    require_once "../src/model/GaragesSearchUsers.class.php";
    require_once "../src/model/persist/db.php";
    require_once "../src/model/ErrorLog.class.php";
    require_once "../src/model/persist/ErrorLogDAO.class.php";


    class GaragesSearchUsersDAO {
        private $dbConnect;

        public function __construct() {
            $this->dbConnect = new db;
        }

        //Get all rows from garagesSearchUser
        public function getAll() {
            try {
                $response = array();
                $sql = "SELECT * FROM garages_search_users";
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


        //Get a row from garagesSearchUser by Id
        public function getGaragesSearchUsersById($officesSearchUsers) {
            try {
                $response = array($officesSearchUsers->getGaragesId());
                $sql = "SELECT * FROM garages_search_users WHERE garages_search_users.idgarages=?";
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


        //Insert a row in garagesSearchUser
        public function insert($garagesSearchUsers) {
            try {
                $response = array($garagesSearchUsers->getPrice(),$garagesSearchUsers->getPublicationDate(),NULL,$garagesSearchUsers->getTypeOfContractId(),$garagesSearchUsers->getMunicipalityId(),$garagesSearchUsers->getProvinceId(),$garagesSearchUsers->getUserId());
                print_r($response);
                $sql = "INSERT INTO garages_search_users (price,publication_date,garages_features_idgarages_features,type_of_contract_idtype_of_contract,municipalities_idmunicipalities,provinces_idprovinces,users_users_id_user) VALUES (?,?,?,?,?,?,?);";
                $response = $this->dbConnect->selectQuery($sql, $response);
                return $response;
                //echo "Hasta el DAO se llega";
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