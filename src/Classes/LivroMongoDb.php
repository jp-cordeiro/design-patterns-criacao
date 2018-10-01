<?php


namespace DP\Classes;


use DP\AbstractFactory\EditoraB;

class LivroMongoDb implements EditoraB
{

    public function getTitle(): string
    {
        return 'Mongo inicial';
    }

    public function getAuthor(): string
    {
        return 'XYZ';
    }

    public function getPages(): string
    {
        return '100';
    }
}