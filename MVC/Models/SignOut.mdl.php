<?php

class SignOut
{
  public function logOut()
  {
    unset($_SESSION['User']);
    unset($_SESSION['ProducInCart']);
    unset($_SESSION['Cart']);  
  }
}