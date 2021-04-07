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
                echo "OK";
                return true;
            }
        } else {
            echo "<script>alert('Đăng nhập thất bại!\nSai tên đăng nhập hoặc mật khẩu!');</script>";
            return false;
        }
    }
    // Sign Out
    public function logOut()
    {
        unset($_SESSION['User']);
        unset($_SESSION['ProducInCart']);
        unset($_SESSION['Cart']);
    }
    public function block($IDuser, $blockStatus)
    {
        if ($blockStatus == 0) {
            $sql = 'UPDATE Users
            SET Blocked= 1
            WHERE IDuser = ' . $IDuser . ';';
        } else {
            $sql = 'UPDATE Users
            SET Blocked= 0
            WHERE IDuser = ' . $IDuser . ';';
        }
        $result = $this->conn->query($sql);
        return $result;
    }
}
