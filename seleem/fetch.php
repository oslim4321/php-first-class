<?php

require'dbcon.php';

$sql="SELECT * FROM users";
$find=mysqli_query($conn,$sql);
$all=[];
while ($users=mysqli_fetch_assoc($find)) {
	$all[]=$users;

}

?>