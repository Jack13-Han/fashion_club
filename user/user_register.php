<?php
	session_start();
	include'../admins/connect.php';
	include'../admins/function.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

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
<style>
      body{
        background-image: url(../image/form.jpg);
        background-size: cover;
        font-family: monospace;
				color: black;
        position: absolute;

      }
      label{
          font-size: 16px;
          font-weight: normal;
      }
      .form-control{
        background: transparent;
        border: 0px;
        border-radius: 0px;
        border-bottom: 2px solid #F1604F;
        font-size: 15px;
      ;
      }
			h5{
				margin-top: 30px;
			}
			#black{
				margin-top: 10px;
				background: rgba(0, 0, 1, 0.1);
				border-radius: 20px;
			}
  </style>
<body>
<?php
	if(isset($_POST['add_user']))
		{
			add_user();
		}
?>
<div class="container">

        <div class="col-md-12 col-xs-12 col-sm-12">
    			<div class="row">
        <div class="page-header">
        <span class="text-danger">
        <?php
			if(isset($_SESSION['admin']))
			{
				echo $_SESSION['admin'];
			}
			else
			{
				$_SESSION['admin']='';
			}
		?>
        </span>
    </div>
    </div>

    <div class="row">
			<div class="col-md-3">
			</div>
    	<div class="col-md-6" id="black">
				<div class="text-center">
					<h5>Create your Member profile and get first<br>
	   access to the very best of Fashion, inspiration<br> and community.</h5>
				</div>
        <form method="post">
        	  <div class="form-group">
            <label>User Name</label>
            <input type="text" name="user_name" class="form-control" required="required" />
            </div>
            <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required="required" />
            </div>
            <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="comfirmpassword" class="form-control" required="required" />
            </div>
            <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="email" class="form-control" required="required" />
            </div>
            <div class="form-group">
            <label>Phone</label>
            <input type="type" name="phone" class="form-control" required="required" />
            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea class="form-control" required="required" name="address"></textarea>
            </div>
            <div class="form-group">
            <label>User Type</label>
            <select name="usertype" class="form-control">
            	<option value="admin">---Admin---</option>
                <option value="user">---User---</option>
            </select>
						</div>
						<div class="text-center">
    						<button type="submit" name="add_user" class="btn btn-danger">Submit</button>
						<div>
				</form>
   </div>
	 <div class="col-xs-3 col-md-3 col-xs-3">
	 </div>
 </div>

	 </div>
   </div>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
</body>
</html>
