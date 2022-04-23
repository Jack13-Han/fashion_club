
<?php
  session_start();
  include '../admins/connect.php';
  include '../admins/function.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Fashion Club an Ecommerce Online Shopping Category  Flat Bootstrap responsive Website Template | Women :: w3layouts</title>
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

	if(!empty($_SESSION['USER']))
		{
			$user_name=$_SESSION['USER'];
			$query="select * from user where user_name='$user_name'";
			$go_query=mysqli_query($connection,$query);
			while($out=mysqli_fetch_array($go_query))
			{
				$user_id=$out['user_id'];
				$user_name=$out['user_name'];
				$email=$out['email'];
				$phone=$out['phone'];
				$address=$out['address'];
			}
		}
?>
<body>

     <div class="container CusTop">
     <div class="row">
       <div class="col-sm-12">
             <div class="well well-sm">
                <h3>Welcome
                 <span class="showname">
                     <?php
					   if(!empty($_SESSION['USER'])){
						    echo $_SESSION['USER'];

					   }
					   else{
						   $_SESSION['USER']='';
						   echo "no";
					   }
					 ?>
                 </span>
                </h3>
             </div>
             </div>

<div class="row">
<div class="col-md-6 col-md-offset-3">
<form action="submit.php" method="post">
<div class="form-group">
<label>User Name</label>
<input type="text" value="<?php if(isset($user_name)){echo $user_name;}?>" name="username" class="form-control" />
</div>

<div class="form-group">
<label>Email</label>
<input type="text" value="<?php if(isset($email)){echo $email;}?>" name="email" class="form-control" />
</div>

<div class="form-group">
<label>Phone</label>
<input type="text" value="<?php if(isset($phone)){echo $phone;}?>" name="phone" class="form-control" />
</div>

<div class="form-group">
<label>Address</label>
<textarea name="address" class="form-control">
<?php if(isset($address)){echo $address;}?>
</textarea>
</div>

<div class="form-group">
<label>Payment Type</label>
<select name="payment_type" class="form-control">
<option value="Master Card">Master Card</option>
<option value="Visa Card">Visa Card</option>
<option value="Credit Card">Credit Card</option>
</select>
</div>

<div class="form-group">
<label>CardNo:</label>
<input type="text" name="card" class="form-control" required />
</div>

<div class="form-group">
<input type="hidden" value="<?php echo $user_id ?>" name="user_id" />
<input type="submit" name="submit" value="Submit" class="btn btn-primary" />
</div>

</form>
</div>
</div>
</div>
</div>



</body>
</html>
