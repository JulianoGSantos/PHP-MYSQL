<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php
                    include('database-connection.php');
                    
                    $id = filter_input(INPUT_GET, 'cod_pessoa', FILTER_VALIDATE_INT);
                    if(!$id){
                        include 'page-not-found.php';
                    }

                    if($id){
                        $sql = "UPDATE pessoas
                                SET nome = :nome, endereco = :endereco, telefone = :telefone, email = :email, data_nascimento = :data_nascimento
                                WHERE cod_pessoa = :cod_pessoa;";
                        $res = $pdo->query($sql);

                        if ($res == true) {
                            echo "<script>alert('Edição de $nome salva com sucesso')</script>";
                        } else {
                            echo "<script>alert('Não foi possível salvar as alterações')</script>";
                        }
                    }
                ?>
                <div class="row g-4 justify-content-center mt-5">
                    <div class="col-1 p-1">
                        <a href="javascript:history.back(-1)" class="btn btn-primary">voltar</a>
                    </div>
                    <div class="col-3 p-1">
                    <a href="index.php" class="btn btn-info">ir para o início</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>