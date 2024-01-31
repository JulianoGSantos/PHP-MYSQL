<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php
                    include('database-connection.php');
                    $nome = $_POST['nome'];
                    $endereco = $_POST['endereco'];
                    $telefone = $_POST['telefone'];
                    $email = $_POST['email'];
                    $data_nascimento = $_POST['data_nascimento'];

                    $sql = "INSERT INTO pessoas(nome, endereco, telefone, email, data_nascimento) VALUES('{$nome}', '{$endereco}', '{$telefone}','{$email}', '{$data_nascimento}')";
                    $res = $pdo->query($sql);

                    if ($res == true) {
                        echo "<script>alert('$nome cadastrado com sucesso')</script>";
                    } else {
                        echo "<script>alert('Não foi possível cadastrar')</script>";
                    }

                ?>
                <div class="row g-6 justify-content-center mt-5">
                    <div class="col-2 p-1">
                        <a href="javascript:history.back(-1)" class="btn btn-primary">voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>