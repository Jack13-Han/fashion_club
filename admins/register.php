<?php 
  include 'connect.php';
  include 'function.php';
 ?>
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
<main >

        <?php
          if(isset($_POST['add_user']))
            {
              add_user();
            }
        ?>
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
        
<div class="container">

      <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6" id="black">
          <div class="text-center">
            <h5>Create Your Admin Account<br>
       </h5>
          </div>
          <form method="post">
              <div class="form-group">
              <label>User Name</label>
              <input type="text" name="admin_name" class="form-control" placeholder="Enter Your Admin Name"  />
              </div>
              <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" placeholder="Enter Your Admin Password" />
              </div>
              <div class="form-group">
              <label>Confirm Password</label>
              <input type="password" name="cpassword" class="form-control" placeholder="Enter Your Admin Comfirm Password" />
              </div>
              <div class="form-group">
              <label>E-mail</label>
              <input type="email" name="email" class="form-control" placeholder="Enter Your Admin E-mail" />
              </div>
              <div class="form-group">
              <label>Phone</label>
              <input type="type" name="phone" class="form-control" placeholder="Enter Your Admin Phone" />
              </div>
              <div class="form-group">
                  <label>Address</label>
                  <textarea class="form-control"  name="address" placeholder="Enter Your Admin Address"></textarea>
              </div>
              <div class="text-center">
                  <button type="submit" name="add_user" class="btn btn-success btn btn-block">Submit</button>
              <div>

                <div class="text-center" style="padding-top: 10px;">
                    <a  href="login.php" style="color: white;">  Are You have an Account! Please Login</a>
                  </div>
          </form>
     </div>
     <div class="col-xs-3 col-md-3 col-xs-3">
     </div>
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

</main>


