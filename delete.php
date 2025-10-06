<?php 

    include 'conexao.php';

    $telefone = $_GET['telefone'];

    $conexao->query("DELETE FROM consulta WHERE $telefone = telefone");

    header('location:index.php');

?>