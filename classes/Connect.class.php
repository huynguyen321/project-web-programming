<?php
class Connect{
    private $host ="localhost";
    private $user='root';
    private $pwd="";
    private $dbName;

    public function __construct($dbName){
        $this->setDBName($dbName);
    }

    public function setDBName($dbName){
        $this->dbName = $dbName;
    }

    public function connect(){
        $conn= new mysqli($this->host, $this->user,$this->pwd,$this->dbName);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " .$conn->connect_error);
        } 
        return $conn;
    }
}