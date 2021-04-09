<?php

class Cart extends Controller
{

    public function ShoppingCart()
    {
        if (isset($_SESSION['User'])) {
            print_r($_SESSION['DetailCart']);
            $this->View("Cart", []);
        } else echo "<script>alert('Bạn phải đăng nhập để dùng chức năng này')</script>";
    }
    public function addToCartSmartphone()
    {
        if (isset($_SESSION['User'])) {
            $smartphone = func_get_args();
            if (isset($_POST['qtyPhone'])) {
                $_SESSION['Cart'] = intval($_POST['qtyPhone']) + intval($_SESSION['Cart']);
                if (isset($_SESSION['DetailCart'])) {
                    foreach ($_SESSION['DetailCart'] as $key) {
                        if ($_SESSION['DetailCart'][$key]['IDphone'] == $smartphone[0]) {
                            $_SESSION['DetailCart'][$key]['QtyPhone'] = intval($_SESSION['DetailCart'][$key]['QtyPhone']) + intval($_POST['qtyPhone']);
                        } else {
                            $check = 1; //khong co san pham trung
                        }
                    }
                    if ($check == 1) {
                        $_SESSION['DetailCart'][] = [
                            'IDphone' => $smartphone[0],
                            'QtyPhone' => intval($_POST['qtyPhone'])
                        ];
                    }
                } else {
                    $_SESSION['DetailCart'][] = [
                        'IDphone' => $smartphone[0],
                        'QtyPhone' => intval($_POST['qtyPhone'])
                    ];
                }
            } else {
                $_SESSION['Cart'] = intval(1 + intval($_SESSION['Cart']));
                $_SESSION['DetailCart'][] = [
                    'IDphone' => $smartphone[0],
                    'QtyPhone' => 1
                ];
            }
            
            $addCart = $this->Model('Smartphone');
            for($i = 0; $i < count($_SESSION['DetailCart']);$i++){
                $detailCart = $addCart->getOneSmartphone($_SESSION['DetailCart'][$i]['IDphone']);
                $_SESSION['DetailCart'][$i]['Detail'] = $detailCart->fetch_assoc();
            }
            $_SESSION['DetailCart']['Total'] =0;
            if($_SESSION['Cart']>0){
                foreach ($variable as $i ) {
                    if ($_SESSION['DetailCart'][$i]['Detail']['Discount'] == 0) {
                        $_SESSION['DetailCart']['Total'] += ( $_SESSION['DetailCart'][$i]['Price'] * $_SESSION['DetailCart'][$i]['Price']);
                      } else {
                       
                      }
                   
                }
            }
        } else echo "<script>alert('Bạn phải đăng nhập để dùng chức năng này')</script>";
        //print_r($smartphone);
        echo "<script>window.location.assign('http://huysmartphone.xyz')</script>";
        //$_SESSION['ProducInCart'][] = ($addCart->getOneSmartphone($smartphone))->fetch_assoc();
        // print_r($_SESSION['ProducInCart']);
    }
}
