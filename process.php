<?php 
  
  // Recuperar dados, método GET
  $nome_cliente = filter_input(INPUT_GET, "nome_cliente", FILTER_SANITIZE_STRING);

  $email_cliente = filter_input(INPUT_GET, "email_cliente", FILTER_SANITIZE_EMAIL);
  echo "Nome cliente $nome_cliente <br> Email: $email_cliente";
