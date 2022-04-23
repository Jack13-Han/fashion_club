<?php 
	session_start();
	include '../admins/connect.php';
	include '../admins/function.php';
	$order_id=$_SESSION['order_id'];
	
	
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
<?php include 'header.php' ?>
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
						   
					   }
					 ?>
                 </span>
                </h3>
                <p class="text-center lead">&nbsp;&nbsp;&nbsp; You successfully sumitted the following product.Thank for your shoppping here</p>
             </div>
             </div>
             
<div class="row">

        
          <table>
            <tr>
                  <td>&nbsp;
                  <?php
              		$query="select * from orders where order_id='$order_id'";
              		$go_query=mysqli_query($connection,$query);
              		while($out=mysqli_fetch_array($go_query))
              		{
              			$db_name=$out['delivery_name'];
              			$db_phone=$out['delivery_phone'];
              			$db_address=$out['delivery_address'];
              		}
              	
              	?>
                  <div class="panel panel-default">
                  <div class="panel-heading">
                  <h3><span class="glyphicon glyphicon-envelope"></span>Customer Information</h3>
                  </div>
                  <div class="panel-body pull-left">
                  <p><span class="glyphicon glyphicon-user"></span>Customer Name=<?php echo $db_name; ?></p>
                  <p><span class="glyphicon glyphicon-phone"></span>Customer Phone=<?php echo $db_phone; ?></p>
                  <p><span class="glyphicon glyphicon-home"></span>Customer Address=<?php echo $db_address ;?></p>
                  </div>
                  </div></td>
                  <td>&nbsp;

              </td>
                </tr>
           </table>
        


        <table class="table table-striped ">
              <tr>
                <td colspan="4">&nbsp; Order Information</td>
              </tr>

              <tr>
                <td>Product Name</td>
                <td>Product Price</td>
                <td>Product Qty</td>
                <td>Unit Price</td>
              </tr>
                <?php $total=0;
             		$query="select order_detail.*,product.* from order_detail left join product on order_detail.product_id=product.product_id where order_detail.order_id='$order_id'";
            		$go_query=mysqli_query($connection,$query);
            		while($out=mysqli_fetch_array($go_query))
            		{
            			$product_name=$out['product_name'];
            			$price=$out['price'];
            			$qty=$out['product_qty'];
            			$unit_price=$qty*$price;
            			$total+=$unit_price;
            			
            			echo "<tr>
            			<td>{$product_name}<br></td>
            			<td>{$price}<br></td>
            			<td>{$qty}<br></td>
            			<td>{$unit_price}</td>
            			</tr>";
            		}
          
          
               ?>



              <tr>
              	<td colspan="3" align="right">Total Amount is </td>
                <td><?php echo $total; ?></td>
              </tr>
          </table>

    


</div>

  <?php include 'footer.php' ?>
</body>
</html>
