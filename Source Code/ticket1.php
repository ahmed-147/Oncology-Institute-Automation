<?php ob_start(); ?>

<?php

 session_start();
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width , initial-scale=1">
        <title> اذن قبول</title>
        <link rel="stylesheet" href="css/style_ticket.css"/>
        <style>
        </style>
    </head>
    <body>
        <form>
        <div class="head-titels">
                <div class="head-right">
                    <img src="cancer%202.jpg">
                    <br> 
                    <label> <B> معهد جنوب مصر للأورام</B></label>
               </div>
            
                <div class="head-left"> 
                    <fieldset>
                        <label> رقم المعهد </label><input type="text" name="number" value="<?php echo $_SESSION['patient_code']; ?>">
                    </fieldset>
                </div>
        </div>
            <br>
            <div class="head-center"> 
                <h2>  اذن قبول مريض للقسم الداخلي  </h2>
            </div>
        <div class="kesm">
            <label  > القسم </label><input type="text" name="el-kesm">
            <label  > الوحده </label><input type="text" name="el-wehda">
            <label  > الدور </label><input type="text" name="el-door">
            <br><br>
            <label  > تاريخ الدخول </label><input type="text" name="enter-date" value="<?php $SomeDate = new DateTime(); echo $SomeDate->format('Y-m-d'); ?>">
            <label  > طبيب الدخول </label><input type="text" name="enter-doctor">
        </div>
        
            <fieldset>
                <h3 id="m"><u> بيانات المريض </u> </h3>
                <div id="mmm">
                    <div id="level2">
                        <label class="styl" > الاسم </label> <input type="text" class="name" name="name1" value="<?php echo $_SESSION['name']; ?>"> 
                        <label class="styl_left_input">   رقم البطاقه </label><input type="text" name="national-num1" class="id" value="<?php echo $_SESSION['id']; ?>"> 
                        <label class="styl_left_input"> فصيله الدم </label><input type="text" name="blood-type" class="blood" >  
                    </div>
                    <div id="level2">
                        <label class="styl"> المحافظه </label><input type="text" name="city" class="fieldest1_input" value="<?php echo $_SESSION['governorate']; ?>">  
                        <label class="styl_left_input">  المركز </label><input type="text" name="center" class="fieldest1_input" value="<?php echo $_SESSION['district']; ?>"> 
                        <label class="styl_left_input">   المدينه/القريه </label><input type="text" name="village"  class="fieldest1_input" value="<?php echo $_SESSION['village']; ?>"> 
                    </div>
                    <div id="level2">
                        <label class="styl">  العنوان </label><input class="address-fs2" type="text" name="address1" value="<?php echo $_SESSION['address']; ?>">  
                    </div>
                    <div id="level3" >
                        <label class="styl">  عنوان من يمكن الاتصال به </label>
                        <textarea rows="2" name="address2" class="area" readonly><?php echo $_SESSION['next_of_kin']; ?></textarea>
                    </div>
                    <div id="level2">
                        <label class="styl">  النوع </label><input type="text" name="gender" class="fieldest1_input" value="<?php echo $_SESSION['gender']; ?>"> 
                        <label class="styl_left_input">  تاريخ الميلاد </label><input type="text" name="birhdate" class="fieldest1_input" value="<?php echo $_SESSION['birth_date']; ?>">  
                        <label class="styl_left_input"> السن </label><input type="text" name="age" class="fieldest1_input" value="<?php echo $_SESSION['age']; ?>">   
                    </div>
                    <label class="styl">  المهنه </label><input type="text" name="profession" class="fieldest1_input" value="<?php echo $_SESSION['job']; ?>">  
                    <label class="styl_left_input">  التشخيص المبدئي </label><input class="initial" type="text" name="initial" value="<?php echo $_SESSION['initial_diagnosis']; ?>"> 
                </div>
            </fieldset>
            <br>
            <fieldset>
                <h3 id="m"><u>  بيانات المرافق </u> </h3>
                <div id="mmm">
                    <div id="level2">
                        <label class="sty" >  الاسم </label><input type="text" name="name2" class="fieldest2_input" > 
                        <label class="sty_left_input"> رقم البطاقه </label><input type="text" name="national-num2" class="fieldest2_input" > 
                    </div>
                    <div id="level2">
                        <label class="sty">  العنوان </label><input class="address-fs2" type="text" name="adress3" >  
                    </div>
                    <div id="level2">
                        <label class="sty">   تاريخ الدخول </label><input type="text" name=" enter-date" class="fieldest2_input" value="<?php $SomeDate = new DateTime(); echo $SomeDate->format('Y-m-d'); ?>"> 
                        <label class="sty_left_input">  تاريخ الخروج </label><input type="text" name="exit-date" class="fieldest2_input" >  
                    </div>
                    <label class="sty">   سداد الرسوم </label><input type="text" name="toll" class="fieldest2_input" > 
                    <label class="sty_left_input">  قسيمه رقم  </label><input type="text" name=" number" class="fieldest2_input" >  
                </div>
            </fieldset>
            <br>
            <fieldset>
                <div id="level1">
                    <h3 id="m"><u> إقرار </u> </h3>
                </div>
                <div id="mmm">
                    <label class="sty3" > أقر انا الموقع أدناه </label> <input type="text" name="name" class="fieldest3_input" >  
                    <label class="sty3_left_input">  بطاقه رقم           </label><input type="text" name="national-num" class="fieldest3_input" > 
                </div>
                <br>
                <p id="mmm">
                    .بأن الاطباء المعالجين بالمستشفي شرحوا لي ضروره إجراء عمليه - علاج كيمائي - علاج اشعاعي  وأي إجراءات او عمليات أخري وأهميتها ومضاعفتها المحتمله لي  
                    .وأقر بانني أوافق علي ذلك وعلي ما يراه الطبيب المعالج ضروريا أثناء العلاج أو العمليه وكذلك التخدير سواء عمومي او موضعي او اي نوع من التخدير يخدم هذا الغرض 
                    وهذا إقرار مني بذلك 
                </p>
                <div id="mmmm">
                    <div id="level2">
                        <label class="sty"> التوقيع</label><input type="text" name="signature" class="fieldest1_input" >  
                    </div>
                    <div id="level2">
                        <label class="sty" > المقر بما فيه</label><input type="text" name="el-moker-bma-feh" class="fieldest1_input" >  
                    </div>
                    <label class="sty"> صلته بالمريض</label><input type="text" name="relation" class="fieldest1_input" >  
                </div>
                <div id="mmm">
                    <u> ملاحظات </u>
                    <hr><hr>
                </div>
            </fieldset>
        </form>
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