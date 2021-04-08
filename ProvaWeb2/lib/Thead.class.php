<?php

class Thead{
    private $class;
    private $lista = array();

    public function __construct($class) {
        $this->class = $class;
    }
    
    public function addElemento($pElemento){
        $this->lista [] = $pElemento;
    }
    public function __toString(){
        $vThead = '<thead class="'.$this->class.'">';
        foreach ($this->lista as $valor){
            $vThead.= $valor;
        }
        $vThead.= '</thead>';
        return $vThead;
    }
}