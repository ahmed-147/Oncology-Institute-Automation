
<?php
    
    include 'config.php';
    
    
$q = $_GET['q'];


if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}

$sql="SELECT * FROM adt WHERE patient_code ='".$q."' order by admission_date desc limit 1";

    
if($q)
{
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1) {
    $d= mysqli_fetch_assoc($result);
    
	$obj->patient_code=$d['patient_code'];
	$obj->admission_date=$d['admission_date'];
	$obj->ademission_dept=$d['ademission_dept'];
	$obj->admission_unit=$d['admission_unit'];
	$obj->ademission_doctor=$d['ademission_doctor'];
	$obj->ward=$d['ward'];
	$obj->consent_name=$d['consent_name'];
	$obj->consent_ID=$d['consent_ID'];
	$obj->consent_relation=$d['consent_relation'];
	
	
    
	echo json_encode($obj);
 
} else {
    echo $q;
}
}
mysqli_close($conn);
?>
