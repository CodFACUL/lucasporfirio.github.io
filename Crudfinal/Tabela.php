<?php

require('autoload.php');
require('Conexao.php');
$metaCharset = new Metatags("UTF-8");
$metaHttEquiv = new Metatags(null, null, "X-UA-Compatible", "IE=edge");
$metaName = new Metatags(null, "viewport", null, "width=device-width, initial-scale=1.0");
$title = new Title("Tabela",'titulo');
$head = new Head();
$linkcss = new LinkCss();
$linkcss->link("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css","stylesheet" ,"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6","anonymous");
$head->addHead($metaCharset);
$head->addHead($metaHttEquiv);
$head->addHead($metaName);
$head->addHead($title);
$head->addHead($linkcss);
$body = new Body("body");
$container = new Div("container");

$barra = new Div("row pb-5");
$conteudoBarra = new Div("col bg-primary");
$texto = new  H4("Lista",null);
$conteudoBarra->addElemento($texto);
$barra->addElemento($conteudoBarra);

$areaprincipal = new Div("row");
$menu = new Div("col-sm-2 m-0 p-0");
//$menu->addElement($texto);

//itens do menu
$menuConteudo = new Ul("list-group");
$menuConteudo->addElemento(new Li("list-group-item", "Pessoas"));
$menuConteudo->addElemento(new Li("list-group-item", "Produtos"));
$menuConteudo->addElemento(new Li("list-group-item", "Contas"));
$menuConteudo->addElemento(new Li("list-group-item", "Créditos"));
$menu->addElemento($menuConteudo);

$miolo = new Div("col-sm-10 m-0 p-0");

$areaprincipal->addElemento($menu);
$areaprincipal->addElemento($miolo);

$container->addElemento($barra);
$container->addElemento($areaprincipal);

$tabela = new Div ("container");
$table = new Table("table table-striped table-hover");
$thead = new Thead("p-3 mb-2 bg-primary text-white");
$tr1 = new Tr(null);
$thst = new Th("col",'#');
$thname = new Th("col",'Name');
$themail = new Th ("col",'Email');
$thid = new Th ("col",'ID');
$thaction = new Th ("col",'Ação');
$tbody = new Tbody(null);
$tr2 = new Tr(null);
$thst2 = new Th("row",'1');
$tdname = new Td(null,"Mark");
$tdemail = new Td(null,"email");
$tdid = new Td(null,"@tanso");
$tdaction = new Td(null,"Ação");





$tr1->addElemento($thst);
$tr1->addElemento($thname);
$tr1->addElemento($themail);
$tr1->addElemento($thid);
$tr1->addElemento($thaction);
$tr2->addElemento($thst2);
$tr2->addElemento($tdname);
$tr2->addElemento($tdemail);
$tr2->addElemento($tdid);
$tr2->addElemento($tdaction);
$tbody->addElemento($tr2);
$thead->addElemento($tr1);
$table->addElemento($thead);
$table->addElemento($tbody);



$miolo->addElemento("jkkkk");
$body->addElemento($container);
$html = new Html($head,$body);
echo $html;
?>
