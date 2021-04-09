<?php
class Users extends Connect
{
    public function getAllUser()
    {
        $sql = "SELECT * from Users;";
        return $this->conn->query($sql);
    }
    public function getOneUser($username)
    {
        $sql = "SELECT * from Users where userName = '".$username."';";
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
        $sql = "select UserName,Password,Name,IDuser,Blocked from Users
       where userName = '" . $user['username'] . "'
       and Password = '" . $user['password'] . "';";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if($row['Blocked'] == 1){
                    echo "<script>alert('Tài khoản của bạn đã bị khóa!\nVui lòng liên lạc với admin để mở lại!');</script>";
                    return false;
                }else{
                    $_SESSION['User'] = $row;
                    return true;
                }
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
        unset($_SESSION['DetailCart']);
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
