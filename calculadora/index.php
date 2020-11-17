<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="calcss.css"/>
    <title>Calculadora</title>
</head>
<body>
<?php
    session_start();

    if (empty($_SESSION['calc'])) {
      $_SESSION['calc'] = '';
    }

    if (!empty($_POST['entra']))
    {
      if (
        (  substr($_SESSION['calc'], -1) == '*' || substr($_SESSION['calc'], -1) == '+'  || substr($_SESSION['calc'], -1) == '-' || substr($_SESSION['calc'], -1) == '/') &&
        ( $_POST['digito'] == '+' || $_POST['digito'] == '-' || $_POST['digito'] == '/'|| $_POST['digito'] == '*') )
      {
        $_SESSION['calc'] = sprintf(substr($_SESSION['calc'], 0, -1), $_POST['digito']);
      }

      if ($_POST['digito'] != '=') {
        $_SESSION['calc'] = sprintf('%s%s', $_SESSION['calc'], $_POST['digito']);
      }

      if ($_POST['digito'] == '='
          &&
        ( strpos($_SESSION['calc'], '-') || strpos($_SESSION['calc'], '+') || strpos($_SESSION['calc'], '*') || strpos($_SESSION['calc'], '/') ) &&
        ( substr($_SESSION['calc'], -1) != '*' && substr($_SESSION['calc'], -1) != '+' && substr($_SESSION['calc'], -1) != '-'  && substr($_SESSION['calc'], -1) != '/')) 
        {
        $digito = $result= eval('return ' . $_SESSION['calc'] .';');
        $_SESSION['calc']=$digito;
      } else {
        $digito = $_SESSION['calc'];
      }

      if ($_POST['digito'] == 'CE') {
        unset($_SESSION['calc']);
        $digito = 0;
      }
    }
  ?>
<form method="POST">
        <div id="corpo">
            <input type="text" value="entra" name="entra" style="display:none;">
            <input type="text" disabled id="resultado" value="<?= !empty($digito) ? $digito : 0 ?>">
            <div id="linhaa">
                <input type="submit" value="7" name="digito" class="botao">
                <input type="submit" value="8" name="digito" class="botao">
                <input type="submit" value="9" name="digito" class="botao">
                <input type="submit" value="/" name="digito" class="botao">
            </div>
            <div id="linhab">
                <input type="submit" value="4" name="digito" class="botao">
                <input type="submit" value="5" name="digito" class="botao">
                <input type="submit" value="6" name="digito" class="botao">
                <input type="submit" value="*" name="digito" class="botao">
            </div>
            <div id="linhac">
                <input type="submit" value="1" name="digito" class="botao">
                <input type="submit" value="2" name="digito" class="botao">
                <input type="submit" value="3" name="digito" class="botao">
                <input type="submit" value="-" name="digito" class="botao">
            </div>
            <div id="linhad">
                <input type="submit" value="CE" name="digito" class="botao">
                <input type="submit" value="0" name="digito" class="botao">
                <input type="submit" value="=" name="digito" class="botao">
                <input type="submit" value="+" name="digito" class="botao">
            </div>
        </div>
    </form>
</body>

    
</body>

</html>