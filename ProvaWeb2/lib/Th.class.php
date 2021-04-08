<?php

class Th {
    private $class;
    private $txt;

    function __construct($pClass,$pTxt){
        $this->class = $pClass;
        $this->txt = $pTxt;
        
    }

    function __toString(){
        return '<th scope="'.$this->class
        .'">'.$this->txt.'</th>';
    }
}