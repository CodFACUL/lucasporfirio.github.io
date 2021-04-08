<?php

require('autoload.php');
require ('Conexao.php');
require ('Funcoes.php');


if (!empty($_GET['acao'])) {
  if ($_GET['acao'] == 'sair') {
    unset($_SESSION['cLogin']);
    $script1 = new Script(null,'"window.location.href = "./index.php";"');
    echo $script1;
    

  }
}

$metaCharset = new Metatags("UTF-8");
$metaHttEquiv = new Metatags(null, null, "X-UA-Compatible", "IE=edge");
$metaName = new Metatags(null, "viewport", null, "width=device-width, initial-scale=1.0");
$title = new Title('titulo',"Login");
$head = new Head();
$linkcss = new LinkCss();
$linkcss->link("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css","stylesheet" ,"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6","anonymous");
$linkcss2 = new LinkCss();
$linkcss2->link("/lucasporfirio.github.io/Crudfinal/style.css","stylesheet",null,null);
$head->addHead($metaCharset);
$head->addHead($metaHttEquiv);
$head->addHead($metaName);
$head->addHead($title);
$head->addHead($linkcss);
$head->addHead($linkcss2);
$body = new Body("body");
$login =new Div("login");





if (!empty($_SESSION['cLogin'])) {

$script = new Script(null,'"window.location.href = "./TabelaP.php";"');
$login->addElemento($script);

}



$contlog = new Div("container");

if (!empty($_POST['password']) && !empty($_POST['username'])) {
    $email = $_POST['username'];
    $senha = $_POST['password'];

    if (login($email, $senha)) {

        $contlog->addElemento($script);

        } else {
$alertadiv = new Div("alert alert-danger");
$alertadiv->addElemento('usuários e/ou senha incorretos!');

    }
}
$loginrow = new Div("row justify-content-center align-items-center login-row");
$logincolum = new Div("col-md-6 login-column");
$loginbox = new Div("col-md-12 login-box");
$form = new Form("form login-form");
$titlelog = new H3('Login',"text-center text-info");
$formgroup1 = new Div("form-group");
$label1 = new Label("username","text-info",'Nome');
$input1 = new Input2("text","form-control","username","username");
$formgroup2  = new Div("form-group");
$label2 = new Label("password","text-info",'Senha');
$input2 = new Input2("text","form-control","password","password");
$registra = new Div("text-right register-link");
$formgroup3 = new Div("form-group  align-items-center");

$input3 = new Input2("submit","btn btn-info btn-md ","Entrar","Entrar");
$linkregistro = new Link();
$linkregistro->link2('#','Registre aqui',"_blank",'text-info');
$formgroup1->addElemento($label1);
$formgroup1->addElemento($input1);
$formgroup2->addElemento($label2);
$formgroup2->addElemento($input2);

$formgroup3->addElemento($input3);
$registra->addElemento($linkregistro);
$form->addElemento($titlelog);
$form->addElemento($formgroup1);
$form->addElemento($formgroup2);
$form->addElemento($formgroup3);
$form->addElemento($registra);
$loginbox->addElemento($form);
$logincolum->addElemento($loginbox);
$loginrow->addElemento($logincolum);
$contlog->addElemento($loginrow);
$login->addElemento($contlog);
$body->addElemento($login);
$html = new Html($head,$body);
echo $html;
?>

