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
        </nav>
        <div class = "conteudo">
           
            <main>
                
                    <h2 id="feed">Feed de Notícias</h2>
                    
                    
                    
                    
                    <div id="post">
                       
                        
                    

  <form method="post" action="comentario.php">

   <table>


    <tr>

     <td>Comentario: </td><td><textarea  name="mensagem"  rows=5 cols=35/></textarea></td>

    </tr>

    <tr>

     <td></td><td><input  type=submit  value=Comentar></td>

    </tr>

  </form>

 </body>

</html>
                        

            </main>
             
            
        </div>
       
        <?php
          include 'Includes/footer.php';
         ?> 
        
    </div>    
    </body>
</html>