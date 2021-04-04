<?php
require 'Connect.class.php';
class User{
    private $name;
    private $userName;
    private $email;
    private $phoneNumber;
    private $address;
    private $password;

    //construct
    function __construct($name, $userName, $email, $phoneNumber, $address, $password){
        $this->setName($name);
        $this->setUserName($userName);
        $this->setEmail($email);
        $this->setPhoneNumber($phoneNumber);
        $this->setAddress($address);
        $this->setPassword($password);
    }
    

    //function set
    public function setName($name){
        $this->name = $name;
    }

    public function setUserName($userName){
        $this->userName = $userName;
    }

    public function setEmail($email){
        
        $this->email = $email;
    }

    public function setPhoneNumber($phoneNumber){
        $this->phoneNumber = $phoneNumber;
    }

    public function setAddress($address){
        $this->address = $address;
    }

    public function setPassword($password){
        $this->password = $password;
    }
    
    //function get
    public function getName(){
        return $this->name;
    }
    public function getUserName(){
        return $this->userName;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPhoneNumber(){
        return $this->phoneNumber;
    }
    public function getAddress(){
        return $this->address;
    }
    public function getPassword(){
        return $this->password;
    }

    public function addUser(){
        $sql1 = "SELECT `UserName` FROM user WHERE UserName = 'this->getUserName()'"
        $sql = "INSERT INTO `user`(`Name`,`UserName`,`Email`, `PhoneNumber`,`Address`, `Password`) 
        values 
        ('".$this->getName().
        "','".$this->getUserName().
        "','".$this->getEmail().
        "','".$this->getPhoneNumber().
        "','".$this->getAddress().
        "','".$this->getPassword().
        "');";
        $conn = new Connect('project');
        $connect = $conn->connect();
        if ($connect->query($sql) === TRUE) {
            echo "<script>alert('You have created account successfully')</script>";
          } else {
            echo "<script>alert('User: " .$this->getUserName(). " already exist')</script>";
            
          }
          $connect->close();
          
    }

   

    public function Login($userName, $password){  
        $res = mysql_query("SELECT * FROM users WHERE emailid = '".$userName."' AND password = '".md5($password)."'");  
        $user_data = mysql_fetch_array($res);  
        //print_r($user_data);  
        $no_rows = mysql_num_rows($res);  
          
        if ($no_rows == 1)   
        {  
       
            $_SESSION['login'] = true;  
            $_SESSION['IDuser'] = $user_data['IDuser'];  
            $_SESSION['UserName'] = $user_data['UserName'];  
            $_SESSION['Password'] = $user_data['Password'];  
            return TRUE;  
        }  
        else  
        {  
            return FALSE;  
        }  
    }  
    public function isUserExist($userName){  
        $qr = mysql_query("SELECT * FROM users WHERE UserName = '".$userName."'");  
        echo $row = mysql_num_rows($qr);  
        if($row > 0){  
            return true;  
        } else {  
            return false;  
        }  
    }
      
}  




    
    

