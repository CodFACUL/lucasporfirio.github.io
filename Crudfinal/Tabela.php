<?php

require('autoload.php');

$metaCharset = new Metatags("UTF-8");
$metaHttEquiv = new Metatags(null, null, "X-UA-Compatible", "IE=edge");
$metaName = new Metatags(null, "viewport", null, "width=device-width, initial-scale=1.0");
$title = new Title('titulo',"Tabela");
$head = new Head();
$linkcss = new LinkCss();
$linkcss->link("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css","stylesheet" ,"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6","anonymous");
$linkcss2 = new LinkCss();
$head->addHead($metaCharset);
$head->addHead($metaHttEquiv);
$head->addHead($metaName);
$head->addHead($title);
$head->addHead($linkcss);
$body = new Body("body");
$tabela = new Div ("tabela");
$form = new Form("form");
$tr = new Tr();
$td = new Td();