<!html doctype>
<html>
    <header>
        <meta charset="utf-8" />
        <meta name = "author" content ="Vinícius Azevedo - 31603289 / Mateus Nunes - 31657461">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <script type="text/javascript">
            function exitsucessfully(){
                setTimeout("window.location='principal.php'",2000);
                alert("Logout efetuado com sucesso");
            }
             </script>
    </header>
    <body>
        <?php
    session_start();
    session_destroy();
    header("Location:principal.php");
    echo "<script>exitsucessfully()</script>";
    
?>
    </body>
</html>

