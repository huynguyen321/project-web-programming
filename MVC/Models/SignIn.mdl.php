<?php

class SignIn extends Connect
{
  public function checkUser($user)
  {
    $sql = "select UserName,Password,Name,IDuser from Users
     where userName = '".$user['username']."'
     and Password = '".$user['password']."';";
    $result = $this->conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $_SESSION['User'] = $row;
        return true;
      }
    }
    return false;
  }
}
