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
               <h2 class="cadastro">Página de Cadastro</h2>
               <form method="POST" action="cad2.php" class="formulario">
                   <p><label for="nome" >Nome Completo: </label>
                   <input type="text" name="nome" id="nome" required="nome"></p>
                   
                    <p><label for="cpf">CPF: </label>
                    <input type="text" name="cpf" id="cpf" required="cpf"></p>
                    
                    <p><label for="email">E-mail: </label>
                    <input type="email" name="email" id="email" required"email"></p>
                    
                    <p><label for="sexo">Selecione o seu sexo: </label>
                    <select name="sexo">
                        <option>Selecione o seu sexo</option>
                        <option>Masculino</option>
                        <option>Feminino</option>
                        <option>Outros</option>
                    </select></p>
                    
                    <p><label for="dataNasc">Data de Nascimento</label>
                    <input type="date" name="dataNasc" id="dataNasc"></p>
                    
                    <p><input type="submit" value="Continuar >>" name="enviar"></p>
               </form>
               
           </main>
            
        </div>
       
        <?php
          include 'Includes/footer.php';
         ?> 
        
    </div>    
    </body>
</html>