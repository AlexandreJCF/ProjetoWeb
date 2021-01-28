<?php

include("/storage/ssd4/874/15932874/public_html/connDB.php");

function getTitulos()
{

	$conexao = estabelerConexao();

	$stmt = $conexao->prepare('SELECT nomeLista FROM Listas');

	$titulos = $stmt->fetchAll(PDO::FETCH_ASSOC);

	return $titulos;
}

function giveTitulo($tituloL){
	$conexao = estabelerConexao();
	
	
	$stmt = $conexao->prepare('INSERT INTO Listas(nomeProduto, numeroProduto, nomeLista) VALUES (NUll, NULL, :nomeLista)');
	$stmt->execute(array('nomeLista'=>$tituloL));
}

?>