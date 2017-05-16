<?php
require 'templates/header.php';
require 'templates/components/navbar.php';
require 'templates/components/search.php';
require 'templates/footer.php';


// Attempt search query execution
try{
    if(isset($_REQUEST['term'])){
        // create prepared statement
        $sql = "SELECT code FROM subject WHERE code LIKE :term";
        $stmt = $pdo->prepare($sql);
        $term = $_REQUEST['term'] . '%';
        // bind parameters to statement
        $stmt->bindParam(':term', $term);
        // execute the prepared statement
        $stmt->execute();
        if($stmt->rowCount() > 0){
            while($row = $stmt->fetch()){
                echo "<p>" . $row['name'] . "</p>";
            }
        } else{
            echo "<p>No matches found";
        }
    }
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

// Close connection
unset($pdo);
?>
