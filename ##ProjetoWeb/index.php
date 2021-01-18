<?php
	include ('confirmar.php');
	$status = $_GET['$status'];

	if($status == True){
		function_alert("Username ou Password errados");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="global.css" type="text/css"/>
</head>
<body>
	<div id="cabecalho">
		<h1>Login</h1>
	</div>

	<section>
		<form action="confirmar.php" method="POST">
			<div>
				<input type="text" placeholder="Username" id="user" name="user">
				<input type="password" placeholder="Password" id="pass" name="pass">
			</div>
			<div>
				<input type="submit" value="Login">
			</div>
		</form>

		<div>
			<form action="https://projetoweb190100210.000webhostapp.com/registar.php">
					<input type="submit" value="Registar">
			</form>
		</div>

	</section>
</body>
</html>