<?php

class AccessLogDAO {
    private $dbConnect;

    public function __construct() {
        $this->dbConnect = new db;
    }

    public function getAll() {
        $response = array();
        $sql = "SELECT * FROM access_log";
        $response = $this->dbConnect->selectQuery($sql, $response);
        return $response->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getErrorById($error) {
        $response = array($error->getErrorId());
        $sql = "SELECT * FROM access_log WHERE access_log.idaccess_log=?;";
        $response = $this->dbConnect->selectQuery($sql, $response);
        return $response->fetchAll(PDO::FETCH_ASSOC);
    }

    public function InsertAccessLog($error) {
        $response = array($error->getIp(),$error->getClass(),$error->getMethod());
        $sql = "INSERT INTO access_log  (ip,class,method) VALUES(?,?,?);";
        $response = $this->dbConnect->selectQuery($sql, $response);        
    }
}

?>
