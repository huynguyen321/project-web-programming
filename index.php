<?php
error_reporting(0);
if (session_id() === '') session_start();
include './MVC/Bridge.php';
$myApp = new App();
