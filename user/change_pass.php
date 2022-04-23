<?php 

	session_start();
		include'../admins/connect.php';
		include'../admins/function.php';



	if (isset($_POST['forget_pass_btn'])) {
 			$username=$_POST['user_name'];
 			$email=$_POST['email'];
 			
			

			$emails=$email;
				 $query="select *from user";
				 $go_query=mysqli_query($connection,$query);
				while($out=mysqli_fetch_array($go_query)){
					$db_user_name=$out['user_name'];
					$db_email=$out['email'];
					$db_user_role=$out['role'];
					if($db_user_name==$username & $db_email==$emails){
						$_SESSION['USER']=$username;
						
					}
					else{
						
						echo "<script>window.alert('Please check your information.')</script>";
						echo "<script>window.location.href='forget_pass.php'</script>";
					}
				}
 		}

 ?>



<?php 
   
	if (isset($_POST['pass_change_btn'])) {
		change_pass();
	}
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Password</title>
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
<body>


	<div class="login">
	
		<div class="main-agileits">
				<div class="form-w3agile">
					<h3>Change Password</h3>
					
					<form method="post">
						
						
						<div class="key">
							<i class="fa fa-unlock" aria-hidden="true"></i>
							<input  type="password" name="password"  placeholder="New password">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-unlock" aria-hidden="true"></i>
							<input  type="password" value="" name="confirmpassword" placeholder="Confirm Password">
							<div class="clearfix"></div>
						</div>
						<button type="submit" name="pass_change_btn" class="btn btn-primary">Confirm</button>
						<button type="" class="btn btn-primary" name="cancel">Cancel</button>

					</form>
					
				</div>
				
			</div>
		</div>



</body>
</html>