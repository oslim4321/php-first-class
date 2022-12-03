<?php
session_start();
require"dbcon.php";
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$password=password_hash($password, PASSWORD_DEFAULT);
	
$sql="INSERT INTO users (name,email,password) values('$name','$email','$password')";
$found=mysqli_query($conn,"SELECT email from users where email='$email'");
	
if (mysqli_num_rows($found)>=1) {
	 $_SESSION['error']="email already used";
	 header('location:index.php');
	return;
}
$save=mysqli_query($conn,$sql);

if ($save) {
	 $_SESSION['success']="You account has been registered!";
	  header('location:login.php');
}else{
	 echo mysqli_error($conn);
}

?>