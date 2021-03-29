<?php

class Table{
    
    private $class;
    private $lista = [];

    public function __construct($vClass) {
        $this->class = $vClass;
    }

    public function addElemento($pElemento){
        $this->lista [] = $pElemento;
    }

    public function __toString(){
        $vTable = '<table class="'.$this->class.'">';
        foreach ($this->lista as $valor){
            $vTable.= $valor;

        }
        $vTable.= '</table>';
        return $vTable;
    }
}