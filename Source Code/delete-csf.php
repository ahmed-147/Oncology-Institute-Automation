<?php ob_start(); ?>

<?php

 session_start();


include 'config.php';



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta charset="utf8mb4_general_ci">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
   
 	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">
	<link rel="stylesheet" href="css/bootstrap.css"/>  
    <link rel="stylesheet" href="css/style-lab.css"/>
    <link rel="stylesheet" href="css/edit-f-styles/d-report-style.css"/>
    <link rel="stylesheet" href="css/enter-f-style/csf-form-style.css"/>
    
    

    
  
    <title>Delete Report CSF</title>  
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
    <body>
        <div class="container">
            
            
            <form id="form1" method="post" action="lab.php" class="b-space">
                <div class="row general_lab_title">
                        <div class="col-sm-1">
                        <button class='btn btn-primary btn-lg print back_but' name='back' id='back_lab_ed' data-toggle='tooltip' title='رجوع'   >
                            <span class='glyphicon glyphicon-arrow-left sp_back' id='s3'></span> 
                        </button>
                    </div>
                        <h1 class="col-sm-11 ">الغاء CSF</h1>
                    
                </div>
                
            </form>
            
         <form id="form2" method="post" action="delete-csf.php"  >
                <div class="row">

                    <div class=" col-sm-3">
                        
                    </div>

                    <div class="col-sm-2">

                        <button type="submit" class="btn btn-primary btn-lg print" name="delete" id="delete-but" data-toggle="tooltip" title="عرض تقارير المريض للحزف"  >       
                        <span class="glyphicon glyphicon-trash" id="s1"></span> 
                        </button>
                    </div>
                    
                   

                   <div class="search_box_enter col-sm-2">
                       <input type="text" id="patient_code" class="form-control " name="patient_code" 
                              autocomplete="off" value=""  
                              required="required" >
                        <div class="result_enter"></div>

                    </div>

                    <div class="col-sm-2 pos-l-code">
                         <label>رقم المعهد :</label>
                   </div>

                   <div class="col-sm-3"><div id="txtHint"></div></div>

                </div>
                <div class='row'>
                    <hr/>
                </div>
            </form>
        
        
			
				<?php
		//********************php code ***************************	
			
			
if(isset($_SESSION['username']))
{			
				
                
  if (isset($_POST['delete'])) { 
                
                
                $_SESSION['p-code'] = $_POST['patient_code'];
                
                
        print " <form id='form3' method='get' action='delete-csf.php' >        
                <table border='3' rules='all' class='d_table'>

                <thead>
                    <div class='row'>
                        
                        <th class='title col-sm-2'>رقم المعمل</th>


                        <th class='title col-sm-3'>تاريخ أخذ العينة</th>

                        <th class='title col-sm-3'>تاريخ التقرير</th>

                        <th class='title col-sm-3'>عرض التقرير</th>
                        
                        <div class='col-sm-1'></div>

                    </div>

                </thead>

                <tbody>";
                
                $sql="SELECT * FROM seci.lab1_csf where patient_code ='".$_POST['patient_code']."' ";

                $queryResult=mysqli_query($conn,$sql);

                if($queryResult)
                {
                    
                    
                    $_SESSION['patient_code']=$_POST['patient_code'];
                    
                    while($row=mysqli_fetch_assoc($queryResult)){
                                                
                        print "<tr class='tr-row'>
                        <td align='center'>$row[Lab_number]</td>
                        <td align='center'>$row[Specimen_date]</td>
                        <td align='center'>$row[Report_date]</td>
                        <td align='center' >
                        <a  class='btn btn-outline-danger a-delete' role='button' href='delete-csf.php?serial=$row[Serial]' data-toggle='tooltip' title='حزف التقرير'>
                         
                         <span class=' glyphicon glyphicon-remove b-delete' ></span>
                         </a>
                        </td>
                        </tr>";
                        
                        
                    }

                }
        print " </tbody>

            </table>
                   
            </form>";
            
			
    }
    
  if(isset($_GET['serial'])){
        
        $de_sql= "DELETE FROM `seci`.`lab1_csf` WHERE `Serial`='".$_GET['serial']."';";
        
        if(mysqli_query($conn,$de_sql)){
            
            echo " deleted ";
           /*echo "<div class='insert_dialoge' id='dialog-message' title='اضافة تقرير'>
                    <p>
                        <span class='ui-icon ui-icon-circle-check' style='float:right; margin:0 7px 50px 0; width:10px height:10px'></span>
                        تمت العملية بنجاح 
                    </p>
                  </div>";*/
            
        }else{
            echo "did not deleted ";

        }
        
    }            
            
				
		}else {
    
    	header('Location: login1.php');
    	exit();

			}

			
    ?>	
		
               
            
        </div>
        
        
    
    <script src="js/jquery-2.1.4.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/edit-js/csf-edit-js.js"></script>
    <script src="js/edit-js/but-action.js"></script>
    
    </body>
    
</html>


    