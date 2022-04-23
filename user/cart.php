  
<?php
  session_start();
  include '../admins/connect.php';
  include '../admins/function.php';
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
<body>
	<!--start header -->
      <?php include 'header.php' ?>
	 <!--end header -->
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
            
             <div class="row">
             <div class="panel panel-success"> 
             <div class="panel-heading">
             <h2>Shopping Cart</h2>
             
             </div>
             <?php
			 if(!empty($_SESSION['cart'])):  ?>
           
             <div class=" panel-body">
             <table id="" class="table table-condensed" >
  <tr>
    <th>Photo</th>
   <th>Name</th>
   <th>Quantity</th>
   <th>Unit Price</th>
   <th>Price</th>
  <th>Action</th>
  </tr>
  <?php
		$total=0;
		foreach($_SESSION['cart'] as $id=>$qty):
		$result=mysqli_query($connection,"SELECT * FROM product WHERE product_id =$id");
		$row=mysqli_fetch_assoc($result);
		$total+=$row['price'] *$qty;
		
			 ?>
             <tr>
             <td>
             	<div class="img-responsive text-center">
             	<img src="../image/<?php echo $row['photo'] ?>" style="width: 100px; height: 100px"/>
                </div>
             </td>
             <td><?php echo $row['product_name'] ?></td>
             <td><?php echo $qty ?>
             <span>
             <a href="increase_qty.php? id=<?php echo $id ?>" class="glyphicon glyphicon-plus-sign"></a>
               <a href="decrease_qty.php?id=<?php echo $id ?>" class="glyphicon glyphicon-minus-sign"></a></span></td>


             <td><?php echo $row['price'] ?> </td>
			 <td><?php echo $row['price'] *$qty ?> </td>
             <td>
             <span style="margin:5px"></span>
              <a href="remove.php?id=<?php echo $id ?>" class="glyphicon glyphicon-remove"></a></td></tr>
              <?php endforeach; ?>
              <tr>
              <td colspan="5" align="right"><b>Total:</b></td>
              <td>$<?php echo $total; ?></td>
              </tr>
             
</table>
</div>

<div class="panel-footer text-center">
<a href="clear.php" class="btn btn-danger">Clear Cart</a>&nbsp;&nbsp;&nbsp;
<a href="index.php" class="btn btn-default">Back</a>&nbsp;&nbsp;&nbsp;
<a href="submit-order.php" class="btn btn-primary">Submit Order</a>&nbsp;
</div>

<?php else: ?>
<h3 class="text-danger lead text-center">You Select no products now!</h3>
<p class="text-center"><a href="index.php" class="btn btn-info">Shop Now</a></p>
<?php endif; ?>

             
			 
			 
		
			
             </div>
             </div>
             </div>
             </div>

              <?php include 'footer.php' ?>

</body>
</html>
