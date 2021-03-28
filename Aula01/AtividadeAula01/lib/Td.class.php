<?php

class Td {
    private $txt;
    private $class;

    function Td($pTxt,$pClass){
        $this->txt = $pTxt;
        $this->class = $pClass;
    }

    function __toString(){
        return '<td class='.$this->class
        .'>'.$this->txt.'</td>';
    }
}