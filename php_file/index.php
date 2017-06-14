
<?php

  //require_once '\drive-api\vendor\autoload.php';
  //require $_SERVER['DOCUMENT_ROOT'].'/projects/verticalned/DB/init.php';
  require_once '../DB/init.php'; 
  require_once '../templates/components/header.php';
  
 
 
 //Injection protection GET method
  // Smart GET function
function GET($name=NULL, $value=false, $option="default")
{
    $option=false; // Old version depricated part
    $content=(!empty($_GET[$name]) ? trim($_GET[$name]) : (!empty($value) && !is_array($value) ? trim($value) : false));
    if(is_numeric($content))
        return preg_replace("@([^0-9])@Ui", "", $content);
    else if(is_bool($content))
        return ($content?true:false);
    else if(is_float($content))
        return preg_replace("@([^0-9\,\.\+\-])@Ui", "", $content);
    else if(is_string($content))
    {
        if(filter_var ($content, FILTER_VALIDATE_URL))
            return $content;
        else if(filter_var ($content, FILTER_VALIDATE_EMAIL))
            return $content;
        else if(filter_var ($content, FILTER_VALIDATE_IP))
            return $content;
        else if(filter_var ($content, FILTER_VALIDATE_FLOAT))
            return $content;
        else
            return preg_replace("@([^a-zA-Z0-9\+\-\_\*\@\$\!\;\.\?\#\:\=\%\/\ ]+)@Ui", "", $content);
    }
    else false;
}

  
  
  $subAction = isset($_GET['page']) ? GET('page') :'index';

    switch ($subAction) {
      case 'login':
        require(''.$subAction.'.php');
      break;
      case 'announcement':
	  if(is_logged_in())
	  {
		  require ''.$subAction.'.php';
	  }
	   else
	   {
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
		  case 'student':
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
      case 'index':
      default:
         require 'login.php';
        break;
    }
    
  


