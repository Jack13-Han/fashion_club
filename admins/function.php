		<?php
function add_user()
		{
			global $connection;
			$admin_name=$_POST['admin_name'];
			$password=$_POST['password'];
			$cpass=$_POST['comfirmpassword'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$address=$_POST['address'];
			if($password!=$cpass)
				{
					echo"<script>window.alert('Password and Comfirmpassword are must be same')</script>";
				}
			else if($admin_name!='' && $password!=''  && $email!='' && $phone!='' && $address!='')
				{	
					$query="select * from admin where admin_name='$admin_name' and password=md5('$password') and email='$email' and phone='$phone' and address='$address'";
					$ch_query=mysqli_query($connection,$query);
					$count=mysqli_fetch_array($ch_query);
					if($count>0)
						{
						
							echo"<script>window.alert('This user is already exists')</script>";
						}
					else
						{$hashvalue=md5($password);
							$query="insert into  admin(admin_name,password,email,phone,address)";
							$query.="values('$admin_name','$hashvalue','$email','$phone','$address')";
							$go_query=mysqli_query($connection,$query);
							if(!$go_query)
								{
									die("QUERY FAILED".mysqli_error($connection));
								}
								echo "<script>window.location.href='login.php'</script>";
					}
				}
		}






		function del_user()
			{
				global $connection;
				$u_id=$_GET['id'];
				$query="delete from user where user_id='$u_id'";
				$go_query=mysqli_query($connection,$query);
				header("location:user_list.php");	
			}
?>

<?php
	function insert_category()
		{
			global $connection;
				$cat_name=$_POST['cat_name'];
			if($cat_name=="")
				{
					echo"<script>window.alert('enter name')</script>";
				}
			else if($cat_name!="")
				{
					$query="select *from category where cat_name='$cat_name'";
					$ch_query=mysqli_query($connection,$query);
					$count=mysqli_num_rows($ch_query);
						if($count>0)
							{
						 
								echo"<script>window.alert('already exists')</script>";
							}
					else
						{
							$query="insert into category(cat_name)values('$cat_name')";
							$go_query=mysqli_query($connection,$query);
								if(!$go_query)
									{
										die("QUERY FAILED".mysqli_error($connection));
									}
								else
									{
										echo"<script>window.alert('successfully inserted')</script>";
										echo"<script>window.location.href='category_list.php'</script>";
									}
						}
				}
		}
		
?>

<?php
	function add_product()
	{
		global $connection;
		$product_name=$_POST['product_name'];
		$cat_id=$_POST['category_id'];
		$id=$_POST['type_id'];
		$price=$_POST['price'];
		$qty=$_POST['qty'];
		$photo=$_FILES['photo']['name'];
		if(is_numeric($price)==false)
		{
			echo "<script>window.alert('enter product Price is numeric value')</script>";
		}
		else if(is_numeric($qty)==false)
		{
			echo "<script>window.alert('enter product qty is numeric value')</script>";
		}
		else if($photo=="")
		{
			echo "<script>window.alert('Choose product Images')</script>";
		}
		else if($product_name!=""&&$photo!="")
		{
			$query="select * from product where product_name='$product_name'";
			$ch_query=mysqli_query($connection,$query);
			$count=mysqli_num_rows($ch_query);
			if($count>0)
			{
				echo "<script>window.alert('This Product is already exists')</script>";
			}
			else
			{
				$query="insert into product(product_name,category_id,type_id,price,qty,photo)";
				$query.="values('$product_name','$cat_id','$id','$price','$qty','$photo')";
				$go_query=mysqli_query($connection,$query);
				if(!$go_query)
				{
					die ("QUERY FAILED".mysqli_error($connection));
				}
				else
				{
					move_uploaded_file($_FILES['photo']['tmp_name'],'../image/'.$photo);
					 echo "<script>window.location.href='product_list.php'</script>";
				}
			}
		}
	}

	function update_product()
	{
		global $connection;
		$product_id=$_GET['p_id'];
		$product_name=$_POST['product_name'];
		$cat_id=$_POST['category_id'];
		$t_id=$_POST['type_id'];
		$price=$_POST['price'];
		$qty=$_POST['qty'];
		$photo=$_FILES['photo']['name'];
		if(!$photo)
		{
			$query="update product set product_name='$product_name',category_id='$cat_id',type_id='$t_id',price='$price',qty='$qty' where product_id='$product_id'";
		}
		else
		{
			$query="update product set product_name='$product_name',category_id='$cat_id',type_id='$t_id',price='$price',qty='$qty',photo='$photo' where product_id='$product_id'";
		}
		$go_query=mysqli_query($connection,$query);
		if(!$go_query)
		{
			die("QUERY FAILED".mysqli_error($connection));
		}
		else
		{
			move_uploaded_file($_FILES['photo']['tmp_name'],'../image/'.$photo);
		}
		echo "<script>window.location.href='product_list.php'</script>";
	}

	function del_product()
	{
		global $connection;
		$p_id=$_GET['p_id'];
		$query="delete from product where product_id='$p_id'";
		$go_query=mysqli_query($connection,$query);
		echo "<script>window.location.href='product_list.php'</script>";
	}
	function del_cat()
	{
		global $connection;
		$c_id=$_GET['c_id'];
		$query="delete from category where cat_id='$c_id'";
		$go_query=mysqli_query($connection,$query);
		header("location:category_list.php");
	}
?>




<?php
	function admin_login()
	{
	global $connection;
$name=$_POST['name'];
$password=$_POST['password'];
$haspass=md5($password);
$query="select * from admin";
$go_query=mysqli_query($connection,$query);
while ($out=mysqli_fetch_array($go_query)) {
  $db_name=$out['name'];
  $db_password=$out['password'];
  if ($db_name==$name && $db_password==$haspass)
  {
  				$_SESSION['admin']=$name;
  				header('location:index.php');
  			}
  			else
  			{
  				echo "<script>window.alert('Invalid Name and Password')</script>";
  				echo "<script>window.location.href='login.php'</script>";
  			}
}
}




	
	function create_accu(){
		global $connection;
		global $user_name;
		global $password;
		global $email;
		global $phone;
		global $address;

		$hpass=md5($password);
		$query=" select* from user where user_name='$user_name' and password='$hpass'";
		$user_query=mysqli_query($connection,$query);
		$count=mysqli_num_rows($user_query);
				if($count>0){
				echo "<script>window.alert('already exists')</script>";
					}
				else{
					$query="insert into user(user_name,password,email,phone,address)";
					$query.="values('$user_name','$hpass','$email','$phone','$address')";
					$go_query=mysqli_query($connection,$query);
					if(!$go_query){
						die("QUERY FAILED".mysqli_error($connection));
					}
					else
					{echo"<script>window.alert('you successfully created an accuount')</script>";
					header("location:login.php");

					}

					}

			}

			


			function update_type()
		{
			global $connection;
			$cat_name=$_POST['type'];
			$cat_id=$_GET['id'];
			$query="update type set type='$cat_name' where id='$cat_id'";
			$go_query=mysqli_query($connection,$query);
			if(!$go_query)
			{
				die("QUERY FAIED".mysqli_eror($connection));
			}
			header("location:type_list.php");
		}





		function del_type()
	{
		global $connection;
		$c_id=$_GET['id'];
		$query="delete from type where id='$c_id'";
		$go_query=mysqli_query($connection,$query);
		header("location:type_list.php");
	}



	function insert_type()
		{
			global $connection;
			global $msg;
			$cat_name=$_POST['type'];
			if($cat_name=="")
				{
					echo"<script>window.alert('enter name')</script>";
				}
			else if($cat_name!="")
				{
					$query="select *from type where type='$cat_name'";
					$ch_query=mysqli_query($connection,$query);
					$count=mysqli_num_rows($ch_query);
						if($count>0)
							{
								echo"<script>window.alert('already exists')</script>";
							}
					else
						{
							$query="insert into type(type)values('$cat_name')";
							$go_query=mysqli_query($connection,$query);
								if(!$go_query)
									{
										die("QUERY FAILED".mysqli_error($connection));
									}
								else
									{
										echo"<script>window.alert('successfully inserted')</script>";
										echo"<script>window.location.href='type_list.php'</script>";
									}
						}
				}
		}


?>

<?php 
	global $connection;
	if (isset($_POST['cancel'])) {
		header("location:login.php");
	}

 ?>


<?php 

	function change_pass()
		{
			global $connection;
			$password=$_POST['password'];
			$comfirm_password=$_POST['confirmpassword'];
			if ($password != $comfirm_password) {
				# code...
				echo "<script>window.alert('password dose not match !')</script>";
			}else
			{
				echo "<script>window.alert('$username')</script>";
			 
		}
    }
     

		function update_category()
		{
			global $connection;
			$cat_name=$_POST['cat_name'];
			$cat_id=$_GET['c_id'];
			$query="update category set cat_name='$cat_name' where cat_id='$cat_id'";
			$go_query=mysqli_query($connection,$query);
			if(!$go_query)
			{
				die("QUERY FAIED".mysqli_eror($connection));
			}
			header("location:category_list.php");
		}




 ?>
<?php

function send_message()
	{
		global $connection;
		$user_name=$_POST['user_name'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];
		if($user_name=="" and $phone=="" and $email=="" and $subject=="" and $message=="")
			{
				echo"<script>window.alert('Please Enter')</script>";
			}
		else if($user_name!="")
			{
				$query="select *from contact_us where user_name='$user_name' and email='$email' and phone='$phone' and subject='$subject' and message='$message'";
				$ch_query=mysqli_query($connection,$query);
				$count=mysqli_num_rows($ch_query);
						$query="insert into contact_us(user_name,email,phone,subject,message)values('$user_name','$email','$phone','$subject','$message')";
						$go_query=mysqli_query($connection,$query);
							if(!$go_query)
								{
									die("QUERY FAILED".mysqli_error($connection));
								}
							else
								{
									echo"<script>window.alert('successfully inserted')</script>";
									echo"<script>window.location.href='contact_us.php'</script>";
								}
					}
			}

			function del_noti()
				{
					global $connection;
					$c_id=$_GET['id'];
					$query="delete from contact where id='$c_id'";
					$go_query=mysqli_query($connection,$query);
					header("location:noti.php");
				}

 ?>
