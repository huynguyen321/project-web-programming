<?php
require_once 'Connect.class.php';
    $id = $_GET['id'];
    echo '<script>alert('.$id.')</script>';
    $sql = "UPDATE `user` SET `Block` = 1 WHERE `IDuser` = $id";
    $conn = new Connect('project');
    $connect =$conn->connect();
    $connect->query($sql);
    $connect->close();
    header('Location: ../admin.php');

?>