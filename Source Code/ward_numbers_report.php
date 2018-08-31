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
<link rel="stylesheet" href="css/ward_numbers_report.css"/>	
</head>

<body>
	
	<form method="post">
        
        
        <header style="width: 100%;height: 50%;display: flex;flex-wrap: nowrap;justify-content: center;align-items: center;padding: 2%">
            <div style="width: 25%;display: flex;flex-wrap:wrap;justify-content: center" >
                <div style="width: 100%;padding-bottom: 5%;display: flex;justify-content: center">
                               <img src="download.png" style="width: 36%;height: 100%"/>

                </div>
                <div style="width: 100%;display: flex;justify-content: center">
                    <p style="font-size:1.3vw ">جامعة اسيوط</p>
                </div>
            </div>
         <div  style="width: 64%;margin-right: 25%">
                <h2 class="title"><span>المرضي الحالين بالدور</span>
                    
		<div class="current_date"><?php $SomeDate = new DateTime(); echo $SomeDate->format('Y-m-d'); ?>
                    </div>
		</h2>
        </div>
            <div style="width: 64%">
            </div>
            <div style="width: 25%;display:flex;flex-wrap:wrap;justify-content:center" >
                <div style="width: 100%;padding-bottom: 5%;display: flex; justify-content: center">
             <img src="cancer 2.jpg" style="width: 60%;height: 100%"/>

                </div>
                <div style="width: 100%;text-align: center;">
                    <p style="font-size:1.2vw " >معهد جنوب مصر للاورام</p>
                </div>
                
            </div>
    </header>
		
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
															  
		$sql="SELECT serial FROM adt where discharge_date is null and ward is not null ";		
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
			<th class="th1">الدور</th><th class="th2">العدد</th>
		</thead>
		
		<tbody>
			
					
		<?php
			
            include 'config.php';
			
			
			if(isset($_SESSION['username']))
			{
				
			if(isset($_POST['butt1']))
			{ 
				
				
			$sql1="SELECT * FROM wards_for_labels ";
			
            $result1=mysqli_query($conn,$sql1);
				    
			if($result1)
            {
              while($row=mysqli_fetch_assoc($result1))
            {
						
			$sql2="SELECT serial FROM adt where discharge_date is null and ward = '".$row['Ward_code']."' " ;
	
			$result2 = mysqli_query($conn,$sql2);
	
			$rowcount1=mysqli_num_rows($result2);
		
			if ($rowcount1 != 0){	  	 		  
                        
			print "<tr><td align='center'>$row[Ward_text]</td><td align='center'>$rowcount1</tD>
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
	
	
	<script src="js/ward_numbers_report.js"></script>
</body>
	

</html>