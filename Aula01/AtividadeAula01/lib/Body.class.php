<?php

class Body{
    private $class;
    private $lista = array();

    public function __construct($vClass) {
        $this->class = $vClass;
    }
    public function addElemento($pElemento){
        $this->lista[] = $pElemento;
    }

    public function __toString(){
        $vBody = '<body class="'.$this->class.'">';
        foreach ($this->lista as $valor){
            $vBody.= $valor;

        }
        $vBody.= '</body>';
        return $vBody;
    }
}
