<?php
	include ('/storage/ssd4/874/15932874/public_html/connDB.php');
	$user = $_POST["user"];
	$pass = $_POST["pass"];

    $conexao = estabelerConexao();
    //db

    $stmt = $conexao->prepare('INSERT INTO `Login` (`Username`, `Password`) VALUES (:Username, :Password);');
    $stmt->execute( array( 'Username' => $user, 'Password' => $pass));
    //files
    header('Location: https://projetoweb190100210.000webhostapp.com/');
?>