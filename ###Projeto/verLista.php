<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="global.css" type="text/css"/>
	<title>Ver Lista</title>
</head>
<body>
	<form action="https://projetoweb190100210.000webhostapp.com/adicionarItem.php?id=<?php echo($_GET['id']);?>">
		<input type="submit" value="Adicionar Item">
	</form>
	<form action="https://projetoweb190100210.000webhostapp.com/listas.php">
		<div>
			<input type="submit" value="Voltar para Listas">
		</div>
	</form>
	
</body>
</html>