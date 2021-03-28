<?php

class Form{
    private $vClass;
    private $lista = [];

    public function __construct($vClass)
    {
     $this->vClass= $vClass;   
    }

    public function addElemento($pElemento){
        $this->lista[] = $pElemento;
    }

    public function __toString(){
        $vForm = '<form class="'.$this->vClass.'">';
        foreach ($this->lista as $valor){
            $vForm.= $valor;

        }
        $vForm.= '</form>';
        return $vForm;
    }
}