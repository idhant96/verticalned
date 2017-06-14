
<?php

  require_once '../DB/init.php';
  require_once '../templates/components/header.php';


$subAction = isset($_GET['page']) ? $_GET['page'] : 'index';
echo $subAction;
switch ($subAction) {
  case 'login':
    require('login.php');
  break;
  case 'announcement':
   require ''.$subAction.'.php';
    break;
  case 'front_page':
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
