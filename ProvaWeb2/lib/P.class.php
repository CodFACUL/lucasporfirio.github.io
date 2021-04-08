<?php

class P {
    private $txt;
    private $class;

    function __construct($pTxt,$pClass){
        $this->txt = $pTxt;
        $this->class = $pClass;
    }

    function __toString(){
        return '<p class='.$this->class
        .'>'.$this->txt.'</p>';
    }
}