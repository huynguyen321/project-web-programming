<div class="footer">
        <div class="footer-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="footer-logo">
                            <img src="assets/img/logo.jpg" alt="" class="w-75">

                            <p class="text-left">Ra đời từ năm 2021, chỉ từ một cửa hàng thời trang nhỏ, đến nay Ngoc Huy Smartphone đã không ngừng phát triển và trở thành một hệ thống cửa hàng chuyên kinh doanh điện thoại
                                và một số thiết bị điện tử thông minh giúp cho cuộc sống hiện đại và tiện ích hơn</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h4 class="title">
                            Thông Tin
                            <strong>
                                Liên Hệ
                            </strong>
                        </h4>
                        <p>
                            101B, Lê Hữu Trác, Đà Nẵng
                        </p>
                        <p>
                            0355 621 838
                        </p>
                        <p>
                            huy.nguyen22@student.passerellesnumeriques.org
                        </p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h4 class="title">
                            Hỗ Trợ
                            <strong>
                                Khách Hàng
                            </strong>
                        </h4>
                        <ul class="support">
                            <li>
                                <a href="#">
                                    Chính sách bảo mật
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Phương Thức Thanh Toán
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Thông Tin
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 class="title">
                            Nhận Thông Tin
                            <strong>
                                Mới nhất
                            </strong>
                        </h4>
                        <p>
                            Nhập Email đăng ký nhận thông tin
                        </p>
                        <form class="newsletter">
                            <input type="text" id="email" placeholder="Nhập Email....">
                            <input type="button" value="Đăng ký" class="btn btn-outline-light" onclick="sendMail() ">
                            <script>
                                    function sendMail() {
                                        cusemail = $("#email").val();
                                        console.log(cusemail);
                                        Email.send({
                                            SecureToken: "7f2eb8bb-830f-4487-949d-aff2eac8a00c",
                                            From: "NgocHuySmartphone@gmail.com",
                                            To: cusemail,
                                            Subject: "Cảm ơn "+cusname+" đã đăng ký nhận tin ",
                                            Body: 'Bạn đã đăng ký để nhận những thông tin mới nhất thành công '
                                        }).then(
                                            message => alert("Đăng ký thành công")
                                        );
                                    }
                                </script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            Copyright© by
                            <a href="#">
                                Nguyễn Ngọc Huy
                            </a>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <ul class="social-icon">
                            <li>
                                <a href="#" class="google-plus">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="facebook">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>