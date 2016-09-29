<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
</html>

<?php
$nome = $_POST["nome"];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$data = $_POST["dataNasc"];
$erro = 0;



if (empty($nome) OR strstr($nome, ' ')==FALSE){
    echo "<script> alert('Nome inválido')</script>";
    $erro = 1;
}

if (empty($cpf) OR strlen($cpf < 5)){
    echo "<script> alert('CPF inválido')</script>";
    $erro = 1;
}

if (empty($email) OR strstr($email, '@')==FALSE){
    echo "<script> alert('E-mail inválido')</script>";
    $erro = 1;
}

if (empty($sexo)){
    echo "<script> alert('Sexo inválido')</script>";
    $erro = 1;
}

if (empty($data)){
    echo "<script> alert('Data de nascimento inválida')</script>";
    $erro = 1;
}

if ($erro == 0){
    include 'cad2a.php';
}

?>
