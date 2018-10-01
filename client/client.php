<?php

require_once __DIR__.'/../vendor/autoload.php';

$editoraA = new \DP\Classes\EditoraA;

$livroPHP = $editoraA->makeLivroLinguagem();
$livroMySql = $editoraA->makeLivroBanco();

$editoraB = new \DP\Classes\EditoraB;

$livroNode = $editoraB->makeLivroLinguagem();
$livroMongo = $editoraB->makeLivroBanco();

echo $livroPHP->getAuthor();


