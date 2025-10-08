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
       <th scope="col">CLIENTE</th> 
        <th scope="col">TELEFONE</th>
        <th scope="col">SERVIÇO</th>
        <th scope="col">DATA/HORA</th>
        <th scope="col">STATUS</th>
        <th scope="col">AÇÔES</th>
    </thead>

    <tbody>

        <?php
            if ($agendamentos->num_rows > 0){
                while ($agendamento = $agendamentos->fetch_object()) {
                    if ($pessoas->num_rows > 0){
                        while($pessoa = $pessoas->fetch_object()) {
                            echo "
                                <tr>
                                    <td>
                                        $agendamento->cliente
                                    </td>
                                    <td>
                                        $pessoa->telefone
                                    </td>
                                    <td>
                                        $agendamento->servico
                                    </td>
                                    <td>    
                                        $agendamento->dia |
                                        $agendamento->hora
                                    </td>
                                    <td>  
                                        $agendamento->status
                                    </td>
                                    <td>
                                        <a href='editar.php?codigo=$agendamento->codigo' class='btn btn-success btn-sm'>Editar</a>
                                        <a href='delete.php?codigo=$agendamento->codigo' class='btn btn-danger btn-sm'>Excluir</a>
                                    </td>
                                </tr>
                            ";
                        }
                    }
                    
            }
                }

        ?>

    </tbody>
</table>