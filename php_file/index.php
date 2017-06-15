
<?php

  require_once '../DB/init.php';
  require_once '../templates/components/header.php';


$subAction = isset($_GET['page']) ? $_GET['page'] : 'index';

switch ($subAction) {
  case 'login':
    require('login.php');
  break;
  case 'announcement':
  if(is_logged_in()){
   require ''.$subAction.'.php';
 }else
 {
   require('index.php');
 }
    break;
  case 'student':
     if(is_logged_in())
    {
      require ''.$subAction.'.php';
    }
    else{
      require 'login.php';
    }
    break;
  case 'notes':
    if(is_logged_in())
    {
      require ''.$subAction.'.php';
    }
    else
    {
      require 'login.php';
    }
    break;
    case 'logout':
      require 'logout.php';
      break;
  default:
     require 'login.php';
    break;
}
