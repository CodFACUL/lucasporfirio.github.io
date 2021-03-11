<?php

class Body{
    private $lista = [];

    public function addElemento($pElemento){
        $this->lista = $pElemento;
    }

    public function __toString(){
        $vBody = '<body>';
        foreach ($this->lista as $valor){
            $vBody.= $valor;

        }
        $vBody.= '</body>';
        return $vBody;
    }
}