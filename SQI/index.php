<?php 
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
if (isset($_SESSION['error'])) {
    echo"<h1>".$_SESSION['error']."</h1>";
    unset($_SESSION['error']);
}
?>
    <form action="process.php" method="post">
        <input type="text" name="name" >
        <input type="email" name="email">
        <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>