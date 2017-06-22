<?php
//Give the connection name :
$conn_name = 'verticalned';

//Give the username :
$user_db = 'root';
//Give the password :
$pass_db = '';
// Give the database name :
$db_name = 'verticalned';


//Taking the connection here.
try{
$dbh = new PDO('mysql:host=localhost;dbname=verticalned', $user_db, $pass_db,array(
    PDO::ATTR_PERSISTENT => true));

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
