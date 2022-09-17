<?php

class User
{
  public $nom;

  public function verify($login) {
    return $login == "Admin";
  }
}
