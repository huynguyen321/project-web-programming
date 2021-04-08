<?php
class Accessories extends Connect
{
    public function getAllAccessories()
    {
        $sql = "SELECT * from Accessories;";
        return $this->conn->query($sql);
    }

    public function showDetail($IDaccessories)
    {
        $sql = "SELECT * from Accessories where IDaccessories = $IDaccessories;";
        return $this->conn->query($sql);
    }

    public function addAccessoriesDB($newAccessories)
    {
        $sql = "INSERT into accessories(AccessoriesName,Price,Discount,`Image`,`Description`) 
        values
        ('" . $newAccessories['nameAccessories'] . "',
        " . $newAccessories['priceAccessories'] . ",
        " . $newAccessories['discountAccessories'] . ",
        '" . $newAccessories['imgAccessories'] . "',
        '" . $newAccessories['descriptionAccessories'] . "');";
        $this->conn->query($sql);
        $sql = "call updateIDaccessories;";
        $this->conn->query($sql);
    }

    public function updateAccessoriesDB($accessories)
    {
        if ($accessories['imgAccessories'] != "old") {
            $sql = "UPDATE accessories set 
            AccessoriesName = '" . $accessories['nameAccessories'] . "',
            Price = " . $accessories['priceAccessories'] . ",
            Discount = " . $accessories['discountAccessories'] . ",
            `Image`= '" . $accessories['imgAccessories'] . "',
            `Description` = '" . $accessories['descriptionAccessories'] . "',
            where IDaccessories = " . $accessories['IDaccessories'] . ";";
        } else {
            $sql = "UPDATE Accessories set 
            AccessoriesName = '" . $accessories['nameAccessories'] . "',
            Price = " . $accessories['priceAccessories'] . ",
            Discount = " . $accessories['discountAccessories'] . ",
            `Description` = '" . $accessories['descriptionAccessories'] . "'
            where IDaccessories = " . $accessories['IDaccessories'] . ";";
        }
        $this->conn->query($sql);
    }

    public function deleteAccessoriesDB($idAccessories)
    {
        $sql = "delete from Accessories where IDaccessories = " . $idAccessories . ";";
        $this->conn->query($sql);
        $sql = "call updateIDaccessories;";
        $this->conn->query($sql);
    }
}
