<?php 
require ('./Calculos.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="./css.css">
    <title>Calculadora</title>
</head>
<body>


<?php
session_start();

if ($_POST['botao']=='C'){
    unset($_SESSION['botao']);
    unset($_SESSION['limpar']);
    unset($_SESSION['valor']);
    unset($_SESSION['operador']);
    unset($_SESSION['entrou']);

}
if (empty($_SESSION['limpar'])) {
    $_SESSION['limpar'] = 'manter';
  }
  if (empty($_SESSION['operador'])) {
    $_SESSION['operador'] = '';
  }
if (empty($_SESSION['botao'])) {
    $_SESSION['botao'] = '';
  }
  if (empty($_SESSION['entrou'])) {
    $_SESSION['entrou'] = '';
  }
  
  if (isset($_POST['botao'])){
     

      if( $_POST['botao']!='-'
                                    and $_POST['botao']!='+'
                                    and $_POST['botao']!='*' 
                                    and $_POST['botao']!='/' 
                                    and $_POST['botao']!='=' 
                                    and $_POST['botao']!='C'){
                                        print_r($_SESSION['limpar']);
                                        if($_SESSION['limpar']=='limpar'){
                                            print_r('entrou');
                                            $_SESSION['botao']=$_POST['botao']; 
                                            $_SESSION['limpar']='manter';
                                        }else
                                        $_SESSION['botao'].=$_POST['botao']; 
                                        print_r('concatena');
                                    }else
    if ((empty($_SESSION['valor']) or $_SESSION['entrou']=='entrou') and ($_POST['botao']=='+'
                        or $_POST['botao']=='-'
                        or $_POST['botao']=='*' 
                        or $_POST['botao']=='/')){
                            if($_SESSION['entrou']=='entrou'){
                    
                               $_SESSION['operador']=$_POST['botao'];
    print_r('fodeu');
                            $_SESSION['botao']='';
                            $_SESSION['entrou']='saiu'; 
                            }else{
                            $_SESSION['operador']=$_POST['botao'];
                            $_SESSION['valor']= $_SESSION['botao'];
                            $_SESSION['botao']='';

                            print_r($_SESSION['valor']);}
    }else
    if (!empty($_SESSION['valor']) and ($_POST['botao']=='+'
                                    or $_POST['botao']=='-'
                                    or $_POST['botao']=='*' 
                                    or $_POST['botao']=='/')){
                                        $int1 = (double)$_SESSION['valor'];
                                        $int2 = (double) $_SESSION['botao'];
                                        print_r('soma');
                                        print_r($_SESSION['operador']);
                                        if($_SESSION['operador']=='+'){
                                            $soma = new Calculos($int1,$int2);
                                            $soma->Soma($int1,$int2);
                                        }
                                        if($_SESSION['operador']=='-'){
                                            $subtrai = new Calculos($int1,$int2);
                                            $subtrai->Subtrai($int1,$int2);
                                        }
                                        if($_SESSION['operador']=='*'){
                                            $multiplica = new Calculos($int1,$int2);
                                            $multiplica->Multiplica($int1,$int2);
                                        }
                                        if($_SESSION['operador']=='/'){
                                            $divide = new Calculos($int1,$int2);
                                            $divide->Divide($int1,$int2);
                                        }
                                 
                                    }


                                    if($_SESSION['operador']!='' and  $_POST['botao']=='='){
                                        $int1 = (double)$_SESSION['valor'];
                                        $int2 = (double) $_SESSION['botao'];
                                        print_r('soma');
                                        print_r($_SESSION['operador']);
                                        if($_SESSION['operador']=='+'){
                                            $soma = new Calculos($int1,$int2);
                                            $soma->Soma($int1,$int2);
                                            $_SESSION['operador']='';
                                        } else
                                        if($_SESSION['operador']=='-'){
                                            $subtrai = new Calculos($int1,$int2);
                                            $subtrai->Subtrai($int1,$int2);
                                            $_SESSION['operador']='';
                                        } else
                                        if($_SESSION['operador']=='*'){
                                            $multiplica = new Calculos($int1,$int2);
                                            $multiplica->Multiplica($int1,$int2);
                                            $_SESSION['operador']='';
                                        } else
                                        if($_SESSION['operador']=='/'){
                                            $divide = new Calculos($int1,$int2);
                                            $divide->Divide($int1,$int2);
                                            $_SESSION['operador']='';
                                        }
                                 

                                    }
    }
                                   



?>

<div class="container">
    <div class=" bg-primary">
        <form method="POST">
            <div class="bg-white" id="calculadora">
                <div>
                    <input class="alert-secondary"id="dados" type="text" name="display" value="<?php echo $_SESSION['botao'] ?>"></input>
                </div>
                <div>
                    <input class="bg-danger" type="submit" name="botao" value="1">
                    <input class="bg-danger" type="submit" name="botao" value="2">
                    <input class="bg-danger" type="submit" name="botao" value="3">
                    <input class="bg-danger" type="submit" name="botao" value="+">
                </div>
                <div>
                    <input class="bg-danger" type="submit" name="botao" value="4">
                    <input class="bg-danger" type="submit" name="botao" value="5">
                    <input class="bg-danger" type="submit" name="botao" value="6">
                    <input class="bg-danger" type="submit" name="botao" value="-">
                </div>
                <div>
                    <input class="bg-danger" type="submit" name="botao" value="7">
                    <input class="bg-danger" type="submit" name="botao" value="8">
                    <input class="bg-danger" type="submit" name="botao" value="9">
                    <input class="bg-danger" type="submit" name="botao" value="*">
                </div>
                <div>
                    <input class="bg-danger" type="submit" name="botao" value="0">
                    <input class="bg-danger" type="submit" name="botao" value="C">
                    <input class="bg-danger" type="submit" name="botao" value="/">
                    <input class="bg-danger" type="submit" name="botao" value="=">
                </div>
            </div>
        </form>
    </div>
</div>



    
</body>
</html>