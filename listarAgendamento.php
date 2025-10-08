<div class="row">

<?php

    include 'conexao.php';
    $agendamentos = $conexao->query('select * from agendamento');

    while($agendamento = $agendamentos->fetch_object())
    echo "<div class='card m-2' style='width: 18rem;'>
        <img src='https://img.freepik.com/vetores-gratis/calendario-de-glifos-com-marca-de-verificacao_78370-7210.jpg?semt=ais_hybrid&w=740&q=80' class='card-img-top' alt='...'>
        <div class='card-body'>
        <h5 class='card-text'>$agendamento->codigo</h5>
        <p class='card-text'>$agendamento->servico</p>
        <p class='card-text'>$agendamento->status</p>
        </div>
    </div>"

?>
