<?php

class Label {
    private $txt;
    private $class;
    private $for;

    function Label($pTxt,$pClass){
        $this->txt = $pTxt;
        $this->class = $pClass;
        $this->for = $pFor;
    }

    function __toString(){
        return '<label class='.$this->class
        .' for="'. $this->for.' >'.$this->txt.'</label>';
    }
}