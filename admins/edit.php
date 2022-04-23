<?php
    include 'connect.php';
    include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <?php
include 'sidebar.php';
  ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        
        <?php
	if(isset($_POST['update_product']))
	{
		update_product();
	}
?>

<?php
	if(isset($_GET['action'])&&$_GET['action']=='edit')
	{
		$p_id=$_GET['p_id'];
		$query="select * from product where product_id='$p_id'";
		$go_query=mysqli_query($connection,$query);
		while($row=mysqli_fetch_array($go_query))
		{
			$product_id=$row['product_id'];
			$product_name=$row['product_name'];
      $product_cat_id=$row['category_id'];
      $t_d=$row['type_id'];
			$price=$row['price'];
			$qty=$row['qty'];
			$photo=$row['photo'];
		}
	}
?>

<div class="container">
	<div class="row">
    	<div class="col-6 offset-3">
        	<form method="post" enctype="multipart/form-data">
            	<div class="form-group">
                	<label>Product Name</label>
                    <input type="text" name="product_name" class="form-control" value="<?php echo $product_name ?>" />
                </div>
                <div class="form-group">
                	<label>Category Name</label>
                    <select name="category_id" class="form-control">
                    	<?php
							$query="select * from category";
							$go_query=mysqli_query($connection,$query);
							while($row=mysqli_fetch_array($go_query))
							{
								$cat_id=$row['cat_id'];
								$cat_name=$row['cat_name'];
								if($product_cat_id==$cat_id)
								{
									echo "<option value={$cat_id} selected>{$cat_name}</option>";
								}
								else
								{
									echo "<option value={$cat_id}>{$cat_name}</option>";
								}
							}
						?>
                    </select>
                </div>
                <div class="form-group">
                	<label>Type</label>
                    <select name="type_id" class="form-control">
                    	<?php
							$query="select * from type";
							$go_query=mysqli_query($connection,$query);
							while($row=mysqli_fetch_array($go_query))
							{
								$id=$row['id'];
								$type=$row['type'];
								if($t_id==$id)
								{
									echo "<option value={$id} selected>{$type}</option>";
								}
								else
								{
									echo "<option value={$id}>{$type}</option>";
								}
							}
						?>
                    </select>
                </div>
                <div class="form-group">
                	<label>Price</label>
                    <input type="text" name="price" class="form-control" value="<?php echo $price ?>" />
                </div>
                <div class="form-group">
                	<label>Quantity</label>
                    <input type="text" name="qty" class="form-control" value="<?php echo $qty ?>" />
                </div>
                <div class="form-group">
                	<label>File input</label>
                    <input name="photo" type="file" />
                    <img src="../image/<?php echo $photo ?>" width=100 height=100 />
                </div>
                <input name="update_product" type="submit" value="Update Product" class="btn btn-primary" />
            </form>
            
        </div>
    </div>
</div>                     
            
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php
        include 'footer.php';
      ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
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
