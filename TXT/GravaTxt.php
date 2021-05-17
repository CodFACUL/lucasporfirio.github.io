<?php
class Gravatxt{

public function gravar($nome,$valor,$qtd){
$myfile = fopen("Cadastros.txt", "a") or die("Unable to open file!");
fwrite($myfile, $nome);
fwrite($myfile, $valor);
fwrite($myfile, $qtd);
fclose($myfile);
}
}
?>