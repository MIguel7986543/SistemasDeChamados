<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmarSenha = $_POST['confirmar'];
$celular = $_POST['celular'];
$setor = $_POST['setor'];



include 'conexao.php';



$insert = "INSERT INTO tb_usuario VALUE (null, '$nome', 
'$email', '$senha','$celular','$setor')";



$query = $conexao->query($insert);


if ($query == true) {
    echo "<script> alert('Usuario cadastrado sucesso!');
     window.location.href = '../index.html' </script>";
}


?>