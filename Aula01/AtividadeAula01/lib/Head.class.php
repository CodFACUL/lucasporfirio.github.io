<?php

class Head{
    private $lista = array();

    
    public function addHead($pMetaTag){
        $this->lista[] = $pMetaTag;
    }
    public function __toString(){
        $vHead = '<head>';
        foreach ($this->lista as $tag){
            $vHead .= $tag;
        }
        $vHead .= '</head>';
        return $vHead;
    }
}