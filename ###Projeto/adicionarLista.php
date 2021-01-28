<?php
include("/storage/ssd4/874/15932874/public_html/funcoesDB.php");

$tituloL = $_POST["tituloL"];

giveTitulo($tituloL);

header("Location: https://projetoweb190100210.000webhostapp.com/listas.php")


?>