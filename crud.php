<?php
    $opcao = $_POST['tipoCrud'];
    switch ($opcao){
        case 'c':
            $formulario = "<form action ='criar.php' method='POST'>
                                Login: <input type='text' name='login' /><br/>
                                Nome: <input type='text' name='nome' /><br/>
                                Senha: <input type='password' name='senha' /><br/>
                                Sexo : <input type='text' name='sexo' /><br/>
                                Cpf : <input type='text' name='cpf' /><br/> 
                                
                                <input type='submit' value='INSERIR' />
                            </form>";
            break;
            
        case 'r':
            $formulario = "<form action='read.php' method='POST'>
                            <input type='submit' value='BUSCAR' />
                            </form>";
            break;
            
        case 'u':
            $formulario = "<form action ='update.php' method='POST'>
                                Login: <input type='text' name='login' /><br/>
                                Nome: <input type='text' name='nome' /><br/>
                                Senha: <input type='password' name='senha' /><br/> 
                                <input type='submit' value='ATUALIZAR' />
                            </form>";
                            
            break;
        
        case 'd';
            $formulario = "<form action='delete.php' method='POST'>
                            Login: <input type='text' name ='login' /><br/>
                            <input type='submit' value='APAGAR' />
                            </form>";
            break;
                        
    }
    
    echo $formulario;

?>