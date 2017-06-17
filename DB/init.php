<?php
   session_start();
	require 'connection.php';
	function login($username,$password,$isstudent){
		global $dbh;
		$stmt  = $dbh->prepare("SELECT * FROM student WHERE registerno =?");
		$stmt->execute(array($username));
		$result = $stmt->fetchObject();

		if($stmt->rowCount()==1){
			$row = $result->password;

		if($row == $password){

			$_SESSION['loggedin'] = true;
			$_SESSION['username'] = $username;
			$_SESSION['id'] = $result->id;
			$_SESSION['isstudent'] = $isstudent;
			return true;
		}
		else{

			return false;
		}
		$result = free();
	}
}


	function logout(){
		session_destroy();
	}


	 function is_logged_in(){
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			return true;
		}
		else{
			return false;
		}
		}


		function escape($string)
	{
		return htmlentities(trim($string) , ENT_QUOTES , 'UTF-8');
	}
