<?php

class Cart extends Controller
{

    public function ShoppingCart()
    {
        if(isset($_SESSION['User'])){
            $smartphone = $this->Model('Smartphone');
            $accessories = $this->Model('Accessories');
            
            $this->View("Cart", [
                "Smartphone" => $smartphone->getAllSmartphone(),
                "Accessories"=> $accessories->getAllAccessories()
            ]);
        }
        else echo "<script>alert('Bạn phải đăng nhập để dùng chức năng này')</script>";
    }
    public function addToCartSmartphone()
    {
        if(isset($_SESSION['User'])){
            $smartphone = func_get_args();
            if(isset($_POST['quantity'])){
                $_SESSION['Cart'] = intval($_POST['quantity']) + intval($_SESSION['Cart']);
            }else{
                $_SESSION['Cart'] = intval(1 + intval($_SESSION['Cart']));
            }
            
            $addCart = $this->Model('Smartphone');

        }
        else echo "<script>alert('Bạn phải đăng nhập để dùng chức năng này')</script>";
        //print_r($smartphone);
        echo "<script>window.location.assign('http://huysmartphone.xyz')</script>";
        //$_SESSION['ProducInCart'][] = ($addCart->getOneSmartphone($smartphone))->fetch_assoc();
        // print_r($_SESSION['ProducInCart']);
    }
}
