<!doctype html>
<html>
    <header>
        <meta charset="utf-8" />
        <meta name = "author" content ="Vinícius Azevedo - 31603289 / Mateus Nunes - 31657461">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <script type="text/javascript">
            function updatesucessfully(){
                setTimeout("window.location='login.php'",2000);
                alert("Senha atualizada com sucesso");
            }
             function updatefailed(){
                setTimeout("window.location='login.php'",2000);
                alert("Erro na att da senha");
             }
             </script>
    </header>
    <body>
        <?php
        include 'conecta_mysql.php';
    
         $login = strip_tags($_POST['login']);
         $senha = md5(strip_tags($_POST['senha']));
    
         $resultado = mysqli_query($conexao, "UPDATE usuarios SET senha='$senha' WHERE login='$login'") or die ("Nao foi possivel conectar a SQL:".mysqli_error($conexao));
    
            if ($resultado == TRUE){
        echo "<h1>Senha atualizada com sucesso</h1>";
        header("Location:login.php");
    
            }else{
        echo "<h1>Erro na atualização da senha</h1>";
        header("Location:principal.php");
        
         }
    
    
     mysqli_close($conexao);



?>
    </body>
</html>


