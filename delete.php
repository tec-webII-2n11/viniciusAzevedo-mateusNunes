<?php
    include 'conecta_mysql.php';
    
    $login = $_POST['login'];
    
    $resultado = mysqli_query($conexao, "DELETE FROM usuarios WHERE login='$login'") or die("Não foi possivel executar a SQL:".mysqli_error($conexao));
    
    if($resultado == true){
        echo "<br/> Deletado com sucesso";
        
    } else {
        echo "<br/> Erro =(";
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