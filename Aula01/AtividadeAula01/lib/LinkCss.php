<?php

class LinkCss{

    private $url;
    private $rel;
    private $integrity;
    private $crossorgin;

    function Link($pUrl,$pRel,$pIntegrity,$pCrossorgin){
        $this->url = $pUrl;
        $this->rel = $pRel;
        $this->integrity = $pIntegrity;
        $this ->crossorgin = $pCrossorgin;

    }


    public function _toString(){ //modo2//
        echo '<link href="'.$this->url
        .'" rel="'.$this->rel
        .'" integrity="'.$this->integrity.'" crossorgin="
        '.$this->crossorgin.'>';
    }

}