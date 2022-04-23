<?php
  include'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FC Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
   <style>
main{

  background-image: url(../image/1.jpg);
  background-size: cover;
  font-family: monospace;
  color: white;
  background-position: center;
  background-attachment: fixed;
}
label{
    font-size: 16px;
    font-weight: normal;
}
.form-control{
  background: transparent;
  border: 0px;
  border-radius: 0px;
  border-bottom: 2px solid white;
  font-size: 15px;
  color: white;
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
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <?php
include 'sidebar.php';

?>

       <div class="container">


          <?php
            include 'register.php';
          ?>
         </div>

      <!-- Footer -->
     <?php
            include 'footer.php';
     ?>
      <!-- End of Footer -->


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
