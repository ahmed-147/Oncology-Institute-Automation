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
    <link rel="stylesheet" href="css/edit-f-styles/uri-edit-style.css"/>
    

    
  
    <title>Edit Result </title>  
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
    <body>
        <div class="container">
            
            
            <form id="form1" method="post" action="d-r-uri.php">
                <div class="row ">
                    
                    <div class="col-sm-1">
                        <button class='btn btn-primary btn-lg print back_but' name='back' id='back_lab_ed' data-toggle='tooltip' title='رجوع'   >
                            <span class='glyphicon glyphicon-arrow-left sp_back' id='s3'></span> 
                        </button>
                    </div>
                    
                    
                        <h1 class="col-sm-11 general_lab_title" >تعديل Urinalysis</h1>
                </div>
                
            </form>
            
            <!----------------------- uri form ------------------------->
          
			
<?php
		//********************php code ***************************	
			
			
if(isset($_SESSION['username']))
{	
    
    
    //------------- view button -----------------//
				
    
        
        
           
                
        //--------- query 1------//  
        
    $sql1="SELECT * FROM seci.lab1_urinalysis where Serial ='" . $_SESSION['serial']. "' ";

    $query1Result=mysqli_query($conn,$sql1);

    if($query1Result){
        $row_lab=mysqli_fetch_assoc($query1Result);
    }

    //--------- query 2------//

    $sql2="SELECT * FROM seci.patients where patient_code ='" . $row_lab['patient_code']. "' ";


    $query2Result=mysqli_query($conn,$sql2);

    if($query2Result){
        $row_patient=mysqli_fetch_assoc($query2Result);
    }
    //-----------------------//
    if(isset($row_lab['Header'])) {
        $_SESSION['r_header'] = $row_lab['Header'];

    }



print "
    <form class='uri_form' method='post'  action='uri-form.php'>

        <div class = 'row'><hr class='b-space'/></div>


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
                <input type='text' name='lab_num' id='lab_num' autocomplete='off'  class='form-control' value='". $row_lab['Lab_number']."' />
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
                <input type='text' name='report_d' id='report_d' autocomplete='off'  class='form-control' value='" . $row_lab['Report_date']."' />
            </div>

            <div class='col-sm-2'>
              <label > تاريخ التقرير </label>
            </div>


            <div class='col-sm-1'></div>



            <div class='col-sm-2'>
                <input type='text' id='sample_d' class='form-control' name='sample_d' autocomplete='off' value='" . $row_lab['Specimen_date']."'/>
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

            <table border='3' rules='all' class='uri_table txt-dir'>


                <th colspan='2' ><p class='txt-dir'>Physical Exaimination :</p></th>

                <tr class='txt-dir tr-row'>

                    <td class='txt-dir td-w5'>
                        <div class='row'>
                            <label class='txt-dir  col-sm-4' >&nbsp;&nbsp;&nbsp;Color:</label>
                            <input type='text' name='row1' id='row1' class='txt-dir col-sm-8 inp-size-t form-control' autocomplete='off' value='" . $row_lab['row1']."' />
                        </div>
                    </td>

                    <td class='txt-dir td-w5 '>
                        <div class='row'>
                            <label class='txt-dir  col-sm-6' >&nbsp;Aspect:</label>
                            <input type='text' name='row2' id='row2' class='txt-dir col-sm-6 inp-size-t form-control' autocomplete='off' value='" . $row_lab['row2']."' />
                        </div>
                    </td>

                </tr>
                <tr class='txt-dir tr-row'>

                    <td class='txt-dir td-w5'> 
                        <div class='row'>
                            <label class='txt-dir col-sm-4'>&nbsp;&nbsp;&nbsp;pH:</label>
                            <input type='text' name='row3' id='row3' class='txt-dir col-sm-8 inp-size-t form-control' autocomplete='off' value='" . $row_lab['row3']."' />
                        </div>
                    </td>

                    <td class='txt-dir td-w5'>
                        <div class='row'>
                            <label class='txt-dir col-sm-6'>&nbsp;Specific gravity:</label>
                            <input type='text' name='row4' id='row4' class='txt-dir col-sm-6 inp-size-t form-control' autocomplete='off' value='" . $row_lab['row4']."' />
                        </div>
                    </td>
                </tr>
                <tr class='tr-row'>

                    <td class='txt-dir td-w5'> 
                        <div class='row'>
                            <label class='txt-dir col-sm-4' >&nbsp;&nbsp;&nbsp;Sediment:</label>
                            <input type='text' name='row5' id='row5' class='txt-dir col-sm-8 inp-size-t form-control' autocomplete='off' value='" . $row_lab['row5']."' />
                        </div>
                    </td>
                    <td  class='txt-dir td-w5'></td>
                </tr>



                <th colspan='2'><p class='txt-dir'>Chemical Exaimination :</p></th>

                <tr class='txt-dir tr-row'>

                    <td class='txt-dir td-w5'>
                        <div class='row'>
                            <label class='txt-dir col-sm-4' >&nbsp;&nbsp;&nbsp;Protein:</label>
                            <input type='text' name='row6' id='row6' class='txt-dir col-sm-8 inp-size-t form-control' autocomplete='off' value='" . $row_lab['row6']."' />
                        </div>
                    </td>

                    <td class='txt-dir td-w5'>
                        <div class='row'>
                            <label class='txt-dir col-sm-6' >&nbsp;Blood:</label>
                            <input type='text' name='row7' id='row7' class='txt-dir col-sm-6 inp-size-t form-control' autocomplete='off' value='" . $row_lab['row7']."' />
                        </div>
                    </td>

                </tr>
                <tr class='txt-dir tr-row'>

                    <td class='txt-dir td-w5'> 
                        <div class='row'>
                            <label class='txt-dir col-sm-4' >&nbsp;&nbsp;&nbsp;Glucose:</label>
                            <input type='text' name='row8' id='row8' class='txt-dir col-sm-8 inp-size-t form-control' autocomplete='off' value='" . $row_lab['row8']."' />
                        </div>
                    </td>
                    <td  class='txt-dir'>
                        <div class='row'>
                            <label class='txt-dir col-sm-6' >&nbsp;Acetone:</label>
                            <input type='text' name='row9' id='row9' class='txt-dir col-sm-6 inp-size-t form-control' autocomplete='off' value='" . $row_lab['row9']."' />
                        </div>
                    </td>
                </tr>

                <tr class='txt-dir tr-row'>

                    <td class='txt-dir td-w5'> 
                        <div class='row'>
                            <label class='txt-dir col-sm-4' >&nbsp;&nbsp;&nbsp;Nitrite:</label>
                            <input type='text' name='row10' id='row10' class='txt-dir col-sm-8 inp-size-t form-control' autocomplete='off' value='" . $row_lab['row10']."' />
                        </div>
                    </td>
                    <td  class='txt-dir'>
                        <div class='row'>
                            <label class='txt-dir col-sm-6' >&nbsp;Leukocytes:</label>
                            <input type='text' name='row11' id='row11' class='txt-dir col-sm-6 inp-size-t form-control' autocomplete='off' value='" . $row_lab['row11']."' />
                        </div>
                    </td>
                </tr>

                <tr class='txt-dir tr-row'>

                    <td class='txt-dir td-w5'> 
                        <div class='row'>
                            <label class='txt-dir col-sm-4' >&nbsp;&nbsp;&nbsp;Bilirubin:</label>
                            <input type='text' name='row12' id='row12' class='txt-dir col-sm-8 inp-size-t form-control' autocomplete='off' value='" . $row_lab['row12']."' />
                        </div>
                    </td>

                    <td class='txt-dir'>
                        <div class='row'>
                            <label class='txt-dir col-sm-6' >&nbsp;Urobilinogen:</label>
                            <input type='text' name='row13' id='row13' class='txt-dir col-sm-6 inp-size-t form-control' autocomplete='off' value='" . $row_lab['row13']."' />
                        </div>
                    </td>
                </tr>

                <th colspan='2' ><p class='txt-dir'>Microscopic Exaimination : </p></th>


                <tr class='tr-row' colspan='2'>

                    <td class='txt-dir' colspan='2'>
                         <div class='row'>
                            <label class='txt-dir col-sm-4'>&nbsp;&nbsp;&nbsp;Pus cells:</label>

                            <input type='text' name='row14' id='row14' class='col-sm-6 txt-dir inp-size-t form-control' autocomplete='off' value='" . $row_lab['row14']."' />

                            <label class='txt-dir col-sm-2'>&nbsp;&nbsp;&nbsp;/HPF</label>
                         </div>

                    </td>
                </tr>

                <tr class='tr-row' colspan='2'>

                    <td class='txt-dir' colspan='2'>
                         <div class='row'>
                            <label class='txt-dir col-sm-4'>&nbsp;&nbsp;&nbsp;RBCs:</label>

                            <input type='text' name='row15' id='row15' class='col-sm-6 txt-dir inp-size-t form-control' autocomplete='off' value='" . $row_lab['row15']."' />

                            <label class='txt-dir col-sm-2'>&nbsp;&nbsp;&nbsp;/HPF</label>
                         </div>

                    </td>
                </tr>

                <tr class='tr-row' colspan='2'>

                    <td class='txt-dir' colspan='2'>
                         <div class='row'>
                            <label class='txt-dir col-sm-4'>&nbsp;&nbsp;&nbsp;Epithelial cells:</label>

                            <input type='text' name='row16' id='row16' class='col-sm-6 txt-dir inp-size-t form-control' autocomplete='off'  value='" . $row_lab['row16']."' />

                            <label class='txt-dir col-sm-2'>&nbsp;&nbsp;&nbsp;/HPF</label>
                         </div>

                    </td>
                </tr>

                <tr class='tr-row' colspan='2'>

                    <td class='txt-dir' colspan='2'>
                         <div class='row'>
                            <label class='txt-dir col-sm-4'>&nbsp;&nbsp;&nbsp;Crystals:</label>

                            <input type='text' name='row17' id='row17' class='col-sm-8 txt-dir inp-size-t form-control' autocomplete='off' value='" . $row_lab['row17']."' />

                         </div>

                    </td>
                </tr>

                <tr class='tr-row' colspan='2'>

                    <td class='txt-dir' colspan='2'>
                         <div class='row'>
                            <label class='txt-dir col-sm-4'>&nbsp;&nbsp;&nbsp;Casts:</label>

                            <input type='text' name='row18' id='row18' class='col-sm-8 txt-dir inp-size-t form-control' autocomplete='off' value='" . $row_lab['row18']."' />

                         </div>

                    </td>
                </tr>

                <tr class='tr-row' colspan='2'>

                    <td class='txt-dir' colspan='2'>
                         <div class='row'>
                            <label class='txt-dir col-sm-4'>&nbsp;&nbsp;&nbsp;Parasites:</label>

                            <input type='text' name='row19' id='row19' class='col-sm-8 txt-dir inp-size-t form-control' autocomplete='off' value='" . $row_lab['row19']."' />

                         </div>

                    </td>
                </tr>

                <tr class='tr-row' colspan='2'>

                    <td class='txt-dir' colspan='2'>
                         <div class='row'>
                            <label class='txt-dir col-sm-4'>&nbsp;&nbsp;&nbsp;Bacteria:</label>

                            <input type='text' name='row20' id='row20' class='col-sm-8 txt-dir inp-size-t form-control' autocomplete='off' value='" . $row_lab['row20']."' />

                         </div>

                    </td>
                </tr>

                <tr class='tr-row' colspan='2'>

                    <td class='txt-dir' colspan='2'>
                         <div class='row'>
                            <label class='txt-dir col-sm-4'>&nbsp;&nbsp;&nbsp;Othr:</label>

                            <input type='text' name='row21' id='row21' class='col-sm-8 txt-dir inp-size-t form-control' autocomplete='off' value='" . $row_lab['row21']."' />

                         </div>

                    </td>
                </tr>



          </table>

        </div>

             <div class='row'>
                      <textarea rows='2'cols='100' class='t-area' align='center' name='nb' id ='nb' value='" . $row_lab['NB']."' ></textarea>
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
        if(isset($_POST['row21']))
        {
            $_SESSION['row21'] = $_POST['row21']; 
        }
        if(isset($_POST['nb']))
        {
            $_SESSION['nb'] = $_POST['nb'];
        }
        
         $sqlup = "UPDATE `seci`.`lab1_urinalysis` SET `Lab_number`='".$_SESSION['lab_num']."', `Specimen_date`='".$_SESSION['sample_d']."', `Report_date`='".$_SESSION['report_d']."', `row1`='".$_SESSION['row1']."', `row2`='".$_SESSION['row2']."', `row3`='".$_SESSION['row3']."', `row4`='".$_SESSION['row4']."', `row5`='".$_SESSION['row5']."', `row6`='".$_SESSION['row6']."', `row7`='".$_SESSION['row7']."', `row8`='".$_SESSION['row8']."', `row9`='".$_SESSION['row9']."', `row10`='".$_SESSION['row10']."', `row11`='".$_SESSION['row11']."', `row12`='".$_SESSION['row12']."', `row13`='".$_SESSION['row13']."', `row14`='".$_SESSION['row14']."', `row15`='".$_SESSION['row15']."', `row16`='".$_SESSION['row16']."', `row17`='".$_SESSION['row17']."', `row18`='".$_SESSION['row18']."', `row19`='".$_SESSION['row19']."', `row20`='".$_SESSION['row20']."', `row21`='".$_SESSION['row21']."', `NB`='".$_SESSION['row1']."' WHERE `Serial`='".$_SESSION['serial']."';";
        
        


            if (mysqli_query($conn, $sqlup))
            {
                echo "nonononoono";
    /*        echo "<div class='insert_dialoge' id='dialog-message' title='اضافة تقرير'>
                    <p>
                        <span class='ui-icon ui-icon-circle-check' style='float:right; margin:0 7px 50px 0; width:10px height:10px'></span>
                        تمت العملية بنجاح 
                    </p>
                  </div>";*/

            } else {
                echo "fuck this shit ";
                
              /*   echo "<div class='insert_dialoge' id='dialog-message' title='خطأ'>
                    <p>
                        <span class='glyphicon glyphicon-warning-sign' style='float:right; margin:0 7px 50px 0; width:10px height:10px'></span>
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; لم تمت العملية بنجاح 
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



