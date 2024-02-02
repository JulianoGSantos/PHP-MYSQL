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
            <input class="form-control me-2" name="busca" type="search" placeholder="Nome" aria-label="busca">
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
        </div>
    </nav>
    <?php foreach($clientes as $cliente){ ?>
        <table border="2">
            <tr><td><?= htmlspecialchars($cliente['cod_pessoa']) ?></td>
            <td><?= htmlspecialchars($cliente['nome']) ?></td>
            <td><?= htmlspecialchars($cliente['endereco']) ?></td>
            <td><?= htmlspecialchars($cliente['telefone']) ?></td>
            <td><?= htmlspecialchars($cliente['email']) ?></td>
            <td><?= htmlspecialchars($cliente['data_nascimento']) ?></td></tr>
        </table>
        
    <?php } ?>
</body>
</html>