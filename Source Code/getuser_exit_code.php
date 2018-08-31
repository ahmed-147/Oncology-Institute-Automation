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
    
	$obj->discharge_date=$d['discharge_date'];
	$obj->discharge_dept=$d['discharge_dept'];
	$obj->admission_reason=$d['admission_reason'];
	$obj->Operations=$d['Operations'];
	$obj->Discharge_condition=$d['Discharge_condition'];
	$obj->follow_up=$d['follow_up'];
	$obj->follow_up_site=$d['follow_up_site'];
	$obj->discharge_doctor=$d['discharge_doctor'];
	
  
$sql1="SELECT Topography,Morphology,Laterality,Stage,Final_Diagnosis 
FROM patients WHERE patient_code ='" . $d['patient_code']. "' ;" ;
	
	$result1 = mysqli_query($conn,$sql1);
	
	$d1 = mysqli_fetch_assoc($result1);
	
	$obj->Topography= $d1["Topography"];
	$obj->Morphology= $d1["Morphology"];
	$obj->Laterality= $d1["Laterality"];
	$obj->Stage= $d1["Stage"];
	$obj->Final_Diagnosis= $d1["Final_Diagnosis"];
    
	echo json_encode($obj);
 
} else {
    echo $q;
}
}
mysqli_close($conn);
?>
