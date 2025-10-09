<?php 

    include 'conexao.php';

    $id = $_GET['id'];

    $conexao->query("DELETE FROM pessoa WHERE id = $id");

    header('location:index.php');

?>