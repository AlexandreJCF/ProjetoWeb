<?php
	include('/storage/ssd4/874/15932874/public_html/novoDiv.js')
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CriarListas</title>
	<link rel="stylesheet" href="global.css" type="text/css"/>
</head>
<body>
	<h1>Criar Lista</h1>
	<form action="listasFunction.php" method="POST">
		<div>
			<input type="text" placeholder="Titulo" name="tituloL" id="tituloL">
		</div>
		<div>
			<input type="text" placeholder="Nome Item" name="nomeP" id="nomeP">
			<input type="number" placeholder="0" min="0" name="numeroP" id="numeroP">
		</div>
		<div>
			<input type="submit" placeholder="Lista Concluida">
		</div>
	</form>

</body>
</html>