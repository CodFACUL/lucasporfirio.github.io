<?php

class Script {
    private $txt;
    private $class;

    function __construct($pTxt,$pClass){
        $this->txt = $pTxt;
        $this->class = $pClass;
    }

    function __toString(){
        return '<script class='.$this->class
        .'>'.$this->txt.'</script>';
    }
}