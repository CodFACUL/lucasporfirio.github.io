<?php

class Ul{
    private $lista = array();
    private $vClass;

    public function __construct($vClass) {
        $this->vClass = $vClass;
    }

    public function addLi($pLi){
        $this->lista [] = $pLi;
    }
    
    public function __toString(){
        $vUl = '<ul class="'.$this->vClass.'">';
        foreach ($this->lista as $valor){
            $vUl.= $valor;

        }
        $vUl.= '</ul>';
        return $vUl;
    }
}