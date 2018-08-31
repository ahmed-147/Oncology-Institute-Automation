<?php
    
    include 'config.php';
    
    
$q = $_GET['q'];


if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}

$sql="SELECT * FROM `op_operative_record` WHERE patient_code ='".$q."' order by Date desc limit 1";
   
if($q)
{
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1) 
{
	
    $d= mysqli_fetch_assoc($result);

    $sql1="SELECT patient_name,age FROM patients WHERE patient_code ='" . $d['Patient_code']. "' ;" ;
	
	$result1 = mysqli_query($conn,$sql1);
	
	$d1 = mysqli_fetch_assoc($result1);
    
	
	$obj->name= $d1["patient_name"];
	$obj->age= $d1["age"];
    
    
    $obj->Date= $d["Date"];
    $obj->Operating_room= $d["Operating_room"];
    $obj->Pre_diag= $d["Pre-op_diag"];
    $obj->post_diag= $d["post-op_diag"];
    $obj->Op_category= $d["Op_category"];
    $obj->Op_type= $d["Op_type"];
    $obj->Op_nature= $d["Op_nature"];
    $obj->Surgeon= $d["Surgeon"];
    $obj->Ass1_Surgeon= $d["Ass1_Surgeon"];
    $obj->Ass2_Surgeon= $d["Ass2_Surgeon"];
    $obj->Ass3_Surgeon= $d["Ass3_Surgeon"];
    $obj->Ass4_Surgeon= $d["Ass4_Surgeon"];
    $obj->Anesth1= $d["Anesth1"];
    $obj->Anesth2= $d["Anesth2"];
    $obj->Scrub_nurse1= $d["Scrub_nurse1"];
    $obj->Scrub_nurse2= $d["Scrub_nurse2"];
    $obj->Circ_nurse1= $d["Circ_nurse1"];
    $obj->Circ_nurse2= $d["Circ_nurse2"];
    
    $obj->An_tech1= $d["An-tech1"];
    $obj->An_tech2= $d["An-tech2"];
    $obj->An_tech3= $d["An-tech3"];
    $obj->An_tech4= $d["An-tech4"];
    $obj->An_tech5= $d["An-tech5"];
    $obj->An_tech6= $d["An-tech6"];
    $obj->An_tech7= $d["An-tech7"];
    $obj->An_tech8= $d["An-tech8"];
    $obj->An_tech9= $d["An-tech9"];
    
    $obj->An_begin= $d["An_begin"];
    $obj->An_end= $d["An_end"];
    $obj->Op_begin= $d["Op_begin"];
    $obj->Op_end= $d["Op_end"];
    $obj->Wound_class= $d["Wound_class"];
    
    $obj->Body_system1= $d["Body_system1"];
    $obj->Body_system2= $d["Body_system2"];
    $obj->Body_system3= $d["Body_system3"];
    $obj->Body_system4= $d["Body_system4"];
    $obj->Body_system5= $d["Body_system5"];
    $obj->Body_system6= $d["Body_system6"];
    $obj->Body_system7= $d["Body_system7"];
    $obj->Body_system8= $d["Body_system8"];
    $obj->Body_system9= $d["Body_system9"];
    $obj->Body_system10= $d["Body_system10"];
    $obj->Body_system11= $d["Body_system11"];
    $obj->Body_system12= $d["Body_system12"];
    $obj->Body_system13= $d["Body_system13"];
    $obj->Body_system14= $d["Body_system14"];
    $obj->Body_system15= $d["Body_system15"];
    $obj->Body_system16= $d["Body_system16"];
    $obj->Body_system17= $d["Body_system17"];
    $obj->Body_system18= $d["Body_system18"];
    $obj->Body_system19= $d["Body_system19"];
    
    $obj->Blood_type1= $d["Blood_type1"];
    $obj->Blood_units1= $d["Blood_units1"];
    $obj->Blood_type2= $d["Blood_type2"];
    $obj->Blood_units2= $d["Blood_units2"];
    
    $obj->Blood_loss= $d["Blood_loss"];
    
    $obj->Op_procedure_type= $d["Op_procedure_type"];
    $obj->Op_procedure_details= $d["Op_procedure_details"];
    $obj->Intra_op_comp= $d["Intra-op_comp"];

    

	echo json_encode($obj);
 
} else {
    echo $q;
}
}
mysqli_close($conn);
?>
