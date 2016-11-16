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
               <h2 class="cadastro">Cadastro 2 de 2</h2>
               <form method="POST" action="cad3.php" class="formulario">
                
                <input type="hidden" name="nome" value="<?php echo $nome; ?>" />
                <input type="hidden" name="cpf" value="<?php echo  $cpf; ?>" />
                <input type="hidden" name="email" value="<?php echo $email; ?>" />
                <input type="hidden" name="sexo" value="<?php echo $sexo; ?>" />
                <input type="hidden" name="data" value="<?php echo $data; ?>" />
                
                <p><label for="login">Login :</label>
                <input type="text" name="login" id="login" /></p>
                
                <p><label for="senha">Senha: </label>
                <input type="password" name="senha" id="senha" /></p>
                
                
               <p><input type="submit" value="Cadastrar" name="cadastro"></p>
               </form>
               
           </main>
            
        </div>
       
        <?php
          include 'Includes/footer.php';
         ?> 
        
    </div>    
    </body>
</html>