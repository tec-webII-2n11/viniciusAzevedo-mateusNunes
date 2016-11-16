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
        
        
       <section style="height:100%">
       
          <br>
          <br>
           <?php
                include"conecta_mysql.php";
                $line = "SELECT pID, uID, user, titulo, pic FROM post ORDER BY pID DESC";
                $result = mysqli_query($conexao,$line);
                
                if($result){
                    while ($row = mysqli_fetch_array($result)){
                       
                        
                        echo '<div = "row">';
                        
                        echo '<h2 class="post">'.$row['titulo'].'<a href="viewpost.php?id='.$row['pID'] .'"></a></h2>';
                        
                        echo '<p class="post">Postado por '.$row['user'].' </p>';
                        
                        echo '<p> <a href="#" id='.$row['uID'].$row['user'].'</a></p>';
                        
                        
                        echo '<p><a href="viewpost.php?id='.$row['pID'].'"><img style="text-align: center" width="40%"  src="'.$row['pic'].'" alt="'.$row['titulo'].'"></a></p>';
                        echo '</div>';
                        
                        echo '</div>';
                        echo '<br>';
                    }
                }
                
            ?>
            
        
        </section> 
        
        
        
        
      
         <?php
          include 'Includes/footer.php';
         ?> 
    </body>
    
</html>