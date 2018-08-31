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
 <link rel="stylesheet" href="css/style_operation_program.css"/>
  
    <title>معهد جنوب مصر للاورام</title>  
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
    
    <div class="container-fluid origin">
    <header class="head">
        
		
		<a href="logout.php" target="" id="menu">
            <span class="glyphicon glyphicon-off"></span> 
            </a>
    
         <div class="top">    
        <img class="img_h" src="cancer%202.jpg"/>
        <h1>معهد جنوب مصر للاورام</h1> 
             </div>
        </header>
				

   <form class="operation" method="post">
              
        <output class="title_operation">Operative Record</output>
	   
	   <div class="d0">
                
                <button type="submit" class="btn btn-primary btn-lg save" name="save" data-toggle="tooltip" title="حفظ">       
                    <span class="glyphicon glyphicon-floppy-save" id="s1"></span> 
                    </button>
		   <button type="submit" class="btn btn-primary btn-lg save change" name="change" data-toggle="tooltip" title="تعديل ">       
                    <span class="glyphicon glyphicon-random" id="s1"></span> 
                    </button>
				  
			 </div>
	   
 <div class="al">
	 		<div class="d1 search-box">
                    <input type="text" name="code" class="form-control code" autocomplete="off">
                <label> patient code :</label>    
				<div class="result"></div>
            </div>
        
	 <div class="right">
		 
	 <div class="inl d2">
		 
  <label> Name : </label>
  <input type="text" name="name" class="form-control name" autocomplete="off">
       </div>
	 
	 <div class="inl d3">
		 
  <label> Age : </label>
   <input type="number" name="age" class="form-control age" autocomplete="off">
      </div>            
         
		 <div class="inl d4">
		 <label> Date : </label>   
      <input type="text" name="date" class="form-control date"
			 value="<?php $SomeDate = new DateTime(); echo $SomeDate->format('Y-m-d'); ?>">
         </div>
		 
		 <div class="d7">
           <label class="d7_l">Prepoperative diagnosis :</label>
         <textarea rows="2" class="form-control d7_area" name="pre_diag">
			 </textarea>
        </div>
		 
		 <div class="d8">
           <label class="d8_l">postpoperative diagnosis :</label>
         <textarea rows="2" class="form-control d8_area" name="post_diag">
			 </textarea>
        </div>
			 
		 <div class="d9">
			 
		<div class="inl d9_d1">
         <label>Operation room :</label>
                    <select class="d9_sel1 boot room" name="room">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>		
			</div>
		 
		 <div class="inl d9_d2">
         <label>Operation category :</label>      
             <select class="d9_sel2 boot" name="category">
                        <option value="1">Minor</option>
                        <option value="2">Moderate</option>
                        <option value="3">Major</option>
                        <option value="4">Skill</option>
             </select>
         </div>
		 
			 <div class="inl d9_d3">
         <label> operation type :</label>      
             <select class="d9_sel3 boot" name="type">
                        <option value="1">Elective</option>
                        <option value="2">Emergency</option>
                        <option value="3">Add-on</option>
                        <option value="4">Urgent</option>
             </select>
				 </div>
          
			 <div class="inl d9_d4">
         <label> Operation nature :</label>     
             <select class="d9_sel4 boot" name="nature">
                        <option value="1">Primary</option>
                        <option value="2">Secondary</option>
                        <option value="3">Reconstructive</option>                      
             </select>
			 </div>
			 
			 </div>
			 
		 <div class="d10">		
         <label>surgeon :</label>      
             <select class="d10_sel boot" name="surgeon">
				 
				 <?php
						
				include 'config.php';
						
                $sql="select * from op_surgeons";
						
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
		 
	 
	 <div class="d11">
		 
		 <div class="inl d11_d1">
        <label> Assistant surgeon :</label>    
             <select class="d11_sel1 boot" name="ass_surgeon1">
			<option value=null>لا يوجد</option>
				 <?php
						
				include 'config.php';
						
                $sql="select * from op_surgeons";
						
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
			 
             <select class="d11_sel2 boot" name="ass_surgeon2">                       
             <option value=null>لا يوجد</option>
				 <?php
						
				include 'config.php';
						
                $sql="select * from op_surgeons";
						
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
		 
		 
               <div class="d11_d2">
				   
            <select class="d11_sel3 boot" name="ass_surgeon3">
				<option value=null>لا يوجد</option>
				<?php
						
				include 'config.php';
						
                $sql="select * from op_surgeons";
						
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
		 
             <select class="d11_sel4 boot" name="ass_surgeon4">  
				 <option value=null>لا يوجد</option>
				 <?php
						
				include 'config.php';
						
                $sql="select * from op_surgeons";
						
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
            
		 <div class="d12">
		 
         <label>Anesthesiologist:</label>
       
             <select class="d12_sel1 boot" name="anesth1">
				 <option value=null>لا يوجد</option>
				  <?php
						
				include 'config.php';
						
                $sql="select * from op_anesthesiologists";
						
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
		 
             <select class="d12_sel2 boot" name="anesth2">  
				 <option value=null>لا يوجد</option>
				   <?php
						
				include 'config.php';
						
                $sql="select * from op_anesthesiologists";
						
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
		 
		 <div class="d13">
		 
        <label>scrub Nurse(s):</label>
       
             <select class="d13_sel1 boot" name="scrub1">
				 <option value=null>لا يوجد</option>
				 <?php
						
				include 'config.php';
						
                $sql="select * from op_nurses";
						
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
             <select class="d13_sel2 boot" name="scrub2">                       
             <option value=null>لا يوجد</option>
				 <?php
						
				include 'config.php';
						
                $sql="select * from op_nurses";
						
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

		 <div class="d14">
		 
        <label> circulating Nurse(s):</label>
       
            <select class="d14_sel1 boot" name="circ1">
				<option value=null>لا يوجد</option> 
				 <?php
						
				include 'config.php';
						
                $sql="select * from op_nurses";
						
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
			 
             <select class="d14_sel2 boot" name="circ2">                       
             <option value=null>لا يوجد</option>
				 <?php
						
				include 'config.php';
						
                $sql="select * from op_nurses";
						
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
		 

         <div class="d5">
			 <label>Anesthesia technique :</label>
			 <div class="inl d5_d">
			 <input type="checkbox" class="d5_check tech1" name="tech1"/>
			 <label class="d5_l">Inhalation</label>
				 </div>
			 
			 <div class="inl d5_d">
			 <input type="checkbox" class="d5_check tech2" name="tech2"/>
			 <label class="d5_l">Spinal</label>
				 </div>
			 
			 <div class="inl d5_d1">
			 <input type="checkbox" class="d5_check tech3" name="tech3"/>
			 <label class="d5_l">Epidural</label>
				 </div>
			 
			 <div class="inl d5_d">
			 <input type="checkbox" class="d5_check tech4" name="tech4"/>
			 <label class="d5_l">Field block</label>
				 </div>
			 
			 <div class="inl d5_d">
			 <input type="checkbox" class="d5_check tech5" name="tech5"/>
			 <label class="d5_l">Intravenous</label>
				 </div>
			 
			 </div>
		 
		 
		 <div class="d6">
			 <div class="inl d6_d1">
			 <input type="checkbox" class="d6_check tech6" name="tech6"/>
			 <label class="d6_l">Infiltration</label>
				 </div>
			 
			 <div class="inl d6_d">
			 <input type="checkbox" class="d6_check tech7" name="tech7"/>
			 <label class="d6_l">Nerve Block</label>
				 </div>
			 
			 <div class="inl d6_d3">
			 <input type="checkbox" class="d6_check tech8" name="tech8"/>
			 <label class="d6_l">Topical</label>
				 </div>
			 
			 <div class="inl d6_d">
			 <input type="checkbox" class="d6_check tech9" name="tech9"/>
			 <label class="d6_l">Other</label>
				 </div>
			 
			 </div>
         
         <div class="d15">
	 	 
         <label> Anesthesia technique : </label>
          
			 <div class="inl d15_d1">
         <label> Begin : </label>     
			 <input type="time" name="tech_begin" class="form-control d15_inp1">
         </div>
			 
			 <div class="inl d15_d2">
        <label class="text4"> End : </label>     
               <input type="time" name="tech_end" class="form-control d15_inp2">
			 </div>
			 
		 </div>
		 
		 <div class="d16">
             
          <label> Operation time : </label>
       
			 <div class="inl d16_d1">
         <label> Begin : </label>
      <input type="time" name="op_begin" class="form-control d16_inp1">
		</div>
         
			 <div class="inl d16_d2">
         <label> End : </label>  
               <input type="time" name="op_end" class="form-control d16_inp2">
			 </div>
			 
			 </div>
		 
		 		 <div class="d17">
					 
         <label> Wound classification :</label> 
             <select class="d17_d1 boot" name="wound">
                        <option value="1">Clean</option>
                        <option value="2">Clean contaminated</option>
                        <option value="3">Contaminated</option>
                        <option value="4">Dirty infection</option>         
             </select>
			 
			 </div>
		 
		 
		 		<div class="d18">
					
                 <label > Body system /region :</label>

                <div class="d18_d1">
					
                <div class="inl d18_d1_d1"> 
					<input type ="checkbox" name="body1" class="d18_sel body1"> 
					<label> Abdominal wall</label> 
					</div>
					
                <div class="inl d18_d1_d2"> 
					<input type ="checkbox" name="body2" class="d18_sel body2"> 
					<label> Abdominal parenchymal organs</label>
					</div>
					
                <div class="inl d18_d1_d3"> 
					<input type ="checkbox" name="body3" class="d18_sel body3"> 
					<label> Biliary </label>
					</div>
					
                </div>
                
                <div class="d18_d2">
					
                <div class="inl d18_d2_d1"> 
					<input type ="checkbox" name="body4" class="d18_sel body4"> 
					<label>Breast</label>
					</div>
					
                <div class="inl d18_d2_d2"> 
					<input type ="checkbox" name="body5" class="d18_sel body5"> 
					<label> Cranial</label>
					</div>
					
                <div class="inl d18_d2_d3" > 
					<input type ="checkbox" name="body6" class="d18_sel body6"> 
					<label> Endocrine gland</label>
					</div>
					
                </div>
                
                <div class="d18_d3">
					
                <div class="inl d18_d3_d1"> 
					<input type="checkbox" name="body7" class="d18_sel body7" > 
					<label> Eye/eat</label>
					</div>
					
                <div class="inl d18_d3_d2"> 
					<input type ="checkbox" name="body8" class="d18_sel body8"> 
					<label> Gastro-intestinal</label>
					</div>
					
                <div class="inl d18_d3_d3"> 
					<input type ="checkbox" name="body9" class="d18_sel body9"> 
					<label> Gynecological system</label>
					</div>
					
                </div>
                
                <div class="d18_d4">
					
                <div class="inl d18_d4_d1"> 
					<input type ="checkbox" name="body10" class="d18_sel body10"> 
					<label> Head/neck</label>
					</div>
					
                <div class="inl d18_d4_d2"> 
						<input type ="checkbox" name="body11" class="d18_sel body11"> 
					<label> Integumentary system</label>
					</div>
					
                <div class="inl d18_d4_d3"> 
					<input type ="checkbox" name="body12" class="d18_sel body12"> 
					<label> Lymphatic system</label>
					</div>
					
                </div>
                
                <div class="d18_d5">
					
                <div class="inl d18_d5_d1"> 
					<input type ="checkbox" name="body13" class="d18_sel body13"> 
					<label> Muscular system</label>
					</div>
					
                <div class="inl d18_d5_d2"> 
					<input type ="checkbox" name="body14" class="d18_sel body14"> 
					<label> Neurological system</label>
					</div>
					
                <div class="inl d18_d5_d3"> 
					<input type ="checkbox" name="body15" class="d18_sel body15"> 
					<label> Oral/facial</label>
					</div>
					
                </div>
                
                <div class="d18_d6">
					
                <div class="inl d18_d6_d1"> 
					<input type ="checkbox" name="body16" class="d18_sel body16"> 
					<label> Skeletal system</label>
					</div>
					
                <div class="inl d18_d6_d2"> 
					<input type ="checkbox" name="body17" class="d18_sel body17"> 
					<label> Thoracic</label>
					</div>
					
                <div class="inl d18_d6_d3"> 
					<input type ="checkbox" name="body18" class="d18_sel body18"> 
					<label> Urological system</label>
					</div>
					
                </div>
                	
                <div class="d18_d7"> 
					<input type ="checkbox" name="body19" class="d18_sel body19"> 
					<label> Vascular</label>
					</div>
					
		 </div>
		 
          		<div class="d19">
					
					
                 <label> Blood product adminsterted :</label> 
						
					<div class="inl d19_d1">
						
					<label> Type :</label> 	
             		<select class="d19_sel1 boot" name="blood_type1">
				 
				  <?php
						
				include 'config.php';
						
                $sql="select * from `op_blood product type`";
						
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
		 
					<div class="inl d19_d2">
                <label> Units : </label>
         		<input type="number" name="blood_unit1" class="form-control d19_inp">
					</div>
					
              </div>
		 
		 		
					
                <div class="d20">
					
					<div class="inl d20_d1">
                	<label> type : </label>
                 <select class="d20_sel1 boot" name="blood_type2">
				 
				  <?php
						
				include 'config.php';
						
                $sql="select * from `op_blood product type`";
						
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
					
					<div class="inl d20_d2">
              	<label> Units : </label>
         		<input type="number" name="blood_unit2" class="form-control d20_inp">
						</div>
        
		 </div> 
		 
		 
    <div class="d21"> 
		
  <label> Estimated blood loss : </label>
  <input type="text" name="loss" class="form-control d21_inp" >
        <label>CC</label>
		
		</div>
		 
		 <div class="d22">
			 
         <label class="d22_l"> Operative procedure : </label>
			 <label class="type">Type :</label>
         <textarea rows="2" class="d22_area" name="procedure"></textarea>
         		 
			 </div>
		 
		 
         <div class="d23">
			 
        <label class="d23_l"> Detalis : </label>
         <textarea rows="6" class="d23_area" name="details"></textarea>
         
		 </div>

		 <div class="d24">
         <label class="d24_l"> Intraoperative complications : </label>
			 <textarea rows="2" class="d24_area" name="Intraoperative"></textarea>    
			 </div>
	   
	 </div>
	 
	   </div>
		</form>
        
        
	</div>
		
   <script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/operation_program_javascript.js"></script>
    
