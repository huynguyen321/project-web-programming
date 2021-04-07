<?php

class Admin extends Controller
{
    public function Default()
    {
        $smartphone = $this->Model('Smartphone');
        $accessories = $this->Model('Accessories');
        $user= $this->Model('User');
        $this->View("Admin", [
            "Page1"=>"SliderAdmin",
            "Page2"=>"SmartphoneAdmin",
            "Page3"=>"AccessoriesAdmin",
            "Page4" => "UserAdmin",
            "Users"=>$user->getAllUser(),
            "Smartphone" => $smartphone->getAllSmartphone(),
            "Accessories"=> $accessories->getAllAccessories()
        ]);
    }
}
