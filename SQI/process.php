<?php
session_start();


if (!isset($_POST['submit'])) {
    echo "Unknown action";
    exit;
}

$email= $_POST['email'];
$name=  $_POST['name'];
if ((isset($email) && !empty($email)) && (isset($name)&& !empty($name))) {
    echo "Success!!!!!!";
}

else{
    echo "INvalid request";
    $_SESSION['error']='Please enter all inputs';
    header('location:index.php');
}

?>