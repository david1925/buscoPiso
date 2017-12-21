<?php

    require_once "../src/model/OfficesSearchUsers.class.php";
    require_once "../src/model/persist/db.php";
    require_once "../src/model/ErrorLog.class.php";
    require_once "../src/model/persist/ErrorLogDAO.class.php";


    class OfficesSearchUsersDAO {
        private $dbConnect;

        public function __construct() {
            $this->dbConnect = new db;
        }

        //Get all rows from officesSearchUser
        public function getAll() {
            try {
                $response = array();
                $sql = "SELECT * FROM offices_search_users";
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

        //Get a row from officesSearchUser by Id
        public function getOfficesSearchUsersById($officesSearchUsers) {
            try {
                $response = array($officesSearchUsers->getOfficeSearchUsersId());
                $sql = "SELECT * FROM offices_search_users WHERE offices_search_users.idoffices_search_users=?";
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

        //Insert a row in officesSearchUser
        public function insert($officesSearchUsers) {
            try {
                $response = array($officesSearchUsers->getPrice(),$officesSearchUsers->getSquareMeters(),$officesSearchUsers->getPublicationDate(),$officesSearchUsers->getAddress(),$officesSearchUsers->getLocal(),$officesSearchUsers->getWarehouse(),$officesSearchUsers->getDistributionId(),$officesSearchUsers->getTypeOfBuildingId(),$officesSearchUsers->getOfficeFeaturesId(),$officesSearchUsers->getMunicipalitiesId(),$officesSearchUsers->getTypeOfContractId(),$officesSearchUsers->getProvinceId(),$officesSearchUsers->getUserId());
                print_r($response);
                $sql = "INSERT INTO offices_search_users (price,square_meters,publication_date,address,local,warehouse,distribution_iddistribution,type_of_building_idtype_of_building,office_features_idoffice_features,municipalities_idmunicipalities,type_of_contract_idtype_of_contract,provinces_idprovinces,users_users_id_user) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?);";
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