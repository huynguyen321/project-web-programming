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
            'password' => $_POST['password']
        ];
        print_r($newUser);
        $user = $this->Model('SignUp');
        
        $user->createNewAcc($newUser);

        header('Location: http://huysmartphone.xyz');
    }
}
