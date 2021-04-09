<?php
include_once './MVC/Views/includes/header.inc.php';
include_once './MVC/Views/includes/carousel.inc.php';
include_once './MVC/Views/includes/SignIn_SignUp.inc.php';

if (isset($data['Page'])) {
    include_once './MVC/Views/pages/' . $data['Page'] . '.view.php';
} else {
    include_once './MVC/Views/pages/' . $data['Page1'] . '.view.php';
    include_once './MVC/Views/pages/' . $data['Page2'] . '.view.php';
}


include_once './MVC/Views/includes/footer.inc.php';
