<h1>Cadastro</h1>
<form action="inserirCadastro.php" method="get">
    <div class="row">
        <div class="col-2">
            <input type="text" class="form-control mb-2" name="nome" placeholder="Nome: ">
        </div>
        <div class="col-2">
            <input type="text" class="form-control mb-2" name="telefone" placeholder="Telefone: ">
        </div>
        <div class="col-1">
            <input type="radio" name="funcao" value="barbeiro" required>
            <label for="barbeiro">Barbeiro</label><br>
            <input type="radio" name="funcao" value="cliente" required>
            <label for="cliente">Cliente</label>
        </div>
    </div>
    <input type="submit" class="btn btn-primary col-1" value="Cadastrar">
    <input type="submit" class="btn btn-danger ms-3 col-1" value="Limpar">
</form>