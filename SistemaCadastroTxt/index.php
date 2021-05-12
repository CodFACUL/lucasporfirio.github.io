<?php 
require ('./vendor/autoload.php');
use \App\Entity\Prod;
$produtos = Prod:: getProdutos();

require ('./Header.php');
require ('./Listagem.php');
require ('./footer.php');


?>