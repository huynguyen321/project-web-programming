<?php

class SignIn extends Connect
{
  public function checkUser($user)
  {
    $sql = "select UserName,Password,Name,IDuser from Users 
   where UserName = '" . $user['username'] . "'
   and UserName = '" . $user['password'] . "'";
    $result = $this->conn->query($sql);
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $_SESSION['User'] = $row;
      return true;
    }
    return false;
  }
}
