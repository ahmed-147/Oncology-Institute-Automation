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
<link rel="stylesheet" href="css/current_month_report.css"/>	
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
                <h2 class="title"><span> المرضى الحاليين لأكثر من شهر </span>
		</h2>
		
		<div class="current_date" id="inp">
                
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
            
            $total = 0 ;
				
			if(isset($_POST['butt1']))
			{ 
															  
		$sql="SELECT * FROM adt where discharge_date is null  ";
			
            $queryResult=mysqli_query($conn,$sql);
				
                
			if($queryResult)
            {
              while($row=mysqli_fetch_assoc($queryResult))
              {
                     
            $date1="select datediff(now(),admission_date) as asd from adt where admission_date = '" .$row['admission_date']. "' ";	
				  
            $result9 = mysqli_query($conn,$date1); 
				  
			$d9 = mysqli_fetch_assoc($result9);
                  
            if($d9[asd] > 30)
            {
                $total ++ ;
				  
			  }
              }
          } 
                printf("%d\n",$total);
				
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
				
			$sql="SELECT * FROM adt where discharge_date is null  ";
			
            $queryResult=mysqli_query($conn,$sql);
				
                
			if($queryResult)
            {
              while($row=mysqli_fetch_assoc($queryResult))
            {
					

			$sql1="SELECT Ward_text FROM wards_for_labels where Ward_code ='" .$row['ward']. "' " ;
	
			$result1 = mysqli_query($conn,$sql1);
	
			$d1 = mysqli_fetch_assoc($result1);
			
				  
				  
			$sql3="SELECT dept_text_arab FROM departments where code = '" .$row['ademission_dept']. "' " ;
	
			$result3 = mysqli_query($conn,$sql3);
	
			$d3 = mysqli_fetch_assoc($result3);
                  
                  
            $date1="select datediff(now(),admission_date) as asd from adt where admission_date = '" .$row['admission_date']. "' ";	
				  
            $result9 = mysqli_query($conn,$date1); 
				  
			$d9 = mysqli_fetch_assoc($result9);
                  
            if($d9[asd] > 30)
            {
                        
			print "<tr><td align='center'>$row[patient_code]</td><td align='center'>$row[consent_name]</tD>
			<td align='center'>$row[admission_date]</td><td align='center'>$d9[asd]</td>
			<td align='center'>$d1[Ward_text]</td><td align='center'>$d3[dept_text_arab]</td></tr>";
				  
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
	
	
	<script src="js/current_month_report.js"></script>
</body>
	

</html>