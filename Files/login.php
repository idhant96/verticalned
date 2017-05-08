<?php

if(!empty($_POST) && isset($_POST['submit'])){
          $user = escape($_POST['username']);
          $pass = escape($_POST['password']);


        if(login($user, $pass)){
          header("location:index.php?page=front_page");
        }

    else{
      header('location:index.php?page=login');
      }
    }

require 'templates/header.php';
require 'templates/components/navbar.php';
require 'templates/components/loginform.php';
require 'templates/footer.php';
?>
