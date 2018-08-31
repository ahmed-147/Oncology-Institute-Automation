<?php

include 'config.php';
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$term = mysqli_real_escape_string($conn, $_REQUEST['term1']);

 
if(isset($term)){
    
    // Attempt select query execution
    
    $query = "SELECT name FROM doctors WHERE name LIKE '" . $term . "%'"; 

    
    if($result = mysqli_query($conn, $query)){
        
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['name'] . "</p>";
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