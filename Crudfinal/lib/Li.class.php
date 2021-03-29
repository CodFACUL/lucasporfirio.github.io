<?php

class Li {
    private $class;
    private $txt;
    

    function __construct($pTxt,$pClass){
        $this->class = $pClass;
        $this->txt = $pTxt;
    }

    function __toString(){
        return '<li class="'.$this->class
        .'">'.$this->txt.'</li>';
    }
}