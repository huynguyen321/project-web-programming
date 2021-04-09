<section>
  <div class="row">
    <div class="col-lg-8">
      <!-- Card -->
      <div class="card wish-list mb-3">
        <div class="card-body">
          <h5 class="mb-4">Giỏ hàng: </h5>
          <?php          
          if (isset($_SESSION['DetailCart'])) {
            for($i=0; $i< count($_SESSION['DetailCart']);$i++) {
          ?>
              <div class="row mb-4">
                <div class="col-md-5 col-lg-3 col-xl-3">
                  <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                    <img class="img-fluid w-100" src="<?php echo $_SESSION['DetailCart'][$i]['Detail']['Image'] ?>" alt="product">
                    <a href="#!">
                      <div class="mask waves-effect waves-light">
                        <img class="img-fluid w-100" src="<?php echo $_SESSION['DetailCart'][$i]['Detail']['Image'] ?>">
                        <div class="mask rgba-black-slight waves-effect waves-light"></div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-7 col-lg-9 col-xl-9">
                  <div>
                    <h5><?php echo $_SESSION['DetailCart'][$i]['Detail']['PhoneName'] ?></h5>
                    <p>Ram: <?php echo $_SESSION['DetailCart'][$i]['Detail']['Ram'] ?></p>
                    <p>Rom: <?php echo $_SESSION['DetailCart'][$i]['Detail']['Rom'] ?></p>
                    <p>Hệ điều hành: <?php echo $_SESSION['DetailCart'][$i]['Detail']['OS'] ?></p>
                    <div class="d-flex justify-content-between">

                      <div class="def-number-input number-input safari_only mb-0 w-100">
                        <button class='btn btn-amber' onclick="this.parentNode.querySelector('input[type=number]').stepDown()">-</button>
                        <input class="quantity" min="0" name="quantity" id="qtyPhone" value=<?php echo $_SESSION['DetailCart'][$i]['QtyPhone'] ?> type="number">
                        <button class='btn btn-amber' onclick="this.parentNode.querySelector('input[type=number]').stepUp()">+</button>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <div>
                        <a href="cart/deleteCartSmartphone/<?php echo $_SESSION['DetailCart'][$i]['IDphone'] ?>" type="button" class="card-link-secondary small text-uppercase mr-3"><i class="fas fa-trash-alt mr-1"></i>Xóa khỏi giỏ hàng</a>
                      </div>
                      <p class="mb-0"><span><strong>
                            <?php
                            if ($_SESSION['DetailCart'][$i]['Detail']['Discount'] == 0) {
                              echo  number_format($_SESSION['DetailCart'][$i]['Detail']['Price']);
                            } else {
                              echo  number_format($_SESSION['DetailCart'][$i]['Detail']['Discount']);
                            }
                            ?></strong></span></p>
                    </div>
                  </div>
                </div>
              </div>
          <?php }
          }else{
            echo "<h3>Bạn thấy gì không? Là giỏ hàng trống đó. Mau mua hàng đi!</h3>";
          }
          ?>

          <hr class="mb-4">

          <p class="text-primary mb-0">
            <i class="fas fa-info-circle mr-1"></i>Đừng trì hoãn việc mua hàng, thêm các mặt hàng vào giỏ
            hàng của bạn không có nghĩa là đặt trước chúng..
          </p>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="mb-3">Tổng tiền phải thanh toán</h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
              Số tiền tạm thời
              <span id="total"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
              Phí vận chuyển
              <span>Miễn phí</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
                <strong>Tổng cộng</strong>
              </div>
              <span><strong>$53.98</strong></span>
            </li>
          </ul>

          <button type="button" class="btn btn-primary btn-block waves-effect waves-light">
            Thanh toán
          </button>

        </div>
      </div>
    </div>

  </div>

</section>