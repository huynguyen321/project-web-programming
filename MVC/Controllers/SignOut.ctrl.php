<?php

class SignOut extends Controller
{
    public function Default()
    {
        session_unset('User');
        $smartphone = $this->Model('Smartphone');
        $accessories = $this->Model('Accessories');
        $this->View("Home", [
            "Page1" => "Smartphone",
            "Page2" => "Accessories",
            "Smartphone" => $smartphone->getAllSmartphone(),
            "Accessorie" => $accessories->getAllAccessorie()
        ]);
    }
}
