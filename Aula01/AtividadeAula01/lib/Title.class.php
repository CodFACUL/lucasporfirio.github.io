<?php

class Title {
    private $txt;
    private $class;

    function Title($pTxt,$pClass){
        $this->txt = $pTxt;
        $this->class = $pClass;
    }

    function __toString(){
        return '<title class='.$this->class
        .'>'.$this->txt.'</title>';
    }
}