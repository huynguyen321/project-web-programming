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
        $this->View("Home", [
            "Page" => "Verification",
            "verification" => $sendEmail->SendEmail($newUser)
        ]);
    }

    public function CompleteSignUp()
    {
        $newUser = $_SESSION['newUser'];
        $user = $this->Model('SignUp');
        $user->createNewAcc($newUser);
        echo "<script>alert('Tạo tài khoản thành công!')
        window.location.assign('http://huysmartphone.xyz')</script>";
    }
}
