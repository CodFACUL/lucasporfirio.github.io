<?php

class Link{

    private $url;
    private $txt;
    private $target;
    private $class;

    function Link($pUrl,$pTxt,$pTarget,$pClass){
        $this->url = $pUrl;
        $this->txt = $pTxt;
        $this->target = $pTarget;
        $this ->class = $pClass;

    }

    public function getLink(){    //modo1//
        echo '<a href="'.$this->url
        .'" target="'.$this->target
        .'" class="'.$this->class.'">
        '.$this->txt.'</a>';
    }

    public function _toString(){ //modo2//
        echo '<a href="'.$this->url
        .'" target="'.$this->target
        .'" class="'.$this->class.'">
        '.$this->txt.'</a>';
    }

}