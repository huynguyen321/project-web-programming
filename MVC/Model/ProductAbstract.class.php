<?php
abstract class Product{
    // abstract set method
    abstract public function setNameProduct();
    abstract public function setPriceProduct();
    abstract public function setDiscountProduct();
    // abstract get method
    abstract public function getNameProduct();
    abstract public function getPriceProduct();
    abstract public function getDiscountProduct();
}