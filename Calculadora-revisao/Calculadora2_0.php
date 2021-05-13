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

$logica= new Calculos();
$logica->logica();










?>

<div class="container">
    <div class=" bg-primary">
        <form method="POST">
            <div class="bg-white" id="calculadora">
                <div>
                    <input class="alert-secondary"id="dados" type="text" name="display" value="<?php echo $_SESSION['display'] ?>"></input>
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