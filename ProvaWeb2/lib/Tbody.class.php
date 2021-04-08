<?php

class Tbody{
    private $class;
    private $lista = array();

    public function __construct($class) {
        $this->class = $class;
    }
    
    public function addElemento($pElemento){
        $this->lista [] = $pElemento;
    }
    public function __toString(){
        $vTbody = '<tbody class="'.$this->class.'">';
        foreach ($this->lista as $valor){
            $vTbody.= $valor;
        }
        $vTbody.= '</tbody>';
        return $vTbody;
    }
}