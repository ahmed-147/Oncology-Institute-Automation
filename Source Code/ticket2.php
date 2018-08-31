<?php ob_start(); ?>

<?php

 session_start();
?>


<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/style_ticket2.css" type="text/css"/>
      <title>معهد جنوب مصر للأورام</title>
   </head>
   
   <body>
       <div class="idel">
       <label > رقم المعهد </label>
      <input type="text" value="<?php echo $_SESSION['patient_code']; ?>">
           
     </div>
	 
	 <div class="h">
     <div class="img" >
       <img src="cancer%202.jpg" width="5%" height= "5%">
     </div>
      <p align="right"> معهد جنوب مصر للأورام </p>
	  </div>
	  <div class="h">
      <h2> <u>  تـذكـره مريض </u></h2> <br>
       </div>
	   
	   
     <div class="text2">
           <div class="div1">
                 <label class="right_txt">رقم التذكرة :</label>
                    <input type ="text" value="<?php echo $_SESSION['ticket_num']; ?>">

                 <label class="left_txt1"> التاريخ : </label> <input type = "text" name ="date" value="<?php $SomeDate = new DateTime(); echo $SomeDate->format('Y-m-d'); ?>">    
           </div>
             <br>
           <div class="div2">
                 <label class="right_txt"> اسـم المريض : </label><input type = "text" name ="name" value="<?php echo $_SESSION['name']; ?>"> 

                 <label class="left_txt2"> رقـم المعهد  : </label > <input type = "text" name ="" value="<?php echo $_SESSION['patient_code']; ?>">
           </div>
             <br> 
           <div class="div3">
                <label class="right_txt"> تـاريخ آخر زيارة للعيادة الخارجية : </label> <input type = "text">  

                <label class="left_txt3"> تـاريخ آخر مرة دخول للمعهد : </label> <input type = "text"> 
            </div>
             <br>
           <div class="div4">
                <label class="right_txt"> التشخيص المبدئي : </label > <input type = "text" name ="initial_diagnosis1" value="<?php echo $_SESSION['initial_diagnosis']; ?>"> 

                <label class="left_txt4"> السن : </label> <input type = "text" name ="age1" value="<?php echo $_SESSION['age']; ?>"> 
            </div>
      </div>
         <br>
      <div class="checkbox">
        <label> سبب زيارة  المعهد  : </label> <input type="checkbox"> <label> متابعة </label>

          <input type="checkbox"> <label> كشف طارئ</label>

          <input type="checkbox">   <label> صرف علاج</label>
 
          <input type="checkbox">  <label> جلسة أشعة </label>

          <input type="checkbox"> <label>  فحوص </label>

          <input type="checkbox"> <label> جراحة </label> 
      </div>
      
          <fieldset class="o">

             <div class="dfield"> طلب عمل أشعة تشخيصية للمريض : </div>
        <br>
      <div class="checkbox">
        <label> نوع الاشعة المطلوبة : </label> <input type="checkbox" name ="عادية " > <label class="ch1"> عادية </label>

          <input type="checkbox"> <label class="ch1"> فوق صوتية </label>
 
          <input type="checkbox"> <label class="ch1"> مقطعية </label>
 
          <input type="checkbox">  <label class="ch1"> أنسجة الثدي </label>
       </div>
       <br>
<div class="dfield">
<pre>
وصف الأشعة المطلوبة : _______________________________________________________________
_________________________________________________________________________________
____________________________________________________التوقيع : _______________________
</pre>              
              </div>
         </fieldset>
 
        <br>
         <fieldset class="o">
            <div class="dfield"> طلب عمل تحاليل للمريض :</div>
        <br>  
      <div class="checkbox">
        <label> نوع التحاليل : </label> <input type="checkbox"> <label> هيماثولوجي </label>
 
          <input type="checkbox"> <label> كيمياء </label>

          <input type="checkbox"> <label> سيرولوجي </label>

          <input type="checkbox"> <label> دلالات أورام و هرمونات </label>
 
          <input type="checkbox"> <label> أخري </label>
       <br>
      </div>
             <div  class="dfield" >
<pre>
وصف التحاليل المطلوبة : _______________________________________________________________
_________________________________________________________________________________
____________________________________________________التوقيع : _______________________
</pre>
             </div >
         </fieldset>
       <br>
         <fieldset class="o">
            <div class="dfield"> طلب صرف علاج من صيدلية المعهد : </div>
       <br>
      <div class="checkbox ">
        <label> نوع الأدوية :</label> <input type="checkbox"> <label> علاج كيماوي </label>

          <input type="checkbox"> <label> علاج هرموني </label>

          <input type="checkbox"> <label> أخري </label> 

          <label class="not">(يتم تسجيل الأدوية في تذكرة المريض)</label>
 
      </div>
         </fieldset>
	 
      <br>
	  <div class="div5 dfield">
 موعد الزيارة القادمة : ______________ الطبيب المعالج : ________________ الأسم : ___________ التوقيع : ____________
      <br>
	  </div>
         <fieldset class="o">
           <div class="dfield"> طلب دخول مريض للمعهد : </div>
      <br>
      <div class="checkbox">
        <label> سبب الدخول: </label> <input type="checkbox"> <label> علاج </label>

          <input type="checkbox"> <label> فحوص </label>
      </div>
 <div class="dfield"> 
<pre>
قسم الدخول : ________________________________________ طبيب القسم : ______________________  
<br>
ملاحظات متعلقة بالدخول : __________________________________ التوقيع : _______________________
 </pre>       
             </div>
        </fieldset>
     
  </body>
</html>


<?php


if(isset($_SESSION['username']))
{
       
       
}else {
    
    header('Location: login1.php');
    exit();
}

?>

