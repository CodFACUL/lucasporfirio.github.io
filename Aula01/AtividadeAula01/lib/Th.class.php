<?php

class Th {
    private $txt;
    private $class;

    function Th($pTxt,$pClass){
        $this->txt = $pTxt;
        $this->class = $pClass;
    }

    function __toString(){
        return '<th class='.$this->class
        .'>'.$this->txt.'</th>';
    }
}