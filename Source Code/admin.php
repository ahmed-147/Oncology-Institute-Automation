<?php ob_start(); ?>

<?php

 session_start();

$page = $_SERVER['PHP_SELF'];
$sec = "300";


function get_Enter_Patients()
{
    include "config.php";
    
        $SomeDate = new DateTime(); 
    
        $sql = "select datediff(now(),admission_date) as asd from adt where admission_date = '".$SomeDate->format('Y-m-d')."' "; 
 
        $result =mysqli_query($conn,$sql);
    
        $count = mysqli_num_rows($result);
    
        echo $count ;

}


function get_Exit_Patients()
{
    include "config.php";
    
    $SomeDate = new DateTime(); 
    
        $sql1 = "select datediff(now(),discharge_date) as asd from adt where discharge_date = '".$SomeDate->format('Y-m-d')."' ";
 
        $result1 =mysqli_query($conn,$sql1);
    
        $count1 = mysqli_num_rows($result1);
    
        echo $count1 ;

}


function get_tickets_Patients()
{
    include "config.php";
    
    $SomeDate = new DateTime(); 
    
        $sql2 = "select datediff(now(),date) as asd from outpatients_tickets where date = '".$SomeDate->format('Y-m-d')."' ";
 
        $result2 =mysqli_query($conn,$sql2);
    
        $count2 = mysqli_num_rows($result2);
    
        echo $count2 ;

}


function get_Operations_Patients()
{
    include "config.php";
    
    $SomeDate = new DateTime(); 
    
        $sql3 = "select datediff(now(),Date) as asd from op_operative_record where Date = '".$SomeDate->format('Y-m-d')."' ";
 
        $result3 =mysqli_query($conn,$sql3);
    
        $count3 = mysqli_num_rows($result3);
    
        echo $count3 ;

}


function get_Current_Patients()
{
    include "config.php";
    
    $SomeDate = new DateTime(); 
    
        $sql4 = "SELECT * FROM adt where discharge_date is null ";
 
        $result4 =mysqli_query($conn,$sql4);
    
        $count4 = mysqli_num_rows($result4);
    
        echo $count4 ;

}

?>




<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta charset="utf8mb4_general_ci">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
 	<link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css"/> 
    <link rel="stylesheet" href="css/admin.css"/>
    <link rel="stylesheet" href="css/fontawesome-all.css"/>
  
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
            <span class="glyphicon glyphicon-off close_icon"></span> 
            </a>
        </div>
				
    <ul class="nav nav-stacked place">
  <li>    
      <a href="#" id="a1">
          <span class="glyphicon glyphicon-stats icon1"></span>
          <span>إحصائيات اليوم</span>   
      </a>
        </li>
        
  <li>
      <a href="#" id="a2">
          <span class="glyphicon glyphicon-asterisk manage"></span>
          <span>إدارة الاقسام</span>
          </a>
        </li>
		
	<li>
      <a href="#" id="a3">
          <span class="glyphicon glyphicon-user add"></span>
          <span> بيانات الموظفين</span>
          </a>
        </li>
    <li>
      <a href="#" id="a4">
          <span><i class="fas fa-user-md doctor_icon"></i></span>
          <span> بيانات الأطباء</span>
          </a>
        </li>
        
    <li>
      <a href="#" id="a5">
          <span><i class="fas fa-medkit nurse_icon"></i></span>
          <span>بيانات التمريض</span>
          </a>
        </li>
        
    <li>
      <a href="#" id="a6">
          <span><i class="fas fa-database backup_icon"></i></span>
          <span>قاعدة البيانات</span>
          </a>
        </li>
        
        <li>
      <a href="#" id="a7">
          <span><i class="fas fa-users users_icon"></i></span>
          <span>المستخدمين النشطاء</span>
          </a>
        </li>
        
