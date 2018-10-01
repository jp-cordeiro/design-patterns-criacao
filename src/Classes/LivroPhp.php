<?php

namespace DP\Classes;

use DP\AbstractFactory\EditoraA;

class LivroPhp implements EditoraA
{

    public function getTitle(): string
    {
        return 'PHP inicial';
    }

    public function getAuthor(): string
    {
        return 'Fulano';
    }

    public function getPages(): string
    {
        return '500';
    }
}