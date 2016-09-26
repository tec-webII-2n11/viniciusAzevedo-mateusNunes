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
                
                    <h2>Bem vindo ao MackTrade!</h2>
                    <p>Seja bem vindo ao MackTrade, o site de comércio dos alunos do Mackenzie.</p>
                    <br>
                    <p>O nosso site visa facilitar as transações entre os nossos usuários.</p>
                    <br>
                    <p>Mas caso você encontre algum usuário infringindo alguma regra, não tenha medo de reporta-lo.</p>
                    <br>
                    <p>Portanto seja muito bem vindo. <a href="login.php">Login</a><br><a href="cad1.php">Cadastro</a></p>
                    
            </main>
             
            
        </div>
        <?php
         include 'Includes/asides.php';
        ?>
        <?php
          include 'Includes/footer.php';
         ?> 
        
    </div>    
    </body>
</html>