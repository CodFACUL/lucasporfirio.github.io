<?php

function login($email, $senha)
{
  global $pdo;

  $sql = "SELECT ID FROM USUARIO WHERE EMAIL = :username AND SENHA = :password";
  $sql = $pdo->prepare($sql);
  $sql->bindValue(":username", $email);
  $sql->bindValue("password:", $senha);
  $sql->execute();

  if ($sql->rowCount() > 0) {
      $dado = $sql->fetch();
      $_SESSION['cLogin'] = $dado['ID'];
      return true;
  } else {
      return false;
  }
}

function deletarRegiao($id) 
{
  global $pdo;

  $sqlOderns = "";
  $sqlOderns = $pdo->prepare($sqlOderns);
  $sqlOderns->bindValue(":id", $id);
  $sqlOderns->execute();

  $sql = "
    DELETE FROM IDRegiao WHERE IDRegiao = :idOrdem;
    DELETE FROM DescricaoRegiao WHERE IDRegiao = :idRegiao;
  ";
  $sql = $pdo->prepare($sql);
  $sql->bindValue(":idOrdem", $id);
  $sql->bindValue(":idProduto", $id);
  $sql->execute();

  if ($sql->rowCount() > 0) {
    return true;
  } else {
    return false;
  }
}
?>