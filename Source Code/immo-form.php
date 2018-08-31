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
    <link rel="stylesheet" href="css/edit-f-styles/immo-edit-style.css"/>
   
    <title>معهد جنوب مصر للاورام</title>  
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
    <body>
        <div class="container g">
            
            
            <form id="form1" method="post" action="d-r-immo.php">
                <div class="row ">
                    
                    <div class="col-sm-1">
                        <button class='btn btn-primary btn-lg print back_but' name='back' id='back_lab_ed' data-toggle='tooltip' title='رجوع'   >
                            <span class='glyphicon glyphicon-arrow-left sp_back' id='s3'></span> 
                        </button>
                    </div>
                    
                    
                        <h1 class="col-sm-11 general_lab_title" > تعديل immunology </h1>
                    
                </div>
                
            </form>
            
            
            <!----------------------- immo form ------------------------->
          
			
<?php
		//********************php code ***************************	
			
			
if(isset($_SESSION['username']))
{	
    
    
    //------------- view button -----------------//
				
   
        
                
                
                
                //-----------query 4------------//
                

                $sql4="SELECT * FROM seci.lab1_immunology  where Serial ='" . $_SESSION['serial']. "' ";

                $query4Result=mysqli_query($conn,$sql4);

                if($query4Result){
                    $row_lab=mysqli_fetch_assoc($query4Result);
                }
        
                //--------- query 1------//

                $sql1="SELECT * FROM seci.patients where patient_code ='" . $row_lab['patient_code']. "' ";

                $query1Result=mysqli_query($conn,$sql1);

                if($query1Result){
                    $row_patient=mysqli_fetch_assoc($query1Result);
                }else {
                    echo "patient ont found  ";
                }
        

               //---------  Category='1'  uint and contral------//  
        
                $sql2="SELECT * FROM seci.lab1_immunology_norms where Category='5'";

                $query2Result=mysqli_query($conn,$sql2);

                if($query2Result){
                    $row_uint=mysqli_fetch_array($query2Result);
                }else {
                    echo "no test before ";
                }

                
                //--------- Category='4' titles------//  
        
                $sql3="SELECT * FROM seci.lab1_immunology_norms where Category='4'";

                $query3Result = mysqli_query($conn,$sql3);

                if($query3Result){
                    $titles=mysqli_fetch_array($query3Result);
                }else {
                    echo "category ont found";
                }
        
                $sql5="SELECT * FROM seci.lab1_immunology_norms where Category='1'";

                $query5Result = mysqli_query($conn,$sql5);

                if($query5Result){
                    $row_norm=mysqli_fetch_array($query5Result);
                }else {
                    echo "category ont found";
                }
        
                
                
                
                
                //--------- Category='2' ------//  
        
                $_SESSION['unit2'] = $row_lab['unit2'];
                $_SESSION['r_header'] = $row_lab['Header'];
                    
                
                
                
                    
                
print "
    <form class='immo_form' method='post' action ='d-r-immo.php'>



    <!----------------------- -:(patient date):- ------------------------->

         <!----------------------- row 1 ------------------------->
        <div class='row b-space'>

            <div class='col-sm-1'>
                <button type='submit' class='btn btn-primary btn-lg print' name='insert' id='insert' data-toggle='tooltip' title='تسجيل'  >
                        <span class='glyphicon glyphicon-save' id='s3'></span> 
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
                <input type='text' name='lab_num' id='lab_num' autocomplete='off'  class='form-control' />
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
                <input type='text' name='report_d' id='report_d' autocomplete='off'  class='form-control' value='" . $row_lab['Report_date']. "' />
            </div>

            <div class='col-sm-2'>
              <label > تاريخ التقرير </label>
            </div>


            <div class='col-sm-1'></div>



            <div class='col-sm-2'>
                <input type='text' id='specimen_d' class='form-control' name='specimen_d' autocomplete='off' value='".$row_lab['Specimen_date']."'/>
            </div>


            <div class='col-sm-2'>
                <label > تاريخ اخذ العينة  </label> 
            </div>
            <div class='col-sm-1'></div>

        </div>

         <!--------- end ------------->

        <div class='row '>
                <div class='col-sm-12 general_lab_title'>
                    <h2 name ='r_header'>$row_lab[Header]</h2>
                </div>
        </div>
        <div class='row  b-space'>
        
            <div class='txt-dir col-sm-8'>
                <div class='row '>
                    <div class='col-sm-3 txt-dir'>
                        <label>Type of Specimen</label>
                    </div>
                    <div class='col-sm-4 txt-dir' >
                        <input type='text' name='specimen' id='specimen' class='form-control txt-dir sel' value='".$row_lab['Specimen']."'/>
                     		
                    </div>
                    <div class='col-sm-5'></div>
                </div>
        
            </div>
    <div class='txt-dir col-sm-4'></div>
    
</div>
        

        <!--------- table ------------->

        <div class='row'>

            <table border='3' rules='all' class='immo_table txt-dir'>

            <thead>
                 <div>
                    <th align='center' class=' col-sm-4'></th>
                    <th align='center' class=' col-sm-4' style='text-align:center'><label>Result</label></th>
                    <th align='center' class=' col-sm-4' style='text-align:center'><label>Normal range</label></th> 
                 </div>
            </thead>

            <tbody> ";

    
    $c = 1 ;
    while ($c<=3){

     
         print "<tr class='txt-dir'>
                     <div>
                        <th class='txt-dir'><label class='txt-dir'> $titles[$c]</label></th>

                        <td  class='txt-dir row'>
                        <div>

                            <input type='text' name='row".$c."' id='row".$c."' class='txt-dir inp-size-t col-sm-6 form-control' autocomplete='off' value='".$row_lab['row'.$c]."' /> 
                            <label class='txt-dir col-sm-6 tr-row'>$row_uint[$c]</label>
                        </div>
                        </td>
                            <td align='center' ><label class='txt-dir'>".$row_norm[$c]."  ".$row_uint[$c]."</label></td>
                    </div>
                </tr>";
      
    $c++;
}

        print "</tbody>

          </table>

        </div>
    
        <div class='row'>
            <textarea rows='2' cols='100' class='t-area txt-dir' align='center'  name='nb' id='nb' value='".$row_lab['NB']."'></textarea>
        </div>
  </div>
</form>";
                    
		      

    
    //---------------- Insert button ----------------//
    

if(isset($_POST['insert'])){
        
    if(isset($_POST['patient_code']))
    {
        $_SESSION['patient_code']=$_POST['patient_code'];
    }
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
    
    if(isset($_POST['specimen_d']))
    {
        $_SESSION['specimen_d'] = $_POST['specimen_d']; 
    }
    
    if(isset($_POST['report_d']))
    {
        $_SESSION['report_d'] = $_POST['report_d']; 
    }
    
    if(isset($_POST['r_header']))
    {
        $_SESSION['r_header'] = $_POST['r_header'];
    }
    
     if(isset($_POST['row1']))
    {
        $_SESSION['row1'] = $_POST['row1']; 
    }
     if(isset($_POST['row3']))
    {
        $_SESSION['row3'] = $_POST['row3']; 
    }
    
    if(isset($_POST['row5']))
    {
        $_SESSION['row5'] = $_POST['row5']; 
    }
    
    if(isset($_POST['row7']))
    {
        $_SESSION['row7'] = $_POST['row7'];
    }
    
    
        if(isset($_POST['nb']))
    {
        $_SESSION['nb'] = $_POST['nb']; 
    }
    
    
         $sql1 = "INSERT INTO `seci`.`lab1_immorombin` (`patient_code`, `Header`, `Lab_number`, `Specimen_date`, `Report_date`, `row1`, `unit1`, `unit2`, `row3`, `unit3`, `unit4`, `row7`, `unit8`,`NB`) VALUES ('". $_SESSION['patient_code']."', '".$_SESSION['r_header']."', '".$_SESSION['lab_num']."', '".$_SESSION['specimen_d']."', '".$_SESSION['report_d']."', '".$_SESSION['row1']."', 'S', '".$_SESSION['unit2']."', '".$_SESSION['row3']."', '%', '100 %', '".$_SESSION['row7']."', '1.0', '".$_SESSION['nb']."')";
            
        

        
    
    


            if (mysqli_query($conn, $sql1))
            {

           /* echo "<div class='insert_dialoge' id='dialog-message' title='اضافة تقرير'>
                    <p>
                        <span class='ui-icon ui-icon-circle-check' style='float:right; margin:0 7px 50px 0; width:10px height:10px'></span>
                        تمت العملية بنجاح 
                    </p>
                  </div>";*/

            } else {
                
                echo ("error : ". mysqli_error($conn)) ;
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
    <script src="js/edit-js/but-action.js"></script>
    
    
    
    </body>
    
</html>



