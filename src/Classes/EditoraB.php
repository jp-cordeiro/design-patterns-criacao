<?php

namespace DP\Classes;

use DP\AbstractFactory\AbstractFactory;

class EditoraB implements AbstractFactory
{
    private $linguagem;
    private $banco;

    function __construct()
    {
        $this->linguagem = new LivroNode();
        $this->banco = new LivroMongoDb();
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