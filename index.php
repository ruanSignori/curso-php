<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  echo "Passagem por referência <br>";

  function salario(&$num) {
    // Quando a função ser invocada, vai alterar o valor da variável que é passada como parâmetro;
    $num += 200;
    echo "Function: $num <br>";
  }

  $salariob = 2300;

  salario($salariob);

  echo "$salariob";

  ?>

</body>
</html>
