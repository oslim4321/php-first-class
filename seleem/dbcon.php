<?php



$server='localhost';
	$user='root';
	$password='';
	$db='tizzyclass';
	$conn=mysqli_connect($server,$user,$password,$db);
	if ($conn) {
		//  echo "Connected successfully !";
	}else{
echo "Connection error ";
	}

?>	