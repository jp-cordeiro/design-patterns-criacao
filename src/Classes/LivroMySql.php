<?php


namespace DP\Classes;


use DP\AbstractFactory\EditoraB;

class LivroMySql implements EditoraB
{

    public function getTitle(): string
    {
        return 'MySql inicial';
    }

    public function getAuthor(): string
    {
        return 'ABC';
    }

    public function getPages(): string
    {
        return '200';
    }
}