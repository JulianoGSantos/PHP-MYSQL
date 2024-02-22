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
                    if($id){
                        $sql =  "UPDATE pessoas
                                SET nome = :nome, endereco = :endereco, telefone = :telefone, email = :email, data_nascimento = :data_nascimento
                                WHERE id = :id:";
                    }else{
                        unset($pessoas['id']);
                        $sql = "INSERT INTO pessoas (nome, endereco, telefone, email, data_nascimento) VALLUES(:nome, :endereco, :telefone, :email, :data_nascimento);";
                    }
                    
                ?>
            </div>
        </div>
    </div>
</body>
</html>