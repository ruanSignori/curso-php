<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<h2>Cadastrar usuário</h2>

<!-- O método POST, envia os dados do formulário através do corpo da mensagem encaminhada ao servidor-->
<form action="process.php" method="POST">
  <label for="">Nome</label>
  <input type="text" name="nome_cliente" placeholder="Digite o nome" required><br><br>

  <label for="">Email</label>
  <input type="email" name="email_cliente" placeholder="Digite o nome" required><br><br>

  <input type="submit" value="Cadastrar">

</form>


</body>
</html>
