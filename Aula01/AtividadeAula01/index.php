<?php

require('autoload.php');

$metaCharset = new Metatags("UTF-8");
$metaHttEquiv = new Metatags(null, null, "X-UA-Compatible", "IE=edge");
$metaName = new Metatags(null, "viewport", null, "width=device-width, initial-scale=1.0");
$title = new Title('titulo',"Atividade");
$head = new Head();
$linkcss = new LinkCss();
$linkcss->link("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css","stylesheet" ,"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6","anonymous");
$head->addHead($metaCharset);
$head->addHead($metaHttEquiv);
$head->addHead($metaName);
$head->addHead($title);
$head->addHead($linkcss);
$body = new Body("body");

$ul = new Ul();
$li1 = new Li('item 1','azul');
$li2 = new Li('item 2','azul');
$ul->addLi($li1);
$ul->addLi($li2);
$div1 = new Div("container-sm");
$table = new Table('table table-sm table-dark');
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
$form = new Form();
$divform = new Div("input-group mb-3");
$span1 = new Span('input-group-text','basic-addon1','@');
$input1 = new Input('text','form-control','Username','Username','basic-addon1');
$form->addElemento($span1);
$form->addElemento($input1);
$divform->addElemento($form);
$div1->addElemento($ul);
$div1->addElemento($table);
$div1->addElemento($divform);
$body->addElemento($div1);
$html = new Html($head,$body);
echo $html;
?>


