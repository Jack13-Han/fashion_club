<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
		include '../admins/connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Fashion Club an Ecommerce Online Shopping</title>
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
<?php
    include 'header.php';
?>
<div class="sub-banner">
</div>
<div class="contact">
	<div class="container">
		<h3>Contact Us</h3>
		<div class="col-md-3 col-sm-3 contact-left">
			<div class="address">
				<h4>ADDRESS</h4>
				<h5>No (40)</h5>
				<h5>Tha Htone Road,</h5>
				<h5>Yangon. Myanmar.</h5>
			</div>
			<div class="phone">
				<h4>PHONE</h4>
				<h5>+959767072571.</h5>
				<h5>+959426493854.</h5>
			</div>
			<div class="email">
				<h4>EMAIL</h4>
				<h5><a href="#">hanwaihtun1e@gmail.com</a></h5>
				<h5><a href="#">heinhtetaung@gmail.com</a></h5>
			</div>
		</div>
		<div class="col-md-9 col-sm-9 contact-right">
			<form action="save.php" method="post">
				<input type="text" name="name" placeholder="name" required=" ">
				<input type="text" name="email" placeholder="email" required=" ">
				<input type="text" name="subject" placeholder="subject" required=" ">
				<input type="text" name="phone" placeholder="Phone number" required=" ">
				<textarea  name="message" placeholder="message" required=" "></textarea>
				<input type="submit" value="Send message">
			</form>
		</div>
	</div>
</div>
<!-- <div class="map-w3ls"> -->
		<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.1172791497565!2d96.13390091395912!3d16.82053698842064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb4b4df1d7e7%3A0x759e5214ac44328a!2z4YCh4YCd4YCx4YC44YCe4YCE4YC64YCQ4YCA4YC54YCA4YCe4YCt4YCv4YCc4YC6!5e0!3m2!1smy!2smm!4v1593501012886!5m2!1smy!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
<!-- </div> -->
<!-- newsletter -->

<?php
		include 'footer.php';
?>
	 
</body>
</html>
