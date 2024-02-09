<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edição</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <?php
    include('database-connection.php');

    $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $cod_pessoa";
    
    
  ?>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastro</h1>
                <form action="edicao_script.php" method="post">
                    <div class="form-group mt-2">
                        <label for="nome">Nome Completo</label>
                        <input type="text" name="nome" class="form-control" value="<?=$_POST['nome']?>">
                    </div>
                    <div class="form-group mt-2">
                    <label for="endereco">Endereço</label>
                        <input type="text" name="endereco" class="form-control" value="$endereco">
                    </div>
                    <div class="form-group mt-2">
                    <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" class="form-control" value="$telefone">
                    </div>
                    <div class="form-group mt-2">
                    <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" value="$email">
                    </div>
                    <div class="form-group mt-2">
                    <label for="data_nascimento">Data de Nascimento</label>
                        <input type="date" name="data_nascimento" class="form-control" value="$data_nascimento">
                    </div>
                    <div class="form-group mt-2">
                        <input type="submit" class="btn btn-primary" value="salvar alterações">
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