<?php ob_start(); ?>

<?php

 session_start();
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta charset="utf8mb4_general_ci">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">   
<link rel="stylesheet" href="css/bootstrap.css"/>  
<link rel="stylesheet" href="css/diet_print_report.css"/>	
</head>

<body>
    
    
    <header class="head">
            
        <div class="div4" >
                <div class="div5" >
                <img src="download.png" class="pic2" />
                    
                </div>
                
                <div class="div6" >
                    <p class="p2">جامعة اسيوط</p>
                </div>
            </div>
            <div class="div3">
         		<h2 class="title"><span>المرضى الموجودين بالقسم المجانى للمعهد</span></h2>
		
		<div class="date"><?php $SomeDate = new DateTime(); echo $SomeDate->format('Y-m-d'); ?></div>
		
            </div>
       <div class="div1">
                
                <div class="div2">
                <img src="cancer 2.jpg" class="pic1" style="width: 60%;height: 100%"/>
                    
                </div>
                <div class="p1-1">
                    <p  class="p1">معهد جنوب مصر للاورام</p>
                </div>
            </div>
           
    </header>
	
	<form method="post">
		
		
		<div class="total">
			<label class="l1">إجمالى عدد المرضى = </label>
			<span class="inp2" name="num">
		
		<?php
				
		include"config.php";
				
		if(isset($_SESSION['username']))
			{
			
			
				$men_diet = 0 ;
				$men1_diet = 0 ;	
				$women_diet = 0 ;
				$women1_diet = 0 ;
				$children_diet = 0 ;				
				$intensive_diet = 0 ;

				
				
            $sql="SELECT * FROM adt where discharge_date is null";
			
            $result=mysqli_query($conn,$sql);
                
			if($result)
            {
              while($d=mysqli_fetch_assoc($result))
            {
				  
			$sql1 ="SELECT * FROM adt_transfer where `ADT number` = " . $d['serial']. " order by date desc limit 1 ";
			
            $result1=mysqli_query($conn,$sql1);
				  
			$d1=mysqli_fetch_assoc($result1);
			
			if($d1[to_dept] == 1 && $d1[to_ward] == 1)
			 {
					  			  
			$sql2 ="SELECT current_diet FROM `men_current diet` where patient_code = '" .$d1['patient_code']. "' "; 
	
			$result2 = mysqli_query($conn,$sql2);
	
			$d2 = mysqli_fetch_assoc($result2);
				
				$men_diet ++ ;
				
				
				  }
				  
				else if ($d[ward] == 1 && $d[ademission_dept] == 1){
				
				if(mysqli_num_rows($result1) == 0){
				  
			$sql3 ="SELECT current_diet FROM `men_current diet` where patient_code = '" .$d['patient_code']. "' "; ;
	
			$result3 = mysqli_query($conn,$sql3);
	
			$d3 = mysqli_fetch_assoc($result3);
									  
				$men_diet ++ ;
					
			  }
			  }
				  				  
			
			if($d1[to_dept] == 15 && $d1[to_ward] == 1)
			 {
					  			  
			$sql5 ="SELECT current_diet FROM `men_current diet` where patient_code = '" .$d1['patient_code']. "' "; ;
	
			$result5 = mysqli_query($conn,$sql5);
	
			$d5 = mysqli_fetch_assoc($result5);
				
				$men1_diet ++ ;
				
				  }
				  
				else if ($d[ward] == 1 && $d[ademission_dept] == 15){
				
				if(mysqli_num_rows($result1) == 0){
				  
			$sql6 ="SELECT current_diet FROM `men_current diet` where patient_code = '" .$d['patient_code']. "' "; ;
	
			$result6 = mysqli_query($conn,$sql6);
	
			$d6 = mysqli_fetch_assoc($result6);
									  
					
				$men1_diet ++ ;

			  }
			  }
				  
			
			
			if($d1[to_dept] == 2 && $d1[to_ward] == 2)
			 {
					  			  
			$sql8 ="SELECT current_diet FROM `women_current diet` where patient_code = '" .$d1['patient_code']. "' "; ;
	
			$result8 = mysqli_query($conn,$sql8);
	
			$d8 = mysqli_fetch_assoc($result8);
				
				$women_diet ++ ;
				
				  }
				  
				else if ($d[ward] == 2 && $d[ademission_dept] == 2){
				
				if(mysqli_num_rows($result1) == 0){
				  
			$sql9 ="SELECT current_diet FROM `women_current diet` where patient_code = '" .$d['patient_code']. "' "; ;
	
			$result9 = mysqli_query($conn,$sql9);
	
			$d9 = mysqli_fetch_assoc($result9);
									  
				$women_diet ++ ;	
				
			  }
			  }
				  

			if($d1[to_dept] == 16 && $d1[to_ward] == 2)
			 {
					  			  
			$sql11 ="SELECT current_diet FROM `women_current diet` where patient_code = '" .$d1['patient_code']. "' "; ;
	
			$result11 = mysqli_query($conn,$sql11);
	
			$d11 = mysqli_fetch_assoc($result11);
				
				$women1_diet ++ ;
				
				  }
				  
				else if ($d[ward] == 2 && $d[ademission_dept] == 16){
				
				if(mysqli_num_rows($result1) == 0){
				  
			$sql12 ="SELECT current_diet FROM `women_current diet` where patient_code = '" .$d['patient_code']. "' "; ;
	
			$result12 = mysqli_query($conn,$sql12);
	
			$d12 = mysqli_fetch_assoc($result12);
									  
					$women1_diet ++ ;
					
			  }
			  }
				  
				  
			if($d1[to_ward] == 3)
			 {
					  			  
			$sql14 ="SELECT current_diet FROM `priv_current diet` where patient_code = '" .$d1['patient_code']. "' "; ;
	
			$result14 = mysqli_query($conn,$sql14);
	
			$d14 = mysqli_fetch_assoc($result14);
				
				$children_diet ++ ;
				
				  }
				  
				else if ($d[ward] == 3){
				
				if(mysqli_num_rows($result1) == 0){
				  
			$sql15 ="SELECT current_diet FROM `priv_current diet` where patient_code = '" .$d['patient_code']. "' "; ;
	
			$result15 = mysqli_query($conn,$sql15);
	
			$d15 = mysqli_fetch_assoc($result15);
									  
					
				$children_diet ++ ;

			  }
			  }
				  
				  
				  
			if($d1[to_ward] == 4)
			 {
					  			  
			$sql17 ="SELECT current_diet FROM `icu_current diet` where patient_code = '" .$d1['patient_code']. "' "; ;
	
			$result17 = mysqli_query($conn,$sql17);
	
			$d17 = mysqli_fetch_assoc($result17);
				
				$intensive_diet ++ ;
				
				  }
				  
				else if ($d[ward] == 4){
				
				if(mysqli_num_rows($result1) == 0){
				  
			$sql18 ="SELECT current_diet FROM `icu_current diet` where patient_code = '" .$d['patient_code']. "' "; ;
	
			$result18 = mysqli_query($conn,$sql18);
	
			$d18 = mysqli_fetch_assoc($result18);
									  
				
					$intensive_diet ++ ;
				
			  }
			  }
				  				  	  
			}
			}
				
			$total = $men_diet + $men1_diet + $women_diet + $women1_diet 
				+ $children_diet + $intensive_diet ;
			
			
				printf("%d\n",$total);										 
		}
				 
				
		else {
    
    	header('Location: login1.php');
    	exit();

			}
															  
		?>
			</span>
			
		<button type="button" class="btn btn-primary" id="butt1"
		data-toggle="tooltip" title="طباعة">
		<span class="glyphicon glyphicon-print"></span> 
		</button>
			
		</div>
	
	<table border="3" rules="all" class="report_table">
	
		<thead>
			<th class="th1">الغذاء</th><th class="th2">رجال جراحة</th>
			<th class="th3">رجال باطنة</th><th class="th4">نساء جراحه</th>
			<th class="th5">نساء باطنة</th><th class="th6">أطفال</th>
			<th class="th7">العناية</th><th class="th9">مجموع</th>
		</thead>
		
		<tbody>
			
					
					
		<?php
			
            include 'config.php';
			
			if(isset($_SESSION['username']))
			{
				
				$men_diet0 = 0 ;
				$men_diet1 = 0 ;
				$men_diet2 = 0 ;
				$men_diet3 = 0 ;
				$men_diet4 = 0 ;
				$men_diet5 = 0 ;
				$men_diet6 = 0 ;
				
				$men1_diet0 = 0 ;
				$men1_diet1 = 0 ;
				$men1_diet2 = 0 ;
				$men1_diet3 = 0 ;
				$men1_diet4 = 0 ;
				$men1_diet5 = 0 ;
				$men1_diet6 = 0 ;
				
				$women_diet0 = 0 ;
				$women_diet1 = 0 ;
				$women_diet2 = 0 ;
				$women_diet3 = 0 ;
				$women_diet4 = 0 ;
				$women_diet5 = 0 ;
				$women_diet6 = 0 ;
				
				$women1_diet0 = 0 ;
				$women1_diet1 = 0 ;
				$women1_diet2 = 0 ;
				$women1_diet3 = 0 ;
				$women1_diet4 = 0 ;
				$women1_diet5 = 0 ;
				$women1_diet6 = 0 ;
				
				$children_diet0 = 0 ;
				$children_diet1 = 0 ;
				$children_diet2 = 0 ;
				$children_diet3 = 0 ;
				$children_diet4 = 0 ;
				$children_diet5 = 0 ;
				$children_diet6 = 0 ;
				
				$intensive_diet0 = 0 ;
				$intensive_diet1 = 0 ;
				$intensive_diet2 = 0 ;
				$intensive_diet3 = 0 ;
				$intensive_diet4 = 0 ;
				$intensive_diet5 = 0 ;
				$intensive_diet6 = 0 ;
				
				
            $sql="SELECT * FROM adt where discharge_date is null";
			
            $result=mysqli_query($conn,$sql);
                
			if($result)
            {
              while($d=mysqli_fetch_assoc($result))
            {
				  
			$sql1 ="SELECT * FROM adt_transfer where `ADT number` = " . $d['serial']. " order by date desc limit 1";
			
            $result1=mysqli_query($conn,$sql1);
				  
			$d1=mysqli_fetch_assoc($result1);
			
			if($d1[to_dept] == 1 && $d1[to_ward] == 1)
			 {
					  			  
			$sql2 ="SELECT current_diet FROM `men_current diet` where patient_code = '" .$d1['patient_code']. "' "; ;
	
			$result2 = mysqli_query($conn,$sql2);
	
			$d2 = mysqli_fetch_assoc($result2);
				
				if($d2[current_diet] == 0)
				{
					$men_diet0 ++ ;
				}
				else if ($d2[current_diet] == 1)
				{
					$men_diet1 ++ ;
				}
				else if ($d2[current_diet] == 2)
				{
					$men_diet2 ++ ;
				}
				else if ($d2[current_diet] == 3)
				{
					$men_diet3 ++ ;
				}
				else if ($d2[current_diet] == 4)
				{
					$men_diet4 ++ ;
				}
				else if ($d2[current_diet] == 5)
				{
					$men_diet5 ++ ;
				}
				else if ($d2[current_diet] == 6)
				{
					$men_diet6 ++ ;
				}
				
				
				  }
				  
				else if ($d[ward] == 1 && $d[ademission_dept] == 1){
				
				if(mysqli_num_rows($result1) == 0){
				  
			$sql3 ="SELECT current_diet FROM `men_current diet` where patient_code = '" .$d['patient_code']. "' "; ;
	
			$result3 = mysqli_query($conn,$sql3);
	
			$d3 = mysqli_fetch_assoc($result3);
									  
					
				if($d3[current_diet] == 0)
				{
					$men_diet0 ++ ;
				}
				else if ($d3[current_diet] == 1)
				{
					$men_diet1 ++ ;
				}
				else if ($d3[current_diet] == 2)
				{
					$men_diet2 ++ ;
				}
				else if ($d3[current_diet] == 3)
				{
					$men_diet3 ++ ;
				}
				else if ($d3[current_diet] == 4)
				{
					$men_diet4 ++ ;
				}
				else if ($d3[current_diet] == 5)
				{
					$men_diet5 ++ ;
				}
				else if ($d3[current_diet] == 6)
				{
					$men_diet6 ++ ;
				}

			  }
			  }
				  
			$sql4 ="SELECT text FROM seci.diet LIMIT 0,1"; 
	
			$result4 = mysqli_query($conn,$sql4);
	
			$d4 = mysqli_fetch_assoc($result4);
  
				  
				  
			
			if($d1[to_dept] == 15 && $d1[to_ward] == 1)
			 {
					  			  
			$sql5 ="SELECT current_diet FROM `men_current diet` where patient_code = '" .$d1['patient_code']. "' "; ;
	
			$result5 = mysqli_query($conn,$sql5);
	
			$d5 = mysqli_fetch_assoc($result5);
				
				if($d5[current_diet] == 0)
				{
					$men1_diet0 ++ ;
				}
				else if ($d5[current_diet] == 1)
				{
					$men1_diet1 ++ ;
				}
				else if ($d5[current_diet] == 2)
				{
					$men1_diet2 ++ ;
				}
				else if ($d5[current_diet] == 3)
				{
					$men1_diet3 ++ ;
				}
				else if ($d5[current_diet] == 4)
				{
					$men1_diet4 ++ ;
				}
				else if ($d5[current_diet] == 5)
				{
					$men1_diet5 ++ ;
				}
				else if ($d5[current_diet] == 6)
				{
					$men1_diet6 ++ ;
				}
				
				
				  }
				  
				else if ($d[ward] == 1 && $d[ademission_dept] == 15){
				
				if(mysqli_num_rows($result1) == 0){
				  
			$sql6 ="SELECT current_diet FROM `men_current diet` where patient_code = '" .$d['patient_code']. "' "; ;
	
			$result6 = mysqli_query($conn,$sql6);
	
			$d6 = mysqli_fetch_assoc($result6);
									  
					
				if($d6[current_diet] == 0)
				{
					$men1_diet0 ++ ;
				}
				else if ($d6[current_diet] == 1)
				{
					$men1_diet1 ++ ;
				}
				else if ($d6[current_diet] == 2)
				{
					$men1_diet2 ++ ;
				}
				else if ($d6[current_diet] == 3)
				{
					$men1_diet3 ++ ;
				}
				else if ($d6[current_diet] == 4)
				{
					$men1_diet4 ++ ;
				}
				else if ($d6[current_diet] == 5)
				{
					$men1_diet5 ++ ;
				}
				else if ($d6[current_diet] == 6)
				{
					$men1_diet6 ++ ;
				}

			  }
			  }
				  
			$sql7 ="SELECT text FROM seci.diet LIMIT 1,1"; 
	
			$result7 = mysqli_query($conn,$sql7);
	
			$d7 = mysqli_fetch_assoc($result7);

			
			
			if($d1[to_dept] == 2 && $d1[to_ward] == 2)
			 {
					  			  
			$sql8 ="SELECT current_diet FROM `women_current diet` where patient_code = '" .$d1['patient_code']. "' "; ;
	
			$result8 = mysqli_query($conn,$sql8);
	
			$d8 = mysqli_fetch_assoc($result8);
				
				if($d8[current_diet] == 0)
				{
					$women_diet0 ++ ;
				}
				else if ($d8[current_diet] == 1)
				{
					$women_diet1 ++ ;
				}
				else if ($d8[current_diet] == 2)
				{
					$women_diet2 ++ ;
				}
				else if ($d8[current_diet] == 3)
				{
					$women_diet3 ++ ;
				}
				else if ($d8[current_diet] == 4)
				{
					$women_diet4 ++ ;
				}
				else if ($d8[current_diet] == 5)
				{
					$women_diet5 ++ ;
				}
				else if ($d8[current_diet] == 6)
				{
					$women_diet6 ++ ;
				}
				
				
				  }
				  
				else if ($d[ward] == 2 && $d[ademission_dept] == 2){
				
				if(mysqli_num_rows($result1) == 0){
				  
			$sql9 ="SELECT current_diet FROM `women_current diet` where patient_code = '" .$d['patient_code']. "' "; ;
	
			$result9 = mysqli_query($conn,$sql9);
	
			$d9 = mysqli_fetch_assoc($result9);
									  
					
				if($d9[current_diet] == 0)
				{
					$women_diet0 ++ ;
				}
				else if ($d9[current_diet] == 1)
				{
					$women_diet1 ++ ;
				}
				else if ($d9[current_diet] == 2)
				{
					$women_diet2 ++ ;
				}
				else if ($d9[current_diet] == 3)
				{
					$women_diet3 ++ ;
				}
				else if ($d9[current_diet] == 4)
				{
					$women_diet4 ++ ;
				}
				else if ($d9[current_diet] == 5)
				{
					$women_diet5 ++ ;
				}
				else if ($d9[current_diet] == 6)
				{
					$women_diet6 ++ ;
				}

			  }
			  }
				  
			$sql10 ="SELECT text FROM seci.diet LIMIT 2,1"; 
	
			$result10 = mysqli_query($conn,$sql10);
	
			$d10 = mysqli_fetch_assoc($result10);
				  
				  
				  
			
			if($d1[to_dept] == 16 && $d1[to_ward] == 2)
			 {
					  			  
			$sql11 ="SELECT current_diet FROM `women_current diet` where patient_code = '" .$d1['patient_code']. "' "; ;
	
			$result11 = mysqli_query($conn,$sql11);
	
			$d11 = mysqli_fetch_assoc($result11);
				
				if($d11[current_diet] == 0)
				{
					$women1_diet0 ++ ;
				}
				else if ($d11[current_diet] == 1)
				{
					$women1_diet1 ++ ;
				}
				else if ($d11[current_diet] == 2)
				{
					$women1_diet2 ++ ;
				}
				else if ($d11[current_diet] == 3)
				{
					$women1_diet3 ++ ;
				}
				else if ($d11[current_diet] == 4)
				{
					$women1_diet4 ++ ;
				}
				else if ($d11[current_diet] == 5)
				{
					$women1_diet5 ++ ;
				}
				else if ($d11[current_diet] == 6)
				{
					$women1_diet6 ++ ;
				}
				
				
				  }
				  
				else if ($d[ward] == 2 && $d[ademission_dept] == 16){
				
				if(mysqli_num_rows($result1) == 0){
				  
			$sql12 ="SELECT current_diet FROM `women_current diet` where patient_code = '" .$d['patient_code']. "' "; ;
	
			$result12 = mysqli_query($conn,$sql12);
	
			$d12 = mysqli_fetch_assoc($result12);
									  
					
				if($d12[current_diet] == 0)
				{
					$women1_diet0 ++ ;
				}
				else if ($d12[current_diet] == 1)
				{
					$women1_diet1 ++ ;
				}
				else if ($d12[current_diet] == 2)
				{
					$women1_diet2 ++ ;
				}
				else if ($d12[current_diet] == 3)
				{
					$women1_diet3 ++ ;
				}
				else if ($d12[current_diet] == 4)
				{
					$women1_diet4 ++ ;
				}
				else if ($d12[current_diet] == 5)
				{
					$women1_diet5 ++ ;
				}
				else if ($d12[current_diet] == 6)
				{
					$women1_diet6 ++ ;
				}

			  }
			  }
				  
			$sql13 ="SELECT text FROM seci.diet LIMIT 3,1"; 
	
			$result13 = mysqli_query($conn,$sql13);
	
			$d13 = mysqli_fetch_assoc($result13);
				  
				  
				  
			if($d1[to_ward] == 3)
			 {
					  			  
			$sql14 ="SELECT current_diet FROM `priv_current diet` where patient_code = '" .$d1['patient_code']. "' "; ;
	
			$result14 = mysqli_query($conn,$sql14);
	
			$d14 = mysqli_fetch_assoc($result14);
				
				if($d14[current_diet] == 0)
				{
					$children_diet0 ++ ;
				}
				else if ($d14[current_diet] == 1)
				{
					$children_diet1 ++ ;
				}
				else if ($d14[current_diet] == 2)
				{
					$children_diet2 ++ ;
				}
				else if ($d14[current_diet] == 3)
				{
					$children_diet3 ++ ;
				}
				else if ($d14[current_diet] == 4)
				{
					$children_diet4 ++ ;
				}
				else if ($d14[current_diet] == 5)
				{
					$children_diet5 ++ ;
				}
				else if ($d14[current_diet] == 6)
				{
					$children_diet6 ++ ;
				}
				
				
				  }
				  
				else if ($d[ward] == 3){
				
				if(mysqli_num_rows($result1) == 0){
				  
			$sql15 ="SELECT current_diet FROM `priv_current diet` where patient_code = '" .$d['patient_code']. "' "; ;
	
			$result15 = mysqli_query($conn,$sql15);
	
			$d15 = mysqli_fetch_assoc($result15);
									  
					
				if($d15[current_diet] == 0)
				{
					$children_diet0 ++ ;
				}
				else if ($d15[current_diet] == 1)
				{
					$children_diet1 ++ ;
				}
				else if ($d15[current_diet] == 2)
				{
					$children_diet2 ++ ;
				}
				else if ($d15[current_diet] == 3)
				{
					$children_diet3 ++ ;
				}
				else if ($d15[current_diet] == 4)
				{
					$children_diet4 ++ ;
				}
				else if ($d15[current_diet] == 5)
				{
					$children_diet5 ++ ;
				}
				else if ($d15[current_diet] == 6)
				{
					$children_diet6 ++ ;
				}

			  }
			  }
				  
			$sql16 ="SELECT text FROM seci.diet LIMIT 4,1"; 
	
			$result16 = mysqli_query($conn,$sql16);
	
			$d16 = mysqli_fetch_assoc($result16);	  
			
				
				  
				  
			if($d1[to_ward] == 4)
			 {
					  			  
			$sql17 ="SELECT current_diet FROM `icu_current diet` where patient_code = '" .$d1['patient_code']. "' "; ;
	
			$result17 = mysqli_query($conn,$sql17);
	
			$d17 = mysqli_fetch_assoc($result17);
				
				if($d17[current_diet] == 0)
				{
					$intensive_diet0 ++ ;
				}
				else if($d17[current_diet] == 1)
				{
					$intensive_diet1 ++ ;
				}
				else if($d17[current_diet] == 2)
				{
					$intensive_diet2 ++ ;
				}
				else if ($d17[current_diet] == 3)
				{
					$intensive_diet3 ++ ;
				}
				else if ($d17[current_diet] == 4)
				{
					$intensive_diet4 ++ ;
				}
				else if ($d17[current_diet] == 5)
				{
					$intensive_diet5 ++ ;
				}
				else if ($d17[current_diet] == 6)
				{
					$intensive_diet6 ++ ;
				}
				
				
				  }
				  
				else if ($d[ward] == 4){
				
				if(mysqli_num_rows($result1) == 0){
				  
			$sql18 ="SELECT current_diet FROM `icu_current diet` where patient_code = '" .$d['patient_code']. "' "; ;
	
			$result18 = mysqli_query($conn,$sql18);
	
			$d18 = mysqli_fetch_assoc($result18);
									  
					
				if($d18[current_diet] == 0)
				{
					$intensive_diet0 ++ ;
				}
				else if ($d18[current_diet] == 1)
				{
					$intensive_diet1 ++ ;
				}
				else if ($d18[current_diet] == 2)
				{
					$intensive_diet2 ++ ;
				}
				else if ($d18[current_diet] == 3)
				{
					$intensive_diet3 ++ ;
				}
				else if ($d18[current_diet] == 4)
				{
					$intensive_diet4 ++ ;
				}
				else if ($d18[current_diet] == 5)
				{
					$intensive_diet5 ++ ;
				}
				else if ($d18[current_diet] == 6)
				{
					$intensive_diet6 ++ ;
				}

			  }
			  }
				  
			$sql19 ="SELECT text FROM seci.diet LIMIT 5,1"; 
	
			$result19 = mysqli_query($conn,$sql19);
	
			$d19 = mysqli_fetch_assoc($result19);
				  
			}
			}
				
			$sum_diet0 = $men_diet0 + $men1_diet0 + $women_diet0 + $women1_diet0 
				+ $children_diet0 + $intensive_diet0 ;
			$sum_diet1 = $men_diet1 + $men1_diet1 + $women_diet1 + $women1_diet1 
				+ $children_diet1 + $intensive_diet1 ;
			$sum_diet2 = $men_diet2 + $men1_diet2 + $women_diet2 + $women1_diet2 
				+ $children_diet2 + $intensive_diet2 ;
			$sum_diet3 = $men_diet3 + $men1_diet3 + $women_diet3 + $women1_diet3 
				+ $children_diet3 + $intensive_diet3 ;
			$sum_diet4 = $men_diet4 + $men1_diet4 + $women_diet4 + $women1_diet4 
				+ $children_diet4 + $intensive_diet4 ;
			$sum_diet5 = $men_diet5 + $men1_diet5 + $women_diet5 + $women1_diet5 
				+ $children_diet5 + $intensive_diet5 ;
			$sum_diet6 = $men_diet6 + $men1_diet6 + $women_diet6 + $women1_diet6 
				+ $children_diet6 + $intensive_diet6 ;
				
			$sql22 ="SELECT text FROM seci.diet LIMIT 6,1"; 
	
			$result22 = mysqli_query($conn,$sql22);
	
			$d22 = mysqli_fetch_assoc($result22);
				
				
			print "<tr><td align='center'>$d4[text]</td><td align='center'>$men_diet0</tD>
			<td align='center'>$men1_diet0</td><td align='center'>$women_diet0</td>
			<td align='center'>$women1_diet0</td><td align='center'>$children_diet0</td>
			<td align='center'>$intensive_diet0</td><td align='center'>$sum_diet0</td></tr>
			<tr><td align='center'>$d7[text]</td><td align='center'>$men_diet1</tD>
			<td align='center'>$men1_diet1</td><td align='center'>$women_diet1</td>
			<td align='center'>$women1_diet1</td><td align='center'>$children_diet1</td>
			<td align='center'>$intensive_diet1</td><td align='center'>$sum_diet1</td></tr>
			<tr><td align='center'>$d10[text]</td><td align='center'>$men_diet2</tD>
			<td align='center'>$men1_diet2</td><td align='center'>$women_diet2</td>
			<td align='center'>$women1_diet2</td><td align='center'>$children_diet2</td>
			<td align='center'>$intensive_diet2</td><td align='center'>$sum_diet2</td></tr>
			<tr><td align='center'>$d13[text]</td><td align='center'>$men_diet3</tD>
			<td align='center'>$men1_diet3</td><td align='center'>$women_diet3</td>
			<td align='center'>$women1_diet3</td><td align='center'>$children_diet3</td>
			<td align='center'>$intensive_diet3</td><td align='center'>$sum_diet3</td></tr>
			<tr><td align='center'>$d16[text]</td><td align='center'>$men_diet4</tD>
			<td align='center'>$men1_diet4</td><td align='center'>$women_diet4</td>
			<td align='center'>$women1_diet4</td><td align='center'>$children_diet4</td>
			<td align='center'>$intensive_diet4</td><td align='center'>$sum_diet4</td></tr>
			<tr><td align='center'>$d19[text]</td><td align='center'>$men_diet5</tD>
			<td align='center'>$men1_diet5</td><td align='center'>$women_diet5</td>
			<td align='center'>$women1_diet5</td><td align='center'>$children_diet5</td>
			<td align='center'>$intensive_diet5</td><td align='center'>$sum_diet5</td></tr>
			<tr><td align='center'>$d22[text]</td><td align='center'>$men_diet6</tD>
			<td align='center'>$men1_diet6</td><td align='center'>$women_diet6</td>
			<td align='center'>$women1_diet6</td><td align='center'>$children_diet6</td>
			<td align='center'>$intensive_diet6</td><td align='center'>$sum_diet6</td></tr>";
				
				
				
			}else {
    
    	header('Location: login1.php');
    	exit();

			}
			
    ?>
		
		</tbody>
	
	</table>
	
	</form>
	
	
	<script src="js/diet_print_report.js"></script>
</body>
</html>