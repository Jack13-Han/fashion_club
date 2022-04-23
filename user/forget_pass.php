
<?php 

	session_start();
		include'../admins/connect.php';
		include'../admins/function.php';



	if (isset($_POST['forget_pass_btn'])) {
 			$username=$_POST['user_name'];
 			$email=$_POST['email'];
 			$password=$_POST['password'];
 			$hpass = md5($password);
			$comfirm_password=$_POST['confirmpassword'];

			
				 $query="select * from user";
				 $go_query=mysqli_query($connection,$query);
				while($out=mysqli_fetch_array($go_query)){
					$db_user_name=$out['user_name'];
					$db_email=$out['email'];

			      

			      if ($db_user_name!=$username) {
          
						echo "<script>window.alert('Please check your information.')</script>";

           }

           elseif ($db_email!=$email) {
						echo "<script>window.alert('Please check your information.')</script>";
           }
			elseif($password != $comfirm_password) {
				
				echo "<script>window.alert('password dose not match !')</script>";
			}

			elseif ($password=='') {
				echo "<script>window.alert('Password must be enter !')</script>";
			}
			
           elseif($password != $comfirm_password) {
				
				echo "<script>window.alert('password dose not match !')</script>";
			}
           else{
						
				 $query="update user set password='$hpass' where user_name='$username' && email='$email'";
				 $go_query=mysqli_query($connection,$query);
				 if(!$go_query)
								{
									die("QUERY FAILED".mysqli_error($connection));
								}
							
				 echo "<script>window.alert('updated successfully')</script>";
				 echo"<script>window.location.href='login.php'</script>";


				}}

 		}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forget Password</title>
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
					<h3>Forget Password</h3>
					<form  method="post">
						
						
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input type="text" name="user_name" placeholder="Username" class="form-control">
							<div class="clearfix"></div>
						</div>

						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input type="text" name="email" placeholder="Enter Email" class="form-control">
							<div class="clearfix"></div>
                    	</div>
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
						

						<button type="submit" name="forget_pass_btn" class="btn btn-primary">Confirm</button>
					&nbsp;&nbsp;	<button type="" class="btn btn-primary" name="cancel">Cancel</button>

					</form>
				</div>
				
			</div>
		</div>


</body>
</html>