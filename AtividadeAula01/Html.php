<?php

class Html{
    private $head;
    private $body;

    
    function Html($pHead,$pBody){
        $this->head = $pHead;
        $this->body = $pBody;
    }

    public function _toString(){ 
        echo '<head'.$this->head
        .'/head>'.'<body>'$this->body
        .'/body>';
    }