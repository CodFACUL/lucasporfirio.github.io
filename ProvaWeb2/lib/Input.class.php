<?php

class Input {
    private $class;
    private $type;
    private $place;
    private $label;
    private $describ;

    function __construct( $pType,$pClass,$pPlaceholder,$pAriaLabel, $pAriadescribedby){
        $this->class = $pClass;
        $this->type = $pType;
        $this->place = $pPlaceholder;
        $this->label = $pAriaLabel;
        $this->describ = $pAriadescribedby;
    }

    function __toString(){
        return '<input type="'.$this->type.'" class="'. $this->class. '" placeholder="'. $this->place .'"aria-label="'.$this->label.'" aria-describedby="'. $this->describ.'">';
    }
}