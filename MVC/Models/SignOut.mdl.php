<?php

class SignOut
{
  public function logOut()
  {
    session_unset('User');
  }
}