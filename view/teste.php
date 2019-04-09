<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Teste</title>
</head>
<body>
    <div class="row">
      <form method="post" action="php_action/create.php" id="form" name="form" class="col-10">
        <div class="form-group">
          <input class="form-control" type="text" id="nome" name="nome" placeholder="NOME" required autofocus>
          <input class="form-control" type="text" id="idade" name="idade" placeholder="IDADE" required>
          <input class="form-control" type="number" id="cpf" name="cpf" placeholder="CPF" required>
          <input class="form-control" type="text" id="email" name="email" placeholder="EMAIL" onkeypress="formatarMoeda();" required>
          <input class="form-control" type="text" id="dendereco" name="endereco" placeholder="ENDERECO" required>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
        </div>
      </form>
    </div>
</body>
</html>