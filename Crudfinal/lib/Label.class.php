<?php

class Label {
    private $class;
    private $texto;
    private $for;

    public function __construct($for,$class,$texto) {
        $this->texto = $texto;
        $this->for = $for;
        $this->class =$class;
    }

    public function criaLabel() {
        return '<label for="'.$this->for.'" class="'.$this->class.'">'.$this->texto.'</label>';
    }
}