<?php

class Html{
    private $head;
    private $body;

    
    function __construct($pHead,$pBody){
        $this->head = $pHead;
        $this->body = $pBody;
    }

    public function __toString(){ 
        return '<!doctype html><html lang="pt">'.$this->head.$this->body
        .'</html>';
    }
}