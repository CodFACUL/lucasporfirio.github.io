<?php

class Table{
    private $lista = [];

    public function addTr($pTr){
        $this->lista = $pTr;
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