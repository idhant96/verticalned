<?php
	
if(!empty($_POST) && isset($_POST['submit'])){
	echo 'hello';
	$subject = escape($_POST['subject']);
	$links = escape($_POST['links']);
	$first = escape($_POST['first']);
	$second = escape($_POST['second']);
	$third = escape($_POST['third']);
	$fourth = escape($_POST['fourth']);
	$description = escape($_POST['description']);
	$sql = "INSERT INTO announcements (announcements,link,year,date_a,staff)
			VALUES (:announce,:nlink,:nyear,:ndate,:nstaff)";
	$sql = $dbh->execute(array(
		":announce" => $description,
		":nlink" => $links,
		":nyear" => $first,
		":ndate" => date('h-i-s'),
		":nstaff" => $_SESSION['username']
		));
}


    $stmt  = $dbh->prepare("SELECT announcements,link,year,date_a,staff FROM announcements");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);

	require 'templates/components/header.php';	
	require 'templates/components/navbar.php';
	require 'templates/components/notifications.php';
	require 'templates/components/footer.php';

?>

