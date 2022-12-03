<?php

$conn = mysqli_connect('localhost', 'oslim', 'oslim123', 'oslim_pizza');
    
if (!$conn) {
    echo 'connection Error' . mysqli_connect_error();
}

?>