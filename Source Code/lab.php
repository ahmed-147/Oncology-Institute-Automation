<?php ob_start(); ?>

<?php

 session_start();

//fun get last p_code  


include 'config.php';


if(isset($_SESSION['username']))
{

       
}else {
    
    header('Location: index.php');
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
 	<link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css"/>  
 <link rel="stylesheet" href="css/style-lab.css"/>
    <link rel="stylesheet" href="css/buttons_css.css"/>
  
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
            <span class="glyphicon glyphicon-off"></span> 
            </a>
        </div>
    <ul class="nav nav-stacked place">
  <li>    
      <a href="#" id="a1">
          <span class="glyphicon glyphicon-import import"></span>
          <span>تسجيل و تعديل تتحليل</span>   
      </a>
        </li>
        
  <li>
      <a href="#" id="a2">
          <span class="glyphicon glyphicon-remove data"></span>
          <span>الغاء تحليل</span>
          </a>
        </li> 
        
</ul>
    </div>
    
    
    <form id="form1" class="data1" action="" method="post">
        
         <output class="title_buttons">تعديل وتسجيل نتائج تحاليل</output>
              
         <div class="d1" class="butt1 butt2">

           <input type="button" name="but_esr_form1" class="btn btn-primary but1" id="b_esr_f1" value="ESR"/>
           <input type="button" name="but_cbc_form1" class="btn btn-primary but2" id="b_cbc_f1" value="CBC"/>
           <input type="button" name="but_csf_form1" class="btn btn-primary but3" id="b_csf_f1" value="CSF"/>
           <input type="button" name="but_stool_form1" class="btn btn-primary but8" id="b_stool_f1" value="Stool"/>
           <input type="button" name="but_proth_form1" class="btn btn-primary but5" id="b_porth_f1" value="Prothrombim"/>
           <input type="button" name="but_immo_form1" class="btn btn-primary but6" id="b_immo_f1" value="Immmology"/>
           <input type="button" name="but_uri_form1" class="btn btn-primary but7" id="b_Uri_f1" value="Urinalysis"/>
           <input type="button" name="but_bleed_form1" class="btn btn-primary but4" id="b_bleeding_f1" value="Bleeding Profile"/>
           <input type="button" name="but_cs_form1" class="btn btn-primary but9" id="b_cs_f1" value="Culture & Sensitivity"/>

             
         </div> 
        
         
        
        
    </form>
		
		
		
          
	                	<!--   Form 2    -->
         
        
   <form id="form2"  class="ticket1 ticket2" method="post" >
       
       
         <output class="title_buttons"> الغاء نتائج </output>
              
         <div class="d1" class="butt1 butt2">

             <input type="button" name="but_esr_form2" class="btn btn-primary but1" id="b_esr_f2" value="ESR"/>
             <input type="button" name="but_cbc_form2" class="btn btn-primary but2" id="b_cbc_f2" value="CBC"/>
             <input type="button" name="but_csf_form2" class="btn btn-primary but3" id="b_csf_f2" value="CSF"/>
             <input type="button" name="but_stool_form2" class="btn btn-primary but8" id="b_stool_f2" value="Stool"/>
             <input type="button" name="but_proth_form2" class="btn btn-primary but5" id="b_porth_f2" value="Prothrombim"/>
             <input type="button" name="but_immo_form2" class="btn btn-primary but6" id="b_immo_f2" value="Immmology"/>
             <input type="button" name="but_uri_form2" class="btn btn-primary but7" id="b_Uri_f2" value="Urinalysis"/>
             <input type="button" name="but_bleed_form2" class="btn btn-primary but4" id="b_bleeding_f2" value="Bleeding Profile"/>
             <input type="button" name="but_cs_form1" class="btn btn-primary but9" id="b_cs_f2" value="Culture & Sensitivity"/>

             
         </div>          
    
    </form>
        
        
        
    </div>
   
    <script src="js/jquery-2.1.4.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/JavaScript-lab.js"></script> 
    <script src="js/lab-buttons-javascript.js"></script>
</body>
</html>



