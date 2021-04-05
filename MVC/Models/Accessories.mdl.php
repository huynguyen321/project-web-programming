<?php
class Accessories extends Connect{
    public function getAllAccessories(){
        $sql = "SELECT * from Accessories;";
        return $this->conn->query($sql);
    }

    public function showDetail($IDaccessories){
        $sql = "SELECT * from Accessories where IDaccessories = $IDaccessories;";
        return $this->conn->query($sql);
    }
}