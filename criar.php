<?php
    include 'conecta_mysql.php';
    
    $nome = strip_tags($_POST['nome']);
    $cpf = strip_tags($_POST['cpf']);
    $email = strip_tags($_POST['email']);
    $sexo = strip_tags($_POST['sexo']);
    $data = strip_tags($_POST["dataNasc"]);
    $login = strip_tags($_POST['login']);
    $senha = md5(strip_tags($_POST['senha']));
    
        $resultado = mysqli_query($conexao,"INSERT INTO usuarios(nome, senha, email, cpf, login) VALUES('".$nome."', '".$senha."', '".$email."', '".cpf."', '".$login."')")or die ("Nao foi possível executar a SQL:".mysqli_error($conexao));
        if($resultado == TRUE){
            echo "<br/>Usuário inserido com sucesso";
        } else {
            echo "<br/> Erro na inserção";
        }
        
        mysqli_close($conexao);
    
?>

<!doctype html>
<html>
    <header>
        
    </header>
    <body>
        <a href="adm.php">Voltar</a>
    </body>
</html>