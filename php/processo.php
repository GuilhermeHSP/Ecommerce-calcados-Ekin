<?php

include_once("php/config.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);
$data_nasc = filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$duvidas_e_sugestoes = filter_input(INPUT_POST, 'duvida_text', FILTER_SANITIZE_STRING);

$result_duvidas = "INSERT INTO duvidassugestoes (nome, email, telefone, sexo, data_nasc, cidade, estado, duvidas_e_sugestoes)
 VALUES ('$nome', '$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$duvidas_e_sugestoes')";
 
$resultado_duvida = mysqli_query($conexao, $result_duvidas);

if(mysqli_insert_id($conexao)) {
    header("Location: Tire duvidas.php");
}else{
    header("Location: Tire duvidas.php");
}
?>