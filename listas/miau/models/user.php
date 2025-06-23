<?php

class User {
    public $nome;
    public $telefone;
    public $imgPerfil;

    protected $senha;

    public function __construct($nome, $telefone, $imgPerfil, $senha )
        {
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->imgPerfil = $imgPerfil;
            $this->senha = $senha;
        }

}

?>