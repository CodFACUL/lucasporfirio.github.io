<?php

class Table{
    private $lista = [];

    public function addElemento($pElemento){
        $this->lista = $pElemento;
    }

    public function __toString(){
        $vTable = '<table>';
        foreach ($this->lista as $valor){
            $vTable .= $valor;

        }
        $vTable .= '</table>';
        return $vTable;
    }
}