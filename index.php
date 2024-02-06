<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $a = 3;

  if ($a == 2) {
    echo var_dump($a) . '1º condição';
  } elseif ($a == 3) {
    echo var_dump($a) . '2º condição';
  } else {
    echo var_dump($a) . 'Nenhuma condição';
  };
  ?>

</body>
</html>
