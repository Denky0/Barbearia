<?php 

    include "conexao.php";

    $cliente =  $conexao->query("SELECT * FROM pessoa WHERE funcao = 'cliente'");
    $barbeiro =  $conexao->query("SELECT * FROM pessoa WHERE funcao = 'barbeiro'");
    
?>

<h1>Agendamento</h1>
<form action="inserirAgendamento.php">
    <div class="row">
        <div class="col-2">
            <select class="form-control mb-2" name="cliente">
                <?php 
                    while($pessoa = $cliente->fetch_object()){
                        echo "<option value='$pessoa->nome'>$pessoa->nome</option>";
                    }
                ?>
            </select>
        </div>
        <div class="col-2">
            <select class="form-control mb-2" name="barbeiro">
                <?php
                    while($pessoa = $barbeiro->fetch_object()){
                        echo "<option value='$pessoa->nome'>$pessoa->nome</option>";
                    }
                ?>
            </select>
        </div>
        <div class="col-2">
            <input type="text" class="form-control mb-2" name="servico" placeholder="Corte, Barba, Pacote">
        </div>
        <div class="col-2">
            <input type="date" class="form-control mb-2" name="dia">
        </div>
        <div class="col-2">
            <input type="time" class="form-control mb-2" name="hora">
        </div>
        <div class="col-2">
            <input type="text" class="form-control mb-2" name="status" placeholder="Status:">
        </div>
    </div>
    <input type="submit" class="btn btn-primary col-1" value="Salvar">
    <input type="submit" class="btn btn-danger ms-3 col-1" value="Cancelar">
</form>