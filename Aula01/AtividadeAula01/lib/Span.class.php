<?php

class Span {
    private $txt;
    private $class;
    private $id;

    function Span($pClass,$pId,$pTxt){
        $this->txt = $pTxt;
        $this->class = $pClass;
        $this->id = $pId;
    }

    function __toString(){
        return '<span class="'.$this->class.'" id="'.$this->id.'" >'.$this->txt.'</span>';
    }
}