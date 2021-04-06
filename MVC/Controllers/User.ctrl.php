<?php
class User extends Controller
{
    public function SignUp()
    {

        $newUser = [
            'name' => $_POST['name'],
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'phonenumber' => $_POST['phonenumber'],
            'address' => $_POST['address'],
            'password' => md5($_POST['password'])
        ];
        $user = $this->Model('SignUp');

        echo $user->checkUserName($newUser);
        if ($user->checkUserName($newUser)) {
            echo "<script>alert('Tên đăng nhập đã tồn tại!')
            window.location.assign('http://huysmartphone.xyz')</script>";
        } else echo "<script>alert('Đăng ký thành công!')</script>";
        $sendEmail = $this->Model('SendEmail');
        $_SESSION['newUser'] = $newUser;
        $_SESSION['verification'] = $sendEmail->SendEmail($newUser);
        $this->View("Home", [
            "Page" => "Verification"
        ]);
    }

    public function CompleteSignUp()
    {
        $verification = $_POST['verification'];
        $newUser = $_SESSION['newUser'];
        if ($verification ==  $_SESSION['verification']) {
            $user = $this->Model('SignUp');
            $user->createNewAcc($newUser);
            echo "<script>alert('Tạo tài khoản thành công!');
            window.location.assign('http://huysmartphone.xyz');</script>";
            session_unset('verification');
            session_unset('newUser');
        } else {
            $this->View("Home", [
                "Page" => "Verification",
                "AlertError" => "Sai mã xác thực, vui lòng nhập lại!"
            ]);
        }
    }

    public function SignIn()
    {
        $user = [
            'username' => $_POST['userName'],
            'password' => md5($_POST['password'])
        ];

        $check = $this->Model('SignIn'); 
       
        if ($check->checkUser($user) == true) {
            // echo "<script>alert('Đăng nhập thành công!');
            // window.location.assign('http://huysmartphone.xyz');</script>";
            
        } 
        echo "<script>alert('Đăng nhập thất bại!\nSai tên đăng nhập hoặc mật khẩu!');
            window.location.assign('http://huysmartphone.xyz')</script>";
    }
    public function SignOut()
    {
        $signOut = $this->Model('SignOut');
        $signOut->logOut();
        $smartphone = $this->Model('Smartphone');
        $accessories = $this->Model('Accessories');
        $this->View("Home", [
            "Page1" => "Smartphone",
            "Page2" => "Accessories",
            "Smartphone" => $smartphone->getAllSmartphone(),
            "Accessorie" => $accessories->getAllAccessories()
        ]);
    }
}
