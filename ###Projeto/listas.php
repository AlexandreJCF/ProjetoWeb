<?php
include("/storage/ssd4/874/15932874/public_html/funcoesDB.php");
$titulos = getTitulos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Listas</title>
	<link rel="stylesheet" href="global.css" type="text/css"/>
</head>
<body>
	<form action="https://projetoweb190100210.000webhostapp.com/criarListas.php">
		<input type="submit" value="Criar Lista">
	</form>

	<form action="https://projetoweb190100210.000webhostapp.com/verLista.php?id=Lista1">
		<div class="teste">
			<input type="submit" value="titulo">
		</div>
	<?php  
    	foreach($titulos as $titulo)
	    {
	?>
	        <div class="titulosListas">
	            <input type="submit" value="<?php echo($titulo) ?>">
	        </div>
	<?php
	    }
	?>   
	</form>

</body>
</html>