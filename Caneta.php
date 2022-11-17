<?php

class Caneta {
    public $cor; //protected  - private.
    public $material;
    public $marca;
    private $memoria;

public function escrever($texto){
  
    $this->memoria= $texto;
    echo "<p style='color:$this->cor'>".$texto."</p>";

}

public function desenhar($simbolo){
    for($i=0;$i<20;$i++){
        echo $simbolo;
    }
    echo "<br>";
}
public function reescrever($vezes){
    for($i=0;$i<$vezes;$i++){
    $this->escrever($this->memoria);
    }
}


}