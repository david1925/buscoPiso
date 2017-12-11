<?php
    class db{
        // Properties
        private $dbhost = 'localhost';
        private $dbuser = 'root';
        private $dbpass = 'root';
        private $dbname = 'buscopiso';
        // Connect
        public function connect(){
            $mysql_connect_str = "mysql:host=$this->dbhost;dbname=$this->dbname";
            $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
            );
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConnection;
        }


        public function selectQuery($sql, $vector) {
        //select
        if ($this->connect()) {
            $sentencia = $this->connect()->prepare($sql);
            $sentencia->execute($vector);
            //$this->disconnect();
        }else {
                $sentencia = null;
        }

            return $sentencia;
        }

        public function execution($sql,$vector) {
        if ($this->connect()) {
            $this->stmt = $this->connect()->prepare($sql);
            $this->stmt->execute($vector);
        } else {
            $this->stmt = null;
        }
        return $this->stmt;
    }
}
