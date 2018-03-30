<?php

include_once('Conexao.php');
include_once('Usuario.php');

class DAlusuario {
   protected $conexao;
   
   function __construct($conexao) {
       $this->conexao = $conexao;
   }
   
   
   public function inserir($usuario){
       $sql="INSERT INTO usuario(nome_usuario, email_usuario, login_usuario, senha_usuario) values ('";
       $sql = $sql.$usuario->getNome()."','";
       $sql = $sql.$usuario->getEmail()."','";
       $sql = $sql.$usuario->getLogin()."','";
       $sql = $sql.$usuario->getSenha()."')";
        $banco=$this->conexao->getBanco();
        $banco->query($sql);
        $this->conexao->desconectar();
       }
       
    public function deletar($cod){
        $sql="DELETE FROM usuario WHERE idusuario='$cod'";
        $banco=$this->conexao->getBanco();
        $banco->query($sql);
        $this->conexao->desconectar();
    }
    
    public function alterar($usuario){
       $sql="UPDATE usuario SET nome_usuario='".$usuario->getNome().
       "',email_usuario='".$usuario->getEmail().
       "',login_usuario='".$usuario->getLogin().
       "',senha_usuario='".$usuario->getSenha().
       "'WHERE idusurio=".$usuario->getCodigo();     
       $banco= $this->conexao->getBanco();
       $banco->query($sql);
       $this->conexao->desconectar();
       
    }
    
    public function localizar($nome){
        $sql="SELECT * FROM usuario WHERE nome_usuario LIKE  '%".$nome."%'";
        $banco= $this->conexao->getBanco();
        $retorno=$banco->query($sql);
        $this->conexao->desconectar();
        return $retorno;
    }
       
       

}
