<?php

class H2 {
    private $txt;
    private $class;

    function __construct($pTxt,$pClass){
        $this->txt = $pTxt;
        $this->class = $pClass;
    }

    function __toString(){
        return '<h2 class='.$this->class
        .'>'.$this->txt.'</h2>';
    }
}