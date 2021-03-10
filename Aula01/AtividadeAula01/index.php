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
require('./lib/Td.php');
require('./lib/Span.php');
require('./lib/Input.php');
require('./lib/LinkCss.php');



/*$link = new Link();
$link->url='http://unidavi.edu.br'; //modo extenso// //modo1//
$link->txt = 'Unidavi';
$link->target="_blank";
$link->class ='btn';*/
$link = new Link('http://unidavi.edu.br','Unidavi',"_blank",'btn');

echo    $link->getLink();
exit;
$link2 = new Link('http://google.com.br','Google',"_blank",'btn');// modo abreviado// //modo1//

echo    $link2->getLink();
$linkcss = new LinkCss( "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css","stylesheet" ,"sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl","anonymous");

//echo new Link('http://google.com.br','Google',"_blank",'btn');// modo abreviado// //modo2//

$ul = new Ul();
$li1 = new Li('item 1','azul');
$li2 = new Li('item 2','azul');
$ul->addLi($li1);
$ul->addLi($li2);
echo $ul;
$table = new Table();
$tr1 = new Tr();
$th1 = new Th('1','l1');
$th2 = new Th('2','l1');
$tr1->addElemento($th1);
$tr1->addElemento($th2);
$tr2 = new Tr();
$td1 = new Td('a','c1');
$td2 = new Td('b','c1');
$tr2->addElemento($td1);
$tr2->addElemento($td2);
$table->addElemento($tr1);
$table->addElemento($tr2);
echo $table;
$form = new Form();
$span1 = new Span('input-group-text','basic-addon1','@');
$input1 = new Input('text','form-control','Username','Username','basic-addon1');
$form->addElemento($span1);
$form->addElemento($input1);
echo $form;
echo $span1;



