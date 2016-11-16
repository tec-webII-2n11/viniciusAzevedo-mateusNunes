<?php
    include 'conecta_mysql.php';
    
    
    $resultado = mysqli_query($conexao, "SELECT * from usuarios") or die("Nao foi possivel retornar a SQL: ".mysqli_error($conexao));
    if ($resultado){
        while ($row = mysqli_fetch_array($resultado)){
            echo "Nome: ".$row["nome"]."-"."Senha:  ".$row["senha"]."-"."login".$row["Login:  "]."<br/>";
        }
        
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