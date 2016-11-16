<?php
    include 'conecta_mysql.php';
    
    $nome = $_POST['nome'];
    $senha = md5($_POST['senha']);
    $login = $_POST['login'];
    
    $resultado = mysqli_query($conexao, "UPDATE usuarios SET nome='$nome',senha='$senha' WHERE login='$login'") or die ("Nao foi possivel conectar a SQL:".mysqli_error($conexao));
    
    if ($resultado == TRUE){
        echo "<br/>Usuario alterado com sucesso";
    }else{
        echo "<br/> Erro na atualização";
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