<?php
class Accessories
{
    private $idAccessories;
    private $nameAccessories;
    private $price;
    private $discount;
    private $image;
    private $description;

    // method set
    public function setidAccessories($idAccessories)
    {
        $this->idAccessories = $idAccessories;
    }
    public function setnameAccessoriess($nameAccessories)
    {
        $this->nameAccessories = $nameAccessories;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    // method get
    public function getidAccessories($idAccessories)
    {
        return $this->idAccessories;
    }
    public function getnameAccessoriess($nameAccessories)
    {
        return $this->nameAccessories;
    }
    public function getPrice($price)
    {
        return $this->price;
    }
    public function getDiscount($discount)
    {
        return $this->discount;
    }
    public function getDescription($description)
    {
        return $this->description;
    }
}
