<?php
include "config.php";


 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$term1 = mysqli_real_escape_string($conn, $_REQUEST['term1']);

 
if(isset($term1)){
    
    // Attempt select query execution
    
    $query = "SELECT `patient_code` FROM seci.lab1_urinalysis WHERE `patient_code` LIKE '" . $term1 . "%'"; 
    
    mysqli_query($conn,"SET NAMES 'utf8'");
    mysqli_query($conn,"SET CHARACTER SET utf8");
    mysqli_query($conn,"SET COLLATION_CONNECTION = 'utf8_unicode_ci'");
    
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