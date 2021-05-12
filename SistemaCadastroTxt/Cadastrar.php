<?php
require ('./vendor/autoload.php');

define('TITLE','Cadastrar Produto');

use \App\Entity\Prod;
$obProduto= new Prod;
//validação do post
if(isset($_POST['nome'],$_POST['valor'],$_POST['quantidade'])){
    
    $obProduto->nome=$_POST['nome'];
    $obProduto->valor=$_POST['valor'];
    $obProduto->quantidade= $_POST['quantidade'];
    $obProduto->cadastrar();

    header('location: index.php?status=success');
    exit;
}

include ('./Header.php');
include ('./Formulario.php');
include ('./footer.php');