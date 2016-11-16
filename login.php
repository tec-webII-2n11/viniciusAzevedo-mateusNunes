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
               <h2 class="cadastro">Página de Login</h2>
               <form method="POST" action="validar.php" class="formulario">
                   <p><label for="login">Login: </label>
                   <input type="text" name="login" id="login"></p>
                   
                   <p><label for="senha">Senha: </label>
                   <input type="password" name="senha" id="senha"></p>
                   
                   <p><input type="submit" value="Fazer Login" name="enviar" /></p>
                   
                   <a class="links" href="updatesenha.php">Alterar Senha</a>
                   
               </form>
               
           </main>
            
            
        </div>
        
        <?php
          include 'Includes/footer.php';
         ?> 
        
    </div>    
    </body>
</html>