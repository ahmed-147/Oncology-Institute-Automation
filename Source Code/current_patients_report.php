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
<link rel="stylesheet" href="css/current_patients_report.css"/>	
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
                
                <h2 class="title"><span>تقرير المرضى الحاليين</span>
		</h2>
		
		<div class="date_current_report" id="inp">
		 
            <?php 
			$SomeDate = new DateTime(); echo $SomeDate->format('Y-m-d'); 
			?>
	
			</div>
		
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
		
		<div id="butts">
		
	<button type="submit" name="butt1" class="btn btn-primary" id="butt1" 
			data-toggle="tooltip" title="عرض">
	<span class="glyphicon glyphicon-list-alt"></span> 
	</button>
		
	<button type="button" class="btn btn-primary" id="butt2"
			data-toggle="tooltip" title="طباعة">
	<span class="glyphicon glyphicon-print"></span> 
	</button>
			
			</div>
		
		<div class="total">
			<label class="l1">إجمالى عدد المرضى =</label>
			<span class="inp2" name="num">
		
		<?php
				
		include"config.php";
				
		if(isset($_SESSION['username']))
			{
				
			if(isset($_POST['butt1']))
			{ 
															  
		$sql="SELECT serial FROM adt where discharge_date is null ";		
        $result=mysqli_query($conn,$sql);	
		$rowcount=mysqli_num_rows($result);
		echo $rowcount ; 
				
		}
				
		}else {
    
    	header('Location: login1.php');
    	exit();

			}
															  
		?>
			</span>
		</div>
	
	<table border="3" rules="all" class="report_table">
	
		<thead>
			<th class="th1">كود المريض</th><th class="th2">اسم المريض</th>
			<th class="th3">تاريخ الدخول</th><th class="th4">مده البقاء</th>
			<th class="th5">الدور</th><th class="th6">القسم</th>
		</thead>
		
		<tbody>
			
					
		<?php
			
            include 'config.php';
			
			
			if(isset($_SESSION['username']))
			{
				
			if(isset($_POST['butt1']))
			{ 
				
			$sql="SELECT * FROM adt where discharge_date is null";
			
            $queryResult=mysqli_query($conn,$sql);

			if($queryResult)
            {
              while($row=mysqli_fetch_assoc($queryResult))
            {
				  
			$sql1 ="SELECT * FROM adt_transfer where `ADT number` = " . $row['serial']. " order by date desc limit 1 ";
			
            $queryResult1=mysqli_query($conn,$sql1);
				  
			$row1=mysqli_fetch_assoc($queryResult1);
				  	  
				  
			if(mysqli_num_rows($queryResult1) == 1)
			{
				
				
			$sql4 ="SELECT patient_name FROM patients WHERE patient_code ='" . $row1['patient_code']. "' " ;
	
			$result4 = mysqli_query($conn,$sql4);
	
			$d2 = mysqli_fetch_assoc($result4);
				
			$sql6="SELECT Ward_text FROM wards_for_labels where Ward_code ='" .$row1['to_ward']. "' " ;
	
			$result6 = mysqli_query($conn,$sql6);
	
			$d5 = mysqli_fetch_assoc($result6);
			
				 		  			
			$sql7 ="SELECT dept_text_arab FROM departments where code = '" .$row1['to_dept']. "' " ;
	
			$result7 = mysqli_query($conn,$sql7);
	
			$d6 = mysqli_fetch_assoc($result7);
				
				
			$date="select datediff(now(),admission_date) as asd from adt where admission_date = '" .$row['admission_date']. "' ";	
				  
            $result5 = mysqli_query($conn,$date); 
				  
			$d3 = mysqli_fetch_assoc($result5);
				  
                        
			print "<tr><td align='center'>$row[patient_code]</td><td align='center'>$d2[patient_name]</td>
			<td align='center'>$row[admission_date]</td><td align='center'>$d3[asd]</td>
			<td align='center'>$d5[Ward_text]</td><td align='center'>$d6[dept_text_arab]</td></tr>";
			}
				  

			else if(mysqli_num_rows($queryResult1) == 0){
				
			$sql8 ="SELECT patient_name FROM patients WHERE patient_code ='" . $row['patient_code']. "' " ;
	
			$result8 = mysqli_query($conn,$sql8);
	
			$d7 = mysqli_fetch_assoc($result8);
				
				
			$sql2="SELECT Ward_text FROM wards_for_labels where Ward_code ='" .$row['ward']. "' " ;
	
			$result2 = mysqli_query($conn,$sql2);
	
			$d = mysqli_fetch_assoc($result2);
			
			$sql3="SELECT dept_text_arab FROM departments where code = '" .$row['ademission_dept']. "' " ;
	
			$result3 = mysqli_query($conn,$sql3);
	
			$d1 = mysqli_fetch_assoc($result3);

			$date1="select datediff(now(),admission_date) as asd from adt where admission_date = '" .$row['admission_date']. "' ";	
				  
            $result9 = mysqli_query($conn,$date1); 
				  
			$d9 = mysqli_fetch_assoc($result9);
				
                        
			print "<tr><td align='center'>$row[patient_code]</td><td align='center'>$d7[patient_name]</td>
			<td align='center'>$row[admission_date]</td><td align='center'>$d9[asd]</td>
			<td align='center'>$d[Ward_text]</td><td align='center'>$d1[dept_text_arab]</td></tr>";
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
	
	</form>
	
	
	<script src="js/current_patients_report.js"></script>
</body>
	

</html>