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
$login->addElemento($titlelogin);
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
$input2 = new Input("text","username","username","form-control");

