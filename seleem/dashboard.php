<?php  session_start();
if (!isset($_SESSION['uid']) || empty($_SESSION['uid'])) {
	header('location:login.php');
	return;
}

include('fetch.php');

// echo json_encode($all);

?>
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
		<a href="logout.php">Logout</a>
		
		<h1 class="text-center well bg-light">Welcome <?php echo $_SESSION['name']; ?></h1>

		<div class="">
			<table class="table table-striped">
				<tbody>
				<?php 
				// 	for ($i=0; $i <count($all) ; $i++) { 
				// 		echo"
				// 		<tr>
				// 	<td>".$all[$i]['name']."</td>
				// 	<td>".$all[$i]['email']."</td>
				// 	<td></td>
				// 	<td></td>
				// </tr>
				// 		";
				// 	}
					foreach ($all as  $value) {
						echo"
						<tr>
					<td>".$value['name']."</td>
					<td>".$value['email']."</td>
					<td></td>
					<td></td>
				</tr>
						";
					}

				 ?>
			</tbody>
			</table>
		</div>
	</div>
</body>
</html>