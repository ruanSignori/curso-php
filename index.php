<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $a = 5;

  while(0) // Não vai ser executado pois o PHP considera 0 como um "false";
  while ($a--) {
    echo "1";
  };
  ?>

</body>
</html>