</ul>
    </div>
				

   <form id="form1" class="probility" method="post">
              
        <output class="title_probility">الإحصائيات</output>
       
       <div class="form1_d1">
       <div class="form1_d1_d1">
            <h1 id="tit1"> دخول اليوم </h1>
            <span><i class="fas fa-door-open signin_icon"></i></span>
           <div>
           <label id="num_patient"> عدد المرضي :</label> 
           <input  type="text" class="text1"  disabled="disabled" value="<?php echo get_Enter_Patients();?>">
               </div>
        </div>
           
        <div class="form1_d1_d2">
            <h1 id="tit2"> خروج اليوم </h1>
            <span> <i class="fas fa-door-closed signout_icon"></i></span>
            <div>
            <label id="num_patient"> عدد المرضي :</label>
            <input  type="text" class="text1"  disabled="disabled" value="<?php echo get_Exit_Patients();?>">
                </div>
        </div>
           
           <div class="form1_d1_d3">
            <h1 id="tit2">المرضى الحاليين</h1>
            <span> <i class="fas fa-users signout_icon"></i></span>
            <div>
            <label id="num_patient"> عدد المرضي :</label>
            <input  type="text" class="text1"  disabled="disabled" value="<?php echo get_Current_Patients();?>">
                </div>
        </div>
           
           </div>
        
       <div class="form1_d2">
        <div class="form1_d2_d1">
            <h1 id="tit4">تذاكر اليوم</h1>
            <span> <i class="far fa-newspaper ticket_icon"></i></span>
                <div>
                <label id="num_patient">عدد التذاكر :</label>
                <input  type="text" class="text1"  disabled="disabled" value="<?php echo get_tickets_Patients();?>">
                    </div>
        </div>
       
       <div class="form1_d2_d2">
            <h1 id="tit3">عمليات</h1>
            <span> <i class="fas fa-procedures operative_icon"></i></span>
           <div>
           <label id="num_patient">عدد المرضي :</label> 
           <input  type="text" class="text1"  disabled="disabled" value="<?php echo get_Operations_Patients();?>">
               </div>
        </div>
           </div>
       
		</form>
		
        
        
		
		<form id="form2" class="control control2" method="post" target="_blank">
              
        <output class="title_control">إداره الاقسام</output>
            
          <div class="form2_d1">
           <div class="form2_d1_d1">
                   <button type="submit" class="btn btn-default btn1" name="patient_affairs"> 
                       <span><i class="fas fa-user-friends icon"></i> </span> 
                       <label> شئون المرضي </label>
               </button>

          </div>
    

          <div class="form2_d1_d2">
              <button type="submit" class="btn btn-default btn1" name="operation"> 
                  <span><i class="fas fa-procedures icon"></i> </span> 
                       <label> عمليات </label>
                  </button>
              
            </div>
          </div>
            
            
          <div class="form2_d2">
              <div class="form2_d2_d1">
                <button type="submit" class="btn btn-default btn1" name="lab">
                    <span><i class="fas fa-vials icon"></i></span>
                    <label> معامل </label>
                </button>
              </div>
              <div class="form2_d2_d2">
                  <button type="submit" class="btn btn-default btn1" name="diet">
                    <span  class="glyphicon glyphicon-cutlery icon"></span>
                    <label> تغذية </label>
                </button>
              </div>
          </div>
   
    
		</form>
		
		
		<!--    Form 3 (بيانات الموظف)    -->
        
        
        <form class="add1 add2" id="form3" method="post" action="">
			
			<output class="title_add">بيانات الموظف</output>
			
            <div class="d0">
                
                <button type="submit" class="btn btn-primary btn-lg save_employee" name="save_employee" data-toggle="tooltip" title="حفظ بيانات موظف">       
                    <span class="glyphicon glyphicon-floppy-save save_icon"></span> 
                    </button>
				  
				  <button type="submit" class="btn btn-primary btn-lg change_employee" name="change_employee" data-toggle="tooltip" title="تعديل بيانات موظف">       
                    <span class="glyphicon glyphicon-random change_icon"></span> 
                    </button>
				 
				 <button type="submit" class="btn btn-primary btn-lg remove_employee" name="remove_employee" data-toggle="tooltip" title="حذف موظف">
                    <span class="glyphicon glyphicon-floppy-remove remove_icon"></span> 
                    </button>
				 
			 </div>

       <div class="form3_d1">
           
        <div class="search-box d1_d1">
    <label>اسـم الموظـف :</label>
  <input type="text" name="name" class="form-control form3_inp1" autocomplete="off" required>   
        <span class="stric">*</span>  
            <div class="result"></div>
           </div>
           
        <div class="d1_d2">
    <label>كود الموظـف :</label>
  <input type="text" name="code_employee" class="form-control form3_inp5" autocomplete="off" required readonly>    
           </div>   
           
        </div>
        
        
        <div class="form3_d2">
        <div class="d2_d1">
    <label >اسم المستخدم   :</label>
  <input type=" text" name="username" class="form-control form3_inp2" autocomplete="off" required>   
     <span class="stric">*</span>
            </div>
  
    <div class="d2_d1">
         <label >كـلـمه الـمـرور  :</label>
  <input type=" text" name="password" class="form-control form3_inp3" autocomplete="off" required> 
     <span class="stric">*</span>
            </div>
        </div>
            
        <div class="form3_d3">
            <div class="form3_d3_d1">
    
                <label>الــوظـيـفـه:</label>
          <select name="job" class="sel">
              
              <?php
						
				include 'config.php';
						
                $sql="select * from user_type";
						
				$list=mysqli_query($conn,$sql);
                        
						if($list)
                        {
                            while($row=mysqli_fetch_assoc($list))
                            {
                                print "<option value='".$row[code]."'>$row[Text]</option>";
                            }
                        }
						
				?>   
                         
            </select>
                
            </div>
            
            <div class="form3_d3_d2">
                
                <label >الراتب :</label>
            <input type="text" name="salary" class="form-control form3_inp4" autocomplete="off" required>   
            <span class="stric">*</span>
                
                
          
            
        </div>
            
                </div>
        </form>
        
        
        
        <!--    Form 4 (بيانات الأطباء)    -->
        
        
        <form class="doctor1 doctor2" id="form4" method="post">
			
			<output class="title_doctor">بيانات الطبيب</output>
			
            <div class="d0">
                
                <button type="submit" class="btn btn-primary btn-lg save_doctor" name="save_doctor" data-toggle="tooltip" title="حفظ بيانات طبيب">       
                    <span class="glyphicon glyphicon-floppy-save save_icon"></span> 
                    </button>
				  
				  <button type="submit" class="btn btn-primary btn-lg change_doctor" name="change_doctor" data-toggle="tooltip" title="تعديل بيانات طبيب">       
                    <span class="glyphicon glyphicon-random change_icon"></span> 
                    </button>
				 
				 <button type="submit" class="btn btn-primary btn-lg remove_doctor" name="remove_doctor" data-toggle="tooltip" title="حذف طبيب">
                    <span class="glyphicon glyphicon-floppy-remove remove_icon"></span> 
                    </button>
				 
			 </div>

       <div class="form4_d1">
           
        <div class="search-box1 form4_d1_d1">
    <label>اسـم الطبيب :</label>
  <input type="text" name="doctor_name" class="form-control form4_inp1" autocomplete="off" required/>   
        <span class="stric">*</span>  
            <div class="result1"></div>
           </div>
           
        <div class="form4_d1_d2">
          <label>كود الطبيب :</label>
           <input type="text" name="doctor_code" class="form-control form4_inp2" autocomplete="off" required readonly/>   
            <span class="stric">*</span>
        </div>
           
        </div>
        
            
        <div class="form4_d2">
            
            <div class="form4_d2_d1">
            <label> التخصص :</label>
                
            <select name="job_doctor" class="form4_sel">
              
              <option value="1">تشخيص</option>
              <option value="2">جراح</option>
              <option value="3">تخدير</option>
                         
            </select>
            
            </div>
            
            <div class="form4_d2_d2">
    <label >الراتب :</label>
  <input type="text" name="doctor_salary" class="form-control form4_inp3" autocomplete="off">   
     <span class="stric">*</span>
            </div>
            
            </div>

        </form>
        
        
        
                
        <!--    Form 5 (بيانات التمريض)    -->
        
        
        <form class="nurse1 nurse2" id="form5" method="post">
			
			<output class="title_nurse">بيانات التمريض</output>
			
            <div class="d0">
                
                <button type="submit" class="btn btn-primary btn-lg save_nurse" name="save_nurse" data-toggle="tooltip" title="حفظ بيانات طبيب">       
                    <span class="glyphicon glyphicon-floppy-save save_icon"></span> 
                    </button>
				  
				  <button type="submit" class="btn btn-primary btn-lg change_nurse" name="change_nurse" data-toggle="tooltip" title="تعديل بيانات طبيب">       
                    <span class="glyphicon glyphicon-random change_icon"></span> 
                    </button>
				 
				 <button type="submit" class="btn btn-primary btn-lg remove_nurse" name="remove_nurse" data-toggle="tooltip" title="حذف طبيب">
                    <span class="glyphicon glyphicon-floppy-remove remove_icon"></span> 
                    </button>
				 
			 </div>

          <div class="form5_d1">
        <div class="search-box2 form5_d1_d1">
    <label>اسـم الممرض/الممرضه :</label>
  <input type="text" name="nurse_name" class="form-control form5_inp1" autocomplete="off" required>   
        <span class="stric">*</span>  
            <div class="result2"></div>
           </div>
           
        <div class="form5_d1_d2">
          <label>كود الممرض/الممرضة :</label>
           <input type="text" name="nurse_code" class="form-control form5_inp2" autocomplete="off" required readonly/>   
            <span class="stric">*</span>
        </div>
              
        </div> 
            
            <div class="form5_d3">
    <label >الراتب :</label>
  <input type="text" name="nurse_salary" class="form-control form5_inp3" autocomplete="off">   
     <span class="stric">*</span>
            </div>
            

        </form>
        
        
        
        <!--    Form 6 (قاعدة البيانات)    -->
        
        
        <form class="backup1 backup2" id="form6" method="post">
			
			<output class="title_backup">إدارة قاعدة البيانات</output>
			
                <div class="form6_d1">
           <div class="form6_d1_d1">
                   <button type="submit" class="btn btn-default btn1_form6" name="backup"> 
                       <span><i class="fas fa-database icon_form6"></i> </span> 
                       <label>نسخ إحتياطى لقاعدة البيانات</label>
               </button>

          </div>
    

          <div class="form6_d1_d2">
              <button type="submit" class="btn btn-default btn1_form6" name="restore"> 
                  <span><i class="fas fa-database icon_form6"></i> </span> 
                       <label> استرجاع قاعدة البيانات </label>
                  </button>
              
            </div>
                    
                <div class="form6_d1_d3">
             <input type="file" name="path_restore" id="path_restore" class="custom-file-input path_restore"/>
            </div>
                    
          </div>
            

        </form>
        
        
        <!--    Form 7 (المستخدمين النشطاء)    -->
        
        
        <form class="active1 active2" id="form7" method="post">
			
			<output class="title_active">المستخدمين النشطاء</output>
			
                <div class="form7_d1">
           <div class="form7_d1_d1">
              <span class="div_title">الإستقبال</span> 
               
               <table class="active_table">
                   <thead>
                   <th class="th1">اسم المستخدم</th><th class="th2">نشط الأن</th>
                        </thead>
                   
                   <tbody>
                      
                <?php
						
				include 'config.php';
						
                $sql="select Name from users where active = '1' AND type = '1' || active = '1' AND type = '2' ";
						
				$result =mysqli_query($conn,$sql);
                        
						if($result)
                        {
                            while($row=mysqli_fetch_assoc($result))
                            {
                                echo "<tr><td>$row[Name]</td><td><img src='active.png'/></td></tr>";
                            }
                        }
                       else 
                       {
                            echo("Error description: " . mysqli_error($conn));
                       }
						
				?> 
                       
                       
                       
                   </tbody>
               
               
               
               
               </table>
          </div>
    

          <div class="form7_d1_d2">
              <span class="div_title">المعمل</span>
              
                <table class="active_table">
                   <thead>
                   <th class="th1">اسم المستخدم</th><th class="th2">نشط الأن</th>
                        </thead>
                   
                   <tbody>
                       
                      
                <?php
						
				include 'config.php';
						
                $sql="select Name from users where active = '1' AND type = '5' ";
						
				$result =mysqli_query($conn,$sql);
                        
						if($result)
                        {
                            while($row=mysqli_fetch_assoc($result))
                            {
                                echo "<tr><td>$row[Name]</td><td><img src='active.png'/></td></tr>";
                            }
                        }
                       else 
                       {
                            echo("Error description: " . mysqli_error($conn));
                       }
						
				?> 
                       
                       
                   </tbody>
               
               
               
               
               </table>
              
            </div>
          </div>
            
            
        <div class="form7_d2">
           <div class="form7_d2_d1">
               <span class="div_title">العمليات</span>
               
                 <table class="active_table">
                   <thead>
                   <th class="th1">اسم المستخدم</th><th class="th2">نشط الأن</th>
                        </thead>
                   
                   <tbody>
                       
                      <?php
						
				include 'config.php';
						
                $sql="select Name from users where active = '1' AND type = '3' ";
						
				$result =mysqli_query($conn,$sql);
                        
						if($result)
                        {
                            while($row=mysqli_fetch_assoc($result))
                            {
                                echo "<tr><td>$row[Name]</td><td><img src='active.png'/></td></tr>";
                            }
                        }
                       else 
                       {
                            echo("Error description: " . mysqli_error($conn));
                       }
						
				?> 
                       
                       
                   </tbody>
               
               
               
               
               </table>

          </div>
    

          <div class="form7_d2_d2">
                <span class="div_title">التغذية</span>
              
                <table class="active_table">
                   <thead>
                   <th class="th1">اسم المستخدم</th><th class="th2">نشط الأن</th>
                        </thead>
                   
                   <tbody>
                       
                    <?php
						
				include 'config.php';
						
                $sql="select Name from users where active = '1' AND type = '4' ";
						
				$result =mysqli_query($conn,$sql);
                        
						if($result)
                        {
                            while($row=mysqli_fetch_assoc($result))
                            {
                                echo "<tr><td>$row[Name]</td><td><img src='active.png'/></td></tr>";
                            }
                        }
                       else 
                       {
                            echo("Error description: " . mysqli_error($conn));
                       }
						
				?>   
                       
                       
                   </tbody>
               
               
               
               
               </table>
              
            </div>
          </div>
            

        </form>
        
        
        
          
	</div>
		
   <script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/admin.js"></script>
    
