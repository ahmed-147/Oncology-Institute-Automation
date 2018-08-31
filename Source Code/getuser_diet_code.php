<?php
    
    include 'config.php';
    
    
$q = $_GET['q'];


if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}

$sql="SELECT patient_code,patient_name FROM patients WHERE patient_code ='".$q."' ";

    
if($q)
{
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1) {
	
    $d= mysqli_fetch_assoc($result);
    
	$obj->patient_code=$d['patient_code'];
	$obj->patient_name= $d["patient_name"] ;
	
  
$sql1="SELECT ward,serial FROM adt WHERE patient_code ='" . $d['patient_code']. "' ORDER BY admission_date DESC LIMIT 1;" ;
	
	$result1 = mysqli_query($conn,$sql1);
	
	if(mysqli_num_rows($result1)==1) {
	
	$d1 = mysqli_fetch_assoc($result1);
		
		
	$sql6 ="SELECT * FROM adt_transfer where `ADT number` = " . $d1['serial']. " order by date desc limit 1 ";
			
            $queryResult1=mysqli_query($conn,$sql6);
				  
			$row1=mysqli_fetch_assoc($queryResult1);
				  	  
				  
			if(mysqli_num_rows($queryResult1) == 1)
			{
				
				$obj->ward= $row1['to_ward'] ;
	
	if($row1['to_ward'] == 1)
	{
		$sql2="SELECT current_diet FROM `men_current diet` WHERE patient_code ='" . $d['patient_code']. "' ;" ;
	
	$result2 = mysqli_query($conn,$sql2);	
	$d2 = mysqli_fetch_assoc($result2);
	
	$obj->diet= $d2[current_diet] ;
		
		
	}
		
	else if($row1['to_ward'] == 2)
	{
		$sql3="SELECT current_diet FROM `women_current diet` WHERE patient_code ='" . $d['patient_code']. "' ;" ;
	
	$result3 = mysqli_query($conn,$sql3);	
	$d2 = mysqli_fetch_assoc($result3);
	
	$obj->diet= $d2[current_diet] ;
		
		
	}
		
	else if($row1['to_ward']  || $row1['to_ward'] == 5)
	{
		$sql4="SELECT current_diet FROM `priv_current diet` WHERE patient_code ='" . $d['patient_code']. "' ;" ;
	
	$result4 = mysqli_query($conn,$sql4);	
	$d2 = mysqli_fetch_assoc($result4);
	
	$obj->diet= $d2[current_diet] ;
			
	}
		
	else if($row1['to_ward'] == 4)
	{
		$sql5="SELECT current_diet FROM `icu_current diet` WHERE patient_code ='" . $d['patient_code']. "' ;" ;
	
	$result5 = mysqli_query($conn,$sql5);	
	$d2 = mysqli_fetch_assoc($result5);
	
	$obj->diet= $d2[current_diet] ;
			
	}
			}
		
	else {
		
	$obj->ward= $d1['ward'] ;
	
	if($d1['ward'] == 1)
	{
		$sql2="SELECT current_diet FROM `men_current diet` WHERE patient_code ='" . $d['patient_code']. "' ;" ;
	
	$result2 = mysqli_query($conn,$sql2);	
	$d2 = mysqli_fetch_assoc($result2);
	
	$obj->diet= $d2[current_diet] ;
		
		
	}
		
	else if($d1['ward'] == 2)
	{
		$sql3="SELECT current_diet FROM `women_current diet` WHERE patient_code ='" . $d['patient_code']. "' ;" ;
	
	$result3 = mysqli_query($conn,$sql3);	
	$d2 = mysqli_fetch_assoc($result3);
	
	$obj->diet= $d2[current_diet] ;
		
		
	}
		
	else if($d1['ward'] == 3  || $d1['ward'] == 5)
	{
		$sql4="SELECT current_diet FROM `priv_current diet` WHERE patient_code ='" . $d['patient_code']. "' ;" ;
	
	$result4 = mysqli_query($conn,$sql4);	
	$d2 = mysqli_fetch_assoc($result4);
	
	$obj->diet= $d2[current_diet] ;
			
	}
		
	else if($d1['ward'] == 4)
	{
		$sql5="SELECT current_diet FROM `icu_current diet` WHERE patient_code ='" . $d['patient_code']. "' ;" ;
	
	$result5 = mysqli_query($conn,$sql5);	
	$d2 = mysqli_fetch_assoc($result5);
	
	$obj->diet= $d2[current_diet] ;
			
	}
	}
	echo json_encode($obj);
	}
 
} else {
    echo $q;
}
}
mysqli_close($conn);
?>
