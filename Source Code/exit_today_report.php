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
<link rel="stylesheet" href="css/exit_today_report.css"/>	
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
		<h1 class="title_exit_report"><span>تقرير خروج يوم</span>
            <span><?php echo $_POST['date_report_exit']; ?></span>
                </h1>
		
            </div>
       <div class="div1">
                
                <div class="div2">
                <img src="cancer 2.jpg" class="pic1" style="width: 60%;height: 100%"/>
                    
                </div>
                <div class="p1-1">
                    <p class="p1">معهد جنوب مصر للاورام</p>
                </div>
            </div>
            
    </header>
	
	<form method="post">
		
		<input type="date" class="form-control date_exit_report" id="inp" name="date_report_exit"/>
	
	<button type="submit" name="exit_report_butt" class="btn btn-primary" id="exit_report_butt" 
			data-toggle="tooltip" title="عرض">
	<span class="glyphicon glyphicon-list-alt"></span> 
	</button>
		
	<button type="button" class="btn btn-primary" id="exit_report_butt1"
			data-toggle="tooltip" title="طباعة">
	<span class="glyphicon glyphicon-print"></span> 
	</button>
	
	<table border="3" rules="all" class="report_table">
	
		<thead>
			<th class="th1">كود المريض</th><th class="th2">اسم المريض</th>
			<th class="th3">قسم الخروج</th><th class="th4">طبيب الخروج</th>
			<th class="th5">تاريخ الدخول</th>
		</thead>
		
		<tbody>
			
					
		<?php
			
            include 'config.php';
			
			
			if(isset($_SESSION['username']))
			{
				
			if(isset($_POST['exit_report_butt']))
			{
				
			$sql="SELECT * FROM adt where discharge_date = '" . $_POST['date_report_exit']. "' ";
			
            $queryResult=mysqli_query($conn,$sql);
                
			if($queryResult)
            {
              while($row=mysqli_fetch_assoc($queryResult))
            {
						
			$sql1="SELECT patient_name FROM patients WHERE patient_code ='" . $row['patient_code']. "' " ;
	
			$result1 = mysqli_query($conn,$sql1);
	
			$d1 = mysqli_fetch_assoc($result1);
				  
			$sql2="SELECT dept_text_arab FROM departments where code = '" . $row['discharge_dept']. "' " ;
	
			$result2 = mysqli_query($conn,$sql2);
	
			$d2 = mysqli_fetch_assoc($result2);
				  
			$sql3="SELECT name FROM doctors where code = '" . $row['discharge_doctor']. "' " ;
	
			$result3 = mysqli_query($conn,$sql3);
	
			$d3 = mysqli_fetch_assoc($result3);
                        
			print "<tr><td align='center'>$row[patient_code]</td><td align='center'>$d1[patient_name]</tD>
			<td align='center'>$d2[dept_text_arab]</td><td align='center'>$d3[name]</td>
			<td align='center'>$row[admission_date]</td></tr>";
				  
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
	
	
	<script src="js/exit_today_report.js"></script>
</body>
	

</html>