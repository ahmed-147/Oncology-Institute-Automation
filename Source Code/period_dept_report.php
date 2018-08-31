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
<link rel="stylesheet" href="css/period_dept_report.css"/>	
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
                <h1 class="title"><span>تقرير قسم </span>
                <span>
                    <?php 
                    
                    include 'config.php';
                    
                    $sql = "select dept_text_arab from departments where code= '".$_POST['dept']."' ";
                    
                    $result=mysqli_query($conn,$sql);
                    
                    $row=mysqli_fetch_assoc($result);
                    
                    echo $row[dept_text_arab];
                     
                    ?> لفترة</span>
                </h1>
		
		<div class="current_date">
        <span> من
            <?php echo $_POST['date_report_from']; ?> 
            </span>
             
            <span> إلى
            <?php echo $_POST['date_report_to']; ?> 
            </span>
                
                
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
		
		<label class="l1" id="l1">التاريخ من :</label>
		<input type="date" class="form-control date_from_report" 
			   id="from" name="date_report_from" />
		
		<label class="l2" id="l2">إلى :</label>
		<input type="date" class="form-control date_to_report" 
			   id="to" name="date_report_to" />
		
		<label class="l3" id="l3">قسم :</label>
		
		<select class="form-control dept" name="dept" id="dept">
                        
				<?php
						
				include 'config.php';
						
                $sql="select * from departments";
						
				$list=mysqli_query($conn,$sql);
                        
						if($list)
                        {
                            while($row=mysqli_fetch_assoc($list))
                            {
                                print "<option value='".$row[code]."'>$row[dept_text_arab]</option>";
                            }
                        }
						
				?>   
                    </select>
		
	<button type="submit" name="butt1" class="btn btn-primary" id="butt1" 
			data-toggle="tooltip" title="عرض">
	<span class="glyphicon glyphicon-list-alt"></span> 
	</button>
		
	<button type="button" class="btn btn-primary" id="butt2"
			data-toggle="tooltip" title="طباعة">
	<span class="glyphicon glyphicon-print"></span> 
	</button>
		
		
	
	<table border="3" rules="all" class="report_table">
	
		<thead>
			<th class="th1">رقم المعهد</th><th class="th2">اسم المريض</th>
			<th class="th3">تاريخ الدخول</th><th class="th4">تاريخ الخروج</th>
		</thead>
		
		<tbody>
			
					
		<?php
			
            include 'config.php';
			
			
			if(isset($_SESSION['username']))
			{
				
			if(isset($_POST['butt1']))
			{ 
				
			$sql="SELECT * FROM adt where admission_date between '".$_POST['date_report_from']."' 
			AND '" .$_POST['date_report_to']. "' and ademission_dept = '" .$_POST['dept']. "'  ";
			
            $queryResult=mysqli_query($conn,$sql);
                
			if($queryResult)
            {
              while($row=mysqli_fetch_assoc($queryResult))
            {
					                        
			print "<tr><td align='center'>$row[patient_code]</td><td align='center'>$row[consent_name]</tD>
			<td align='center'>$row[admission_date]</td><td align='center'>$row[discharge_date]</td></tr>";
				  
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
	
	
	<script src="js/period_dept_report.js"></script>
</body>
	

</html>