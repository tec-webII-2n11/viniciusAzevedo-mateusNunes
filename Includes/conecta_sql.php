<html>
    <head>
    
    </head>
    <body>  
        <?php
            $conexao = mysqli_connect("127.0.0.1","root","","projeto");
            
            if(mysqli_connect_errno()){
                
                echo "Não foi possível conectar: " .mysqli_connect_error ();
            }
        ?>
    </body>
</html>