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
   
 	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css?v=<?php echo microtime(); ?>">
    <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css?v=<?php echo microtime(); ?>">
	<link rel="stylesheet" href="css/bootstrap.css?v=<?php echo microtime(); ?>"/>  
    <link rel="stylesheet" href="css/style-lab.css?v=<?php echo microtime(); ?>"/>
    <link rel="stylesheet" href="css/edit-f-styles/cs-edit-style.css?v=<?php echo microtime(); ?>"/>
    <link rel="stylesheet" href="css/edit-f-styles/d-report-style.css?v=<?php echo microtime(); ?>"/>
    
    

    
  
    <title>Culture and Sensitivity Reports</title>  
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
                        <h1 class="col-sm-11 ">تعديل و تسجيل Culture and Sensitivity </h1>
                    
                </div>
                
            </form>
            
            <form id="form2" method="post" action="d-r-cs.php" >
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
                
                $sql="SELECT * FROM seci.lab1_cs where patient_code ='" . $_POST['patient_code']. "' ";

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
                         <a  class='btn btn-primary' role='button' href='cs-form.php?serial=$row[Serial]'><span class='glyphicon glyphicon-open-file' ></span></a>
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
                

                $sql4="SELECT * FROM seci.lab1_cs  where patient_code ='" . $_POST['patient_code']. "' ";

                $query4Result=mysqli_query($conn,$sql4);

                if($query4Result){
                    $row_lab=mysqli_fetch_assoc($query4Result);
                }
        
                
                //--------- Category='2' ------//  
        
                $_SESSION['r_header'] = $row_lab['Header'];
                    
                
                
                
                    
                
print "
    <form class='cs_form' method='post' action ='d-r-cs.php'>

        <div class='row b-space'>
            <h1 align='center' class='col-sm-12'> تسجيل Culture and Sensitivity </h1>
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
        <div class='row  b-space'>
        
            <div class='txt-dir col-sm-8'>
                <div class='row '>
                    <div class='col-sm-3 txt-dir'>
                        <label>Type of Specimen</label>
                    </div>
                    <div class='col-sm-4 txt-dir' >
                        <input type='text' name='specimen' id='specimen' class='txt-dir form-control' autocomplete='off' />
                    </div>
                    <div class='col-sm-5'></div>
                </div>
        
            </div>
    <div class='txt-dir col-sm-4'></div>
    
</div>

<div class='row  b-space'>
        
            <div class='txt-dir col-sm-8'>
                <div class='row '>
                    <div class='col-sm-3 txt-dir'>
                        <label>Identified Organisms</label>
                    </div>
                    <div class='col-sm-4 txt-dir' >
                        <input type='text' name='organism' id='organism' class='txt-dir form-control' autocomplete='off' />
                    </div>
                    <div class='col-sm-5'></div>
                </div>
        
            </div>
    <div class='txt-dir col-sm-4'></div>
    
</div>
        

        <!--------- table ------------->
