<?php

class Ul{
    private $lista = array();

    public function addUl($pLi){
        $this->lista [] = $pLi;
    }
    public function __toString(){
        $vUl = '<ul>';
        foreach ($this->lista as $valor){
            $vUl. = $valor;

        }
        $vUl.= '</ul>';
        return $vUl;
    }
}