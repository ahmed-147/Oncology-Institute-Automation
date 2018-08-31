<?php ob_start(); ?>

<?php

 session_start();


function get_P_Code()
{
    
        include "config.php";
    
        $query = "SELECT max(`patient_code`) FROM `patients` where patient_code like '18/%' ; "; 

            
        if($result = mysqli_query($conn, $query)){
                $rowp = mysqli_fetch_array($result);

            } else{
                echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
            }
    	
			$id = explode("/" , $rowp[0]);
			if(($id[1]+1)>9)
				return  $id[0]."/000".($id[1]+1);
			else
			  return  $id[0]."/0000".($id[1]+1);

}




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
 <link rel="stylesheet" href="css/style1.css"/>
  
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
            
            <a href="logout.php" target="" id="login" name="logout">
            <span class="glyphicon glyphicon-off close_icon"></span> 
            </a>
        </div>
    <ul class="nav nav-stacked place">
  <li>    
      <a href="#" id="a1">
          <span class="glyphicon glyphicon-user male"></span>
          <span> تسجيل مريض</span>   
      </a>
        </li>
        
  <li>
      <a href="#" id="a2">
          <span class="glyphicon glyphicon-stats data"></span>
          <span>بيانات التذاكر</span>
          </a>
        </li> 
        
    <li>
      <a href="#" id="a3">
          <span class="glyphicon glyphicon-import import"></span>
          <span>دخول مريض</span>
          </a>
        </li> 
		
        
        <li>
      <a href="#" id="a4">
          <span class="glyphicon glyphicon-transfer trans"></span>
          <span>تحويل</span>
          </a>
        </li> 
		
		<li>
      <a href="#" id="a6">
          <span class="glyphicon glyphicon-export import"></span>
          <span>خروج مريض</span>
          </a>
        </li>
		
		<li>
      <a href="#" id="a5">
          <span class="glyphicon glyphicon-list-alt report"></span>
          <span>تقارير</span>
          </a>
        </li>
        
        
