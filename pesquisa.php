<?php
        include("database-connection.php");
        $busca = $_POST['busca'];

        $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$busca%'";
        $statement = $pdo->query($sql);
        $clientes = $statement->fetchAll();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Pesquisa</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">Pesquisar</a>
            <form class="d-flex" action="pesquisa.php" method="post" role="search">
            <input class="form-control me-2" name="busca" type="search" placeholder="Nome" aria-label="busca" autofocus>
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
        </div>
    </nav>
        <table class="table table-dark table-hover">   
            <thead>
                <tr>
                <th scope="col">Cód</th>    
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>
            </div>
            <tbody>
                <?php foreach($clientes as $cliente){ ?>
                <tr>
                    <td scope="col"><?= htmlspecialchars($cliente['cod_pessoa'])?></td>    
                    <td scope="col"><?= htmlspecialchars($cliente['nome'])?></td>
                    <td scope="col"><?= htmlspecialchars($cliente['endereco'])?></td>
                    <td scope="col"><?= htmlspecialchars($cliente['telefone'])?></td>
                    <td scope="col"><?= htmlspecialchars($cliente['email'])?></td>
                    <td scope="col"><?= htmlspecialchars(date('d-m-Y', strtotime($cliente['data_nascimento'])))?></td>
                    <td scope="col"><a href="edicao.php?id=($cliente['cod_pessoa'])" class="p-4"><img src="/img/pen.png" alt="editar" width="20px"></a><a href="#"><img src="/img/trash.png" alt="deletar" width="20px"></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    <div class="form-group mt-2 mb-2 p-2">
        <a href="index.php" class="btn btn-info">ir para o início</a>
    </div>
</body>
</html>