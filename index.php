
<?php
 session_start();
  //require $_SERVER['DOCUMENT_ROOT'].'/projects/verticalned/DB/init.php';
  require_once 'DB/init.php';
  require_once 'templates/header.php';
  $subAction = isset($_GET['page']) ? $_GET['page'] : 'index';

    switch ($subAction) {
      case 'login':
        require('Files/'.$subAction.'.php');
      break;
      case 'announce':
       require 'Files/'.$subAction.'.php';
        break;
      case 'front_page':
         if(is_logged_in())
        {
          require 'Files/'.$subAction.'.php';
        }
        else{
          require 'Files/login.php';
        }
        break;
      case 'notes':
        if(is_logged_in())
        {
          require 'Files/'.$subAction.'.php';
        }
        else
        {
          require 'Files/login.php';
        }
        break;
        case 'logout':
          require 'Files/logout.php';
          break;

          break;
      case 'index':
      default:
         require 'Files/login.php';
        break;
    }
