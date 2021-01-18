<?php
	include ('/storage/ssd4/874/15932874/public_html/connDB.php');
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$status = False;

	
	if($user == ('SELECT Username from Listas')){
		if($pass == ('SELECT Password from Listas')){
			header('Location: https://projetoweb190100210.000webhostapp.com/listas.php');
		}
	}else if($user == null or $pass == null){
		
		function_alert("Username ou Password não foram inseridos");
		
	}else{
		header('Location: https://projetoweb190100210.000webhostapp.com?status=True');
	};

	function function_alert($message) { 
    echo "<script>alert('$message');</script>"; 
}
	
?>

