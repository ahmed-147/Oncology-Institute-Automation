
<?php
    
    include 'config.php';
    
    
$q = $_GET['q'];


if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}

$sql="SELECT * FROM patients WHERE patient_name ='".$q."' ";

// $sql1 = "select `district text` from districts join patients on districts.code = patients.district where patient_name = '".$q."' ";

    
if($q)
{
$result = mysqli_query($conn,$sql);
	
//$result1 = mysqli_query($conn,$sql1);
	
if(mysqli_num_rows($result)==1) {
    
	$d = mysqli_fetch_assoc($result);
	
	$obj->patient_code=$d['patient_code'];
	$obj->gender=$d['gender'];
	$obj->patient_name=$d['patient_name'];
	$obj->Marital_status=$d['Marital_status'];
	$obj->National_ID_number=$d['National_ID_number'];
	$obj->governorate=$d['governorate'];
	$obj->village=$d['village'];
	$obj->address=$d['address'];
	$obj->next_of_kin=$d['next_of_kin'];
	$obj->job=$d['job'];
	$obj->job_details=$d['job_details'];
	$obj->age=$d['age'];
	$obj->birth_date=$d['birth_date'];
	$obj->Mob=$d['Mob'];
	$obj->initial_diagnosis=$d['initial_diagnosis'];
	
  
$sql1="SELECT district_text FROM districts WHERE code ='" . $d['district']. "' ;" ;
	
	$result1 = mysqli_query($conn,$sql1);
	
	$d1 = mysqli_fetch_assoc($result1);
	
	$obj->district= $d1["district_text"] ;
    
	echo json_encode($obj);
 
} else {
    echo $q;
}
}
mysqli_close($conn);
?>
