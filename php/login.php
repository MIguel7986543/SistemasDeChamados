<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

include 'conexao.php';

$select = "SELECT * FROM tb_usuario WHERE email = '$email'";

$query = $conexao->query($select);

$resultado = $query->fetch_assoc();

print_r($_POST);
print_r($resultado);



  $email_bd = $resultado ['email'];
    $senha_bd = $resultado ['senha'];
 
    if($email == $email_bd && $senha == $senha_bd) {
        session_start();
        $SESSION['id_usuario'] = $resutado ['id'];
        header('location: ../casa.php');
 
       
    } else {
        
        echo "<script> alert('Usuario ou senha invalida!'); history.back() </script>";
       
    }


?>