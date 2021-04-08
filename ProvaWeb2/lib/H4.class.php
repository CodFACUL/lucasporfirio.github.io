<?php

class H4 {
    private $txt;
    private $class;

    function __construct($pTxt,$pClass){
        $this->txt = $pTxt;
        $this->class = $pClass;
    }

    function __toString(){
        return '<h4 class='.$this->class
        .'>'.$this->txt.'</h4>';
    }
}