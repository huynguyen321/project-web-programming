<?php

class Home extends Controller
{
    public function test()
    {
        // Modal
        $a = $this->Model("Accessories");
        // echo $a->getNameProduct();

        // View
        $tong = $a->sum(6, 5);
        $this->View("Accessories", ['Number' => $tong]);
    }

    public function homePage()
    {
        $smartphone = $this->Model('Smartphone');

        $this->View("Home", [
            "Page" => "Smartphone",
            "Smartphone" => $smartphone->getAllSmartphone()
        ]);
    }
}
