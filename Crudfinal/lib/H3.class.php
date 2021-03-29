<?php

class H3 {
    private $txt;
    private $class;

    function __construct($pTxt,$pClass){
        $this->txt = $pTxt;
        $this->class = $pClass;
    }

    function __toString(){
        return '<h3 class='.$this->class
        .'>'.$this->txt.'</h3>';
    }
}