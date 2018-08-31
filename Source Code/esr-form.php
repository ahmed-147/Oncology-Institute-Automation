<?php ob_start(); ?>

<?php

 session_start();


include 'config.php';


if(isset($_SESSION['username']))
{   
    if(isset($_GET['serial'])){
            
            $_SESSION['serial']= $_GET['serial'];
        }

}else {
    
    header('Location: login1.php');
    exit();

}


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
    <link rel="stylesheet" href="css/edit-f-styles/esr-edit-style.css"/>

    

    
  
    <title>edit ESR</title>  
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
    <body>
        <div class="container">
            
            
            <form id="form1" method="post" action="d-r-esr.php">
                <div class="row ">
                    <div class="col-sm-1">
                        <button class='btn btn-primary btn-lg print back_but' name='back' id='"back_d_esr' data-toggle='tooltip' title='رجوع'   >
                            <span class='glyphicon glyphicon-arrow-left sp_back' id='s3'></span> 
                        </button>
                    </div>
                    <div class="col-sm-11 general_lab_title">
                        <h1 >  تعديل نتائج ESR </h1>
                    </div>
                </div>
                
            </form>
            
            
            <!----------------------- esr form ------------------------->
          
			
<?php
		//********************php code ***************************	
			
			
if(isset($_SESSION['username']))
{	
    
    //------------- view button -----------------//
				
        
        
        
           
                
        //--------- query 1------// 
    
                
                $sql3="SELECT * FROM seci.lab1_esr where Serial ='".$_SESSION['serial']."' ";

                $query1Result=mysqli_query($conn,$sql3);

                if($query1Result){
                    $row_lab=mysqli_fetch_assoc($query1Result);
                    
                }

                //--------- query 2------//

                $sql4="SELECT * FROM seci.patients where patient_code ='" . $_SESSION['patient_code']. "' ";

                 
                $query2Result=mysqli_query($conn,$sql4);

                if($query2Result){
                    $row_patient=mysqli_fetch_assoc($query2Result);
                }
                //-----------------------//
                
                $_SESSION['n_row1']= $row_lab['n_row1'];
                $_SESSION['n_row2']= $row_lab['n_row2'];
                $_SESSION['r_header'] = $row_lab['Header'];
                    
                   
                
print "
    <form class='esr_form' method='post'  action='d-r-esr.php'>

        <div class = 'row'><hr class=''/></div>


    <!----------------------- -:(patient date):- ------------------------->

         <!----------------------- row 1 ------------------------->
        <div class='row b-space'>

            <div class='col-sm-1'>
                <button type='submit' class='btn btn-primary btn-lg print' name='insert' id='insert' data-toggle='tooltip' title='تسجيل'  >
                        <span class='glyphicon glyphicon-floppy-save' id='s3'></span> 
                    </button>
            </div>

            <div class='col-sm-1'>
                 <button type='button' class='btn btn-primary btn-lg print' name='print' id='print1' data-toggle='tooltip' title='طباعة'>
                <span class='glyphicon glyphicon-print' id='s2 '></span> 
            </button>
            </div>

            <div class='col-sm-3'>
                <label  name='p_name' id='name1'>$row_patient[patient_name] </label>
            </div>

            <div class='col-sm-1'>
              <label >الاسم </label>
            </div>


            <div class='col-sm-1'></div>



            <div class='col-sm-2'>
                <label id='patient_code' name='patient_code'>$row_patient[patient_code]</label>
            </div>


            <div class='col-sm-2'>
                <label > رقم المعهد  </label> 
            </div>
            <div class='col-sm-1'></div>

        </div>
         <!--------- end ------------->

         <!----------------------- row 2 ------------------------->   
        <div class='row b-space'>

            <div class='col-sm-2'></div>

            <div class='col-sm-2'>
                <input type='text' name='lab_num' id='lab_num' autocomplete='off'  class='form-control' value ='".$row_lab['Lab_number']."'/>
            </div>

            <div class='col-sm-2'>
              <label > رقم المعمل   </label>
            </div>


            <div class='col-sm-1'></div>



            <div class='col-sm-2'>
                <label id='age'  name='age' >$row_patient[age]</label>
            </div>


            <div class='col-sm-2'>
                <label > السن  </label> 
            </div>
            <div class='col-sm-1'></div>

        </div>
         <!--------- end ------------->

         <!----------------------- row 3 ------------------------->   
        <div class='row b-space'>

            <div class='col-sm-2'></div>

            <div class='col-sm-2'>
                <input type='text' name='report_d' id='report_d' autocomplete='off'  class='form-control' value='".$row_lab['Report_date']."' />
            </div>

            <div class='col-sm-2'>
              <label > تاريخ التقرير </label>
            </div>


            <div class='col-sm-1'></div>



            <div class='col-sm-2'>
                <input type='text' id='sample_d' class='form-control' name='sample_d' autocomplete='off' value='".$row_lab['Specimen_date']."'/>
            </div>


            <div class='col-sm-2'>
                <label > تاريخ اخذ العينة  </label> 
            </div>
            <div class='col-sm-1'></div>

        </div>

         <!--------- end ------------->

        <div class='row '>
                <div class='col-sm-12 general_lab_title'>
                    <h2 name ='r_header' class='td-dir'>$row_lab[Header]</h2>
                </div>
        </div>

        <!--------- table ------------->

        <div class='row'>

            <table border='3' rules='all' class='esr_table'>

            <thead>
                <th class='esr-th3'></th>
                <th class='esr-th1'>Result</th>
                <th class='esr-th2'>Normal range</th>               

            </thead>        
            <tbody>
                <tr class='tr-row'>
                    <th align='center'>First Hour</th>
                    <td align='center' class='td-dir'>
                        <div class='row '>
                            <div class='col-sm-3'></div>
                            <input type='text' name='row1' id='row1' class='row-res col-sm-3 form-control' autocomplete='off' value='$row_lab[row1]'/> 
                            <label class='col-sm-3 ' >".$row_lab['unit1']."</label>
                             <div class='col-sm-3'></div>
                        </div>
                    </td>

                    <td align='center' class='td-dir'>".$row_lab['n_row1']."</td>

                </tr>
                <tr class='tr-row'>
                    <th align='center'>Second Hour</th>
                    <td align='center' class='td-dir'>
                    <div class='row '>
                            <div class='col-sm-3'></div>
                            <input type='text' name='row2' id='row2' class='row-res col-sm-3 form-control' autocomplete='off' value='$row_lab[row2]'/> 
                            <label class='col-sm-3 ' >".$row_lab['unit2']."</label>
                             <div class='col-sm-3'></div>
                        </div>
                    </td>
                    <td align='center' class='td-dir'>".$row_lab['n_row2']."</td>

                </tr>
            </tbody>

          </table>

        </div>

             <div class='row'>
                      <textarea rows='2'cols='100' class='t-area td-dir' align='center' name='nb' id ='nb' >
                      ".$row_lab['NB']."</textarea>
               </div>

            </form>";
                    
		      
       
    
    //---------------- Insert button ----------------//
    if(isset($_POST['insert'])){
        
                if(isset($_POST['p_name']))
                {
                    $_SESSION['p_name'] = $_POST['p_name'];
                }

                if(isset($_POST['patient_code']))
                {
                    $_SESSION['patient_code'] = $_POST['patient_code'];
                }

                if(isset($_POST['lab_num']))
                {
                    $_SESSION['lab_num'] = $_POST['lab_num'];
                }

                if(isset($_POST['sample_d']))
                {
                    $_SESSION['sample_d'] = $_POST['sample_d']; 
                }

                if(isset($_POST['report_d']))
                {
                    $_SESSION['report_d'] = $_POST['report_d']; 
                }

                if(isset($_POST['row1']))
                {
                    $_SESSION['row1'] = $_POST['row1']; 
                }

                if(isset($_POST['row2']))
                {
                    $_SESSION['row2'] = $_POST['row2'];
                }
                if(isset($_POST['nb']))
                {
                    $_SESSION['nb'] = $_POST['nb'];
                }
        
         $sql8 = "UPDATE `seci`.`lab1_esr` SET `patient_code`='".$_SESSION['patient_code']."',`Header`='".$_SESSION['r_header']."',`Lab_number`='".$_SESSION['lab_num']."',`Specimen_date`='".$_SESSION['sample_d']."',`Report_date`='".$_SESSION['report_d']."',`row1`=".$_SESSION['row1'].",`unit1`='mm',`n_row1`='".$_SESSION['n_row1']."',`row2`=".$_SESSION['row2'].",`unit2`='mm',`n_row2`='".$_SESSION['n_row2']."',`NB`='".$_SESSION['nb']."' WHERE `Serial`='".$_SESSION['serial']."'";
        
        


            if (mysqli_query($conn, $sql8))
            {
                echo 'doneh jf hjgf hv jghf jhgjhgf ghf jghf ghf hgf ';
                
                
            /*echo "<div class='insert_dialoge' id='dialog-message' title='اضافة تقرير'>
                    <p>
                        <span class='ui-icon ui-icon-circle-check' style='float:right; margin:0 7px 50px 0; width:10px height:10px'></span>
                        تمت العملية بنجاح 
                    </p>
                  </div>";*/

            } else {
                echo 'qeury not work ';
                
                /*echo "<div class='insert_dialoge' id='dialog-message' title='خطأ'>
                    <p>
                        <span class='glyphicon glyphicon-warning-sign' style='float:right; margin:0 7px 50px 0; width:10px height:10px'></span>
                         &nbsp;&nbsp; لم تمت العملية بنجاح 
                    </p>
                  </div>";*/
              
            }
        
    }
    
    //---------------- print button ----------------//
    
    
    
    
    
    
          	
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
    <script src="js/edit-js/but-action-form-ed.js"></script>
    
    </body>
    
</html>
