<?php

include "conexao.php";

$cliente =  $conexao->query("SELECT * FROM pessoa WHERE funcao = 'cliente'");
$barbeiro =  $conexao->query("SELECT * FROM pessoa WHERE funcao = 'barbeiro'");
$servico =  $conexao->query("SELECT * FROM agendamento");
$dia =  $conexao->query("SELECT * FROM agendamento");
$status =  $conexao->query("SELECT * FROM agendamento");
$hora =  $conexao->query("SELECT * FROM agendamento");

?>

<h1>Gerenciamento</h1>
<table class="table table-light table-striped">
    <thead>
        <tr>
            <th scope="col">BARBEIRO</th>
            <th scope="col">CLIENTE</th>
            <th scope="col">SERVIÇO</th>
            <th scope="col">DATA/HORA</th>
            <th scope="col">STATUS</th>
            <th scope="col">AÇÔES</th>
        </tr>
    </thead>
    
    <tr class="table-active">
        <td>
            <?php
            while ($pessoa = $barbeiro->fetch_object()) {
                echo "<p>$pessoa->nome</p>";
            }
            ?>
        </td>
        <td>
            <?php
            while ($pessoa = $cliente->fetch_object()) {
                echo "<p>$pessoa->nome</p>";
            }
            ?>
        </td>
        <td>
            <?php
            while ($agendamento = $servico->fetch_object()) {
                echo "<p>$agendamento->servico</p>";
            }
            ?>
        </td>
        <td>
            <?php
            while ($agendamento = $dia->fetch_object()) {
                echo "<p>$agendamento->dia</p>";
            }
            ?>
        </td>
        <td>
            <?php
            while ($agendamento = $status->fetch_object()) {
                echo "<p>$agendamento->status</p>";
            }
            ?>
        </td>
        <td>
            <button class="btn btn-success btn-sm">Editar</button>
            <button class="btn btn-danger btn-sm">Excluir</button>
        </td>
    </tr>
</table>