</ul>
    </div>
		
		<! --------- Form 1 ---------- >
    
    
    <form id="form1" class="data1" action="" method="post">
        
                <output class="title">بيانات المريض</output>
        
              <div class="d0">
                
                <button type="submit" class="btn btn-primary btn-lg save" name="save" id="save" data-toggle="tooltip" title="حفظ">       
                    <span class="glyphicon glyphicon-floppy-save" id="s1"></span> 
                    </button>
				  
				  <button type="submit" class="btn btn-primary btn-lg save change" name="change" id="save" data-toggle="tooltip" title="تعديل بيانات مريض">       
                    <span class="glyphicon glyphicon-random" id="s1"></span> 
                    </button>
                
                <button type="submit" class="btn btn-primary btn-lg print" name="print" id="print1" data-toggle="tooltip" title="طباعة تذكره">
                    <span class="glyphicon glyphicon-print" id="s2"></span> 
                    </button>        
                  
                <button type="submit" class="btn btn-primary btn-lg print1" name="import" id="import" data-toggle="tooltip" title="دخول مريض">
                    <span class="glyphicon glyphicon-import" id="s3"></span> 
                    </button>
                  
                  <button type="submit" class="btn btn-primary btn-lg print1" name="trash" id="trash" data-toggle="tooltip" title="حذف مريض">
                    <span class="glyphicon glyphicon-floppy-remove" id="s3"></span> 
                    </button> 
                
            </div>
        
        
                   
        <div class="d1">
			
			<div class="number">
				
				<label>الرقم :</label>
				<input type="text" class="form-control input_number" name="ticket_num">
					
			</div>
		
            
                <div class="search-box1 patient_code">
                    <label>رقم المعهد :</label>
                    <input type="text" value="<?php echo get_P_Code();?>" id="patient_code" class="form-control ticket_code" name="patient_code" autocomplete="off">
                    <div class="result1"></div>
            </div>
			
			<div class="gender" id="gender">
                    <label>النوع :</label>
                    <input type="radio" name ="gender" value="1" id="male"/>
                    <label>ذكر</label>
                    <input type="radio" name ="gender" value="2" id="female"/>
                    <label>أنثى</label>
                </div>
            
            </div>
        
        <div class="d2">
			
			  <div class="search-box name">
                    <label>الاسم :</label>
                    <input type="text" name="name" id="name1" autocomplete="off" required="required" class="form-control">
                  <span class="stric">*</span>  
                  <div class="result"></div>
            	</div>  
			
                <div class="id">
                    <label>الرقم القومي :</label>
                    <input type="text" name ="id" id="id" class="form-control" maxlength="14">
                    <span class="stric">*</span>
                    <span class="glyphicon glyphicon-remove check check1" id="check"></span>
                </div>
               
            </div>
        
        <div class="d3">
                <div class="gove">
                    <label>المحافظة :</label>
                    <select name="governorate" class="gover">
                <?php
						
				include 'config.php';
						
                $sql="select * from governorates";
						
				$list=mysqli_query($conn,$sql);
                        
						if($list)
                        {
                            while($row=mysqli_fetch_assoc($list))
                            {
                                print "<option value='".$row[code]."'>$row[governorate_name]</option>";
                            }
                        }
						
				?>
                    </select>
                </div>
                <div class="center">
                    <label>المركز :</label>
                    <input type="text" name="district" class="form-control district">
                </div>
                <div class="village">
                    <label>القرية :</label>
                    <input type="text" name="village" class="form-control" id="village">
                </div>
            </div>
        
        <div class="d4">
                <div class="address">
                    <label>العنوان :</label>
                    <input type="text" name="address" class="form-control" id="address" required>
                    <span class="stric">*</span>
            </div>
            
                 <div class="status">
                    <label>الحالة الاجتماعية :</label>
                    <select name="status" id="status">              
                        
						<?php
						
				include 'config.php';
						
                $sql="select * from `marital status`";
						
				$list=mysqli_query($conn,$sql);
                        
						if($list)
                        {
                            while($row=mysqli_fetch_assoc($list))
                            {
                                print "<option value='".$row[code]."'>$row[status]</option>";
                            }
                        }
						
				?>
						
                    </select>
                </div>
            
            </div>
    
    <div class="d5">
                <div class="addressfollow"> <!-- عنوان المرافق للمريض  للمريض -->
                    <label>عنوان من<br> يمكن الاتصال به :</label>
                    <textarea cols="10" rows="3" name="next_of_kin" class="form-control" id="addressfollow"></textarea>
                    
                </div>
        </div>
        
        <div class="d6">
                <div class="work">
                    <label>المهنة :</label>
                    <select name="job" class="job">
                     <?php
						
				include 'config.php';
						
                $sql="select * from jobs";
						
				$list=mysqli_query($conn,$sql);
                        
						if($list)
                        {
                            while($row=mysqli_fetch_assoc($list))
                            {
                                print "<option value='".$row[code]."'>$row[job_name]</option>";
                            }
                        }
						
				?>   
                    </select>
                </div>
            <div class="job_details">
                <label>المهنة بالتفصيل :</label>
                <input type="text" name ="job_details" class="details form-control"/>
            </div>
            </div>
        
        <div class="d7">
                <div class="age">
                    <label>السن :</label>
                    <input type="text" name ="age" id="age" class="form-control">
                    <span class="stric">*</span>
                </div>
                <div class="birth">
                    <label>تاريخ الميلاد :</label>
                    <input type="text" name ="birth_date" id="birth" class="form-control">
                    <span class="stric">*</span>
                </div>
            </div>
            <div class="d8">
                <div class="phone">
                    <label>رقم الهاتف :</label>
                    <input type="text" name ="phone" class="form-control" id="mob">
                </div>
                <div class="home_num">
                    <label>رقم المنزل :</label>
                    <input type="text" name ="home_num" class="form-control">
                </div>
            </div>
            <div class="d9">
                <div class="diagnosis"> <!-- التشخيص االمبدئي -->
                    <label>التشخيص المبدئي :</label>
                    <textarea name ="initial_diagnosis" class="form-control" id="diagnosis"></textarea>
                </div>
            </div>
        
        <div id="txtHint"></div>
            
    </form>
		
		
		
		
	                	<!--   Form 2    -->
         
        
   <form id="form2" action="report_form2" class="ticket1 ticket2" method="post" target="_blank">
              
        <output class="title_ticket">بيانات التذاكر</output>
   
       
    <div class="search-box2 name2">
    <label>الاســـــــم   :</label>
     <input type="text" name="name_form2" id="name" class="form-control" autocomplete="off">
    <div class="result_form2"></div>
    </div>
       
     <div>
    <label>    الــتـاريـخ   :</label>
    <input type="date"  name="date_form2" id="date" class="form-control">
         
    </div>  
    
    <div>
    <label>  من تـاريخ  :</label>
      <input type="date"  name="from_form2" id="from" class="form-control">
    </div>
    
    <div> 
    <label> الي تـاريخ :</label>     
       <input type="date" name="to_form2" id="to" class="form-control">
    </div>
       
       <input type="submit" name="show_form2" class="btn btn-primary show1" value="عرض"/>
                    
    
		</form>
        
        
         <!--    Form 3 (بيانات الدخول)    -->
        
        
        <form class="enter1 enter2" id="form3" method="post" action="">
			
			<output class="title_enter">بيانات الدخول</output>
			
			<div class="d0">
                
                <button type="submit" class="btn btn-primary btn-lg save" name="save_form3" id="save" data-toggle="tooltip" title="حفظ">       
                    <span class="glyphicon glyphicon-floppy-save" id="s1"></span> 
                    </button>         
                  
                <button type="submit" class="btn btn-primary btn-lg print1" name="change_form3" id="import" data-toggle="tooltip" title="تعديل الدخول">
                    <span class="glyphicon glyphicon-random" id="s3"></span> 
                    </button>
                  
                  <button type="submit" class="btn btn-primary btn-lg print1" name="trash_form3" id="trash" data-toggle="tooltip" title="حذف مريض">
                    <span class="glyphicon glyphicon-floppy-remove" id="s3"></span> 
                    </button> 
                
            </div>
			
        <div class="row12 r1">
			
			<div class="search_box_enter patient_code_enter">
                    <label class="enter_code_label">رقم المعهد :</label>
                    <input type="text" id="patient_code" class="form-control enter_code" name="code_enter" autocomplete="off">
                    <div class="result_enter"></div>
            </div>
			
           
			<label class="enter_date"> تاريخ الدخول :</label>
            <input type="text" class="form-control enter_input_date" name="date_enter"
				   value="<?php $SomeDate = new DateTime(); echo $SomeDate->format('Y-m-d'); ?>">
            
			</div>
			
            <div class="row12 r2">
                
                <label class="enter_department">القسم :</label>
          <select class="enter_input_department" name="department_enter">
                         
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

		  <label class="enter_unit" >الوحده :</label>
          <input type="text" class="form-control enter_input_unit" name="unit_enter">
                
                <label class="enter_floor">الدور :</label>
                <select class="enter_input_floor" name="ward_enter">
                        
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
           
            <div class="row12 r3">
            <label class="enter_doctor">طبيب الدخول :</label>
            <select class="enter_input_doctor" name="doctor_enter">
                         
				<?php
						
				include 'config.php';
						
                $sql="select * from doctors";
						
				$list=mysqli_query($conn,$sql);
                        
						if($list)
                        {
                            while($row=mysqli_fetch_assoc($list))
                            {
                                print "<option value='".$row[code]."'>$row[name]</option>";
                            }
                        }
						
				?>  
                    </select>
            
            </div>
        
            
        <span  class="enter_title"><h3>بيانات الاقرار </h3></span>
            

            <div class="row12 r5">
           <label class="enter_name">الاسم :</label>
            <input type="text" class="form-control enter_input_name" name="consent_name">
                
            </div>
            
            <div class="row12 r6">
				
				<div class="col-sm-7">
				
            	 <label class="enter_relation">العلاقه :</label>
            <select class="enter_input_relation" name="consent_relation">
                         
                <?php
						
				include 'config.php';
						
                $sql="select * from relationship";
						
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
				
				<div class="col-sm-5">
					
					<label class="id_label_enter">رقم البطاقه :</label>
            <input type="text" class="form-control enter_id" name="consent_id">
					
				</div>
				
				</div>
       
				
				</form>
        
        
        
        <!--    Form 4 (transform)   -->
        
         <form id="form4" class="transform1 transform2" method="post">
             
             <output class="title_transform">تحويل مريض</output>
			 
			 <div class="d0">
                
                <button type="submit" class="btn btn-primary btn-lg save" name="save_transfer" id="save" data-toggle="tooltip" title="حفظ">       
                    <span class="glyphicon glyphicon-floppy-save" id="s1"></span> 
                    </button>
				  
				  <button type="submit" class="btn btn-primary btn-lg save change" name="change_transfer" id="save" data-toggle="tooltip" title="تعديل بيانات مريض">       
                    <span class="glyphicon glyphicon-random" id="s1"></span> 
                    </button>
				 
				 <button type="submit" class="btn btn-primary btn-lg print1" name="trash_transfer" id="trash" data-toggle="tooltip" title="حذف مريض">
                    <span class="glyphicon glyphicon-floppy-remove" id="s3"></span> 
                    </button>
				 
			 </div>
             
       <div class="r1 first">      
        <div class="col-sm-12" >
            
        <label> تاريخ التحويل : </label> <input type="text" class="form-control trans_date" 
		value="<?php $SomeDate = new DateTime(); echo $SomeDate->format('Y-m-d'); ?>" name="date_transfer">
          
           </div>
       </div>
        
       <div class="r1">
		   
       <div class="col-sm-7">
      
           
		    <div class="search-box4">
                    <label>الاسم :</label>
                    <input type="text" name="input_name" id="input_name" autocomplete="off" required="required" class="form-control input_name">
                    <div class="result_form4"></div>
            	</div> 
		   
           </div>
           
           <div class="col-sm-5">   
           
			   <div class="search-box4_code">
                    <label>رقم المعهد :</label>
                    <input type="text" class="form-control code" name="code_transfer" autocomplete="off">
                    <div class="result_form4_code"></div>
            </div>   
           </div>
		   
       </div>
       
        <div class="r1">
            <div class="col-sm-7">
       
            <label> الدور : </label>   
                    <select class="role fromward" name="fromward_transfer"  >
                      
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
            
            <div class="col-sm-5">
                
                <label> محول من قسم  : </label>   
                    <select class="from1 fromdept" name="fromdept_transfer" >
                        
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
               
            </div>    
       </div>
       
            <div class="r1">
                
                <div class="col-sm-7">
                    
                  <label> الدور : </label>   
                    <select class="role toward" name="toward_transfer">
                      
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
                
                <div class="col-sm-5">
                    
                    <label> الي قسم : </label>   
                    <select class="to1 todept" name="todept_transfer" >
                        
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
                
                </div>   
       </div>
            
                <div class="r1">        
                    <div class="col-sm-12">
                    
                      <label> الطبيب : </label>
                    <select class="doc" name="doctor_transfer" >
                       
						<?php
						
				include 'config.php';
						
                $sql="select * from doctors";
						
				$list=mysqli_query($conn,$sql);
                        
						if($list)
                        {
                            while($row=mysqli_fetch_assoc($list))
                            {
                                print "<option value='".$row[code]."'>$row[name]</option>";
                            }
                        }
						
				?>  
                    </select>   
                    
                    </div>
       </div>
			
				
           </form>
		
		
		
        <!--    EXIT Form   -->
        
         <form id="exit" class="exit1 exit2" method="post">
             
             <output class="title_exit">خروج مريض</output>
			 
			 <div class="d0_exit">
                
                <button type="submit" class="btn btn-primary btn-lg save_exit" name="save_exit" id="save" data-toggle="tooltip" title="حفظ">       
                    <span class="glyphicon glyphicon-floppy-save" id="s1"></span> 
                    </button>
				  
			 </div>
             
       <div class="rr1">
		      
		  <div class="col-sm-4">
                    
             <label>تاريخ الخروج : </label>
             <input type="text" class="form-control date_exit" name="date_exit"
			 value="<?php $SomeDate = new DateTime(); echo $SomeDate->format('Y-m-d'); ?>"/>
                    
           </div>
		   
          
		    <div class="col-sm-4">
                
                <label>القسم :</label>   
                    <select class="dept_exit" name="dept_exit" >
                        
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
               
            </div> 
		   
		   
		   <div class="col-sm-4">   
           
			   <div class="search-box6_code">
                    <label>رقم المعهد :</label>
                    <input type="text" class="form-control code_exit" name="code_exit" autocomplete="off">
                    <div class="result_form6_code"></div>
            </div>   
           </div>
		   

		   
       </div>
       
			 <div class="eng1">
				 
				 <div class="r1_exit">
					 
					 
			<div class="d_site">   
          		   
               <select class="site" name="site_exit" >
                        
				<option value="1">Assiut University Hospital</option>
                <option value="2">National Cancer institute</option>
                <option value="3">Others</option>
                   
                    </select>
                
			   <label>: Follow Up Site </label>
                
                
           </div>
				 
				 
			<div class="d_follow">   
          		   
               <select class="follow" name="follow_exit" >
                        
				<option value="1">Not required</option>
                <option value="2">Will be re-admitted</option>
                <option value="3">Outpatient Clinic</option>
                <option value="4">Referred to other hospital</option>
                   
                    </select>
                
			   <label>: Follow Up </label>
                
                
           </div>
					 
			<div class="d_operation">
				 
				  
               <select class="operation" name="operation_exit" >
                        
			<option value="0">0</option>
			<option value="1">1</option>

                    </select>
					 
					 <label>: Operation</label>
                
			   </div>
				 
				 					 
			 </div>
				 
				 <div class="r1_exit d1_exit">
				 
			<div class="d_condition">   
          		   
               <select class="condition" name="condition_exit" >
                  
                <option value="1">Living</option>
                <option value="2">Died</option>
                <option value="3">Patient escaped</option>
                <option value="4">Discharge on demand</option>
 
                    </select>
                
			   <label>: Discharge Condition </label>
                
					 </div>
					 
				 <div class="d_reason">
				 
				  
               <select class="reason" name="reason_exit" >
                   
                <option value="1">Curative treatment</option>
                <option value="2">Paliative treatment</option>
                <option value="3">Primary investigations</option>
                <option value="4">Follow up investigations</option>
   
                    </select>
					 
					 <label>: Reason for admission </label>
                
			 </div>
				
           </div>
					 
				 
	<h1 class="last">: Last Diagnosis </h1>
				 
				 
			<div class="r1_exit d2_exit">
				 
			 
			<div class="d_staging">   
          		   
               <select class="staging" name="staging_exit" >
                        
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
                
			   <label>: Staging </label>
                
                
           </div>
				 
				<div class="d_laterality">
				 
				  
               <select class="laterality" name="laterality_exit" >
                        
				<?php
						
				include 'config.php';
						
                $sql="SELECT * FROM laterality";
						
				$list=mysqli_query($conn,$sql);
                        
						if($list)
                        {
                            while($row=mysqli_fetch_assoc($list))
                            {
                                print "<option value='".$row[code]."'>$row[laterality_name]</option>";
                            }
                        }
						
				?>   
                    </select>
					 
					 <label>: Laterality</label>
                
			   </div>
				  	
					 
			 </div>
				 
				 <div class="r1_exit d3_exit">
					 
					 
				<div class="d_morphology">   
          		   
               <select class="morphology" name="morphology_exit" >
                        
				<?php
						
				include 'config.php';
						
                $sql="SELECT * FROM morphology";
						
				$list=mysqli_query($conn,$sql);
                        
						if($list)
                        {
                            while($row=mysqli_fetch_assoc($list))
                            {
                                print "<option value='".$row[Code]."'>$row[Morphology_text]</option>";
                            }
                        }
						
				?>   
                    </select>
              
			   <label>: Morphology </label>
                               
           </div>
					 <div class="d_topography">   
          		   
               <select class="topography" name="topography_exit" >
                        
				<?php
						
				include 'config.php';
						
                $sql="SELECT * FROM topography";
						
				$list=mysqli_query($conn,$sql);
                        
						if($list)
                        {
                            while($row=mysqli_fetch_assoc($list))
                            {
                                print "<option value='".$row[Code]."'>$row[Topography_text_Eng]</option>";
                            }
                        }
						
				?>   
                    </select>
                        
			   <label>: Topography </label>
                
                
           </div>
				
					 
					 
			</div>
				 
					 
		<div class="search-box7 d_clinical">			  
        <input type="text" class="form-control clinical" name="clinical_exit" autocomplete="off"/> 
		<label>: Clinical Diagnosis </label>
      	<div class="result7"></div>      
				 </div>
			
			
					 
			</div>
			 
			 <div class="d_doctor">
			 
				 <label>طبيب الخروج :</label>
				 <select type="text" class="doc_exit" name="doc_exit">
				 
			 
						<?php
						
				include 'config.php';
						
                $sql="select * from doctors";
						
				$list=mysqli_query($conn,$sql);
                        
						if($list)
                        {
                            while($row=mysqli_fetch_assoc($list))
                            {
                                print "<option value='".$row[code]."'>$row[name]</option>";
                            }
                        }
						
				?>  
				 
				 </select>
			 
			 
			 </div>
			 

           </form>
		
		
		
		<!--   Form 5    -->
         
        
   <form id="form5" class="report1 report2" method="post">
              
        <h2 class="title_report">تقارير</h2>
   
    
   <input type="button" name="but1_form5" class="btn btn-primary but1" id="enter_today" value="دخول يوم"/>
   <input type="button" name="but2_form5" class="btn btn-primary but2" id="exit_today" value="خروج يوم"/>
   <input type="button" name="but3_form5" class="btn btn-primary but3" id="current_patients" value="المرضى الحاليين"/>
   <input type="button" name="but4_form5" class="btn btn-primary but4" id="patients_period" value="مرضى قسم لفترة"/>
   <input type="button" name="but6_form5" class="btn btn-primary but5" id="patients_role" value="المرضى الحاليين بالدور"/>
   <input type="button" name="but9_form5" class="btn btn-primary but6" id="patients_dept" value="المرضى الحاليين بالقسم"/>
   <input type="button" name="but8_form5" class="btn btn-primary but7" id="today_dept" value="عمليات يوم"/>
   <input type="button" name="but5_form5" class="btn btn-primary but8" id="numbers_patients" value="اعداد المرضى الحاليين بالدور"/>
   <input type="button" name="but7_form5" class="btn btn-primary but9" id="patients_month" value="المرضى الحاليين لاكثر من شهر"/>
   
    
		</form>
              
        
    </div>
   
		
    <script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/JavaScript.js"></script>
    
