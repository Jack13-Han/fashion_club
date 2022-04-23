<?php
include 'connect.php';
$id=$_GET['id'];
$status=$_GET['status'];
if($status==1){
	$query="update orders set status=1,send_date=now() where order_id='$id'";
	$go_update=mysqli_query($connection,$query);
	header("location:order_management.php");
}else{
	$query="update orders set status=0,send_date='null' where order_id='$id'";
	$go_update=mysqli_query($connection,$query);
	header("location:order_management.php");
}
	

?>