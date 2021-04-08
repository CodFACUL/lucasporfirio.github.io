<?php

class Div{
    private $class;
    private $lista = array();

    public function __construct($class) {
        $this->class = $class;
    }
    
    public function addElemento($pElemento){
        $this->lista [] = $pElemento;
    }
    public function __toString(){
        $vDiv = '<div class="'.$this->class.'">';
        foreach ($this->lista as $valor){
            $vDiv.= $valor;
        }
        $vDiv.= '</div>';
        return $vDiv;
    }
}