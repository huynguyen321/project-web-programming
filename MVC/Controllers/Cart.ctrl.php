<?php

class Cart extends Controller
{

    public function ShoppingCart()
    {
        if (isset($_SESSION['User'])) {
            $this->View("Cart", []);
        } else echo "<script>alert('Bạn phải đăng nhập để dùng chức năng này')</script>";
    }
    public function addToCartSmartphone( $idSmartphone)
    {
        if (isset($_SESSION['User'])) {
            if (isset($_POST['qtyPhone'])) {
                $_SESSION['Cart'] = intval($_POST['qtyPhone']) + intval($_SESSION['Cart']);
                if (isset($_SESSION['DetailCart'])) {
                    foreach ($_SESSION['DetailCart'] as $key) {
                        if ($_SESSION['DetailCart'][$key]['IDphone'] == intval( $idSmartphone)) {
                            $_SESSION['DetailCart'][$key]['QtyPhone'] = intval($_SESSION['DetailCart'][$key]['QtyPhone']) + intval($_POST['qtyPhone']);
                        } else {
                            $check = 1; //khong co san pham trung
                        }
                    }
                    if ($check == 1) {
                        $_SESSION['DetailCart'][] = [
                            'IDphone' =>  $idSmartphone,
                            'QtyPhone' => intval($_POST['qtyPhone'])
                        ];
                    }
                } else {
                    $_SESSION['DetailCart'][] = [
                        'IDphone' =>  $idSmartphone,
                        'QtyPhone' => intval($_POST['qtyPhone'])
                    ];
                }
            } else {
                $_SESSION['Cart'] = intval(1 + intval($_SESSION['Cart']));
                $_SESSION['DetailCart'][] = [
                    'IDphone' =>  $idSmartphone,
                    'QtyPhone' => 1
                ];
            }

            $addCart = $this->Model('Smartphone');
            $_SESSION['DetailCart'][]['Detail'] =  $addCart->getOneSmartphone($idSmartphone)->fetch_assoc();
           
        } else echo "<script>alert('Bạn phải đăng nhập để dùng chức năng này')</script>";
        print_r( $idSmartphone);

        echo "<script>window.location.assign('http://huysmartphone.xyz')</script>";

        //$_SESSION['ProducInCart'][] = ($addCart->getOneSmartphone($smartphone))->fetch_assoc();
        // print_r($_SESSION['ProducInCart']);
    }
    public function BuyPhone($idPhone)
    {
        if (isset($_SESSION['User'])) {
            $smartphoneBuy = $this->Model('Smartphone');
            $user=$this->Model('Users');
            $this->View("Home", [
                "Page" => "Payment",
                "User"=>($user->getOneUser($_SESSION['User']['UserName']))->fetch_assoc(),
                "Smartphone" => ($smartphoneBuy->getOneSmartphone($idPhone))->fetch_assoc()
            ]);
        } else echo "<script>alert('Bạn phải đăng nhập để dùng chức năng này');
            window.location.assign('http://huysmartphone.xyz')</script>";
    }
    public function PaymentSuccess($emailUser)
    {
        $sendEmail = $this->Model('SendEmail');
        $sendEmail->SendEmailPayment($emailUser);

    }
}
