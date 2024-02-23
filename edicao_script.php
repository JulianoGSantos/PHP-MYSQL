<?php
    include('database-connection.php');
    include('functions.php');
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $pessoas = [
        'id' => $id,
        'nome' => '',
        'endereco' => '',
        'telefone' => '',
        'email' => '',
        'data_nascimento' => '',
    ];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $pessoas['nome'] = $_POST['nome'];
    $pessoas['endereco'] = $_POST['endereco'];
    $pessoas['telefone'] = $_POST['telefone'];
    $pessoas['email'] = $_POST['email'];
    $pessoas['data_nascimento'] = $_POST['data_nascimento'];

    $arguments = $pessoas;
    if($id){
        $sql = "UPDATE pessoas
                SET nome = :nome, endereco = :endereco, telefone = :telefone, email = :email, data_nascimento = :data_nascimento
                WHERE id = :id;";
    }
    try{
        pdo($pdo, $sql);
        echo "<script>alert('Alteração cadastrada com sucesso')</script>";
        header("Location: pesquisa.php");
    }catch(PDOException $e){
        throw $e;
    }
}    
?>