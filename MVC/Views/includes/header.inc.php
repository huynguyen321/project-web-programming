<!doctype html>
<html lang="vi">

<head>
    <title>Nga Huy Smartphone</title>
    <link rel="icon" href="http://huysmartphone.xyz/public/assets/img/icon_logo.jpg">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- bootstrap 4 + jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <!-- MDB5 -->
    <link rel="stylesheet" href="http://huysmartphone.xyz/public/assets/mdb5/css/mdb.min.css" />
    <link rel="stylesheet" href="http://huysmartphone.xyz/public/assets/mdb5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="http://huysmartphone.xyz/public/assets/mdb5/css/mdb-pro.min.css" />
    <link rel="stylesheet" href="http://huysmartphone.xyz/public/assets/mdb5/css/mdb.ecommerce.min.css" />
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="http://huysmartphone.xyz/public/assets/mdb5/js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="http://huysmartphone.xyz/public/assets/mdb5/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="http://huysmartphone.xyz/public/assets/mdb5/js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="http://huysmartphone.xyz/public/assets/mdb5/js/mdb.min.js"></script>
    <!-- MDB Ecommerce JavaScript -->
    <script type="text/javascript" src="http://huysmartphone.xyz/public/assets/mdb5/js/mdb.ecommerce.min.js"></script>
    <!-- self custom-->
    <link rel="stylesheet" href="http://huysmartphone.xyz/public/assets/css/style.css">

</head>

