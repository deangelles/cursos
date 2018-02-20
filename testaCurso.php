<?php
/**
 * Created by PhpStorm.
 * User: 52971457249
 * Date: 19/02/2018
 * Time: 19:55
 */
include 'vendor/autoload.php';

$c = new App\Model\Curso ();
$c->setNome("Programação com PHP");
$c->setValor(300.50);

$cDAO = new App\DAO\CursoDAO ();
$cDAO->inserir($c);


echo $c->getNome() . " - " . $c->getValor();