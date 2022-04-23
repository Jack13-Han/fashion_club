  <?php

  include 'connect.php';
  include 'function.php';
  $orders=mysqli_query($connection,"select * from orders order by order_id desc");
  ?>
   
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FC Admin Order Management</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>
<?php include 'sidebar.php' ?>
 
        
        
            
                 <div >
                    <h1 class="text-center">Welcome
                     <span class="">
                         <?php 
                             if(!empty($_SESSION['USER'])){
                                echo $_SESSION['USER'];
                             }
                             else{
                               $_SESSION['USER']='';
                             }
                           ?>
                     </span>
                    </h1>
                    </div>
            

                                         
                      <table class="table table-hover">
                             
                                <div >         
                                  <tr>
                                    <td>No</td>
                                    <td>Customer Name</td>
                                    <td>Phone</td>
                                    <td>Delivery Address</td>
                                    <td>Item(s)</td>
                                    <td>Ordered_Date</td>
                                    <td>Sended_Date</td>
                                    <td>Action</td>
                                  </tr>
                                </div> 
                              
                              
                              <?php while($out=mysqli_fetch_array($orders)){
                                $check=$out['status'];
                                {
                                  if($check>0){
                                    $show='<tr class="mark">';
                                  }
                                    else{
                                   $show='<tr>';
                                    }
                                       $show.='<td>'.$out['order_id'].'</td>';
                                   $show.='<td>'.$out['delivery_name'].'</td>';  
                                   $show.='<td>'.$out['delivery_phone'].'</td>';   
                                   $show.='<td>'.$out['delivery_address'].'</td>';
                                   $show.='<td>';
                                   $orderid=$out['order_id'];
                                $order=mysqli_query($connection,"select order_detail.*,product.* from order_detail left join product on order_detail.product_id=product.product_id where order_detail.order_id='$orderid'");
                                                   while($row=mysqli_fetch_assoc($order)){
                                                     $show.='<ul><li>'.$row['product_name'].'<span style="color:red;">
                                                     ['.$row['product_qty'].']</span></li></ul>';}
                                                  $show.='</td>';
                                                  $show.='<td>'.$out['order_date'].'</td>';
                                                  
                                                  $chesec=$out['status'];
                                                  if($chesec>0)
                                                  {$show.='<td>'.$out['send_date'].'</td>';}
                                                  else{
                                                    $show.='<td>----/--/--</td>';}
                                                    
                                                    if($out['status']){
                                        $show.='<td><a href="status.php?id='.$out['order_id'].'&status=0" class="btn btn-danger">
                                        Undo</a></td>';}
                                        else{ $show.='<td><a href="status.php?id='.$out['order_id'].'&status=1" class="btn btn-success">
                                        Mark as Delivered</a></td>';}
                                        $show.='</tr>';
                                        echo $show; }
                              }
                                        
                                        
                                        
                                        
                                        ?>
                               
                                
                                                      
                                                    
                                                    
                                                    
                                                    </table>

                                         
                                         
                                         
                                        
           
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
