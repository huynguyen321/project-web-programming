<?php  
     
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Dangnhap']))
    {  
        require_once 'signUp.class.php';
        $userName = $_POST['userName'];  
        $Password = $_POST['password']; 
        $user = new User($userName, $Password);
        $user ->Login($userName, $Password);  
        if ($user) {  
            // Registration Success  
             echo "<script>alert('Success')</script>";
        } else {  
            // Registration Failed  
            echo "<script>alert('Emailid / Password Not Match')</script>";  
        }  
    } 
 
    ?>