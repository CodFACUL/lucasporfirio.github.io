<?php

class Input {
    private $class;
    private $type;
    private $place;
    private $describ;

    function Input( $pType,$pClass,$pPlaceholder, $pAriadescribedby){
        $this->class = $pClass;
        $this->type = $pType;
        $this->place = $pPlaceholder;
        $this->describ = $pAriadescribedby;
    }

    function __toString(){
        return '<input type="'.$this->type.'" class="'. $this->class. '" placeholder="'. $this->place .'" aria-describedby="'. $this->describ.'">';
    }
}