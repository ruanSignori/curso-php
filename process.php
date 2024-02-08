<?php 
  
  // Recuperar dados, método GET
  $nome_cliente = filter_input(INPUT_POST, "nome_cliente", FILTER_SANITIZE_STRING);

  $email_cliente = filter_input(INPUT_POST, "email_cliente", FILTER_SANITIZE_EMAIL);
  echo "Nome cliente $nome_cliente <br> Email: $email_cliente";

  # $name = $_POST['$nome_cliente']; // Esse jeito não é a melhor forma de receber os dados de um formulário, é mais vulnerável

  $data = filter_input_array(INPUT_POST, FILTER_DEFAULT); // Receber todos os dados do formulário
  echo var_dump($data);

  echo "Nome cliente". $data['nome_cliente']. "<br> Email:" . $data['email_cliente']. " ";
