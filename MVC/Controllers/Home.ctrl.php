<?php

class Home extends Controller
{

    public function Default()
    {
        $smartphone = $this->Model('Smartphone');
        $this->View("Home", [
            "Page" => "Smartphone",
            "Smartphone" => $smartphone->getAllSmartphone()
        ]);
    }

    public function showDetailSmartphone()
    {
      
    }
}

 ?> 
