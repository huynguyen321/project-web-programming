<?php
include_once './MVC/Views/includes/header.inc.php';
include_once './MVC/Views/includes/SignIn_SignUp.inc.php';

if (isset($data['Page4'])) {
    include_once './MVC/Views/pages/' . $data['Page1'] . '.view.php';
    include_once './MVC/Views/pages/' . $data['Page2'] . '.view.php';
    include_once './MVC/Views/pages/' . $data['Page3'] . '.view.php';
    include_once './MVC/Views/pages/' . $data['Page4'] . '.view.php';
} else {
    include_once './MVC/Views/pages/' . $data['Page1'] . '.view.php';
    include_once './MVC/Views/pages/' . $data['Page2'] . '.view.php';
}

?>

<div class="container-fluid d-flex flex-row mb-3">
    <div class="nav flex-column nav-pills col-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Người dùng</a>
        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
    </div>


    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">a</div>
    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">b</div>
    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>

</div>