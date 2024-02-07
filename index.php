<?php 
  session_start(); // Deve ser a primeira instrução da página
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    // Cookie são salvos pelo o lado do cliente, e a sessão pelo o lado do servidor
    // Depois que o usuário fechar o navegador, a sessão é encerrada 
    //Cria sessão
    $id = $_SESSION['id'] = 3;
    $name = $_SESSION['name'] = 'Ruan';

    if (isset($_SESSION['id'])) {
      echo "ID usuário: $id <br> Nome: $name";
    }

    // Excluir a sessão
    unset($_SESSION['id'], $_SESSION['name']);
  ?>

</body>
</html>
