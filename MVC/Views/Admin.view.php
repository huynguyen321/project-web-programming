<?php
include_once './MVC/Views/includes/header.inc.php';
include_once './MVC/Views/includes/SignIn_SignUp.inc.php';
?>
<div class="container-fluid d-flex flex-row mb-3">
    <div class="nav flex-column nav-pills col-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-order-tab" data-toggle="pill" href="#v-pills-order" role="tab" aria-controls="v-pills-order" aria-selected="true">Đặt hàng</a>
        <a class="nav-link" id="v-pills-smartphone-tab" data-toggle="pill" href="#v-pills-smartphone" role="tab" aria-controls="v-pills-smartphone" aria-selected="false">Điện thoại</a>
        <a class="nav-link" id="v-pills-accessories-tab" data-toggle="pill" href="#v-pills-accessories" role="tab" aria-controls="v-pills-accessories" aria-selected="false">Phụ kiện</a>
        <a class="nav-link" id="v-pills-user-tab" data-toggle="pill" href="#v-pills-user" role="tab" aria-controls="v-pills-user" aria-selected="false">Người dùng</a>
    </div>
    <?php
    if (isset($data['Page4'])) { ?>
        <div class="tab-content col-10" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-order" role="tabpanel" aria-labelledby="v-pills-order-tab">
                <?php include_once './MVC/Views/pages/' . $data['Page1'] . '.view.php'; ?>
            </div>
            <div class="tab-pane fade" id="v-pills-smartphone" role="tabpanel" aria-labelledby="v-pils-smartphone-tab">
                <?php include_once './MVC/Views/pages/' . $data['Page2'] . '.view.php'; ?>
            </div>
            <div class="tab-pane fade" id="v-pills-accessories" role="tabpanel" aria-labelledby="v-pills-accessories-tab">
                <?php include_once './MVC/Views/pages/' . $data['Page3'] . '.view.php'; ?>
            </div>
            <div class="tab-pane fade" id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab">
                <?php include_once './MVC/Views/pages/' . $data['Page4'] . '.view.php'; ?>
            </div>
        </div>
    <?php
    } else {
        include_once './MVC/Views/pages/' . $data['Page1'] . '.view.php';
        include_once './MVC/Views/pages/' . $data['Page2'] . '.view.php';
    }

    ?>
</div>