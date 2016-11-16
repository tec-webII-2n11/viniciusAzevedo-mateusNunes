<!DOCTYPE html>
<?php

    $usu = $_POST['name'];
    $uID = $_POST['uID'];
    $titulo = strip_tags($_POST['titulo']);
    $pic = $_FILES['pic'];
    $max = $_POST['MAX'];
    
    $tipos_validos = array("image/x-png", "image/png", "image/jpeg","image/gif");
     
    $erro = 0;
    
    if(empty($titulo)){
        $erro = 1;
        $mensagem = 'Insira um Titulo na sua postagem!';
    }
    
    if($pic['size'] > $max){
        $erro = 1;
        $mensagem = 'Arquivo muito pesado!';
    }
    
    if(array_search($pic['type'],$tipos_validos)===FALSE) {
        $erro = 1;
        $mensagem = 'Formato invalido. <br> Tente usar PNG, JPEG ou GIF.';
        
    }
    
    
    if($erro == 0){
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $rand = substr(str_shuffle($chars), 0, 5);
        
        if (!file_exists('img/post/'.$usu.'/'.$rand)) {
            mkdir('img/post/'.$usu.'/'.$rand, 0777, true);
        }
        
        $destino = 'img/post/'.$usu.'/'.$rand.'/'.$pic['name'];
        $filename = $pic['tmp_name'];
        
        move_uploaded_file($filename,$destino);  
          
        include "conecta.php";
    
        $add = "INSERT into post(uID, user, titulo, pic) VALUES('".$uID."','".$usu."','".$titulo."','".$destino."')";
        mysqli_query($conexao,$add) or die("Erro no banco de dados: ".mysqli_error());
       
        mysqli_close($conexao);

        header("Location: timeline.php");
        
    }
    
    
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
          
           
            <p><?php echo($mensagem);
              
              ?></p>
            
            
        </section>
            
            
            
            
            
            
             <?php
          include 'Includes/footer.php';
         ?> 
        
    </div>    
    </body>
</html>