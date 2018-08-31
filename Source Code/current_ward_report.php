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
<link rel="stylesheet" href="css/current_ward_report.css"/>	
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
                <h2 class="title_current_report"><span>المرضى الحاليين بالدور</span>
                    
    <span>(
			
			<?php 
			
		include"config.php";
				
		if(isset($_SESSION['username']))
			{
				
			if(isset($_POST['current_report_butt']))
			{ 
				
			$sql0="SELECT Ward_text FROM wards_for_labels where Ward_code =" .$_POST['ward_report']. " " ;
	
			$result0 = mysqli_query($conn,$sql0);
	
			$d1 = mysqli_fetch_assoc($result0);
			
			print $d1[Ward_text]; 
			
			}
				
		}else {
    
    	header('Location: login1.php');
    	exit();

			}
			
			?>&nbsp;)
			
			</span>
                    
		</h2>
		
		<div class="date_current_report"><?php $SomeDate = new DateTime(); echo $SomeDate->format('Y-m-d'); ?></div>
		
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

		
		<div id="ward">
			
		<label class="ward_label">الدور :</label>
		
		  <select class="form-control ward" name="ward_report">
                      
						<?php
						
				include 'config.php';
						
                $sql="select * from wards_for_labels";
						
				$list=mysqli_query($conn,$sql);
                        
						if($list)
                        {
                            while($row1=mysqli_fetch_assoc($list))
                            {
                                print "<option value='".$row1[Ward_code]."'>$row1[Ward_text]</option>";
                            }
                        }
						
				?> 
                    </select> 
		
		
	<button type="submit" name="current_report_butt" class="btn btn-primary" id="current_report_butt" 
			data-toggle="tooltip" title="عرض">
	<span class="glyphicon glyphicon-list-alt"></span> 
	</button>
		
	<button type="button" class="btn btn-primary" id="current_report_butt1"
			data-toggle="tooltip" title="طباعة">
	<span class="glyphicon glyphicon-print"></span> 
	</button>
			</div>
		
		<div class="total">
			<label class="l1">إجمالى عدد مرضى الدور = </label>
			<span class="inp2" name="num">
		
		<?php
				
		include"config.php";
				
		if(isset($_SESSION['username']))
			{
				
			if(isset($_POST['current_report_butt']))
			{
				
			$count = 0 ;
															  
			$sql="SELECT * FROM adt where discharge_date is null ";
			
            $queryResult=mysqli_query($conn,$sql);
				
			     
			if($queryResult)
            {
              while($row=mysqli_fetch_assoc($queryResult))
            {
				  
			$sql1 ="SELECT * FROM adt_transfer where `ADT number` = " . $row['serial']. " order by date desc limit 1";
			
            $queryResult1=mysqli_query($conn,$sql1);
				  
			$row1=mysqli_fetch_assoc($queryResult1);
				  
			if($row1[to_ward] == $_POST['ward_report'])
			{
				
				$count ++ ;
				
			}
			else if ($row[ward] == $_POST['ward_report']){
				
			if(mysqli_num_rows($queryResult1) == 0){
				  
				$count ++ ;
			  }
			}
				  
			  }
			}
		printf("%d\n",$count); 
				
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
				
			if(isset($_POST['current_report_butt']))
			{ 
					
			$sql="SELECT * FROM adt where discharge_date is null ";
			
            $queryResult=mysqli_query($conn,$sql);
				
			     
			if($queryResult)
            {
              while($row=mysqli_fetch_assoc($queryResult))
            {
				  
			$sql1 ="SELECT * FROM adt_transfer where `ADT number` = " . $row['serial']. " order by date desc limit 1 ";
			
            $queryResult1=mysqli_query($conn,$sql1);
				  
			$row1=mysqli_fetch_assoc($queryResult1);
				  
				 
				  
			if($row1[to_ward] == $_POST['ward_report'])
			{
			
			$sql2="SELECT patient_name FROM patients WHERE patient_code ='" . $row1['patient_code']. "' " ;
	
			$result = mysqli_query($conn,$sql2);
	
			$d = mysqli_fetch_assoc($result);
						
			$sql3="SELECT Ward_text FROM wards_for_labels where Ward_code =" .$row1['to_ward']. " " ;
	
			$result3 = mysqli_query($conn,$sql3);
	
			$d1 = mysqli_fetch_assoc($result3);
				
				 		  
			if($row1['to_dept'] == null || $row1['to_dept'] == $row['ademission_dept']) 
			{
			$sql4="SELECT dept_text_arab FROM departments where code = " .$row['ademission_dept']. " " ;
	
			$result4 = mysqli_query($conn,$sql4);
				  
			$d2=mysqli_fetch_assoc($result4);
				
			$dept = $d2[dept_text_arab];
				
			}
				
			else 
			{
					
			$sql8="SELECT dept_text_arab FROM departments where code = " .$row1['to_dept']. " " ;
	
			$result10 = mysqli_query($conn,$sql8);
				  
			$d8 =mysqli_fetch_assoc($result10);
				
			$dept = $d8[dept_text_arab];
				
			}
				  
			$date="select datediff(now(),admission_date) as asd from seci.adt where admission_date = '" .$row['admission_date']. "';";	
				  
            $result5 = mysqli_query($conn,$date); 
				  
			$d3 = mysqli_fetch_assoc($result5);

				  
			print "<tr><td align='center'>$row1[patient_code]</td><td align='center'>$d[patient_name]</tD>
			<td align='center'>$row[admission_date]</td><td align='center'>$d3[asd]</td>
			<td align='center'>$d1[Ward_text]</td><td align='center'>$dept</td></tr>";
				
			}	
				  
			
			else if ($row[ward] == $_POST['ward_report']){
				
			if(mysqli_num_rows($queryResult1) == 0){
			
			$sql5="SELECT patient_name FROM patients WHERE patient_code ='" . $row['patient_code']. "' " ;
	
			$result6 = mysqli_query($conn,$sql5);
	
			$d4 = mysqli_fetch_assoc($result6);
						
			$sql6="SELECT Ward_text FROM wards_for_labels where Ward_code =" .$row['ward']. " " ;
	
			$result7 = mysqli_query($conn,$sql6);
	
			$d5 = mysqli_fetch_assoc($result7);
				 		  
				  
			$sql7="SELECT dept_text_arab FROM departments where code = " .$row['ademission_dept']. " " ;
	
			$result8 = mysqli_query($conn,$sql7);
				  
			$d6 =mysqli_fetch_assoc($result8);
				  
			$date1="select datediff(now(),admission_date) as asd from seci.adt where admission_date = '" .$row['admission_date']. "';";	
				  
            $result9 = mysqli_query($conn,$date1); 
				  
			$d7 = mysqli_fetch_assoc($result9);

				  
			print "<tr><td align='center'>$row[patient_code]</td><td align='center'>$d4[patient_name]</tD>
			<td align='center'>$row[admission_date]</td><td align='center'>$d7[asd]</td>
			<td align='center'>$d5[Ward_text]</td><td align='center'>$d6[dept_text_arab]</td></tr>";
				
			}
			  
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
	
	
	<script src="js/current_ward_report.js"></script>
</body>
</html>