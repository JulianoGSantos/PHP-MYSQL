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
    <?php
        include("database-connection.php");
        $busca = $_POST['busca'];

        $sql = "SELECT nome, endereco, telefone, email, data_nascimento FROM pessoas cod_pessoas = :id;";
        $statement = $pdo->prepare($sql);
        $statement->execute(['cod_pessoa'=>$cod_pessoa]);
        $pessoas = $statement->fetch();        
        if(!$pessoas){
            include 'page-not-found.php';
        }

        var_dump($pessoas);

    ?>

</body>
</html>