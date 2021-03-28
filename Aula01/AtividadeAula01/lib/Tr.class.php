<?php

class Tr{
    private $vClass;
    private $lista = array();
    
    public function __construct($vClass){
        $this->vClass=$vClass;
    }

    public function addElemento($pElemento){
        $this->lista [] = $pElemento;
    }
    public function __toString(){
        $vTr = '<tr class="'.$this->vClass.'">';
        foreach ($this->lista as $valor){
            $vTr.= $valor;

        }
        $vTr.= '</tr>';
        return $vTr;
    }
}