<?php

class Tr{
    private $lista = array();

    public function addTh($pTh){
        $this->lista [] = $pTh;
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