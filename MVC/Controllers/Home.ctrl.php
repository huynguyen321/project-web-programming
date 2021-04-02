<!-- CONTROLLER-HOME -->
<?php

class Home extends Controller
{
    public function test()
    {
        // Modal
        $a = $this->Model("Accessories");
        // echo $a->getNameProduct();

        // View
        $tong = $a->sum(6,5);
        $this->View("Accessories",['Number'=>$tong]);
    }

}