</body>
</html>

<?php

include 'config.php';

	if($_SESSION['user_type'] == 6)
	{

	// PHP for Form1

    if(isset($_POST['save_employee']))
    { 
	
        $sql = "INSERT INTO users (Name,type,Username,Password,Salary) 
        VALUES ('".$_POST['name']."',".$_POST['job'].",
        '".$_POST['username']."','".$_POST['password']."',".$_POST['salary'].")";
   
      	
		if (mysqli_query($conn, $sql))
		{
    	
		echo '<div class="insert_dialoge" id="dialog-message" title="اضافه موظف">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
			
		} else {
			
		echo '<div class="insert_dialoge" id="dialog-message" title="اضافه موظف">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';	
    	
		}
    
	}
	
	if(isset($_POST['change_employee'])){ 
	
    $sql1 = "UPDATE users SET type= ".$_POST['job'].",Name = '".$_POST['name']."'
	,Username = '".$_POST['username']."', Password= '".$_POST['password']."',
    Salary= ".$_POST['salary']." WHERE Serial =".$_POST['code_employee']." ";
	

		if (mysqli_query($conn, $sql1))
		{
    	
		echo '<div class="insert_dialoge" id="dialog-message" title="تعديل بيانات مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
			
		} else 
        {
			
			echo '<div class="insert_dialoge" id="dialog-message" title="تعديل بيانات مريض">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';
			  	
		}
    
	}
 
	
	if(isset($_POST['remove_employee']))
	{ 
		
	echo'<div id="dialog-confirm" title="حذف مريض">
  <p style="margin-top:15px">
  <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 40px 0;"></span>
  <span style="margin-right:15px;float:right"> هل تريد بالتأكيد حذف هذا الموظف ؟</span>
  </p>
</div>';
	
	$sql2 = "DELETE FROM users WHERE Serial = ".$_POST['serial']." ";
     
    
		
	if(mysqli_query($conn,$sql2))
	{
		
	echo '<div class="insert_dialoge" id="dialog-message" title="حذف موظف">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
		
	}else
	{
		echo '<div class="insert_dialoge" id="dialog-message" title="حذف موظف">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';
	}
		
	}
        
        
        
    if(isset($_POST['save_doctor']))
    {
        if($_POST['job_doctor'] == 1)
        {
        
        $sql3 = "INSERT INTO doctors (name,Salary) VALUES ('".$_POST['doctor_name']."',
        ".$_POST['doctor_salary'].")";
   
      	
		if (mysqli_query($conn, $sql3))
		{
    	
		echo '<div class="insert_dialoge" id="dialog-message" title="اضافه طبيب">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
			
		} else {
			
		echo '<div class="insert_dialoge" id="dialog-message" title="اضافه طبيب">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';	
    	
		}
            }
        
        else if($_POST['job_doctor'] == 2)
        {
        
        $sql4 = "INSERT INTO op_surgeons (name,Salary) VALUES ('".$_POST['doctor_name']."',
        ".$_POST['doctor_salary'].")";
   
      	
		if (mysqli_query($conn, $sql4))
		{
    	
		echo '<div class="insert_dialoge" id="dialog-message" title="اضافه طبيب">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
			
		} else {
			
		echo '<div class="insert_dialoge" id="dialog-message" title="اضافه طبيب">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';	
    	
		}
        }
        
        else if($_POST['job_doctor'] == 3)
        {
        
        $sql5 = "INSERT INTO op_anesthesiologists (name,Salary) VALUES ('".$_POST['doctor_name']."',
        ".$_POST['doctor_salary'].")";
   
      	
		if (mysqli_query($conn, $sql5))
		{
    	
		echo '<div class="insert_dialoge" id="dialog-message" title="اضافه طبيب">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
			
		} else {
			
		echo '<div class="insert_dialoge" id="dialog-message" title="اضافه طبيب">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';	
    	
		}
        }
             
    }
	
       
    if(isset($_POST['change_doctor']))
    {
        if($_POST['job_doctor'] == 1)
        {
        
    $sql6 = "UPDATE doctors SET name = '".$_POST['doctor_name']."',
	Salary = ".$_POST['doctor_salary']." WHERE code =".$_POST['doctor_code']." ";
   
      	
		if (mysqli_query($conn, $sql6))
		{
    	
		echo '<div class="insert_dialoge" id="dialog-message" title="تعديل بيانات طبيب">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
			
		} else {
			
		echo '<div class="insert_dialoge" id="dialog-message" title="تعديل بيانات طبيب">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';	
    	
		}
            }
        
        else if($_POST['job_doctor'] == 2)
        {
        
    $sql7 = "UPDATE op_surgeons SET Salary = ".$_POST['doctor_salary']." 
    WHERE name ='".$_POST['doctor_name']."' ";
   
      	
		if (mysqli_query($conn, $sql7))
		{
    	
		echo '<div class="insert_dialoge" id="dialog-message" title="تعديل بيانات طبيب">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
			
		} else {
			
		echo '<div class="insert_dialoge" id="dialog-message" title="تعديل بيانات طبيب">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';	
    	
		}
            }
        
        else if($_POST['job_doctor'] == 3)
        {
        
    $sql8 = "UPDATE op_anesthesiologists SET Salary = ".$_POST['doctor_salary']." 
    WHERE name ='".$_POST['doctor_name']."' ";
   
      	
		if (mysqli_query($conn, $sql8))
		{
    	
		echo '<div class="insert_dialoge" id="dialog-message" title="تعديل بيانات طبيب">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
			
		} else {
			
		echo '<div class="insert_dialoge" id="dialog-message" title="تعديل بيانات طبيب">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';	
    	
		}
            }  
    }
        
    
	
	if(isset($_POST['remove_doctor']))
	{ 
        if($_POST['job_doctor'] == 1)
        {
		
	echo'<div id="dialog-confirm" title="حذف طبيب">
  <p style="margin-top:15px">
  <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 40px 0;"></span>
  <span style="margin-right:15px;float:right"> هل تريد بالتأكيد حذف هذا الطبيب ؟</span>
  </p>
</div>';
	
	$sql9 = "DELETE FROM doctors WHERE code = ".$_POST['doctor_code']." ";
     
	if(mysqli_query($conn,$sql9))
	{
		
	echo '<div class="insert_dialoge" id="dialog-message" title="حذف طبيب">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
		
	}else
	{
		echo '<div class="insert_dialoge" id="dialog-message" title="حذف طبيب">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';
	}
		
	}
        
        else if($_POST['job_doctor'] == 2)
        {
		
	echo'<div id="dialog-confirm" title="حذف طبيب">
  <p style="margin-top:15px">
  <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 40px 0;"></span>
  <span style="margin-right:15px;float:right"> هل تريد بالتأكيد حذف هذا الطبيب ؟</span>
  </p>
</div>';
	
	$sql10 = "DELETE FROM op_surgeons WHERE name = '".$_POST['doctor_name']."' ";
     
	if(mysqli_query($conn,$sql10))
	{
		
	echo '<div class="insert_dialoge" id="dialog-message" title="حذف طبيب">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
		
	}else
	{
		echo '<div class="insert_dialoge" id="dialog-message" title="حذف طبيب">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';
	}
		
	}
     
        else if($_POST['job_doctor'] == 3)
        {
		
	echo'<div id="dialog-confirm" title="حذف طبيب">
  <p style="margin-top:15px">
  <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 40px 0;"></span>
  <span style="margin-right:15px;float:right"> هل تريد بالتأكيد حذف هذا الطبيب ؟</span>
  </p>
</div>';
	
	$sql11 = "DELETE FROM op_anesthesiologists WHERE name = '".$_POST['doctor_name']."' ";
     
	if(mysqli_query($conn,$sql11))
	{
		
	echo '<div class="insert_dialoge" id="dialog-message" title="حذف طبيب">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
		
	}else
	{
		echo '<div class="insert_dialoge" id="dialog-message" title="حذف طبيب">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';
	}
		
	}   
        }
        
        
        
    if(isset($_POST['save_nurse']))
    { 
	
        $sql12 = "INSERT INTO op_nurses (name,Salary) 
        VALUES ('".$_POST['nurse_name']."',".$_POST['nurse_salary'].")";
   
      	
		if (mysqli_query($conn, $sql12))
		{
    	
		echo '<div class="insert_dialoge" id="dialog-message" title="اضافه ممرض/ممرضة">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
			
		} else {
			
		echo '<div class="insert_dialoge" id="dialog-message" title="اضافه ممرض/ممرضة">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';	
    	
		}
    
	}
	
	if(isset($_POST['change_nurse'])){ 
	
    $sql1 = "UPDATE op_nurses SET name = '".$_POST['nurse_name']."'
	,Salary= ".$_POST['nurse_salary']." WHERE code =".$_POST['nurse_code']." ";
	

		if (mysqli_query($conn, $sql1))
		{
    	
		echo '<div class="insert_dialoge" id="dialog-message" title="تعديل بيانات ممرض/ممرضة">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
			
		} else 
        {
			
			echo '<div class="insert_dialoge" id="dialog-message" title="تعديل بيانات ممرض/ممرضة">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';
			  	
		}
    
	}
 
	
	if(isset($_POST['remove_nurse']))
	{ 
		
	echo'<div id="dialog-confirm1" title="حذف ممرض/ممرضة">
  <p style="margin-top:15px">
  <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 40px 0;"></span>
  <span style="margin-right:15px;float:right"> هل تريد بالتأكيد حذف هذا الممرض/الممرضة ؟</span>
  </p>
</div>';
	
	$sql2 = "DELETE FROM op_nurses WHERE code = ".$_POST['nurse_code']." ";
     
    
		
	if(mysqli_query($conn,$sql2))
	{
		
	echo '<div class="insert_dialoge" id="dialog-message" title="حذف ممرض/ممرضة">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-ok-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
	<span style="margin-right:15px;float:right">تمت العملية بنجاح</span>
</p>
</div>';
		
	}else
	{
		echo '<div class="insert_dialoge" id="dialog-message" title="حذف ممرض/ممرضة">
  	<p style="margin-top:15px">
    <span class="glyphicon glyphicon-warning-sign" style="float:right; margin:3px 7px 30px 0; width:10px height:10px"></span>
    <span style="margin-right:15px;float:right">فشلت العملية</span> 
  </p>
</div>';
	}
		
	}
        
        
if(isset($_POST['backup']))
{ 
    include "backup.php";
	
}
        
 
if(isset($_POST['restore']))
{ 
    include "restore.php";
 }
        
        
        
    if(isset($_POST['patient_affairs']))
    { 
        header('Location: ticket_program.php');
        exit();
    }
    else if(isset($_POST['operation']))
        {
            header('Location: operation_program.php');
    	    exit();
        }
    else if(isset($_POST['diet']))
        {
            header('Location: diet_program.php');
    	    exit();
        }
    else if(isset($_POST['lab']))
        {
            header('Location: lab.php');
    	    exit();
        }
        
	}
       

       
else {
    
    header('Location: index.php');
    exit();

}




?>



