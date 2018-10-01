<?php

namespace DP\Classes;

use DP\AbstractFactory\AbstractFactory;

class EditoraA implements AbstractFactory
{
    private $linguagem;
    private $banco;

    function __construct()
    {
        $this->linguagem = new LivroPhp();
        $this->banco = new LivroMySql();
    }

    public function makeLivroLinguagem()
    {
        return $this->linguagem;
    }

    public function makeLivroBanco()
    {
        return $this->banco;
    }
}