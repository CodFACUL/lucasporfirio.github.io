<?php 
require ('./GravaTxt.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    
</head>
<body class="bg-secondary">

<?php 
$txt= new Gravatxt();
session_start();
if(isset($_POST['acao'])){
if ($_POST['acao']=='Enviar'){
    if(empty($_POST['nome'])){
        $nome='<div class="alert alert-warning" role="alert">
        Preencha o campo Nome!
      </div>';
    }else{
        $nome=null;
    }
    if(empty($_POST['valor'])){
        $valor='<div class="alert alert-warning" role="alert">
        Preencha o campo Valor!
      </div>';
    }else{
        $valor=null;
    }
    if(empty($_POST['qtd'])){
        $qtd='<div class="alert alert-warning" role="alert">
        Preencha o campo Quantidade!
      </div>';
    }else{
        $qtd=null;
    }
    if (($nome || $valor || $qtd)==null){
        $nometxt=$_POST['nome']."\n";
        $valortxt=$_POST['valor']."\n";
        $qtdtxt=$_POST['qtd']."\n"."\n";
        $txt->Gravar($nometxt,$valortxt,$qtdtxt);
    }
}

}




?>


<div class="container">
<div class="jumbotron bg-danger">
    <h3>Cadastro de produtos</h3>
</div>
    <form method="POST" >
        <div class="form col-2">
            <div>
                <label for="nome">Nome</label>
                <input class="form-control"  type="text" name="nome" value="">
                
            </div><?php 
                if(isset( $nome)){
                    echo $nome;
                    $nome=null;
                }
             ?>
            <div>
                <label for="valor">Valor</label>
                <input class="form-control"  type="text" name="valor" value="">
            </div><?php 
                if(isset( $valor)){
                    echo $valor;
                    $valor=null;
                }
             ?>
            <div>
                <label for="quantidade">Quantidade</label>
                <input class="form-control" type="text" name="qtd" value="">
            </div><?php 
                if(isset( $qtd)){
                    echo $qtd;
                    $qtd=null;
                }
             ?>
            <div>
                <input type="submit" class="btn-success " name="acao" value="Enviar">
                <a href="./Cadastros.txt"><input type="button" class="btn-primary " name="acao" value="Listar"></a>
            </div>
         </div>
         </form>
</div>
</body>
</html>