<section>
    <div class="container">
        <div class="row">
            <form class="col-6 card" style="background-color: PaleTurquoise;">
                <h3>
                    <center>Thông tin giao hàng</center><b></b>
                </h3>
                <div class="form-group row">

                    <label for="inputName" class="col-sm-3 col-form-label">Họ và tên</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="inputName" value="<?php echo $data['User']['UserName'] ?>"><br>
                    </div>
                    <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="inputEmail" value="<?php echo $data['User']['Email'] ?>"><br>
                    </div>

                    <label for="inputPhoneNumber" class="col-sm-3 col-form-label">Số điện thoại</label>
                    <div class="col-sm-9">
                        <input type="tel" class="form-control" name="inputPhoneNumber" value="<?php echo $data['User']['PhoneNumber']?>"><br>
                    </div>
                    <label for="inputAddress" class="col-sm-3 col-form-label">Địa chỉ nhận hàng</label>
                    <div class="col-sm-9">
                        <input type="tel" class="form-control" name="inputAddress" value="<?php echo $data['User']['Address'] ?>">
                    </div>
                </div>
            </form>
            <form action="http://huysmartphone.xyz/Cart/PaymentSuccess/<?php echo $data['User']['Email']?>" method="post" class="col-6 form-group card" style="border:none">
                <div class="total">
                    <p>
                        <center><b>
                                <h3>Thành tiền</h3>
                            </b></center>
                    </p>
                    <h4>
                        <center><?php
                                if ($data['Smartphone']['Discount'] == 0) {
                                    echo  number_format($data['Smartphone']['Price']);
                                } else {
                                    echo  number_format($data['Smartphone']['Discount']);
                                } ?></center>
                    </h4><br>
                </div>
                <div class="container">

                    <center><button type="submit" class="btn btn-primary col-6 mb-4">Thanh toán online</button></center>
                    <center><button type="submit" class="btn btn-primary col-6">Thanh toán khi nhận hàng</button></center>
                </div>
            </form>
        </div>
    </div>
    <style>
        .bill {
            width: 50%;
            border: 1px solid black;
            margin: 20px auto auto auto;
            text-align: center;

        }
    </style>
    <table border=1 class="bill">
        <tr>
            <td colspan="3"> <b>
                    <center>
                        <h3>Chi tiết đơn hàng</h3>
                    </center>
                </b></td>
        </tr>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Sản phẩm</th>
            <th scope="col">Đơn giá</th>
        </tr>
        <tr>
            <td>1</td>
            <td><?php echo $data['Smartphone']['PhoneName'] . " " . $data['Smartphone']['Ram'] . " " . $data['Smartphone']['Rom'] ?></td>
            <td><?php
                if ($data['Smartphone']['Discount'] == 0) {
                    echo  number_format($data['Smartphone']['Price']);
                } else {
                    echo  number_format($data['Smartphone']['Discount']);
                } ?>
            </td>
        </tr>
        <tr>
            <td>Tổng tiền</td>
            <td colspan="2"><?php
                            if ($data['Smartphone']['Discount'] == 0) {
                                echo  number_format($data['Smartphone']['Price']);
                            } else {
                                echo  number_format($data['Smartphone']['Discount']);
                            } ?>
            </td>
        </tr>
    </table>
</section>