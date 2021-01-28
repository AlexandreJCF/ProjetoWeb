<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="global.css" type="text/css"/>
	<title>Adicionar Item</title>
</head>
<body>
	<form action="adicionarItemFunction.php" method="POST">
		<input type="hidden" id="get" value="<?php echo($_GET['id']);?>">

		<div>
			<input type="text" id="nomeP">
		</div>
		<div>
			<input type="number" min="0"id="numeroP">
		</div>
	</form>
	<form action="https://projetoweb190100210.000webhostapp.com/verLista.php?">
		<div>
			<input type="submit" value="Inserir Item">
		</div>
	</form>
</body>
</html>