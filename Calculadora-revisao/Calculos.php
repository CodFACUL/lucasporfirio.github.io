<?php 
    class Calculos{

        public $val1;
        public $val2;




        function Soma($val1,$val2){
            $val1=(double)$_SESSION['valor1'];
            $val2=(double)$_SESSION['valor2'];
            $_SESSION['valor1']=$val1+$val2;
            $_SESSION['display']='';
            $_SESSION['valor2']='';
            if($_POST['botao']!='='){
                $_SESSION['operador']=$_POST['botao'];
            }else{
                $_SESSION['operador']='N';
                $_SESSION['display']=$_SESSION['valor1'];
            }
        
        }
        function Subtrai($val1,$val2){
            $val1=(double)$_SESSION['valor1'];
            $val2=(double)$_SESSION['valor2'];
            $_SESSION['valor1']=$val1-$val2;
            $_SESSION['display']='';
            $_SESSION['valor2']='';
            if($_POST['botao']!='='){
                $_SESSION['operador']=$_POST['botao'];
            }else{
                $_SESSION['operador']='N';
                $_SESSION['display']=$_SESSION['valor1'];
            }
        
        }
        
        function Multiplica($val1,$val2){
            $val1=(double)$_SESSION['valor1'];
            $val2=(double)$_SESSION['valor2'];
            $_SESSION['valor1']=$val1*$val2;
            $_SESSION['display']='';
            $_SESSION['valor2']='';
            if($_POST['botao']!='='){
                $_SESSION['operador']=$_POST['botao'];
            }else{
                $_SESSION['operador']='N';
                $_SESSION['display']=$_SESSION['valor1'];
            }
        
        }
        
        function Divide($val1,$val2){
            $val1=(double)$_SESSION['valor1'];
            $val2=(double)$_SESSION['valor2'];
            $_SESSION['valor1']=$val1/$val2;
            $_SESSION['display']='';
            $_SESSION['valor2']='';
            if($_POST['botao']!='='){
                $_SESSION['operador']=$_POST['botao'];
            }else{
                $_SESSION['operador']='N';
                $_SESSION['display']=$_SESSION['valor1'];
            }
        
        }
        
        function logica(){
        if($_POST['botao']=='C'){
            unset($_SESSION['display']);
            unset($_SESSION['valor1']);
            unset($_SESSION['valor2']);
            unset($_SESSION['operador']);
        }
        if(empty($_SESSION['operador'])){
            $_SESSION['operador']='';
        }
        if(empty($_SESSION['display'])){
            $_SESSION['display']='';
        }
        if(empty($_SESSION['valor1'])){
            $_SESSION['valor1']='';
        }
        if(empty($_SESSION['valor2'])){
            $_SESSION['valor2']='';
        }
         if(isset($_POST['botao'])){
            if($_POST['botao']!='-' and $_POST['botao']!='+'
                                    and $_POST['botao']!='*' 
                                    and $_POST['botao']!='/'
                                    and $_POST['botao']!='='
                                    and $_POST['botao']!='C'){
                                            if($_SESSION['operador']=='N'){
                                                $_SESSION['display']=$_POST['botao'];
                                                $_SESSION['valor1']='';
                                                $_SESSION['operador']='';
                                            }else{
                                            $_SESSION['display'].=$_POST['botao'];}
                                    }
            if($_POST['botao']=='-' or $_POST['botao']=='+'
                                    or $_POST['botao']=='*' 
                                    or $_POST['botao']=='/'
                                    or $_POST['botao']=='='){
                                        if ($_SESSION['valor1']==''){
                                        $_SESSION['valor1']=$_SESSION['display'];
                                        $_SESSION['display']='';
                                        $_SESSION['operador']=$_POST['botao'];
                                        }else if($_SESSION['valor2']==''){
                                            if($_SESSION['operador']=='N'){
                                                $_SESSION['operador']=$_POST['botao'];}
                                           else{
                                                $_SESSION['valor2']=$_SESSION['display'];
                                                $_SESSION['display']='';
                                                    }
                                            if($_SESSION['operador']=='+'){
                                                Soma($_SESSION['valor1'],$_SESSION['valor2']);
                                            }else if($_SESSION['operador']=='-'){
                                                Subtrai($_SESSION['valor1'],$_SESSION['valor2']);
                                            }else if($_SESSION['operador']=='*'){
                                                Multiplica($_SESSION['valor1'],$_SESSION['valor2']);
                                            }else if($_SESSION['operador']=='/'){
                                                Divide($_SESSION['valor1'],$_SESSION['valor2']);
                                            }
                                        }
                                       
        
                                    }
        
        
        
        
        
        
         }
        
        





 }
}

?>