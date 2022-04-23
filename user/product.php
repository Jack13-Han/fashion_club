
<?php
  session_start();
  include '../admins/connect.php';
  $id = $_GET['id'];
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
	<!--start header -->
	 <?php
      include 'header.php';
	 ?> 
	 <!--end header -->
<div class="sub-banner my-banner2">
</div>
<div class="content">
   <div class="container">
		<div class="col-md-12 col-sm-12 women-dresses">
			<div class="women-set1">
				<?php 
                    $query = "select * from product where category_id='$id'" ;
                    $go_query= mysqli_query($connection,$query);
                    $count=mysqli_num_rows($go_query);
                    if ($count == 0) {
                    	 ?>
                    	  <div class="well">
                    	  	  <div class="alert alert-danger d-flex justify-content-center text-center">NO ITEMS</div>
                    	  </div>
                    	 <?php 
                    }

                    else{
                    while ($products= mysqli_fetch_assoc($go_query)) {
                    	$photo = $products['photo'];
                    	
                    
				?>








				<div class="col-md-4 women-grids wp1 animated wow slideInUp" data-wow-delay=".5s">
					<a href="cart.php"><div class="product-img">
						<img src="../image/<?php echo $photo ?>" alt="" />
						<div class="p-mask">
								<a href="add_to_cart.php?id=<?php echo $products['product_id'] ?>">
								<button class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</a>
						</div>
					</div></a>
					<h4><?php echo $products['product_name'] ?></h4>
					<h5>$<?php echo $products['price']?></h5>
				</div>
			<?php }
			} ?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	</div>
</div>

  <?php
    include 'footer.php'
  ?>
</body>
</html>