<div class='table_reaslt'>  
    <table border='3' rules='all' class='cs_table txt-dir'>
            
      <thead>      
          <tr class=' row tr-row'>
            <th class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 '>
                        <label class='txt-dir'>Antibiotic</label>
                    </div>
                    <div class='col-sm-6 '>
                        <label class=' txt-dir'>Sensitivity</label>
                    </div>
                </div>
            </th>
            <th class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 '>
                        <label class='txt-dir'>Antibiotic</label>
                    </div>
                    <div class='col-sm-6 '>
                        <label class=' txt-dir'>Sensitivity</label>
                    </div>
                </div>
            </th>

          </tr>
      
      </thead>
              
      <tbody>        
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>flumequine </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row1a' id='row1a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Cephradine </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row1b' id='row1b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>
      
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Enrofloxacin </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row2a' id='row2a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Cefuroxim </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row2b' id='row2b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>  
              
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Colistin sulphate </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row3a' id='row3a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Tetracycline </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row3b' id='row3b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>        
            
    <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Imipenem </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row4a' id='row4a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Neomycin </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row4b' id='row4b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>         
              
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Norfloxacin </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row5a' id='row5a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Cefoprazone </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row5b' id='row5b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr> 
      
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Doxycycline </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row6a' id='row6a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Ampicillin </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row6b' id='row6b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>
      
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Vancomycin </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row7a' id='row7a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Streptomycin </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row7b' id='row7b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Nitrofurantion </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row8a' id='row8a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Amikacin </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row8b' id='row8b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Chloramphenicol </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row9a' id='row9a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Lincomycin </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row9b' id='row9b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Pipracillin </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row10a' id='row10a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Gentamycin </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row10b' id='row10b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>
      
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Netilmicin </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row11a' id='row11a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Rifampicin </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row11b' id='row11b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>
      
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Erythromicin </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row12a' id='row12a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Kanamyicin </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row12b' id='row12b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>
      
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Spectinomycin </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row13a' id='row13a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Penicillin G </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row13b' id='row13b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>
      
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Sulperazone </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row14a' id='row14a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Claforan </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row14b' id='row14b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>
      
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Cefuroxime </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row15a' id='row15a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Maxipem </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row15b' id='row15b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>
      
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Unasyn </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row16a' id='row16a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Rocefin </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row16b' id='row16b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>
      
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Augmentim </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row17a' id='row17a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Tarivid </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row17b' id='row17b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>
      
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Cluforom </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row18a' id='row18a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Tazocin </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row18b' id='row18b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>
      
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Fortum </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row19a' id='row19a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Ceftazidine </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row19b' id='row19b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>
      
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Levofloxacin </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row20a' id='row20a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Cephadlexin </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row20b' id='row20b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>
      
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Tequin </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row21a' id='row21a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Meronem </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row21b' id='row21b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>
      
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Cefotaxime </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row22a' id='row22a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Azetreonam </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row22b' id='row22b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>
      
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Cefadroxil </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row23a' id='row23a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    
                </div>
            </td>

      </tr>
      
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'> </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                       <label class='txt-dir tit_label'> </label>
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'> </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                       <label class='txt-dir tit_label'> </label>
                    </div>
                </div>
            </td>

      </tr>
      
      
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Amikin </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row31a' id='row31a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Flumox </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row31b' id='row31b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>
      
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Targocid </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row32a' id='row32a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Claforan </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row32b' id='row32b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>
      
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Tazocin </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row33a' id='row33a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Maxipim </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row33b' id='row33b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>
      
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Tavanic </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row34a' id='row34a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Meronim </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row34b' id='row34b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>
      
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Sulperazone </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row35a' id='row35a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Fortum </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row35b' id='row35b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>
      
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Cefobid </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row36a' id='row36a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Pipratz </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row36b' id='row36b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>
      
      <tr class=' row tr-row'>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Vancomycin </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row37a' id='row37a' class='txt-dir  col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>
            <td class='col-sm-6' >
                <div class='row txt-dir'>
                    <div class='col-sm-6 txt-dir'>
                        <label class='txt-dir tit_label'>Unasyn </label>
                    </div>
                    <div class='col-sm-6 txt-dir'>
                        <input type='text' name='row37b' id='row37b' class='txt-dir col-sm-6 form-control' autocomplete='off' /> 
                    </div>
                </div>
            </td>

      </tr>
      </tbody>
    </table>
</div>    
        
    
        <div class='row'>
            <textarea rows='2' cols='100' class='t-area txt-dir' align='center'  name='nb' id='nb'></textarea>
        </div>
  </div>
