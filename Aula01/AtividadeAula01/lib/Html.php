<?php

class Html{
    private $head;
    private $body;

    
    function Html($pHead,$pBody){
        $this->head = $pHead;
        $this->body = $pBody;
    }

    public function __toString(){ 
        return '<!doctype html><html lang="en">'.$this->head.$this->body
        .'</html>';
    }
}