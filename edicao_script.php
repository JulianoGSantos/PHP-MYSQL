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
                    if($id){
                        echo "deu certo</br>";
                        var_dump($id);
                    }else{
                        echo "deu errado";
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>