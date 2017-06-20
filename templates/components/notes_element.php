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
	$sql = $dbh->prepare("INSERT INTO notes (subcode,description,year,staff,filename,filepath)
			VALUES (?,?,?,?,?,?)") ;
$sql->bindParam(1,$subcode);
$sql->bindParam(2,$description);
$sql->bindParam(3,$year);
$sql->bindParam(4,$staff);
$sql->bindParam(5,$filename);
$sql->bindParam(6,$filepath);

		
		
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

$stmt  = $dbh->prepare("SELECT* FROM notes");
    $stmt->execute();
 $result = $stmt->fetchAll(PDO::FETCH_OBJ);
}

 ?>



<div class="col-md-6" Style="margin-top:4%;">

   
   
   
<div class="list-group" Style="margin-bottom:5%;">
  <a href="#" class="list-group-item disabled" Style="background-color:#262626;color:white;">
    <Strong>SE1018</Strong>&nbsp  - &nbsp WEB PROGRAMMING </a>
	
	
  <a href="#" class="list-group-item justify-content-between">AJAX.ppt  <span class="badge badge-danger badge-pill">x</span></a>
	
</div>
  



</div>

<div class="col-md-3">


<!--Form with header-->
<div class="card" Style="width:auto; margin:10%;">
    <div class="card-block">


	<form action="index.php/?page=notes" method="post" enctype="multipart/form-data" >
        <!--Header-->
        <div class="form-header blue-gradient">
            <h3><i class="fa fa-upload"></i> Upload Notes</h3>
        </div>

        <!--Body-->
        <div class="md-form">
            <i class="fa fa-book prefix"></i>
            <input type="text" id="form3" id='fileToUpload' name="subject" class="form-control">
            <label for="form3">Subject code</label>
        </div>
         <div class="md-form">
            <i class="fa fa-file-text prefix"></i>
            <input type="text" id="form3" id="description" name="description" class="form-control">
            <label for="form3">Description(Topic)</label>
        </div>
			<div class="form-inline" Style="margin:5%">

				<fieldset class="form-group"Style="margin:5%" >
					<input name="group1" type="radio" value="1" id="radio11" checked="checked">
					<label for="radio11">1st year</label>
				</fieldset>

				<fieldset class="form-group" Style="margin:5%">
					<input name="group1" type="radio" value="2" id="radio21">
					<label for="radio21">2nd year</label>
				</fieldset>

				<fieldset class="form-group" Style="margin:5%">
					<input name="group1" type="radio" value="3" id="radio31">
					<label for="radio31">3rd year</label>
				</fieldset>
				<fieldset class="form-group" Style="margin:5%">
					<input name="group1" type="radio" value="4" id="radio41">
					<label for="radio31">4th year</label>
				</fieldset>
			</div>

       <div class="text-center">
      <div class="file-field">
        <div class="btn btn-primary btn-sm">
            <span >Choose file</span>
            <input type="file" name="fileToUpload"  id="fileToUpload" multiple >
        </div>
           <button class="btn btn-indigo mb-1" type="submit" name="submit" ><span><i class="fa fa-upload"></i></span>&nbsp Upload</button>
          </div>
       </div>
         </form>


    </div>
</div>
</div>
</div>
</div>
