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

        $user = $this->Model('Users');

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
            $user = $this->Model('Users');
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
            'username' => $_POST['usernameSignUp'],
            'password' => md5($_POST['pwdSignUp'])
        ];

        $_SESSION['Cart'] = 0;

        $check = $this->Model('Users');

        if ($check->checkUser($user)) {
            echo "<script>alert('Đăng nhập thành công!');
            window.location.assign('http://huysmartphone.xyz');</script>";
        } else {
            echo "<script>alert('Đăng nhập thất bại! Sai tên đăng nhập hoặc mật khẩu!');
            window.location.assign('http://huysmartphone.xyz')</script>";
        }
    }
    public function SignOut()
    {
        $signOut = $this->Model('Users');
        $signOut->logOut();
        echo "<script>window.location.assign('http://huysmartphone.xyz')</script>";
    }
    public function blockUser()
    {
        $user = func_get_args();
        $signOut = $this->Model('Users');
        $signOut->block($user[0], $user[1]);
        if ($user[1] == 0) {
            echo "<script>alert('Block người dùng có IDuser = $user[0] thành công')</script>";
        } else echo "<script>alert('Mở Block người dùng có IDuser = $user[0] thành công')</script>";
        echo "<script>window.location.assign('http://huysmartphone.xyz/admin/')</script>";
    }
}