</body>
</html>


<?php

include 'config.php';


	if($_SESSION['user_type'] == 3 || $_SESSION['user_type'] == 6)
	{
			
	$tech1 = (isset($_POST['tech1'])) ? -1 : 0;
	$tech2 = (isset($_POST['tech2'])) ? -1 : 0;
	$tech3 = (isset($_POST['tech3'])) ? -1 : 0;
	$tech4 = (isset($_POST['tech4'])) ? -1 : 0;
	$tech5 = (isset($_POST['tech5'])) ? -1 : 0;
	$tech6 = (isset($_POST['tech6'])) ? -1 : 0;
	$tech7 = (isset($_POST['tech7'])) ? -1 : 0;
	$tech8 = (isset($_POST['tech8'])) ? -1 : 0;
	$tech9 = (isset($_POST['tech9'])) ? -1 : 0;
		
		
	$body1 = (isset($_POST['body1'])) ? -1 : 0;
	$body2 = (isset($_POST['body2'])) ? -1 : 0;
	$body3 = (isset($_POST['body3'])) ? -1 : 0;
	$body4 = (isset($_POST['body4'])) ? -1 : 0;
	$body5 = (isset($_POST['body5'])) ? -1 : 0;
	$body6 = (isset($_POST['body6'])) ? -1 : 0;
	$body7 = (isset($_POST['body7'])) ? -1 : 0;
	$body8 = (isset($_POST['body8'])) ? -1 : 0;
	$body9 = (isset($_POST['body9'])) ? -1 : 0;
	$body10 = (isset($_POST['body10'])) ? -1 : 0;
	$body11 = (isset($_POST['body11'])) ? -1 : 0;
	$body12 = (isset($_POST['body12'])) ? -1 : 0;
	$body13 = (isset($_POST['body13'])) ? -1 : 0;
	$body14 = (isset($_POST['body14'])) ? -1 : 0;
	$body15 = (isset($_POST['body15'])) ? -1 : 0;
	$body16 = (isset($_POST['body16'])) ? -1 : 0;
	$body17 = (isset($_POST['body17'])) ? -1 : 0;
	$body18 = (isset($_POST['body18'])) ? -1 : 0;
	$body19 = (isset($_POST['body19'])) ? -1 : 0;

	
    if(isset($_POST['save'])){ 
		
	
    $sql = "INSERT INTO op_operative_record (Patient_code,Date,Operating_room,
	`Pre-op_diag`,`post-op_diag`,Op_category,Op_type,Op_nature,Surgeon,Ass1_Surgeon
	,Ass2_Surgeon,Ass3_Surgeon,Ass4_Surgeon,Anesth1,Anesth2,Scrub_nurse1,
	Scrub_nurse2,Circ_nurse1,Circ_nurse2,`An-tech1`,`An-tech2`,`An-tech3`,`An-tech4`,
	`An-tech5`,`An-tech6`,`An-tech7`,`An-tech8`,`An-tech9`,An_begin,An_end,Op_begin,
	Op_end,Wound_class,Body_system1,Body_system2,Body_system3,Body_system4,
	Body_system5,Body_system6,Body_system7,Body_system8,Body_system9,
	Body_system10,Body_system11,Body_system12,Body_system13,Body_system14,
	Body_system15,Body_system16,Body_system17,Body_system18,Body_system19,
	Blood_type1,Blood_units1,Blood_type2,Blood_units2,Blood_loss,Op_procedure_type,
	Op_procedure_details,`Intra-op_comp`) 
	VALUES ('".$_POST['code']."','".$_POST['date']."',".$_POST['room']."
	,'".$_POST['pre_diag']."','".$_POST['post_diag']."',".$_POST['category']."
	,".$_POST['type'].",".$_POST['nature'].",".$_POST['surgeon']."
	,".$_POST['ass_surgeon1'].",".$_POST['ass_surgeon2'].",".$_POST['ass_surgeon3']."
	,".$_POST['ass_surgeon4'].",".$_POST['anesth1'].",".$_POST['anesth2']."
	,".$_POST['scrub1'].",".$_POST['scrub2'].",".$_POST['circ1'].",".$_POST['circ2'].",
	".$tech1.",".$tech2.",".$tech3.",".$tech4.",".$tech5.",".$tech6.",
	".$tech7.",".$tech8.",".$tech9.",'".$_POST['tech_begin']."',
	'".$_POST['tech_end']."','".$_POST['op_begin']."','".$_POST['op_end']."',
	".$_POST['wound'].",".$body1.",".$body2.",
	".$body3.",".$body4.",".$body5.",
	".$body6.",".$body7.",".$body8.",
	".$body9.",".$body10.",".$body11.",
	".$body12.",".$body13.",".$body14.",
	".$body15.",".$body16.",".$body17.",
	".$body18.",".$body19.",".$_POST['blood_type1'].",
	".$_POST['blood_unit1'].",".$_POST['blood_type2'].",".$_POST['blood_unit2'].",".$_POST['loss'].",
	'".$_POST['procedure']."','".$_POST['details']."','".$_POST['Intraoperative']."')";
   
      	
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
			
	}
 
	else {
    
    header('Location: index.php');
    exit();

}




?>
