<?php

class Admin extends Controller
{
    public function Default()
    {
        $smartphone = $this->Model('Smartphone');
        $accessories = $this->Model('Accessories');
        $user = $this->Model('Users');
        $this->View("Admin", [
            "Page1" => "SliderAdmin",
            "Page2" => "SmartphoneAdmin",
            "Page3" => "AccessoriesAdmin",
            "Page4" => "UserAdmin",
            "Users" => $user->getAllUser(),
            "Smartphone" => $smartphone->getAllSmartphone(),
            "Accessories" => $accessories->getAllAccessories()
        ]);
    }
    public function addSmartphone()
    {

        $linkImage = '';
        // Nếu người dùng có chọn file để upload
        if (isset($_FILES['imgPhone'])) {
            // Nếu file upload không bị lỗi,
            // Tức là thuộc tính error > 0
            if ($_FILES['imgPhone']['error'] > 0) {
                echo "<script>alert('File Upload bị Lỗi');
                window.location.assign('http://huysmartphone.xyz/admin/')</script>";
            } else {
                // Upload file
                move_uploaded_file($_FILES['imgPhone']['tmp_name'], 'public/assets/img/product/smartphone/' . $_FILES['imgPhone']['name']);
                $linkImage = "http://huysmartphone.xyz/public/assets/img/product/smartphone/" . $_FILES['imgPhone']['name'];
                echo "<script>alert('Upload thành công');
                window.location.assign('http://huysmartphone.xyz/admin/')</script>";
            }
        } else {
            echo "<script>alert('Bạn chưa chọn file upload');
                window.location.assign('http://huysmartphone.xyz/admin/')</script>";
        }

        $newPhone = [
            'namePhone' => $_POST['namePhone'],
            'imgPhone' => $linkImage,
            'pricePhone' => $_POST['pricePhone'],
            'discountPhone' => $_POST['discountPhone'],
            'brandPhone' => $_POST['brandPhone'],
            'osPhone' => $_POST['osPhone'],
            'ramPhone' => $_POST['ramPhone'],
            'romPhone' => $_POST['romPhone'],
            'votePhone' => $_POST['votePhone'],
        ];

        $smartphone = $this->Model('Smartphone');
        $smartphone->addSmarphone($newPhone);
        echo "<script>alert('Thêm điện thoại thành công');
        window.location.assign('http://huysmartphone.xyz/admin/')</script>";
    }
    public function addAccessories()
    {
        $newAccessories = [
            'name' => $_POST['name'],
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'phonenumber' => $_POST['phonenumber'],
            'address' => $_POST['address'],
            'password' => md5($_POST['password'])
        ];
        $accessories = $this->Model('Accessories');
        $accessories->addSmarphone();
        echo "<script>alert('Thêm điện thoại thành công');
        window.location.assign('http://huysmartphone.xyz/admin/')</script>";
    }
}
