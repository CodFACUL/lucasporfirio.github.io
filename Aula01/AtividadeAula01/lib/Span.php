<?php

class Span {
    private $txt;
    private $class;
    private $for;

    function Label($pClass,$pId,$pTxt){
        $this->txt = $pTxt;
        $this->class = $pClass;
        $this->id = $pId;
    }

    function __toString(){
        return '<span class="'.$this->class.'" id="'.$this->for.'" >'.$this->txt.'</span>';
    }
}