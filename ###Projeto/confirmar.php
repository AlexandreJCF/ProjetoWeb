<?php
	include ('/storage/ssd4/874/15932874/public_html/connDB.php');
	$user = $_POST["user"];
	$pass = $_POST["pass"];

	$conexao = estabelerConexao();

	$stmt = $conexao->query('SELECT * FROM Login WHERE Username = "'.$user.'"');
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if($users){

        foreach($users as $userQ){
            $userA = $userQ;
        }

        if(($userA['Username'] == $user) && $userA['Password'] == $pass)
            header('Location: https://projetoweb190100210.000webhostapp.com/listas.php');
        else
            header('Location: https://projetoweb190100210.000webhostapp.com?erro=1');

    }else{
        header('Location: https://projetoweb190100210.000webhostapp.com?erro=1');
    }
?>

