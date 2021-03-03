<?php

require('./lib/Link.class.php');
require('./lib/Li.class.php');
require('./lib/Ul.class.php');
require('./lib/Body.php');
require('./lib/Div.php');
require('./lib/Form.php');
require('./lib/Head.php');
require('./lib/Table.php');
require('./lib/Th.php');
require('./lib/Tr.php');


/*$link = new Link();
$link->url='http://unidavi.edu.br'; //modo extenso// //modo1//
$link->txt = 'Unidavi';
$link->target="_blank";
$link->class ='btn';*/
$link = new Link('http://unidavi.edu.br','Unidavi',"_blank",'btn');

echo    $link->getLink();

$link2 = new Link('http://google.com.br','Google',"_blank",'btn');// modo abreviado// //modo1//

echo    $link2->getLink();

//echo new Link('http://google.com.br','Google',"_blank",'btn');// modo abreviado// //modo2//

$ul = new Ul();
$li1 = new Li('item 1','azul');
$li2 = new Li('item 2','azul');
$ul->addLi($li1);
$ul->addLi($li2);
echo $ul;
$table = new Table();
$th1 = new Th('1','l1');
$th2 = new Th('2','l1');
$table->addElemento($th1);
$table->addElemento($th2);
$tr1 = new Tr('a','c1');
$tr2 = new Tr('a','c1');
$table->addElemento($tr1);
$table->addElemento($tr2);
echo $table;



