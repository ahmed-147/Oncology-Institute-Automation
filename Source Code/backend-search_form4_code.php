<?php


include 'config.php';
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$term2 = mysqli_real_escape_string($conn, $_REQUEST['term2']);

 
if(isset($term2)){
    
    // Attempt select query execution
    
    $query = "SELECT `patient_code` FROM `adt` WHERE `patient_code` LIKE '" . $term2 . "%'"; 
    
    
    if($result = mysqli_query($conn, $query)){
        
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['patient_code'] . "</p>";
            }
            
            // Close result set
            
            mysqli_free_result($result);
        } 
        
    } else{
        echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
    }
}
 
// close connection
mysqli_close($conn);
?>