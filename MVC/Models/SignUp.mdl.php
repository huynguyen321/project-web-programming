<?php

 class SignUp extends Connect{
   public function createNewAcc($newUser){
       echo "OK";
    $sql = "insert into Users(`Name`,`UserName`,`Email`, `PhoneNumber`,`Address`, `Password`) 
    values('".$newUser['name']."','"
    .$newUser['username']."','"
    .$newUser['email']."','"
    .$newUser['phonenumber']."','"
    .$newUser['address']."','"
    .$newUser['password']."');";
    $this->conn->query($sql);
    echo "<script>alert('Tạo tài khoản thành công!')";
   }
}