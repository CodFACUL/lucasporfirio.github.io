<?php 
    class Calculos{


public function Soma($int1,$int2){
    $_SESSION['botao']= (string)$int1+(string)$int2;
    $_SESSION['operador']=$_POST['botao'];
    $_SESSION['limpar']='limpar';
    $_SESSION['valor']= $_SESSION['botao'];
    $_SESSION['entrou']='entrou';
    print_r($_SESSION['limpar']);
    print_r($_SESSION['botao']);
}

public function Subtrai($int1,$int2){
    $_SESSION['botao']= (string)$int1-(string)$int2;
                                            $_SESSION['operador']=$_POST['botao'];
                                            $_SESSION['limpar']='limpar';
                                            $_SESSION['valor']= $_SESSION['botao'];
                                            $_SESSION['entrou']='entrou';
                                            print_r($_SESSION['limpar']);
                                            print_r($_SESSION['botao']);
}

public function Multiplica($int1,$int2){
    $_SESSION['botao']= (string)$int1*(string)$int2;
    $_SESSION['operador']=$_POST['botao'];
    $_SESSION['limpar']='limpar';
    $_SESSION['valor']= $_SESSION['botao'];
    $_SESSION['entrou']='entrou';
    print_r($_SESSION['limpar']);
    print_r($_SESSION['botao']);
}

public function Divide($int1,$int2){
    $_SESSION['botao']= (string)$int1/(string)$int2;
    $_SESSION['operador']=$_POST['botao'];
    $_SESSION['limpar']='limpar';
    $_SESSION['valor']= $_SESSION['botao'];
    $_SESSION['entrou']='entrou';
    print_r($_SESSION['limpar']);
    print_r($_SESSION['botao']);
}



    }
?>