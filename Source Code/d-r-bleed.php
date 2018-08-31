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
    <link rel="stylesheet" href="css/edit-f-styles/bleed-edit-style.css"/>
    <link rel="stylesheet" href="css/edit-f-styles/d-report-style.css"/>
    
    

    
  
    <title>bleeding Profile Reports </title>  
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
                        <h1 class="col-sm-11 ">تسجيل و تعديل bleeding Profile</h1>
                    
                </div>
                
            </form>
            
            <form id="form2" method="post" action="d-r-bleed.php" >
                <div class="row">

                    <div class=" col-sm-3">
                        
                    </div>
                    <div class="col-sm-1">

                        <button type="submit" class="btn btn-primary btn-lg print" name="edit" id="edit-but" data-toggle="tooltip" title="تعديل"  >       
                        <span class="glyphicon glyphicon-edit" id="s1"></span> 
                        </button>
                    </div>

                    <div class="col-sm-1">

                        <button type="submit" class="btn btn-primary btn-lg print" name="view" id="view-but" data-toggle="tooltip" title="تسجيل"  >       
                        <span class="glyphicon glyphicon-save" id="s1"></span> 
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
				
    if (isset($_POST['edit'])) { 
                
                $_SESSION['p-code'] = $_POST['patient_code'];
                
                
        print " <form id='form3' method='get' >        
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
                
                $sql="SELECT * FROM seci.lab1_bleeding_profile where patient_code ='" . $_POST['patient_code']. "' ";

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
                         <a  class='btn btn-primary' role='button' href='bleed-form.php?serial=$row[Serial]'><span class='glyphicon glyphicon-open-file' ></span></a>
                        </td>
                        </tr>";
                        

                    }

                }
        print " </tbody>

            </table>
                   
            </form>";
            
			
    }
    

    
    if (isset($_POST['view'])) { 
        
                $_SESSION['patient_code'] = $_POST['patient_code'];
                
                //--------- query 1------//

                $sql1="SELECT * FROM seci.patients where patient_code ='" . $_POST['patient_code']. "' ";

                $query1Result=mysqli_query($conn,$sql1);

                if($query1Result){
                    $row_patient=mysqli_fetch_assoc($query1Result);
                }else {
                    echo "patient ont found  ";
                }
                
                //-----------query 4------------//
                

                $sql4="SELECT * FROM seci.lab1_bleeding_profile where patient_code ='" . $_POST['patient_code']. "' ";

                $query4Result=mysqli_query($conn,$sql4);

                if($query4Result){
                    $row_lab=mysqli_fetch_assoc($query4Result);
                }
        
                //--------- Category='1'  normal------//  
        
                $sq54="SELECT * FROM seci.lab1_bleeding_profile_norms where Category='1'";

                $sq54Result=mysqli_query($conn,$sq54);

                if($sq54Result){
                    $row_normal=mysqli_fetch_array($sq54Result);
                }

               //---------  Category='1'  uint------//  
        
                $sql2="SELECT * FROM seci.lab1_bleeding_profile_norms where Category='5'";

                $query2Result=mysqli_query($conn,$sql2);

                if($query2Result){
                    $row_uint=mysqli_fetch_array($query2Result);
                }else {
                    echo "no test before ";
                }

                
                //--------- Category='4' titles------//  
        
                $sql3="SELECT * FROM seci.lab1_bleeding_profile_norms where Category='4'";

                $query3Result = mysqli_query($conn,$sql3);

                if($query3Result){
                    $titles=mysqli_fetch_array($query3Result);
                }else {
                    echo "category ont found";
                }
        
                
                
                
                
                //--------- Category='2' ------//  
        
                
                

                $_SESSION['n_row5']= $row_lab['n_row5'];
                $_SESSION['n_row6']= $row_lab['n_row6'];
                $_SESSION['n_row7']= $row_lab['n_row7'];
                $_SESSION['n_row8']= $row_lab['n_row8'];
        
                $_SESSION['r_header'] = $row_lab['Header'];
                    
                
                
                
                    
                
print "
    <form class='bleed_form' method='post' action ='d-r-bleed.php'>
        <div class ='row b-space'>
            <h1 align='center' class='col-sm-12'>تسجيل bleeding Profile</h1>
        </div>
      
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
                <input type='text' name='report_d' id='report_d' autocomplete='off'  class='form-control' value='".date("Y-m-d")."' />
            </div>

            <div class='col-sm-2'>
              <label > تاريخ التقرير </label>
            </div>


            <div class='col-sm-1'></div>



            <div class='col-sm-2'>
                <input type='text' id='specimen_d' class='form-control' name='specimen_d' autocomplete='off' value='".date("Y-m-d")."'/>
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

        <!--------- table ------------->

        <div class='row'>

            <table border='3' rules='all' class='bleed_table txt-dir'>

            <thead>
                 <div>
                    <th align='center' class=' col-sm-4'></th>
                    <th align='center' class=' col-sm-4' style='text-align:center'><label>Result</label></th>
                    <th align='center' class=' col-sm-4' style='text-align:center'><label>Normal range</label></th> 
                 </div>
            </thead>

            <tbody> ";

    $c = 5;
    $indx = 1 ;
    while ($c<=8){


     print "<tr class='txt-dir'>
                 <div>
                    <th class='txt-dir'><label> $titles[$indx]</label></th>

                    <td  class='txt-dir row'>
                    <div>
                    
                        <input type='text' name='row".$c."' id='row".$c."' class='txt-dir inp-size-t col-sm-6 form-control' autocomplete='off' /> 
                        <label class='txt-dir col-sm-6 tr-row'>$row_uint[$indx]</label>
                    </div>
                    </td>
                        <td align='center' class='txt-dir'>".$row_normal[$indx]." ".$row_uint[$indx]."</td>
                </div>
            </tr>";
        $c++;
        $indx++;
    }

        print "</tbody>

          </table>

        </div>
    
        <div class='row'>
            <textarea rows='2' cols='100' class='t-area' align='center'  name='nb' id='nb'></textarea>
        </div>
  </div>
</form>";
                    
		      
}
    
    
        
  if(isset($_POST['insert'])){
        
    
    if(isset($_POST['p_name']))
    {
        $_SESSION['p_name'] = $_POST['p_name'];
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
    
    if(isset($_POST['row5']))
    {
        $_SESSION['row5'] = $_POST['row5']; 
    }
    
    if(isset($_POST['row6']))
    {
        $_SESSION['row6'] = $_POST['row6'];
    }
    
    if(isset($_POST['row7']))
    {
        $_SESSION['row7'] = $_POST['row7'];
    }
    if(isset($_POST['row8']))
    {
        $_SESSION['row8'] = $_POST['row8']; 
    }
    
        if(isset($_POST['nb']))
    {
        $_SESSION['nb'] = $_POST['nb']; 
    }
    
    
         $sql1 = "INSERT INTO `seci`.`lab1_bleeding_profile` (`patient_code`, `Header`, `Lab_number`, `Specimen_date`, `Report_date`, `row5`, `unit5`, `n_row5`, `row6`, `unit6`, `n_row6`, `row7`, `unit7`, `n_row7`, `row8`, `unit8`, `n_row8`, `NB`) VALUES ('". $_SESSION['patient_code']."', '".$_SESSION['r_header']."', '".$_SESSION['lab_num']."', '".$_SESSION['specimen_d']."', '".$_SESSION['report_d']."', '".$_SESSION['row5']."', 'Sec', '28-40 Sec', '".$_SESSION['row6']."', 'Min', '2-5 Min', '".$_SESSION['row7']."', 'Min', '3-9 Min', '".$_SESSION['row8']."', 'mg/dL', '150-350 mg/dL', '".$_SESSION['nb']."')";
        
    
    


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
        
    <script src="js/edit-js/bleed-edit-js.js"></script>
    <script src="js/edit-js/but-action.js"></script>
    
    </body>
    
</html>


    