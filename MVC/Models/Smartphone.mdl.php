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
    public function addSmartphoneDB($newSmartphone)
    {
        $sql = "insert into Smartphone(PhoneName,IDbrand,Image,IDram,IDrom,IDos,Price,Discount,Vote) 
        values
        ('" . $newSmartphone['namePhone'] . "',
        " . $newSmartphone['brandPhone'] . ",
        '" . $newSmartphone['imgPhone'] . "',
        " . $newSmartphone['ramPhone'] . ",
        " . $newSmartphone['romPhone'] . ",
        " . $newSmartphone['osPhone'] . ",
        " . $newSmartphone['pricePhone'] . ",
        " . $newSmartphone['discountPhone'] . ",
        " . $newSmartphone['votePhone'] . ")";
        $this->conn->query($sql);
        $sql = "call updateIDsmartphone;";
        $this->conn->query($sql);
    }

    public function updateSmartphoneDB($smartphone)
    {
        if ($smartphone['imgPhone'] != "old") {
            $sql = "UPDATE Smartphone set 
            PhoneName = '" . $smartphone['namePhone'] . "',
            IDbrand = " . $smartphone['brandPhone'] . ",
            `Image`= '" . $smartphone['imgPhone'] . "',
            IDram = " . $smartphone['ramPhone'] . ",
            IDrom= " . $smartphone['romPhone'] . ",
            IDos = " . $smartphone['osPhone'] . ",
            Price = " . $smartphone['pricePhone'] . ",
            Discount = " . $smartphone['discountPhone'] . ",
            Vote = " . $smartphone['votePhone'] . "
            where IDphone = " . $smartphone['IDphone'] . ";";
        } else {
            $sql = "UPDATE Smartphone set 
            PhoneName = '" . $smartphone['namePhone'] . "',
            IDbrand = " . $smartphone['brandPhone'] . ",
            IDram = " . $smartphone['ramPhone'] . ",
            IDrom= " . $smartphone['romPhone'] . ",
            IDos = " . $smartphone['osPhone'] . ",
            Price = " . $smartphone['pricePhone'] . ",
            Discount = " . $smartphone['discountPhone'] . ",
            Vote = " . $smartphone['votePhone'] . "
            where IDphone = " . $smartphone['IDphone'] . ";";
        }

        $this->conn->query($sql);
        $sql = "call updateIDsmartphone;";
        $this->conn->query($sql);
        $sql = "call updateViewSmartphone";
        $this->conn->query($sql);
    }

    public function deleteSmartphoneDB($idPhone)
    {
        $sql = "delete from Smartphone where IDphone = ".$idPhone.";";
        $this->conn->query($sql);
        $sql = "call updateIDsmartphone;";
        $this->conn->query($sql);
    }
}
