<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  function a($num) {
    if ($num > 0) {
      echo "valor $num <br>";
      $num--;
      a($num);
    }
   

  };  


  a(10);

  ?>

</body>
</html>
