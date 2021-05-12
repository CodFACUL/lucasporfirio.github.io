<?php

class Title {
    private $txt;
    private $class;

    function __construct($pTxt,$pClass){
        $this->txt = $pTxt;
        $this->class = $pClass;
    }

    function __toString(){
        return '<title class='.$this->class
        .'>'.$this->txt.'</title>';
    }
}