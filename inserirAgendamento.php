<?php 
    
    include 'conexao.php';

    $codigo = $_GET['codigo'];
    $servico = $_GET['servico'];
    $dia = $_GET['dia'];
    $status = $_GET['status'];
    $barbeiro = $_GET['barbeiro'];
    $cliente = $_GET['cliente'];
    $hora = $_GET['hora'];

    echo "<h1>Agendamento</h1>";
    echo $servico;
    echo "<br>";
    echo $dia;
    echo "<br>";
    echo $status;
    echo "<br>";
    echo $barbeiro;
    echo "<br>";
    echo $cliente;
    echo "<br>";
    echo $hora;

    $insert = "INSERT INTO agendamento (codigo, servico, dia, status, barbeiro, cliente, hora) VALUES('', '$servico', '$dia', '$status', '$barbeiro', '$cliente', '$hora')";

    $conexao->query($insert);

    header('Location:index.php');

?>