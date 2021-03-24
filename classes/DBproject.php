<?php

class DBproject
{
    private $host = "localhost";
    private $user = "root";
    private $pwd = "123456";
    private $dbName = "smxartphone";

    protected function connect()
    {
        $data = 'mysql: host= ' . $this->host . ';dbName=' . $this->dbName;
        $pdo = new PDO($data, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
