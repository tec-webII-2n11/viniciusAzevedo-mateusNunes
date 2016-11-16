
<!doctype html>
<html>
    <header>
        <script type="text/javascript">
            function autentfailed(){
                setTimeout("window.location='principal.php'",2000);
                alert("Usuário não autenticado, favor efetuar o login");
            }
        
        </script>
    </header>
    <body>
        <?php
            include 'conecta_mysql.php';
            session_start();
            if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"])){
                echo "<script>autentfailed()</script>";
                exit;
            }
        ?>
        
    </body>
</html>