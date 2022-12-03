<?php  session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Seleem PHP class</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-5">
		<div class="card p-5">
			<?php
				include('message.php');
			       ?>
			       <h1>Login</h1>
			<form action="loginprocess.php" method="POST">
		
		<div class="form-group">
			<label>Email</label>
			<input class="form-control" type="text" name="email">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input class="form-control" type="text" name="password">
		</div>
		<button class="btn btn-primary" type="submit">Submit</button>
		
	</form>
		</div>
	</div>
</body>
</html>