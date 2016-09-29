<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        
    </body>
</html>

<?php
$nome = $_POST["nome"];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$data = $_POST["dataNasc"];
$login = $_POST['login'];
$senha = $_POST['senha'];
$erro = 0;

if (empty($login)){
    echo "<script>alert('Login Inválido')</script";
    $erro = 1;
}

if (empty($senha)){
    echo "<script>alert('Senha Inválida')</script>";
    $erro = 1;
}

if ($erro == 0){
    echo "Nome: ".$nome;
    echo "<br>";
    echo "CPF: ".$cpf;
    echo "<br>";
    echo "E-mail: ".$email;
    echo "<br>";
    echo "Sexo: ".$sexo;
    echo "<br>";
    echo "Data de nascimento: ".$data;
    echo "<br>";
    echo "Login: ".$login;
    echo "<br>";
    
    echo "<h3>Cadastro concluído<h3>";
}





?>