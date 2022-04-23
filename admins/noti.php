<?php

	include'connect.php';
	include'function.php';
?>


<?php
  if(isset($_GET['action'])&&$_GET['action']=='delete')
    {
      del_noti();
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FC Admin Notification </title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
  </head>
  <body>
    <?php
      include 'sidebar.php';
    ?>
  <div class="container">
    <div class="col-xs-12 col-md-12 col-sm-12">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Subject</th>
          <th>Message</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
$query="select *from contact order by id desc";
$go_query=mysqli_query($connection,$query);
$n=1;
while($row=mysqli_fetch_array($go_query))
{
$id=$row['id'];
$user_name=$row['name'];
$email=$row['email'];
$phone=$row['phone'];
$subject=$row['subject'];
$message=$row['message']
?>
        <tr>

          <td><?php echo $n++ ?></td>
          <td><?php echo $user_name ?></td>
          <td><?php echo $email ?></td>
          <td><?php echo $phone ?></td>
          <td><?php echo $subject ?></td>
          <td><?php echo $message ?></td>


          <td>
            <a href='noti.php?action=delete&id=<?php echo $cat_id ?>'>Delete</a>
           </td>

        </tr>
<?php } ?>
      </tbody>


    </table>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
  </div>
</div>
  </body>
</html>
