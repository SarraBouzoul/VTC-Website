<?php
include_once ("vue/AdminLoginVue.php");

class AdminLoginController
{
  public function afficherAdminLogin(){
      $av= new AdminLoginVue();
      $av->entete("login");
      $av->loginForm();
  }
}