</form>";
                    
		      
}
    
        
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

        if(isset($_POST['specimen_d']))
        {
            $_SESSION['specimen_d'] = $_POST['specimen_d']; 
        }

        if(isset($_POST['report_d']))
        {
            $_SESSION['report_d'] = $_POST['report_d']; 
        }
        if(isset($_POST['specimen']))
        {
            $_SESSION['specimen'] = $_POST['specimen']; 
        }
        if(isset($_POST['organism']))
        {
            $_SESSION['organism'] = $_POST['organism']; 
        }

        if(isset($_POST['r_header']))
        {
            $_SESSION['r_header'] = $_POST['r_header'];
        }

         if(isset($_POST['row1a']))
        {
            $_SESSION['row1a'] = $_POST['row1a']; 
        }
         if(isset($_POST['row1b']))
        {
            $_SESSION['row1b'] = $_POST['row1b']; 
        }

         if(isset($_POST['row2a']))
        {
            $_SESSION['row2a'] = $_POST['row2a']; 
        }
         if(isset($_POST['row2b']))
        {
            $_SESSION['row2b'] = $_POST['row2b']; 
        }

        if(isset($_POST['row3a']))
        {
            $_SESSION['row3a'] = $_POST['row3a']; 
        }
         if(isset($_POST['row3b']))
        {
            $_SESSION['row3b'] = $_POST['row3b']; 
        }

        if(isset($_POST['row4a']))
        {
            $_SESSION['row4a'] = $_POST['row4a']; 
        }
         if(isset($_POST['row4b']))
        {
            $_SESSION['row4b'] = $_POST['row4b']; 
        }
        if(isset($_POST['row5a']))
        {
            $_SESSION['row5a'] = $_POST['row5a']; 
        }
        if(isset($_POST['row5b']))
        {
            $_SESSION['row5b'] = $_POST['row5b']; 
        }
        if(isset($_POST['row6a']))
        {
            $_SESSION['row6a'] = $_POST['row6a']; 
        }
         if(isset($_POST['row6b']))
        {
            $_SESSION['row6b'] = $_POST['row6b']; 
        }
        if(isset($_POST['row7a']))
        {
            $_SESSION['row7a'] = $_POST['row7a']; 
        }
         if(isset($_POST['row7b']))
        {
            $_SESSION['row7b'] = $_POST['row7b']; 
        }
        if(isset($_POST['row8a']))
        {
            $_SESSION['row8a'] = $_POST['row8a']; 
        }
         if(isset($_POST['row8b']))
        {
            $_SESSION['row8b'] = $_POST['row8b']; 
        }
        if(isset($_POST['row9a']))
        {
            $_SESSION['row9a'] = $_POST['row9a']; 
        }
         if(isset($_POST['row9b']))
        {
            $_SESSION['row9b'] = $_POST['row9b']; 
        }
        if(isset($_POST['row10a']))
        {
            $_SESSION['row10a'] = $_POST['row10a']; 
        }
         if(isset($_POST['row10b']))
        {
            $_SESSION['row10b'] = $_POST['row10b']; 
        }
        if(isset($_POST['row11a']))
        {
            $_SESSION['row11a'] = $_POST['row11a']; 
        }
         if(isset($_POST['row11b']))
        {
            $_SESSION['row11b'] = $_POST['row11b']; 
        }
        if(isset($_POST['row12a']))
        {
            $_SESSION['row12a'] = $_POST['row12a']; 
        }
         if(isset($_POST['row12b']))
        {
            $_SESSION['row12b'] = $_POST['row12b']; 
        }
        if(isset($_POST['row13a']))
        {
            $_SESSION['row13a'] = $_POST['row13a']; 
        }
         if(isset($_POST['row13b']))
        {
            $_SESSION['row13b'] = $_POST['row13b']; 
        }

        if(isset($_POST['row14a']))
        {
            $_SESSION['row14a'] = $_POST['row14a']; 
        }
         if(isset($_POST['row14b']))
        {
            $_SESSION['row14b'] = $_POST['row14b']; 
        }
        if(isset($_POST['row15a']))
        {
            $_SESSION['row15a'] = $_POST['row15a']; 
        }
         if(isset($_POST['row15b']))
        {
            $_SESSION['row15b'] = $_POST['row15b']; 
        }
        if(isset($_POST['row16a']))
        {
            $_SESSION['row16a'] = $_POST['row16a']; 
        }
         if(isset($_POST['row16b']))
        {
            $_SESSION['row16b'] = $_POST['row16b']; 
        }
        if(isset($_POST['row17a']))
        {
            $_SESSION['row17a'] = $_POST['row17a']; 
        }
         if(isset($_POST['row17b']))
        {
            $_SESSION['row17b'] = $_POST['row17b']; 
        }
        if(isset($_POST['row18a']))
        {
            $_SESSION['row18a'] = $_POST['row18a']; 
        }
         if(isset($_POST['row18b']))
        {
            $_SESSION['row18b'] = $_POST['row18b']; 
        }
        if(isset($_POST['row19a']))
        {
            $_SESSION['row19a'] = $_POST['row19a']; 
        }
         if(isset($_POST['row19b']))
        {
            $_SESSION['row19b'] = $_POST['row19b']; 
        }
        if(isset($_POST['row20a']))
        {
            $_SESSION['row20a'] = $_POST['row20a']; 
        }
         if(isset($_POST['row20b']))
        {
            $_SESSION['row20b'] = $_POST['row20b']; 
        }
        if(isset($_POST['row21a']))
        {
            $_SESSION['row21a'] = $_POST['row21a']; 
        }
         if(isset($_POST['row21b']))
        {
            $_SESSION['row21b'] = $_POST['row21b']; 
        }
        if(isset($_POST['row22a']))
        {
            $_SESSION['row22a'] = $_POST['row22a']; 
        }
         if(isset($_POST['row22b']))
        {
            $_SESSION['row22b'] = $_POST['row22b']; 
        }
        if(isset($_POST['row23a']))
        {
            $_SESSION['row23a'] = $_POST['row23a']; 
        }

        if(isset($_POST['row31a']))
        {
            $_SESSION['row31a'] = $_POST['row31a']; 
        }
         if(isset($_POST['row31b']))
        {
            $_SESSION['row31b'] = $_POST['row31b']; 
        }
        if(isset($_POST['row32a']))
        {
            $_SESSION['row32a'] = $_POST['row32a']; 
        }
         if(isset($_POST['row32b']))
        {
            $_SESSION['row32b'] = $_POST['row32b']; 
        }
        if(isset($_POST['row33a']))
        {
            $_SESSION['row33a'] = $_POST['row33a']; 
        }
         if(isset($_POST['row33b']))
        {
            $_SESSION['row33b'] = $_POST['row33b']; 
        }

        if(isset($_POST['row34a']))
        {
            $_SESSION['row34a'] = $_POST['row34a']; 
        }
         if(isset($_POST['row34b']))
        {
            $_SESSION['row34b'] = $_POST['row34b']; 
        }
        if(isset($_POST['row35a']))
        {
            $_SESSION['row35a'] = $_POST['row35a']; 
        }
         if(isset($_POST['row35b']))
        {
            $_SESSION['row35b'] = $_POST['row35b']; 
        }
        if(isset($_POST['row36a']))
        {
            $_SESSION['row36a'] = $_POST['row36a']; 
        }
         if(isset($_POST['row36b']))
        {
            $_SESSION['row36b'] = $_POST['row36b']; 
        }
        if(isset($_POST['row37a']))
        {
            $_SESSION['row37a'] = $_POST['row37a']; 
        }
         if(isset($_POST['row37b']))
        {
            $_SESSION['row37b'] = $_POST['row37b']; 
        }


            if(isset($_POST['nb']))
        {
            $_SESSION['nb'] = $_POST['nb']; 
        }


             $sql1 = "INSERT INTO `seci`.`lab1_cs` (`patient_code`, `Header`, `Lab_number`, `Specimen_date`, `Report_date`, `Specimen`, `Organism`, `row1a`, `row1b`, `row2a`, `row2b`, `row3a`, `row3b`, `row4a`, `row4b`, `row5a`, `row5b`, `row6a`, `row6b`, `row7a`, `row7b`, `row8a`, `row8b`, `row9a`, `row9b`, `row10a`, `row10b`, `row11a`, `row11b`, `row12a`, `row12b`, `row13a`, `row13b`, `row14a`, `row14b`, `row15a`, `row15b`, `row16a`, `row16b`, `row17a`, `row17b`, `row18a`, `row18b`, `row19a`, `row19b`, `row20a`, `row20b`, `row21a`, `row21b`, `row22a`, `row22b`, `row23a`, `row31a`, `row31b`, `row32a`, `row32b`, `row33a`, `row33b`, `row34a`, `row34b`, `row35a`, `row35b`, `row36a`, `row36b`, `row37a`, `row37b`,`NB`) VALUES ('". $_SESSION['patient_code']."', '".$_SESSION['r_header']."', '".$_SESSION['lab_num']."', '".$_SESSION['specimen_d']."', '".$_SESSION['report_d']."', '".$_SESSION['specimen']."', '".$_SESSION['organism']."', '".$_SESSION['row1a']."', '".$_SESSION['row1b']."','".$_SESSION['row2a']."', '".$_SESSION['row2b']."', '".$_SESSION['row3a']."', '".$_SESSION['row3b']."','".$_SESSION['row4a']."', '".$_SESSION['row4b']."','".$_SESSION['row5a']."', '".$_SESSION['row5b']."','".$_SESSION['row6a']."', '".$_SESSION['row6b']."','".$_SESSION['row7a']."', '".$_SESSION['row7b']."','".$_SESSION['row8a']."', '".$_SESSION['row8b']."','".$_SESSION['row9a']."', '".$_SESSION['row9b']."','".$_SESSION['row10a']."', '".$_SESSION['row10b']."','".$_SESSION['row11a']."', '".$_SESSION['row11b']."','".$_SESSION['row12a']."', '".$_SESSION['row12b']."','".$_SESSION['row13a']."', '".$_SESSION['row13b']."','".$_SESSION['row14a']."', '".$_SESSION['row14b']."','".$_SESSION['row15a']."', '".$_SESSION['row15b']."','".$_SESSION['row16a']."', '".$_SESSION['row16b']."','".$_SESSION['row17a']."', '".$_SESSION['row17b']."','".$_SESSION['row18a']."', '".$_SESSION['row18b']."','".$_SESSION['row19a']."', '".$_SESSION['row19b']."','".$_SESSION['row20a']."', '".$_SESSION['row20b']."','".$_SESSION['row21a']."', '".$_SESSION['row21b']."','".$_SESSION['row22a']."','".$_SESSION['row22b']."','".$_SESSION['row23a']."',
             '".$_SESSION['row31a']."', '".$_SESSION['row31b']."','".$_SESSION['row32a']."', '".$_SESSION['row32b']."','".$_SESSION['row33a']."', '".$_SESSION['row33b']."','".$_SESSION['row34a']."', '".$_SESSION['row34b']."','".$_SESSION['row35a']."', '".$_SESSION['row35b']."','".$_SESSION['row36a']."', '".$_SESSION['row36b']."','".$_SESSION['row37a']."', '".$_SESSION['row37b']."', '".$_SESSION['nb']."')";








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
        
        
    
    <script src="js/jquery-2.1.4.min.js?v=<?php echo microtime(); ?>"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js?v=<?php echo microtime(); ?>"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js?v=<?php echo microtime(); ?>"></script>
    <script src="js/bootstrap.min.js?v=<?php echo microtime(); ?>"></script>
    <script src="js/edit-js/cs-edit-js.js?v=<?php echo microtime(); ?>"></script>
    <script src="js/edit-js/but-action.js?v=<?php echo microtime(); ?>"></script>
    
    </body>
    
</html>


    