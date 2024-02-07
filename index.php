<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $code = 'curso php';

  echo "<h2>Passagem por valor</h2>";
  function salary($salaryValue) {
    // Passagem de parâmetro por valor
    $salaryValue += 50; // Este valor só é alterado dentro da função, não afeta o valor original da variável;
    echo "Função salário com aumento $salaryValue <br>";
  }

  $salaryValue = 8300; // Este valor não vai ser alterado, somente

  salary($salaryValue);

  echo "Salário fora da função: $salaryValue";
  echo "<hr>";

  function salario_a($num) {
    $num += 100;
    echo "Function: Salário com aumento $num <br>";
    return $num;
  };

  $salario = 8500.47;
  $salarioAumento = salario_a($salario);

  echo "Fora da função: $salarioAumento";
  echo $salario;

  ?>

</body>
</html>
