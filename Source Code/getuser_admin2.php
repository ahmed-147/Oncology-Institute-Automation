
<?php
    
    include 'config.php';
    
    
$q = $_GET['q'];


if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}

$sql="SELECT * FROM op_nurses WHERE name ='".$q."' ";

    
if($q)
{
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1) 
{
    
    $d= mysqli_fetch_assoc($result);
    
    $obj->salary=$d['Salary'];
    $obj->code=$d['code'];
	
    
	echo json_encode($obj);
 
} else {
    echo $q;
}
}

mysqli_close($conn);
?>
