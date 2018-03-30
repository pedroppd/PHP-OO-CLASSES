<?php

include_once('Usuario.php');
class Conexao {
  protected $servidor;
  protected $usuario;
  protected $senha;
  protected $nomeBanco;
  protected $banco;
  
  function __construct($servidor, $usuario, $senha, $nomeBanco) {
      $this->servidor = $servidor;
      $this->usuario = $usuario;
      $this->senha = $senha;
      $this->nomeBanco = $nomeBanco;
      $this->conectar();
  }

    
  public function conectar(){
      $this->banco = new mysqli($this->getServidor(), $this->getUsuario(), $this->getSenha(), $this->getNomeBanco());
      if (!$this->banco) {
          echo 'erro ao se conectar com o banco de dados!';
      }
  
  }
  
  public function desconectar(){
      
      $this->banco->close();
  }    
  function getServidor() {
      return $this->servidor;
  }

  function getUsuario() {
      return $this->usuario;
  }

  function getSenha() {
      return $this->senha;
  }

  function getNomeBanco() {
      return $this->nomeBanco;
  }

  function getBanco() {
      return $this->banco;
  }

  function setServidor($servidor) {
      $this->servidor = $servidor;
  }

  function setUsuario($usuario) {
      $this->usuario = $usuario;
  }

  function setSenha($senha) {
      $this->senha = $senha;
  }

  function setNomeBanco($nomeBanco) {
      $this->nomeBanco = $nomeBanco;
  }

  


  
  
  
}
