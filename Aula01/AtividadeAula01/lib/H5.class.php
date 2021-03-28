<?php

class H5 {
    private $txt;
    private $class;

    function __construct($pTxt,$pClass){
        $this->txt = $pTxt;
        $this->class = $pClass;
    }

    function __toString(){
        return '<h5 class='.$this->class
        .'>'.$this->txt.'</h5>';
    }
}