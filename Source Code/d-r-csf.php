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
   
 	<link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css"/>  
    <link rel="stylesheet" href="css/style-lab.css"/>
    <link rel="stylesheet" href="css/edit-f-styles/d-report-style.css"/>
    <link rel="stylesheet" href="css/enter-f-style/csf-form-style.css"/>
    
    

    
  
    <title>CSF Reports </title>  
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
                        <h1 class="col-sm-11 ">تسجيل و تعديل CSF</h1>
                    
                </div>
                
            </form>
            
            <form id="form2" method="post" action="d-r-csf.php" >
                <div class="row">

                    <div class=" col-sm-3">
                        
                    </div>
                    
                    <div class="col-sm-1">

                        <button type="submit" class="btn btn-primary btn-lg print" name="edit" id="view-but" data-toggle="tooltip" title="تعديل"  >       
                        <span class="glyphicon glyphicon-edit" id="s1"></span> 
                        </button>
                    </div>

                    <div class="col-sm-1">

                        <button type="submit" class="btn btn-primary btn-lg print " name="view" id="view-but" data-toggle="tooltip" title="تسجيل"  >       
                        <span class="glyphicon glyphicon-save" id="s1"></span> 
                        </button>
                    </div>


                   <div class="search_box_enter col-sm-2">
                       <input type="text" id="patient_code" class="form-control  " name="patient_code" 
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
            
            include 'config.php';
            
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
                
                $sql="SELECT * FROM seci.lab1_csf where patient_code ='" . $_POST['patient_code']. "' ";

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
                         <a  class='btn btn-primary' role='button' href='csf-form.php?serial=$row[Serial]'><span class='glyphicon glyphicon-open-file' ></span></a>
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
        
                $sql1="SELECT * FROM seci.lab1_csf where patient_code ='" . $_POST['patient_code']. "' ";

                $query1Result=mysqli_query($conn,$sql1);

                if($query1Result){
                    $row_lab=mysqli_fetch_assoc($query1Result);
                }

                //--------- query 2------//

                $sql2="SELECT * FROM seci.patients where patient_code ='" . $_POST['patient_code']. "' ";

               
                
                 
                $query2Result=mysqli_query($conn,$sql2);

                if($query2Result){
                    $row_patient=mysqli_fetch_assoc($query2Result);
                }
                //-----------------------//
                 $_SESSION['patient_code']= $row_lab['patient_code'];

                $_SESSION['r_header'] = $row_lab['Header'];
                    
               
                
            print "
                <form class='csf_form' method='post' >

                    
                    <div class = 'row b-space'>
                        <h1 align='center' class='col-sm-12 '>تسجيل  CSF</h1>
                    </div>
                 
                <!----------------------- -:(patient date):- ------------------------->

                     <!----------------------- row 1 ------------------------->
                    <div class='row b-space'>

                        <div class='col-sm-1' id='b1'>
                            <button type='submit' class='btn btn-primary btn-lg print' name='insert' id='insert' data-toggle='tooltip' title='تسجيل'  >
                                    <span class='glyphicon glyphicon-save' id='s3'></span> 
                                </button>
                        </div>
                        
                        <div class='col-sm-1'id='b2'>
                             <button type='button' class='btn btn-primary btn-lg print' name='print' id='print1' data-toggle='tooltip' title='طباعة'>
                            <span class='glyphicon glyphicon-print' id='s2 '></span> 
                        </button>
                        </div>

                        <div class='col-sm-3'>
                            <label  name='p_name' id='name1'>$row_patient[patient_name] </label>
                        </div>

                        <div class='col-sm-1' id='na'>
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
                            <input type='text' id='sample_d' class='form-control' name='sample_d' autocomplete='off' value='".date("Y-m-d")."'/>
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

                    <div class='row txt-dir'>

                        <table border='3' rules='all' class='csf_table txt-dir'>

                        
                            <th colspan='2' ><p class='txt-dir'>Physical Exaimination :</p></th>
                        
                            <tr class='txt-dir tr-row'>
                                
                                <td class='txt-dir '>
                                    <div class='row'>
                                        <label class='txt-dir  col-sm-4' >&nbsp;&nbsp;&nbsp;Color :</label>
                                        <input type='text' name='row1' id='row1' class='txt-dir col-sm-8 inp-size-t form-control' autocomplete='off' />
                                    </div>
                                </td>
                                
                                <td align='center'  class='txt-dir '>(Colourless)</td>
                                
                            </tr>
                            <tr class='txt-dir tr-row'>
                                
                                <td class='txt-dir'> 
                                    <div class='row'>
                                        <label class='txt-dir col-sm-4'>&nbsp;&nbsp;&nbsp;Aspect :</label>
                                        <input type='text' name='row2' id='row2' class='txt-dir col-sm-8 inp-size-t form-control' autocomplete='off' />
                                    </div>
                                </td>
                                
                                <td align='center' class='txt-dir'>(Clear)</td>
                            </tr>
                            <tr class='tr-row'>
                                
                                <td class='txt-dir'> 
                                <div class='row'>
                                    <label class='txt-dir col-sm-4' >&nbsp;&nbsp;&nbsp;Sediment :</label>
                                    <input type='text' name='row3' id='row3' class='txt-dir col-sm-8 inp-size-t form-control' autocomplete='off' />
                                </div>
                                </td>
                                <td align='center' class='txt-dir '>(No Sedimen)</td>
                            </tr>
                            
                            
                            
                            <th colspan='2'><p class='txt-dir'>Chemical Exaimination :</p></th>
                        
                            <tr class='txt-dir tr-row'>
                              
                                <td class='txt-dir '>
                                    <div class='row'>
                                        <label class='txt-dir col-sm-4' >&nbsp;&nbsp;&nbsp;Glouses :</label>
                                        <input type='text' name='row4' id='row4' class='txt-dir col-sm-8 inp-size-t form-control' autocomplete='off' />
                                    </div>
                                </td>
                                
                                <td align='center' class='txt-dir td-1col'>(45-100 mg/dl)</td>
                                
                            </tr>
                            <tr class='txt-dir tr-row'>
                                
                                <td class='txt-dir col-sm-8'> 
                                    <div class='row'>
                                        <label class='txt-dir col-sm-4' >Protein :</label>
                                        <input type='text' name='row5' id='row5' class='txt-dir col-sm-8 inp-size-t form-control' autocomplete='off' />
                                    </div>
                                </td>
                                <td align='center' class='txt-dir'>(15-45 mg/dl)</td>
                            </tr>
                            
                            <th colspan='2' ><p class='txt-dir'>Microscopic Exaimination : </p></th>
                            
                            
                                <tr class='txt-dir tr-row'>
                                        <td class='txt-dir '> 
                                            <div class='row'>
                                                <label class='col-sm-4 txt-dir'>&nbsp;&nbsp;&nbsp;Number Of cells :</label>
                                                <input type='text' name='row6' id='row6' class='col-sm-8 txt-dir inp-size-t form-control' autocomplete='off' />
                                            </div>
                                        </td>
                                    <td align='center' class='txt-dir'>(0-4 /cubic mm)</td>
                                </tr>
                            
                            
                            <tr class='tr-row' colspan='2'>
                                <td class='txt-dir 'colspan='2'>
                                     <div class='row'>
                                        <label class='txt-dir col-sm-2'>&nbsp;&nbsp;&nbsp;Type Of cells :</label>

                                        <input type='text' name='row7' id='row7' class='col-sm-10 txt-dir inp-size-t form-control' autocomplete='off' />
                                     </div>
                                
                                </td>
                            </tr>
                        

                      </table>

                    </div>

                         <div class='row'>
                                  <textarea rows='2'cols='100' class='t-area' align='center' ></textarea>
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
                if(isset($_POST['row3']))
                {
                    $_SESSION['row3'] = $_POST['row3']; 
                }

                if(isset($_POST['row4']))
                {
                    $_SESSION['row4'] = $_POST['row4'];
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
                if(isset($_POST['nb']))
                {
                    $_SESSION['nb'] = $_POST['nb'];
                }
        
         $sql1 = "INSERT INTO `seci`.`lab1_csf` (`patient_code`, `Header`, `Lab_number`, `Specimen_date`, `Report_date`, `row1`, `row2`, `row3`, `row4`, `row5`, `row6`, `row7`, `NB`) VALUES ('". $_SESSION['patient_code']."', '".$_SESSION['r_header']."', '".$_SESSION['lab_num']."', '".$_SESSION['sample_d']."', '".$_SESSION['report_d']."', '".$_SESSION['row1']."', '".$_SESSION['row2']."', '".$_SESSION['row3']."', '".$_SESSION['row4']."', '".$_SESSION['row5']."', '".$_SESSION['row6']."', '".$_SESSION['row7']."', '".$_SESSION['nb']."');";
        

            if (mysqli_query($conn, $sql1))
            {

            /*echo "<div class='insert_dialoge' id='dialog-message' title='اضافة تقرير'>
                    <p>
                        <span class='ui-icon ui-icon-circle-check' style='float:right; margin:0 7px 50px 0; width:10px height:10px'></span>
                        تمت العملية بنجاح 
                    </p>
                  </div>";*/

            } else {
                echo ("error : ". mysqli_error($conn)) ;
   
                /*
                echo "<div class='insert_dialoge' id='dialog-message' title='خطأ'>
                    <p>
                        <span class='glyphicon glyphicon-warning-sign' style='float:right; margin:0 7px 50px 0; width:10px height:10px'></span>
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; لم تمت العملية بنجاح 
                    </p>
                  </div>";
              */
            }
        
    }
                
                
            
				
		}else {
    
    	header('Location: login1.php');
    	exit();

			}

			
    ?>	
		
               
            
        </div>
        
        
    
    <script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/edit-js/csf-edit-js.js"></script>
    <script src="js/edit-js/but-action.js"></script>
    
    </body>
    
</html>


    