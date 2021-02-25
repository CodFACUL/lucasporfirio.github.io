<?php

require('./lib/Link.class.php');
require('./lib/Li.class.php');
require('./lib/Ul.class.php');

$link = new Link();
$link->url='http://unidavi.edu.br'; //modo extenso// //modo1//
$link->txt = 'Unidavi';
$link->target="_blank";
$link->class ='btn';

echo    $link->getLink();

$link2 = new Link('http://google.com.br','Google',"_blank",'btn');// modo abreviado// //modo1//

echo    $link2->getLink();

echo new Link('http://google.com.br','Google',"_blank",'btn');// modo abreviado// //modo2//

$ul = new Ul();
$li1 = new Li('item 1','azul');
$li2 = new Li('item 2','azul');
$ul->addLi($li1);
$ul->addLi($li2);
echo $ul;


