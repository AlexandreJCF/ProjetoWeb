<?php
	include ('/storage/ssd4/874/15932874/public_html/connDB.php');
	$nomeP = $_POST["nomeP"];
	$numeroP = $_POST["numeroP"];
	$tituloL = $_POST["tituloL"];

    $conexao = estabelerConexao();
    //db

    $stmt = $conexao->prepare('INSERT INTO `Listas` (`nomeProduto`, `numeroProduto`, `nomeLista`) VALUES (:nomeProduto, :numeroProduto,:nomeLista);');
    $stmt->execute( array( 'nomeProduto' => $nomeP, 'numeroProduto' => $numeroP, 'nomeLista' => $tituloL));
    //files
    header('Location: https://projetoweb190100210.000webhostapp.com/listas.php')
?>