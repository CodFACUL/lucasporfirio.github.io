<?php

class Td {
    private $class;
    private $txt;

    function __construct($pClass,$pTxt){
        $this->class = $pClass;
        $this->txt = $pTxt;     
    }

    function __toString(){
        return '<td class='.$this->class
        .'>'.$this->txt.'</td>';
    }
}