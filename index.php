<?php 
include "Caneta.php";

$bic = new Caneta();
$fabercastel = new Caneta();
$piloto = new Caneta();
$piloto->marca="Piloto";
$piloto->cor="green";
$piloto->escrever("sou uma Piloto");
$piloto->reescrever(1);
$fabercastel->cor="blue";
$fabercastel->marca="Fabercastel";
$fabercastel->material="aluminio";
$fabercastel->escrever("Sou uma faber Castel");
$fabercastel->reescrever(2);

$bic->marca= "bic";
$bic->cor="red";
$bic->material="plastico";

$bic->escrever("Boa noite");
$bic->desenhar("#");
$bic->desenhar("=");
$bic->reescrever(3);