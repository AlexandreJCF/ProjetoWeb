<?php
    function estabelerConexao(){
     // Deviam estar num ficheiro de configuração
    $hostname = "localhost";
    $databasename = "id15932874_listas";
    $username = "id15932874_me";
    $password = "|t#%U6%)aiGycmk|";
    
    try {
        $conexao = new PDO("mysql:host=$hostname;dbname=$databasename", $username, $password);
    }
    catch (\PDOException $e) {
        echo $e->getMessage();
    }

    return $conexao;
}
?>