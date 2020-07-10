<?php
namespace Source\models;

class classConnection 
{

    private $host, $user, $passwor, $bank;

    public $conexao;


    public function __construct(){

        $this->host     = BD_HOST;
        $this->user     = BD_USER;
        $this->password = BD_SENHA;
        $this->bank     = BD_BANCO;

    }


    public function getConnect()
    {
        $this->conexao = mysqli_connect($this->host, $this->user, $this->password, $this->bank);

        return $this->conexao;
    }

 }

?>