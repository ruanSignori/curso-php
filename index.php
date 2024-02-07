<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  echo "<h1>Cookies</h1>";

  setcookie("visit", "true", (time() +  (7 * 24 * 3600)));

  // Se o cookie já existe, imprime na tela
  // Quando você acessa pela 1º vez, não vai aparecer nada
  if (isset($_COOKIE['visit'])) {
    echo $_COOKIE['visit'];
  }

  setcookie('loged', 'true', time() + (7 * 24 * 3600));
  if (isset($_COOKIE['loged'])) {
    echo "Usuário logado";
  } else {
    echo "Cookie inválido";
  }
  
  ?>

</body>
</html>
