<?php

require_once "../src/model/ErrorLog.class.php";
require_once "../src/model/persist/db.php";


class ErrorLogDAO {
    private $dbConnect;

    public function __construct() {
        $this->dbConnect = new db;
    }

    public function getAll() {
        $response = array();
        $sql = "SELECT * FROM error_log";
        $response = $this->dbConnect->selectQuery($sql, $response);
        return $response->fetchAll(PDO::FETCH_ASSOC);
    }

    public function InsertErrorLog($error,$class,$function) {
        $response = array($error->getError(),$class,$function);
        $sql = "INSERT INTO error_log  (error,class,function) VALUES(?,?,?);";
        $response = $this->dbConnect->selectQuery($sql, $response);
        return $response->fetchAll(PDO::FETCH_ASSOC);
    }

    public function WriteLogFile($error,$class,$function) {
      date_default_timezone_set('UTC');
      $date = date("Y-m-d H:i:s");
      $fp = fopen("../logs/errorLog.txt", "a");
        fwrite($fp,$date . ";;;;;;" . $error . ";;;;;;El error esta en la clase: " . $class . ";;;;;;El error esta en la funcion: " . $function."\r\n"."\r\n");
    }
}

?>
