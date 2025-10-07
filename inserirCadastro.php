<?php 

    include 'conexao.php';

    $nome = $_GET['nome'];
    $telefone = $_GET['telefone'];
    $funcao = $_GET['funcao'];
    
    echo "<h1>Cadastro Realizado</h1>";
    echo $nome;
    echo "<br>";
    echo $telefone;
    echo "<br>";
    echo $funcao;

    if ($funcao === 'cliente' || $funcao === 'barbeiro') {
        $insert = "INSERT INTO pessoa (nome, telefone, funcao) VALUES ('$nome', '$telefone', '$funcao')";
    }
    
    $conexao->query($insert);

    header('Location:index.php');

?>