<?php
class Connect
{
    private $host = 'localhost';
    private $user = 'huy';
    private $pwd = '123456';
    private $dbName = "ourwebsite";
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pwd, $this->dbName);
        if ($this->conn->connect_error) {
            die("<script>Connection failed: alert('" . $this->conn->connect_error) . "')</script>";
        }
        $this->conn->query("SET NAMES 'utf-8'");
    }
}