<body>
    <header class="container-fluid">
        <!--main logo shop -->
        <ul class="main_logo">
            <li><a href="http://huysmartphone.xyz"><img id="logo" src="http://huysmartphone.xyz/public/assets/img/logo.jpg" alt="Logo"></a></li>
            <li>
                <h1>TOP 1 CỬA HÀNG ĐIỆN THOẠI THÔNG MINH</h1>
            </li>
        </ul>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-light scrolling-navbar navbar-transparent">
            <a class="navbar-brand text-center" href="http://huysmartphone.xyz" style="font-weight: bold; font-size: 20px;color: #fff1a1">
                <i class="fa fa-home" aria-hidden="tru"></i> Trang chủ
            </a>
            <form action="Search" method="post" class="searchBox navbar-brand">
                <input class="searchInput" type="text" name="" placeholder="Bạn cần tìm gì?">
                <button class="searchButton">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#reponsiveMenu" aria-controls="reponsiveMenu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>

            <!-- Right -->
            <div class="collapse navbar-collapse" id="reponsiveMenu">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item text-center">
                        <a href="Home/ShoppingCart" class="nav-link navbar-link-2 waves-effect">
                            <span class="badge badge-pill red" id="qty">
                                <?php
                                if (isset($_SESSION['Cart'])) {
                                    echo $_SESSION['Cart'];
                                } else echo 0;
                                ?>
                            </span>
                            <i class="fas fa-shopping-cart pl-0"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown text-center">
                        <a href="/#productSmartphone" class="nav-link waves-effect">
                            <i class="fa fa-mobile-alt" aria-hidden="true"></i>
                            Điện thoại
                        </a>
                        <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="padding:0; margin:10px 10px 15px 0;">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <table>
                                <tr>
                                    <td><a class="dropdown-item" href="#"><img src="http://huysmartphone.xyz/public/assets/img/logo-brand/iPhone.jpg" alt="product" width="108px"></a></td>
                                    <td><a class="dropdown-item" href="#"><img src="http://huysmartphone.xyz/public/assets/img/logo-brand/Samsung.jpg" alt="product" width="108px"></a></td>
                                    <td><a class="dropdown-item" href="#"><img src="http://huysmartphone.xyz/public/assets/img/logo-brand/Xiaomi.jpg" alt="product" width="108px"></a></td>
                                </tr>
                                <tr>
                                    <td><a class="dropdown-item" href="#"><img src="http://huysmartphone.xyz/public/assets/img/logo-brand/OPPO.jpg" alt="product" width="108px"></a></td>
                                    <td><a class="dropdown-item" href="#"><img src="http://huysmartphone.xyz/public/assets/img/logo-brand/Nokia.jpg" alt="product" width="108px"></a></td>
                                    <td><a class="dropdown-item" href="#"><img src="http://huysmartphone.xyz/public/assets/img/logo-brand/Realme.png" alt="product" width="108px"></a></td>
                                </tr>
                                <tr>
                                    <td><a class="dropdown-item" href="#"><img src="http://huysmartphone.xyz/public/assets/img/logo-brand/Vsmart.png" alt="product" width="108px"></a></td>
                                    <td><a class="dropdown-item" href="#"><img src="http://huysmartphone.xyz/public/assets/img/logo-brand/Vivo.jpg" alt="product" width="108px"></a></td>
                                </tr>
                            </table>
                        </div>
                    </li>
                    <li class="nav-item text-center">
                        <a href="/#productAccessories" class="nav-link waves-effect">
                            <i class="fa fa-headphones" aria-hidden="true"></i>
                            Phụ kiện </a>
                    </li>
                    <?php

                    if (isset($_SESSION['User'])) {

                        echo '<li class="nav-item text-center">
                            <a class="nav-link waves-effect">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>' . $_SESSION['User']['Name'] . '
                            </a>
                        </li>
                        <li class="nav-item text-center">
                            <a href="User/SignOut" class="nav-link waves-effect">
                            <i class="fas fa-sign-out-alt" aria-hidden="true"></i>Đăng xuất
                            </a>
                        </li>';
                    } else
                        echo '<li class="nav-item text-center">
                                <a class="nav-link waves-effect" id="signUp2" data-toggle="modal" data-target="#SignInSignUpModal">
                                Đăng ký
                                </a>
                            </li>
                            <li class="nav-item pl-2 mb-2 mb-md-0">
                                <a type="button" class="nav-link btn btn-outline-secondary btn-rounded btn-navbar waves-effect waves-light" id="signIn2" data-toggle="modal" data-target="#SignInSignUpModal">
                                ĐĂNG NHẬP</a>
                            </li>';
                    ?>
                </ul>
            </div>

        </nav>
        <!-- Navbar -->
        <script>
            // Script for top Navigation Menu
            jQuery(window).bind('scroll', function() {
                if (jQuery(window).scrollTop() > 100) {
                    jQuery('.navbar').addClass('fixed-top top-nav-collapse');
                } else {
                    jQuery('.navbar').removeClass('fixed-top top-nav-collapse');
                }
            });
        </script>
    </header>
    <!-- logo brand -->
    <div class="container-fluid text-center logo-brand">
        <a href="#"><img src="http://huysmartphone.xyz/public/assets/img/logo-brand/iPhone.jpg" alt="product" width="120px"></a>
        <a href="#"><img src="http://huysmartphone.xyz/public/assets/img/logo-brand/Samsung.jpg" alt="product" width="120px"></a>
        <a href="#"><img src="http://huysmartphone.xyz/public/assets/img/logo-brand/Xiaomi.jpg" alt="product" width="120px"></a>
        <a href="#"><img src="http://huysmartphone.xyz/public/assets/img/logo-brand/OPPO.jpg" alt="product" width="120px"></a>
        <a href="#"><img src="http://huysmartphone.xyz/public/assets/img/logo-brand/Nokia.jpg" alt="product" width="120px"></a>
        <a href="#"><img src="http://huysmartphone.xyz/public/assets/img/logo-brand/Realme.png" alt="product" width="120px"></a>
        <a href="#"><img src="http://huysmartphone.xyz/public/assets/img/logo-brand/Vsmart.png" alt="product" width="120px"></a>
        <a href="#"><img src="http://huysmartphone.xyz/public/assets/img/logo-brand/Vivo.jpg" alt="product" width="120px"></a>
    </div>