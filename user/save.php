<?php
include '../admins/connect.php';
$aung=$_POST['name'];
$min=$_POST['email'];
$htun=$_POST['subject'];
$ia=$_POST['phone'];
$ya=$_POST['message'];

$query="insert into contact (name,email,subject,phone,message)";
$query.="values ('$aung','$min','$htun','$ia','$ya')";
 $go_query=mysqli_query($connection,$query);
 if(!$go_query){
     die("QUERY FAILED".mysqli_error($connection));
 }
 else
 {
     echo "<script>window.alert('you successfully Send Message')</script>";
     echo"<script>window.location.href='index.php'</script>";
 }
 

?>