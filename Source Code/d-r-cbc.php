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
    <link rel="stylesheet" href="css/enter-f-style/cbc-form-style.css"/>
    <link rel="stylesheet" href="css/edit-f-styles/d-report-style.css"/>

    

    
  
    <title>CBC Reports</title>  
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
    <body>
        <div class="container">
            
            
            <form id="form1" method="post" action='lab.php' class="b-space">
                <div class="row general_lab_title">
                        <div class="col-sm-1">
                        <button class='btn btn-primary btn-lg print back_but' name='back' id='back_lab_ed' data-toggle='tooltip' title='رجوع'   >
                            <span class='glyphicon glyphicon-arrow-left sp_back' id='s3'></span> 
                        </button>
                    </div> 
                        <h1 class="col-sm-11 ">تسجيل و تعديل CBC</h1>
                    
                </div>
                
            </form>
            
            <form id="form2" method="post" action="d-r-cbc.php"  >
                <div class="row">

                    <div class=" col-sm-3">
                        
                    </div>

                    <div class="col-sm-1">

                        <button type="submit" class="btn btn-primary btn-lg print" name="edit" id="view-but" data-toggle="tooltip" title="تعديل"  >       
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
                
                $sql="SELECT * FROM seci.lab1_cbc where patient_code ='" . $_POST['patient_code']. "' ";

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
                         <a  class='btn btn-primary' role='button' href='cbc-form.php?serial=$row[Serial]'><span class='glyphicon glyphicon-open-file' ></span></a>
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
                

                $sql4="SELECT * FROM seci.lab1_cbc where patient_code ='" . $_POST['patient_code']. "' ";

                $query4Result=mysqli_query($conn,$sql4);

                if($query4Result){
                    $row_lab=mysqli_fetch_assoc($query4Result);
                }

               //--------- query 2------//  
        
                $sql2="SELECT * FROM seci.lab1_cbc_norms where Category='5'";

                $query2Result=mysqli_query($conn,$sql2);

                if($query2Result){
                    $row_uint=mysqli_fetch_array($query2Result);
                }else {
                    echo "no test before ";
                }

                
                //--------- Category='4' ------//  
        
                $sql3="SELECT * FROM seci.lab1_cbc_norms where Category='4'";

                $query3Result = mysqli_query($conn,$sql3);

                if($query3Result){
                    $titles=mysqli_fetch_array($query3Result);
                }else {
                    echo "category ont found";
                }
        
                
                //--------- Category='6'------//  
        
                $sq45="SELECT * FROM seci.lab1_cbc_norms where Category='6'";

                $sq45Result=mysqli_query($conn,$sq45);

                if($sq45Result){
                    $cat45=mysqli_fetch_array($sq45Result);
                }
                
                //--------- Category='7'------//  
        
                $sq44="SELECT * FROM seci.lab1_cbc_norms where Category='7'";

                $sq44Result=mysqli_query($conn,$sq44);

                if($sq44Result){
                    $cat44=mysqli_fetch_array($sq44Result);
                }
                
                //--------- Category='1' ------//  
        
                $sq54="SELECT * FROM seci.lab1_cbc_norms where Category='1'";

                $sq54Result=mysqli_query($conn,$sq54);

                if($sq54Result){
                    $cat54=mysqli_fetch_array($sq54Result);
                }
                
                //--------- Category='2' ------//  
        
                $sq47="SELECT * FROM seci.lab1_cbc_norms where Category='2'";

                $sq47Result=mysqli_query($conn,$sq47);

                if($sq47Result){
                    $cat47=mysqli_fetch_array($sq47Result);
                }
                
                
                $_SESSION['n_row1']= $row_lab['n_row1'];
                $_SESSION['n_row2']= $row_lab['n_row2'];
                $_SESSION['n_row3']= $row_lab['n_row3'];
                $_SESSION['n_row4']= $row_lab['n_row4'];
                $_SESSION['n_row5']= $row_lab['n_row5'];
                $_SESSION['n_row6']= $row_lab['n_row6'];
                $_SESSION['n_row7']= $row_lab['n_row7'];
                $_SESSION['n_row8']= $row_lab['n_row8'];
                $_SESSION['n_row9']= $row_lab['n_row9'];
                $_SESSION['n_row10']= $row_lab['n_row10'];
                $_SESSION['n_row11']= $row_lab['n_row11'];
                $_SESSION['n_row12']= $row_lab['n_row12'];
                $_SESSION['n_row13']= $row_lab['n_row13'];
                $_SESSION['n_row14']= $row_lab['n_row14'];
                $_SESSION['n_row15']= $row_lab['n_row15'];
                $_SESSION['n_row16']= $row_lab['n_row16'];
                $_SESSION['n_row17']= $row_lab['n_row17'];
                $_SESSION['n_row18']= $row_lab['n_row18'];
                $_SESSION['n_row19']= $row_lab['n_row19'];
                $_SESSION['n_row20']= $row_lab['n_row20'];
                $_SESSION['r_header'] = $row_lab['Header'];
                    
                
                
                
                    
                
