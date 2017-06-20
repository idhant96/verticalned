


<?php




//updating database 
require_once '../DB/init.php';
if (is_logged_in()){

if(!empty($_POST) && isset($_POST['submit'])){

	$subcode = escape($_POST['subject']);
	$description = escape($_POST['description']);
	$year = escape($_POST['group1']);
	$filename = $_FILES['fileToUpload']['name'];
	$filepath = $subcode."/".$_FILES['fileToUpload']['name'];
	 $staff = $_SESSION['username'];
	
	try{
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
//saving notes details

	$sql = $dbh->prepare("INSERT INTO notes (subcode,year,staff)
			VALUES (?,?,?)") ;
			
			
$sql->bindParam(1,$subcode);
$sql->bindParam(2,$year);
$sql->bindParam(3,$staff);

$sql->execute();

//saving file details

$sql = $dbh->prepare("INSERT INTO notedb (subcode,description,filename,filepath)
			VALUES (?,?,?,?)") ;
			
$sql->bindParam(1,$subcode);
$sql->bindParam(2,$description);
$sql->bindParam(3,$filename);
$sql->bindParam(4,$filepath);		
		
$sql->execute();
}
catch(PDOException $e){
	echo $e->getMessage();
}

    




// uplaod to file directory

if (!file_exists("Files/".$subcode)) {
    mkdir("Files/".$subcode, 0777);
}
$target_dir = "Files/".$filepath;
$target_dir = "Files/".$filepath;
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//     if($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 2000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $message = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		
			echo "<SCRIPT>
			alert('$message');
			</SCRIPT>";
			
    } else {
        
		$message = "Sorry, there was an error uploading your file.";

			echo "<SCRIPT>
			alert('$message');
			</SCRIPT>";
			
    }
}}

//result set 

$stmt  = $dbh->prepare("SELECT  subcode FROM notes");
    $stmt->execute();
 $result = $stmt->fetchALL(PDO::FETCH_OBJ);




require '../templates/components/header.php';
require '../templates/components/navbar.php';
require '../templates/components/profile.php';
require '../templates/components/notes_element.php';
require '../templates/components/footer.php';
}else
	header('Location: index.php');

?>