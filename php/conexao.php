<?php

$server = "localhost";
$user = "root";
$password = "root";
$database = "db_sistema_chamado";

$conexao = new MySqli($server, $user, $password, $database);

if ($conexao == false) {
    echo "falha na conexão";

}

?>