print "
    <form class='cbc_form' method='post' action='d-r-cbc.php' >

     
     <div class='row '>
            <h1 class='col-sm-12 b-space' align='center '>تسجيل CBC </h1>
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

            <table border='3' rules='all' class='cbc_table'>

            <thead>
                <th class='cbc-th3'></th>
                <th class='cbc-th1'>Result</th>
                <th class='cbc-th2'>Normal range</th>               
            </thead>

            <tbody> ";

            $c = 1;
            while ($c<=20){


                 print "<tr class='tr-row'>
                    <th align='center'style='direction: ltr'>$titles[$c]</th>

                    <td align='center' class='td-dir row'>
                    
                    <input type='text' name='row".$c."' id='row".$c."' class='form-control col-sm-6 row-res ' autocomplete='off' /> 
                    <label class='col-sm-6'>$row_uint[$c]</label>

                    </td>";
                    if ($row_lab['n_row14'] == ($cat54[14]." ".$row_uint[14]))
                    {
                        print "<td align='center' class='td-dir'>".$cat54[$c]." ".$row_uint[$c]."</td>";
                    }
                    else if ($row_lab['n_row14'] == ($cat45[14]." ".$row_uint[14]))
                    {
                        print "<td align='center' class='td-dir'>".$cat45[$c]." ".$row_uint[$c]."</td>";
                    }
                    else if ($row_lab['n_row14'] == ($cat47[14]." ".$row_uint[14]))
                    {
                        print "<td align='center' class='td-dir'>$cat47[$c]"." ".$row_uint[$c]."</td>";
                    }
                    else {
                        print "<td align='center' class='td-dir'>$cat44[$c]"." ".$row_uint[$c]."</td>";
                    }


                   print "</tr>";
                $c++;
                }

        print "</tbody>

          </table>

        </div>
    
    
   <div class='row'>
    <div class='col-sm-1'> </div>

    <div class='col-sm-3'>
        
            <div class=' td-dir ghg'> 
                <label for='sel1' class ='seltext'>WBC Interpretation</label><br/>
            <table class ='ghg'>
              <tbody>";
  for ($c_grop1=1 ;$c_grop1<=6;$c_grop1++){
      if ($c_grop1==5){
          print "<tr>
                    <td>
                        <select name='comment4a' id='comment4a' class='form-control  seltext'>
                            <option value=''></option>
                            <option value='Basophilia'>Basophilia</option>
                            <option value='Eosinophilia'>Eosinophilia</option>
                            <option value='Netrophilia'>Netrophilia</option>
                            <option value='Monocytsis'>Monocytsis</option>
                            <option value='Lymphocytsis'>Lymphocytsis</option>
                        </select>
                    </td>
                </tr>";
      }elseif($c_grop1==6){
          print "<tr>
                    <td>
                        <select name='comment8a' id='comment8a' class='form-control  seltext'>
                            <option value=''></option>
                            <option value='Basophilia'>Basophilia</option>
                            <option value='Eosinophilia'>Eosinophilia</option>
                            <option value='Netrophilia'>Netrophilia</option>
                            <option value='Monocytsis'>Monocytsis</option>
                            <option value='Lymphocytsis'>Lymphocytsis</option>
                        </select>
                    </td>
                </tr>";

      }else{
          print "<tr>
                    <td>
                        <select name='comment".$c_grop1."' id='comment".$c_grop1."' class='form-control  seltext' >
                          <option value=''></option>
                          <option value='Basophilia'>Basophilia</option>
                          <option value='Eosinophilia'>Eosinophilia</option>
                          <option value='Netrophilia'>Netrophilia</option>
                          <option value='Monocytsis'>Monocytsis</option>
                          <option value='Lymphocytsis'>Lymphocytsis</option>
                        </select>
                    </td>

                </tr>";
      }
  }
        print "</tbody>
        </table>
      </div>
    
