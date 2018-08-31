<?php

include 'config.php';
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$term4 = mysqli_real_escape_string($conn, $_REQUEST['term4']);

 
if(isset($term4)){
    
    // Attempt select query execution
    
    $query = "SELECT Final_Diagnosis FROM patients WHERE Final_Diagnosis LIKE '" . $term4 . "%'"; 
    

    if($result = mysqli_query($conn, $query)){
        
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['Final_Diagnosis'] . "</p>";
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