<?php
	include ('/storage/ssd4/874/15932874/public_html/connDB.php');;
	$nomeP = $_POST["nomeP"];
	$numeroP = $_POST["numeroP"];

    $conexao = estabelerConexao();
    //db

    $stmt = $conexao->query('INSERT INTO `Listas` (`nomeProduto`, `numeroProduto`) VALUES (:nomeProduto, :numeroProduto);');
    $stmt->execute( array( 'numeroProduto' => $nomeP, 'numeroProduto' => $numeroP));
    //files
?>