</div>

<div class='col-sm-1'> </div>
                    
    <div class='col-sm-3'>
                        
    
        
      <div class=' td-dir ghg'>    
        <label for='sel1' class ='seltext'>RBC Interpretation</label><br/>
        <table class ='ghg'>
            <tbody>";
 for ($c_grop2=5 ;$c_grop2<=10;$c_grop2++){
      if ($c_grop2==9){
          print "<tr>
                    <td>
                        <select name='comment4b' id='comment4b' class='form-control  seltext' >
                             <option value=''></option>
                             <option value='Anemia'>Anemia</option>
                             <option value='Microcytic RBC'>Microcytic RBC</option>
                             <option value='Hypochromic'>Hypochromic</option>
                             <option value='Monocytsis'>Anisocytosis</option>
                        </select>
                    </td>
               </tr>";
      }elseif($c_grop2==10){
          print "<tr>
                    <td>
                        <select name='comment8b' id='comment8b' class='form-control  seltext' >
                             <option value=''></option>
                             <option value='Anemia'>Anemia</option>
                             <option value='Microcytic RBC'>Microcytic RBC</option>
                             <option value='Hypochromic'>Hypochromic</option>
                             <option value='Monocytsis'>Anisocytosis</option>
                        </select>
                    </td>
               </tr>";

      }else{
          print "<tr>
                    <td>
                        <select name='comment".$c_grop2."' id='comment".$c_grop2."' class='form-control  seltext' >
                          <option value=''></option>
                             <option value='Anemia'>Anemia</option>
                             <option value='Microcytic RBC'>Microcytic RBC</option>
                             <option value='Hypochromic'>Hypochromic</option>
                             <option value='Monocytsis'>Anisocytosis</option>
                        </select>
                    </td>

                </tr>";
      }
  }
        
 print "      </tbody>
            </table>
        </div>
    
</div>

    <div class='col-sm-1'> </div>

<div class='col-sm-3 '>
    <div class='row'>
      <div class=' td-dir ghg'>
              <label  for='sel1' class ='seltext'>PLT Interpretation</label>
          <br/>
          
          
        <table class ='ghg'>
            <tbody>";
for ($c_grop3=9 ;$c_grop3<=14;$c_grop3++){
      if ($c_grop3==13){
          print "<tr>
                    <td>
                        <select name='comment4c' id='comment4c' class='form-control  seltext' >
                             <option value=''></option>
                             <option value='Thrombocytopenia'>Thrombocytopenia</option>
                             <option value='Thrombocytosis'>Thrombocytosis</option>
                        </select>
                    </td>
               </tr>";
      }elseif($c_grop3==14){
          print "<tr>
                    <td>
                        <select name='comment8c' id='comment8c' class='form-control  seltext' >
                             <option value=''></option>
                             <option value='Thrombocytopenia'>Thrombocytopenia</option>
                             <option value='Thrombocytosis'>Thrombocytosis</option>
                        </select>
                    </td>
               </tr>";

      }else{
          print "<tr>
                    <td>
                        <select name='comment".$c_grop3."' id='comment".$c_grop3."' class='form-control  seltext' >
                          <option value=''></option>
                          <option value='Thrombocytopenia'>Thrombocytopenia</option>
                          <option value='Thrombocytosis'>Thrombocytosis</option>
                        </select>
                    </td>

                </tr>";
      }
  }
        
