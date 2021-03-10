<?php

class Div{
    private $lista = array();

    
    public function addElemento($pElemento){
        $this->lista [] = $pElemento;
    }
    public function __toString(){
        $vDiv = '<div>';
        foreach ($this->lista as $valor){
            $vDiv.= $valor;
        }
        $vDiv.= '</div>';
        return $vDiv;
    }
}