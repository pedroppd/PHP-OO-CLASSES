

        <?php
        include_once('Usuario.php');
        include_once('Conexao.php');
        include_once('DAlusuario.php'); 
        
        $c = new Conexao('localhost', 'root', '', 'cad');
        $usuario=new Usuario(5, 'olaawwwdsadsa', 'wwwws@hotmail.comds', 'mmds', 'mmds');
        $dal = new DAlusuario($c);
       
        $dado=$dal->localizar('m');
        
        while($retorno=$dado->fetch_array()){
             echo $retorno['nome_usuario'];
             echo '<br>';
             echo $retorno['login_usuario'];
             echo'<br>';
             echo $retorno['email_usuario'];
        }
        
        
        
  