print "      </tbody>
                </table>
            </div>
          </div>
        </div>
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
    if(isset($_POST['row8']))
    {
        $_SESSION['row8'] = $_POST['row8']; 
    }
    
    if(isset($_POST['row9']))
    {
        $_SESSION['row9'] = $_POST['row9'];
    }
    
    if(isset($_POST['row10']))
    {
        $_SESSION['row10'] = $_POST['row10']; 
    }
    
    if(isset($_POST['row11']))
    {
        $_SESSION['row11'] = $_POST['row11']; 
    }
    if(isset($_POST['row12']))
    {
        $_SESSION['row12'] = $_POST['row12']; 
    }
    if(isset($_POST['row13']))
    {
        $_SESSION['row13'] = $_POST['row13']; 
    }
    if(isset($_POST['row14']))
    {
        $_SESSION['row14'] = $_POST['row14']; 
    }
    
    if(isset($_POST['row15']))
    {
        $_SESSION['row15'] = $_POST['row15']; 
    }
    
    if(isset($_POST['row16']))
    {
        $_SESSION['row16'] = $_POST['row16']; 
    }
    if(isset($_POST['row17']))
    {
        $_SESSION['row17'] = $_POST['row17']; 
    }
    if(isset($_POST['row18']))
    {
        $_SESSION['row18'] = $_POST['row18']; 
    }
    if(isset($_POST['row19']))
    {
        $_SESSION['row19'] = $_POST['row19']; 
    }
    
    if(isset($_POST['row20']))
    {
        $_SESSION['row20'] = $_POST['row20']; 
    }
    
    if(isset($_POST['comment1']))
    {
        $_SESSION['comment1'] = $_POST['comment1']; 
    }
        
    if(isset($_POST['comment2']))
    {
        $_SESSION['comment2'] = $_POST['comment2']; 
    }
        
    if(isset($_POST['comment3']))
    {
        $_SESSION['comment3'] = $_POST['comment3']; 
    }
    if(isset($_POST['comment4']))
    {
        $_SESSION['comment4'] = $_POST['comment4']; 
    }
    if(isset($_POST['comment5']))
    {
        $_SESSION['comment5'] = $_POST['comment5']; 
    }
    if(isset($_POST['comment6']))
    {
        $_SESSION['comment6'] = $_POST['comment6']; 
    }
    if(isset($_POST['comment7']))
    {
        $_SESSION['comment7'] = $_POST['comment7']; 
    }
    if(isset($_POST['comment8']))
    {
        $_SESSION['comment8'] = $_POST['comment8']; 
    }
    if(isset($_POST['comment9']))
    {
        $_SESSION['comment9'] = $_POST['comment9']; 
    }
    if(isset($_POST['comment10']))
    {
        $_SESSION['comment10'] = $_POST['comment10']; 
    }
    if(isset($_POST['comment11']))
    {
        $_SESSION['comment11'] = $_POST['comment11']; 
    }
    if(isset($_POST['comment12']))
    {
        $_SESSION['comment12'] = $_POST['comment12']; 
    }
    if(isset($_POST['comment4a']))
    {
        $_SESSION['comment4a'] = $_POST['comment4a']; 
    }
    if(isset($_POST['comment8a']))
    {
        $_SESSION['comment8a'] = $_POST['comment8a']; 
    }
    
    if(isset($_POST['comment4b']))
    {
        $_SESSION['comment4b'] = $_POST['comment4b']; 
    }
    if(isset($_POST['comment8b']))
    {
        $_SESSION['comment8b'] = $_POST['comment8b']; 
    }
    
    if(isset($_POST['comment4c']))
    {
        $_SESSION['comment4c'] = $_POST['comment4c']; 
    }
    if(isset($_POST['comment8c']))
    {
        $_SESSION['comment8c'] = $_POST['comment8c']; 
    }
        if(isset($_POST['nb']))
    {
        $_SESSION['nb'] = $_POST['nb']; 
    }
    
    
         $sql1 = "INSERT INTO `seci`.`lab1_cbc` (`patient_code`, `Header`, `Lab_number`, `Specimen_date`, `Report_date`, `Specimen`, `row1`, `unit1`, `n_row1`, `row2`, `unit2`, `n_row2`, `row3`, `unit3`, `n_row3`, `row4`, `unit4`, `n_row4`, `row5`, `unit5`, `n_row5`, `row6`, `unit6`, `n_row6`, `row7`, `unit7`, `n_row7`, `row8`, `unit8`, `n_row8`, `row9`, `unit9`, `n_row9`, `row10`, `unit10`, `n_row10`, `row11`, `unit11`, `n_row11`, `row12`, `unit12`, `n_row12`, `row13`, `unit13`, `n_row13`, `row14`, `unit14`, `n_row14`, `row15`, `unit15`, `n_row15`, `row16`, `unit16`, `n_row16`, `row17`, `unit17`, `n_row17`, `row18`, `unit18`, `n_row18`, `row19`, `unit19`, `n_row19`, `row20`, `unit20`, `n_row20`, `Comment1`, `Comment2`, `Comment3`, `Comment4`, `Comment5`, `Comment6`, `Comment7`, `Comment8`, `Comment9`, `Comment10`, `Comment11`, `Comment12`, `Comment4a`, `Comment8a`, `Comment12a`, `Comment4b`, `Comment8b`, `Comment12b`, `Comment4c`, `Comment8c`,`NB`) VALUES ('".$_SESSION['patient_code']."', '".$_SESSION['r_header']."', '".$_SESSION['lab_num']."', '".$_SESSION['specimen_d']."', '".$_SESSION['report_d']."', '', '".$_SESSION['row1']."', 'K/µL', '".$_SESSION['n_row1']."', '".$_SESSION['row2']."', 'K/µL', '".$_SESSION['n_row2']."', '".$_SESSION['row3']."', '%', '".$_SESSION['n_row3']."', '".$_SESSION['row4']."', 'K/µL', '".$_SESSION['n_row4']."', '".$_SESSION['row5']."', '%', '".$_SESSION['n_row5']."', '".$_SESSION['row6']."', 'K/µL', '".$_SESSION['n_row6']."', '".$_SESSION['row7']."', '%', '".$_SESSION['n_row7']."', '".$_SESSION['row8']."', 'K/µL', '".$_SESSION['n_row8']."', '".$_SESSION['row9']."', '%', '".$_SESSION['n_row9']."', '".$_SESSION['row10']."', 'K/µL', '".$_SESSION['n_row10']."', '".$_SESSION['row11']."', '%', '".$_SESSION['n_row11']."', '".$_SESSION['row12']."', 'M/µL', '".$_SESSION['n_row12']."', '".$_SESSION['row13']."', 'g/dL', '".$_SESSION['n_row13']."', '".$_SESSION['row14']."', '%', '".$_SESSION['n_row14']."', '".$_SESSION['row15']."', 'fL', '".$_SESSION['n_row15']."', '".$_SESSION['row16']."', 'pg', '".$_SESSION['n_row16']."', '".$_SESSION['row17']."', 'g/dL', '".$_SESSION['n_row17']."', '".$_SESSION['row18']."', '%', '".$_SESSION['n_row18']."', '".$_SESSION['row19']."', 'K/µL', '".$_SESSION['n_row19']."', '".$_SESSION['row20']."', '%', '".$_SESSION['n_row20']."', '".$_SESSION['comment1']."', '".$_SESSION['comment2']."', '".$_SESSION['comment3']."', '".$_SESSION['comment4']."', '".$_SESSION['comment5']."', '".$_SESSION['comment6']."', '".$_SESSION['comment7']."', '".$_SESSION['comment8']."', '".$_SESSION['comment9']."', '".$_SESSION['comment10']."', '".$_SESSION['comment11']."', '".$_SESSION['comment12']."', '".$_SESSION['comment4a']."', '".$_SESSION['comment8a']."', '', '".$_SESSION['comment4b']."', '".$_SESSION['comment8b']."', '', '".$_SESSION['comment4c']."', '".$_SESSION['comment8c']."','".$_SESSION['nb']."');";
        

            if (mysqli_query($conn, $sql1))
            {

           /* echo "<div class='insert_dialoge' id='dialog-message' title='اضافة تقرير'>
                    <p>
                        <span class='ui-icon ui-icon-circle-check' style='float:right; margin:0 7px 50px 0; width:10px height:10px'></span>
                        تمت العملية بنجاح 
                    </p>
                  </div>";
*/
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
    <script src="js/edit-js/cbc-edit-js.js"></script>
    <script src="js/edit-js/but-action.js"></script>
    
    </body>
    
</html>


    