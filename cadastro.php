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
               <h2 class="cadastro">Cadastro 1 de 2</h2>
               <form method="POST" action="cad2.php" class="formulario">
                   <p><label for="nome" >Nome Completo: </label>
                   <input type="text" name="nome" id="nome" ></p>
                   
                    <p><label for="cpf">CPF: </label>
                    <input type="text" name="cpf" id="cpf" ></p>
                    
                    <p><label for="email">E-mail: </label>
                    <input type="email" name="email" id="email"></p>
                    
                    <p><label for="sexo">Selecione o seu sexo: </label>
                    <input type="radio" name="sexo" id="sexo" value="Masculino">Masculino
                    <input type="radio" name="sexo" id="sexo" value="Feminino">Feminino
                    <input type="radio" name="sexo" id="sexo" value="Outros">Outros</p>
                     
                    <p><label for="dataNasc">Data de Nascimento</label>
                    <input type="date" name="dataNasc" id="dataNasc"></p>
                    
                    <p><input type="submit" value="Próximo >>" name="enviar"></p>
               </form>
               
           </main>
            
        </div>
       
        <?php
          include 'Includes/footer.php';
         ?> 
        
    </div>    
    </body>
</html>