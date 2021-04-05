<?php

class SignUp extends Connect
{
  public function createNewAcc($newUser)
  {
    $sql = "insert into Users(`Name`,`UserName`,`Email`, `PhoneNumber`,`Address`, `Password`) 
    values('" . $newUser['name'] . "','"
      . $newUser['username'] . "','"
      . $newUser['email'] . "','"
      . $newUser['phonenumber'] . "','"
      . $newUser['address'] . "','"
      . $newUser['password'] . "');";
    $this->conn->query($sql);
  }
  public function checkUserName($newUser)
  {
    $sql = "select UserName from Users where UserName = '" . $newUser['username'] . "'";
    $result = $this->conn->query($sql);
    if ($result->num_rows > 0) {
      return true;
    }
    return false;
  }
}
