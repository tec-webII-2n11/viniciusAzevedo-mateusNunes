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
                include 'Includes/banner.php';
                include 'Includes/menu.php';
                
            ?>
        </nav>
        <div class = "conteudo">
           
            <main>
                
                    <h2 id="feed">Feed de Notícias</h2>
                    
                    
                    
                    
                    <div id="post">
                        <h3>Espaço para postar</h3>
                        <form>
                            <input type="textarea" name="postar"/>
                            <input type="submit" value="Enviar Imagem" name="enviarImg">
                            <input type="submit" value="Enviar texto" name="enviarTxt">
                            </form>
                    </div>
                    
            </main>
             
            
        </div>
       
        <?php
          include 'Includes/footer.php';
         ?> 
        
    </div>    
    </body>
</html>