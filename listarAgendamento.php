<div class="row">

    <?php

    include 'conexao.php';
    $agendamentos = $conexao->query('select * from agendamento');

<<<<<<< HEAD
    while($agendamento = $agendamentos->fetch_object())
    echo "<div class='card m-2' style='width: 18rem;'>
        <img src='https://img.freepik.com/vetores-gratis/calendario-de-glifos-com-marca-de-verificacao_78370-7210.jpg?semt=ais_hybrid&w=740&q=80' class='card-img-top' alt='...'>
        <div class='card-body'>
        <h5 class='card-text'>$agendamento->codigo</h5>
        <p class='card-text'>$agendamento->servico</p>
        <p class='card-text'>$agendamento->status</p>
        <p class='card-text'>$agendamento->hora</p>
        <p class='card-text'>$agendamento->dia</p>
        </div>
    </div>"
=======
    if($agendamentos->num_rows > 0){
         while ($agendamento = $agendamentos->fetch_object())
        echo "<div class='card m-2' style='width: 18rem;'>
                <img src='https://img.freepik.com/vetores-gratis/calendario-de-glifos-com-marca-de-verificacao_78370-7210.jpg?semt=ais_hybrid&w=740&q=80' class='card-img-top' alt='...'>
                <div class='card-body'>
                <p class='card-text'>Barbeiro: $agendamento->barbeiro</p>
                <p class='card-text'>Cliente: $agendamento->cliente</p>
                <p class='card-text'>Serviço: $agendamento->servico</p>
                <p class='card-text'>Horário: $agendamento->hora</p>
                <p class='card-text'>Dia: $agendamento->dia</p>
                <p class='card-text'>Status: $agendamento->status</p>
                <a href='editar.php?codigo=$agendamento->codigo' class='btn btn-success btn-sm'>Editar</a>
                <a href='delete.php?codigo=$agendamento->codigo' class='btn btn-danger btn-sm'>Excluir</a>
                </div>
            </div>";
    }else{
        echo "<h1>Nenhum agendamento encontrado!</h1>";
    }
>>>>>>> 132afec0157f3a62d49d6e6e0b1b87ee872270ef

    ?>
    
</div>