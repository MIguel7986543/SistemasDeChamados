<?php

$server = "localhost",
$user = "root";
$password = "admin";
$database = "db_sistema_chamado.sql"

$conexao = new mysql($server, $user, $password, $database);

if ($conexao == false) {
    echo "falha na conexão"

}

?>