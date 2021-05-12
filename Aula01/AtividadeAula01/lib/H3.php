<?php

class H3 {
    private $txt;
    private $class;

    function H3($pTxt,$pClass){
        $this->txt = $pTxt;
        $this->class = $pClass;
    }

    function __toString(){
        return '<h3 class='.$this->class
        .'>'.$this->txt.'</h3>';
    }
}