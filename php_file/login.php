<?php

if(!empty($_POST) && isset($_POST['submit'])){
          $user = escape($_POST['username']);
          $pass = escape($_POST['password']);


        if(login($user, $pass)){
          header("location:index.php?page=profile");
        }
      
    else{
      header('location:index.php?page=login');
      }
    }


require 'templates/components/navbar.php';
require 'templates/components/loginform.php';
require 'templates/components/services.php';
require 'templates/components/footer.php';
?>
