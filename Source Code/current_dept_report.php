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
<link rel="stylesheet" href="css/current_dept_report.css"/>	
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
                <h2 class="title"><span>المرضى الحاليين بالاقسام</span>
		</h2>
                
         <div class="current_date"><?php $SomeDate = new DateTime(); echo $SomeDate->format('Y-m-d'); ?></div>

		
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
			<label class="l1">إجمالى عدد المرضى = </label>
			<span class="inp2" name="num">
		
		<?php
				
		include"config.php";
				
		if(isset($_SESSION['username']))
			{
				
			if(isset($_POST['butt1']))
			{ 
															  
		$sql="SELECT serial FROM adt where discharge_date is null and  ademission_dept is not null";		
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
			<th class="th1">القسم</th><th class="th2">العدد</th>
		</thead>
		
		<tbody>
			
					
		<?php
			
            include 'config.php';
			
			
			if(isset($_SESSION['username']))
			{
				
			if(isset($_POST['butt1']))
			{ 
				
				
			$sql1="SELECT code, dept_text_arab FROM departments ";
			
            $result1=mysqli_query($conn,$sql1);
				    
			if($result1)
            {
              while($row=mysqli_fetch_assoc($result1))
            {
						
			$sql2="SELECT serial FROM adt where discharge_date is null and ademission_dept = '".$row['code']."' " ;
	
			$result2 = mysqli_query($conn,$sql2);
	
			$rowcount1=mysqli_num_rows($result2);
		
			if ($rowcount1 != 0){	  	 		  
                        
			print "<tr><td align='center'>$row[dept_text_arab]</td><td align='center'>$rowcount1</tD>
			</tr>";
				  
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
	
	
	<script src="js/current_dept_report.js"></script>
</body>
	

</html>