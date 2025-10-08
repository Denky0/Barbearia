<?php 

    include 'conexao.php';

    $codigo = $_GET['codigo'];

    $conexao->query("DELETE FROM agendamento WHERE codigo = codigo");

    header('location:index.php');

?>