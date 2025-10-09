<?php

include "conexao.php";

$cliente = $conexao->query("SELECT * FROM pessoa WHERE funcao = 'cliente'");
$barbeiro = $conexao->query("SELECT * FROM pessoa WHERE funcao = 'barbeiro'");
$agendamentos = $conexao->query("SELECT * FROM agendamento");
$pessoas = $conexao->query("SELECT * FROM pessoa");

?>

<h1>Gerenciamento</h1>
<table class="table table-light table-striped">
    <thead>
        <th scope="col">NOME</th>
        <th scope="col">FUNÇÂO</th>
        <th scope="col">TELEFONE</th>
        <th scope="col">AÇÔES</th>
    </thead>
<<<<<<< HEAD

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
            <a class="btn btn-danger btn-sm" href='delete.php?codigo=$agendamento->codigo'>
                <p class='card-text'>Deletar</p>
            </a>
        </td>
    </tr>
=======
    <tbody>

        <?php
        if ($pessoas->num_rows > 0) {
            while ($pessoa = $pessoas->fetch_object()) {
                echo "
                    <tr>
                        <td>
                            $pessoa->nome
                        </td>
                        <td>
                            $pessoa->funcao
                        </td>
                        <td>
                            $pessoa->telefone
                        </td>
                        <td>
                            <a href='editarP.php?codigo=$pessoa->id' class='btn btn-success btn-sm'>Editar</a>
                            <a href='deleteP.php?id=$pessoa->id' class='btn btn-danger btn-sm'>Excluir</a>
                        </td>
                    </tr>
                ";
            }
        }


        ?>

    </tbody>
>>>>>>> 132afec0157f3a62d49d6e6e0b1b87ee872270ef
</table>