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
<link rel="stylesheet" href="css/diet_children_report.css"/>	
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
                <h2 class="title"><span>تغذية مرضى قسم الأطفال</span></h2>

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
			<label class="l1">إجمالى عدد مرضى الدور = </label>
			<span class="inp2" name="num">
		
		<?php
				
		include"config.php";
				
		if(isset($_SESSION['username']))
			{
														  
			
			$count = 0 ;
			
			$sql="SELECT * FROM adt where discharge_date is null";
			
            $queryResult=mysqli_query($conn,$sql);
                
			if($queryResult)
            {
              while($row=mysqli_fetch_assoc($queryResult))
            {
				  
			$sq ="SELECT * FROM adt_transfer where `ADT number` = " . $row['serial']. " order by date desc limit 1 ";
			
            $queryResult1=mysqli_query($conn,$sq);
				  
			$row1=mysqli_fetch_assoc($queryResult1);
			
				  if($row1[to_ward] == 3)
				  {
			
					  $count ++ ;
					  
				  }
				  
				  else if ($row[ward] == 3){
				
				if(mysqli_num_rows($queryResult1) == 0){
					
					$count ++ ; 
				}
				  }
			
		
				
		}
			}
			
			printf("%d\n",$count);
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
			<th class="th1">رقم المعهد</th><th class="th2">اسم المريض</th>
			<th class="th3">تاريخ الدخول</th><th class="th4">مده البقاء</th>
			<th class="th5">القسم</th><th class="th6">التغذية</th>
		</thead>
		
		<tbody>
			
					
					
		<?php
			
            include 'config.php';
			
			if(isset($_SESSION['username']))
			{

				
            $sql="SELECT * FROM adt where discharge_date is null";
			
            $queryResult=mysqli_query($conn,$sql);
                
			if($queryResult)
            {
              while($row=mysqli_fetch_assoc($queryResult))
            {
				  
			$sq ="SELECT * FROM adt_transfer where `ADT number` = " . $row['serial']. " order by date desc limit 1 ";
			
            $queryResult1=mysqli_query($conn,$sq);
				  
			$row1=mysqli_fetch_assoc($queryResult1);
			
				  if($row1[to_ward] == 3)
				  {
					  
			$sql1="SELECT patient_name FROM patients WHERE patient_code ='" . $row1['patient_code']. "' " ;
	
			$result1 = mysqli_query($conn,$sql1);
	
			$d1 = mysqli_fetch_assoc($result1);
				  
			$sql2="select datediff(now(),admission_date) as asd from seci.adt where admission_date = '" .$row['admission_date']. "' "; 
	
			$result2 = mysqli_query($conn,$sql2);
	
			$d2 = mysqli_fetch_assoc($result2);
				  
			$sql3="select dept_text_arab from departments where code = " .$row1['to_dept']. " "; ;
	
			$result3 = mysqli_query($conn,$sql3);
	
			$d3 = mysqli_fetch_assoc($result3);
				  
			$sql4 ="SELECT current_diet FROM `priv_current diet` where patient_code = '" .$row1['patient_code']. "' "; ;
	
			$result4 = mysqli_query($conn,$sql4);
	
			$d4 = mysqli_fetch_assoc($result4);
				  
			$sql5 ="SELECT text FROM diet where code = '" .$d4['current_diet']. "' "; 
	
			$result5 = mysqli_query($conn,$sql5);
	
			$d5 = mysqli_fetch_assoc($result5);
                        
			print "<tr><td align='center'>$row1[patient_code]</td><td align='center'>$d1[patient_name]</tD>
			<td align='center'>$row[admission_date]</td><td align='center'>$d2[asd]</td>
			<td align='center'>$d3[dept_text_arab]</td><td align='center'>$d5[text]</td></tr>";
					  
				  }
				  
			else if ($row[ward] == 3){
				
				if(mysqli_num_rows($queryResult1) == 0){
			
								
			$sql6="SELECT patient_name FROM patients WHERE patient_code ='" . $row['patient_code']. "' " ;
	
			$result6 = mysqli_query($conn,$sql6);
	
			$d6 = mysqli_fetch_assoc($result6);
				  
			$sql7="select datediff(now(),admission_date) as asd from seci.adt where admission_date = '" .$row['admission_date']. "' "; 
	
			$result7 = mysqli_query($conn,$sql7);
	
			$d7 = mysqli_fetch_assoc($result7);
				  
			$sql8="select dept_text_arab from departments where code = " .$row['ademission_dept']. " "; ;
	
			$result8 = mysqli_query($conn,$sql8);
	
			$d8 = mysqli_fetch_assoc($result8);
				  
			$sql9 ="SELECT current_diet FROM `priv_current diet` where patient_code = '" .$row['patient_code']. "' "; ;
	
			$result9 = mysqli_query($conn,$sql9);
	
			$d9 = mysqli_fetch_assoc($result9);
				  
			$sql10 ="SELECT text FROM diet where code = '" .$d9['current_diet']. "' "; 
	
			$result10 = mysqli_query($conn,$sql10);
	
			$d10 = mysqli_fetch_assoc($result10);
                        
			print "<tr><td align='center'>$row[patient_code]</td><td align='center'>$d6[patient_name]</tD>
			<td align='center'>$row[admission_date]</td><td align='center'>$d7[asd]</td>
			<td align='center'>$d8[dept_text_arab]</td><td align='center'>$d10[text]</td></tr>";
				  
			  }
			  }
			}
			}
			}else {
    
    	header('Location: login1.php');
    	exit();

			}
			
    ?>
		
		</tbody>
	
	</table>
		
		
			
		<table border="3" rules="all" class="report_table1">
	
		<thead>
			<th class="th_diet">الغذاء</th><th class="th_number">العدد</th>
		</thead>
		
		<tbody>
			
								
		<?php
			
            include 'config.php';
			
			if(isset($_SESSION['username']))
			{

				$diet0 = 0 ;
				$diet1 = 0 ;
				$diet2 = 0 ;
				$diet3 = 0 ;
				$diet4 = 0 ;
				$diet5 = 0 ;
				$diet6 = 0 ;
				
				
			$sql="SELECT * FROM adt where discharge_date is null";
			
            $result=mysqli_query($conn,$sql);
                
			if($result)
            {
              while($d=mysqli_fetch_assoc($result))
            {
				  
			$sql1 ="SELECT * FROM adt_transfer where `ADT number` = " . $d['serial']. " order by date desc limit 1";
			
            $result1=mysqli_query($conn,$sql1);
				  
			$d1=mysqli_fetch_assoc($result1);
			
			if($d1[to_ward] == 3)
			 {
					  			  
			$sql2 ="SELECT current_diet FROM `priv_current diet` where patient_code = '" .$d1['patient_code']. "' "; ;
	
			$result2 = mysqli_query($conn,$sql2);
	
			$d2 = mysqli_fetch_assoc($result2);
				
				if($d2[current_diet] == 0)
				{
					$diet0 ++ ;
				}
				else if ($d2[current_diet] == 1)
				{
					$diet1 ++ ;
				}
				else if ($d2[current_diet] == 2)
				{
					$diet2 ++ ;
				}
				else if ($d2[current_diet] == 3)
				{
					$diet3 ++ ;
				}
				else if ($d2[current_diet] == 4)
				{
					$diet4 ++ ;
				}
				else if ($d2[current_diet] == 5)
				{
					$diet5 ++ ;
				}
				else if ($d2[current_diet] == 6)
				{
					$diet6 ++ ;
				}
				
				
				  }
				  
				else if ($d[ward] == 3){
				
				if(mysqli_num_rows($result1) == 0){
				  
			$sql3 ="SELECT current_diet FROM `priv_current diet` where patient_code = '" .$d['patient_code']. "' "; ;
	
			$result3 = mysqli_query($conn,$sql3);
	
			$d3 = mysqli_fetch_assoc($result3);
									  
					
				if($d3[current_diet] == 0)
				{
					$diet0 ++ ;
				}
				else if ($d3[current_diet] == 1)
				{
					$diet1 ++ ;
				}
				else if ($d3[current_diet] == 2)
				{
					$diet2 ++ ;
				}
				else if ($d3[current_diet] == 3)
				{
					$diet3 ++ ;
				}
				else if ($d3[current_diet] == 4)
				{
					$diet4 ++ ;
				}
				else if ($d3[current_diet] == 5)
				{
					$diet5 ++ ;
				}
				else if ($d3[current_diet] == 6)
				{
					$diet6 ++ ;
				}

			  }
			  }
				  	  
			}
			}
				
			$sql4 ="SELECT * FROM diet"; 
	
			$result4 = mysqli_query($conn,$sql4);
	
			if($result4)
            {
              while($d4 = mysqli_fetch_assoc($result4))
            {	
			
				if ($d4[code] == 0 && $diet0 > 0)
				 { 
				print "<tr><td align='center'>$d4[text]</td><td align='center'>$diet0</tD></tr>";
					}
				  
				if ($d4[code] == 1 && $diet1 > 0)
				 { 
				print "<tr><td align='center'>$d4[text]</td><td align='center'>$diet1</tD></tr>";
					}
				  
				if ($d4[code] == 2 && $diet2 > 0)
				 { 
				print "<tr><td align='center'>$d4[text]</td><td align='center'>$diet2</tD></tr>";
					}
				
				if ($d4[code] == 3 && $diet3 > 0)
				 { 
				print "<tr><td align='center'>$d4[text]</td><td align='center'>$diet3</tD></tr>";
					}
				  
				if ($d4[code] == 4 && $diet4 > 0)
				 { 
				print "<tr><td align='center'>$d4[text]</td><td align='center'>$diet4</tD></tr>";
					}
				  
				if ($d4[code] == 5 && $diet5 > 0)
				 { 
				print "<tr><td align='center'>$d4[text]</td><td align='center'>$diet5</tD></tr>";
					}
				  
				if ($d4[code] == 6 && $diet6 > 0)
				 { 
				print "<tr><td align='center'>$d4[text]</td><td align='center'>$diet6</tD></tr>";
					}
				
			  }
			}
				
				$total = $diet0 + $diet1 + $diet2 + $diet3
					+ $diet4 + $diet5 + $diet6 ;
				
				print "<tr><td align='center'>المجموع</td><td align='center'>$total</tD></tr>";
				
			}else {
    
    	header('Location: login1.php');
    	exit();

			}
			
    ?>
		
		</tbody>
	
	</table>
		
	
	</form>
	
	
	<script src="js/diet_children_report.js"></script>
</body>
</html>