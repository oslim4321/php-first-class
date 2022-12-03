<?php 
session_start();


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if (isset($_SESSION['name']) || isset($_SESSION['email'])) {
        // echo "<h4>". $_SESSION['error']. "</h4>";
        echo $_SESSION['name'] . '<br/>' . $_SESSION['email'];
        unset($_SESSION['name']);
        unset($_SESSION['email']);
    }
    
    // if (isset($_SESSION['name'])) {
    //     echo $_SESSION['name'];
    //     unset($_SESSION['name']);

    // }elseif(isset($_SESSION['email'])){
    //     echo $_SESSION['email'];
    //     unset($_SESSION['email']);
    // }
    ?>
    
<form action="process.php" method="post">
    <h1>My test</h1>
    <input type="text" name='name'>
    <input type="email" name="email" id="">
    <button type="post" name='submit'>Submit</button>
</form>

</body>
</html>