<?php

require('autoload.php');

$metaCharset = new Metatags("UTF-8");
$metaHttEquiv = new Metatags(null, null, "X-UA-Compatible", "IE=edge");
$metaName = new Metatags(null, "viewport", null, "width=device-width, initial-scale=1.0");
$title = new Title('titulo',"Login");
$head = new Head();
$linkcss = new LinkCss();
$linkcss->link("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css","stylesheet" ,"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6","anonymous");
$head->addHead($metaCharset);
$head->addHead($metaHttEquiv);
$head->addHead($metaName);
$head->addHead($title);
$head->addHead($linkcss);
$body = new Body("body");

$login =new Div("login");
$titlelogin = new H3("text-center text-white pt-5",'Login form');
$contlog = new Div("container");
$loginrow = new Div("row justify-content-center align-items-center");
$logincolum = new Div("col-md-6");
$loginbox = new Div("col-md-12");
$form = new Form("form");
$titlelog = new H3("text-center text-info",'Login');
$formgruop1 = new Div("form-group");
$label1 = new Label("username","text-info",'Nome');
$input1 = new Input("text","username","username","form-control");
$formgroup2  = new Div("form-group");
$label2 = new Label("password","text-info",'Senha');
$input2 = new Input("text","password","password","form-control");
$registra = new Div("text-right");
$linkregistro = new Link("#",'Registre aqui','_blank',"text-info");
$formgroup1->addElemento($label1);
$formgroup1->addElemento($inputl1);
$formgroup2->addElemento($label2);
$formgroup2->addElemento($input2);
$formgroup3->addElemento($label3);
$formgroup3->addElemento($input3);
$form->addElemento($titlelog);
$form->addElemento($formgroup1);
$form->addElemento($formgroup2);
$form->addElemento($formgroup3);
$loginbox->addElemento($form);
$logincolum->addElemento($loginbox);
$loginrow->addElemento($logincolum);
$contlog->addElemento($loginrow);
$login->addElemento($titlelogin);
$login->addElemento($contlog);
$body->addElemento($login);
$html = new Html($head,$body);
echo $html;
?>

