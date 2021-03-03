<?php

class Input {
    private $class;
    private $type;
    private $id;
    private $name;

    function Input($pName,$pClass,$pType,$pId){
        $this->class = $pClass;
        $this->type = $pType;
        $this->id = $pId;
        $this->name = $pName;
    }

    function __toString(){
        return '<Input class='.$this->class
        .'type="'. $this->type. '"id='. $this->id .'" name='. $this->name.'>';
    }
}