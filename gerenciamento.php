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
</table>