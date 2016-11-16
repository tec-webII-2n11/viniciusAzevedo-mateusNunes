<?php


                        $conn = mysqli_connect("127.0.0.1","root","","projeto");


                        mysql_select_db("",$conn);


                        $sql = "INSERT INTO comentarios(comentario) VALUES('".$_POST['mensagem']."'";

                        if(mysqli_query($sql)){
                          echo "Comentario realizado com sucesso!";  
                        } 

                        else{
                            
                         echo "Erro no servidor.Tente mais tarde";
}

?>