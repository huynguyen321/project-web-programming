<?php

class Admin extends Controller
{
    public function Default()
    {
        $smartphone = $this->Model('Smartphone');
        $accessories = $this->Model('Accessories');
        $user = $this->Model('Users');
        $this->View("Admin", [
            "Page1" => "OrderAdmin",
            "Page2" => "SmartphoneAdmin",
            "Page3" => "AccessoriesAdmin",
            "Page4" => "UserAdmin",
            "Users" => $user->getAllUser(),
            "Smartphone" => $smartphone->getAllSmartphone(),
            "Accessories" => $accessories->getAllAccessories()
        ]);
    }
    // smartphone
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
                echo "<script>alert('Upload thành công');</script>";
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
            'votePhone' => floatval($_POST['votePhone']),
        ];

        $smartphone = $this->Model('Smartphone');
        $smartphone->addSmartphoneDB($newPhone);
        echo "<script>alert('Thêm điện thoại thành công');
        window.location.assign('http://huysmartphone.xyz/admin/')</script>";
    }

    public function updateSmartphone()
    {
        $linkImage = '';
        // Nếu người dùng có chọn file để upload
        if (isset($_FILES['imgUpPhone'])) {
            // Nếu file upload không bị lỗi,
            // Tức là thuộc tính error > 0
            if ($_FILES['imgUpPhone']['error'] > 0) {
                echo "<script>alert('File Upload bị Lỗi');
                window.location.assign('http://huysmartphone.xyz/admin/')</script>";
            } else {
                // Upload file
                move_uploaded_file($_FILES['imgUpPhone']['tmp_name'], 'public/assets/img/product/smartphone/' . $_FILES['imgUpPhone']['name']);
                $linkImage = "http://huysmartphone.xyz/public/assets/img/product/smartphone/" . $_FILES['imgUpPhone']['name'];
                echo "<script>alert('Upload thành công');</script>";
            }
        } else {
            $linkImage = "old";
        }

        $phone = [
            'IDphone' => $_POST['idUpPhone'],
            'namePhone' => $_POST['nameUpPhone'],
            'imgPhone' => $linkImage,
            'pricePhone' => intval($_POST['priceUpPhone']),
            'discountPhone' => intval($_POST['discountUpPhone']),
            'brandPhone' => intval($_POST['brandUpPhone']),
            'osPhone' => intval($_POST['osUpPhone']),
            'ramPhone' => intval($_POST['ramUpPhone']),
            'romPhone' => intval($_POST['romUpPhone']),
            'votePhone' => floatval($_POST['voteUpPhone']),
        ];

        $smartphone = $this->Model('Smartphone');
        $smartphone->updateSmartphoneDB($phone);
        echo "<script>alert('Cập nhật điện thoại thành công');
       window.location.assign('http://huysmartphone.xyz/admin/')</script>";
    }
    public function deleteSmartphone($id)
    {
        $smartphone = $this->Model('Smartphone');
        $smartphone->deleteSmartphoneDB($id);
        echo "<script>alert('Xoá điện thoại thành công');
       window.location.assign('http://huysmartphone.xyz/admin/')</script>";
    }




    // accessories
    public function addAccessories()
    {
        $linkImage = '';
        // Nếu người dùng có chọn file để upload
        if (isset($_FILES['imgAccessories'])) {
            // Nếu file upload không bị lỗi,
            // Tức là thuộc tính error > 0
            if ($_FILES['imgAccessories']['error'] > 0) {
                echo "<script>alert('File Upload bị Lỗi');
                window.location.assign('http://huysmartphone.xyz/admin/')</script>";
            } else {
                // Upload file
                move_uploaded_file($_FILES['imgAccessories']['tmp_name'], 'public/assets/img/product/accessories/' . $_FILES['imgAccessories']['name']);
                $linkImage = "http://huysmartphone.xyz/public/assets/img/product/accessories/" . $_FILES['imgAccessories']['name'];
                echo "<script>alert('Upload thành công');</script>";
            }
        } else {
            echo "<script>alert('Bạn chưa chọn file upload');
                window.location.assign('http://huysmartphone.xyz/admin/')</script>";
        }

        $newAccessories = [
            'nameAccessories' => $_POST['nameAccessories'],
            'imgAccessories' => $linkImage,
            'priceAccessories' => $_POST['priceAccessories'],
            'discountAccessories' => $_POST['discountAccessories'],
            'descriptionAccessories' => $_POST['descriptionAccessories']
        ];

        $accessories = $this->Model('Accessories');
        $accessories->addAccessoriesDB($newAccessories);
        echo "<script>alert('Thêm phụ kiện thành công');
        window.location.assign('http://huysmartphone.xyz/admin/')</script>";
    }

    public function updateAccessories()
    {
        $linkImage = '';
        // Nếu người dùng có chọn file để upload
        if (isset($_FILES['imgUpAccessories'])) {
            if ($_FILES['imgUpAccessories']['error'] > 0) {
                echo "<script>alert('File Upload bị Lỗi');
                window.location.assign('http://huysmartphone.xyz/admin/')</script>";
            } else {
                // Upload file
                move_uploaded_file($_FILES['imgUpAccessories']['tmp_name'], 'public/assets/img/product/accessories/' . $_FILES['imgUpAccessories']['name']);
                $linkImage = "http://huysmartphone.xyz/public/assets/img/product/smartphone/" . $_FILES['imgUpAccessories']['name'];
                echo "<script>alert('Upload thành công');</script>";
            }
        } else {
            $linkImage = "old";
        }

        $upAccessories = [
            'IDaccessories' => $_POST['idUpAccessories'],
            'nameAccessories' => $_POST['nameUpAccessories'],
            'imgAccessories' => $linkImage,
            'priceAccessories' => intval($_POST['priceUpAccessories']),
            'discountAccessories' => intval($_POST['discountUpAccessories']),
            'descriptionAccessories' => $_POST['descriptionUpAccessories'],
        ];

        $accessories = $this->Model('Accessories');
        $accessories->updateAccessoriesDB($upAccessories);
        echo "<script>alert('Cập nhật phụ kiện thành công');
      window.location.assign('http://huysmartphone.xyz/admin/')</script>";
    }
    public function deleteAccessories($id)
    {
        $accessories = $this->Model('Accessories');
        $accessories->deleteAccessoriesDB($id);
        echo "<script>alert('Xoá phụ kiện thành côngg thành công');
       window.location.assign('http://huysmartphone.xyz/admin/')</script>";
    }
}
