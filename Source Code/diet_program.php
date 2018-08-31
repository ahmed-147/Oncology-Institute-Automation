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
 	<link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css"/>  
 <link rel="stylesheet" href="css/diet_program.css"/>
  
    <title>معهد جنوب مصر للاورام</title>  
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
    
    <div class="container-fluid origin">
    <header class="head">
        
		<button type="button" class="btn btn-default" id="menu">
  <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
    </button>
		
         <div class="top">    
        <img class="img_h" src="cancer%202.jpg"/>
        <h1>معهد جنوب مصر للاورام</h1> 
             </div>
        </header>
		
		
		    <div class="bar" id="div1">
        <a href="#" id="close" class="btn">
  <span class="glyphicon glyphicon-circle-arrow-right"></span>
        </a> <br>
        <div class="userone">
            <input type="text" name="user_page" value= "<?php echo $_SESSION['user_name']; ?>" id="user" readonly/>
            
            <a href="logout.php" target="" id="login">
            <span class="glyphicon glyphicon-off"></span> 
            </a>
        </div>
    <ul class="nav nav-stacked place">
  <li>    
      <a href="#" id="a1">
          <span class="glyphicon glyphicon-user male"></span>
          <span> تغذية مريض</span>   
      </a>
        </li>
        
  <li>
      <a href="#" id="a2">
          <span class="glyphicon glyphicon-list-alt l_report"></span>
          <span>تقارير</span>
          </a>
        </li>         
        
</ul>
    </div>
				

   <form id="form1" class="diet" method="post">
              
        <output>تغذية مريض</output>
	  
	 		<div class="d1 search-box">                   
				<label>كود المريض  :</label> 
				<input type="text" name="code" class="form-control code" autocomplete="off">
				<div class="result"></div>
            </div>
        
		 
	 <div class="search-box1 d2">
                    <label> اسم المريض : </label>
                    <input type="text" name="name" class="form-control name" autocomplete="off">
                    <div class="result1"></div>
            	</div>
	 
	   
	   <div class="d3">
		<div class="inl d3_d1">
			 <label>الدور :</label>
                 
			<select class="d3_sel boot ward" name="ward">
				<?php
						
				include 'config.php';
						
                $sql="select * from wards_for_labels";
						
				$list=mysqli_query($conn,$sql);
                        
						if($list)
                        {
                            while($row=mysqli_fetch_assoc($list))
                            {
                                print "<option value='".$row[Ward_code]."'>$row[Ward_text]</option>";
                            }
                        }
						
				?>
			</select>
			</div>
		   
		   
		   <div class="inl d3_d2">
			 <label>التغذية :</label>
                 
			<select class="d3_sel1 boot diet_sel" name="diet">
				<?php
						
				include 'config.php';
						
                $sql="select * from diet";
						
				$list=mysqli_query($conn,$sql);
                        
						if($list)
                        {
                            while($row=mysqli_fetch_assoc($list))
                            {
                                print "<option value='".$row[code]."'>$row[text]</option>";
                            }
                        }
						
				?>
			</select>
			</div>
		 
		   
		 <div class="d4">
                
             <input type="submit" class="btn btn-primary save" name="save" value="حفظ"/>       
				 
			 <input type="submit" class="btn btn-primary change" name="change" value="تعديل"/>       
               
			 
	 </div>
		   
	 
	   </div>
		</form>
		
		
		<form id="form2" class="report report2" method="post">
              
        <output>تقارير</output>
   
    
   <input type="submit" class="btn btn-primary but1" id="men_surgery" value="تغذية دور رجال &nbsp;(جراحة)"/>
   <input type="submit" class="btn btn-primary but2" id="men_internal" value="تغذية دور رجال &nbsp;(باطنة)"/>
   <input type="submit" class="btn btn-primary but3" id="women_surgery" value="تغذية دور نساء &nbsp;(جراحة)"/>
   <input type="submit" class="btn btn-primary but4" id="women_internal" value="تغذية دور نساء &nbsp;(باطنة)"/>
   <input type="submit" class="btn btn-primary but5" id="children" value="تغذية دور أطفال"/>
   <input type="submit" class="btn btn-primary but6" id="intensive_care" value="تغذية عناية مركزة"/>
   <input type="submit" class="btn btn-primary but8" id="free" value="تغذية دور علاج حر"/>
   <input type="submit" class="btn btn-primary but7" id="print" value="طباعة التفريدة"/>
   
   
    
		</form>
        
        
	</div>
		
   <script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/diet_program.js"></script>
    
</body>
</html>



