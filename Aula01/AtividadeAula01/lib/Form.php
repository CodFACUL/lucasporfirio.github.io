<?php

class Form{
    private $lista = [];

    public function addElemento($pElemento){
        $this->lista[] = $pElemento;
    }

    public function __toString(){
        $vForm = '<form>';
        foreach ($this->lista as $valor){
            $vForm.= $valor;

        }
        $vForm.= '</form>';
        return $vForm;
    }
}