</body>
</html>


<?php

include 'config.php';

	if($_SESSION['user_type'] == 1 || $_SESSION['user_type'] == 2 || $_SESSION['user_type'] == 6)
	{

	// PHP for Form1
	
    $_SESSION['ticket_num'] = $_POST['ticket_num'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['patient_code'] = $_POST['patient_code'];
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['job'] = $_POST['job'];  
    $_SESSION['job_details'] = $_POST['job_details']; 
    $_SESSION['status'] = $_POST['status'];         
    $_SESSION['governorate'] = $_POST['governorate'];
    $_SESSION['district'] = $_POST['district'];
    $_SESSION['village'] = $_POST['village'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['next_of_kin'] = $_POST['next_of_kin'];  
    $_SESSION['birth_date'] = $_POST['birth_date'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['initial_diagnosis'] = $_POST['initial_diagnosis'];
    $_SESSION['id'] = $_POST['id'];
    $_SESSION['phone'] = $_POST['phone'];
        
    $SomeDate = new DateTime(); 
    $date = $SomeDate->format('Y-m-d'); 
        
    if(isset($_POST['print'])){ 
	
    $sql0 = "INSERT INTO outpatients_tickets (date,ticket_number,patient_code,
    `time of ticket`) 
	VALUES ('".$date."','".$_POST['ticket_num']."','".$_SESSION['patient_code']."',
    )";
   
    mysqli_query($conn, $sql0);

	}
	
    
	
    if(isset($_POST['save'])){ 
	
    $sql = "INSERT INTO patients (patient_code,patient_name,gender,job
	,job_details,Marital_status,governorate,district,village,address,
    next_of_kin,birth_date,age,initial_diagnosis,National_ID_number,Mob) 
	VALUES ('".$_SESSION['patient_code']."','".$_SESSION['name']."',".$_SESSION['gender']."
	,".$_SESSION['job'].",'".$_SESSION['job_details']."',".$_SESSION['status']."
	,".$_SESSION['governorate'].",'".$_SESSION['district']."','".$_SESSION['village']."'
	,'".$_SESSION['address']."','".$_SESSION['next_of_kin']."','".$_SESSION['birth_date']."'
	,".$_SESSION['age'].",'".$_SESSION['initial_diagnosis']."','".$_SESSION['id']."'
	,'".$_SESSION['phone']."')";
   
      	
		if (mysqli_query($conn, $sql))
		{
    	
		echo '<div class="insert_dialoge" id="dialog-message" title="اضافه مريض">
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
	
	
	
	if(isset($_POST['change'])){ 
	
    $sql1 = "UPDATE patients SET patient_name='".$_SESSION['name']."',
	gender=".$_SESSION['gender'].",job=".$_SESSION['job']."
	,job_details='".$_SESSION['job_details']."',Marital_status=".$_SESSION['status']."
	,governorate=".$_SESSION['governorate'].",district='".$_SESSION['district']."'
	,village='".$_SESSION['village']."',address='".$_SESSION['address']."',
    next_of_kin='".$_SESSION['next_of_kin']."',birth_date='".$_SESSION['birth_date']."'
	,age=".$_SESSION['age'].",initial_diagnosis='".$_SESSION['initial_diagnosis']."'
	,National_ID_number='".$_SESSION['id']."',Mob='".$_SESSION['phone']."' 
	WHERE patient_code ='".$_POST['patient_code']."' ";
	

		if (mysqli_query($conn, $sql1))
		{
    	
		echo '<div class="insert_dialoge" id="dialog-message" title="تعديل بيانات مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
			
		} else {
			
			echo '<div class="insert_dialoge" id="dialog-message" title="تعديل بيانات مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';
			
    	
		}
    
	}
 
	
	if(isset($_POST['trash']))
	{ 
		
	echo'<div id="dialog-confirm" title="حذف مريض">
  <p style="margin-top:15px">
  <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 40px 0;"></span>
  <span style="margin-right:15px;float:right"> هل تريد بالتأكيد حذف هذا المريض ؟</span>
  </p>
</div>';
	
	$sql2 = "DELETE FROM patients WHERE patient_code = '".$_POST['patient_code']."' ";
     
    
		
	if(mysqli_query($conn,$sql2))
	{
		
	echo '<div class="insert_dialoge" id="dialog-message" title="حذف مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
		
	}else
	{
		echo '<div class="insert_dialoge" id="dialog-message" title="حذف مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';
	}
		
	}
	
	if(isset($_POST['save_form3'])){ 
	
    $sql3 = "INSERT INTO adt (patient_code,admission_date,ademission_dept,
	admission_unit,ademission_doctor,consent_name,consent_ID,consent_relation,ward) 
	VALUES ('".$_POST['code_enter']."','".$_POST['date_enter']."',
	".$_POST['department_enter'].",'".$_POST['unit_enter']."',".$_POST['doctor_enter'].",
	'".$_POST['consent_name']."','".$_POST['consent_id']."',".$_POST['consent_relation']."
	,".$_POST['ward_enter'].")";
   
      	
		if (mysqli_query($conn, $sql3))
		{
    	
		echo '<div class="insert_dialoge" id="dialog-message" title="دخول مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
			
		} else {
			
		echo '<div class="insert_dialoge" id="dialog-message" title="دخول مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';	
    	
		}
    
	}
	
	if(isset($_POST['change_form3'])){ 
	
    $sql4 = "UPDATE adt SET admission_date='".$_POST['date_enter']."',ademission_dept=".$_POST['department_enter']."
	,admission_unit='".$_POST['unit_enter']."',ademission_doctor=".$_POST['doctor_enter']."
	,consent_name= '".$_POST['consent_name']."',consent_ID = '".$_POST['consent_id']."',
	consent_relation= ".$_POST['consent_relation'].", ward=".$_POST['ward_enter']." 
	WHERE patient_code ='".$_POST['code_enter']."' ";
	

		if (mysqli_query($conn, $sql4))
		{
    	
		echo '<div class="insert_dialoge" id="dialog-message" title="تعديل دخول مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
			
		} else {
			
			echo '<div class="insert_dialoge" id="dialog-message" title="تعديل دخول مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';
    	
		}
    
	}
	
	if(isset($_POST['trash_form3']))
	{ 
		
	echo'<div id="dialog-confirm" title="حذف دخول مريض">
  <p style="margin-top:15px">
  <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 40px 0;"></span>
  <span style="margin-right:15px;float:right"> هل تريد بالتأكيد حذف هذا المريض ؟</span>
  </p>
</div>';
	
	$sql5 = "DELETE FROM adt WHERE patient_code = '".$_POST['code_enter']."' ";
     
    
		
	if(mysqli_query($conn,$sql5))
	{
		
	echo '<div class="insert_dialoge" id="dialog-message" title="حذف دخول مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
		
	}else
	{
		echo '<div class="insert_dialoge" id="dialog-message" title="حذف دخول مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';
	}
		
	}
	
	if(isset($_POST['save_transfer'])){ 
	
    $sql6 = "INSERT INTO adt_transfer (patient_code,date,from_dept,
	from_ward,to_dept,to_ward,transfer_doctor) 
	VALUES ('".$_POST['code_transfer']."','".$_POST['date_transfer']."',
	".$_POST['fromdept_transfer'].",".$_POST['fromward_transfer'].",".$_POST['todept_transfer'].",
	".$_POST['toward_transfer'].",".$_POST['doctor_transfer'].")";
   
      	
		if (mysqli_query($conn, $sql6))
		{
    	
		echo '<div class="insert_dialoge" id="dialog-message" title="تحويل مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
			
		} else {
			
		echo '<div class="insert_dialoge" id="dialog-message" title="تحويل مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';	
    	
		}
    
	}
	
	if(isset($_POST['change_transfer'])){ 
	
    $sql7 = "UPDATE adt_transfer SET date='".$_POST['date_transfer']."',from_dept=".$_POST['fromdept_transfer']."
	,from_ward=".$_POST['fromward_transfer'].",to_dept=".$_POST['todept_transfer']."
	,to_ward=".$_POST['toward_transfer'].",transfer_doctor=".$_POST['doctor_transfer']." 
	WHERE patient_code ='".$_POST['code_transfer']."' ";
	

		if (mysqli_query($conn, $sql7))
		{
    	
		echo '<div class="insert_dialoge" id="dialog-message" title="تعديل تحويل مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
			
		} else {
			
			echo '<div class="insert_dialoge" id="dialog-message" title="تعديل تحويل مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';
    	
		}
    
	}
	
	if(isset($_POST['trash_transfer']))
	{ 
		
	echo'<div id="dialog-confirm" title="حذف تحويل مريض">
  <p style="margin-top:15px">
  <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 40px 0;"></span>
  <span style="margin-right:15px;float:right"> هل تريد بالتأكيد حذف هذا التحويل ؟</span>
  </p>
</div>';
	
	$sql8 = "DELETE FROM adt_transfer WHERE patient_code = '".$_POST['code_transfer']."' ";
     
    
		
	if(mysqli_query($conn,$sql8))
	{
		
	echo '<div class="insert_dialoge" id="dialog-message" title="حذف تحويل مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
		
	}else
	{
		echo '<div class="insert_dialoge" id="dialog-message" title="حذف تحويل مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';
	}
		
	}

	if(isset($_POST['save_exit'])){ 
	
    $sql9 = "UPDATE adt SET discharge_date ='".$_POST['date_exit']."',discharge_dept=".$_POST['dept_exit']."
	,admission_reason=".$_POST['reason_exit'].",Operations=".$_POST['operation_exit']."
	,Discharge_condition=".$_POST['condition_exit'].",follow_up=".$_POST['follow_exit']." 
	,follow_up_site=".$_POST['site_exit'].",discharge_doctor=".$_POST['doc_exit'].",
	 Laterlatity= ".$_POST['laterality_exit'].", Staging= ".$_POST['staging_exit'].",
	 Diag= '".$_POST['clinical_exit']."', Topography= ".$_POST['topography_exit'].",
	 Morphology= ".$_POST['morphology_exit']." WHERE patient_code ='".$_POST['code_exit']."' ";
	

		if (mysqli_query($conn, $sql9))
		{
			
	$sql10 = "UPDATE patients SET Topography =".$_POST['topography_exit']."
	,Morphology =".$_POST['morphology_exit'].",Laterality =".$_POST['laterality_exit']."
	,Stage=".$_POST['staging_exit'].",Final_Diagnosis = '".$_POST['clinical_exit']."' WHERE patient_code ='".$_POST['code_exit']."' ";
	

		if (mysqli_query($conn, $sql10))
		{
    	
		echo '<div class="insert_dialoge" id="dialog-message" title="خروج مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
			
		}
			
		} else {
			
			echo '<div class="insert_dialoge" id="dialog-message" title="خروج مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';
    	
		}
    
	}
	

	}
       
else {
    
    header('Location: index.php');
    exit();

}




?>

