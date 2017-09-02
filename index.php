<?php
  include_once "api/config/UserController.class.php";
  $user = new UserController();
  $getUsers = $user->doAction(10000);
  ?>
