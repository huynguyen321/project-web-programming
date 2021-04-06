<?php

class Admin extends Controller
{
    public function Default()
    {
        $smartphone = $this->Model('Smartphone');
        $accessories = $this->Model('Accessories');
        $user= $this->Model('User');
        $this->View("Admin", [
            "Page" => "Smartphone",
            "Users"=>
            "Smartphone" => $smartphone->getAllSmartphone(),
            "Accessories"=> $accessories->getAllAccessories()
        ]);
    }
}
