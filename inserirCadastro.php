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

    if ($funcao == 'cliente') {
        $insert = "INSERT INTO cliente VALUES ('$nome', '$telefone', '$funcao')";
    } elseif ($funcao == 'barbeiro') {
        $insert = "INSERT INTO barbeiro VALUES ('$nome', '$telefone', '$funcao')";
    } else {
        echo "Deu merda ae";
    }

?>