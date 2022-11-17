<?php 
include "Caneta.php";

$bic = new Caneta();
$fabercastel = new Caneta();
$piloto = new Caneta();
$piloto->marca="Piloto";
$piloto->escrever("sou uma Piloto");
$piloto->reescrever(1);
$fabercastel->cor="azul";
$fabercastel->marca="Fabercastel";
$fabercastel->material="aluminio";
$fabercastel->escrever("Sou uma faber Castel");
$fabercastel->reescrever(2);

$bic->marca= "bic";
$bic->cor="vermelho";
$bic->material="plastico";

$bic->escrever("Boa noite");
$bic->desenhar("#");
$bic->desenhar("=");
$bic->reescrever(3);