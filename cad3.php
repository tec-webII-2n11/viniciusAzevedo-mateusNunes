<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name = "author" content ="Vinícius Azevedo - 31603289 / Mateus Nunes - 31657461">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <script type="text/javascript">
            function cadsucessfully(){
                setTimeout("window.location='principal.php'",2000);
                alert("Usuário cadastrado com sucesso");
            }
        
        </script>
    </head>
    <body>
        
    </body>
</html>

<?php
$nome = strip_tags($_POST['nome']);
$cpf = strip_tags($_POST['cpf']);
$email = strip_tags($_POST['email']);
$sexo = strip_tags($_POST['sexo']);
$data = strip_tags($_POST["dataNasc"]);
$login = strip_tags($_POST['login']);
$senha = md5(strip_tags($_POST['senha']));
$erro = 0;


if (empty($login)){
    echo "<script>alert('Login Inválido')</script>";
    $erro = 1;
}

if (empty($senha)){
    echo "<script>alert('Senha Inválida')</script>";
    $erro = 1;
}

?>

<?php
    include 'conecta_mysql.php';
    $sql = mysqli_query($conexao,"INSERT INTO usuarios(nome, senha, email, cpf, login) VALUES('".$nome."', '".$senha."', '".$email."', '".cpf."', '".$login."')");
    echo "<script>cadsucessfully()</script>";
            

?>