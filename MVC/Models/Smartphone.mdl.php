<?php

 class Smartphone extends Connect{
    // abstract set method
    // public function setNameProduct();
    // public function setPriceProduct();
    // public function setDiscountProduct();
    // abstract get method
    public function getAllSmartphone(){
        $sql = "select * from viewSmartphone;";
        return $this->conn->query($sql);

    }

    // public function getPriceProduct();
    // public function getDiscountProduct();
}