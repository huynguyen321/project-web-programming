<?php
class Smartphone extends Connect
{
    public function getAllSmartphone()
    {
        $sql = "SELECT * from Access;";
        return $this->conn->query($sql);
    }
}