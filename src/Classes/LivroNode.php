<?php


namespace DP\Classes;


use DP\AbstractFactory\EditoraA;

class LivroNode implements EditoraA
{

    public function getTitle(): string
    {
        return 'Node inicial';
    }

    public function getAuthor(): string
    {
        return 'Fido';
    }

    public function getPages(): string
    {
        return '400';
    }
}