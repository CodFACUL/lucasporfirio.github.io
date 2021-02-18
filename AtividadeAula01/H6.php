<?php

class H6 {
    private $txt;
    private $class;

    function H6($pTxt,$pClass){
        $this->txt = $pTxt;
        $this->class = $pClass;
    }

    function __toString(){
        return '<h6 class='.$this->class
        .'>'.$this->txt.'</h6>';
    }
}