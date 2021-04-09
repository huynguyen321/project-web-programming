<div class="container">
    <!-- Smartphone -->
    <div class="mb-4 card p-2" id="productSmartphone">
        <h4>Điện thoại thông minh</h4>
        <!-- Section: Show product -->
        <section class="row">
            <!-- open while loop -->
            <?php
            while ($row = $data['Smartphone']->fetch_assoc()) {
                include 'ModalDetailSmartphone.view.php';
            ?>

                <div class="col-md-3 mb-5">
                    <div class="">
                        <div class="card-img-top view zoom overlay p-2">
                            <img class="img-fluid w-100" src="<?php echo $row['Image']; ?>" alt="product">
                            <a href="#!">
                                <div class="mask waves-effect">
                                    <img class="img-fluid w-100" src="<?php echo $row['Image']; ?>">
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-title font-weight-bold indigo-text">
                                <?php echo $row['PhoneName'] . " " . $row['Ram'] . '/' . $row['Rom']; ?>
                            </div>
                            <b style="color: red">
                                <?php
                                if ($row['Discount'] != 0) {
                                    echo  number_format($row['Discount']) . '₫ &nbsp;<span style="color: gray;"><del>' .   number_format($row['Price']) . '₫</del>';
                                } else echo number_format($row['Price']) . '₫';
                                ?>
                            </b>
                            <p class="card-text">
                                <?php
                                $vote = '';
                                if ($row['Vote'] == 1 || $row['Vote'] == 2 || $row['Vote'] == 3 || $row['Vote'] == 4 || $row['Vote'] == 5) {
                                    for ($i = 0; $i < $row['Vote']; $i++) {
                                        $vote = $vote . '<i class="fas fa-star fa-sm rating"></i>';
                                    }
                                } else {
                                    for ($i = 0; $i < ($row['Vote'] - 0.5); $i++) {
                                        $vote = $vote . '<i class="fas fa-star fa-sm rating"></i>';
                                    }
                                    $vote = $vote . ' <i class="fas fa-star-half fa-sm rating"></i>';
                                };
                                echo $vote;
                                ?>
                            </p>
                            <div>
                                <button class="float-left btn btn-rounded btn-info waves-effect" 
                                data-toggle="modal" data-target="#ModalSmartphone<?php echo $row['IDphone'] . $row['Ram'] . $row['Rom']; ?>">
                                    <i class="fa fa-info" aria-hidden="true"></i>
                                </button>
                                <a href="Cart/addToCartSmartphone/<?php echo $row['IDphone']?>/1">
                                    <button type='submit' class="float-right btn btn-warning waves-effect">
                                        <i class="fas fa-cart-plus"></i><b>Thêm vào giỏ</b>
                                    </button>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            <?php }; ?>
            <!-- close while loop -->
        </section>
        <!-- Section: Block Content -->
        <section>
            <div class="row d-flex justify-content-around align-items-center">
                <div class="col-3 col-md-3">
                    <h6>Xem tiếp</h6>
                </div>

                <div class="col-12 col-md-4 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-circle justify-content-center float-md-right mb-0">
                            <li class="page-item"><a class="page-link waves-effect waves-effect"><i class="fas fa-chevron-left"></i></a></li>
                            <li class="page-item active"><a class="page-link waves-effect waves-effect">1</a></li>
                            <li class="page-item"><a class="page-link waves-effect waves-effect">2</a></li>
                            <li class="page-item"><a class="page-link waves-effect waves-effect">3</a></li>
                            <li class="page-item"><a class="page-link waves-effect waves-effect"><i class="fas fa-chevron-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </div>
</div>