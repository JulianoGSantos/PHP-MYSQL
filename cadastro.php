<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastro</h1>
                <form action="cadastro_script.php" method="post">
                    <div class="form-group mt-2">
                        <label for="nome">Nome Completo</label>
                        <input type="text" name="nome" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                    <label for="endereco">Endereço</label>
                        <input type="text" name="endereco" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                    <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                    <label for="email">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                    <label for="data_nascimento">Data de Nascimento</label>
                        <input type="date" name="data_nascimento" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <input type="submit" class="btn btn-primary">
                    </div>
                    <div class="form-group mt-2">
                        <a href="index.php" class="btn btn-info">ir para o início</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>