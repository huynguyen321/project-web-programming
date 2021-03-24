<!doctype html>
<html lang="vi">

<head>
    <title>Huy Smartphone</title>
    <link rel="icon" href="assets/img/logo.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header class="container-fluid">
        <!-- main menu on top -->
        <ul class="main_header">
            <li><a href="../index.php"><img id="logo" src="assets/img/logo.jpg" alt="Logo"></a></li>
            <li>
                <h1>TOP 1 CỬA HÀNG ĐIỆN THOẠI THÔNG MINH</h1>
            </li>
        </ul>
        <!-- submenu on PC -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        <ul class="menu col-12">
            <li><a href="../index.php"><i class="fas fa-home"></i> Trang chủ</a></li>
            <li><img src="assets/img/logo-brand/iPhone.jpg" alt="product" width="150px"></li>
            <li><img src="assets/img/logo-brand/Samsung.jpg" alt="product" width="150px"></li>
            <li><img src="assets/img/logo-brand/Xiaomi.jpg" alt="product" width="150px"></li>
            <li><img src="assets/img/logo-brand/OPPO.jpg" alt="product" width="150px"></li>
            <li><img src="assets/img/logo-brand/Nokia.jpg" alt="product" width="150px"></li>
            <li><img src="assets/img/logo-brand/Realme.png" alt="product" width="150px"></li>
            <li><img src="assets/img/logo-brand/Vsmart.png" alt="product" width="150px"></li>
            <li><img src="assets/img/logo-brand/Vivo.jpg" alt="product" width="150px"></li>

            <li class="drop-menu" href="#"><i class="fa fa-headphones-alt" aria-hidden="true"></i> Phụ kiện
                <i class="fa fa-caret-down" aria-hidden="true"></i>
                <ul class="drop-menu-content">
                    <li href="#">Tai nghe</li>
                    <li href="#">Cáp sạc</li>
                    <li href="#">Sạc dự phòng</li>
                </ul>
            </li>
            <li>
                <form action="" method="post" class="searchBox">
                    <input class="searchInput" type="text" name="" placeholder="Bạn cần tìm gì?">
                    <button class="searchButton">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </form>
            </li>
            <li>
                <button class="btn btn-outline-light hide_res"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Giỏ
                    hàng</button>
            </li>
            <li>
                <button class="btn btn-info hide_res">
                    <i class="fa fa-sign-in-alt" aria-hidden="true"></i>Đăng nhập/
                    <i class="fa fa-user-plus" aria-hidden="true"></i>Đăng ký
                </button>
            </li>
            <!-- <li style="display: none">
                <button class="btn btn-info"><i class="fa fa-sign-out-alt" aria-hidden="true"></i>Đăng xuất</button>
            </li> -->
        </ul>
        <!-- submenu on mobile -->
        <div class="smMenu">
            <button id="smMenuBtn"><i class="fas fa-bars"></i></button>
            <script>
                $('.sub_header_sm').animate({
                    height: 'toggle'
                })
                $(document).ready(function() {
                    $('#smMenuBtn').click(function() {
                        $('.sub_header_sm').animate({
                            height: 'toggle'
                        })
                    })
                })
            </script>
            <ul class="sub_header_sm">
                <li><a href="../index.php"><i class="fas fa-home"></i> Trang chủ</a></li>
                <li><i class="fa fa-mobile-alt" aria-hidden="true" href="#"></i>Điện thoại</li>
                <li><i class="fa fa-laptop" aria-hidden="true" href="#"></i>Laptop</li>
                <li><i class="fa fa-clock" aria-hidden="true" href="#"></i>Đồng hồ thời trang</li>
                <li><i class="fa fa-clock" aria-hidden="true" href="#"></i>Đồng hồ thông minh</li>
                <li class="dropdown" href="#"><i class="fa fa-headphones-alt" aria-hidden="true"></i> Phụ kiện
                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                    <ul class="dropdown-content">
                        <li href="#">Tai nghe</li>
                        <li href="#">Cáp sạc</li>
                        <li href="#">Sạc dự phòng</li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- menu when scroll screen -->
        <ul class="scroll_menu fixed-top">
            <li><a href="../index.php"><i class="fas fa-home"></i> Trang chủ</a></li>
            <li><i class="fa fa-mobile-alt" aria-hidden="true" href="#"></i>Điện thoại</li>
            <li><i class="fa fa-laptop" aria-hidden="true" href="#"></i>Laptop</li>
            <li><i class="fa fa-clock"></i> Đồng hồ thời trang</li>
            <li><i class="fa fa-clock" aria-hidden="true" href="#"></i>Đồng hồ thông minh</li>
            <li class="drop-menu" href="#"><i class="fa fa-headphones-alt" aria-hidden="true"></i> Phụ kiện
                <i class="fa fa-caret-down" aria-hidden="true"></i>
                <ul class="drop-menu-content">
                    <li href="#">Tai nghe</li>
                    <li href="#">Cáp sạc</li>
                    <li href="#">Sạc dự phòng</li>
                </ul>
            </li>
            <li>
                <form action="" method="post" class="searchBox">
                    <input class="searchInput" type="text" name="" placeholder="Bạn cần tìm gì?">
                    <button class="searchButton">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </form>
            </li>
            <li>
                <button class="btn btn-info hide_res"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Giỏ
                    hàng</button>
            </li>

            <li>
                <button class="btn btn-info hide_res"><i class="fa fa-sign-in-alt" aria-hidden="true"></i>Đăng
                    nhập</button>
            </li>
            <!-- process log in or not log in -->
            <script></script>
        </ul>
        <script>
            $('.scroll_menu').hide()
            // Script for top Navigation Menu
            $(window).bind('scroll', function() {
                if ($(window).width() > 940) {
                    if ($(window).scrollTop() > 100) {
                        $('.scroll_menu').show()
                    } else {
                        $('.scroll_menu').hide()
                    }
                }
            });
        </script>
    </header>