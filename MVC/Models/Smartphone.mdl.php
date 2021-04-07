<?php

class Smartphone extends Connect
{
    public function getAllSmartphone()
    {
        $sql = "SELECT * from viewSmartphone;";
        return $this->conn->query($sql);
    }

    public function showDetail($IDsmartphone)
    {
        $sql = "SELECT * from viewSmartphone where IDphone = $IDsmartphone;";
        return $this->conn->query($sql);
    }
    public function getOneSmartphone($smartphone)
    {
        $sql = "SELECT * from viewSmartphone
         where IDphone = '$smartphone[0]'
         and Ram = '$smartphone[1]' and Rom = '$smartphone[2]';";
        return $this->conn->query($sql);
    }
    public function addSmarphone($newSmartphone){
        $sql = "insert into Smartphone(PhoneName,IDbrand,Image,IDram,IDrom,IDos,Price,Discount,Vote) 
        values
        ('".$newSmartphone['namePhone']."',
        ".$newSmartphone['brandPhone'].",
        '".$newSmartphone['imgPhone']."',
        ".$newSmartphone['ramPhone'].",
        ".$newSmartphone['romPhone'].",
        ".$newSmartphone['osPhone'].",
        ".$newSmartphone['pricePhone'].",
        ".$newSmartphone['discountPhone'].",
        ".$newSmartphone['votePhone'].")";
        $this->conn->query($sql);
        $sql = "call updateIDsmartphone;";
        $this->conn->query($sql);
    }
}
