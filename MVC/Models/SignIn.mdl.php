<?php

 class SignIn extends Connect{
   public function checkUserName($newUser){
   $sql = "select UserName from Users where UserName = '".$newUser['username']."'";
   $result = $this->conn->query($sql);
   if ($result->num_rows) {
      echo "<script>alert('Tên đăng nhập đã tồn tại!')";
      header('Location: http://huysmartphone.xyz');
   }
  }
}