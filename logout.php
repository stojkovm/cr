<?php
  $site = "SSD course &rarrow;";
  require "classes/user.php";
  User::logout();
  header("Location: /cr-master/login.php");
  die();
?>


