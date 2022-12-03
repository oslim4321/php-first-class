<?php
    session_start();
    $userdata = $_SESSION['details'];
    //  echo json_encode($userdata);
    //  echo $userdata['name'];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> hi <?php echo $userdata['name'] ?> This is your Dashboard</h3>
</body>
</html>