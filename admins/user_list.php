<?php

	include'connect.php';
	include'function.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FC Admin User List</title>



<!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>


<?php
	if(isset($_GET['action'])&&$_GET['action']=='delete')
		{
			del_user();	
		}
?>


  



<div class="container">
    <div class="row">
    	<div class="col-md-12">
        <table class="table table-striped">
        	<tr>
            
            	<td colspan="4" align="right"><a href="add_user.php" class="btn btn-danger"><span class="glyphicon glyphicon-plus"></span>Add user</a>
                <a href="index.php" class="btn btn-danger"><span class="glyphicon glyphicon-plus"></span>Back</a>


              </td>

            </tr>


            <tr>
            	<th>User ID</th>
                <th>User Name</th>
                <th>User Phone Number</th>
                <th>Action</th>
            </tr>
            <?php
            $query="select * from user order by user_id desc";
				$go_query=mysqli_query($connection,$query);
				while($row=mysqli_fetch_array($go_query))
					{
						$user_id=$row['user_id'];
						$user_name=$row['user_name'];
						$user_role=$row['phone'];
						echo"<tr>";
						echo"<td>{$user_id}</td>";
						echo"<td>$user_name</td>";
						echo"<td>{$user_role}</td>"	;
						echo"<td><a href='user_list.php?action=delete&id={$user_id}' class='glyphicon glyphicon-trash' onclick=\"return confirm('Are you sure')\">Delete</a></td>";
						echo"</tr>";
					} 
			?>
        </table>
   </div>
   
   </div>
   </div>
</div>                      
        
        <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; DWD(38) Boy Project.</span>
          </div>
        </div>
      </footer>


</body>
</html>