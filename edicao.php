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
    $id = filter_input(INPUT_GET, 'cod_pessoa', FILTER_VALIDATE_INT);
    if(!$id){
        include 'page-not-found.php';
    }

    $sql = "SELECT * FROM pessoas WHERE cod_pessoa = :cod_pessoa;";
    $statement = $pdo->prepare($sql);
    $statement->bindValue('cod_pessoa', $id, PDO::PARAM_INT);
    $statement->execute([':cod_pessoa' => $id]);
    $pessoas = $statement->fetch();

    if(!$pessoas){
        include 'page-not-found.php';
    }
  ?>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Edição</h1>
                <form action="edicao_script.php?id=<?= $id ?>" method="post">
                    <div class="form-group mt-2">
                        <label for="nome">Nome Completo</label>
                        <input type="text" name="nome" class="form-control" value="<?= htmlspecialchars($pessoas['nome'])?>">
                    </div>
                    <div class="form-group mt-2">
                    <label for="endereco">Endereço</label>
                        <input type="text" name="endereco" class="form-control" value="<?= htmlspecialchars($pessoas['endereco'])?>">
                    </div>
                    <div class="form-group mt-2">
                    <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" class="form-control" value="<?= htmlspecialchars($pessoas['telefone'])?>">
                    </div>
                    <div class="form-group mt-2">
                    <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($pessoas['email'])?>">
                    </div>
                    <div class="form-group mt-2">
                    <label for="data_nascimento">Data de Nascimento</label>
                        <input type="date" name="data_nascimento" class="form-control" value="<?= htmlspecialchars($pessoas['data_nascimento'])?>">
                    </div>
                    <div class="form-group mt-2">
                        <input type="submit" name="button" class="btn btn-primary" value="salvar alterações">
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