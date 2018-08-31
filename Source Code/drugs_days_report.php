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
<link rel="stylesheet" href="css/drugs_days_report.css"/>	
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
		<h1 class="title_enter_report"><span>تقرير عمليات يوم</span>
               <span>
            <?php echo $_POST['date_report_enter']; ?>
            </span>
                </h1>
		
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
		
		<input type="date" class="form-control date_enter_report" id="inp" name="date_report_enter"/>
	
	<button type="submit" name="enter_report_butt" class="btn btn-primary" id="enter_report_butt" 
			data-toggle="tooltip" title="عرض">
	<span class="glyphicon glyphicon-list-alt"></span> 
	</button>
		
	<button type="button" class="btn btn-primary" id="enter_report_butt1"
			data-toggle="tooltip" title="طباعة">
	<span class="glyphicon glyphicon-print"></span> 
	</button>
	
	<table border="3" rules="all" class="report_table">
	
		<thead>
			<th class="th1">كود المريض</th><th class="th2">اسم المريض</th>
			<th class="th3">غرفة العمليات</th><th class="th4">الطبيب الجراح</th>
            <th class="th5">مدة العملية</th>
		</thead>
		
		<tbody>
			
					
		<?php
			
            include 'config.php';
			
			
			if(isset($_SESSION['username']))
			{			
				
			$sql="SELECT * FROM op_operative_record where Date = '" . $_POST['date_report_enter']. "' ";
			
            $queryResult=mysqli_query($conn,$sql);
                
			if($queryResult)
            {
              while($row=mysqli_fetch_assoc($queryResult))
            {
						
			$sql1="SELECT patient_name FROM patients WHERE patient_code ='" . $row['Patient_code']. "' " ;
	
			$result1 = mysqli_query($conn,$sql1);
	
			$d1 = mysqli_fetch_assoc($result1);
				  
			$sql2="SELECT name FROM op_surgeons where code = " . $row['Surgeon']. " " ;
	
			$result2 = mysqli_query($conn,$sql2);
	
			$d2 = mysqli_fetch_assoc($result2);
				  
			$sql3="select timediff(Op_end,Op_begin) as asd from op_operative_record where Op_end = '".$row['Op_end']."' AND Op_begin = '".$row['Op_begin']."' " ;
	
			$result3 = mysqli_query($conn,$sql3);
	
			$d3 = mysqli_fetch_assoc($result3);
                        
			print "<tr><td align='center'>$row[Patient_code]</td><td align='center'>$d1[patient_name]</tD>
			<td align='center'>$row[Surgeon]</td><td align='center'>$d2[name]</td>
			<td align='center'>$d3[asd]</td></tr>";
				  
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
	
	
	<script src="js/drugs_days_report.js"></script>
</body>
	

</html>