<?php

include 'config.php';

	
	if($_SESSION['user_type'] == 4 || $_SESSION['user_type'] == 6)
	{

    if(isset($_POST['save']))
	{
			
		$ward = $_POST['ward'];
		
		if($ward == 1)
		{
			$sql = "INSERT INTO `men_current diet` (patient_code,current_diet) 
			VALUES ('".$_POST['code']."',".$_POST['diet'].")";
        	
		if (mysqli_query($conn, $sql))
		{
    	
		echo '<div class="insert_dialoge" id="dialog-message" title="حفظ التغذية">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
			
		} else {
			
		
		echo '<div class="insert_dialoge" id="dialog-message" title="اضافه مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';	
    	
		}
		}
		
	
		if($ward == 2)
		{
			$sql1 = "INSERT INTO `women_current diet` (patient_code,current_diet) 
			VALUES ('".$_POST['code']."',".$_POST['diet'].")";
        	
		if (mysqli_query($conn, $sql1))
		{
    	
		echo '<div class="insert_dialoge" id="dialog-message" title="حفظ التغذية">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
			
		} else {
			
		
		echo '<div class="insert_dialoge" id="dialog-message" title="اضافه مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';	
    	
		}
		}
		
		
		if($ward == 3 || $ward == 5)
		{
			$sql2 = "INSERT INTO `priv_current diet` (patient_code,current_diet) 
			VALUES ('".$_POST['code']."',".$_POST['diet'].")";
        	
		if (mysqli_query($conn, $sql2))
		{
    	
		echo '<div class="insert_dialoge" id="dialog-message" title="حفظ التغذية">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
			
		} else {
			
		
		echo '<div class="insert_dialoge" id="dialog-message" title="اضافه مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';	
    	
		}
		}
		
		
				if($ward == 4)
		{
			$sql2 = "INSERT INTO `icu_current diet` (patient_code,current_diet) 
			VALUES ('".$_POST['code']."',".$_POST['diet'].")";
        	
		if (mysqli_query($conn, $sql2))
		{
    	
		echo '<div class="insert_dialoge" id="dialog-message" title="حفظ التغذية">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
			
		} else {
			
		
		echo '<div class="insert_dialoge" id="dialog-message" title="اضافه مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';	
    	
		}
		}
    
    
	}
	
	if(isset($_POST['change'])){ 
		
		
		$ward = $_POST['ward'];
		
		if($ward == 1)
		{
	
    $sql3 = "UPDATE `men_current diet` SET current_diet= ".$_POST['diet']."
	WHERE patient_code ='".$_POST['code']."' ";
	

		if (mysqli_query($conn, $sql3))
		{
    	
		echo '<div class="insert_dialoge" id="dialog-message" title="تعديل تغذية مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
			
		} else {
			
			echo '<div class="insert_dialoge" id="dialog-message" title="تعديل تغذية مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';
			
    	
		}  
	}
		
		if($ward == 2)
		{
	
    $sql4 = "UPDATE `women_current diet` SET current_diet= ".$_POST['diet']."
	WHERE patient_code ='".$_POST['code']."' ";
	

		if (mysqli_query($conn, $sql4))
		{
    	
		echo '<div class="insert_dialoge" id="dialog-message" title="تعديل تغذية مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
			
		} else {
			
			echo '<div class="insert_dialoge" id="dialog-message" title="تعديل تغذية مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';
			
    	
	}  
	}
		
		if($ward == 3 || $ward == 5)
		{
	
    $sql4 = "UPDATE `priv_current diet` SET current_diet= ".$_POST['diet']."
	WHERE patient_code ='".$_POST['code']."' ";
	

		if (mysqli_query($conn, $sql4))
		{
    	
		echo '<div class="insert_dialoge" id="dialog-message" title="تعديل تغذية مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
			
		} else {
			
			echo '<div class="insert_dialoge" id="dialog-message" title="تعديل تغذية مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';
			
    	
	}  
		}
		
	if($ward == 4)
		{
	
    $sql3 = "UPDATE `icu_current diet` SET current_diet= ".$_POST['diet']."
	WHERE patient_code ='".$_POST['code']."' ";
	

		if (mysqli_query($conn, $sql3))
		{
    	
		echo '<div class="insert_dialoge" id="dialog-message" title="تعديل تغذية مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
			
		} else {
			
			echo '<div class="insert_dialoge" id="dialog-message" title="تعديل تغذية مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';
			
    	
		}  
	}
	}
	}
	else {
    
    header('Location: index.php');
    exit();

}



?>
