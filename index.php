<?php 

  $result = "2";
  $result = $result + 1;

  $num = 11;

  $num = (double) $num;

  var_dump($result); // Imprime o tipo e o valor da variável
  var_dump($num);

  echo $result . $num . "<br>";

  $result2 = '3.5';

  echo (double) $result2 ;

  # O PHP faz a verificação de tipo portanto se somar "2" + 1 vai resultar 3 