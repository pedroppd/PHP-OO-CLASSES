<?php


include_once('Conexao.php');
include_once('Dalusuario.php');    
class Usuario {
    protected $codigo;
    protected $nome;
    protected $email;
    protected $login;
    protected $senha;
    function __construct($codigo, $nome, $email, $login, $senha) {
        $this->setCodigo($codigo);
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setLogin($login);
        $this->setSenha($senha);
    }

    
    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }


    
            
}
