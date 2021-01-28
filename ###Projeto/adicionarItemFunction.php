<?php
	include ('/storage/ssd4/874/15932874/public_html/connDB.php');
	$nomeP = $_POST["nomeP"];
	$numeroP = $_POST["numeroP"];
	$nome = $_POST["get"];

    $conexao = estabelerConexao();


    $stmt = $conexao->prepare('INSERT INTO `Listas` (`nomeProduto`, `numeroProduto`,`nomeLista`) VALUES (:nomeProduto, :numeroProduto, :nomeLista);');

    $stmt->execute( array( 'nomeProduto' => $nomeP, 'Password' => $numeroP, 'nomeLista'=>$nome));


?>