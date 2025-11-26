<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

include 'conexao.php';

$select = "SELECT * FROM tb_usuario WHERE email = '$email'";

$query = $conexao->query($select);

$resultado = $query->fetch_assoc();

print_r($_POST);
print_r($resultado);



?>