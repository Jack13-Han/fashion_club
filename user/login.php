<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php  
 session_start();
 include '../admins/connect.php';
 include '../admins/function.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Fashion Club an Ecommerce Online Shopping Category  Flat Bootstrap responsive Website Template | Login :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
<!--// css -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<?php
if(isset($_POST['login'])){
	global $connection;
	 $username= $_POST['username'];
	 $password=$_POST['password'];
	 $hpass=md5($password);
	$errors=array(
		'username'=>'',
		'password'=>''
		
		);
		if ($username==''){
			$errors['username']='This Field could not be empty';
		}
		if($password==''){
				$errors['password']='This field could not be empty';
		}
		 
				 $hpass=md5($password);
				 $query="select *from user";
				 $go_query=mysqli_query($connection,$query);
				while($out=mysqli_fetch_array($go_query))
				{
					$db_user_name=$out['user_name'];
					$db_password=$out['password'];
					
					if($db_user_name==$username & $db_password==$hpass){
						$_SESSION['USER']=$username;
						header('location:index.php');
					}
					else{
						
						echo "<script>window.alert('Invalid account,Please Try Later')</script>";
					}
					 
				}
	}
	 
						
					  
					 
?>

<body style="padding-top: 50px; background: #b2bec3;">

	<div class="login">
	
		<div class="main-agileits" style="background-color: #ecf0f1;">
				<div class="form-w3agile">
					<a href="index.php"><i class="fa fa-times text-danger" style="padding-left: 100%;"></i></a>
					<h3>Login</h3>
					<form method="post">
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input type="text" name="username"  placeholder="User Name">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input type="password" name="password" placeholder="Password">
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="Login" name="login">
					</form>
				</div>
				<div class="forg">
					<a href="forget_pass.php" class="forg-left">Forgot Password</a>
					<a href="register.php" class="forg-right">Register</a>
				<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- newsletter -->

</body>
</html>