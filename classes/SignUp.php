<?php

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['add']))
{
    require_once 'signUp.class.php';
    $name =$_POST['name'];
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $user = new User($name, $userName, $email, $phoneNumber, $address, $password);
    $user->addUser();
    

}