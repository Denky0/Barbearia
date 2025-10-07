<h1>Cadastro</h1>
<form action="inserirCadastro.php" method="get">
    <div class="col-3 mb-2">
        <input type="text" class="form-control" name="nome" placeholder="Nome:">
    </div>
    <div class="col-3 mb-2">
        <input type="text" class="form-control" name="telefone" placeholder="Telefone:">
    </div>
    <div class="mb-3 d-flex align-items-center">
        <label class="me-3">Função:</label>
        <div class="form-check me-3">
            <input class="form-check-input" type="radio" name="funcao" value="cliente" required>
            <label class="form-check-label" for="cliente">Cliente</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="funcao" value="barbeiro" required>
            <label class="form-check-label" for="barbeiro">Barbeiro</label>
        </div>
    </div>
    <div class="d-flex">
        <input type="submit" class="btn btn-primary me-3" value="Cadastrar">
        <input type="reset" class="btn btn-danger" value="Limpar">
    </div>
</form>