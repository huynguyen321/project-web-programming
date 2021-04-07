<?php
class Users extends Connect
{
    public function getAllUser()
    {
        $sql = "SELECT * from Users;";
        return $this->conn->query($sql);
    }
    // Sign Up
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
    // Sign In
    public function checkUser($user)
    {
        $sql = "select UserName,Password,Name,IDuser from Users
       where userName = '" . $user['username'] . "'
       and Password = '" . $user['password'] . "';";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $_SESSION['User'] = $row;
                return true;
            }
        }
        return false;
    }
    // Sign Out
    public function logOut()
    {
        unset($_SESSION['User']);
        unset($_SESSION['ProducInCart']);
        unset($_SESSION['Cart']);
    }
}
