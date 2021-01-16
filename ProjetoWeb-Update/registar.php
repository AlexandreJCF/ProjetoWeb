<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registar</title>
	<link rel="stylesheet" href="global.css" type="text/css"/>
</head>
<body>
	<div id="cabecalho">
		<h1>Registar</h1>
	</div>

	<section>
		<form action="registarFunction.php" method="POST">
			<div>
				<input type="text" placeholder="Username" id="user" name="user">
				<input type="password" placeholder="Password" id="pass" name="pass">
			<div>
				<input type="submit" value="Concluir">
			</div>
		</form>
	</section>
</body>
</html>