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
                    
                    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
                    $nome = $_POST['nome'];
                    $endereco = $_POST['endereco'];
                    $telefone = $_POST['telefone'];
                    $email = $_POST['email'];
                    $data_nascimento = $_POST['data_nascimento'];

                    if($id && $nome && $endereco && $telefone && $email && $data_nascimento){
                        try{
                            $pdo->beginTransaction();
                            $sql = $pdo->prepare("UPDATE pessoas
                                    SET nome = :nome, endereco = :endereco, telefone = :telefone, email = :email, data_nascimento = :data_nascimento
                                    WHERE id = :id;");

                            $sql->bindValue(':nome',$nome);
                            $sql->bindValue(':endereco',$endereco);
                            $sql->bindValue(':telefone',$telefone);
                            $sql->bindValue(':email',$email);
                            $sql->bindValue(':data_nascimento',$data_nascimento);
                            $sql->bindValue(':id',$id);

                            $pdo->commit();

                            header("Location: pesquisa.php");
                            exit;
                        }catch(PDOException $e){
                            throw $e;
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>