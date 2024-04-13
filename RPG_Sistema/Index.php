<?php

require 'vendor/autoload.php';
use App\Mago;
use App\Guerreiro;
use App\Arqueiro;

$mago = new Mago();
$mago->Atacar("Tempestade de Raios", "5");

$guerreiro = new Guerreiro();
$guerreiro->Atacar("Lâmina Infernal", "7");

$arqueiro = new Arqueiro();
$arqueiro->Atacar("Chuva de Flechas", "3");

?>