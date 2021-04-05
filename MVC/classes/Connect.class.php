<?php
class Connect
{
    private $host = "localhost";
    private $user = 'root';
    private $pwd = "";
    private $dbName;
    private $connection;

    public function __construct($dbName)
    {
        $this->setDBName($dbName);
    }

    public function setDBName($dbName)
    {
        $this->dbName = $dbName;
    }

    public function createConnect()
    {
        $this->connection = new mysqli($this->host, $this->user, $this->pwd, $this->dbName);
        // Check connection
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function useConnect()
    {
        if (!($this->connection->connect_error)) {
            return $this->connection;
        }
    }

    public function closeConnect()
    {
        if (!($this->connection->connect_error)) {
            $this->connection->close();
        }
    }
}
