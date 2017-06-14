
<?php
 session_start();
  //require_once '\drive-api\vendor\autoload.php';
  //require $_SERVER['DOCUMENT_ROOT'].'/projects/verticalned/DB/init.php';
  require_once 'DB/init.php'; 
  require_once 'templates/components/header.php';
  $subAction = isset($_GET['page']) ? $_GET['page'] : 'index';

    switch ($subAction) {
      case 'login':
        require('php_file/'.$subAction.'.php');
      break;
      case 'announce':
       require 'php_file/'.$subAction.'.php';
        break;
      case 'profile':
         if(is_logged_in())
        {
          require 'php_file/'.$subAction.'.php';
        }
        else{
          require 'php_file/login.php';
        }
        break;
      case 'notes':
        if(is_logged_in())
        {
          require 'php_file/'.$subAction.'.php';
        }
        else
        {
          require 'php_file/login.php';
        }
        break;
        case 'logout':
          require 'php_file/logout.php';
          break;
          
          break;
      case 'index':
      default:
         require 'php_file/login.php';
        break;
    }
    
  


