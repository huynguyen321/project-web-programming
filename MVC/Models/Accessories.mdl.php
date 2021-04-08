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
        $sql = "insert into Accessories(AccessoriesName,Image,Price,Discount) 
        values
        ('" . $newAccessories['nameAccessories'] . "',
        " . $newAccessories['brandAccessories'] . ",
        '" . $newAccessories['imgAccessories'] . "',
        " . $newAccessories['priceAccessories'] . ",
        " . $newAccessories['discountAccessories'] . ")";
        $this->conn->query($sql);
        $sql = "call updateIDaccessories;";
        $this->conn->query($sql);
    }

    public function updateAccessoriesDB($accessories)
    {
        if ($accessories['imgAccessories'] != "old") {
            $sql = "UPDATE Accessories set 
            AccessoriesName = '" . $accessories['nameAccessories'] . "',
            IDbrand = " . $accessories['brandAccessories'] . ",
            `Image`= '" . $accessories['imgAccessories'] . "',
            Price = " . $accessories['priceAccessories'] . ",
            Discount = " . $accessories['discountAccessories'] . ",
            where IDaccessories = " . $accessories['IDaccessories'] . ";";
        } else {
            $sql = "UPDATE Accessories set 
            AccessoriesName = '" . $accessories['nameAccessories'] . "',
            Price = " . $accessories['priceAccessories'] . ",
            Discount = " . $accessories['discountAccessories'] . ",
            where IDaccessories = " . $accessories['IDaccessories'] . ";";
        }

        $this->conn->query($sql);
        $sql = "call updateIDaccessories;";
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
