<?php

class Tr{
    private $lista = array();

    public function addElemento($pElemento){
        $this->lista [] = $pElemento;
    }
    public function __toString(){
        $vTr = '<tr>';
        foreach ($this->lista as $valor){
            $vTr.= $valor;

        }
        $vTr.= '</tr>';
        return $vTr;
    }
}