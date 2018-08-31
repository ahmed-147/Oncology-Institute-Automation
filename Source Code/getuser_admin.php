
<?php
    
    include 'config.php';
    
    
$q = $_GET['q'];


if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}

$sql="SELECT * FROM users WHERE Name ='".$q."' ";

    
if($q)
{
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1) 
{
    
    $d= mysqli_fetch_assoc($result);
    
    $obj->username=$d['Username'];
	$obj->password=$d['Password'];
    $obj->salary=$d['Salary'];
    $obj->serial=$d['Serial'];
	
  
$sql1="SELECT * FROM user_type WHERE code = '" .$d['type']. "' " ;
	
	$result1 = mysqli_query($conn,$sql1);
	
	$d1 = mysqli_fetch_assoc($result1);
	
	$obj->type= $d1['code'] ;
    
	echo json_encode($obj);
 
} else {
    echo $q;
}
}

mysqli_close($conn);
?>
