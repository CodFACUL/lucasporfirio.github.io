<?php

class H1 {
    private $txt;
    private $class;

    function H1($pTxt,$pClass){
        $this->txt = $pTxt;
        $this->class = $pClass;
    }

    function __toString(){
        return '<h1 class='.$this->class
        .'>'.$this->txt.'</h1>';
    }
}