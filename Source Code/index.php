<?php ob_start(); ?>

<?php

include 'config.php';
 
session_start();

if(isset($_SESSION['username']))
{
    if($_SESSION['user_type'] == 1)
	{
		header('Location: ticket_program.php');
    	exit();
	}
	else if($_SESSION['user_type'] == 2)
	{
		header('Location: ticket_program.php');
    	exit();
	}
	else if ($_SESSION['user_type'] == 3)
	{
		header('Location: operation_program.php');
    	exit();
	}
	else if ($_SESSION['user_type'] == 4)
	{
		header('Location: diet_program.php');
    	exit();
	}
	else if ($_SESSION['user_type'] == 5)
	{
		header('Location: lab.php');
    	exit();
	}
    	else if ($_SESSION['user_type'] == 6)
	{
		header('Location: admin.php');
    	exit();            
            
	}
}

 
$conn->close(); 

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta charset="utf8mb4_general_ci">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">   
 <link rel="stylesheet" href="css/bootstrap.css"/>  
 <link rel="stylesheet" href="css/login_style.css"/>
  <title>Login</title>  
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
    <div class="container">
        <h3 class="title">معهد جنوب مصر للاورام</h3>
        
        <div class="circle">
            <img src="cancer%202.jpg" class="logo"/>
        </div>
        <form class="form" action="" method="POST">
            <div class="form-group div1">
            <label class="user">اسم المستخدم</label>
            <input type="text" name="username" class="form-control" id="username"  placeholder="ادخل اسم المستخدم" autocomplete="off" required/>
            </div>
            <div class="form-group div2">
            <label class="pass">كلمة المرور</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="ادخل كلمة المرور" autocomplete="off" required/>
            </div>
            
            <div class="showpass">
            <input type="checkbox" class="check" id="pass_show" onclick="show();">
            <label class="passlabel">اظهار كلمة المرور</label>
            </div>
            
            <input type="submit" name="login" value="دخول" class="btn btn-primary sub" formtarget=""/>
                     
        </form>
    </div>
    
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/login_js.js"></script>
    </body>
</html>

<?php

session_start();

include 'config.php';


if($_SERVER['REQUEST_METHOD'] == 'POST'){

$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
        
    
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    
     $result=mysqli_query($conn,$sql);
				  
	$row = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) == 1) 
{
        $_SESSION['serial'] = $row['Serial'];
    
    $sql1 = "UPDATE seci.users SET active = '1' WHERE `Serial` = '".$_SESSION['serial']."' ";
    mysqli_query($conn, $sql1);

    
    $_SESSION['username'] = $username ;
    $_SESSION['password'] = $password ;
	$_SESSION['user_name'] = $row['Name'] ;
	$_SESSION['user_type'] = $row['type'];
	
	if($_SESSION['user_type'] == 1)
	{  
		header('Location: ticket_program.php');
    	exit();
	}
	else if($_SESSION['user_type'] == 2)
	{
		header('Location: ticket_program.php');
    	exit();
	}
	else if ($_SESSION['user_type'] == 3)
	{
		header('Location: operation_program.php');
    	exit();
	}
	else if ($_SESSION['user_type'] == 4)
	{
		header('Location: diet_program.php');
    	exit();
	}
	else if ($_SESSION['user_type'] == 5)
	{
		header('Location: lab.php');
    	exit();
	}
    	else if ($_SESSION['user_type'] == 6)
	{
		header('Location: admin.php');
    	exit();             
	}
     
    }
    
    
 else {
    
echo "<script type='text/javascript'>
var wrong_user = document.getElementById('username');
var wrong_pass = document.getElementById('password');
wrong_user.classList.add('wrong');
wrong_pass.classList.add('wrong');
</script>";
     
}
         
}


?>