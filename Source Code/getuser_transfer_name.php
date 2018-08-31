<?php
    
    include 'config.php';
    
    
$q = $_GET['q'];


if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}

$sql="SELECT patient_code FROM patients WHERE patient_name = '".$q."' ";

    
if($q)
{
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1) {
	
    $d= mysqli_fetch_assoc($result);
    
    $obj->patient_code=$d['patient_code'];
	$obj->patient_name= $d['patient_name'] ;
	
  
$sql1="SELECT * FROM adt WHERE patient_code ='" . $d['patient_code']. "' order by admission_date desc limit 1 " ;
	
	$result1 = mysqli_query($conn,$sql1);
	
	$d1 = mysqli_fetch_assoc($result1);
	
	
	if(mysqli_num_rows($result1)==1) {
		
	
	$sql6 ="SELECT * FROM adt_transfer where `ADT number` = ".$d1['serial']." order by date desc limit 1 ";
			
    $queryResult1=mysqli_query($conn,$sql6);
				  
	$row1=mysqli_fetch_assoc($queryResult1);
	
	if(mysqli_num_rows($queryResult1)==1) {
		
		$obj->from_ward=$row1['from_ward'];
		$obj->from_dept=$row1['from_dept'];
		$obj->to_ward=$row1['to_ward'];
		$obj->to_dept=$row1['to_dept'];
		$obj->ademission_doctor=$row1['transfer_doctor'];
		
	}
	else if (mysqli_num_rows($queryResult1) == 0)
	{
		if(mysqli_num_rows($result1)==1) 
		{
		$obj->from_ward=$d1['ward'];
		$obj->from_dept=$d1['ademission_dept'];
		$obj->ademission_doctor=$d1['ademission_doctor'];
	}
		}
	
	}
	echo json_encode($obj);
 
} else {
    echo $q;
}
}
mysqli_close($conn);
?>
