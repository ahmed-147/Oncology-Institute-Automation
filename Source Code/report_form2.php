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
<link rel="stylesheet" href="css/style_report_form2.css"/>	
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
                <h2 class="title"><span>تذاكر يوم</span>
                    <span>
                    <?php
                        
                       include "config.php" ;
                        
                        if(isset($_POST['date_form2']))
			             {
                            echo $_POST['date_form2'];
                        }
                        else if(isset($_SESSION['from_form2']) && isset($_SESSION['to_form2']))
			             {
                            echo $_SESSION['to_form2'];
                        }
                        
                        ?>
                    
                    </span>
		</h2>

		
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
	
	<button type="button" name="print_form2" class="btn btn-primary print_form2" id="print_form2">
	<span class="glyphicon glyphicon-print"></span> 
	</button>
	
	<table border="3" rules="all" class="report_table">
	
		<thead>
			<th class="th1">رقم التذكرة</th><th class="th2">رقم المعهد</th><th class="th3">اسم المريض</th>
			<th class="th4">محافظة</th><th class="th5">مركز</th>
		</thead>
		
		<tbody>
			
		<?php
			
            include 'config.php';
			
			if(isset($_SESSION['username']))
			{
					
			// البحث بالاسم
			
			if(isset($_POST['name_form2'])) {
			
            $sql="SELECT * FROM outpatients_tickets join patients on outpatients_tickets.`patient_code` = patients.patient_code where patient_name = '" . $_POST['name_form2']. "' ";
			
            $queryResult=mysqli_query($conn,$sql);
                
			if($queryResult)
            {
              while($row=mysqli_fetch_assoc($queryResult))
            {
						
			$sql1="SELECT district_text FROM districts WHERE code ='" . $row['district']. "' " ;
	
			$result1 = mysqli_query($conn,$sql1);
	
			$d1 = mysqli_fetch_assoc($result1);
				  
			$sql2="SELECT governorate_name FROM governorates where code = '" . $row['governorate']. "' " ;
	
			$result2 = mysqli_query($conn,$sql2);
	
			$d2 = mysqli_fetch_assoc($result2);
                        
			print "<tr><td align='center'>$row[ticket_number]</td><td align='center'>$row[patient_code]</tD>
			<td align='center'>$row[patient_name]</td><td align='center'>$d2[governorate_name]</td>
			<td align='center'>$d1[district_text]</td></tr>";
				  
			  }
				
          }
        }
			
			// البحث بالتاريخ
			
			if(isset($_POST['date_form2']))
			{
				
			$sql="SELECT * FROM outpatients_tickets join patients on outpatients_tickets.`patient_code` = patients.patient_code where date = '" . $_POST['date_form2']. "' ";
			
            $queryResult=mysqli_query($conn,$sql);
                
			if($queryResult)
            {
              while($row=mysqli_fetch_assoc($queryResult))
            {
						
			$sql1="SELECT district_text FROM districts WHERE code ='" . $row['district']. "' " ;
	
			$result1 = mysqli_query($conn,$sql1);
	
			$d1 = mysqli_fetch_assoc($result1);
				  
			$sql2="SELECT governorate_name FROM governorates where code = '" . $row['governorate']. "' " ;
	
			$result2 = mysqli_query($conn,$sql2);
	
			$d2 = mysqli_fetch_assoc($result2);
                        
			print "<tr><td align='center'>$row[ticket_number]</td><td align='center'>$row[patient_code]</tD>
			<td align='center'>$row[patient_name]</td><td align='center'>$d2[governorate_name]</td>
			<td align='center'>$d1[district_text]</td></tr>";
				  
			  }
				
          }
				
			}
				
				//  البحث بالتاريخ حسب الفترة
		
		
			if(isset($_POST['from_form2']) && isset($_POST['to_form2']))
			{
                
                $_SESSION['from_form2'] = $_POST['from_form2'];
                $_SESSION['to_form2'] = $_POST['to_form2'];
                
				
			$sql="SELECT * FROM outpatients_tickets join patients on outpatients_tickets.`patient_code` = patients.patient_code where date between '" . $_POST['from_form2']. "' and '" . $_POST['to_form2']. "' ";
			
            $queryResult=mysqli_query($conn,$sql);
                
			if($queryResult)
            {
              while($row=mysqli_fetch_assoc($queryResult))
            {
						
			$sql1="SELECT district_text FROM districts WHERE code ='" . $row['district']. "' " ;
	
			$result1 = mysqli_query($conn,$sql1);
	
			$d1 = mysqli_fetch_assoc($result1);
				  
			$sql2="SELECT governorate_name FROM governorates where code = '" . $row['governorate']. "' " ;
	
			$result2 = mysqli_query($conn,$sql2);
	
			$d2 = mysqli_fetch_assoc($result2);
                        
			print "<tr><td align='center'>$row[ticket_number]</td><td align='center'>$row[patient_code]</tD>
			<td align='center'>$row[patient_name]</td><td align='center'>$d2[governorate_name]</td>
			<td align='center'>$d1[district_text]</td></tr>";
				  
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
	
	
	
	
	<script src="js/javascript_report.js"></script>
</body>
	

</html>