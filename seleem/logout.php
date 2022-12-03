<?php  
session_start();
if (!isset($_SESSION['uid']) || empty($_SESSION['uid'])) {
	header('location:login.php');
	return ;

}

unset($_SESSION['uid']);
session_destroy();
header('location:login.php');
?>