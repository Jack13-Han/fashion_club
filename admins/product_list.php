<?php

global $connection;
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

  <title>FC Admin Product List</title>

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
        <div class="container-fluid">

          <!-- 404 Error Text -->
          <div class="row">
    <table class="table table-striped">
  <tr>
    <td colspan="8"><a href="product.php" class="btn btn-success"> <span class="glyphicon  glyphicon-plus "></span>Add product</a>  </td>
    </tr>
  <tr>
    <td>photo</td>
    <td>productid</td>
    <td>productname</td>
    <td>categoryname</td>
    <!-- <td>Type</td> -->
    <td>price</td>
    <td>quantity</td>
    <td>action</td>
  </tr>
  
  <?php
  if(isset($_GET['action'])&&$_GET['action']=='delete')
  {
	  del_product();
  }

     $query="select product.*,category.* from product,category where product.category_id=category.cat_id order by product_id desc
     ";
    
	 $go_query=mysqli_query($connection,$query,);
	 while($row=mysqli_fetch_array($go_query)){
    		 $product_id=$row['product_id'];
    		 $product_name=$row['product_name'];
         $cat_name=$row['cat_name'];   
    		 $price=$row['price'];
    		 $qty=$row['qty'];
    		 $photo=$row['photo'];
		 
		 echo "<tr>";
		 echo "<td><img src='../image/{$photo}' width='100' height='100'></td>";
		 echo "<td>{$product_id}</td>";
		 echo "<td>{$product_name}</td>";
      echo "<td>{$cat_name}</td>";
		 echo "<td>{$price}</td>";
		 echo "<td>{$qty}</td>";
		 echo "<td><a href='product_list.php?action=delete&p_id={$product_id}' class='fa fa-trash-alt' onclick=\"return confirm('Are you sure?')\"></a>||
		 <a href='edit.php?action=edit&p_id={$product_id}' class='fa fa-edit'></a>
		 </td>";
		 echo "</tr>";
	 }
  ?>
</table>

    </div>
        <!-- /.container-fluid -->

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
