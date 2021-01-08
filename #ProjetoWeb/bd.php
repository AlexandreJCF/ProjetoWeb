<?php
  
  function estabelerConexao()
{
     // Deviam estar num ficheiro de configuração
    $hostname = "localhost";
    $databasename = "projetoweb";
    $username = "PW_User";
    $password = "1234";
    
    try {
        $conexao = new PDO("mysql:host=$hostname;dbname=$databasename;charset=utf8mb4");
    }
    catch (\PDOException $e) {
        echo $e->getMessage();
    }

    return $conexao;

}




?>