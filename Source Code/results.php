<?php
    
    include 'config.php';
    
    
$q = $_GET['q'];


if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}

$sql="SELECT * FROM seci.lab1_esr where patient_code ='".$q."' ";

    mysqli_query($conn,"SET NAMES 'utf8'");
    mysqli_query($conn,"SET CHARACTER SET utf8");
    mysqli_query($conn,"SET COLLATION_CONNECTION = 'utf8_unicode_ci'");
if($q)
{
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1) {
    $d= mysqli_fetch_assoc($result);
    
    $obj->Lab_number=$d['Lab_number'];
	$obj->Specimen_date=$d['Specimen_date'];
	$obj->Report_date=$d['Report_date'];
	
	echo json_encode($obj);
 
} else {
    echo $q;
}
}
mysqli_close($conn);
?>