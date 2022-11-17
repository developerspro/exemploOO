<?php

class Caneta {
    public $cor; //protected  - private.
    public $material;
    public $marca;
    private $memoria;

public function escrever($texto){
    $this->memoria= $texto;
    echo $texto."<br>";

}

public function desenhar($simbolo){
    for($i=0;$i<20;$i++){
        echo $simbolo;
    }
    echo "<br>";
}
public function reescrever($vezes){
    echo "Reescrevendo...<br>";
    for($i=0;$i<$vezes;$i++){
        echo $this->memoria."<br>";
    }
}


}