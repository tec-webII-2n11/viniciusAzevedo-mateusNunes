<!DOCTYPE html>
<?php
    $usuario = $_COOKIE['usuario'];
    include"conecta_mysql.php";
    $resultado = "SELECT * FROM usuarios WHERE nome = '$usuario'";
    $pega = mysqli_query($conexao,$resultado);
    $infos = mysqli_fetch_array($pega);
    
    $uID = $infos['id'];
    
    ?>

<!doctype HTML>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "author" content ="Vinícius Azevedo - 31603289 / Mateus Nunes - 31657461">
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
    <div class="geral">
        <nav>
            <?php
                include 'Includes/logado.php';
                include 'Includes/banner.php';
                include 'Includes/menu.php';
                
            ?>
        
        
        <section>
          
            <form id="cadastro" method='POST' enctype="multipart/form-data" action='post.php'>
                    
                    <input type="hidden" name="name" value="<?=  $_COOKIE['usuario'] ?>"/>
                    <input type="hidden" name="uID" value="<?=  $uID ?>"/>
                    
                    <p><label for="text">Titulo:</label>
                    <input type="text" id = "titulo" name="titulo" /></p>
                    
                    <p><label for="pic">Imagem:</label>
                    
                   <input type="file" name="pic" id="pic"></p>
                   <input type="hidden" name="MAX" value="2500000">
                   <br>
                   <br>
                    
                  <p>  <input type="submit" name="Postar!"/></p>
                    
                </form>
            
            
        </section>
        
        
        
        
         <?php
          include 'Includes/footer.php';
         ?> 
    </body>
    
</html>