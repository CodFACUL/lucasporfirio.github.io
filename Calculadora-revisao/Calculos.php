<?php 
    class Calculos{

        public $val1;
        public $val2;




       public function Soma($val1,$val2){
            $_SESSION['valor1']=$val1+$val2;
            $_SESSION['display']='';
            $_SESSION['valor2']=null;
            if($_POST['botao']!='='){
                $_SESSION['operador']=$_POST['botao'];
                print_r('somou');
            }else{
                $_SESSION['operador']='N';
                $_SESSION['display']=$_SESSION['valor1'];
            }
        
        }
       public function Subtrai($val1,$val2){
            $_SESSION['valor1']=$val1-$val2;
            $_SESSION['display']='';
            $_SESSION['valor2']=null;
            if($_POST['botao']!='='){
                $_SESSION['operador']=$_POST['botao'];
            }else{
                $_SESSION['operador']='N';
                $_SESSION['display']=$_SESSION['valor1'];
            }
        
        }
        
        public function Multiplica($val1,$val2){
            $_SESSION['valor1']=$val1*$val2;
            $_SESSION['display']='';
            $_SESSION['valor2']=null;
            if($_POST['botao']!='='){
                $_SESSION['operador']=$_POST['botao'];
                print_r('multiplicou');
            }else{
                $_SESSION['operador']='N';
                $_SESSION['display']=$_SESSION['valor1'];
            }
        
        }
        
       public function Divide($val1,$val2){

            $_SESSION['valor1']=$val1/$val2;
            $_SESSION['display']='';
            $_SESSION['valor2']=null;
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
            $_SESSION['operador']=null;
        }
        if(empty($_SESSION['display'])){
            $_SESSION['display']=null;
        }
        if(empty($_SESSION['valor1'])){
            $_SESSION['valor1']=null;
        }
        if(empty($_SESSION['valor2'])){
            $_SESSION['valor2']=null;
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
                                        }else if($_SESSION['valor2']==null){
                                            if($_SESSION['operador']=='N'){
                                                $_SESSION['operador']=$_POST['botao'];}
                                           else{
                                                $_SESSION['valor2']=$_SESSION['display'];
                                                print_r($_SESSION['valor2']);
                                                print_r('entraaaqa');
                                                $_SESSION['display']='';
                                                    }
                                                    if((!is_numeric($_SESSION['valor2']))){
                                                           
                                                            print_r('caceta');
                                                        $_SESSION['display']='';
                                                    
                                                    }else{
                                                        print_r('vai tomar no cu');
                                                        if($_SESSION['operador']=='+'){
                                                            $this->Soma((double)$_SESSION['valor1'],(double)$_SESSION['valor2']);
                                                        }else if($_SESSION['operador']=='-'){
                                                            $this->Subtrai((double)$_SESSION['valor1'],(double)$_SESSION['valor2']);
                                                        }else if($_SESSION['operador']=='*'){
                                                            $this->Multiplica((double)$_SESSION['valor1'],(double)$_SESSION['valor2']);
                                                        }else if($_SESSION['operador']=='/'){
                                                            $this->Divide((double)$_SESSION['valor1'],(double)$_SESSION['valor2']);
                                                        }
                                                        
                                                    }
                                        }

        
                                    }
        
        
        
        
        
        
         }
        
        





 }
}

?>