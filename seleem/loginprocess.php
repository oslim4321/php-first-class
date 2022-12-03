<?php
require'dbcon.php';
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM users where email='$email'";

$user=mysqli_query($conn,$sql);
$user=mysqli_fetch_assoc($user);

if (password_verify($password, $user['password'])) {
		$_SESSION['success']='Your in now!!!';
		$_SESSION['uid']=$user['user_id'];
		$_SESSION['name']=$user['name'];
		header("location:dashboard.php");
		return;
}

else{
	$_SESSION['error']='Invalid login details';
	
}

header("location:login.php");

// echo json_encode($user);


?>