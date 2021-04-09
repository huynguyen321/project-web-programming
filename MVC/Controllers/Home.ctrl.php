<?php

class Home extends Controller
{

    public function Default()
    {
        $smartphone = $this->Model('Smartphone');
        $accessories = $this->Model('Accessories');
        $this->View("Home", [
            "Page1" => "Smartphone",
            "Page2" => "Accessories",
            "Smartphone" => $smartphone->getAllSmartphone(),
            "Accessories"=> $accessories->getAllAccessories()
        ]);
    }
    public function SendMail()
    {
        $email = $_POST['emailReceiveInfor'];
        $sendEmail = $this->Model('SendEmail');
        $sendEmail->SendEmailReceiveInfor($email);
        echo "<script>window.location ='http://huysmartphone.xyz'</script>";
    }
    public function Search()
    {
        $nameToSearch = $_POST['Search'];
        $smartphone = $this->Model('Smartphone');
        $accessories = $this->Model('Accessories');
        $this->View("Home", [
            "Page"=>"Search",
            "Page1" => "Smartphone",
            "Page2" => "Accessories",
            "Smartphone" => $smartphone->searchSmartphoneDB($nameToSearch),
            "Accessories"=> $accessories->searchAccessoriesDB($nameToSearch)
        ]);
    }

}

 ?> 
